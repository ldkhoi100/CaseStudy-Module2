<h1 style='color:red;'>Do you want delete position <?= isset($cup->name) ? $cup->name : ''; ?> forever??</h1> <br>

<div class="alert alert-danger">
    <strong>Danger!</strong> This position will be delete and you could not be restored!
</div>

<h3><u>ID position</u>: <?= isset($cup->id) ? $cup->id : ''; ?> <br>
    <u>Name position</u>: <?= isset($cup->name) ? $cup->name : ''; ?>
</h3> <br>
<form action="view_position.php?page=deleteForever" method="post">
    <input type="hidden" name="id" value="<?php echo $cup->id; ?>" />
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger" />
        <a class="btn btn-info" href="view_position.php?page=backup_position" style="margin-left: 5px;">Cancel</a>
    </div>
</form>