<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include_once('header.php'); ?>
<div class="container"><br>
        <h3>Logs </h3> 
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Address</th>
		      <th scope="col">Contact</th>
		      <th scope="col">Notes</th>
		      <th scope="col">Logs</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (count((array)$records)):?>
		  		<?php foreach($records as $records): ?>
			    <tr>
			      <th scope="row"><a href="javascript:void(0)"><img
	                                          src="<?php echo base_url('uploads/');?><?php echo  htmlspecialchars($records->profile_pic);?>" alt="user" width="40" height="40"
	                                          class="rounded-circle" /><?php echo $records->Name; ?></a></th>
			      <td><?php echo $records->Email; ?></td>
			      <td><?php echo $records->Address; ?></td>
			      <td><?php echo $records->Contact; ?></td>
			      <td><?php echo $records->Notes; ?></td>
			      <td><?php echo $records->Logs; ?></td>
			    </tr>
		<?php endforeach; ?>
		    <?php else: ?>
		    	<tr>
		    		No Record Found!
		    	</tr>
		    <?php endif; ?>







		  </tbody>
		</table> 

</div>

<?php include_once('footer.php'); ?>