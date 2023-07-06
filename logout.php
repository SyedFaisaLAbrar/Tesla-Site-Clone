<?php
    //session_unset()  removes all session variables
    session_unset();
    //session_destroy() destroys the session
    session_destroy();
    header('Location:account.php');

?>
