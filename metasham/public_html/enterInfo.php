<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Enter Info</title>

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
        <h1>Become A MetaSham Member</h1>
        <p>Enter Info Below!</p> 
    </div>

    <!-- Main content -->
   <div class="container">
      <!-- This container moves below the menu bar -->
      <h2>Enter Info</h2>
      <form action="/form-group" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="First and Last Name" name="name" minlength="1" maxlength="50">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" maxlength="50">
        </div>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" minlength="6" maxlength="50">
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember Me</label>
        </div>
        <button type="button" class="btn btn-default">Create</button>
      </form>
    </div> 

        <?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
