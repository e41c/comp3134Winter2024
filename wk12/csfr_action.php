<?php
session_start();

// Retrieve session variable and post value
$session_confirmation = $_SESSION['confirmation'];
$post_confirmation = $_POST['confirmation'];

// Check if session variable and post value are equal
if ($session_confirmation === $post_confirmation) {
    echo "Valid request: Session variable and post value match.";
} else {
    echo "Invalid request: Session variable and post value do not match.";
}
?>
