<?php

	class ErrorCtrl extends Ctrl{
		

		public function show404(){
			$this->_arrData["strPage"] 	= "404";
			$this->_arrData["strTitle"] = "Page non trouvée";
			$this->_arrData["strDesc"] 	= "Page affichant le fait que la page demandée n'a pas été trouvée";
			$this->displayTemplate("show404");
		}
		

		public function show403(){
			$this->_arrData["strPage"] 	= "403";
			$this->_arrData["strTitle"] = "Vous n'êtes pas autorisé";
			$this->_arrData["strDesc"] 	= "Page affichant le fait que l'utilisateur n'a pas les droits suffisants";
			$this->displayTemplate("show403");
		}


		public function banned(){
			$this->_arrData["strPage"] 	= "banned";
			$this->_arrData["strTitle"] = "You are abanned";
			$this->_arrData["strDesc"] 	= "Page display if the user is banned";
			$this->displayTemplate("banned");
		}
		
	}