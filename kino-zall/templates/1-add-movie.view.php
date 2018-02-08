<?php
$button = 'ikelti';
include 'header.view.php';

 ?>

 <div class="row justify-content-center">
     <div class="col-md-6 col-md-offset-3">
         <h2>Add new movie form</h2>
         <form action="ikelti.php" method="post">

             <?php
             include 'form.view.php'
              ?>

              <button type="submit" class="btn btn-primary"><?= $button ?></button>
         </form>
     </div>
 </div>

 <?php

include 'footer.view.php';

  ?>
