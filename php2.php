<?php
$age = 23;
$nationality = "lndian";
//applying conditions on nalionality and age 
if ($nationality == "lndian") {
    if ($age >= 18) {
        echo "Eligible to give vote";
    } else {
        echo "Not eligoble to give vote";
    }
}