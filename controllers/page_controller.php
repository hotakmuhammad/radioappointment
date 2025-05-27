<?php


class PageCtrl extends Ctrl {

     public function about() {


        $this->_arrData["strPage"]     = "about";

        $this->_arrData["strTitle"] = "A propos";

        $this->_arrData["strDesc"]     = "Page de contenu";

        $this->displayTemplate("about");

    } 
 
    public function mentions() {
        $this->_arrData["strPage"]     = "mention_legales";

        $this->_arrData["strTitle"] = "Mentions légales";

        $this->_arrData["strDesc"]     = "Page de mentions légales";

        $this->displayTemplate("mentions");
    }
 
}
