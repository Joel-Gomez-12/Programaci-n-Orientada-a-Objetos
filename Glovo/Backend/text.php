<?php
    echo "Sha1 ".sha1("lucresia")."<br>";
    echo "Sha1 ".sha1("molineros")."<br>";
    echo "Sha1 ".sha1("insecto")."<br>";

    echo "Unique ".sha1(uniqid(rand(), true));
?>