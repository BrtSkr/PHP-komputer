<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="main.220bf8e3.css" />
    <script src="js.f84e1103.js" defer></script>
  </head>
  <body>
  <?php
session_start();

   if (isset($_POST["product"])) {
        if ($_SESSION["array"] != "") {
            $_SESSION["array"] .= "" ;
        }

        $_SESSION["array"] .= "<li>".$_POST["product"]."</li>" ;
    }
    else {
        $_SESSION["array"] = "<li>"."</li>" ;
    }

    $demo   = $_SESSION["array"] == "" ? "gg" : $_SESSION["array"] ;

?> 
    <header class="header-main">
      <div>
        <h1>Add products</h1>
        <form class="header-form" method="POST">
          <input name="product" class="header--form-input" type="text" />
          <input name="submit" class="header--form-submit" type="submit" />
        </form>
      </div>
    </header>
    <section class="section-list">
      <div class="list">
        <h1>Components</h1>
        <ul name="li-holder">
            <?php 
           echo $demo;
          ?>
        </ul>
      </div>
    </section>
  </body>
</html>
