<!DOCTYPE html>
<html>
<head>
    <title>Search | VulnLab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h5>Search Test</h5>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['q'])) {
                        echo "<div class='alert alert-info'>Search result for: " . $_GET['q'] . "</div>";
                    }
                    ?>

                    <form method="GET">
                        <div class="mb-3">
                            <input type="text" name="q" class="form-control" placeholder="Enter search term">
                        </div>
                        <button class="btn btn-warning w-100">Search</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
