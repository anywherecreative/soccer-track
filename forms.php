<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="register.css"/>
   </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 content">
          <header>
            <h1>Register</h1>
            <p><span class="required">*</span> All fields required</p>
          </header>
          <hr />
          <div id="sandbox">
          </div>
          <form action="register.php" id="user" method="post">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" id="firstname" class="form-control" name="firstname" />
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" id="lastname" class="form-control" name="lastname" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" name="password" />
            </div>
            <div class="form-group">
              <label for="password2">Retype Password</label>
              <input type="password" id="password2" class="form-control" name="password2" />
            </div>
            <div class="form-group">
              <label for="region">Region</label>
              <select id="region" class="form-control" name="region">
                <option>Select Your Region</option>
                <?php
                  $stmt = $db->prepare("SELECT code,name FROM continent ORDER BY name ASC");
                  $stmt->execute();
                  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  foreach($result as $region):
                ?>
                  <option value="<?php echo $region['code'];?>"><?php echo $region['name'];?></option>
              <?php endforeach;?>
              </select>
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <select id="country" class="form-control" name="country">
                <option>Select Your Country</option>
              </select>
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <select id="state" class="form-control" name="state">
                <option>Select Your State</option>
              </select>
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" id="city" class="form-control" name="city" required />
            </div>
            <div class="form-group">
              <label for="birthday">Birthday</label>
              <input type="date" id="birthday" class="form-control" name="birthday" />
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" id="acceptance" name="acceptance" required> I Accept <span class="required">*</span>
              </label>
            </div>
            <div class="checkbox spam">
              <label>
                <input type="checkbox" id="spam" name="spam"> Send me spam
              </label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="register.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
