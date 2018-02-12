
<div class="form-group">
    <label for="movieTitle">Title</label>
    <input type="text" class="form-control"  placeholder="enter movie title" name="movieTitle" value="<?= isset($edit_movie['movieTitle']) ? $edit_movie['movieTitle'] : '' ; ?>">
</div>

<div class="form-group">
    <label for="movieType">Type</label>
    <input type="text" class="form-control"  placeholder="enter movie title" name="movieType" value="<?= isset($edit_movie['movieType']) ? $edit_movie['movieType'] : '' ; ?>">
</div>

<div class="form-group">
    <label for="year">Year</label>
    <select class="form-control" name="year">
        <?php for($i = 2018; $i> 1970; $i--): ?>
            <option value="<?=$i?>" <?php if (isset($edit_movie['year'])){
                if($i == $edit_movie['year']) {
                    echo 'selected';
                }else {
                    echo '';
                }
            } ?> ><?=$i?></option>
        <?php endfor; ?>
    </select>
</div>

<div class="form-group">
    <label for="quality">Quality</label>
    <input type="text" class="form-control"  placeholder="enter movie title" name="quality" value="<?= isset($edit_movie['quality']) ? $edit_movie['quality'] : '' ; ?>">
</div>

<div class="form-group">
    <label for="length">Length</label>
    <input type="text" class="form-control" placeholder="numbers only" name="length" value="<?= isset($edit_movie['length']) ? $edit_movie['length'] : '' ; ?>">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" name="description"><?= isset($edit_movie['description']) ? $edit_movie['description'] : '' ; ?></textarea>
</div>

<div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control"  placeholder="add image" name="image" value="<?= isset($edit_movie['image']) ? $edit_movie['image'] : '' ; ?>">
</div>

<div class="form-group">
    <label for="video">Video</label>
    <input type="text" class="form-control"  placeholder="enter link" name="video" value="<?= isset($edit_movie['video']) ? $edit_movie['video'] : '' ; ?>">
</div>
