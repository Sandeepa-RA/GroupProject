<?php
    session_start();
    $_SESSION['id'] = $id;
    session_destroy();
    header('Location:../index.html');
    exit;
 ?>