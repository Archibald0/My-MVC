<?php
$Users = new Users();
$user = $Users->getUser($id);
?>
<div class="container">
    <div class="row">
        <div class="col m10 offset-m1">
            <ul>
                <li>Nom : <?php echo $user['nom'];?></li>
                <li>Prénom : <?php echo $user['prenom'];?></li>
                <li>Email : <?php echo $user['email'];?></li>
                <li><button type="button" name="button" class="btn red" id="btn_show">edit</button></li>
            </ul>

        </div>
    </div>
    <div class="row" id="show">
        <div class="col m10 offset-m1">
            <form class="" action="index.php?action=traitementform&id=<?php echo $user['id']; ?>" method="POST">
                    <p><input type="text" name="nom" placeholder="votre nom" value="<?php echo $user['nom'];?>"></p>
                    <p><input type="text" name="prenom" placeholder="votre prénom" value="<?php echo $user['prenom'];?>"></p>
                    <p><input type="text" name="email" placeholder="votre Email" value="<?php echo $user['email'];?>"></p>
                    <p><input type="submit" class="btn blue" value="Submit"></p>
            </form>
        </div>
    </div>
</div>
