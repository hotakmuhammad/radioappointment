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
            $objUser->setFirstName("");
            $objUser->setLastname("");
            $objUser->setEmail("");
            $objUser->setPhone("");
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
					
				$_SESSION['user'] = $arrUser;
                header("Location:".parent::BASE_URL."page/appointment");
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
    
    private function _verifyInfos(object $objUser, $boolVerifyMail = true) {


        $arrErrors = array();
        if($objUser->getFirstName() == "") {
            $arrErrors['firstName'] = "Le nom est obligatoire.";
        }elseif(strlen($objUser->getFirstName()) < 3){
            $arrErrors['firstName'] = "Le nom est trop court.";
        }

        if($objUser->getLastName() == "") {
            $arrErrors['lastName'] = "Le prènom est obligatoire.";
        }elseif(strlen($objUser->getLastName()) < 3){
            $arrErrors['lastName'] = "Le prènom est trop court.";
        }

        if($objUser->getPhone() == "") {
            $arrErrors['phone'] = "Le numéro du téléphone est obligatoire.";
        }elseif(strlen($objUser->getPhone()) < 10){
            $arrErrors['phone'] = "Le numéro du téléphone n'est pas bon.";
        }

        if($objUser->getEmail() == "") {
            $arrErrors['email'] = "L'adress mail est obligatoire";
        }elseif(!filter_var($objUser->getEmail(), FILTER_VALIDATE_EMAIL)){
            $arrErrors['email'] = "Le mail n'est pas correct";
        }elseif($boolVerifyMail) {
            $objUserModel = new UserModel;

            $boolMailExists = $objUserModel->verifyEmail($objUser->getEmail());

            if ($boolMailExists === true){
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
			}elseif ($strPassword != $_POST['confirm-password']){
				$arrErrors['password'] = "Le mot de passe et sa confirmation doivent être identiques";
			}
			return $arrErrors;
    }

    
}
