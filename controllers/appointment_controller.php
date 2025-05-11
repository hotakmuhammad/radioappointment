<?php

//include_once ("models/unifinder_model.php");

include_once("models/appointment_model.php");
include_once("entities/appointment_entity.php");
include_once("models/user_model.php");
include_once("entities/user_entity.php");

class AppointmentCtrl extends Ctrl {

    const MAX_CONTENT = 220;
    public function my_appointments() {
        if (!isset($_SESSION['user']['user_id']) || empty($_SESSION['user']['user_id'])) {
            header('Location: ' . parent::BASE_URL . 'error/show403');
            exit;
        } 

        
        $objUser = new User(); // Get current user (e.g., from session or authentication)
        $objUser->setId($_SESSION['user']['user_id']);
        $objUser->setName($_SESSION['user']['user_name'] ?? '');
        $objUser->setFirstname($_SESSION['user']['user_firstname'] ?? ''); 

        $objAptModel = new AppointmentModel();
        // $objAptModel->updateStatusToPassed();
        $arrApt = $objAptModel->getUpcomming($objUser);
        $arrAptToDisplay = [];
        foreach ($arrApt as $arrDetailApt) {
            $objApt = new Appointment();
            $objApt->hydrate($arrDetailApt);
            $arrAptToDisplay[] = $objApt;
            $objApt->setUserName(isset($arrDetailApt['user_name']) ? $arrDetailApt['user_name'] : '');
            $objApt->setUserFirstName(isset($arrDetailApt['user_firstname']) ? $arrDetailApt['user_firstname'] : '');
            $objApt->setStatus(isset($arrDetailApt['apt_status']) ? $arrDetailApt['apt_status'] : '');

        }  
        $this->_arrData["strPage"] = "rdv";
        $this->_arrData["strTitle"] = "Appointment";
        $this->_arrData["strDesc"] = "Page de rendez-vous";
        $this->_arrData["arrAptToDisplay"] = $arrAptToDisplay;

        $this->displayTemplate("myAptList");
    }


    public function archived() {
        if (!isset($_SESSION['user']['user_id']) || empty($_SESSION['user']['user_id'])) {
            header('Location: ' . parent::BASE_URL . 'error/show403');
            exit;
        } 

        
        $objUser = new User(); // Get current user (e.g., from session or authentication)
        $objUser->setId($_SESSION['user']['user_id']);
        $objUser->setName($_SESSION['user']['user_name'] ?? '');
        $objUser->setFirstname($_SESSION['user']['user_firstname'] ?? ''); 

        $objAptModel = new AppointmentModel();
        $objAptModel->updateStatusToPassed();
        $arrApt = $objAptModel->getArchived($objUser);
        $arrAptToDisplay = [];
        foreach ($arrApt as $arrDetailApt) {
            $objApt = new Appointment();
            $objApt->hydrate($arrDetailApt);
            $arrAptToDisplay[] = $objApt;
            $objApt->setUserName(isset($arrDetailApt['user_name']) ? $arrDetailApt['user_name'] : '');
            $objApt->setUserFirstName(isset($arrDetailApt['user_firstname']) ? $arrDetailApt['user_firstname'] : '');
            $objApt->setStatus(isset($arrDetailApt['apt_status']) ? $arrDetailApt['apt_status'] : '');

        }  
        $this->_arrData["strPage"] = "ArchRdv";
        $this->_arrData["strTitle"] = "Appointment archived";
        $this->_arrData["strDesc"] = "Page de rendez-vous archivés";
        $this->_arrData["arrAptToDisplay"] = $arrAptToDisplay;

        $this->displayTemplate("archivedAptList");
    }


   public function home() {

            $intAptId = $_GET['id'] ?? null;

            $objAptModel = new AppointmentModel();
            $objApt = new Appointment(); 
 

            $objApt->setUserId($_SESSION['user']['user_id']);
            $objApt->setUserName($_SESSION['user']['user_name']);
            $objApt->setUserFirstName($_SESSION['user']['user_firstname']);
            // Initialize defaults
            $objApt->setId($intAptId ? (int)$intAptId : 0);
            $objApt->setStatus("UPCOMING");
            // $objApt->setRegistdate(date('Y-m-d H:i:s'));
            // $objApt->setDate("");
            // $objApt->setTime("");
            // $objApt->setTestId(0);

            if ($intAptId > 0) {
                $arrApt = $objAptModel->get($intAptId);
                if ($arrApt) {
                    $objApt->hydrate($arrApt);
                }
            }


            $arrExams = $objAptModel->getExams();
            $intExamId = $_POST['exam_id']??0;

            $arrTests = $intExamId ? $objAptModel->getTestsByExam($intExamId) : [];
 
            if (count($_POST) > 0) {
                echo "<br>-----------------POST-----------<br>";
                var_dump($_POST);
                echo "<br>-----------------objApt Before Hydrate-----------<br>";
                var_dump($objApt);
            }
            
            if (count($_POST) > 0) { 
                $objApt->hydrate($_POST);
                echo "<br>-----------------objApt After Hydrate-----------<br>";
                var_dump($objApt);
                $examId = $_POST['exam_id'] ?? 0;
                if ($examId == 0 || !$objAptModel->examExists($examId)) {
                    $this->_arrErrors[] = "Invalid exam selected. Please choose a valid exam.";
                }
                // Validate test_id
                $testId = $objApt->getTestId();
                if ($testId == 0 || !$objAptModel->testExists($testId)) {
                    $this->_arrErrors[] = "Invalid test selected. Please choose a valid test.";
                }
                echo "<br>-----------------Test ID-----------<br>";
                var_dump($objApt->getTestId());
                // Simple validation checks
                if ($objApt->getDate() == "") {
                    $this->_arrErrors["date"] = "Veuillez choisir une date";
                }
                if ($objApt->getTime() == "") {
                    $this->_arrErrors["time"] = "Veuillez choisir une heure";
                }
                if (count($this->_arrErrors) == 0) {
                if($objApt->getId() === 0) { 
                    if($objAptModel->insert($objApt)) {
                        header('Location:'.parent::BASE_URL);
                        exit;
                    }
                        else {
                            $this->_arrErrors[] = "Erreur lors de l'insertion de prendre rendez vous";
                        }
                    } 
                    else {

                        if ($objAptModel->update($objApt)){
                            header("Location:".parent::BASE_URL."page/about");
                            exit;
                        }else{
                            $this->_arrErrors[] = "La modification s'est mal passée";
                        }
    
                    }
                
                }
            } 
        // Prepare data for the template
        $this->_arrData["strPage"] = "index";
        $this->_arrData["strTitle"] = "Accueil";
        $this->_arrData["strDesc"] = "Page d'accueil";
        $this->_arrData["objApt"] = $objApt;
        $this->_arrData["arrExams"] = $arrExams;
        $this->_arrData["arrTests"] = $arrTests;
        $this->_arrData["intExamId"] = $intExamId;
        // $this->_arrData["intTestId"] = ;
        $this->displayTemplate("home");
    }
}

// }
