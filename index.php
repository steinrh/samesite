<?php
echo 'Set Samesite';
header("Set-cookie: mycookie1=value; path=/; HttpOnly; SameSite=None; Secure', true");

?>
