<?php 

require_once '../../../model/database.php';

$list_destinations = getAllEntity("destination");

require_once '../../layout/header.php'; ?>

<h1>Gestion des destinations</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>Titre</th>
        <th>Photo</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <body>
        <?php foreach ($list_destinations as $destination) : ?>
            <tr>
                <td><?php echo $destination["title"]; ?></td>
                <?php $picture = (!empty($destination["picture"])) ? "../../../uploads/" . $destination["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td><?php echo $destination["description"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $destination["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $destination["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </body>
</table>

<?php require_once '../../layout/footer.php'; ?>

