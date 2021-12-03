<?php
session_start();
include('bdd.php');

if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE id =  ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    if (isset($_POST['newlogin']) && !empty($_POST['newlogin']) && $_POST['newlogin'] != $user['login']) {
        $newpseudo = htmlspecialchars($_POST['newlogin']); #sécurise notre variable (htmlspecialchars)#
        $insertlogin = $bdd->prepare("UPDATE utilisateurs SET login = ? WHERE id = ?");
        $insertlogin->execute(array($newpseudo, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }

    if (isset($_POST['newprenom']) && !empty($_POST['newprenom']) && $_POST['newprenom'] != $user['prenom']) {
        $newprenom = htmlspecialchars($_POST['newprenom']); #sécurise notre variable (htmlspecialchars)#
        $insertprenom = $bdd->prepare("UPDATE utilisateurs SET prenom = ? WHERE id = ?");
        $insertprenom->execute(array($newprenom, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }

    if (isset($_POST['newpassword']) && !empty($_POST['newpassword']) && isset($_POST['newpassword2']) && !empty($_POST['newpassword2'])) {
        $password = sha1($_POST['newpassword']);
        $password2 = sha1($_POST['newpassword2']);

        if ($password == $password2) {
            $insertpassword = $bdd->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
            $insertpassword->execute(array($password, $_SESSION['id']));
            header('Location: profil.php?id=' . $_SESSION['id']);
        } else {
            $msg = "Vos deux passwords ne correspondent pas";
        }
    }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Edition de profil</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css.css">

    </head>
    <header>
        <section>
            <ul class="navbar">
                <li>
                    <a href="index.php"><button>Accueil</button></a>
                </li>
                <li>
                    <a href="deconnexion.php"><button class="bouton-deconnexion">Déconnexion</button></a>
                </li>
                <li>
                    <a href="https://github.com/khellaf-rachedi/module-connexion"><button>Github</button></a>
                </li>
            </ul>
        </section>
    </header>

    <body class="background-editionprofil">
        <div id="container">
            <img class="logo-formulaire" src="https://zupimages.net/up/21/47/b5rb.png">
            <h1>Edition de mon profil</h1>
            <form method="POST" action="">
                <label> Pseudo :</label>
                <input type="text" name="newlogin" placeholder="login" value="<?php echo $user['login']; ?>" /><br /><br />
                <label> Prenom :</label>
                <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $user['prenom']; ?>" /><br /><br />
                <label> Nom :</label>
                <input type="text" name="newnom" placeholder="nom" value="<?php echo $user['nom']; ?>" /><br /><br />
                <label> Mot de passe :</label>
                <input type="password" name="newpassword" placeholder="password" /><br /><br />
                <label> Confirmation mot de passe :</label>
                <input type="password" name="newpassword2" placeholder="confirmation password" /><br /><br />
                <input type="submit" value="Mettre à jour mon profil" />
            </form>
            <?php
            if (isset($msg)) {
                echo $msg;
            } ?>

        </div>
        <footer>
        <div class="row">
            <div>
                <h3><a href="index.php">ACCUEIL</a></h3>
            </div>
            <div>
                <h3><a href="inscription.php">INSCRIPTION</a></h3>
            </div>
            <div>
                <h3> <a href="connexion.php">CONNEXION</a></h3>
            </div>
            <div>
                <h3> <a href="https://github.com/khellaf-rachedi/module-connexion">GITHUB</a></h3>
            </div>
        </div>
    </footer>
    </body>

    </html>
<?php
} else {
    header("Location: connexion.php");
}
?>