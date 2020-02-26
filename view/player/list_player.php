<h2>List Player</h2>

<a href="view_player.php?page=add"><button type="button" class="btn btn-success">Add new
        player</button></a>
<a href="view_player.php?page=backup_player" class="btn btn-info" style="float: right">Back Up</a> <br><br>

<table class="table table-hover">
    <thead>
        <tr class="table-info">
            <th>Serial</th>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Clothers</th>
            <th>Name club</th>
            <th>Name nation</th>
            <th>Image</th>
            <th colspan="2" style="text-align: center">Option</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($players as $key => $player) : ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $player->id ?></td>
            <td><?php echo $player->firstname ?></td>
            <td><?php echo $player->lastname ?></td>
            <td><?php echo $player->age ?></td>
            <td><?php echo $player->height ?></td>
            <td><?php echo $player->weight ?></td>
            <td><?php echo $player->clothersnumber ?></td>
            <td><?php echo $player->nameclub ?></td>
            <td><?php echo $player->namenation ?></td>
            <td><img src="<?= 'data:image;base64,' . base64_encode($player->image) ?> " width="60px" height="60px">
            </td>
            </td>
            <td> <a href="view_player.php?page=delete&id=<?php echo $player->id; ?>"
                    class="btn btn-warning btn-sm">Delete</a></td>
            <td> <a href="view_player.php?page=edit&id=<?php echo $player->id; ?>"
                    class="btn btn-primary btn-sm">Update</a>
            </td>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>