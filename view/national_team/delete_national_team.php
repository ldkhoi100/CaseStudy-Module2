<?php if (admin()) : ?>

<h1 style='color:red;'>Do you want delete national team <?= isset($national_team->name) ? $national_team->name : ''; ?>?
</h1> <br>

<div class="alert alert-danger">
    <strong>Danger!</strong> This national team will be delete, but you can back up at <a
        href="view_national_team.php?page=backup_national_team">Here</a>
</div>

<h3><u>ID national team</u>: <?= isset($national_team->id) ? $national_team->id : ''; ?> <br>
    <u>Name national team</u>: <?= isset($national_team->name) ? $national_team->name : ''; ?>
</h3> <br>

<form action="view_national_team.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $national_team->id; ?>" />
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger" />
        <a class="btn btn-info" href="view_national_team.php" style="margin-left: 5px;">Cancel</a>
    </div>
</form>

<!-- else, display notfound page -->
<?php else : ?>
<h1 style="color:red; text-align:center;">Not found</h1>
<?php endif; ?>