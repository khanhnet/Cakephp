<h2>Edit</h2>
 
<!-- link to add new users page -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( '<button type="button" class=" btn btn-primary">Quay lại</button>', 
    array( 'action' => 'index' ),
    array('escape' => false) ); ?>
</div>
 
<?php 
//this is our add form, name the fields same as database column names
echo $this->Form->create('User');
 
    echo $this->Form->input('name');
    echo $this->Form->input('username');
    echo $this->Form->input('email');
    echo $this->Form->input('password', array('type'=>'password'));
     
echo $this->Form->end('Submit');
?>