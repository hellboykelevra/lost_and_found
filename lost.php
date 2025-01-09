<?php 
    $img = "img_avatar1.png";
    $caption = "Esto es un texto de ejemplo";

    function print_obj_cart($img, $caption){
        echo '<div class="card border border-5" style="width:300px">';
        echo '<img class="card-img-top" src="imgs/'.$img.'" alt="Card image">';
        echo '<div class="card-body">';
        echo '<p class="card-text">'.$caption.'</p>';
        echo '<button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#info">Simple collapsible</button>';
        echo ' <div id="info" class="collapse">';
        echo $caption;      
        echo '</div>';
        echo '</div>';
        echo '</div>'; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOST AND FOUND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" type="image/x-icon" href="/imgs/favicon-16x16.ico">
</head>

<body>

    <div class="container-fluid p-5 bg-danger text-white text-center">
        <h1>🔎 LOST AND FOUND</h1>
        <p>IES El Rincón ©️</p>
        <a href="index.php" class="btn btn-success btn-lg">😊 HE ENCONTRADO ALGO</a>
        <a href="#" class="btn btn-danger btn-lg">😢 HE PERDIDO ALGO</a>
    </div>

    <div class="container mt-5">
       <div class="row">
         <h3>ESTO ES LO QUE SE HA ENCONTRADO:</h3>
       </div> 
    <div class="row">
            <div class="col-sm-4">
                <?php 
                    print_obj_cart($img, $caption,);
                ?>
            </div>
            <div class="col-sm-4">
            <?php 
                    print_obj_cart($img, $caption);
                ?>
            </div>
            <div class="col-sm-4">
            <?php 
                    print_obj_cart($img, $caption);
                ?>
            </div>
        </div>
    </div>

</body>

</html>