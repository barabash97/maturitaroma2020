<?php
require_once __DIR__ . "/../utils/Database.php";



if($_REQUEST['method'] == "POST"){
    $database = new Database();
    $logged = false; // Flag se la procedura di login è andata a buon fine

    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkIssetUserWithPassword = $database->login($username, $password);

    if($checkIssetUserWithPassword){
        $_SESSION['username'] = $username;
    } else {
        //PAssword o username errati
    }
//Controllo database
}

//Se sono entrato, reindirizza sulla homepage
if($logged){
    header("Location: index.php");
    exit;
}

?>


<?php
echo "Form html Login";
?>