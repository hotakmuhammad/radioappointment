<?php

//include_once ("models/unifinder_model.php");

include_once("models/appointment_model.php");
include_once("entities/appointment_entity.php");
include_once("models/user_model.php");
include_once("entities/user_entity.php");

class AppointmentCtrl extends Ctrl {

    const MAX_CONTENT = 220;
    public function mesrdv() {
        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
            header('Location:'.parent::BASE_URL.'error/show403');
            exit;
        }
        // echo '<pre>';
        // var_dump($_SESSION);
        // echo '</pre>';
        $objAptModel = new AppointmentModel();
        $objUser = new User(); // Get current user (e.g., from session or authentication)
        
        $objUser->setId($_SESSION['user']['user_id']);
        $objUser->setName($_SESSION['user']['user_name'] ?? '');
        $objUser->setFirstname($_SESSION['user']['user_firstname'] ?? '');
        // $objUser->setName("");
        // $objUser->setFirstName("");
        // $objUser->setEmail(""); 
        // $objUser->setPhone("");
        // $objUser->setRole("");
        // $objUser->setPassword("");
        // $objUser->setId($_SESSION['user_id']);
        // var_dump($objUser);
        

        // $intAptId = $_GET['apt_id']??0;
        $arrApt = $objAptModel->getAll($objUser);
        
        
        $arrAptToDisplay = array();
        foreach ($arrApt as $arrDetailApt) {
            $objApt = new Appointment();
            $objApt->hydrate($arrDetailApt);
            $arrAptToDisplay[] = $objApt;
        } 
        // $arrApt 	= $objAptModel->get($intAptId);
        // if($arrApt === false) {
        //     // $objApt->setId(0);
        //     $objApt->setUserName("");
        //     $objApt->setUserFirstName("");
        //     $objApt->setStatus("");
        // }
        

        // echo '<pre>';
        // var_dump($arrAptToDisplay);
        // echo '</pre>';
        // Prepare data for the template
        $this->_arrData["strPage"] = "rdv";
        $this->_arrData["strTitle"] = "Appointment";
        $this->_arrData["strDesc"] = "Page de rendez-vous";
        $this->_arrData["arrAptToDisplay"] = $arrAptToDisplay;
        echo '<pre>';
        var_dump($arrAptToDisplay);
        echo '</pre>';
        // Display the template
        $this->displayTemplate("myAptList");
    }

    public function home() {



        // Préparation des données pour le template de la page d'accueil.

        $this->_arrData["strPage"] = "index";

        $this->_arrData["strTitle"] = "Accueil";

        $this->_arrData["strDesc"] = "Page d'accueil";



        // Affichage du template de la page d'accueil.

        $this->displayTemplate("home");

	}

}
