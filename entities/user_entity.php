<?php
include_once("parent_entity.php");


class User extends Entity{


    protected string $_strPrefixe = "";


    private int $_id;
    private string $_firstName;
    private string $_lastName;
    private string $_email;
    private string $_phone;
    private string $_password;
    private string $_profilePic;
    private string $_registrationTime;


    // Getters and Setters ID
    public function getId() :int{
        return $this->_id;
    }

    public function setId(int $intId){
        $this->_id = $intId;
    }


    // Getters and Setters First Name
    public function getFirstName() :string{
        return $this->_firstName;
    }

    public function setFirstName(string $strFirstName){
        $this->_firstName = trim($strFirstName);
        $this->_firstName = filter_var($strFirstName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    // Getters and Setters Last Name
    public function getLastName() :string{
        return $this->_lastName;
    }

    public function setLastName(string $strLastName){
        $this->_lastName = trim($strLastName);
        $this->_lastName = filter_var($strLastName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Getters and Setters Email
    public function getEmail() :string{
        return $this->_email;
    }
    
    public function setEmail(string $strEmail){
        $this->_email = $strEmail;
    }

    // Getters and Setters Phone
    public function getPhone() :string{
        return $this->_phone;
    }

    public function setPhone(string $strPhone){
        $this->_phone = $strPhone;
    }

    // Getters and Setters Password
    public function getPassword() :string{
        return $this->_password;
    }

    public function setPassword(string $strPassword){
        $this->_password = $strPassword;
    }

    public function getPasswordHash() :string{
        return password_hash($this->_password, PASSWORD_DEFAULT);
    }

    // Getters and Setters Profile Pic
    public function getProfilePic() :string{
        return $this->_profilePic;
    }

    public function setProfilePic(string $strProfilePic){
        $this->_profilePic = $strProfilePic;
    }

    // Getters and Setters Registration Date
    public function getRegistrationDate() :string{
        return $this->_registrationTime;
    }

    public function setRegistrationTime(string $strRegistrationTime){
        $this->_registrationTime = $strRegistrationTime;
    }

    public function getRegistrationDateFR() {
        $objDate = new DateTime($this->_registrationDate);
        return $objDate->format("d/m/Y");
    }
}

