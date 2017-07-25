<?php

http_response_code(200);
header('Content-Type: application/json; charset=utf-8');
echo json_encode(array(
    'outlets' => array(
        array(
            'text' => 'Outlet 1',
            'value' => 'outlet1',
        ),
        array(
            'text' => 'Outlet 2',
            'value' => 'outlet2',
            'class' => 'text-danger',
            'disabled' => 'disabled',
        ),
        array(
            'text' => 'Outlet 3',
            'value' => 'outlet3',
            'class' => 'bg-info',
        ),
    )
));