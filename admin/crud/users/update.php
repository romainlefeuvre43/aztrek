<?php 

require_once '../../../model/database.php';

$id = $_GET["id"];
$user = getOneEntity("user", $id);




require_once '../../layout/header.php'; ?>

<h1>Modifier utilisateur</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo $user["pseudo"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $user["email"]; ?>" class="form-control">
    </div>
    
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>



