<?php
$profil = new Profil();
$profils = $profil->getProfils();
if (isset($user)) {
    foreach ($user as $key => $value) {
        ${$key} = $value;
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col m10 offset-m1">
            <form class="" action="index.php?action=traitementform" method="POST">
                    <p><input type="text" name="nom" placeholder="votre nom"></p>
                    <p><input type="text" name="prenom" placeholder="votre prénom"></p>
                    <p><input type="text" name="email" placeholder="votre Email"></p>
                    <p>
                        <select name="profil">
                            <?php foreach ($profils as $value) {
                                echo '<option value='.$value["id"].'>'.$value["lib"].'</option>';
                            } ?>
                        </select>
                    </p>
                    <p><input type="submit" class="btn blue" value="Submit"></p>
            </form>
        </div>
    </div>
</div>
