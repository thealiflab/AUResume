<?php
    $title = "Login | AU Resume";
    require "./assets/includes/header.php";

?>

    <div class="w-100">
        <div class="d-flex gap-2 justify-content-center">
            <img class="mb-3" src="./assets/images/ar_logo.png" alt="AU Resume Logo" height="120">
            <div class="title-name">AU Resume</div>
        </div>
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method="POST" action="assets/actions/login.php">
                <h3>Login to your account</h3>

                <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                    <label for="floatingInput"><i class="fa-solid fa-envelope"></i> Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label for="floatingPassword"><i class="fa-solid fa-key"></i> Password</label>
                </div>

                <div class="action-button">
                    <button class="btn btn-primary w-100 py-2" type="submit">
                        <i class="fa-solid fa-arrow-right-to-bracket icon-white"></i> Login
                    </button>
                </div>

                <div class="d-flex justify-content-between my-3 alt-action">
                    <a href="./forget-password.php" class="text-decoration-none"><i class="fa-solid fa-lock-open"></i>&nbsp;Forgot Password</a>
                    <a href="./register.php" class="text-decoration-none"><i class="fa-solid fa-user-plus"></i>&nbsp;Register</a>
                </div>
            </form>
        </main>
        <?php
            if (isset($_SESSION['error'])) {
            echo '<br><div class="alert alert-danger m-auto">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        } 
        ?>
    </div>

<?php
    require "./assets/includes/footer.php";
?>