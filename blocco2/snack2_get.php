<?php

$new_guest = strtolower($_GET['guest_name']);
//var_dump($_GET['guest_name']);

$invitati = [
    'andrea',
    'beatrice',
    'mario',
    'luca',
    'franco',
];
if (in_array($new_guest, $invitati)) {
    echo 'ok';
} else {
    echo 'ko';
}
