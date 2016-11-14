@extends('layout')

@section('content')
<?php
if(isset($_SESSION['valid'])) {
$errors = $_SESSION['valid'];

?>
<div class="alert alert-danger">
      <ul>
          <?php
          foreach($errors as $error){
              echo "<li>" . $error . "</li>";
          }
          ?>
      </ul>
</div>
<?php
}
?>


<div class = "container">
    <div class = "row">
        <!-- # add_url -->
        <div class ="col-sm-4 col-sm-offset-4 add_url jumbotron">
          <form action="{{ url('/new') }}" method = "POST">
              <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name = "url" class="form-control" id="url" placeholder="Url">
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input type="datetime-local" name = "date" class="form-control" id="date" placeholder="Date">
              </div>
              <div class="form-group">
                <label for="pas">Password</label>
                <input type="password" name = "password" class="form-control" id="pas" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="pas2">Confirm password</label>
                <input type="password" name = "password_confirmation" class="form-control" id="pas2" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <!-- / add_url -->
    </div>
</div>
@stop
