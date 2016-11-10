<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Hide link">
    <link rel="icon" href="../../favicon.ico">

    <title>HIDE LINKS</title>

    <!-- core CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/css/app.css" rel="stylesheet">

    <!-- core JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
  </head>
<body>
  <div class = "container">

      <div class = "row">
          <!-- # add_url -->
          <div class ="col-sm-4 col-sm-offset-4 add_url">
            <form action="" method = "POST">
            <div class="form-group">
              <label for="url">URL</label>
              <input type="text" class="form-control" id="url" placeholder="Url">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="datetime-local" class="form-control" id="date" placeholder="Date">
            </div>
            <div class="form-group">
              <label for="pas">Password</label>
              <input type="password" class="form-control" id="pas" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
          <!-- / add_url -->
          <!-- # get_url -->
          <div class = "col-sm-4 col-sm-offset-4">
             <a href = "#">link</a>
             <form class="form-inline" action="" method = "POST">
               <div class="form-group">
                 <input type="password" class="form-control" placeholder="Password">
               </div>
               <button type="submit" class="btn btn-default">Submit</button>
             </form>
          </div>
          <!-- / get_url -->
      </div>

  </div>


</body>
</html>
