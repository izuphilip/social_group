

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