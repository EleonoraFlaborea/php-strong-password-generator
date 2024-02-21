<?php

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
<body>
    <header>
        <section class="container pt-5 text-center">
           <h1>Strong Password Generator</h1>
           <h3>Genera una password sicura</h3>
        </section>
       
    </header>
    <main>
        <section class="container pt-3">
            <form action="" method="GET" class="pt-3 px-5">
                <div class="pt-3 d-flex justify-content-between">
                   <label for="password">Lunghezza password:</label>
                   <input type="text" name="passord" id="password">
                </div>
                <div class="pt-3">
                   <button type="button" class="btn btn-primary">Invia</button>
                   <button type="button" class="btn btn-secondary">Annulla</button>
                </div>
                

                
            </form>
        </section>
    </main>
    
</body>
</html>