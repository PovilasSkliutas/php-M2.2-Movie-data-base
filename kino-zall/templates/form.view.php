
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control"  placeholder="Enter Title" name="movieTitle" value="<?=$edit_movie['movieTitle']; ?>">
</div>

<div class="form-group">
    <label for="priority">Type</label>
    <select class="form-control" name="movieType" value="<?=$edit_movie['movieType']; ?>">
        <option selected>-------</option>
        <option value="action">action</option>
        <option value="drama">drama</option>
        <option value="animation">animation</option>
        <option value="comedy">comedy</option>
        <option value="fantasy">fantasy</option>
    </select>
</div>

<div class="form-group">
    <label for="year">Year</label>
    <select class="form-control" name="year" value="<?=$edit_movie['year']; ?>">
        <?php for($i = 2000; $i < 2018; $i++) :?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php endfor; ?>
    </select>
</div>

<div class="form-group">
    <label for="priority">Quality</label>
    <select class="form-control" name="quality" value="<?=$edit_movie['quality']; ?>">
        <option selected>-------</option>
        <option value="low">low</option>
        <option value="medium">medium</option>
        <option value="hight">hight</option>
    </select>
</div>

<div class="form-group">
    <label for="title">Length</label>
    <input type="text" class="form-control" name="length" value="<?=$edit_movie['length']; ?>">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" name="description" value="<?=$edit_movie['description']; ?>"></textarea>
</div>

<div class="form-group">
    <label for="title">Image</label>
    <input type="text" class="form-control"  placeholder="add image" name="image" value="<?=$edit_movie['image']; ?>">
</div>

<div class="form-group">
    <label for="title">Video</label>
    <input type="text" class="form-control"  placeholder="enter link" name="video" value="<?=$edit_movie['video']; ?>">
</div>
