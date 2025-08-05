<?php
session_start();
// Nếu chưa login (chưa có userID) thì redirect về login
if (!isset($_SESSION['userID'])) {
    echo '<script>
            alert("Please log in!");
            window.location.href = "login.php";
          </script>';
    exit;
    
}
