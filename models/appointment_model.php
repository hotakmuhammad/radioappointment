<?php

	include_once("connect.php");


    class AppointmentModel extends Model{

        public function __construct(){
			parent::__construct();
		}

        
        public function getAll($objUser, $status = 'UPCOMING') {
            $strQuery = "SELECT 
                u.user_name,
                u.user_firstname,
                t.test_name AS appointment,
                a.apt_id,
                a.apt_date,
                a.apt_time,
                a.apt_status,
                a.apt_registdate,
                a.apt_user_id,
                a.apt_test_id
            FROM 
                users u
                INNER JOIN appointment a ON u.user_id = a.apt_user_id
                INNER JOIN tests t ON a.apt_test_id = t.test_id
                INNER JOIN exams e ON t.exam_id = e.exam_id
            WHERE 
                u.user_id = :user_id";
            if ($status !== null) {
                $strQuery .= " AND a.apt_status = :status";
            }
            $strQuery .= " ORDER BY a.apt_date, a.apt_time";
            $rqPrep = $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':user_id', $objUser->getId(), PDO::PARAM_INT);
            if ($status !== null) {
                $rqPrep->bindValue(':status', $status, PDO::PARAM_STR);
            }
            $rqPrep->execute();
            $results = $rqPrep->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        
    public function get(int $id): array|false {
        $strQuery = "SELECT 
            u.user_name,
            u.user_firstname,
            t.test_name AS appointment,
            a.apt_id,
            a.apt_date,
            a.apt_time,
            a.apt_status,
            a.apt_registdate,
            a.apt_user_id,
            a.apt_test_id
        FROM 
            appointment a
            INNER JOIN users u ON a.apt_user_id = u.user_id
            INNER JOIN tests t ON a.apt_test_id = t.test_id
            INNER JOIN exams e ON t.exam_id = e.exam_id
        WHERE 
            a.apt_id = :id";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(':id', $id, PDO::PARAM_INT);
        $rqPrep->execute();
        return $rqPrep->fetch(PDO::FETCH_ASSOC);
    }
}