<?php 
    session_start();

    session_unset();
    session_destroy();

    echo "<script>
    alert('User telah di logout');
    window.location.href = 'Login.php';
    </script>";

?>