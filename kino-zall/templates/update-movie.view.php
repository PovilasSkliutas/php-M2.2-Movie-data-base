<?php
$button = 'isaugoti';
include 'header.view.php';

 ?>

 <div class="row justify-content-center">
     <div class="col-md-6 col-md-offset-3">
         <h2>Update movie form</h2>
         <form action="update.php?id=<?= $edit_movie['movieNumber'] ?>" method="post">

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
