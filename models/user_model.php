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
            $strQuery = "SELECT user_id, user_name, user_firstname, user_email, user_phone, user_password, user_role, user_isbanned, user_regist_date
                         FROM users
                         WHERE user_id = :id";
            $stmt = $this->_db->prepare($strQuery);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC); 
        }
        
        public function getAll() {
            $strQuery = "SELECT user_id, user_name, user_firstname, user_email, user_phone, user_role, user_isbanned, user_regist_date
                         FROM users";
            $stmt = $this->_db->prepare($strQuery);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
 
        public function searchUser(string $strEmail, string $strPassword) {

            $strQuery = "SELECT user_id, user_name, user_firstname,  user_phone, user_password, user_role, user_isbanned, user_regist_date
                         FROM users
                         WHERE user_email = :email;
            ";

            $rqPrep = $this->_db->prepare($strQuery);

            $rqPrep->bindValue(':email', $strEmail, PDO::PARAM_STR);

            $rqPrep->execute();
            $arrUser = $rqPrep->fetch(); 
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

        public function update($objUser) {
            $strQuery = "UPDATE users
                            SET user_name = :name,
                                user_firstname = :firstName, 
                                user_phone = :phone";
            $params = [
                ':name' => $objUser->getName(), 
                ':firstName' => $objUser->getFirstName() ,
                ':phone' => $objUser->getPhone(),
                ':id' => $objUser->getId() 
            ];
            if ($objUser->getPassword() != "") {
                $strQuery .= ", user_password = :password";
                $params[':password'] = $objUser->getPassword();
            }

            if ($objUser->getRole() != "") {
                $strQuery .= ", user_role = :role";
                $params[':role'] = $objUser->getRole();
            }
        
            if ($objUser->getIsBanned() != "") {
                $strQuery .= ", user_isBanned = :isBanned";
                $params[':isBanned'] = $objUser->getIsBanned();
            }
            
            $strQuery .= " WHERE user_id = :id";
            $rqPrep = $this->_db->prepare($strQuery);
            return $rqPrep->execute($params);
        } 
 
        public function delete(int $id) {
            $strQuery = "DELETE FROM users WHERE user_id = " .$id;
            return $this->_db->exec($strQuery);

        } 
    }