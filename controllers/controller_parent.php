<?php

class Ctrl {


    const BASE_URL = "http://localhost/radioappointment/";

    protected array $_arrErrors = array();
    protected array $_arrSuccess = array();

    protected array $_arrData = array();

    protected array $_arrMimesType = array("image/jpeg", "image/png", "image/gif");


    
    public function displayTemplate($strTpl, $boolDisplay = true){
        // Initialisation de Smarty
        include_once("libs/smarty/Smarty.class.php");
			$smarty = new Smarty();

			foreach($this->_arrData as $key=>$value){
				$smarty->assign($key, $value);
			}
			// L'utilisateur en session
			$smarty->assign("user", $_SESSION['user']??array());
			$smarty->assign("base_url", self::BASE_URL);

            // Les erreurs
            $smarty->assign("arrErrors", $this->_arrErrors);
            $smarty->assign("arrSuccess", $this->_arrSuccess);

            if ($boolDisplay){
				$smarty->display("views/".$strTpl.".tpl");
			}else{
				return $smarty->fetch("views/".$strTpl.".tpl");
			}
    }
}

