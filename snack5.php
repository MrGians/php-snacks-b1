<!-- 
SNACK 5 (BONUS)
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
 -->

 <?php 
 
 $main_paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum commodi, ea voluptas iste voluptatibus dolores, perferendis error, quos tenetur explicabo unde suscipit. Molestias commodi minus accusantium temporibus debitis delectus fugiat.";

 $sub_paragraph = explode(". ", $main_paragraph);
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5 (Bonus)</title>
 </head>
 <body>
  <h2>Paragrafo Principale:</h2>
  <p><?php echo $main_paragraph ?></p>

  <hr />
  <h2>Sub Paragrafi</h2>
  <ul>
    <?php for ($i = 0; $i < count($sub_paragraph); $i++) : ?>
    <li><?php echo $sub_paragraph[$i] ?></li>
    <?php endfor; ?>
  </ul>
 </body>
 </html>