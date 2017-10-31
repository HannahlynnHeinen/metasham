<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Locations</title>

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
        <h1>Store Locations</h1>
        <p>More to Come!</p> 
    </div>

    <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
        <div class="col-sm-6">
          <h2>Metasham Locations</h2>
          <div>
            <p>Walmart</p>
            <img alt='Walmart Image' src="img/walmart.jpg" height="200" width="300"/>
          </div>
          <div>
            <p>Burger King</p>
            <img alt='Burger King Image' src="img/burgerking.jpg" height="200" width="300"/>
          </div>
          <div>
            <p>Subway</p>
            <img alt='Subway Image' src="img/subway.jpg" height="200" width="300"/>
          </div>
          <div>
            <p>The Container Store, Aldi, Amazon, and more locations coming soon!</p>
          </div>
          <div>
            <p>Not at Target or McDonalds</p>
          </div>
        </div>
        <div class="col-sm-6">
          <h2>Future Locations</h2>
            <p>Reminder that we have no owned locations and we are strictly distributed to other franchises.  Our company will be beginning to build our own MetaSham stores starting in the spring of 2020.  Once stores are built we will be able to do online sales, franchise sales, and self-owned store sales.</p>
        </div>
      </div>
    </div>

        <?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
