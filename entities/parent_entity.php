<?php
class Entity {
    //protected string $_strPrefixe; /str_replace($this->_strPrefixe, "", $key)

    public function hydrate($arrData) {

        foreach ($arrData as $key=>$value){

            $strSetterName = "set".ucfirst($key);

            if(method_exists($this, $strSetterName)){

                $this->$strSetterName($value);
            }
        }
    }
}

