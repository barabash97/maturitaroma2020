<?php


class Database
{
    /**
     * @var mysqli
     */
    private $mysqli;

    public function __construct()
    {
        $db_user = "cirmizicatalin";
        $db_pass = "";
        $db_host = "localhost";
        $db_database = "my_cirmizicatalin";
        $this->mysqli = new mysqli($db_host,$db_pass, $db_user, $db_database);


    }

    public function login($username, $password){
        $password = md5($password); //password criptata
        $sql = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";

        $result = $this->mysqli->query($sql);
        return ($result->num_rows > 0 ) ? true : false;
    }
}