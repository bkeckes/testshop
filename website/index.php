<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
  </head>
  <body>
      <h1>Produkte</h1>
      <ul>
          <?php
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->product;
            foreach ($products as $prod){
              echo "<li>$prod</li>";
            }
          ?>
      </ul>
  </body>
</html>
