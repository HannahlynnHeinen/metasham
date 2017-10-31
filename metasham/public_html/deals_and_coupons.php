<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Deals</title>

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
        <h1>DEALS DEALS DEALS</h1>
        <p>Amazing deals everyday!</p> 
    </div>
    
    <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
        <table class="table table-striped">
            <tr>
                <th>Product</th>
                <th>Deal</th> 
                <th>Code</th>
            </tr>
            <tr>
                <td>MetaSham! The OG</td>
                <td>10% off</td> 
                <td>IJOFEW8E8F0099E899ER80W9E09ERT0J</td>
            </tr>
            <tr>
                <td>MetaSham! Roasted Red Pepper</td>
                <td>20% off</td> 
                <td>8348349488KFKOFOFIR</td>
            </tr>
            <tr>
                <td>MetaSham! Vegan</td>
                <td>50% Added</td>
                <td>WHY?</td>
            </tr>
            <tr>
                <td>MetaSham! Manliness</td>
                <td>Buy 1 Get 1 Free</td>
                <td>MAN!</td>
            </tr>
            <tr>
                <td>MetaSham! Lovely Lady</td>
                <td>Get 100 bottles free with $500 Purchase</td>
                <td>SKRRRTTTTT</td>
            </tr>
            <tr>
                <td>MetaSham! Sea Salt &amp; Vinegar</td>
                <td>Free Long John Silver's Gift Card</td>
                <td>No Code</td>
            </tr>
            <tr>
                <td>MetaSham! Lovely Lady</td>
                <td>Free loofah with order over $50</td>
                <td>5CRU8ADU8DU8</td>
            </tr>
        </table>
      </div>
    </div>

        <?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
