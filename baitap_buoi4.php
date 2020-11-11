<style>
    fieldset {
        width: 150px;
        height: 200px;
        text-align: center;
        margin: 0px auto;
        font-size: 30px;
    }

    input {
        background: lightblue;
        padding: 12px;
        margin: 4px 0;
        box-sizing: border-box;
    }

</style>

<form method="post">
    <fieldset>
        <legend>Acount Login</legend>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Log in">
    </fieldset>
</form>
<?php
$arr = array(["admin", "admin"], ["thuy", "123"], ["codegym", "000"]);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['email']) && (!empty($_POST['password']))){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $login = false;
        foreach ($arr as $value) {
            if ($email == $value[0] && $pass == $value[1]) {
                header("location: danhsach-git.php");
                $login = true;
                break;
            }
        }
        if ($login) {
            echo "Dang nhap thanh cong ";
        } else {
            echo "Ban da dang nhap sai";
        }
    }

}



