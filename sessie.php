<?php 
if(isset($_POST['login'])){
session_start();


$logins = array('test' => 'test','wesley' => 'wesley','admin' => 'admin');
                
$Username = isset($_POST['username']) ? $_POST['username'] : '';
$Password = isset($_POST['password']) ? $_POST['password'] : '';

if (isset($logins[$Username]) && $logins[$Username] == $Password){

	$_SESSION['UserData']['Username']=$logins[$Username];
	$_SESSION['user'] =$logins[$Username];
	header("location:main.php");
	exit;
}

else {
    echo '<script>alert("Verkeerd wachtwoord ")</script>';
}
}
?>

<html>
<head>
    <title>Login Page</title>
    <style> 
        body{
            background-color: #000000;
            margin: 0;
            padding: 0;
        }
        form{
            width: 400px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 30px #ffffff;
            border-radius: 5px;
            margin: 50px auto;
        }
        form h1{
            margin: 0 0 10px 0;
            padding: 0;
            font-size: 22px;
            font-weight: 400;
            text-align: center;
        }
        form input{
            width: 100%;
            margin-bottom: 10px;
        }
        form input[type="text"]{
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000000;
        }
        form input[type="password"]{
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000000;
        }
        form input[type="submit"]{
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000000;
            background-color: #000000;
            color: #ffffff;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }
        form input[type="submit"]:hover{
            background-color: #c0c0c0;
        }

    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Login</h1>
        Username: <input type="text" name="username" />
        Password: <input type="password" name="password" />
        <input type="submit" name="login" value="login" />
    </form>
</body>
</html>