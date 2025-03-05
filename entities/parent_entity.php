<?php
class Entity {
    protected String $_strprefixe;

    public function hydrate($arrData) {

        foreach ($arrdata as $key => $value){

            $strSetterName = "set".ucfirst(str_replace($this->_strprefixe, "", $key));

            if(method_exists($this, $strSetterName)){

                $this->$strSetterName($value);
            }
        }
    }
}

