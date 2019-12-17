<?php
$page = 'Exercice 8';
include 'header.php';
?>
<h1 class="text-center">Exercice 8</h1>
    <?php
    //pathinfo ( string $path ,[ int $options = PATHINFO_EXTENSION ] require '.pdf'; );
        if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['monfichier'])) { 
    ?>
    <p><?= 'Bonjour ' . htmlspecialchars($_POST['civility']) . ' ' . htmlspecialchars($_POST['lastname']) . '. Comment allez-vous ' . htmlspecialchars($_POST['firstname']) . ' ? '. 
     'J\'ai bien recu votre fichier '. htmlspecialchars($_POST['monfichier']) .' .' ?></p>
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
        <input name="file" type="hidden" value="100000" />
      Transfère le fichier 
      <input type="file" name="monfichier" accept="application/pdf" />
        <input type="submit" value="Valider">
    </form>
</div>
    <?php } ?>
    <?php include 'footer.php'; ?>
