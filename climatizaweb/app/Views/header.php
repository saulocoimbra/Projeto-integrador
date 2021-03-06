<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link type=text/css rel="stylesheet" href="<?= base_url('css/api.css'); ?>">
    
    <script src="<?= base_url("js/scripts.js") ?>"></script>

    <link rel="stylesheet" href="../public/css/main.css">

    <title></title>
</head>

<body class="d-flex flex-column">
    <header>
        <!-- Just an image -->
        <nav class="navbar navbar-expand-lg navbar-dark mb-4" style="background-color: #71a0c8;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="../public/img/logoiicon.png" class="img-fluid" width="170" height="20" alt="Home"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item active" style="margin-right: 1vw; padding-top: 1vh;">
                            <button type="button" class="btn btn-outline-light">
                                <a href="<?= base_url('signin') ?>" class="lgnbtn" style="text-decoration: none;">
                                    <i class="fa fa-user-circle"></i>
                                    <span class="txtbtn-lgn">
                                        Login
                                    </span>
                                </a>
                            </button>
                        </li>
                        <li class="nav-item active" style="padding-top: 1vh;">
                            <button type="button" class="btn btn-outline-light">
                                <a href="<?= base_url('signup') ?>" class="lgnbtn" style="text-decoration: none;">
                                    <i class="fa fa-user-circle"></i>
                                    <span class="txtbtn-lgn">
                                        Cadastro
                                    </span>
                                </a>
                            </button>
                        </li>
                    </ul>

                </div>
        </nav>
    </header>