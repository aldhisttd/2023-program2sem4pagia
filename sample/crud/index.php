<?php
include "assets/koneksi.php"
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
        <meta name="generator" content="Hugo 0.112.5" />
        <title>Dashboard Template · Bootstrap v5.3</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
        <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9" />
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico" />
        <meta name="theme-color" content="#712cf9" />
        <link rel="icon" href="assets/layout.css" />
        <!-- Custom styles for this template -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="assets/dashboard.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "components/header.php" ?>
        
        <div class="container-fluid">

            <div class="row">

                <?php include "components/menu.php" ?>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <?php 
                    
                    // include "contents/form_input_pegawai.php" 

                    $page = $_REQUEST['page'];
                    
                    include "contents/".$page.".php"  
                    
                    ?>
                </main>

            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
