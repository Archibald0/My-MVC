<?php
$userform = array(
    'nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'prenom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'email'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS
);

$user = filter_input_array(INPUT_POST, $userform);

$objUser = new Users();
$idUSer = $objUser->createUser($user);
 ?>
