<?php 
session_start();
unset($_SESSION["id"]);
unset($_SESSION["id"]);
session_destroy();
echo "<script>
    alert('You are logout successfully')
    window.location='login.php';
</script>";
?>