<!-- a4_reflected.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reflected XSS Demo</title>
</head>
<body>
    <?php
    // a) In PHP, output a query string value without sanitizing it
    $query_string_value = $_GET['input']; // This is where the unsanitized input is retrieved
    echo "<h1>Hello, $query_string_value!</h1>";
    ?>
    <script>
        // b) In browser navigate to page above and pass query string value to alert message to screen.
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var inputValue = urlParams.get('input');
        alert(inputValue);
    </script>
</body>
</html>
