<?php
include 'layout.php';
include 'users.php';

$errorMessage = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ajoutez cette ligne pour voir les données POST
    // vérifie si l'email et le password existent dans le tableau $_POST 

// vérifie si l'email et le password existent dans le tableau $_POST 

    if (isset($_POST['email']) && isset($_POST['password'])) {

        // vérifie si l'email est incorrect (syntaxe) via la fonction FILTER_VALIDATE_EMAIL (autres filtres possibles URL, IP...)
        // filter var = Filtre une variable avec un filtre spécifique

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "L'adresse mail n'est pas valide.";
        }
        
        // parcourt le tableau des users pour vérifier si l'email et le password sont corrects


        else {
            foreach ($users as $user) {
                if (
                    $user['email'] === $_POST['email'] &&
                    $user['password'] === $_POST['password']
                ) 
                // si oui alors l'utilisateur est reconnu
                {
                    $email = $_SESSION['user_email'] = $user['email']; // Stocker l'ID de l'utilisateur dans la session
                    $password = $_SESSION['user_password'] = $user['password']; // Stocker l'email de l'utilisateur dans la session
                    $username = $_SESSION['user_name'] = $user['username']; // Stocker le nom de l'utilisateur dans la session
                    // COOKIES =)
                    setcookie("email", $email, time() + 3600);
                    setcookie("password", $password, time() + 3600);
                    setcookie("username", $username, time() + 3600);
                    header('Location: index.php');
                    exit;
                }
            }

            if (!isset($_SESSION['user_email'])) {
                $errorMessage = "L'adresse mail et/ou le mot de passe est/sont incorrect(s).";
            }
        }
    } else {
        $errorMessage = "Veuillez remplir tous les champs.";
    }
}
?>

<!-- ===hero banner=== -->

<section class="hero-banner">
    <div class="mobile-login-form _dp_column _w_30">
        <?php if ($errorMessage): ?>
            <div class="error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
            <form action="login.php"  method="POST">
                <label>E-mail</label>
                <input id="login-email" name="email" type="email" placeholder="toto@gmail.com">
                <label>Mot de passe</label>
                <input id="login-password" name="password" type="password" placeholder="">
                <button class="submit-button" type="submit">Envoyer</button>
            <a href="forgotten-password.php">Mot de passe oublié</a>
        </form>
    </div>
</section>

<!-- ===fin hero-banner=== -->

<!-- ===footer=== -->

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<!-- ===fin footer=== -->


</body>
</html>