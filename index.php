<?php
/*Milestone 2: spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3: invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION 
recupererà la password da mostrare all’utente.
*/

//creo array di lettere, lettere maiuscole, numeri e simboli da cui si puoi pescare
$characters = array(
'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',

'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',

0, 1, 2, 3, 4, 5, 6, 7, 8, 9,

':', ';', '<', '=', '>', '?', '@', '!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', '[', ']', '^', '_', '{', '|', '}', '~', '£', '¥',     
);

//recuperiamo il dato inviato
$number = $_GET ['number'] ?? '';

//da stringa a numero
$password = intval($number);
echo $password;

//funzione per generare password casuale 
$rand_password = array_rand($characters, $password);

foreach($rand_password as $key){
    print $characters[$key];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <header>
        <section class="container pt-5 text-center text-white">
           <h1>Strong Password Generator</h1>
           <h3>Genera una password sicura</h3>
        </section>
       
    </header>
    <main>
        <section class="container pt-3">
            <form action="" method="GET" class="pt-3 px-5 bg-dark-subtle rounded">
                <div class="pt-3 d-flex justify-content-between">
                   <label for="number">Lunghezza password:</label>
                   <input type="number" name="number" id="number" min="4" max="12" value="<?php echo $number ?>">
                </div>
                <div class="py-3">
                   <button type="submit" class="btn btn-primary">Invia</button>
                   <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
        </section>
    </main>
    
</body>
</html>