<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Support</title>

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
        <h1>Customer Service</h1> 
    </div>

    <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
        <div class="col-sm-12">
          <h3 style="text-align: center;">Our Mission</h3>
            <p style="text-align: center;"> It is our mission as a company, and as members of your community, to provide quality products and service. We are committed to creating the best possible experience for all of our customers, including you! We have employees waiting for your call to provide you with the information you need, when you need it. Our employees are knowledgeable in the many uses of Metasham and have personal experiences with the product they are willing to share for your benefit. Additionally, our employees can help you find the nearest Metasham location so you can get your hands on this versatile project as quickly as possible!</p>
          <h3 style="text-align: center;">Liability Statement</h3>
            <p style="text-align: center;">Metasham! and Brandon and Keegan Labs are not liable for any illnesses, injuries, or deaths caused by the misuse of our product. Misuse includes, but is not limited to, ingesting the product in excessive amounts. </p>
          <h3 style="text-align: center;">Need help or have any questions?</h3>
            <p style="text-align: center;">Call us at our toll free number: 1-800-METASHAMWOW</p>
            <p style="text-align: center;">Eat too much Metasham? Please call poison control at (800) 222-1222.</p>
            <p style="text-align: center;">Remember that we are not liable. Have a nice day!</p>
              <img  style="display: block; margin: auto;" src = "img/metasham_og.png"
              alt = "MetaSham"
              height = "150"
              width = "100">
        </div>
      </div>
    </div>

        <?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>

