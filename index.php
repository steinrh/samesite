<?php
echo 'Set Samesite';
header("Set-cookie: mycookie=value; path=/; HttpOnly; SameSite=None; Secure', false");

?>
