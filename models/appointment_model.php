<?php

include_once("connect.php");


class AppointmentModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get()  {
        $strQuery = "SELECT *
                     FROM appointment
                     WHERE apt_id  = :apt_id" ;
                     return $this->_db->query($strQuery)->fetch();
    } 

 
    public function updateStatusToPassed() {
        $strQuery = "UPDATE appointment 
                        SET apt_status = 'PASSED' 
                        WHERE apt_status = 'UPCOMING' 
                        AND apt_date < CURRENT_DATE";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->execute();
    }
    
    public function getUpcomming($objUser, $status = 'UPCOMING') {
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
            u.user_id = :user_id
            AND a.apt_date > CURRENT_TIME;";
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


    public function getArchived($objUser, $status = 'UPCOMING') {
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
            u.user_id = :user_id
            AND a.apt_date < CURRENT_TIME;";
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
        return $rqPrep->fetchAll(PDO::FETCH_ASSOC);
        // return $results;
    } 
    
    public function findExams() {
        $strQuery = "SELECT exam_id, exam_name FROM exams;";
        return $this->_db->query($strQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findTests($examId = null) {
        $strQuery = "SELECT test_id, test_name, exam_id FROM tests";
        if ($examId !== null) {
            $strQuery .= " WHERE exam_id = :exam_id";
        }
        $strQuery .= ";";
        if ($examId !== null) {
            $rqPrep = $this->_db->prepare($strQuery);
            $rqPrep->bindValue(":exam_id", $examId, PDO::PARAM_INT);
            $rqPrep->execute();
            return $rqPrep->fetchAll(PDO::FETCH_ASSOC);
        }
        return $this->_db->query($strQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTestIdByName($testName) {
        $strQuery = "SELECT test_id FROM tests WHERE test_name = :testName";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(":testName", $testName, PDO::PARAM_STR);
        $rqPrep->execute();
        $result = $rqPrep->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['test_id'] : false;
    }

    public function getExamIdByName($examName) {
        $strQuery = "SELECT exam_id FROM exams WHERE exam_name = :examName";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(":examName", $examName, PDO::PARAM_STR);
        $rqPrep->execute();
        $result = $rqPrep->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['exam_id'] : false;
    }

    public function validateTestForExam($testId, $examId) {
        $strQuery = "SELECT 1 FROM tests WHERE test_id = :testId AND exam_id = :examId";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(":testId", $testId, PDO::PARAM_INT);
        $rqPrep->bindValue(":examId", $examId, PDO::PARAM_INT);
        $rqPrep->execute();
        return $rqPrep->fetch() !== false;
    }

    public function insert($objApt) {
        try {
            $strQuery = "INSERT INTO appointment (apt_date, apt_time, apt_status, apt_registdate, apt_user_id, apt_test_id)
                         VALUES (:apt_date, :apt_time, :apt_status, :apt_registdate, :apt_user_id, :apt_test_id)";
            $rqPrep = $this->_db->prepare($strQuery);
            $rqPrep->bindValue(':apt_date', $objApt->getDate(), PDO::PARAM_STR);
            $rqPrep->bindValue(':apt_time', $objApt->getTime(), PDO::PARAM_STR);
            $rqPrep->bindValue(':apt_status', $objApt->getStatus(), PDO::PARAM_STR);
            $rqPrep->bindValue(':apt_registdate', $objApt->getRegistdate(), PDO::PARAM_STR);
            $rqPrep->bindValue(':apt_user_id', $objApt->getUserId(), PDO::PARAM_INT);
            $rqPrep->bindValue(':apt_test_id', $objApt->getTestId(), PDO::PARAM_INT);
            if ($rqPrep->execute()) {
                return $this->_db->lastInsertId();
            }
            return false;
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Duplicate entry for unique_test_time
                return false;
            }
            throw $e;
        }
    }
    
}