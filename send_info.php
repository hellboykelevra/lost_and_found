<?php 

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send']) ) {
      
      $caption = htmlspecialchars($_POST['caption']);
      $initial_location = htmlspecialchars($_POST['initial_location']);
      $final_location = htmlspecialchars($_POST['final_location']);
      $date = htmlspecialchars($_POST['date']);
  
      
      if (isset($_FILES['picture']) && $_FILES['picture']['error'] === 0) {
          $directorioSubida = 'uploads/';
          $fileName = basename($_FILES['picture']['name']);
          $path = $directorioSubida . $fileName;
  
          if (!is_dir($directorioSubida)) {
              mkdir($directorioSubida, 0755, true);
          }
  
          if (move_uploaded_file($_FILES['picture']['tmp_name'], $path)) {
                save_info($img, $caption, $initial_location, $final_location, $date, $path, $fileName);
          } else {
              echo "Hubo un problema al subir la imagen.";
          }
      } else {
          echo "Error al subir la imagen. Asegúrate de que el archivo es válido.";
      }
  } else {
      echo "Método de solicitud no permitido.";
      header("Location: index.php", true, 302); exit;
  }

  function save_info($caption, $initial_location, $final_location, $date, $path, $fileName){
    
    $server = "localhost";
    $user = "root";
    $psswrd = "";
    $DB = "lostAndFoundDB"; 
    $conn = connect_DB($server, $user, $psswrd, $DB);
    
    if ($conn != NULL){
        echo "¡Formulario enviado con éxito!<br>";
        echo "Nombre: " . $caption . "<br>";
        echo "Ubicación inicial: " . $initial_location . "<br>";
        echo "Ubicación final: " . $final_location . "<br>";
        echo "Fecha en que se encontró: " . $date . "<br>";
        echo "Imagen subida correctamente: <a href='$$path'>$fileName</a>";
  
    close_connection($conn);
    }
    
}

  function connect_DB($server, $user, $psswrd, $DB){
    $conn = new mysqli($server, $user, $psswrd, $DB);

    if ($conn->connect_error) {
        return null;
        die("Error en la conexión: " . $conn->connect_error);
    }
    else{
        echo "Conexión exitosa a la base de datos '$baseDatos'.";
        return $conn;
    }
  }

  function close_connection($conn){
    $conn->close();
  }

  function create_insert_query ($caption, $initial_location, $final_location, $date, $path, $fileName){
    $query = "INSERT INTO lost_object (caption, initial_location, final_location, found, found_date, img_path, file_name) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]'
       );";
  }
  ?>