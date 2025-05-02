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



        // Préparation des données pour le template de la page d'accueil.

        $this->_arrData["strPage"] = "index";

        $this->_arrData["strTitle"] = "Accueil";

        $this->_arrData["strDesc"] = "Page d'accueil";



        // Affichage du template de la page d'accueil.

        $this->displayTemplate("home");

	}

}
