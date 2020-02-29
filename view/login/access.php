<?php include '../../model/db/connect.php'; ?>
<?php

function admin()
{
    $sql = "SELECT * FROM users WHERE flag = true";
    $result = $GLOBALS["connect"]->query($sql);
    foreach ($result as $row) {
        if ($row['username'] == $_SESSION['username']) {
            $boolen = true;
            break;
        } else {
            $boolen = false;
        }
    }
    return $boolen;
}

function boss()
{
    return $_SESSION['username'] == 'admin';
}
?>