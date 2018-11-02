<?php
// outputs the username that owns the running php/httpdprocess
// (on a system with the "whoami" executable in the path)
echo exec('http://localhost/MyWeb/list_view.php' $output, $return_var);
?> 