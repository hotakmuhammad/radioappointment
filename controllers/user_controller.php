<?php

//include_once ("models/unifinder_model.php");


include_once("models/user_model.php");
include_once("entities/user_entity.php");

class UserCtrl extends Ctrl {

    
    public function registration() {

        $objUser = new User();
        if(count($_POST) > 0) {
            // var_dump($_POST); 
            // exit();
            $objUser->hydrate($_POST);

            $this->_arrErrors = $this->_verifyInfos($objUser);

            $this->_arrErrors = array_merge($this->_arrErrors, $this->_verifyPassword($objUser->getPassword()));

            if(count($this->_arrErrors) == 0){
                //$objUser->setPwd(password_hash($objUser->getPassword(), PASSWORD_DEFAULT));
                $objUserModel	= new UserModel;
                if ($objUserModel->registration($objUser)){
                    header("Location:".parent::BASE_URL."page/appointment");
                }else{
                    $this->_arrErrors[] = "L'insertion s'est mal passée";
                }
            }
        } else { // Formulaire non envoyé
            $objUser->setName("");
            $objUser->setFirstName("");
            $objUser->setEmail(""); 
            $objUser->setPhone("");
            $objUser->setRole("");
            $objUser->setPassword("");
            
        }

        $this->_arrData["strPage"]     = "registration";

        $this->_arrData["strTitle"] = "Inscription";

        $this->_arrData["strDesc"]     = "Page d'inscription";
        $this->_arrData["objUser"]		= $objUser;
        $this->displayTemplate("registration");
    }
    
    public function login() {

        $this->_arrErrors = array();

        $strEmail 	= $_POST['email']??"";
        $strPassword 	= $_POST['password']??"";

        if(count($_POST) > 0) {
            $objUserModel = new UserModel;
            // var_dump($this->_arrErrors);
            $arrUser = $objUserModel->searchUser($strEmail, $strPassword);

            if($arrUser === false) {
                $this->_arrErrors[] = "Erreur de connexion";

				}else{
                    if (isset($arrUser['user_isbanned']) && $arrUser['user_isbanned'] == 'ISBANNED') {
                        session_destroy();

                        header('Location:'.parent::BASE_URL.'error/banned');

                        $arrErrors[] = "Your account has been banned, please contact the admin as quick as possable";
                    } else {

                        $_SESSION['user'] = $arrUser;
                        header("Location:".parent::BASE_URL);
                        exit;
                    }
            }
        }



        $this->_arrData["strPage"] = "login";

        $this->_arrData["strTitle"] = "Login";

        $this->_arrData["strDesc"] = "Page de connexion";
        $this->_arrData["email"]	= $strEmail;
        $this->displayTemplate("login");

	}

    
    public function logout() {

        session_destroy();
        header("Location:".parent::BASE_URL);
    }
    

    public function edit_profile() {
        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
            header('Location:'.parent::BASE_URL.'error/show403');
            exit;
        }
        
        $objUser = new User; 
        $intUserId = $_SESSION['user']['user_id'];
        $objUserModel = new UserModel;
        $arrUser = $objUserModel->get($intUserId); 
        
        if (!$arrUser || empty($arrUser['user_password'])) {
            $this->_arrErrors[] = "Utilisateur non trouvé ou mot de passe manquant";
            $this->_arrData["strPage"] = "edit_profile";
            $this->_arrData["strTitle"] = "Editer le profil";
            $this->_arrData["strDesc"] = "Page de modification du profil";
            $this->_arrData["objUser"] = $objUser;
            $this->displayTemplate("edit_profile");
            return;
        }
        // $objUser->setRole("");
        $objUser->hydrate($arrUser);
        var_dump($objUser);
        $strActualMail = $objUser->getEmail(); 
        $strOldPassword = $objUser->getPassword();

    
        if (count($_POST) > 0) {
            // echo "Submitted Old Password: ";
            // var_dump($_POST['oldPassword']);
    
            $boolVerifyMail = ($strActualMail != ($_POST['email'] ?? $strActualMail));
            $this->_arrErrors = $this->_verifyInfos($objUser, $boolVerifyMail);
    
            $objUser->hydrate($_POST);
            var_dump($objUser);
            if (!empty($_POST['oldPassword'])) {
                if (!password_verify($_POST['oldPassword'], $strOldPassword)) {
                    $this->_arrErrors['oldPassword'] = "Le mot de passe actuel est incorrect";
                    echo "Password Verification Result: ";
                    var_dump(password_verify($_POST['oldPassword'], $strOldPassword));
                } elseif (!empty($_POST['password'])) {
                    $this->_arrErrors = array_merge($this->_arrErrors, $this->_verifyPassword($_POST['password']));
                    if (count($this->_arrErrors) == 0) {
                        $objUser->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
                    }
                }
            } elseif (!empty($_POST['password'])) {
                $this->_arrErrors['oldPassword'] = "Veuillez entrer votre mot de passe actuel pour modifier le mot de passe";
            }
    
            if (count($this->_arrErrors) == 0) {
                if ($objUserModel->update($objUser)) {
                    $_SESSION['user']['user_firstname'] = $objUser->getFirstName();
                    $_SESSION['user']['user_name'] = $objUser->getName();
                    $_SESSION['user']['user_email'] = $objUser->getEmail();
                    // header("Location:".parent::BASE_URL."page/appointment");
                    exit;
                } else {
                    $this->_arrErrors[] = "La mise à jour a échoué";
                }
            }
        }
    
        $this->_arrData["strPage"] = "edit_profile";
        $this->_arrData["strTitle"] = "Editer le profil"; 
        $this->_arrData["strDesc"] = "Page de modification du profil";
        $this->_arrData["objUser"] = $objUser;
        $this->displayTemplate("edit_profile");
    }

    public function edit_user() {

        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '' ||
        ($_SESSION['user']['user_role'] != 'ADMIN' && $_SESSION['user']['user_role'] != 'SUPERADMIN')) {
            header('Location:'.parent::BASE_URL.'error/show403');
            // exit;
        }
        $intUserId = $_GET['id']??0;

        $objUser = new User;
        var_dump($objUser);
        $objUserModel = new UserModel;
        var_dump($objUserModel);
        $arrUser = $objUserModel->get($intUserId);
        if($arrUser === false) {
                $objUser->setId(0);
                $objUser->setName("");
                $objUser->setFirstName("");
                $objUser->setEmail("");
                $objUser->setPhone("");
                $objUser->setRole("USER");
                // $objUser->setPassword("");
                $objUser->setIsBanned("ISNOTBANNED");
			}else{
				/* j'hydrate en fonction de l'article */
            $objUser->hydrate($arrUser);
            var_dump($objUser);
            //     if ($_SESSION['user']['user_role'] != "ADMIN" &&
            //         $_SESSION['user']['user_role'] != 'SUPERADMIN' &&
            //         $_SESSION['user']['user_id'] != $objUser->getId()){
            //     header("Location:".parent::BASE_URL."error/show403");
            // }
            }
            // $arrRoles = $objUserModel->getRoles();
            // $arrBanStatuses = $objUserModel->getBanStatuses();

            if(count($_POST) > 0) {

                $objUser->hydrate($_POST);
                var_dump($objUser);
                $this->_arrErrors = [];
                if ($objUser->getName() == ""){
					$this->_arrErrors['name'] = "Name is required";
				}
				if ($objUser->getFirstName() == ""){
					$this->_arrErrors['firstName'] = "First name is required";
				}
				if ($objUser->getPhone() == ""){
					$this->_arrErrors['phone'] = "PhPhone is requiredone";
				}
                if ($_SESSION['user']['user_role'] !== 'SUPERADMIN' && $objUser->getRole() === 'SUPERADMIN') {
                    $this->_arrErrors['isBanned'] = "Only SUPERADMIN can assign SUPERADMIN role";
                }
				if (!in_array($objUser->getIsBanned(), ['ISBANNED', 'ISNOTBANNED'])){
					$this->_arrErrors['role'] = "Invalid ban status. Must be ISBANNED or ISNOTBANNED";
				}

                // $this->_arrErrors = $this->_verifyInfos($objUser, false);
                if ($_SESSION['user']['user_role'] !== 'SUPERADMIN' && $objUser->getRole() === 'SUPERADMIN') {
                    $this->_arrErrors['role'] = "Only SUPERADMIN can assign SUPERADMIN role";
                }
                if (count($this->_arrErrors) == 0) {
                    // if($objUser->getId() === 0) {
                        // if ($objUserModel->insert($objUser)){
						// 	header("Location:".parent::BASE_URL."user/manage");
						// }else{
						// 	$this->_arrErrors[] = "L'insertion s'est mal passée";
						// }
                    // }
                    // else {

                        if ($objUserModel->moderate($objUser)) {
                            // if ($_SESSION['user']['user_id'] === $objUser->getId()) {
                            //     $_SESSION['user']['user_name'] = $objUser->getName();
                            //     $_SESSION['user']['user_firstname'] = $objUser->getFirstName();
                            //     $_SESSION['user']['user_email'] = $objUser->getEmail();
                            // }
                            // header("Location:".parent::BASE_URL."user/manage");
                        } else {
                            $this->_arrErrors[] = "La modification s'est mal passée";
                        }
                    }
                // }
        }
        // $this->_arrData["objUser"] = $objUser;
        // if($objUser->getId() === 0) {
            $this->_arrData["strPage"] = "edit_user";
            $this->_arrData["strTitle"] = "Editer le profil"; 
            $this->_arrData["strDesc"] = "Page de modification du profil";
            $this->_arrData["objUser"] = $objUser;
            $this->displayTemplate("edit_user");
        // }
    }
    
    private function _verifyInfos(object $objUser, $boolVerifyMail = true) {

        
        $arrErrors = array();
        // $intUserId = $_SESSION['user']['user_id'];
        if($objUser->getName() == "") {
            $arrErrors['lastName'] = "Le prènom est obligatoire.";
        }elseif(strlen($objUser->getName()) < 3){
            $arrErrors['lastName'] = "Le prènom est trop court.";
        }
        if($objUser->getFirstName() == "") {
            $arrErrors['firstName'] = "Le nom est obligatoire.";
        }elseif(strlen($objUser->getFirstName()) < 3){
            $arrErrors['firstName'] = "Le nom est trop court.";
        }



        if($objUser->getPhone() == "") {
            $arrErrors['phone'] = "Le numéro du téléphone est obligatoire.";
        }elseif(strlen($objUser->getPhone()) < 9){
            $arrErrors['phone'] = "Le numéro du téléphone n'est pas bon.";
        }

        if($objUser->getEmail() == "") {
            $arrErrors['email'] = "L'adress mail est obligatoire";
        }elseif(!filter_var($objUser->getEmail(), FILTER_VALIDATE_EMAIL)){
            $arrErrors['email'] = "Le mail n'est pas correct";
        }elseif($boolVerifyMail) {
            $objUserModel = new UserModel;

            $boolMailExists = $objUserModel->verifyEmail($objUser->getEmail());
             var_dump($boolMailExists);

            // if ($boolMailExists === true){
            //     $arrErrors['email'] = "Le mail est déjà utilisé";
            // }

            if ($boolMailExists === true && $objUser->getEmail() != $_SESSION['user']['user_email']) {
                $arrErrors['email'] = "Le mail est déjà utilisé";
            }
        } 
        return $arrErrors;
    }


    private function _verifyPassword(string $strPassword) {

        $arrErrors	= array();
			$password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{16,}$/"; 
				
			if ($strPassword == ""){
				$arrErrors['password'] = "Le mot de passe est obligatoire";
			}elseif(!preg_match($password_regex, $strPassword)){
				$arrErrors['password'] = "Le mot de passe doit faire minimum 16 caractères 
									et contenir une minuscule, une majuscule, un chiffre et un caractère";
			}elseif ($strPassword != $_POST['confirmPassword']){
				$arrErrors['password'] = "Le mot de passe et sa confirmation doivent être identiques";
			}
			return $arrErrors;
    }

    public function manage() {
        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
            header('Location:'.parent::BASE_URL.'error/show403');
            exit;
        }
        $objUserModel = new UserModel;
        $arrUsers = $objUserModel->getAll();

        $arrUsersToDisplay = array();
        $loggedInUserRole = $_SESSION['user']['user_role'];


        foreach($arrUsers as $arrUser) {
            $objUser = new User;
            $objUser->hydrate($arrUser);

            if ($loggedInUserRole === 'ADMIN' && $objUser->getRole() !== 'USER') {
                continue; 
            }
            $arrUsersToDisplay[] = $objUser;
        }

        $this->_arrData["strPage"] = "manage";
        $this->_arrData["strTitle"] = "Gestion des tous l'utilisateurs"; 
        $this->_arrData["strDesc"] = "Page de gestion des tous les utilisateurs";
        $this->_arrData["arrUsersToDisplay"] = $arrUsersToDisplay;
        // $this->_arrData["objUser"] = $objUser;
        $this->displayTemplate("manage");
    } 
    public function delete() { 
        $intUserId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        
        $objUserModel  = new UserModel(); 
        $objUserModel->delete($intUserId);
        header("Location:".parent::BASE_URL."user/manage");
    }
}
