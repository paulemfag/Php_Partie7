<?php
$page = 'Exercice 6';
include 'header.php';
?>
<h1 class="text-center">Exercice 6</h1>
    <?php
        if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) { 
    ?>
    <p><?= 'Bonjour ' . htmlspecialchars($_POST['civility']) . ' ' . htmlspecialchars($_POST['lastname']) . '. Comment allez-vous ' . htmlspecialchars($_POST['firstname']) . '?'; ?></p>
    <?php } else { ?>
<div id="formItems">
    <form action="#" method="POST">
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
</div>
    <?php } ?>
    <?php include 'footer.php'; ?>
