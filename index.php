<?php 
    // echo "hi";
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

    <div class="container-fluid p-5 bg-success text-white text-center">
        <h1>🔎 LOST AND FOUND</h1>
        <p>IES El Rincón ©️</p>
        <a href="#" class="btn btn-success btn-lg">😊 HE ENCONTRADO ALGO</a>
        <a href="lost.php" class="btn btn-danger btn-lg">😢 HE PERDIDO ALGO</a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <h3>¿QUÉ HAS ENCONTRADO?</h3>
                <p>
                    Complete la información del objeto que ha encontrado de la forma más detallada posible
                </p>
                <form action="send_info.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="picture"> <strong> 📷 Sube una foto del objeto encontrado: </strong></label>
                        <input type="file" class="form-control" id="picture" name="picture" accept="image/png, image/jpeg" required=true>
                    </div>
                    
                    <div class="mb-3">
                        <label for="caption"><strong>📄 Puedes dar una breve descripción del objeto:</label>
                        <textarea type="text" class="form-control" id="caption" name="caption" required=true> </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="initial_location"><strong>🗺️ ¿Dónde lo has encontrado? </strong>:</label>
                        <input type="text" class="form-control" id="initial_location" placeholder="indique su ubicación donde lo has encontrado" name="initial_location" required=true>
                    </div>

                    <div class="mb-3">
                        <label for="final_location"> <strong>📦 ¿Dónde lo has dejado? </strong>:</label>
                        <input type="text" class="form-control" id="final_location" placeholder="indique su ubicación donde lo has dejado" name="final_location" required=true>
                    </div>

                    <div class="mb-3">
                        <label for="date"><strong>📅 ¿Cuándo lo encontraste?:</label>
                        <input type="date" class="form-control" id="date" placeholder="indique su ubicación, dónde lo encontró..." name="date" required=true>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" name="send">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>