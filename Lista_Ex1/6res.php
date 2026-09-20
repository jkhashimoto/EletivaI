<?php
    $temp1 = $_POST["temp1"];
    $temp2 = ($temp1 - 32) * 5 / 9;
    echo "A temperatura em °C é $temp2";