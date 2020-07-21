<!DOCTYPE html>
<html>
<?php
session_start();
if(isset($_SESSION['is_login'])){
    header('Location: ./blog_manage_pdo.php');
}
?>
<head>
<meta charset="utf-8"/></head>
<title>Login</title>
</head>
<body>
<H2>This is Log in page</h2>
    <p>Input your ID & PW</p>
<form action='login_proc.php' method='POST'>
    <p>ID :
    <input type='text'name='id' /></p>
    <p>PW :
    <input type='password'name='pw' /></p>
    <input type='submit' value='Login'/>
</form>
<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
</body>
</html>
