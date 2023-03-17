
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        input[type=text], input[type=email], input[type=password] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            width: 100%;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <form action="resultat-inscription.php" method="get">
        <h1>Formulaire de Contact</h1>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="numberj">Téléphone :</label>
        <input type="password" id="password" name="password" required><br>
        <label for="text">Message:</label>
        <input type="text" id="message" name="message" required>
        <input type="submit" value="Valider">
    </form>
</body>
</html> 
