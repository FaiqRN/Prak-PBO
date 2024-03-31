<?php
session_start();
?>
<html>
    <body>
        <?php
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "lizard";
        echo "session variable are set. ";
        ?>
    </body>
</html>