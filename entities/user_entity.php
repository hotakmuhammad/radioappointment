<?php
include_once("parent_entity.php");



class User extends Entity{


    protected string $_strPrefixe = "user_";

    private int $_id;
    private string $_name; 
    private string $_firstName; 
    private string $_email;
    private string $_phone;
    private string $_password;
    private string $_role;
    private string $_isbanned;
    private string $_regist_date;
    
    
    public function getId() :int{
        return $this->_id;
    }

    public function setId(int $intId){
        $this->_id = $intId;
    }

    
    public function getName() :string{
        return $this->_name;
    }

    public function setName(string $strName){
        $this->_name = trim($strName);
        $this->_name = filter_var($strName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    
    public function getFirstName() :string{
        return $this->_firstName;
    }

    public function setFirstName(string $strFirstName){
        $this->_firstName = trim($strFirstName);
        $this->_firstName = filter_var($strFirstName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    
  
    public function getEmail() :string{
        return $this->_email;
    }
    
    public function setEmail(string $strEmail){
        $this->_email = $strEmail;
    }


    public function getPhone() :string{
        return $this->_phone;
    }

    public function setPhone(string $strPhone){
        $this->_phone = $strPhone;
    }


    public function getPassword() :string{
        return $this->_password;
    }

    public function setPassword(string $strPassword){
        $this->_password = $strPassword;
    }

    public function getPasswordHash() :string{
        return password_hash($this->_password, PASSWORD_DEFAULT);
    }
    

    public function getRole() :string{
        return $this->_role;
    }

    public function setRole(string $strRole){
        $this->_role = $strRole;
    }


    public function getIsBanned() :string{
        return $this->_isbanned;
    }

    public function setIsBanned(string $strIsBanned){
        $this->_isbanned = $strIsBanned;
    }


    public function getRegist_date() :string{
        return $this->_regist_date;
    }

    public function setRegist_date(string $strRegist_date){
        $this->_regist_date = $strRegist_date;
    }

    public function getsetRegist_dateFR() {
        $objDate = new DateTime($this->_regist_date);
        return $objDate->format("d/m/Y");
    }
}

