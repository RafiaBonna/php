<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Simple {
    public function __construct() {
        echo "Object created.\n";
    }

    public function __destruct() {
        echo "Object destroyed.\n";
    }
}

$obj = new Simple();
// When the script ends or $obj is unset, the destructor runs automatically.
?>
</body>
</html>