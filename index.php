<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css" />

  </head>
  <body>
    <div class="container-fluid start">
      <div class="row">
        <div class="col-xs-4">
          <p class="timelabel front">Length of Half</p>
        </div>
        <div class="col-xs-2">
          <input type="text" id="halftime" />
        </div>
        <div class="col-xs-6">
          <p class="timelabel">Minutes</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <button id="startWithPossession" class="btn btn-success">Start With Possession</button>
        </div>
        <div class="col-xs-6">
          <button id="startWithoutPossession" class="btn btn-warning">Start Without Possession</button>
        </div>
      </div>
    </div>
    <div class="container-fluid main">
      <div class="row">
        <div class="col-md-12">
          <p>Time Remaining: <span id="timer"></span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button id="possessionChange" class="btn btn-danger">Loss of Possession</button>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
