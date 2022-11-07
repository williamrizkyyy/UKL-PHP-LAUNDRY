
<?php
session_start();
include 'header.php';
?>

<html>
    <head>
        <title>Uji Coba Login</title>
</head>
<body>
<div class="container">
<h3 align="center"> Selamat Datang <?=$_SESSION['username']?>. Role Anda sebagai <?=$_SESSION['role']?></h3>
</div>
</body>
    </html>