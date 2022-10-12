<?php

class SignupController {
        
    public function usernameExists($username){
        $rows = SignupModel::getUserByUsername($username);
        if(count($rows)) {
            return True;
        } else {
            return False;
        }
    }

    public function emailExists($email){ 
        $rows = SignupModel::getUserByEmail($email);
        if(count($rows)) {
            return True;
        } else {
            return False;
        }
    }

    public function validateUsername($username) {
        if(strlen($username) === 0 || strlen($username) > 128 || $this->usernameExists($username)) {
            return False;
        } else {
            return True;
        }
    }

    public function validateEmail($email){
        if(strlen($email) === 0 || strlen($email) > 128 || !filter_var($email, FILTER_VALIDATE_EMAIL) || $this->emailExists($email)) {
            return False;    
        } else {
            return True;
        }
    }

    public function validatePassword($password, $repeat_password) {
        if(strlen($password) === 0 || strlen($password) > 128) {
            return False;    
        }
        if ($password !== $repeat_password) {
            return False;
        } else {
            return True;
        }
    }

    public function registerUser($username, $password, $email){
        return SignupModel::registerUser($username, $password, $email);
    }
}
