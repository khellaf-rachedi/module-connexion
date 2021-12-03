<?php
session_start();
include('bdd.php');

$utilisateurs = $bdd->query('SELECT * FROM utilisateurs ORDER BY id DESC');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Espace admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">

</head>
<header>
        <section>
            <article>
                <img class="logo-ariane" src="https://zupimages.net/up/21/47/b5rb.png" alt="logo accueil" />
            </article>
            <ul class="navbar">
                <li>
                    <a href="index.php"><button>Accueil</button></a>
                </li>
                <li>
                    <a href="admin.php"><button>Page Admin</button></a>
                </li>
                <li>
                    <a href="https://github.com/khellaf-rachedi/module-connexion"><button>Github</button></a>
                </li>
                <li>
                    <a href="deconnexion.php"><button class="bouton-deconnexion">Deconnexion</button></a>
                </li>
            </ul>
        </section>
    </header>
<body class="background-admin">
        <table class="table-admin">
        <caption>Utilisateurs</caption>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Login</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($u = $utilisateurs->fetch()) {
                    echo "</tr>";
                    echo "<th> $u[id] </th>";
                    echo "<th> $u[login] </th>";
                    echo "<th> $u[prenom] </th>";
                    echo "<th> $u[nom] </th>";
                    echo "<th> $u[password] </th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
    <footer>
        <div class="row">
            <div>
                <h3><a href="index.php">ACCUEIL</a></h3>
            </div>
            <div>
                <h3><a href="admin.php">Page Admin</a></h3>
            </div>
            <div>
                <h3> <a href="https://github.com/khellaf-rachedi/module-connexion">GITHUB</a></h3>
            </div>
        </div>
    </footer>
</body>

</html>
<?php

?>