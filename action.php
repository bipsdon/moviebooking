<?php
session_start();
if (isset($_SESSION['user_email'])) {
    header("Location: seats.php");
    exit;
} else {
    header("Location: login.php?returnUrl=" . urlencode('seats.php'));
    exit;
}
