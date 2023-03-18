
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
<!--     <style>
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
    </style> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
 <!--    <form action="resultat-inscription.php" method="get">
        <h1>Formulaire de Contact</h1>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénoms :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="tel">Téléphone :</label>
        <input type="tel" id="password" name="password" required><br>
        <label for="text">Message:</label><br>
        <input type="text" id="message" name="message" required>
        <input type="submit" value="Valider">
    </form> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <form action="result.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prénoms: </label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email: </label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Téléphone: </label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="telephone">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message: </label>
    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="mb-3 form-check">
  <button type="submit" class="btn btn-primary">Envoyer</button>
  <div class="mb-3 form-check">
</form>
</body>
</html> 

