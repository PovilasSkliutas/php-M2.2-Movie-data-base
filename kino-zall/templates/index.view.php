<?php

include 'header.view.php';

?>

<section>
    <div class="row navbar">
        <div class="col-4">
            <h1>KINO-zall</h1>
        </div>
        <div class="col-4">
            <a href="add-movie.php" class="btn btn-info">Pridėti nauja filma</a>
        </div>
        <div id="searhRezult" class="col-4">
            <div class="input-group">
                <input id="search" type="text" class="form-control" placeholder="search">
            </div>
            <div class="" id="rezult">

            </div>
        </div>
    </div>
    <hr>
    <?php foreach($movies as $movie): ?>
        <div class="row">
            <div class="movieImage col-2 text-center">
                <img src="<?= $movie['image'] ?>" style="height: 200px">
            </div>
            <div class="movieInfo col-3">
                <h6><?= $movie['movieNumber'] ?>_<?= $movie['movieTitle'] ?></h6>
                <p><?= $movie['year'] ?></p>
                <p><?= $movie['movieType'] ?></p>
                <p><?= $movie['quality'] ?></p>
                <p><?= $movie['length'].'_min' ?></p>
                <div class="">
                    <a href="update-movie.php?id=<?= $movie['movieNumber'] ?>" class="btn btn-warning btn-sm" role="button">update</a>
                    <a href="delete-movie.php?id=<?= $movie['movieNumber'] ?>" class="btn btn-danger btn-sm" role="button">delete</a>
                </div>
            </div>
            <div class="movieDescription col-3">
                <p><?= $movie['description'] ?></p>
            </div>
            <div class="movieTrial col-4 text-center">
                <iframe src="<?= str_replace("watch?v=","embed/",$movie['video']); ?>" style="height: 200px"></iframe>
            </div>
        </div>
        <hr>
    <?php endforeach ?>
    <div class="pagination row">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for($i=1; $i<=$pageCount; $i++): ?>
                <li class="page-item"><a class="page-link" href="index.php?psl=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
 </section>


 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script type="text/javascript">
    $('#search').keyup(function(e){
        let search = $(this).val();
        $.ajax({
            type: 'POST',
            url: "search.php",
            dataType: 'json',
            data: {'name': search},
            success:function(data){
                $("#rezult").empty();
                for (var i = 0; i < data.length; i++) {
                    //console.log(data[i].movieTitle);
                    $("<li><a href='#'>"+data[i].movieTitle+"</a></li>").appendTo("#rezult");
                }
                console.log(data);
            },
            error:function(data){
                console.log(data);
            }
        });
    })
</script>



 <?php

include 'footer.view.php';

  ?>
