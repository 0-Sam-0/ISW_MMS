<?php
header('Content-Type: application/json');
$data = [
    'status' => 'success',
    'message' => 'Ciao dal server!',
    'timestamp' => time(),
];
echo json_encode($data);
