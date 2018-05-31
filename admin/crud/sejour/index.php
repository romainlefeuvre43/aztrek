<?php 

require_once '../../../model/database.php';

$list_sejours = getAllEntity("sejour");

require_once '../../layout/header.php'; ?>

<h1>Gestion des séjours</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>Titre</th>
        <th>Photo</th>
        <th>Description</th>
        <th>Difficulté</th>
        <th>Programme</th>
        <th>Durée</th>
        <th>Mise en avant</th>
        <th>Places totales</th>
        <th>Actions</th>
    </tr>
    </thead>
    <body>
        <?php foreach ($list_sejours as $sejour) : ?>
            <tr>
                <td><?php echo $sejour["title"]; ?></td>
                <?php $picture = (!empty($sejour["picture"])) ? "../../../uploads/" . $sejour["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td><?php echo $sejour["description"]; ?></td>
                
                <td><?php echo $sejour["difficulty"]; ?></td>
                <td><?php echo $sejour["program"]; ?></td>
                <td><?php echo $sejour["duration"]; ?></td>
                <td><?php echo $sejour["highlighted"]; ?></td>
                <td><?php echo $sejour["places_total"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </body>
</table>

<?php require_once '../../layout/footer.php'; ?>

