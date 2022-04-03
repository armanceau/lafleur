
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création du comtpe</title>
</head>
<body>
    <h2>   Ajoutez vos informations</h2>
    <form method="GET" action="CreationCompte.php">
        <!-- Adresse mail (login) -->
        <label>Email:</label>
        <br>
        <input type="email" name="email" required ><br/>

<br>

        <!-- Mot de passe -->
        <label>Mot de passe:</label>
        <br>
        <input type="password" name="motDePasse" maxlength="30" minlength="9" required><br/>

<br>

        <!-- Nom -->
        <label>Nom:</label>
        <br>
        <input type="text" name="nom" required ><br/>

<br>

        <!-- Prénom -->
        <label>Prénom:</label>
        <br>
        <input type="text" name="prenom" required ><br/>

<br>

        <!-- Adresse -->
        <label>Adresse:</label>
        <br>
        <input type="text" name="adresse" required ><br/>

<br>

        <!-- Téléphone -->
        <label>Téléphone:</label>
        <br>
        <input type="number" name="tel" maxlength="10" minlength="10" required ><br/>
        <br>
        <button type="submit">Créer</button>
<br>
        <button type="reset"> Annuler </button>

    </form>

   

</body>
</html>