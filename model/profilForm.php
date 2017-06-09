<?php
$profilform = array(
    'nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
);

$profil = filter_input_array(INPUT_POST, $profilform);

$objProfil = new Profil();
$idProfil = $objProfil->createProfil($profil);
 ?>
