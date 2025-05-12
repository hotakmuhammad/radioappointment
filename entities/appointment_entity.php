<?php
include_once("parent_entity.php"); 
 
class Appointment extends Entity{


    protected string $_strPrefixe = "apt_";

    private int $_id;
    private string $_date;
    private string $_time;
    private string $_status ;
    private string $_registdate;
    private int $_user_id ;
    private string $_user_name; // Added for user_name
    private string $_user_firstname; // Added for user_firstname
    private int $_test_id;
    private string $_test_name; // Added for test_name
    private string $_appointment;
    // private string $

    public function getId() :int{
        return $this->_id;
    }

    public function setId(int $intId){
        $this->_id = $intId;
    }

    public function getDate() :string{
        return $this->_date;
    }

    public function setDate(string $strDate) {
        $this->_date = $strDate;
    }

    public function getDateFr() {
        // Convertit la date au format français (jj/mm/aaaa)
        $objDate = new DateTime ($this->_date);
        return $objDate->format("d/m/Y");
    }

    public function getTime() :string{
        return $this->_time;
    }

    public function setTime(string $strTime) {
        $this->_time = $strTime;
    }

    public function getStatus() :string{
        return $this->_status;
    }

    public function setStatus(string $strStatus) {
        $this->_status = $strStatus;
    }


    // Getters and Setters Registration Date
    public function getRegistdate() :string{
        return $this->_registdate;
    }

    public function setRegistdate(string $strRegistdate){
        $this->_registdate = $strRegistdate;
    }

    public function getsetRegistdateFR() {
        $objDate = new DateTime($this->_registdate);
        return $objDate->format("d/m/Y");
    }

    public function getUserId() :int{
        return $this->_user_id;
    }

    public function setUserId(int $intUserId){
        $this->_user_id = $intUserId;
    }
    public function getUserName(): string {
        return $this->_user_name;
    }

    public function setUserName(string $userName) {
        $this->_user_name = $userName;
    }

    public function getUserFirstname(): string {
        return $this->_user_firstname;
    }

    public function setUserFirstname(string $userFirstname) {
        $this->_user_firstname = $userFirstname;
    }
    public function getTestId() :int{
        return $this->_test_id;
    }

    public function setTestId(int $intTestId){
        $this->_test_id = $intTestId;
    }

    public function getTestName(): string {
        return $this->_test_name;
    }

    public function setTestName(string $testName) {
        $this->_test_name = $testName;
    }
    public function getAppointment(): string {
        return $this->_appointment;
    }

    public function setAppointment(string $appointment) {
        $this->_appointment = $appointment;
    }

}