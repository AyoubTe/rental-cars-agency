<!DOCTYPE html>
<html>
  <head>
    <title>Création d'un compte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      body {
        background-image: url("images/interface.png");
        background-size: cover;
        background-position: center;
        opacity: 0.9;
      }

      #formulaire {
        background-color: white;
        opacity: 0.9;
        border-radius: 10px;
        padding: 20px;
        margin-top: 50px;
        margin-left: 180px;
        margin-right: 180px;
      }

      .next {
        background-color: #f26522;
        color: white;
        border-radius: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .previous {
        background-color: #f26522;
        color: white;
        border-radius: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .container {
        max-width: 600px;
        margin: 50px auto;
      }

      .progress {
        height: 8px;
        border-radius: 15px;
        background-color: #f26522;
        /*background-color: #f2f2f2;*/
        overflow: hidden;
        margin-bottom: 30px;
      }

      .progress-bar {
        background-color: #f26522;
        color: #fff;
        font-weight: bold;
        line-height: 30px;
        text-align: center;
      }

      .step {
        display: none;
      }

      .step.active {
        display: block;
      }

      .progress-step {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }

      .progress-step-item {
        flex: 1;
        text-align: center;
      }

      .progress-step-item.active .step-dot {
        background-color: #f26522;
      }

      .progress-step-item .step-text {
        color: #999;
        font-size: 14px;
      }

      .progress-step-item .step-dot {
        width: 25px;
        height: 25px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 auto;
        margin-bottom: 5px;
      }
    </style>
  </head>

  <body onload="initialize()">
    <div id="formulaire">
      <div class="container">
        <div class="progress">
          <div class="progress-bar" role="progressbar" value="100%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress-step">
          <div class="progress-step-item">
            <div class="step-dot"></div>

          </div>

          <div class="progress-step-item">
            <div class="step-dot"></div>
          </div>

          <div class="progress-step-item">
            <div class="step-dot"></div></br>
          </div>
        </div>

        <div>

          <p class="text-success" style="text-align:center; font-size :35px"></br>votre compte a été crée avec succes</br>
          </p>
          <a href="connexion.php" style="margin-left:200px; font-size :25px" class="text-info" >Se connecter</a>
        </div>
      </div>
    </div>
    </div>
    <script type="text/javascript">
      // Redirection vers la page de connexion après un délai de 5 secondes
      function redirectToSignIn() {
        window.location.href = "connexion.php";
      }

      // Fonction d'initialisation
      function initialize() {
        setTimeout(redirectToSignIn, 5000); // Délai de 5 secondes
      }
    </script>
  </body>

</html>