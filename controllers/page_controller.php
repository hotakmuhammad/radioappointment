<?php


class PageCtrl extends Ctrl {

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
 /*
 
        public function login() {

            $this->_arrData["strPage"]     = "login";

            $this->_arrData["strTitle"] = "Connexion";

            $this->_arrData["strDesc"]     = "Page de connexion";

            $this->displayTemplate("login");
        }

  
		public function home(){

			$this->_arrData["strPage"] 	= "index";

			$this->_arrData["strTitle"] = "A propos";

			$this->_arrData["strDesc"] 	= "Page de contenu";
            
			$this->displayTemplate("home");
		}


        
        
        public function appointment() {

            $this->_arrData["strPage"]     = "appointment";

            $this->_arrData["strTitle"] = "Rendez-vous";

            $this->_arrData["strDesc"]     = "Page de prise de rendez-vous";

            $this->displayTemplate("appointment");
        }


        
*/

}

Sqaan@444$hello124578