<?php
$page = 'Exercice 2';
include 'header.php';
?>
<form action="user.php" method="POST">
    <fieldset>
        <label for="firstname">Prénom :</label>
        <input name="firstname" type="text" placeholder="Paul" id="firstname">
        <label for="lastname">Nom :</label>
        <input name="lastname" type="text" placeholder="Fagot" id="lastname">
        <input type="submit">
    </fieldset>
</form>
<?php include 'footer.php'; ?>