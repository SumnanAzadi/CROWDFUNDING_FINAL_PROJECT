<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/donor/css/style.css">
    <title>Donor Login</title>
</head>
<body>
    <div class="wrapper">
        <center>
        <form method="post" class="form-signin" action="../php/SignupController.php" enctype="multipart/form-data">  
          <h2 class="form-signin-heading">Registration Panel</h2>
          <input type="text" class="form-control" name="fullname" placeholder="Full Name" required autofocus="" /><br>
          <h5 id="nameMsg"></h5>
          <input type="text" class="form-control" name="email" placeholder="Email" required/>   
          <h6></h6>
          <input type="text" class="form-control" name="address" placeholder="Address" required/> 
          <h6></h6>
          <input type="text" class="form-control" name="phoneno" placeholder="Phone No" required/> 
          <h6></h6>
          <input type="password" class="form-control" name="password" placeholder="Password" required/>
          <h6 id="passMsg"></h6>
          <button style="display:block;width:231px; height:30px; margin-bottom: 20px; font-size: 16px; border: 1px solid; background: transparent;" onclick="document.getElementById('getFile').click()">Select Profile picture</button>
          <input type='file' class="form-control" name="photo" required id="getFile" style="display:none">
          <div class="custom-select">
            <select name="type" class="form-control" style="width:231px;font-size: 16px; height:41px;">
              <option name="type" value="raiser">Fund Raiser</option>
              <option name="type" value="donor">Fund Donor</option>
              <option name="type" value="admin">Admin</option>
            </select>
          </div><br>
          <button class=" myButton" name="submit" type="submit">Registration</button> 
        </form>
    </center>  
      </div>
</body>
</html>