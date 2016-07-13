<div class="row">
  <div class="col-lg-4 col-lg-offset-4">
    <h1>Login</h1>
    <?php echo $this->session->flashdata('message');?>
    <?php echo form_open('',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php echo form_label('Username','identity');?>
        <?php echo form_input('identity', set_value('identity'),'class="form-control"');?>
        <?php echo form_error('identity','<span class="error">','</span>');?>
      </div>
      <div class="form-group">
        <?php echo form_label('Password','password');?>
        <?php echo form_password('password','','class="form-control"');?>
        <?php echo form_error('password','<span class="error">','</span>');?>
      </div>
      <div class="form-group">
        <label>
          <?php echo form_checkbox('remember','1',FALSE);?> Remember me
        </label>
      </div>
      <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
    <?php echo form_close();?>
  </div>
</div>
<?php //echo validation_errors('<p class="error">','</p>');  ?>