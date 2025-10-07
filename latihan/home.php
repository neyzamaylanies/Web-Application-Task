<?php
$user = "admin";  // silahkan ubah ke "user" untuk melihat halaman user

if ($user == "admin") {
    include("admin.php");
} elseif ($user == "user") {
    include("user.php");
} else {
    echo "Role tidak dikenali!";
}
?>
