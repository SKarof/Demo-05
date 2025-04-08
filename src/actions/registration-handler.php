<?php
    require_once '../modules/Validator.php';
    $validator = new Validator();
    $rules = [
        'name' => [
            'required' => true,
            'max' => 155
        ],
        'password' => [
            'required' => true,
            'max' => 155,
            'min' => 4
        ],
        'phone' => [
            'max' => 33,
            'min' => 8
        ],
    ];
    session_start();

    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password'],
        'password_confirm' => $_POST['password_confirm']
    ];
    $_SESSION['validation'] = [];
    $validator->validate($data, $rules);
    
?>