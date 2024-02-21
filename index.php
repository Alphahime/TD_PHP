<!DOCTYPE html>
<html>
<head>
    <title>Vérification de la COVID-19</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2, h3 {
            text-align: center;
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Vérification de la COVID-19</h2>
    <form method="post" action="">
        <label for="symptomes">Symptômes  :</label><br>
        <input type="text" id="symptomes" name="symptomes"><br>
        <label for="facteurs_risque">Facteurs de risque :</label><br>
        <input type="text" id="facteurs_risque" name="facteurs_risque"><br><br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // On utilise la fonction isset pour verifier si les symptomes existent ou pas 
        $symptomes = isset($_POST['symptomes']) ? explode(",", $_POST['symptomes']) : array();
        $facteurs_risque = isset($_POST['facteurs_risque']) ? explode(",", $_POST['facteurs_risque']) : array();

       
        function covid_verif($symptomes, $facteurs_risque) {
         
            $symptomes_covid = array("fièvre", "toux", "fatigue", "difficultés respiratoires");
            $facteurs_risque_covid = array("âge avancé", "maladies sous-jacentes", "contact étroit avec une personne infectée");

            // Vérification des symptômes
            $symptomes_communs = array_intersect($symptomes, $symptomes_covid);
            // Vérification des facteurs de risque
            $facteurs_communs = array_intersect($facteurs_risque, $facteurs_risque_covid);

            // Si le patient présente des symptômes ou des facteurs de risque de la COVID-19
            if (!empty($symptomes_communs) || !empty($facteurs_communs)) {
                return "Le patient est atteint de la COVID-19.";
            } else {
                return "Le patient ne semble pas être atteint de la COVID-19.";
            }
        }

        
        $resultat = covid_verif($symptomes, $facteurs_risque);

        
        echo "<h3>Résultat :</h3>";
        echo "<p>$resultat</p>";
    }
    ?>
</body>
</html>
