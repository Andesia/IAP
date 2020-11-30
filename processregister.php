<?php

    include_once './db.php';	
    include_once './user.php';
    
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    
    if(isset($_POST['register'])) // Register
	{
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $password = $_POST['password'];

        //we want to register 

        $user = new User();
        //set the member variable
        $user->setFullName($full_name);
        $user->setEmail($email);
        $user->setCity( $city);
        $user->setPassword($password);

        echo $user->register($pdo);
    }

    elseif (isset($_POST['Login'])) // Login
	{
		$Email = $_POST['email'];
		$Password = $_POST['password'];

		$user = new User();  //Object

		echo $user->setEmail($Email);
		echo $user->setPassword($Password);

		echo $user->login($pdo);
    }


?>

