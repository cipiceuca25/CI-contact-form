<h1>Contact data</h1>
<section  class='comment'>

<?php echo validation_errors() ? '<div class="errors">' . validation_errors() . '</div>' : '' ?>
<?php echo form_open(); ?>
<?php echo form_label('Name'); ?>
<?php echo form_input('name'); ?>
<?php echo form_label('E-mail'); ?>
<?php echo form_input('email'); ?>
<?php echo form_label('Title'); ?>
<?php echo form_input('title'); ?>
<?php echo form_label('Contents'); ?>
<?php echo form_textarea('contents'); ?>
<?php echo form_submit('submit','Enter data'); ?>
<?php echo form_close(); ?>

</section> 