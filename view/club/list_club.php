<h2>List Club</h2>
<a href="view_club.php?page=add"><button type="button" class="btn btn-success">Add new club</button></a>
<a href="view_club.php?page=backup_club" class="btn btn-info" style="float: right">Back Up</a>
<br><br>
<table class="table table-hover">
    <thead>
        <tr class="table-info">
            <th>Serial</th>
            <th>ID</th>
            <th>Name Club</th>
            <th>Stadium</th>
            <th>Coach Name</th>
            <th>Image</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($clubs as $key => $club) : ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $club->id ?></td>
            <td><?php echo $club->name ?></td>
            <td><?php echo $club->stadium ?></td>
            <td><?php echo $club->coach ?></td>
            <td><img src="<?= 'data:image;base64,' . base64_encode($club->image) ?> " width="60px" height="60px"> </td>
            </td>
            <td> <a href="view_club.php?page=delete&id=<?php echo $club->id; ?>"
                    class="btn btn-warning btn-sm">Delete</a></td>
            <td> <a href="view_club.php?page=edit&id=<?php echo $club->id; ?>" class="btn btn-primary btn-sm">Update</a>
            </td>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>