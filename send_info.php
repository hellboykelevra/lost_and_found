<?php 
  
  $server = "localhost";
  $user = "root";
  $psswrd = "";
  $DB = "lostAndFoundDB"; 

  connect_DB($server, $user, $psswrd, $DB);

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send']) ) {
      // Recoger el nombre y los comentarios
      $name = htmlspecialchars($_POST['caption']);
      $initial_location = htmlspecialchars($_POST['initial_location']);
      $final_location = htmlspecialchars($_POST['final_location']);
      $date = htmlspecialchars($_POST['date']);
  
      // Manejar la subida de la imagen
      if (isset($_FILES['picture']) && $_FILES['picture']['error'] === 0) {
          $directorioSubida = 'uploads/';
          $nombreArchivo = basename($_FILES['picture']['name']);
          $rutaCompleta = $directorioSubida . $nombreArchivo;
  
          // Crear directorio si no existe
          if (!is_dir($directorioSubida)) {
              mkdir($directorioSubida, 0755, true);
          }
  
          // Mover archivo a la carpeta de destino
          if (move_uploaded_file($_FILES['picture']['tmp_name'], $rutaCompleta)) {
                save_info($img, $caption, $initial_location, $final_location, $date, $rutaCompleta, $nombreArchivo);
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

  function save_info($img, $caption, $initial_location, $final_location, $date, $rutaCompleta, $nombreArchivo){
    echo "¡Formulario enviado con éxito!<br>";
    echo "Nombre: " . $name . "<br>";
    echo "Ubicación inicial: " . $initial_location . "<br>";
    echo "Ubicación final: " . $final_location . "<br>";
    echo "Fecha en que se encontró: " . $date . "<br>";
    echo "Imagen subida correctamente: <a href='$rutaCompleta'>$nombreArchivo</a>";
  }

  function connect_DB($server, $user, $psswrd, $DB){
    $conn = new mysqli($server, $user, $psswrd, $DB);

    if ($conn->connect_error) {
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

  ?>