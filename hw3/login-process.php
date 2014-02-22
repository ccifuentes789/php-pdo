<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

$request = Request::createFromGlobals();


if(empty($request->request['username'])  || empty($request->request['pw'])){
	header('Location: login.php');
	exit();
}

$username = $request->request['username'];
$password = $request->request['pw'];

$host = 'itp460.usc.edu';
$dbname = 'music';
$user = 'student1';
$pass = 'laravel';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


$sql = "SELECT * FROM users
		WHERE username = '$username' AND
		pw = SHA1('$password')

	"; 
	//die($sql);
$result = mysql_query($sql);
//take user credentials, see if there is a match against users table, using encrypted version of pw,
// compare encrypted pw
$rowCount = mysql_num_rows($result);
echo "$rowCount rows were returned";
//die();
//if($username == 'dtang' && $password == 'secret'){
	//entered successful credentials
if($rowCount >= 1){
	//session_start();
    $session = new Session();
    $session->set(username, student1);
    $session->set(email, "student1@gmail.com");


	/*$_SESSION['loggedin'] = true;
	$_SESSION['username'] = 'dtang';*/
	
	header('Location: index.php');
	exit();
	//DO NOT STORE PASSWORD IN SESSION
	//echo 'yay';
}
else{
	//entered in bad credentials
	header('Location: login.php');
	exit();
}
?>