<?php
setcookie("USERNAME", "", time()-3600);
setcookie("FULLNAME", "", time()-3600);
setcookie("USERS", "", time()-3600);
header("Location: ./");