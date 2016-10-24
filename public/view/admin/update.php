<?php
	include 'header/admin.php';
	$db = GetElementById($params['id']);
	Insert_Update($params['id']);
?>

<form method="post" action="">
	<?php foreach ($db as $item): ?>
		<div class="form-group row">
  		<label for="example-text-input" class="col-xs-2 col-form-label">Title</label>
  		<div class="col-xs-10">
    		<input name="title" class="form-control" type="text" id="example-text-input" value="<?php echo $item['title']; ?>">
  		</div>
		</div>
		<div class="form-group row">
  		<label for="example-search-input" class="col-xs-2 col-form-label">Description</label>
  		<div class="col-xs-10">
    		<input name="description" class="form-control" type="text" id="example-search-input" value="<?php echo $item['description']; ?>">
  		</div>
		</div>
		<div class="form-group row">
  		<label for="example-email-input" class="col-xs-2 col-form-label">Text</label>
  		<div class="col-xs-10">
    		<input name="text" class="form-control" type="text" id="example-email-input" value="<?php echo $item['text']; ?>">
  		</div>
		</div>
		<div class="form-group row">
  		<label for="example-url-input" class="col-xs-2 col-form-label">URL image</label>
  		<div class="col-xs-10">
    		<input name="href_img" class="form-control" type="url" id="example-url-input" value="<?php echo $item['img']; ?>">
  		</div>
		</div>
		<div class="form-group row">
  		<label for="example-tel-input" class="col-xs-2 col-form-label">URL news</label>
  		<div class="col-xs-10">
    		<input name="href_news" class="form-control" type="url" id="example-tel-input" value="<?php echo $item['href']; ?>">
  		</div>
		</div>
		<div class="form-group row">
	  	<label for="example-password-input" class="col-xs-2 col-form-label">Author</label>
  		<div class="col-xs-10">
    		<input name="author" class="form-control" type="text" id="example-password-input" value="<?php echo $item['author']; ?>">
  		</div>
		</div>
<!--<div class="form-group row">
  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
  <div class="col-xs-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>-->
		<input name="update" type="submit" class="btn btn-primary">
	<?php endforeach; ?>
</form>

<?php include 'footer/footer.php'; ?>
