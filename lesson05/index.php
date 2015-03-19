<?php
if (isset($_COOKIE['authuser'])) {
    var_dump($_COOKIE['id']);
    header('Location:authusers.php');
} elseif (isset($_COOKIE['noauthuser'])) {
    header('Location:noauthuser.html');
} else {
    header('Location:regs.php');
}
?>
