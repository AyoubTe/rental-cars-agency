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
            body {
                background: linear-gradient(45deg, #f4f3ed, #b5a1a4);
                font-family: Arial, sans-serif;
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
        
            .form-control {
                border-color: #f26522;
                border-radius: 4px;
                font-size: 16px;
            }

            header {
                margin-top: 20px;
                background: linear-gradient(to bottom, #999999, #333333);
                border-radius: 15px;
            }

            label {
                color: #f26522;
                font-weight: bolder;
            }

            .btn-primary {
                background-color: #f26522;
                border-color: #0a0a0a;
                border-style: solid;
                transition: background-color 0.3s ease, border-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #f26522;
                border-color: #080808;
            }

            .tab-content {
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }

            form {
                background-color: #efeeee;
                padding: 20px;
                height: 500px;


                width: 600px;
            }

            .form-group {
                margin-bottom: 30px;
            }

            textarea.form-control {
                resize: vertical;
            }

            /*.form-control-file{
                    background-color: #f26522;
                border-color: #0a0a0a;
                border-style: solid;
                transition: background-color 0.3s ease, border-color 0.3s ease; 
                }*/

            /* Styles personnalisés pour le select */
            select.form-control {
                height: 40px;
                font-size: 16px;
            }

            /* Styles personnalisés pour les checkbox */
            .form-check-input {
                margin-top: 5px;
            }

            .form-check-label {
                font-size: 14px;
            }

            .car-list {
                margin-top: 20px;
            }

            .custom_menu {
                width: 100%;
                margin: 0 auto;
                text-align: center;
            }

            #ajout {
                margin: auto;
                margin-top: 30px;
                box-shadow: #080808;
                background-color: #080808;
                border-radius: 10%;

            }

            .container {
                margin-top: auto;
                margin: auto;
            }

            /*#form{
                margin-top: 5%;
                border-radius: 10%;
                box-shadow: #414744;
            
            
            }*/
            .car-name {
                margin-top: 10px;
                font-weight: bold;
            }

            

            
        </style>

    
</head>
<body class="container">
        <header class="row well">
            <div class="col-md-6">
                <img src="images\logo.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>Agency service</h2>
                <h3>add new car</h3>
            </div>
        </header>
        



        <div class="row">
       
            <div class="tab-content">
                <section class="tab-content">
                    <div class=" tab-pane active" id="ajout">
                        <form form action="../controller/controller_voiture.php?action=ajouter" method="post" class="container">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="numImma">Numero de matricule</label>
                                        <input type="text" class="form-control" id="numImma" name="numImma" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="couleur">Couleur :</label>
                                        <input type="text" class="form-control" id="couleur" name="couleur">
                                    </div>
                                    <div class="form-group">
                                        <label for="input2">Puissance :</label>
                                        <input type="text" class="form-control" id="puissance" name="puissance" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="input2">Modéle </label>
                                        <input type="text" class="form-control" id="modele" name="modele">
                                    </div>
                                    <div class="form-group">
                                        <label for="prix">Prix :</label>
                                        <input type="text" class="form-control" id="prix" name="prix" required>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dispo">Disponibilité</label>
                                        <input type="text" class="form-control" id="dispo" name="dispo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="desc">Description :</label>
                                        <textarea class="form-control" placeholder="Entrer la description de la voiture " name = "desc" id="desc" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="carImage">Image :</label>
                                        <input type="file" class="form-control-file" id="carImage" name="carImage" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                    
                    
                </section>
            </div>

        </div>
        <footer class="row well" style="margin-top: 2%;">
            <div class="col-md-6">
                <a href="../view/index.php">Page d'acceuil</a> | <a href="../controller/connexion-controller.php?action=deconnexion">Déconexion</a>
            </div>
            <div class="col-md-6 pull-right text-right">
                Copyright AGENCE DRIVE NOW
            </div>
        </footer>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            // Récupérer tous les boutons de suppression
            var deleteButtons = document.getElementsByClassName('delete-btn');

            // Parcourir les boutons de suppression et ajouter un écouteur d'événement au clic
            for (var i = 0; i < deleteButtons.length; i++) {
                deleteButtons[i].addEventListener('click', function () {
                    // Récupérer le conteneur de l'image parent
                    var imageWrapper = this.parentNode.parentNode;

                    // Supprimer le conteneur de l'image
                    imageWrapper.parentNode.removeChild(imageWrapper);
                });
            }
        </script>
    </body>
</html>