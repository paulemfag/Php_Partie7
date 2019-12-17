<?php
$page = 'Exercice 5';
include 'header.php';
?>
<form action="ex5.php" method="POST">
    <select name="civility" id="civility">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>
    <label for="lastname">Nom :</label>
    <input name="lastname" type="text">
    <label for="firstname">Prénom :</label>
    <input name="firstname" type="text">
    <input type="submit" value="Valider">
</form>
<?php 
if (isset($_POST['civility'])) {
    $civility = $_POST['civility'];
    echo $civility. ' ';
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
    echo $lastname. ' ';
}
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    echo $firstname;
}
?>
<?php include 'footer.php'; ?>
