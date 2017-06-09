<?php
$userform = array(
    'nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'prenom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'email'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'profil'=> FILTER_SANITIZE_NUMBER_INT
);

$user = filter_input_array(INPUT_POST, $userform);

$objUser = new Users();
$idUSer = $objUser->createUser($user);
 ?>
