<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add New Position</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID Position</label>
                    <!-- Max length number is 11 -->
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;"
                        class="form-control" name="id_position" placeholder="Number, Max-length: 11" required>
                </div>
                <div class="form-group">
                    <label>Name Position</label>
                    <input type="text" class="form-control" name="name_position" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="image"
                        value="<?= 'data:image;base64,' . base64_encode($cup->image) ?>" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary" name="insert" id="insert">Add New</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancle</button>
            </form>
        </div>
    </div>
</div>
<br>
<?php
if (isset($message)) {
    echo "<div class='alert alert-success'>
    <strong>Success</strong>, position " . $cup->name . " is created
    </div>";
}
?>