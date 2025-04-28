<?php

//include_once ("models/unifinder_model.php");

include_once("models/appointment_model.php");
include_once("entities/appointment_entity.php");
include_once("models/user_model.php");
include_once('entities/user_entity.php');

class AppointmentCtrl extends Ctrl {

    const MAX_CONTENT = 220;
    public function mesrdv() {
        if (!isset($_SESSION['user']['user_id']) || $_SESSION['user']['user_id'] == '') {
            header('Location:'.parent::BASE_URL.'error/show403');
            exit;
        }
        $objAptModel = new AppointmentModel();
        $objUser = new User(); // Get current user (e.g., from session or authentication)

        $objUser->setId(0);
        $objUser->setName("");
        $objUser->setFirstName("");
        $objUser->setEmail(""); 
        $objUser->setPhone("");
        $objUser->setRole("");
        $objUser->setPassword("");
        // $objUser->setId($_SESSION['user_id']);
        // $objUser->setUserName($_SESSION['user_name'] ?? null);
        // $objUser->setFirstName($_SESSION['user_firstname'] ?? null);
        $arrApt = $objAptModel->getAll($objUser);

        $arrAptToDisplay = [];
        foreach ($arrApt as $arrDetailApt) {
            $objApt = new Appointment();
            $objApt->hydrate($arrDetailApt);
            $arrAptToDisplay[] = $objApt;
        }

        // Prepare data for the template
        $this->_arrData["strPage"] = "index";
        $this->_arrData["strTitle"] = "Accueil";
        $this->_arrData["strDesc"] = "Page de rendez-vous";
        $this->_arrData["arrApt"] = $arrAptToDisplay;

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
