<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/MKTime2/css/styles.css">
    <title>MKT</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/MKTime2/index.php">
                <img src="/MKTime2/assets/logomk.png" alt="MK Time Logo" height="30" class="d-inline-block align-top">
                MK Time
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/MKTime2/watches.php">Watches</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Access
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php if (isset($_SESSION['username'])): ?>
                                <li><a class="dropdown-item" href="/MKTime2/logout.php">Logout</a></li>
                            <?php else: ?>
                                <li><a id="signInBtn" class="dropdown-item" href="/MKTime2/signin.php" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in</a></li>
                                <li><a class="dropdown-item" href="/MKTime2/signup.php">Sign up</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item mt-1 me-3 mx-auto">
                            <span class="navbar-text"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item nav-basket">
                        <a class="nav-link" href="/MKTime2/basket.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="36" fill="currentColor" class="bi bi-cart4" viewBox="0 3 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/MKTime2/signin.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </form>
                    <div style="text-align: right;">
                        <p>Not a member? <a href="signup.php"><strong>Signup</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
