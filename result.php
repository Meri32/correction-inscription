<?php 

// mes variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone= $_POST['telephone'];
$message = $_POST['message'];
$array = [];

// function verification 
function Verif($variable, $min, $max, $message, $array) {
    if (strlen($variable) <= $min || strlen($variable) >= $max) {
        array_push($array, $message);
        return $array;
    }
    return $array;
}

// function de vérification de mot passe
function VerifPassword($variable, $variable2, $array) {
    if ($variable != $variable2) {
        array_push($array, 'Les mots de passe ne sont pas identique');
        return $array;
    }
    return $array;
}

// execute la verification
$array = Verif($nom, 2, 200, 'Votre nom est incorrecte', $array);
$array = Verif($prenom, 2, 200, 'Votre prenom est incorrecte', $array);
$array = Verif($email, 10, 200, 'Votre email est incorrecte', $array);
$array = Verif($telephone, 10, 200, 'Votre numéro de tel est incorrecte', $array);
$array = Verif($message, 10, 200, 'Votre message ne respecte pas nos standards', $array);

// initialise la base de données
function Database() {
    try {
        $db="meriackphp";
        $dbhost="localhost";
        $dbport=3306;
        $dbuser="root";
        $dbpasswd="";
        
        $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
        $pdo->exec("SET CHARACTER SET utf8");
        
        return $pdo;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// function d'insertion
function Insert($pdo, $nom, $prenom, $email, $telephone, $message) {
    try {    
        $stmt=$pdo->prepare("INSERT INTO user(nom, prenom, email, telephone, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, $telephone, $message]);
        header('Location:  afficher.php');
        return;
    } catch (Exception $e) {
        echo $e->getMessage();
        return;
    }

}

// function verif array
function VerifEmail($pdo, $email, $array) {
    try {    
        $stmt=$pdo->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (is_array($result)) {
            if (count($result) > 0) {
                array_push($array, "L'utilisateur est déjà inscrit");
                return $array;
            }
        }

        return $array;

    } catch (Exception $e) {
        echo $e->getMessage();
        return;
    }
}

$array = VerifEmail(Database(), $email, $array);

// faire apparaitre l'erreur
if (count($array) > 0) {
    echo $array[0];
    return;
}

// j'insert les données
Insert(Database(), htmlspecialchars($nom), htmlspecialchars($prenom), $email, $telephone, $message);
?>    