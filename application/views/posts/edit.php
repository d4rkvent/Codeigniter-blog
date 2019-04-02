<h2><?= $title;  ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input class="form-control"  name="title" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" type="password" class="form-control" name="body" placeholder="Enter Content"><?php echo $post['body']; ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>