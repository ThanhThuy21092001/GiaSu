<?php
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@example.com' && $password == 'admin@sms'){
            $_SESSION['login'] = true;
            header('Location: ../admin/dashboard.php');
        }
        else{
            echo 'Invailid Credentials';
        }
    }
?>