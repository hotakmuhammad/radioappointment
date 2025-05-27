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
        $objAptModel->updateStatusToPassed();
        $arrApt = $objAptModel->getUpcoming($objUser);
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

        
        $objUser = new User(); 
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
        $this->_arrErrors = array();
        $strTest = $_POST['test'] ?? '';
        $strExam = $_POST['exam'] ?? '';
        $intExamId = $_POST['examId'] ?? '';

        $objAptModel = new AppointmentModel;
        $arrExams = $objAptModel->findExams();
        $arrTests = $objAptModel->findTests($intExamId ?: null);
        $arrTestsToDisplay = $arrTests;
        // $arrErrors = array();

        $objApt = new Appointment();

        if (isset($_SESSION['user']['user_id']) && $_SESSION['user']['user_id'] !== '') {
            $objApt->setUserId($_SESSION['user']['user_id']);
        }
        $objApt->setRegistdate(date("Y-m-d H:i:s"));
        $objApt->setStatus("UPCOMING");

        if (count($_POST) > 0) {

            $objApt->hydrate($_POST);
    

            if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
                $this->_arrErrors['log'] = "Vous devez être inscrit pour prendre un rendez-vous";
            }

 
            if (!$objApt->getDate() || !DateTime::createFromFormat('Y-m-d', $objApt->getDate())) {
                $this->_arrErrors['date'] = "La date est obligatoire";
            }
 
            if (!$objApt->getTime() || !DateTime::createFromFormat('H:i', $objApt->getTime())) {
                $this->_arrErrors['time'] = "L'heure est obligatoire";
            }

 
            if (!$strExam) {
                $this->_arrErrors['exam'] = "L'examen est obligatoire";
            } else {
                $intExamId = $objAptModel->getExamIdByName($strExam);
                if (!$intExamId) {
                    $this->_arrErrors['exam'] = "L'examen n'existe pas";
                }
            }


            if (!$strTest) {
                $this->_arrErrors['test'] = "Le test est obligatoire";
            } else {
                $testId = $objAptModel->getTestIdByName($strTest);
                if ($testId) {
                    if ($intExamId && !$objAptModel->validateTestForExam($testId, $intExamId)) {
                        $this->_arrErrors['test'] = "Le test ne correspond pas à l'examen sélectionné";
                    } else {
                        $objApt->setTestId($testId);
                    }
                } else {
                    $this->_arrErrors['test'] = "Le test n'existe pas";
                }
            }

            // Insert if no errors
            if (count($this->_arrErrors) == 0) {
                $intLastAptId = $objAptModel->insert($objApt);
                if ($intLastAptId !== false) {
                    header('Location: ' . parent::BASE_URL . 'appointment/my_appointments');
                    exit();
                } else {
                    $this->_arrErrors[] = "Vou ne pouvez pas prendre deux rendez vous en même temps";
                }
            }
        }

        // $this->_arrData["arrErrors"] = $arrErrors;
        $this->_arrData["strTest"] = $strTest;
        $this->_arrData["strExam"] = $strExam;
        $this->_arrData["intExamId"] = $intExamId;
        $this->_arrData["arrTestsToDisplay"] = $arrTestsToDisplay;
        $this->_arrData["arrExams"] = $arrExams;
        $this->_arrData["objApt"] = $objApt;

        $this->_arrData["strPage"] = "index";
        $this->_arrData["strTitle"] = "Accueil";
        $this->_arrData["strDesc"] = "Page d'accueil";

        $this->displayTemplate("home");
    }

    public function delete_apt() {

        $intAptId = $_GET['id']??0;
        $objAptModel = new AppointmentModel();
        $objAptModel->delete($intAptId);

            if (isset($_SESSION['user']['user_role']) && ($_SESSION['user']['user_role'] == 'ADMIN' || $_SESSION['user']['user_role'] == 'SUPERADMIN')) {
                header("Location: " . parent::BASE_URL . "appointment/manage");
            } else {
                
                header("Location: " . parent::BASE_URL . "appointment/my_appointments");
            }

    }

    public function manage() {


        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
        header('Location:'.parent::BASE_URL.'error/show403');
        exit;
        }

        $objUser = new User(); // Get current user (e.g., from session or authentication)
        $objUser->setId($_SESSION['user']['user_id']);
        $objUser->setName($_SESSION['user']['user_name'] ?? '');
        $objUser->setFirstname($_SESSION['user']['user_firstname'] ?? ''); 

        $objAptModel = new AppointmentModel;
        $arrApts = $objAptModel->getAll();

        $arrAptToDisplay = array();


        foreach($arrApts as $arrApt) {
            $objApt = new Appointment();
            $objApt->hydrate($arrApt); 
            $objApt->setUserName($arrApt['user_name'] ?? '');
            $objApt->setUserFirstName($arrApt['user_firstname'] ?? '');
            $objApt->setStatus($arrApt['apt_status'] ?? '');
            $objApt->setAppointment($arrApt['test_name'] ?? '');
            $arrAptToDisplay[] = $objApt; 

        }


        $this->_arrData["strPage"] = "manage_apt";
        $this->_arrData["strTitle"] = "Gestion des rdv";
        $this->_arrData["strDesc"] = "Page pour la gestion des rdv";
        $this->_arrData["arrAptToDisplay"] = $arrAptToDisplay;

        $this->displayTemplate("manageApt");
    
    }
    

    public function edit_apt() {
        
        
        $intAptId = $_GET['id']??0;
        $objAptModel = new AppointmentModel();
        $objAptModel->delete($intAptId);

        header("Location: " . parent::BASE_URL);

    }
}

// }
