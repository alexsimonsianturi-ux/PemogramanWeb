<?php
$userLogin = $_POST["userLogin"];
$passLogin = $_POST["passLogin"];

if(($userLogin == "admin") && ($passLogin == "admin"))
{
    echo "<h1>Login Berhasil!</h1>";

    echo "<h1>Selamat datang, ".$userLogin.".</h1>";

    echo "<a href='login.html'>
            kembali ke halaman login
          </a>";
}
else
{
    echo "<h1>
            Username : ".$userLogin." tidak terdaftar!
          </h1>";

    echo "<a href='login.html'>
            kembali ke halaman login
          </a>";
}
?>