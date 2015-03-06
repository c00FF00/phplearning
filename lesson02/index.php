<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>lesson02</title>
</head>
<body>


<?php
function fibo{$z} {
    if ($z < 2) {
        return 1;
    }
    else { return fibo($z - 1) + fibo($z - 2);
}

echo fibo(2);

?>




</body>
</html>