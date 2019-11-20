<?php include('header.php'); ?>

<div class="container" style=" margin-top:20px;">
  <h1>Admin Form</h1>
  <?php echo form_open('admin/index'); ?>
  <div class="row">
    <div class='col-lg-6'>
      <div class="form-group">
        <label for="Username">Username:</label>
        <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Username', 'name' => 'name'])  ?>
        <!-- <input type="email" class="form-control" id="email"> -->
      </div>
    </div>
    <div class='col-lg-6' style="margin-top:40px;" >
      <?php echo form_error('name')?>
    </div>
  </div>
  <div class="row">
    <div class='col-lg-6'>
      <div class="form-group">
        <label for="password">Password</label>
        <?php echo form_password(['class' => 'form-control', 'placeholder' => 'Password', 'name' => 'pass'])  ?>
        <!-- <input type="password" class="form-control" id="password"> -->
      </div>
    </div>
    <div class='col-lg-6' style="margin-top:40px;" >
      <?php echo form_error('pass')?>
    </div>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
  <?php echo form_reset(['class' => 'btn btn-secondary', 'value' => 'Reset', 'type' => 'reset'])  ?>
</div>

<?php include("footer.php"); ?>