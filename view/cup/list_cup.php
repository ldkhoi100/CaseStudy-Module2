<h2>List Cup</h2>
<a href="view_cup.php?page=add"><button type="button" class="btn btn-success">Add new cup</button></a>
<a href="view_cup.php?page=backup_cup" class="btn btn-info" style="float: right">Back Up</a>
<br><br>

<table class="table table-hover">
    <thead>
        <tr class="table-info">
            <th>Serial</th>
            <th>ID</th>
            <th>Name cup</th>
            <th>Image</th>
            <th colspan="2">Option</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($cups as $key => $cup) : ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $cup->id ?></td>
            <td><?php echo $cup->name ?></td>
            <td><img src="<?= 'data:image;base64,' . base64_encode($cup->image) ?> " width="60px" height="60px"> </td>
            </td>
            <td> <a href="view_cup.php?page=delete&id=<?php echo $cup->id; ?>" class="btn btn-warning btn-sm">Delete</a>
            </td>
            <td> <a href="view_cup.php?page=edit&id=<?php echo $cup->id; ?>" class="btn btn-primary btn-sm">Update</a>
            </td>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>