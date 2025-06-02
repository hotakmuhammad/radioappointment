<?php
 
include_once("models/user_model.php");
include_once("entities/user_entity.php");

class UserCtrl extends Ctrl {

    
    public function registration() {

        $objUser = new User();
        if(count($_POST) > 0) {

            $objUser->hydrate($_POST);

            $this->_arrErrors = $this->_verifyInfos($objUser);

            $this->_arrErrors = array_merge($this->_arrErrors, $this->_verifyPassword($objUser->getPassword()));

            if(count($this->_arrErrors) == 0){ 
                $objUserModel	= new UserModel;
                if ($objUserModel->registration($objUser)){
                    header("Location:".parent::BASE_URL);
                }else{
                    $this->_arrErrors[] = "L'insertion s'est mal passée";
                }
            }
        } else {
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
        $this->_arrData['csrf']		= $this->_generateCsrfToken();
        $this->displayTemplate("login");

	}

    
    public function logout() {

        session_destroy();
        header("Location:".parent::BASE_URL);
    }
    

    public function edit_profile($user_id = null) {
        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
            header('Location:'.parent::BASE_URL.'error/show403');
            exit;
        }

        $loggedInUser = $_SESSION['user'];
        $isAdminOrSuperAdmin = in_array($loggedInUser['user_role'], ['ADMIN', 'SUPERADMIN']);
        $intUserId = $user_id ?? ($_GET['id'] ?? $loggedInUser['user_id']);

        if ($intUserId != $loggedInUser['user_id'] && !$isAdminOrSuperAdmin) {
            header('Location:'.parent::BASE_URL.'error/show403');
            exit;
        } 

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

        $objUser = new User; 
        $objUser->hydrate($arrUser); 
        $strActualMail = $objUser->getEmail(); 
        $strOldPassword = $objUser->getPassword();

        $this->_arrErrors = [];
    
        if (count($_POST) > 0) { 
    
            $boolVerifyMail = ($strActualMail != ($_POST['email'] ?? $strActualMail));
            
            $objUser->hydrate($_POST); 
            $this->_arrErrors = $this->_verifyInfos($objUser, $boolVerifyMail);
     
            if (!empty($_POST['oldPassword'])) {
                if (!password_verify($_POST['oldPassword'], $strOldPassword)) {
                    $this->_arrErrors['oldPassword'] = "Le mot de passe actuel est incorrect"; 
                } elseif (!empty($_POST['password'])) {
                    $this->_arrErrors = array_merge($this->_arrErrors, $this->_verifyPassword($_POST['password']));
                    if (count($this->_arrErrors) == 0) {
                        $objUser->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
                    }
                }
            } elseif (!empty($_POST['password'])) {
                $this->_arrErrors['oldPassword'] = "Veuillez entrer votre mot de passe actuel pour modifier le mot de passe";
            }

            if ($isAdminOrSuperAdmin) {
                if (isset($_POST['role'])) {
                    
                    if ($_POST['role'] === 'SUPERADMIN' && $loggedInUser['user_role'] !== 'SUPERADMIN') {
                        $this->_arrErrors['role'] = "Vous n'êtes pas autorisé à attribuer le rôle SUPERADMIN";
                    } else {
                        $objUser->setRole($_POST['role']);
                    }
                }
                if (isset($_POST['isBanned'])) {
                    $objUser->setIsBanned($_POST['isBanned']);
                }
            }
    
            if (count($this->_arrErrors) == 0) {
                if ($objUserModel->update($objUser)) {
                    if ($intUserId == $loggedInUser['user_id']) {
                        $_SESSION['user']['user_firstname'] = $objUser->getFirstName();
                        $_SESSION['user']['user_name'] = $objUser->getName();
                        $_SESSION['user']['user_email'] = $objUser->getEmail();
                    }

                    if($isAdminOrSuperAdmin) {
                        header("Location:".parent::BASE_URL."user/manage");
                    }else {
                        header("Location:".parent::BASE_URL."page/appointment");
                    }
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
        $this->_arrData["isAdminOrSuperAdmin"] = $isAdminOrSuperAdmin;
        $this->_arrData["isOwnProfile"] = ($intUserId == $loggedInUser['user_id']);
        $this->displayTemplate("edit_profile");
    }
 
    private function _verifyInfos(object $objUser, $boolVerifyMail = true) {

        
        $arrErrors = array();
        
        if($objUser->getName() == "") {
            $arrErrors['name'] = "Le nom est obligatoire.";
        }elseif(strlen($objUser->getName()) < 3){
            $arrErrors['name'] = "Le nom est trop court.";
        }


        if($objUser->getFirstName() == "") {
            $arrErrors['firstName'] = "Le prènom est obligatoire.";
        }elseif(strlen($objUser->getFirstName()) < 3){
            $arrErrors['firstName'] = "Le prènom est trop court.";
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
 
            if ($boolMailExists === true &&
                (!isset($_SESSION['user']) || $objUser->getEmail() != $_SESSION['user']['user_email'])
            ) {
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
        $this->displayTemplate("manage");
    } 
    public function delete() { 
        $intUserId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        
        $objUserModel  = new UserModel(); 
        $objUserModel->delete($intUserId);
        header("Location:".parent::BASE_URL."user/manage");
    }
}
