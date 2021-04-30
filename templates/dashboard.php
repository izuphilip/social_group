<div class="container-fluid d-flex flex-column mt-0">
<h1>Welcome Our Registered Members</h1>
<div class="row ">
<?php while($Member = mysqli_fetch_object($Members)) :?>
<div class="card card-small col-s4 m-4 p-3">
  <img src="<?= $assets ?>/avatar/images.png" class="card-img-top" height="190" width="0" alt="...">
  <div class="card-body">
    <h5 class="card-title col-xg-10 text-center"><?= $Member->fname?></h5>
    <h5 class="card-title col-xg-10 text-center"><?= $Member->lname?></h5>
    <h5 class="card-title col-xg-10 text-center"><?= $Member->mobile?></h5>
    <h5 class="card-title col-xg-10 text-center"><?= $Member->email?></h5>
  </div>

</div>
<?php endwhile ; ?>
</div>
</div>