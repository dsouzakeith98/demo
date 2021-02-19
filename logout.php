<?php
    session_start();

    session_unset();

    session_destroy();
   echo "<script type='text/javascript'> 
    alert('Sucsessfully Logged Out '); 
    window.location = 'run.php'; 
    </script>";
    exit();
?>