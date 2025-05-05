<?php

$email=$_POST['email'];
$password=$_POST['password'];

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        
    </head>

    <body>

        <div class="container my-5">
            <div class="mb-3">
                <section class="border border-dark rounded-3 p-4 bg-light mb-4">

                    <h2>Submitted Form Data</h2>

                    <p><strong>Email: </strong>
                    <?php

                        echo $email

                    ?>
                    </p>

                    <p><strong>Password: </strong>
                    <?php

                        echo $password

                    ?>
                    </p>

                </section>
            </div>
        </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    </body>
</html>
