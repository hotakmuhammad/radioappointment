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
        $strTest = $_POST['test'] ?? '';
        $strExam = $_POST['exam'] ?? '';
        $intExamId = $_POST['examId'] ?? '';

        $objAptModel = new AppointmentModel;
        $arrExams = $objAptModel->findExams();
        $arrTests = $objAptModel->findTests($intExamId ?: null);
        $arrTestsToDisplay = $arrTests;
        $arrErrors = array();

        $objApt = new Appointment();
        // Set only dynamic values from session or current time
        if (isset($_SESSION['user']['user_id']) && $_SESSION['user']['user_id'] !== '') {
            $objApt->setUserId($_SESSION['user']['user_id']);
        }
        $objApt->setRegistdate(date("Y-m-d H:i:s"));
        $objApt->setStatus("UPCOMING");
        var_dump($objApt);
        if (count($_POST) > 0) {
            // Hydrate with POST data
            $objApt->hydrate($_POST);
            var_dump($_POST);
            // Validate user
            if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
                $arrErrors['log'] = "Vous devez être inscrit pour prendre un rendez-vous";
            }

            // Validate date
            if (!$objApt->getDate() || !DateTime::createFromFormat('Y-m-d', $objApt->getDate())) {
                $arrErrors['date'] = "La date est obligatoire et doit être au format YYYY-MM-DD";
            }

            // Validate time
            if (!$objApt->getTime() || !DateTime::createFromFormat('H:i', $objApt->getTime())) {
                $arrErrors['time'] = "L'heure est obligatoire et doit être au format HH:MM";
            }

            // Validate exam
            if (!$strExam) {
                $arrErrors['exam'] = "L'examen est obligatoire";
            } else {
                $intExamId = $objAptModel->getExamIdByName($strExam);
                if (!$intExamId) {
                    $arrErrors['exam'] = "L'examen n'existe pas";
                }
            }

            // Validate test and set test_id
            if (!$strTest) {
                $arrErrors['test'] = "Le test est obligatoire";
            } else {
                $testId = $objAptModel->getTestIdByName($strTest);
                if ($testId) {
                    if ($intExamId && !$objAptModel->validateTestForExam($testId, $intExamId)) {
                        $arrErrors['test'] = "Le test ne correspond pas à l'examen sélectionné";
                    } else {
                        $objApt->setTestId($testId);
                    }
                } else {
                    $arrErrors['test'] = "Le test n'existe pas";
                }
            }

            // Insert if no errors
            if (count($arrErrors) == 0) {
                $intLastAptId = $objAptModel->insert($objApt);
                if ($intLastAptId !== false) {
                    header('Location: ' . parent::BASE_URL . 'appointment/my_appointments');
                    exit();
                } else {
                    $arrErrors[] = "L'insertion s'est mal passée, peut-être que ce test est déjà réservé pour cette date et heure";
                }
            }
        }

        $this->_arrData["arrErrors"] = $arrErrors;
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
}

// }
