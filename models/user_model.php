<?php

	include_once("connect.php");


    class UserModel extends Model{

        public function __construct(){
			parent::__construct();
		}

        public function findAll(){
			$strQuery 	= "SELECT user_id, user_firstname
							FROM users";
			return $this->_db->query($strQuery)->fetchAll();
		}


        public function get(int $id) {
            $strQuery = "SELECT user_id, user_name, user_firstname, user_email, user_phone, user_password, user_regist_date
                        From users
                        WHERE user_id = ".$id;
            return $this->_db->query($strQuery)->fetchAll();
        }

        public function searchUser(string $strEmail, string $strPassword) {

            $strQuery = "SELECT user_id, user_name, user_firstname, user_email, user_phone, user_password, user_regist_date
                         FROM users
                         WHERE user_email = :email;
            ";

            $rqPrep = $this->_db->prepare($strQuery);

            $rqPrep->bindValue(':email', $strEmail, PDO::PARAM_STR);

            $rqPrep->execute();
            $arrUser = $rqPrep->fetch();
            // var_dump($arrUser); 
            // var_dump($strPassword); // Check what password is entered
            // var_dump($arrUser['user_password']);
            if(is_array($arrUser) && password_verify($strPassword, $arrUser['user_password'])) {
                unset($arrUser['user_password']);
                return $arrUser;
            }
            return false;
        }


        public function verifyEmail(string $strEmail):bool{
            $strQuery = "SELECT user_email
                        FROM users
                        WHERE user_email = :email;
                    ";
            // if ($userId !== null) {
            //     $strQuery .= " AND user_id != :user_id";
            // }
            $rqPrep = $this->_db->prepare($strQuery);

            $rqPrep->bindValue(":email", $strEmail, PDO::PARAM_STR);

            $rqPrep->execute();
            return is_array($rqPrep->fetch());

        }

        public function registration(object $objUser) {
            $strQuery = "INSERT INTO users (user_name, user_firstname,  user_email, user_phone, user_password, user_regist_date)
                        VALUES (:firstName, :lastName, :email, :phone, :password,  NOW())";

            $rqPrep	= $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':lastName', $objUser->getName(), PDO::PARAM_STR);
            $rqPrep->bindValue(':firstName', $objUser->getFirstName(), PDO::PARAM_STR); 
            $rqPrep->bindValue(':email', $objUser->getEmail(), PDO::PARAM_STR);
            $rqPrep->bindValue(':phone', $objUser->getPhone(), PDO::PARAM_STR);
            $rqPrep->bindValue(':password', $objUser->getPasswordHash(), PDO::PARAM_STR);
            
            return $rqPrep->execute();
        }

        public function update() {
            $strQuery = "UPDATE users
                            SET user_name = :name,
                                user_firstname = :firstname,
                                user_email = :email,
                                user_phone = :phone";
                                
            if($objUser->getPassword() != "") {
                $strQuery .= ", user_password = :password;";
            }
            $strQuery .= "WHERE user_id = :id;";
            $rqPrep = $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':name', $objUser->getName(), PDO::PARAM_STR);  
            $rqPrep->bindValue(':firstname', $objUser->getFirstName(), PDO::PARAM_STR);
            $rqPrep->bindValue(':email', $objUser->getEmail(), PDO::PARAM_STR);
            $rqPrep->bindValue(':phone', $objUser->getPhone(), PDO::PARAM_STR);
            $rqPrep->bindValue(':id', $objUser->getId(), PDO::PARAM_INT);
            if($objUser->getPassword() != "") {
                $rqPrep->bindValue(':password', $objUser->getPasswordHash(), PDO::PARAM_STR);
            }
            return $rqPrep->execute();
        }
        
    }