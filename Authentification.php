<?php include "header/header.php"; ?>


<body>

        <h2> veuillez vous identifiez : </h2>

    <form method='GET' action='vérification.php'>

        <label>login :
        <input type="text" name="login"  placeholder="votre adresse email" required>
        </label>

</br>
</br>

        <label>mot de passe :
        <input type="password" name="mdp" placeholder="entrez votre mot de passe" required>
        </label>

</br>
</br>

    

    <input type="submit" value="s'identifier">
    
    </form>

    <p>Si vous n'avez pas encore de compte nous vous invitons à vous inscrire</p>

    <button>
        <a href="inscription.php">  S'inscrire </a>
    </button>

</br>
</br>

   <button>
       <a href="AuthentificationAdmin.php"> S'identifier en tant qu'administrateur </a>
   </button>

    
</body>
<?php include "footer.html";?>