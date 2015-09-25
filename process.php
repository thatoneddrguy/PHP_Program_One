<a href="index.html">Go back</a><br>
<?php
    session_start();
    if(!isset($_SESSION["total"]))
    {
        $_SESSION["total"] = $_POST["cost"];
    }
    else
    {
        $_SESSION["total"] = $_SESSION["total"] + $_POST["cost"];
    }
    //echo $_SESSION["total"];
    echo "Total: ".$_SESSION["total"];
?>