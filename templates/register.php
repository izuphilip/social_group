<<<<<<< HEAD
<div margin=80%>
<form action="/social_group/forms/register" method="POST">
  <div class="container-fluid" class="col-sm-0">
    <h1 class="text-center" style="font-size:70px;"><u>Register</u></h1>
    <p class="text-center">Please fill in this form to create an account.</p>
    <hr >
<div class="col-sm-4">
    <label for="firstname"><b>Firstname:</b></label>
    <input type="text"  name="Firstname" ></div>
<div class="col-sm-4">
    <label for="lastname"><b>Lastname:</b></label>
    <input type="text"  name=" Lastname" ><br></div>
<div class="col-sm-4">
    <label for="email"><b>Email:  </b></label>
    <input type="text"  name="email" ><br></div>
<div class="col-sm-4">
    <label for="Dateborn"><b>Date of birth:</b></label>
    <input type="text"  name="date of birth" ><br></div>
<div class="col-sm-4">
    <label for="Dateborn"><b>Mobile:</b></label>
    <input type="tel"  name="number" ></div><br>
<div class="col-sm-4">
    <label for="psw"><b>Password:</b></label>
    <input type="password"  name="psw"><br></div>
<div class="col-sm-4">
    <label for="psw-repeat"><b>Repeat Password:</b></label>
    <input type="password"  name="psw-repeat" ><br></div>
    <hr>
<div class="col-sm-4">
    <button type="submit" class="registerbtn" value="register">Register</button></div>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="./">Sign in</a>.</p>
  </div>
</form>
</div>
=======


            <form action="./forms/register" method="POST">
            <h2><?= $self->Toast();?></h2>
            <img src="<?= $assets ?>/avatar/images.png" class="icard-mg-top" style="height: 30px; width:90px;" alt="...">
            <h1> <b>Open New Account Here</b> </h1>
            
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" name="fname" placeholder="First name"  autofocus required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" name="lname" placeholder="Last name"  required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control"  name="email" placeholder="E-mail Address"   required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" name="dateofbirth" placeholder="Date of birth"  required>
                    </div>
                </div><br>
                <div class="row">
                <div class="col-12 col-sm-6">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="tel" class="form-control" name="mobile" placeholder="Phone Number" required>
                    </div>
                    <br>
                    <div class="col-12 col-sm-6">
                        <input type="password" class="form-control" name="repeatpassword" placeholder="Confirm Password" required>
                    </div>
                </div><br>
            <input type="submit" value="Sign Up">
                
                </div>
            </form>
            </div>
>>>>>>> 0a9a274828e54136e3750aea30da26d45074d0dc
