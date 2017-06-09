<?php
$profil= new Profil();
$profils= $profil->getProfils();
?>
<div class="container">
    <div class="row">
        <div class="col m10 offset-m1">
            <ul>
                <?php
                foreach ($profils as $profil) { ?>
                    <li><?php echo $profil['nom'] ; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
