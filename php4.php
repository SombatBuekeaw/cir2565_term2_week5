<?php
$role = 'admin';
$message = "";

switch ($role) {
    case 'admin':
        $message = ' Welcome,admin!';
        break;
    case 'editor':
        $message = ' Welcome! You have some pending articles to edit';
        break;
    case 'editor':
        $message = ' Welcome! Do you want to publish the draft article?';
        break;
    case 'editor':
        $message = ' Welcome! check out a\some new articles';
        break;
    case 'editor':
        $message = ' you are nat authorized to axxess this page';
        break;
    case 'editor':
}

echo $message;