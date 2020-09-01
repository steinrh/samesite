<?php

// Set a same-site cookie for first-party contexts
setcookie('cookie1', 'value1', ['samesite' => 'Lax']);
// Set a cross-site cookie for third-party contexts
setcookie('cookie2', 'value2', ['samesite' => 'None', 'secure' => true]);

?>
