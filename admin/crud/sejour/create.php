<?php
require_once '../../../model/database.php';

$list_destinations = getAllEntity("destination");
$list_sejours = getAllEntity("sejour");
require_once '../../layout/header.php';
?>

<h1>Nouveau séjour</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="destination">Destination</label>
        <select id="destination" name="destination_id" class="form-control">
            <?php foreach ($list_destinations as $destination) : ?>
            <option value="<?php echo $destination["id"]; ?>"><?php echo $destination["title"]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="difficulty">Difficulté</label>
        <select id="difficulty" name="difficulty" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
            
             
    </div>
    <div class="form-group">
        <label for="program">Programme</label>
        <textarea name="program" id="program" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="duration">Durée</label>
        <input type="number" id="duration" name="duration" class="form-control">
    </div>
    <div class="form-group">
        <label for="highlighted">Mise en avant</label>
        <input type="checkbox" id="highlighted" name="highlighted" class="form-control">
    </div>
    <div class="form-group">
        <label for="places_total">Places totales</label>
        <input type="number" id="places_total" name="places_total" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
    
</form>


<?php require_once '../../layout/footer.php'; ?>




