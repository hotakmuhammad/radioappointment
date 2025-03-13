<?php
class Entity {
    protected string $_strPrefixe;

    public function hydrate($arrData) {

        foreach ($arrData as $key=>$value){

            $strSetterName = "set".ucfirst(str_replace($this->_strPrefixe, "", $key));

            if(method_exists($this, $strSetterName)){

                $this->$strSetterName($value);
            }
        }
    }
}

