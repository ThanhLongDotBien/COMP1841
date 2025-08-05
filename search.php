<?php
session_start();
require '../includes/DatabaseConnection.php';
require '../includes/DatabaseFunction.php';

// 1. Lấy từ khóa
$search = trim($_GET['search'] ?? '');
$title = 'Search';

// 2. Gọi hàm đã đóng gói
$questions      = fetchQuestions($pdo, $search);
$totalQuestions = countQuestions($pdo, $search);

// 3. Render template
ob_start();
include '../templates/listquestion.html.php';
$output = ob_get_clean();
include '../templates/admin_layout.html.php';
