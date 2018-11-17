<?php 

// index.php?module=users
// namanya query string
$module = empty($_GET['module']) ? 'home' : $_GET['module'];

// routing
switch($modul) {
    case "users":
    include 'modules/users/index.php';
    break;
    case "rekening":
    include 'modules/rekening/index.php';
    break;
    case "transaksi":
    include 'modules/transaksi/index.php';
    break;
}
?>

