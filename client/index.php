<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Játékok</title>
    <style>
    .container-fluid {
        width: 100%;
        padding-right: 0px;
        padding-left: 0px;
        margin-right: auto;
        margin-left: auto;
    }

    .bgb{
        background: black;
    }
    

    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bgb">
            <a class="navbar-brand">
                <img src="logo.png" width="40" height="30" alt="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=kategoriak.php" class="nav-link">Kategóriák</a></li>
                <li class="nav-item"><a href="index.php?program=jatekok.php" class="nav-link">Játékok</a></li>
                <li class="nav-item"><a href="index.php?program=modositas.php" class="nav-link">Módosítás</a></li>
                <li class="nav-item"><a href="index.php?program=torles.php" class="nav-link">Törlés</a></li>
                <li class="nav-item"><a href="index.php?program=ujkategoria.php" class="nav-link">Új kategoria</a></li>
            </ul>
        </nav>

    </div>
    
    <div class="container">
        <?php
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "fooldal.php";

        ?>
    </div>
    
    <script>
        console.log(document.URL)
        for(let obj of document.links)
            if(obj.href==document.URL)
                obj.style.color = "lightgreen"

    </script>
</body>
</html>