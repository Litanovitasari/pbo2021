<?php

require_once 'User.php';

$heri = new User('Gilang Putra','abcd1234');

echo $heri->getUsername();
echo "<br>";
echo $heri->getPassword();

?>