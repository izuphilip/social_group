<div class="updateinfo">
    <form action="./forms/register" method="POST">
        <h2><?= $self->Toast();?></h2>
        <img src="<?= $assets ?>/avatar/images.png" class="icard-mg-top" style="height: 30px; width:90px;" alt="...">
        <h1> <b>Update Your Profile</b> </h1>
        
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Change your first name</p>
                <input type="text" class="form-control" name="fname" value=""  autofocus required>
            </div>
            <div class="col-12 col-sm-6">
            <p>Change your last name</p>
                <input type="text" class="form-control" name="lname" value=""  required>
            </div>
        </div><br>

        <div class="row">
            <div class="col-12 col-sm-6">
            <p>Change your date of birth</p>
                <input type="text" class="form-control" name="dateofbirth" value="" required>
            </div>
        </div><br>

        <div class="row">
            <div class="col-12 col-sm-6">
            <p>Update mobile number</p>
                <input type="number" class="form-control" name="mobile" value="" required>
            </div>
        </div><br>

        <div> 
            <input type="submit" value="Update info">
        </div>
    </form>
</div>

<div class="updatepassword">
    <form action="./forms/register" method="POST">
        <h2><?= $self->Toast();?></h2>
        <img src="<?= $assets ?>/avatar/images.png" class="icard-mg-top" style="height: 30px; width:90px;" alt="...">
        <h1> <b>Update Your Password</b> </h1>
        
    
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Enter your old password</p>
                <input type="password" class="form-control"  name="pswd" required>
            </div>
        </div><br>

        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Enter new password</p>
                <input type="password" class="form-control"  name="pswd" required>
            </div>
        </div><br>
        
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Confirm new password</p>
                <input type="password" class="form-control"  name="pswd" required>
            </div>
        </div><br>

        <div> 
            <input type="submit" value="Change password">
        </div>
    </form>
</div>