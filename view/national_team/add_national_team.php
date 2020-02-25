<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add New National team</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID National team</label>
                    <!-- Max length number is 11 -->
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;"
                        class="form-control" name="id_nation" placeholder="Number, Max-length: 11" required>
                </div>
                <div class="form-group">
                    <label>Name National team</label>
                    <input type="text" class="form-control" name="name_nation" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Continent</label>
                    <input type="text" class="form-control" name="continent" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Ranking</label>
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;"
                        class="form-control" name="ranking" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Coach name</label>
                    <input type="text" class="form-control" name="coach_name" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Add New</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancle</button>
            </form>
        </div>
    </div>
</div>
<br>
<?php
if (isset($message)) {
    echo "<div class='alert alert-success'>
    <strong>Success</strong>, national team " . $national_team->name . " is created
    </div>";
}
?>