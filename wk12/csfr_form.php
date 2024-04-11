<?php
session_start();

// Create a random value for confirmation
$confirmation = bin2hex(random_bytes(16));

// Set session variable with the confirmation value
$_SESSION['confirmation'] = $confirmation;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSFR Form</title>
</head>
<body>
    <form method="post" action="csfr_action.php">
        <input type="hidden" name="confirmation" value="<?php echo $confirmation; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
