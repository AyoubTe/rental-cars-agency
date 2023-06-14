<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet"
            href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <style>
        .car-card {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        body {
                background: linear-gradient(45deg, #f4f3ed, #b5a1a4);
                font-family: Arial, sans-serif;
            }

        .car-image {
            width: 300px;
            height: 180px;
            object-fit: cover;
            margin-right: 10px;
        }
        .car-details {
            flex-grow: 1;
        }

        h2 {
        color: #f26522;
        margin-top: 10px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);}
     h3 {
        color: white;
        margin-top: 10px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);}


        .delete-btn {
            margin-left: auto;
        }
        header {
                margin-top: 20px;
                background: linear-gradient(to bottom, #999999, #333333);
                border-radius: 15px;
            } 

    </style>
</head>
<body class="container">
        <header class="row well">
            <div class="col-md-6">
                <img src="images\logo.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>Service Agence</h2>
                <h3>Delete & Modify Catalog</h3>
            </div>
        </header>
<div >
        <div class="car-card">
            <img src="images/Jeep.png" class="car-image">
            <div class="car-details">
                <h4>Jeep</h4>
                <p><strong>Couleur:</strong> Gris</p>
                <p><strong>Prix:</strong> 100$</p>
                <p>Pour des balades dans les chemins cheveux au vent !</p>
            </div>
            <button class="btn btn-danger delete-btn">Delete</button>
            <button class="btn btn-success ">Modify</button>
        </div>

        <div class="car-card">
            <img src="images/Citroën.png" class="car-image">
            <div class="car-details">
                <h4>Citroën C4 Cactus</h4>
                <p><strong>Couleur:</strong> Rouge</p>
                <p><strong>Prix:</strong> 200$</p>
                <p>une série rêvée pour la pratique du surf</p>
            </div>
            <button class="btn btn-danger delete-btn">Delete</button>
            <button class="btn btn-success ">Modify</button>
        </div>

        <div class="car-card">
            <img src="images/land.png" class="car-image">
            <div class="car-details">
                <h4>Land Rovr Defender</h4>
                <p><strong>Couleur:</strong> Gris</p>
                <p><strong>Prix:</strong> 100$</p>
                <p>Land Rovr Defender</p>
            </div>
            <button class="btn btn-danger delete-btn">Delete</button>
            <button class="btn btn-success ">Modify</button>
        </div>

        <div class="car-card">
            <img src="images/Dacia.png" class="car-image">
            <div class="car-details">
                <h4>Dacia</h4>
                <p><strong>Couleur:</strong> Orange</p>
                <p><strong>Prix:</strong> 65$</p>
                <p>Certes, la Dacia Duster n'est pas la voiture aux lignes les plus esthétiques, mais il s'agit sûrement de la voiture familiale au meilleur rapport qualité/prix</p>
            </div>
            <button class="btn btn-danger delete-btn">Delete</button>
            <button class="btn btn-success ">Modify</button>
        </div>
        
        <footer class="row well" style="margin-top: 2%;">
            <div class="col-md-6">
                <a href="../view/interface.php">Page d'acceuil</a> | <a href="../controller/connexion-controller.php?action=deconnexion">Déconexion</a>
            </div>
            <div class="col-md-6 pull-right text-right">
                Copyright AGENCE DRIVE NOW
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>