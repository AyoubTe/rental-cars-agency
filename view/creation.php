<!DOCTYPE html>
<html>

<head>
    <title>Créer un compte</title>
    <!-- basic -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="bootstrap/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="bootstrap/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

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
            background-color: #f2f2f2;
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

<body>
    <div id="formulaire">
        <div class="container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress-step">
                <div class="progress-step-item active">
                    <div class="step-dot"></div>
                </div>
                <div class="progress-step-item">
                    <div class="step-dot"></div>
                </div>
                <div class="progress-step-item">
                    <div class="step-dot"></div>
                </div>
            </div>
            <form method="post" action="../controller/demande-controller.php?action=create">
                <div class="step active">
                    <h2>Étape 1</h2>
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom">
                    </div>
                    <div class="form-group">
                        <label for="phone">Télephone :</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrez votre numero de telephone">
                    </div>
                    <button type="button" class="btn next">Suivant</button>
                </div>

                <div class="step">
                    <h2>Étape 2</h2>
                    <div class="form-group">
                        <label for="mail">Email :</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Entrez votre adresse email">
                    </div>
                    <div class="form-group">
                        <label for="passe">Mot de passe :</label>
                        <input type="password" class="form-control" id="passe" name="passe" placeholder="Entrez votre mot de passe">
                    </div>

                    <button type="button" class="btn previous">Précédent</button>
                    <button type="button" class="btn next">Suivant</button>
                </div>

                <div class="step">
                    <h2>Étape 3</h2>
                    <div class="form-group">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control" id="cin" name="cin" placeholder="Entrez votre cin">
                    </div>
                    <div class="form-group">
                        <label for="adress">Adresse :</label>
                        <input type="text" class="form-control" id="adress" name="adress" placeholder="Entrez votre adresse ">
                    </div>
                    <input type="checkbox" id="rules" name="rules" required><span style="color: red;"> J'accepte les conditions et termes</span><br>
                    <button type="button" class="btn previous">Précédent</button>
                    <button type="submit" class="btn ">Créer un compte</button>
                </div>

            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector("form");
            const steps = Array.from(document.querySelectorAll(".step"));
            const progressBar = document.querySelector(".progress-bar");
            const progressDots = Array.from(document.querySelectorAll(".progress-step-item"));
            const nextBtns = form.getElementsByClassName('next');
            const prevBtns = form.getElementsByClassName('previous');
            let currentStep = 0;

            function showStep(stepIndex) {
                steps[currentStep].classList.remove("active");
                steps[stepIndex].classList.add("active");
                currentStep = stepIndex;
                updateProgressBar();
            }

            function updateProgressBar() {
                const progress = (currentStep / steps.length) * 100;
                progressBar.style.width = progress + "%";
                progressBar.setAttribute("aria-valuenow", progress);
                // progressBar.textContent = "Étape " + (currentStep + 1);
                updateProgressDots();
            }

            function updateProgressDots() {
                progressDots.forEach((dot, index) => {
                    if (index === currentStep) {
                        dot.classList.add("active");
                    } else {
                        dot.classList.remove("active");
                    }
                });
            }

            // Événement lors du clic sur le bouton "Suivant"
            for (let i = 0; i < nextBtns.length; i++) {
                nextBtns[i].addEventListener('click', function () {
                    showStep(i + 1);
                });
            }

            // Événement lors du clic sur le bouton "Précédent"
            for (let i = 0; i < prevBtns.length; i++) {
                prevBtns[i].addEventListener('click', function () {
                    showStep(i - 1);
                });
            }
            // Button event listeners
            const nextButton = document.querySelector(".next");
            nextButton.addEventListener("click", goToNextStep);

            const previousButton = document.querySelector(".previous");
            previousButton.addEventListener("click", goToPreviousStep);

            // Form submission event listener
            form.addEventListener("submit", function (event) {
                event.preventDefault();
                showSuccessMessage();
                updateProgressBar();

            });

            function showSuccessMessage() {
                progressBar.style.width = "100%";
                document.getElementById('message').innerHTML = '<h1>Compte créé avec succès!</h1>';
                form.style.display = 'none';
            }
            // Show the initial step
            showStep(currentStep);
        });
    </script>
</body>

</html>