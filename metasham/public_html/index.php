<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

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
        <h1>Welcome To MetaSham!</h1>
        <img src = "img/metasham_og.png"
                alt = "MetaSham"
                height = "150"
                width = "100">
        <p>Most up-to-date products around!</p> 
    </div>

    <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
        <div class="row">
          <div class="col-sm-4">
            <h2><u>Shampoo</u></h2>
            <ul>
              <li>Clean Hair</li>
              <li>91% effective</li>
              <li>Kinda Safe for the Environment</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h2><u>Salad Dressing</u></h2>
            <ul>
              <li>Salads + Showers + ??? = Profit</li>
              <li>Safe Up to Two Servings</li>
              <li>Multiple Flavors (Now Featuring Bleach/Gluten Free Products)</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h2><u>Effectiveness</u></h2>
            <ul>
              <li>Clean and Healthy Hair</li>
              <li>Healthy additive to a salad</li>
              <li>Helps lower cholesterol</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

        <?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
