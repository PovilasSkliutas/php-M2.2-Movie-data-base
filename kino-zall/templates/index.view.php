<?php

include 'header.view.php';

 ?>

 <section>
     <h1>KINO-zall</h1>

     <table class="table table-bordered table-sm">
         <thead>
             <tr>
                 <th>Movie number</th>
                 <th>Movie title</th>
                 <th>Movie type</th>
                 <th>Year</th>
                 <th>Quality</th>
                 <th>Length</th>
                 <th>Description</th>
                 <th>Image</th>
                 <th>Video</th>
                 <th></th>
                 <th></th>
             </tr>
         </thead>
         <tbody>
             <?php foreach($movies as $movie): ?>
                 <tr>
                     <td><?= $movie['movieNumber'] ?></td>
                     <td><?= $movie['movieTitle'] ?></td>
                     <td><?= $movie['movieType'] ?></td>
                     <td><?= $movie['year'] ?></td>
                     <td><?= $movie['quality'] ?></td>
                     <td><?= $movie['length'].'_min' ?></td>
                     <td><?= $movie['description'] ?></td>
                     <td><?= $movie['image'] ?></td>
                     <td><?= $movie['video'] ?></td>
                     <td>
                        <a href="2-update-movie.php?id=<?= $movie['movieNumber'] ?>" class="btn btn-warning btn-sm" role="button">update</a>
                     </td>
                     <td>
                        <a href="delete-movie.php?id=<?= $movie['movieNumber'] ?>" class="btn btn-danger btn-sm" role="button">delete</a>
                     </td>
                 </tr>
             <?php endforeach ?>
         </tbody>
     </table>
     <hr>
     <a href="1-add-movie.php" class="btn btn-info">Pridėti nauja filma</a>
 </section>

 <?php

include 'footer.view.php';

  ?>
