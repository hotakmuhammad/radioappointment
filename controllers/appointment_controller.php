<?php

//include_once ("models/unifinder_model.php");

class AppointmentCtrl extends Ctrl {

    const MAX_CONTENT = 220;


    public function home() {



        // Préparation des données pour le template de la page d'accueil.

        $this->_arrData["strPage"] = "index";

        $this->_arrData["strTitle"] = "Accueil";

        $this->_arrData["strDesc"] = "Page d'accueil";



        // Affichage du template de la page d'accueil.

        $this->displayTemplate("home");

	}

}
