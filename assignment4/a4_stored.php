<!-- a4_stored.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Stored XSS Demo</title>
</head>
<body>
    <?php
    // a) In PHP, read and output all the lines of text file in step 2)
    $file_contents = file_get_contents('a4_toread.txt');
    echo "<pre>$file_contents</pre>";
    ?>
</body>
</html>
