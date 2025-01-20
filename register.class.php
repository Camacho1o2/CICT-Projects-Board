<?php
class RegisterUser{
    //class properties
    private $firstname;
    private $middlename;
    private $lastname;
    private $address;
    private $age;
    private $emailaddress;
    private $contactno;
    private $username;
    private $raw_password;
    private $encrypted_password;
    public $error;
    public $success;
    private $storage = "data.json"
    private $stored_users;
    private $new_user;

    public function __construct($username, $password){
        $this->username = trim($this->username);
        $this->username = filter_var($username, FILTER_SANITIZE_STRING);

        $this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
        $this->encrypted_password = password_hass($this->$raw_password, PASSWORD_DEFAULT);

        $this->stored_users = json_decode(file_get_contents($this->storage), true);

        $this->new_user = [
            'firstname' => $this->firstname;
            'middletname' => $this->middlename;
            'lastname' => $this->lastname;
            'address' => $this->address;
            'age' => $this->age;
            'emailaddress' => $this->emailaddress;
            'contactno' => $this->contactno;
            'username' => $this->username;
            'password' => $this->encrypted_password;
        ];
        if($this->checkFieldValues()){
            $this->insertUser();
        }

        public function checkFieldValues(){
            if(empty($this->username) || empty($this->raw_password)){
                $this->error = "It is required to input your username and password.";
                return false
            }else{
                return true
            }
        }

        private function usernameExists(){
            foreach($this->stored_users as $user){
                if($this->username == $user['username']){
                    $this->error = "Username already taken, please choose a different one.";
                    return true;
                }
            }
            return false;
        }

        private function insertUser(){
            if($this->usernameExists() == FALSE){
                array_push($this->stored_users, $this->new_user);
                if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
                    return $this->success = "Your Registration was successful";
                }else{
                    return $this->error = "Something went wrong, Try again";
                }
            }
        }
}// end of class