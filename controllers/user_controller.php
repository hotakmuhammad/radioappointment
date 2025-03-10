<?php

//include_once ("models/unifinder_model.php");


include_once("models/user_model.php");
include_once("entities/user_entity.php");

class UserCtrl extends Ctrl {

    
    public function registration() {

        $objUser = new User();
        if(count($_POST) > 0) {
            
            $objUser->hydrate($_POST);

            $this->_arrErrors = array_merge($this->_arrErrors, $this->_verifyPassword($objUser->getPassword()));

            if(count($this->_arrErrors) == 0){
                //$objUser->setPwd(password_hash($objUser->getPwd(), PASSWORD_DEFAULT));
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
            $objUser->setProfilePic("");



        }

        $this->_arrData["strPage"]     = "registration";

        $this->_arrData["strTitle"] = "Inscription";

        $this->_arrData["strDesc"]     = "Page d'inscription";
        $this->_arrData["objUser"]		= $objUser;
        $this->displayTemplate("registration");
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

    public function edit_profile() {

    }



}
