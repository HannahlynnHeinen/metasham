<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Products</title>

    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- If you don't like how bootstrap looks, go here and see other themes
         that are available:
         https://bootswatch.com/

         You can replace the 'optional theme' with links from the page below
         to get that theme:
         https://www.bootstrapcdn.com/bootswatch/
    -->

    <!-- Our custom stylesheet that WE write. We need this to not have our
         text appear under the nav bar. -->
    <link rel="stylesheet" href="css/custom.css">

  </head>

  <body>

    <!-- Navigation Bar -->
     <?php include '../resources/navigation.php'; ?>

    <div class="jumbotron text-center">
        <h1>Our Products</h1>
        <p>Grab yourself a bottle!</p> 
    </div>

    <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
        <div class="col-sm-4">
            <h2>The OG</h2>
            <h3>$4.99</h3>
                <p>
                    <img src = "img/metasham_og.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Mint</h2>
            <h3>$5.99</h3>
                <p>
                    <img src = "img/metasham_mint.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>

        </div>
        <div class="col-sm-4">
            <h2>Lavender</h2>
            <h3>$5.99</h3>
                <p>
                    <img src = "img/metasham_lav.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Dijon</h2>
            <h3>$6.99</h3>
                <p>
                    <img src = "img/metasham_dijon.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Sweet Red Chili</h2>
            <h3>$6.99</h3>
                <p>
                    <img src = "img/metasham_pepper.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Vegan</h2>
            <h3>$9.99</h3>
                <p>
                    <img src = "img/metasham_vegan.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Manliness</h2>
            <h3>$5.99</h3>
                <p>
                    <img src = "img/metasham_manliness.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Lovely Lady</h2>
            <h3>$5.99</h3>
                <p>
                    <img src = "img/metasham_lady.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
        <div class="col-sm-4">
            <h2>Sea Salt &amp; Vinegar</h2>
            <h3>$6.99</h3>
                <p>
                    <img src = "img/metasham_ssv.png"
                    alt = "MetaSham"
                    height = "150"
                    width = "100">
                </p>
        </div>
      </div>
    </div>

        <?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>

