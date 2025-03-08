<?php

	include_once("connect.php");


    class UserModel extends Model{

        public function __construct(){
			parent::__construct();
		}

        public function registration(object $objUser) {
            $strQuery = "INSERT INTO users (first_name, last_name, email, phone, password, profile_pic, registration_time)
                        VALUES (:firstName, :lastName, :email, :phone, :password, :profilePic, NOW())";

            $rqPrep	= $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':firstName', $objUser->getFirstName(), PDO::PARAM_STR);
            $rqPrep->bindValue(':lastName', $objUser->getLastName(), PDO::PARAM_STR);
            $rqPrep->bindValue(':email', $objUser->getEmail(), PDO::PARAM_STR);
            $rqPrep->bindValue(':phone', $objUser->getPhone(), PDO::PARAM_STR);
            $rqPrep->bindValue(':password', $objUser->getPasswordHash(), PDO::PARAM_STR);
            $rqPrep->bindValue(':profilePic', $objUser->getProfilePic(), PDO::PARAM_STR);
            return $rqPrep->execute();
        }
    }