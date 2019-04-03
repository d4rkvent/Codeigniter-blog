<h2><?= $title;  ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input class="form-control"  name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" type="password" class="form-control" name="body" placeholder="Enter Content"></textarea>
  </div>

  <div class="form-group">
  <label>Categoris</label>
  <select name="category_id" class="form-control">
  <?php foreach ($categories as $category): ?>
    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>            
  <?php endforeach; ?>
  </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>