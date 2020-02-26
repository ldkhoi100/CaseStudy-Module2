<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use Model\Position;
use Model\PositionDB;
use Model\DBConnection;

class PositionController
{

    public $cupDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=football;charset=utf8", "root", "");
        $this->cupDB = new PositionDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'add_position.php';
        } else {
            $id = $_POST['id_position'];
            $name = $_POST['name_position'];
            /** image */
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $cup = new Position($id, $name, $image);
            $this->cupDB->create($cup);
            $message = 'New position created';
            include 'add_position.php';
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $cup = $this->cupDB->get($id);
            include 'edit_position.php';
        } else {
            $id = $_POST['id_position'];
            $cup = new Position($_POST['id_position'], $_POST['name_position'], addslashes(file_get_contents($_FILES['image']['tmp_name'])));
            $this->cupDB->update($id, $cup);
            echo '<meta http-equiv="refresh" content="0;url=view_position.php">';
        }
    }

    public function index()
    {
        $cups = $this->cupDB->getAll();
        include 'list_position.php';
    }

    public function showBackup()
    {
        $cups = $this->cupDB->showFileDeleted();
        include 'backup_view_position.php';
    }

    public function backupFile()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $cup = $this->cupDB->get($id);
            include 'backup_file_position.php';
        } else {
            $id = $_POST['id'];
            $this->cupDB->backUpFileDeleted($id);
            echo '<meta http-equiv="refresh" content="2;url=view_position.php?page=backup_position">';
            echo "  <div class='alert alert-success'>
                        <strong>Success</strong>, this position is backuped
                    </div>";
            echo "<p> Go home will start in <span id='ountdowntimer'>2 </span> Seconds <br><br>";
            echo "<a href='view_position.php' class='btn btn-info'>Go to list position</a>";
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $cup = $this->cupDB->get($id);
            include 'delete_position.php';
        } else {
            $id = $_POST['id'];
            $this->cupDB->delete($id);
            $message = "Delete Success";
            echo '<meta http-equiv="refresh" content="2;url=view_position.php">';
            echo "  <div class='alert alert-success'>
                        <strong>Success</strong>, this position is deleted
                    </div>";
            echo "<p> Go home will start in <span id='ountdowntimer'>2 </span> Seconds <br><br>";
            echo "<a href='view_position.php' class='btn btn-info'>Go to list position</a>";
        }
    }

    public function deleteForever()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $cup = $this->cupDB->get($id);
            include 'delete_forever.php';
        } else {
            $id = $_POST['id'];
            $this->cupDB->deleteForever($id);
            $message = "Delete Success";
            echo '<meta http-equiv="refresh" content="2;url=view_position.php?page=backup_position">';
            echo "  <div class='alert alert-success'>
                        <strong>Success</strong>, this position is deleted forever
                    </div>";
            echo "<p> Go home will start in <span id='ountdowntimer'>2 </span> Seconds <br><br>";
            echo "<a href='view_position.php' class='btn btn-info'>Go to list position</a>";
        }
    }
}
?>
<script src="/public/js/countdown.js"></script>