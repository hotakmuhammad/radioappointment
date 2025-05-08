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

            $intAptId = $_GET['id']??0;

            $objAptModel = new AppointmentModel();
            $objApt = new Appointment(); 

            $arrExams = $objAptModel->getExams();
            $intExamId = $_POST['exam_id']??0;

            $arrTests = $intExamId ? $objAptModel->getTestsByExam($intExamId) : [];

            
            
            
            
            $arrApt = $objAptModel->get($intAptId); 
            if($arrApt === false) {
                
                // $objApt->setId(['appointment']['apt_id']);
                // $objApt->hydrate($arrApt);
                $objApt->setId(0);
                $objApt->setDate("");
                $objApt->setTime("");
                $objApt->setStatus("");
                $objApt->setRegistdate("");
                $objApt->setUserId($_SESSION['user']['user_id']);
                $objApt->setUserName($_SESSION['user']['user_name']);
                $objApt->setUserFirstName($_SESSION['user']['user_firstname']);
                // $objApt->setTestId(isset($data['test_id']) ? (int)$data['test_id'] : 0);
                // $objApt->setTestId(['appointment']['apt_test_id']);
                // $objApt->setTestId(['appointment']['apt_test_id']);
                $objApt->setTestId($_GET['test_id'] ?? 0);
                // $objApt->setTestName("");
            } else {
                $objApt->hydrate($arrApt);

            }
            echo"<br>-----------------objAPt -----------<br>";
            var_dump($objApt);
 
            
            if (count($_POST) > 0) {
                // $arrPostData = [
                //     'apt_id' => $objApt->getId(),
                //     'apt_date' => $_POST['apt_date'] ?? '',
                //     'apt_time' => $_POST['apt_time'] ?? '',
                //     'apt_status' => 'UPCOMING',
                //     'apt_registdate' => date("Y-m-d H:i:s"),
                //     'apt_user_id' => $_SESSION['user']['user_id'],
                //     'apt_test_id' => $_POST['test_id'] ?? 0,
                // ];
                $objApt->hydrate($_POST);
                echo"<br>-----------------_Post -----------<br>";
                var_dump($_POST);
                echo"<br>-----------------objApt in post -----------<br>";
                var_dump($objApt);
                // Simple validation checks
                if ($objApt->getDate() == "") {
                    $this->_arrErrors["date"] = "Veuillez choisir une date";
                }
                if ($objApt->getTime() == "") {
                    $this->_arrErrors["time"] = "Veuillez choisir une heure";
                }
                // if (empty($_POST['test_id']) || !$objAptModel->testExists($_POST['test_id'])) {
                //     $this->_arrErrors["test_id"] = "Veuillez sélectionner un test valide";
                // }
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
        $this->displayTemplate("home");
    }
}

// }
