<h2>List Club deleted</h2>

<table class="table table-hover" id="employee_data">
    <thead>
        <tr class="table-info">
            <th>Serial</th>
            <th>ID</th>
            <th>Name Club</th>
            <th>Stadium</th>
            <th>Coach Name</th>
            <th>Image</th>
            <th>Option</th>
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
            <td><img src="<?= 'data:image;base64,' . base64_encode($club->image) ?> " width="60px" height="60px"></td>
            <td> <a href="view_club.php?page=backupfile&id=<?php echo $club->id; ?>" class="btn btn-warning btn-sm">Back
                    Up File</a></td>
            <td> <a href="view_club.php?page=deleteForever&id=<?php echo $club->id; ?>"
                    class="btn btn-danger btn-sm">Delete Forever</a>
            </td>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>