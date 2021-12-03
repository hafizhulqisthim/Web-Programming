<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="container">
<div class="content-wrapper">
	<section class="content"><br> 
		<?php foreach ($feed_back as $fdb) { ?>
			<form method="post" action="<?php echo base_url().'home/update'; ?>">
				<div class="form-group">
					<label>Name</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $fdb->id ?>">
					<input type="text" name="name" class="form-control" value="<?php echo $fdb->name ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="<?php echo $fdb->email ?>">
				</div>
				<div class="form-group">
					<label>Comment</label>
					<input type="text" name="comment" class="form-control" value="<?php echo $fdb->comment ?>">
				</div>
				<br>				
				<button class="btn btn-primary" type="submit">Submit</button>
				<button class="btn btn-danger" type="reset">Reset</button>
			</form>
		<?php } ?>
	</section>
</div>
</div>