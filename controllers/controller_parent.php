<?php

class Ctrl {


    const BASE_URL = "http://localhost/radioappointment/";

    protected array $_arrErrors = array();
    protected array $_arrSuccess = array();

    protected array $_arrData = array(); 
 
    protected array $_arrAdminPages = array();

    public function __construct(){

        	// Pages admin uniquement
			if (count($_GET) > 0){
				$strPage	= $_GET['ctrl'].'/'.$_GET['action'];
				
				if (in_array($strPage, $this->_arrAdminPages) && $_SESSION['user']['user_role'] != "admin"){
					header("Location:".self::BASE_URL."error/show403");
				}
			}
    }
    
    public function displayTemplate($strTpl, $boolDisplay = true){

        include_once("libs/smarty/Smarty.class.php");
			$smarty = new Smarty();

			foreach($this->_arrData as $key=>$value){
				$smarty->assign($key, $value);
			}

			$smarty->assign("user", $_SESSION['user']??array());
			$smarty->assign("base_url", self::BASE_URL);
 
            $smarty->assign("arrErrors", $this->_arrErrors);
            $smarty->assign("arrSuccess", $this->_arrSuccess);

            if ($boolDisplay){
				$smarty->display("views/".$strTpl.".tpl");
			}else{
				return $smarty->fetch("views/".$strTpl.".tpl");
			}
    }
	protected function _generateCsrfToken():string {
		$strCSRFToken = bin2hex(random_bytes(32)); 
		return $_SESSION['csrf_token'] = $strCSRFToken;
	}
	
	protected function _verifyCsrfToken(string $strCSRFToken):bool {
		return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $strCSRFToken;
	}
}

