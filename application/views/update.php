
<?php include_once('header.php'); ?>

<div class="container">
	
  	<br>
	<?php echo form_open_multipart("welcome/update/{$datas->ID}",['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Update Contact</legend>

    <center class="mt-4">
         <img accept=".jpg, .jpeg, .png"  style="cursor:pointer;max-height:130px;max-width:130px;height:130px;width:130px;" src="<?php echo base_url('uploads/') . $datas->profile_pic;?>" class="rounded-circle" width="150" onclick="document.getElementById('profile_pic').click();" id="blah"/>
         <input type='file' accept="image/*" onchange="readURL(this);" name="profile_pic" id="profile_pic" style="display: none;" value="<?php echo base_url('uploads/') . $datas->profile_pic;?>" />
    </center>

<div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <?php echo form_input(['name'=>'Name','placeholder'=>'Enter Name','type'=>'text','class'=>'form-control','value'=>set_value('Name',$datas->Name)]);?>
      <?php echo form_error('Name','<small id="emailHelp" class="form-text text-danger">','</small>')?>
 </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <?php echo form_input(['name'=>'Email','placeholder'=>'Enter email','type'=>'email','class'=>'form-control','value'=>set_value('Email',$datas->Email)]);?>
      <?php echo form_error('Email','<small id="emailHelp" class="form-text text-danger">','</small>')?>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <?php echo form_input(['name'=>'Address','placeholder'=>'Enter Address','type'=>'text','class'=>'form-control','value'=>set_value('Address',$datas->Address)]);?>
      <?php echo form_error('Address','<small id="emailHelp" class="form-text text-danger">','</small>')?>
    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Contact</label>
      <?php echo form_input(['name'=>'Contact','placeholder'=>'Enter Contact','type'=>'text','class'=>'form-control','value'=>set_value('Contact',$datas->Contact)]);?>
      <?php echo form_error('Contact','<small id="emailHelp" class="form-text text-danger">','</small>')?>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Notes</label>
      <?php echo form_textarea(['name'=>'Notes','placeholder'=>'Enter Notes','rows'=>'3','class'=>'form-control','value'=>set_value('Notes',$datas->Notes)]);?>
    </div>
      <?php echo form_submit(['Notes'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);?>
      <?php echo anchor('welcome','Back',['class'=>'btn btn-default']); ?>
  </fieldset>
<?php echo form_close(); ?>

</div>

<script type="text/javascript">
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
   
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(150);
        };
   
        reader.readAsDataURL(input.files[0]);
    }
   } 
   
</script>

<?php include_once('footer.php'); ?>