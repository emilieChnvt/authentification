<?php
$id=null;
$articles = [
    [
        "id"=> 1,
        "title" => "Le Billard",
        "content" => "le billard blablabla",
        "image" => "billes.png"
    ],    [
        "id"=> 2,
        "title" => "Les enfants",
        "content" => "les enfants blablabla",
        "image" => "enfants.png"
    ],    [
        "id"=> 3,
        "title" => "Les mains",
        "content" => "les mains blablabla",
        "image" => "mains.png"
    ],
];
if(!empty($_GET['idArticle'])){
    $id=$_GET['id'];
}
foreach($articles as $article)
{
     if($article['id']==$id)
     {

     }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container row">

        <div class="card" style="width: 18rem;">
            <img src="images/<?= $article['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $article['title'] ?></h5>
                <p class="card-text"><?= $article['content'] ?></p>
                <a href="unArticle.php?id=<?= $article['id']?>" name="idArticle" class="btn btn-primary">Lire l'article</a>
            </div>
        </div>
    <?php } ?>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>