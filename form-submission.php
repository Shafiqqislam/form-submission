<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
  </head>
  <body>

    <?php
      $fname = "";
      $lname = "";
      $gender = "";
      $dob = "";
      $religion = "";
      $present = "";
      $permanent = "";
      $telephone = "";
      $email = "";
      $weblink = "";
      $username = "";
      $password = "";
      $verify_password = "";
      $flag = false;

      function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<br>";
        if(!empty($_POST['fname'])) {
          $fname = input($_POST['fname']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['lname'])) {
          $lname = input($_POST['lname']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['gender'])) {
          $gender = input($_POST['gender']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['dob'])) {
          $dob = input($_POST['dob']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['religion'])) {
          $religion = input($_POST['religion']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['present'])) {
          $present = input($_POST['present']);
        }
        if(!empty($_POST['permanent'])) {
          $permanent = input($_POST['permanent']);
        }
        if(!empty($_POST['telephone'])) {
          $tel = input($_POST['telephone']);
        }
        if(!empty($_POST['email'])) {
          $email = input($_POST['email']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['weblink'])) {
          $weblink = input($_POST['weblink']);
        }
        if(!empty($_POST['username'])) {
          $username = input($_POST['username']);
        }
        else {
          $flag = true;
        }
        if(!empty($_POST['password'])) {
          $password = input($_POST['password']);
        }
        if(!empty($_POST['verify_password'])) {
          $verify_password = input($_POST['verify_password']);
        }
        if ($password != $verify_password) {
          $flag = true;
        }
      }
    ?>
 
    <h1 style="text-align: center;">Registration Form</h1>
    <?php
      if ($flag) {
        echo "<p class='error'>please fill up all required</p>";
    }
    ?>
    <form style="width: 400px;" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" autocomplete="off" method="POST">
      <fieldset>
        <legend>Basic information</legend>
        <label for="fname">Enter your first name<span class="required">*</span>: </label>
        <input type="text" name="fname" value="<?php echo $fname; ?>" />
        <br />
        <label for="lname">Enter your last name<span class="required">*</span>: </label>
        <input type="text" name="lname" value="<?php echo $lname; ?>" />
        <br />
        <label for="gender">Gender<span class="required">*</span>: </label>
        <input type="radio" name="gender" value="male" <?php if($gender === "male") echo "checked"; ?> />
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" <?php if($gender === "female") echo "checked"; ?> />
        <label for="female">Female</label>
        <br />
        <label for="dob">Date of Birth<span class="required">*</span>: </label>
        <input type="date" name="dob" value="<?php echo $dob; ?>" />
        <br />
        <label for="religion">Enter your Religion<span class="required">*</span>: </label>
        <select name="religion">
          <option value="">-</option>
          <option value="islam" <?php if($religion === "islam") echo "selected"; ?>>Islam</option>
          <option value="hindu" <?php if($religion === "hindu") echo "selected"; ?>>Hindu</option>
        </select>
      </fieldset>
      <br />
      <fieldset>
        <legend>Contact Information</legend>
        <label for="present">Present Address: </label>
        <textarea name="present" rows="2" cols="30" placeholder="<?php echo $present; ?>"></textarea>
        <br />
        <label for="permanent">Permanent Address: </label>
        <textarea name="permanent" rows="2" cols="30" value="<?php echo $permanent; ?>"></textarea>
        <br />
        <label for="telephone">Telephone<span class="required">*</span>:</label>
        <input type="telephone" name="telephone" value="<?php echo $telephone; ?>" />
        <br />
        <label for="email">Email<span class="required">*</span>: </label>
        <input type="email" name="email" value="<?php echo $email; ?>" />
        <br />
        <label for="weblink">Personal Website Link: </label>
        <input type="url" name="weblink" value="<?php echo $weblink; ?>" />
      </fieldset>
      <br />
      <fieldset>
        <legend>Account Information</legend>
        <label for="username">Username<span class="required">*</span>: </label>
        <input type="text" name="username" value="<?php echo $username; ?>" />
        <br>
        <label for="password">Password<span class="required">*</span>: </label>
        <input type="password" name="password" value="<?php echo $password; ?>" />
        <br>
        <label for="verify-Password">Re-enter Password<span class="required">*</span>: </label>
        <input type="password" name="verify_password" value="<?php echo $verify_password; ?>"><span class="error"><?php if($password != $verify_password) echo "password doesn't match"; ?></span>
      <hr>
      
      </fieldset>
      <br />
      <button type="submit">Submit</button>
    </form>

   
  </body>
</html>