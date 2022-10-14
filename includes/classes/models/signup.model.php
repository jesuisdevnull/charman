<?php

class SignupModel extends Dbh {

    public static function getUserByEmail($email) {
        $dbh = parent::connect();
        $statement = $dbh->prepare("SELECT * FROM ServiceUser WHERE mail = :email");
        $statement->bindParam(":email",$email);
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function getUserByUsername($username){ 
        $dbh = parent::connect();
        $statement = $dbh->prepare("SELECT * FROM ServiceUser WHERE username = :username");
        $statement->bindParam(":username",$username);
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function registerUser($username, $plain_password, $email) {
        $dbh = parent::connect();
        $statement = $dbh->prepare("INSERT INTO ServiceUser VALUES(:email, :username, :hashed_password, :username)");
        $statement->bindParam(":email",$email);
        $statement->bindParam(":username",$username);
        $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
        $statement->bindParam(":hashed_password",$hashed_password);
        return $statement->execute();
    }

}
