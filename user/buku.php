<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name= "author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name= "generato" content= "Hugo 0.84.0">
    <title>Daftar Buku</title> 

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
            .bd-placeholder-img{
                font-size :1.125rem;
                text-anchor : middle;
                -webkit-user-select : none;
                -moz-user-seelct : none;
                user-select : none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size:3.5 rem;
                }
            }
       </style>

        </head>
        <body>
            <header>
                <?php
                include "navbar.php";
                ?>
                </header>

                <main>
                <section class="py-5 text-center container">
                    <div class="col-lg-6 col-md 8 mx-auto">
                        <h1 class="fw-light">Daftar Buku</h1>
                        <p class="lead text-muted">Silahkan cari buku yang akan di pinjam</p>
                        <form method="POST" action="buku.php" class="d-flex">
                            <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-succes" type="submit"><Search></button>
        </form>
        </div>
        </section>