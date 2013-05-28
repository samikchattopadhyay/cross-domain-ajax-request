<?php

if ( $_GET['example'] == 'Second' ) {
    $data = json_encode($_GET);
    echo $_GET['jsonp_callback'] . '(' . $data . ');';
} else {
    echo json_encode($_GET);
}