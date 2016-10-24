<?php
	include 'header/admin.php';
	Insert();
?>
<form method="post" action="">
	<div class="form-group row">
  	<label for="example-text-input" class="col-xs-2 col-form-label">Title</label>
  	<div class="col-xs-10">
  		<input name="title" class="form-control" type="text" id="example-text-input">
  	</div>
	</div>
	<div class="form-group row">
  	<label for="example-search-input" class="col-xs-2 col-form-label">Description</label>
  	<div class="col-xs-10">
    	<input name="description" class="form-control" type="text" id="example-search-input">
  	</div>
	</div>
	<div class="form-group row">
  	<label for="example-email-input" class="col-xs-2 col-form-label">Text</label>
  	<div class="col-xs-10">
    	<input name="text" class="form-control" type="text" id="example-email-input">
  	</div>
	</div>
	<div class="form-group row">
  	<label for="example-url-input" class="col-xs-2 col-form-label">URL image</label>
  	<div class="col-xs-10">
    	<input name="href_img" class="form-control" type="url" id="example-url-input">
  	</div>
	</div>
	<div class="form-group row">
  	<label for="example-tel-input" class="col-xs-2 col-form-label">URL news</label>
  	<div class="col-xs-10">
    	<input name="href_news" class="form-control" type="url" id="example-tel-input">
  	</div>
	</div>
	<div class="form-group row">
  	<label for="example-password-input" class="col-xs-2 col-form-label">Author</label>
  	<div class="col-xs-10">
    	<input name="author" class="form-control" type="text" id="example-password-input">
  	</div>
	</div>
	<input name="submit" type="submit" class="btn btn-primary">
</form>
<?php include 'footer/footer.php'; ?>
