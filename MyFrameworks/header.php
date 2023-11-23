<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Anarchy Subscribers">
    <meta name="author" content="Anarchy">
    <title>Anarchy Subscribers</title>

    <link rel="stylesheet" href="assets/css/Animation.css">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css" />
    <link href="./assets/css/sidebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="assets/js/MyJS.js" type="text/javascript"></script>

    <script src="https://kit.fontawesome.com/a9e59ded2f.js" crossorigin="anonymous"></script>


    <?php
    // Start the session
    session_start();
    if (!isset($_SESSION["LoginFirst"])) {
        header('Location: index.php');
    }
    ?>
</head>

<body>
    <div id="wrapper">
        <div class="overlay"></div>