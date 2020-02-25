<h2>List National Team</h2>
<a href="view_national_team.php?page=add"><button type="button" class="btn btn-success">Add new
        national team</button></a>
<a href="view_national_team.php?page=backup_national_team" class="btn btn-info" style="float: right">Back Up</a>
<br><br>
<table class="table table-hover">
    <thead>
        <tr class="table-info">
            <th>Serial</th>
            <th>ID</th>
            <th>Name national_team</th>
            <th>Continent</th>
            <th>Ranking</th>
            <th>Coach Name</th>
            <th>Image</th>
            <th>Option</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($national_teams as $key => $national_team) : ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $national_team->id ?></td>
            <td><?php echo $national_team->name ?></td>
            <td><?php echo $national_team->continent ?></td>
            <td><?php echo $national_team->ranking ?></td>
            <td><?php echo $national_team->coach ?></td>
            <td><img src="<?= 'data:image;base64,' . base64_encode($national_team->image) ?> " width="60px"
                    height="60px"> </td>
            </td>
            <td> <a href="view_national_team.php?page=delete&id=<?php echo $national_team->id; ?>"
                    class="btn btn-warning btn-sm">Delete</a></td>
            <td> <a href="view_national_team.php?page=edit&id=<?php echo $national_team->id; ?>"
                    class="btn btn-primary btn-sm">Update</a>
            </td>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>