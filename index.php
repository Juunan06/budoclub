<?php
    session_start();
    include './controllers/main.controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budo Club</title>
    <meta name="description" content="Website desc">
    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="#"/>
    <!-- Ajout de polices -->

    <!-- CSS -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="./vendor/jqueryUi/jquery-ui.css">
    <link rel="stylesheet" href="./vendor/dataTables/datatables.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/theme-1.css">
</head>
<body class="bg-color-orange-pastel">
<header class="bg-color-orange mb-4">
    <div class="header-top col-xl-12 d-flex flex-row justify-content-start align-items-center">
        <nav class="col-xl-8 d-flex flex-row justify-content-start align-items-center">
            <ul class="menu1 d-flex flex-row justify-content-start align-items-center pl-4 m-0">
                <a href="index.php?a=home" alt="lien vers"><li class="menu1-item ml-4 mr-4"><i class="fas fa-home mr-2"></i>accueil</li></a>
                <a href="index.php?a=apropos" alt="lien vers"><li class="menu1-item ml-4 mr-4"><i class="fas fa-question mr-2"></i>a propos</li></a>
                <a href="index.php?a=medias" alt="lien vers"><li class="menu1-item ml-4 mr-4"><i class="fas fa-photo-video mr-2"></i>médias</li></a>
                <a href="index.php?a=contact" alt="lien vers"><li class="menu1-item ml-4 mr-4"><i class="fas fa-envelope mr-2"></i>contacts</li></a>
                <a href="index.php?a=intranet" alt="lien vers"><li class="menu1-item ml-4 mr-4"><i class="fas fa-user-lock mr-2"></i>intranet</li></a>
            </ul>
        </nav>
        <div class="nav-brand col-xl-4 d-flex flex-column justify-content-center align-items-end">
            <div class="titre-principal">
                Budo Tai Jutsu Club
            </div>
            <div class="titre-slogan">
                Budjinkan Ryù - Art Martial traditionel Japonais
            </div>
        </div>
    </div>
    <div class="header-bottom col-xl-12">

    </div>
</header>
<section class="container-fluid">
<?php include $view; ?>
</section>
<footer class="bg-color-orange d-flex flex-row justify-content-start align-items-center w-100 pl-4 mt-4">
    <p class="p-0 m-0">&copy; <?php echo((date('Y') == "2019") ? date('Y') : "2019 -" . date('Y')); ?> | Budo Club | <a
                href="#" class="">Mentions Légales</a></p>
</footer>

<!-- Scripts Bootstrap -->
<script src="./vendor/jquery/jquery.js"></script>
<script src="./vendor/jqueryUi/jquery-ui.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="./vendor/fontawesome/js/all.js"></script>
<script src="./vendor/dataTables/datatables.js"></script>
<!-- Scripts JS persos -->
</body>

</html>