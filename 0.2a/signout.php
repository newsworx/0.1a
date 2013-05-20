<?php

setcookie("compass_auth", "", time()-3600);
header('Location: login.php');


?>