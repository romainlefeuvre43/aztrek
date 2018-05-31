<?php 

require_once '../../../model/database.php';

$list_depart = getAllDeparts();

require_once '../../layout/header.php'; ?>

<h1>Gestion date départ</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>Destination</th>
        <th>Séjour</th>
        <th>Date départ</th>
        <th>Prix</th>
        
        <th>Actions</th>
    </tr>
    </thead>
    <body>
        <?php foreach ($list_depart as $depart) : ?>
            <tr>
                <td><?php echo $depart["destination_title"]; ?></td>
                <td><?php echo $depart["sejour_title"]; ?></td>
                <td><?php echo $depart["date_depart"]; ?></td>
                
                <td><?php echo $depart["price"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $depart["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $depart["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </body>
</table>

<?php require_once '../../layout/footer.php'; ?>

