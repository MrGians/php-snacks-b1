<!-- 
SNACK 2
Passare come parametri GET name, mail e age e verificare che:
  - "name" sia più lungo di 3 caratteri;
  - "mail" contenga un punto e una chiocciola; 
  - "age" sia un numero;
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”;
 -->

 <?php 
 $name = "";
 $age = "";
 $email = "";

 $has_all_data = false;


if (!empty($_GET["name"]) && !empty($_GET["age"]) && !empty($_GET["email"])) {

  
  $name = strlen(trim($_GET["name"])) > 3 ? $_GET["name"] : NULL;
   $age = is_numeric($_GET["age"]) ? $_GET["age"] : NULL ;
   $email = strpos($_GET["email"], "@") && strpos($_GET["email"], ".") ? $_GET["email"] : NULL;
   
   if ($name && $age && $email) $has_all_data = true;

  }
 
 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
 </head>
 <body>

  <form>
    <!-- Name Field -->
    <div>
      <label for="name">Inserire Nome:</label>
      <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : $_GET['name']  ?>" required />
    </div>
    <!-- Age Field -->
    <div>
      <label for="age">Inserire Età:</label>
      <input type="text" id="age" name="age" value="<?php echo isset($age) ? $age : $_GET['age']  ?>" required />
    </div>
    <!-- Mail Field -->
    <div>
      <label for="mail">Inserire Email:</label>
      <input type="text" id="mail" name="email" value="<?php echo isset($email) ? $email : $_GET['email']  ?>" required />
    </div>
    <!-- Submit Btn -->
    <button type="submit">Invia</button>
  </form>

  <hr />

  <?php if($has_all_data) : ?>
  <!-- Accesso allowed -->
  <h2>Accesso riuscito</h2>
  <ul>
    <li>Nome: <?php echo $name ?></li>
    <li>Età: <?php echo $age ?></li>
    <li>Email: <?php echo $email ?></li>
  </ul>
  <?php else : ?>
  <!-- Access denied -->
  <h2>Accesso negato</h2>
  <ul>
  <li>Controlla che il nome sia più lungo di 3 caratteri.</li>
    <li>Controlla che l'età sia un numero.</li>
    <li>Controlla che l'email contenga un Punto ed una Chiocciola.</li>
  </ul>
  <?php endif; ?>
 </body>
 </html>