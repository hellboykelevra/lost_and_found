<?php 

    include 'Lost_object.php';
    $server = "localhost";
    $user = "root";
    $psswrd = "";
    $DB = "lostAndFoundDB"; 
    
    $conn = connect_DB($server, $user, $psswrd, $DB);
    if ($conn != NULL){
        $sql = create_select_query ();
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $field => $value) {
                    echo "$field: $value<br>";
                }
                echo "<hr>";
            }
        } else {
            echo "No se encontraron resultados.";
        }
    }
    
    close_connection($conn);

    function connect_DB($server, $user, $psswrd, $DB){
        $conn = new mysqli($server, $user, $psswrd, $DB);

        if ($conn->connect_error) {
            return null;
            die("Error en la conexión: " . $conn->connect_error);
        }
        else{
            echo "Conexión exitosa a la base de datos '$DB'.";
            return $conn;
        }
    }

    function close_connection($conn){
        $conn->close();
    }

    function create_select_query (){
        $query = "SELECT * FROM lost_object";
        return $query;
     }
   
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