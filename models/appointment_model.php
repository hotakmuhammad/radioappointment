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
    // Fetch all exams
    public function getExams() {
        $strQuery = "SELECT exam_id, exam_name FROM exams ORDER BY exam_name";
        $stmt = $this->_db->query($strQuery);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTestsByExam($examId): array {
        $strQuery = "SELECT test_id, test_name FROM tests WHERE exam_id = :exam_id ORDER BY test_name";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(':exam_id', $examId, PDO::PARAM_INT);
        $rqPrep->execute();
        return $rqPrep->fetchAll(PDO::FETCH_ASSOC);
    }

    public function testExists($testId) {
        $strQuery = "SELECT COUNT(*) FROM tests WHERE test_id = :test_id";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(":test_id", $testId, PDO::PARAM_INT);
        $rqPrep->execute();
        return $rqPrep->fetchColumn() > 0;
    }

    public function examExists($examId) {
    $strQuery = "SELECT COUNT(*) FROM exams WHERE exam_id = :exam_id";
    $rqPrep = $this->_db->prepare($strQuery);
    $rqPrep->bindValue(":exam_id", $examId, PDO::PARAM_INT);
    $rqPrep->execute();
    return $rqPrep->fetchColumn() > 0;
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
    public function insert(object $objApt) {
        $testId = $objApt->getTestId();
        if (!$testId || !$this->testExists($testId)) {
            return null;
        }
        $strQuery = "INSERT INTO appointment (apt_date, apt_time, apt_status, apt_registdate, apt_user_id, apt_test_id) 
                        VALUES (:date, :time, :status, :registdate, :user_id, :test_id)";
        $rqPrep = $this->_db->prepare($strQuery);
        $rqPrep->bindValue(":date", $objApt->getDate(), PDO::PARAM_STR);
        $rqPrep->bindValue(":time", $objApt->getTime(), PDO::PARAM_STR);
        $rqPrep->bindValue(":status", $objApt->getStatus(), PDO::PARAM_STR);
        $rqPrep->bindValue(":registdate", $objApt->getRegistdate(), PDO::PARAM_STR);
        $rqPrep->bindValue(":user_id", $_SESSION['user']['user_id'], PDO::PARAM_INT);
        $rqPrep->bindValue(":test_id", $testId, PDO::PARAM_INT);
        return $rqPrep->execute();

    }
    
}