<style>
    fieldset{
        width: 150px;
        height: 200px;
        text-align: center;
        margin: 0px auto;
        font-size: 30px;
    }
    input{
        background: lightblue;
        padding: 12px;
        margin: 4px 0;
        box-sizing: border-box;
    }
</style>

<form method="post" >
    <fieldset >
        <legend>Acount Login</legend>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Log in">

    </fieldset>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']== "POST"){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if ($email == 'thuy' && $pass == 123){
        header("location: demo.php");
    }
    else {
        echo "Vui long nhap lai";
    }
}



