<?php
include 'functions_sameer.php';
$funObj = new functions();
if (isset($_REQUEST['action']) && $_REQUEST['action'] != "")
{
    echo $funObj->$_REQUEST['action']($_REQUEST);
}
?>