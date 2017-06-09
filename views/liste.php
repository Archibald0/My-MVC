<?php
$user= new Users();
$users= $user->getUsers();
?>
<div class="container">
    <div class="row">
        <div class="col m10 offset-m1">
            <ul>
                <?php
                foreach ($users as $user) { ?>
                    <li><?php echo $user['nom'] ; ?> <a href="http://localhost/interventionMVC/site/?destination=show&id=<?php echo $user['id']; ?>">show</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
