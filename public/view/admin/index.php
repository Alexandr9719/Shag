<?php include 'header/admin.php'; $db = Get();?>
<form action="" method="post">
<div class="container">
	<div class="row">
    <div class="col-md-12">
      <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">
          <table id="mytable" class="table table-bordred table-striped">
           <thead>
             <th>Title</th>
             <th>Description</th>
             <th>Text</th>
             <th>URL image</th>
             <th>URL news</th>
             <th>Date of creation</th>
             <th>Date of update</th>
             <th>Author</th>
           </thead>
    <tbody>
    <?php foreach ($db as $item): ?>
      <tr>
        <td>
          <?php echo $item['title']; ?>
        </td>
        <td>
          <?php
					  $des = $item['description'];
						$des = substr($des, 0, 200);
						$des = rtrim($des, "!,.-");
						$des = substr($des, 0, strrpos($des, ' '));
						echo $des."...";
					?>
        </td>
        <td>
          <?php
						$des = $item['text'];
						$des = substr($des, 0, 200);
						$des = rtrim($des, "!,.-");
						$des = substr($des, 0, strrpos($des, ' '));
						echo $des."...";
					?>
        </td>
        <td>
          <img src="<?php echo $item['img'] ?>" width = "200px" alt="" />
        </td>
        <td>
          <?php echo $item['href']; ?>
        </td>
        <td>
          <?php echo $item['created_at']; ?>
        </td>
        <td>
          <?php echo $item['updated_at']; ?>
        </td>
        <td>
          <?php echo $item['author']; ?>
        </td>
        <!--<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button  name="edit" type="submit" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>-->
				<td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="update/id/<?php echo $item['id']; ?>" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></a></p></td>
				<td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="delete/id/<?php echo $item['id']; ?>" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></a></p></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div></form>
<?php include 'footer/footer.php'; ?>
