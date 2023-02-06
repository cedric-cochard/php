<?php
require "data.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/index.scss">
   <title>Convertisseur monnaie</title>
</head>

<body>
   <div class="form-container">

      <form id="form" action="" method="get">
         <label for="number">Montant en Euros à convertir :</label>
         <input type="number" name="number" id="number">
         <label for="currency">Devise du montant attendu</label>
         <select name="currency" id="currency">
            <option value="USD">Dollar américain</option>
         </select>
         <button>Conversion</button>
         
      </form>
   </div>
   </body>

</html>