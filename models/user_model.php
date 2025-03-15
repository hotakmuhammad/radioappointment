<?php

	include_once("connect.php");


    class UserModel extends Model{

        public function __construct(){
			parent::__construct();
		}

        public function findAll(){
			$strQuery 	= "SELECT user_id, first_name 
							FROM users";
			return $this->_db->query($strQuery)->fetchAll();
		}


        public function get(int $id) {
            $strQuery = "SELECT user_id, first_name, last_name, email, phone, password, registration_time
                        From users
                        WHERE user_id = ".$id;
            return $this->_db->query($strQuery)->fetchAll();
        }

        public function searchUser(string $strEmail, string $strPassword) {

            $strQuery = "SELECT user_id, first_name, last_name, email, phone, password, registration_time
                         FROM users
                         WHERE email = :email;
            ";

            $rqPrep = $this->_db->prepare($strQuery);

            $rqPrep->bindValue(':email', $strEmail, PDO::PARAM_STR);

            $rqPrep->execute();
            $arrUser = $rqPrep->fetch();
            if(is_array($arrUser) && password_verify($strPassword, $arrUser['password'])) {
                unset($arrUser['password']);
                return $arrUser;
            }
            return false;
        }


        public function verifyEmail(string $strEmail):bool{
            $strQuery = "SELECT email
                        FROM users
                        WHERE email = :email;
                    ";
            $rqPrep = $this->_db->prepare($strQuery);

            $rqPrep->bindValue(":email", $strEmail, PDO::PARAM_STR);

            $rqPrep->execute();
            return is_array($rqPrep->fetch());

        }

        public function registration(object $objUser) {
            $strQuery = "INSERT INTO users (first_name, last_name, email, phone, password, registration_time)
                        VALUES (:firstName, :lastName, :email, :phone, :password,  NOW())";

            $rqPrep	= $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':firstName', $objUser->getFirstName(), PDO::PARAM_STR);
            $rqPrep->bindValue(':lastName', $objUser->getLastName(), PDO::PARAM_STR);
            $rqPrep->bindValue(':email', $objUser->getEmail(), PDO::PARAM_STR);
            $rqPrep->bindValue(':phone', $objUser->getPhone(), PDO::PARAM_STR);
            $rqPrep->bindValue(':password', $objUser->getPasswordHash(), PDO::PARAM_STR);
            
            return $rqPrep->execute();
        }
        
    }