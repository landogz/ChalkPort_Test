<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include_once('header.php'); ?>
<div class="container"><br>
        <h3>Recently Deleted Contacts</h3> 
        <?php if($msg = $this->session->flashdata('msg')):?>
        	<div class="alert alert-dismissible alert-primary">
			  <?php echo $msg;?>
			</div>
        <?php endif;?>
	
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Address</th>
		      <th scope="col">Contact</th>
		      <th scope="col">Notes</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (count((array)$records)):?>
		  		<?php foreach($records as $records): ?>
				    <tr>
				      <th scope="row">
					      	<a href="javascript:void(0)">
						      <img src="<?php echo base_url('uploads/');?><?php echo  htmlspecialchars($records->profile_pic);?>" alt="user" width="40" height="40" class="rounded-circle"/><?php echo $records->Name; ?>
						    </a>
					  </th>
				      <td><?php echo $records->Email; ?></td>
				      <td><?php echo $records->Address; ?></td>
				      <td><?php echo $records->Contact; ?></td>
				      <td><?php echo $records->Notes; ?></td>
				      <td><?php echo anchor("welcome/restore/{$records->ID}",'Restore',['class' => 'btn btn-primary']);?></td>
				    </tr>
				<?php endforeach; ?>
				    <?php else: ?>
				    	<tr>
				    		<td>No Record Found!</td>
				    	</tr>
				    <?php endif; ?>
		  </tbody>
		</table> 

</div>

<?php include_once('footer.php'); ?>