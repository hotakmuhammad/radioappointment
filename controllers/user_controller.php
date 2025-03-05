<?php

//include_once ("models/unifinder_model.php");

class UserCtrl extends Ctrl {

    public function login() {

        $this->_arrData["strPage"] = "login";

        $this->_arrData["strTitle"] = "Login";

        $this->_arrData["strDesc"] = "Page de connexion";

        $this->displayTemplate("login");

	}


    public function registration() {

        $this->_arrData["strPage"]     = "registration";

        $this->_arrData["strTitle"] = "Inscription";

        $this->_arrData["strDesc"]     = "Page d'inscription";

        $this->displayTemplate("registration");
    }
    
    public function logout() {

    }

    public function edit_profile() {

    }



}
