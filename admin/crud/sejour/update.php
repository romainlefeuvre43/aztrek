<?php 

require_once '../../../model/database.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);




require_once '../../layout/header.php'; ?>

<h1>Modifier séjour</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    
   
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?php echo $sejour["title"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($sejour["picture"])) : ?>
            <img src="../../../uploads/<?php echo $sejour["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" value="<?php echo $sejour["description"]; ?>" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="difficulty">Difficulté</label>
        <input type="number" id="difficulty" value="<?php echo $sejour["difficulty"]; ?>" name="difficulty" class="form-control">
    </div>
    <div class="form-group">
        <label for="program">Programme</label>
        <textarea name="program" id="program" value="<?php echo $sejour["program"]; ?>" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="duration">Durée</label>
        <input type="number" id="duration" value="<?php echo $sejour["duration"]; ?>" name="duration" class="form-control">
    </div>
    <div class="form-group">
        <label for="highlighted">Mise en avant</label>
        <input type="checkbox" id="highlighted" name="highlighted" value="<?php echo $sejour["highlighted"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="places_total">Places totales</label>
        <input type="number" id="places_total" name="places_total" value="<?php echo $sejour["places_total"]; ?>" class="form-control">
    </div>
    <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>



