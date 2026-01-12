<!DOCTYPE html>
<html>
<head>
    <title>Login | VulnLab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_POST['login'])) {
                        // KEEP YOUR EXISTING PHP LOGIN CODE HERE
                    }
                    ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <button type="submit" name="login" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
