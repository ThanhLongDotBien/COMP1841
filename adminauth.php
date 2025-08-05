<?php
session_start();

// Nếu chưa login hoặc không phải admin thì chuyển về login
if (!isset($_SESSION['userID']) || ($_SESSION['role'] ?? '') !== 'admin') {
    header('Location: ../login.php');
    exit;
}
