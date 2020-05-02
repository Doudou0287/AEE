<?php
 include '../../templates/lang.php';

session_start();
$username = "";
$email = "";
$errors = array();
$password_1 = "";
$password_2 = "";
$msg = "";
$err = $lang['r'];
$err1 =  $lang['err1'];
$err2 =  $lang['err2'];
$err3 =  $lang['err3'];
$err4 =  $lang['err4'];
$err5 =  $lang['err5'];
$ln =  $lang['ln'];
$lo =  $lang['lo'];
$link = $lang['link1'];
$link1 = $lang['link4'];
$link2 = $lang['link5'];
$link3 = $lang['link6'];

$db = mysqli_connect('localhost','root','','aee');



if (isset($_POST['envoyer'])){
	$msg = $_POST{'textarea'};
	$email = $_POST{'email'};
	$DATE_MESSAGE = date("Y-m-d H:i:s");

	//not very usefull since it's already been treate by js but to double check it any way
	if (empty($msg)){
		array_push($errors, "$err1 ");
	}

	if (empty($email)){
		array_push($errors, "$err3 ");
	}


	if (count($errors) == 0){
			        
		$sql1 = "INSERT INTO contact (email, message, dateMessage) 
			VALUES ('$email', '$msg', '$DATE_MESSAGE')";

    }


	if(!mysqli_query($db,$sql1))
	{
		echo 'Not inserted';
	}
	else
	{
		echo "thanks for your message";
	}
	header("refresh:2; url=$link");

}





if (isset($_POST['register'])){
	$username = $_POST{'username'};
	$email = $_POST{'email1'};
	$password_1 = $_POST{'password_1'};
	$password_2 = $_POST{'password_2'};
			    

	if (empty($username)){
		array_push($errors, "$err1");
	}
			    
	if (empty($email)){
		array_push($errors, "$err3");
	}
		
	if (empty($password_1)){
		array_push($errors, "$err2");
	}

	if ($password_1 != $password_2){
		array_push($errors, "$err4");
	}

	if (count($errors) == 0){
		$password = md5($password_1);
		$sql = "INSERT INTO users (username, email, password) 
			VALUES ('$username', '$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "$ln";
        header('location:http://localhost/programmation-web-2---s4---2020-master/assets/php/formulaire.php');
    }
}

   
if (isset($_POST['login'])){
	$username = $_POST{'username'};
	$password = $_POST{'password'};
	        

	if (empty($username)){
		array_push($errors, "$err1");
	}
		    
	if (empty($password)){
		array_push($errors, "$err2");
	}

	if(count($errors)==0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "$ln";
			header('location:http://localhost/programmation-web-2---s4---2020-master/assets/php/formulaire.php');
		}
		else{
			array_push($errors, "$err5");
		}
	}
		    
}



   

if(isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header(' url=$link6');}

?>

