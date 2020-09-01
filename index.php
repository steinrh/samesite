<?php
echo 'Set Samesite';
header("Set-cookie: mycookie2=value; path=/; HttpOnly; SameSite=None; Secure', true");

?>
