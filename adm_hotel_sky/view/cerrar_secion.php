<?php
    session_destroy();
    $url_date = url;
    header("Location:$url_date");
?>