 <!-- Title -->
<h1 class="mt-4"><?php echo  $post['title'];  ?></h1>
<p>Posted on: <?php echo $post['created_at'] ?></p>

<!-- Preview Image -->
<img class="img-fluid" src="http://placehold.it/1200x300" alt="">

<!-- Post Content -->
<p class=""><?php echo $post['body']; ?></p>

<?php echo form_open('/posts/delete/'. $post['id']); ?>

<a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>"> Edit</a>

<input type="submit" value="Delete" class="btn btn-danger">
</form> 





