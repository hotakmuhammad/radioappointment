<?php

	include_once("connect.php");


    class AppointmentModel extends Model{

        public function __construct(){
			parent::__construct();
		}

        public function getAll($objUser) {
            $strQuery = "SELECT 
                u.user_name,
                u.user_firstname,
                t.test_name AS appointment,
                a.apt_date AS appointment_date,
                a.apt_time AS appointment_time,
                a.apt_registdate AS appointment_registration_time
            FROM 
                users u
                INNER JOIN appointment a ON u.user_id = a.apt_user_id
                INNER JOIN tests t ON a.apt_test_id = t.test_id
                INNER JOIN exams e ON t.exam_id = e.exam_id
            WHERE 
                u.user_id = :user_id
                AND a.apt_status = 'UPCOMING'
            ORDER BY 
                a.apt_date, a.apt_time;";
            $rqPrep = $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':user_id', $objUser->getId(), PDO::PARAM_INT);
            $rqPrep->execute();
            return $rqPrep->fetchAll(PDO::FETCH_ASSOC); 
        }


}