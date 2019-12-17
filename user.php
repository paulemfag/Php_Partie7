<?php
if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}
if (isset($_GET['lastname'])) {
    $lastname = $_GET['lastname'];
}
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
?>
<p><?= 'Nom : ' .$lastname  ?></p>
<p><?= 'Prénom :'  .$firstname  ?></p>