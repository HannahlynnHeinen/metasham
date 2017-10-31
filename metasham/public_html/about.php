<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>About</title>

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
        <h1>WHY CHOOSE METASHAM?</h1>
        <p>Scroll down to find out more!</p> 
    </div>

    <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
        <div class="col-sm-4">
            <h2>About Us</h2>
                <p>MetaSham is an American-Made product which was created by Brandon and Keegan Labs in 2016.  After a year of production our product took off and became the number 1 shampoo and salad dressing in 2017.  Our company headquarters are located in the beautiful town of MetaRock, IA.  
        </div>
        <div class="col-sm-4">
            <h2>Contact Info</h2>
                <p>Contact us at 1-800-428-126-9984 for more questions about the product!</p>
                <p>Email us at MetaSham!@mail.com</p>
                <p>Tag Us on Social Media</p>
                <ul>
                    <li>Facebook - MetaSham!</li>
                    <li>Twitter - @MetaSham!2</li>
                    <li>Instagram - MetaSham!</li>
                    <li>Myspace - MetaSham!</li>
                    <li>Tinder - Shamarific</li>
                </ul>
        </div>
        <div class="col-sm-4">
            <h2>The Product</h2>
                <p>The most innovative hair care product to ever hit the market, MetaSham is a lot more than just an amazing Shampoo. Not only does it clean your hair like a brand-new sports car, smell like Willy Wanka's mint candy, feel like Thanksgiving gravy, it's also a great tasting salad dressing!</p>
            <h3>Ingredients</h3>
                <ul>
                    <li>Water</li>
                    <li>Dandruff Preventer</li>
                    <li>Holy Water </li>
                    <li>Pesticide</li>
                    <li>HCI<!-- Hydrochloric Acid --></li>
                    <li>H2SO4<!-- Sulfuric Acid --></li>
                    <li>Boiled Italians</li>
                </ul>
        </div>
      </div>
    </div>
        <?php include '../resources/footer.php'; ?>
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
