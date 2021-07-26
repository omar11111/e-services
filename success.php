<?php  if (count($success) > 0) : ?>
  <div class="alert alert-success" style="color:black;text-align:center">
  	<?php foreach ($success as $success) : ?>
  	  <p><?php echo $success ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>