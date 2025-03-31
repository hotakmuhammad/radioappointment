<?php


class PageCtrl extends Ctrl {


    public function home() {



        // Préparation des données pour le template de la page d'accueil.

        $this->_arrData["strPage"] = "index";

        $this->_arrData["strTitle"] = "Accueil";

        $this->_arrData["strDesc"] = "Page d'accueil";



        // Affichage du template de la page d'accueil.

        $this->displayTemplate("home");

	}
    public function appointment() {



        // Préparation des données pour le template de la page d'accueil.

        $this->_arrData["strPage"] = "index";

        $this->_arrData["strTitle"] = "Accueil";

        $this->_arrData["strDesc"] = "Page d'accueil";



        // Affichage du template de la page d'accueil.

        $this->displayTemplate("appointment");

	}

    public function about() {


        $this->_arrData["strPage"]     = "about";

        $this->_arrData["strTitle"] = "A propos";

        $this->_arrData["strDesc"]     = "Page de contenu";

        $this->displayTemplate("about");

    }

    
    public function registration() {

        $this->_arrData["strPage"]     = "registration";

        $this->_arrData["strTitle"] = "Inscription";

        $this->_arrData["strDesc"]     = "Page d'inscription";

        $this->displayTemplate("registration");
    }

    public function edit_profile() {

        $this->_arrData["strPage"]     = "edit_profile";

        $this->_arrData["strTitle"] = "Modification du profil";

        $this->_arrData["strDesc"]     = "Page de modification du profil";

        $this->displayTemplate("edit_profile");
    }

}
