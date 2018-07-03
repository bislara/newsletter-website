<div class="column">
	<div class="col-sm-8 col-md-8 col-lg-8" >
    <div class="container-fluid"> 
		<h2><?= $title; ?></h2>

<?php echo validation_errors();?>

<?php echo form_open_multipart('posts/admin/update');?>
   <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<div class="form-group">

    <label>Title</label>

    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">

    </div>

    <div class="form-group">

    <label>Body</label>

    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" rows="15"><?php echo $post['body']; ?></textarea>

    </div>

    <div class="form-group">
      <label>Category</label>
      <select name="category_id" class="form-control">
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
          <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div>
    <div align="center">
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>
    
	
</div>
</div>
<script> CKEDITOR.replace('editor1');</script>
</body>
</html>