<?php
session_start();

header('Content-Type: application/json');

if (isset($_SESSION['user_id'])) {
    echo json_encode([
        'logged_in' => true,
        'user_id' => $_SESSION['user_id'],
        'user_name' => $_SESSION['user_name'] ?? 'User'
    ]);
} else {
    echo json_encode([
        'logged_in' => false,
        'message' => 'Not logged in'
    ]);
}
?>