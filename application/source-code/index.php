<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VulnLab Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand mb-0 h1">VulnLab Security Lab</span>
    </div>
</nav>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2>Vulnerable Web Application</h2>
        <p class="text-muted">Practice ethical hacking techniques</p>
    </div>

    <div class="row g-4 justify-content-center">

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">Login Vulnerability</h5>
                    <p class="card-text">Test SQL Injection & Brute Force</p>
                    <a href="login.php" class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">Search Injection</h5>
                    <p class="card-text">Test input-based attacks</p>
                    <a href="search.php" class="btn btn-warning">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">Command Execution</h5>
                    <p class="card-text">Test OS command injection</p>
                    <a href="cmd.php" class="btn btn-danger">Open</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
