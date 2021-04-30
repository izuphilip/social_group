   
   <div class="container-fluid">
   <h2><?= $self->Toast();?></h2>
       <h1><b>Login To Your Account</b></h1>
   <form action="/social_group/forms/login" method="POST">
            <div class="col-12 col-sm-6">
            <input type="email" name="email" placeholder="Email" autofocus  required>
            </div>
            <br>
            <div class="col-12 col-sm-6">
            <input type="password" name="password" placeholder="Password" required>
            </div>
            <br>
            <div class="col-12 col-sm-5">
            <input type="submit" value="Login">
            </div>
    </form>
    </div>