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
            // if (!isset($_SESSION['user']['user_id']) || empty($_SESSION['user']['user_id'])) {
            //     header('Location: ' . parent::BASE_URL . 'error/show403');
            //     exit;
            // } 
            // var_dump($_GET['id']);
            $intAptId = $_GET['id']??0;
           
            $objAptModel = new AppointmentModel();
            $objApt = new Appointment();
            // $objApt->setDate("");
            // $objApt->setTime("");
            // Fetch all exams for the services dropdown

            $arrApt = $objAptModel->get($intAptId);
            // $this->_arrData['exams'] = $objAptModel->getExams();

            // Initialize errors array
            // $this->_arrErrors = [];

            if($arrApt === false) {
                $objApt->setId(0);
                $objApt->setDate("");
                $objApt->setTime("");
                $objApt->setStatus("UPCOMING");
                $objApt->setRegistdate("");
                $objApt->setUserId($_SESSION['user']['user_id']);
                $objApt->setTestId(isset($data['test_id']) ? (int)$data['test_id'] : 0);
                // $objApt->setTestId($testId);
            } else {
                $objApt->hydrate($arrApt);
                // if ($_SESSION['user']['user_role'] != "SUPERADMIN" && 
                //     $_SESSION['user']['user_id'] != $objArticle->user_id()){
                //     header("Location:".parent::BASE_URL."error/show403");
                // }
            }
            if (count($_POST) > 0) {
            // Hydrate the Appointment object with form data
            $objApt->hydrate($_POST);
            var_dump($data['test_id'] ?? 'No test_id in data');
            var_dump($objApt);
            // Simple validation checks
            if ($objApt->getDate() == "") {
                $this->_arrErrors["date"] = "Veuillez choisir une date";
            }
            if ($objApt->getTime() == "") {
                $this->_arrErrors["time"] = "Veuillez choisir une heure";
            }
            // if (empty($_POST['services'])) {
            //     $this->_arrErrors["services"] = "Veuillez choisir un examen";
            // }
            // if (empty($_POST['subServices'])) {
            //     $this->_arrErrors["subServices"] = "Veuillez choisir un test";
            // }

            // If no validation errors, proceed to insert
            if (count($this->_arrErrors) == 0) {
                // Map services (exam_name) to exam_id and subServices (test_name) to test_id
                // $examId = null;
                // foreach ($this->_arrData['exams'] as $exam) {
                //     if ($exam['exam_name'] == $_POST['services']) {
                //         $examId = $exam['exam_id'];
                //         break;
                //     }
                // }

                // // Fetch tests for the selected exam to get test_id
                // $tests = $examId ? $objAptModel->getTestsByExam($examId):[];
                // $testId = null;
                // foreach ($tests as $test) {
                //     if ($test['test_name'] == $_POST['subServices']) {
                //         $testId = $test['test_id'];
                //         break;
                //     }
                // }

                // if (!$testId) {
                //     $this->_arrErrors["subServices"] = "Test invalide";
                // } else {
                //     // Prepare data for insert
                //     $this->_arrData = [
                //         'date' => $objApt->getDate(),
                //         'time' => $objApt->getTime(),
                //         'status' => 'UPCOMING',
                //         'test_id' => $testId
                //     ];

                    // Call insert function
                if($objApt->getId() === 0) {
                    // if ($objApt->getTestId() == 0) {
                    //     $this->_arrErrors["test_id"] = "Veuillez sélectionner un test valide";
                    // }
                    if($objAptModel->insert($objApt)) {
                        header('Location:'.parent::BASE_URL);
                    }
                        else {
                            $this->_arrErrors[] = "Erreur lors de l'insertion de prendre rendez vous";
                        }
                    } 
                    else {

                        if ($objAptModel->update($objApt)){
                            header("Location:".parent::BASE_URL."page/about");
                        }else{
                            $this->_arrErrors[] = "La modification s'est mal passée";
                        }
    
                    }
                
                }
            } else {
    
            }
            // $this->_arrData["objApt"] = $objApt;


    // Fetch tests for subServices based on selected exam (for form persistence)
    // $examId = null;
    // if (!empty($_POST['services'])) {
    //     foreach ($this->_arrData['exams'] as $exam) {
    //         if ($exam['exam_name'] == $_POST['services']) {
    //             $examId = $exam['exam_id'];
    //             break;
    //         }
    //     }
    // }
    // $this->_arrData['tests'] = $examId ? $objAptModel->getTestsByExam($examId) : [];

    // Prepare data for the template
    $this->_arrData["strPage"] = "index";
    $this->_arrData["strTitle"] = "Accueil";
    $this->_arrData["strDesc"] = "Page d'accueil";
    $this->_arrData["objApt"] = $objApt; // Pass the Appointment object to the template
    // $this->_arrData["arrErrors"] = $this->_arrErrors; // Match template variable

    // Display the template
    $this->displayTemplate("home");
    }
}

// }
