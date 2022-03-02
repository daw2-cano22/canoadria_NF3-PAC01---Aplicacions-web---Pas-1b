<?php
class Address {    
    private $FirstName;
    private $LastName;
    private $Username;
    private $Password;
    private $EmailAddress;

    public function setFirstname(string $name) {
        $this->FirstName = $name;
        return $this;   
    }  
    public function setLastName(string $name) {
        $this->LastName = $name;
        return $this; 
    }
    public function setUsername(string $name) {
        $this->Username = $name;
        return $this; 
    }
    public function setPassword(string $name) {
        $this->Password = $name;
        return $this; 
    }
    public function setEmailAddress(string $name) {
        $this->EmailAddress = $name;
        return $this; 
    }
    
    protected function DefineTableName() {
            return("system_user");
    }
    protected function DefineRelationMap() {
        return(array(
            "id" => "ID",
            "first_name" => "FirstName",
            "last_name" => "LastName",
            "username" => "Username",
            "md5_pw" => "Password",
            "email_address" => "EmailAddress",
            "date_last_login" => "DateLastLogin",
            "time_last_login" => "TimeLastLogin",
            "date_account_created" => "DateAccountCreated",
            "time_account_created" => "TimeAccountCreated"));
    }

    public function __toString() {
        $bookInfo = 'User Name: ' . $this->FirstName . $this->LastName . PHP_EOL;        
        $bookInfo .= 'Email: ' . $this->EmailAddress . PHP_EOL;        
        return $bookInfo;    
    }
}  
?>