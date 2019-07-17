<div class="container">
   <?php echo $this->Html->link( '<button type="button" class=" btn btn-primary">Thêm mới</button>', array('action' => 'add' ),array('escape' => false) ); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $item){ ?>
    <tr>
      <th scope="row"><?=$item['User']['id'] ?></th>
      <td><?=$item['User']['name'] ?></td>
      <td><?=$item['User']['username'] ?></td>
      <td><?=$item['User']['email'] ?></td>
      <td>
         <?php echo $this->Html->link( '<button type="button" class=" btn btn-success">Chi tiết</button>', 
         array('action' => 'detail',$item['User']['id'] ),
         array('escape' => false) ); ?>
         <?php echo $this->Html->link( '<button type="button" class=" btn btn-warning">Sửa</button>', 
         array('action' => 'edit',$item['User']['id'] ),
         array('escape' => false) ); ?>
         <?php echo $this->Form->postLink( '<button type="button" class=" btn btn-danger">Xóa</button>', 
         array('action' => 'delete',$item['User']['id'] ),
         array('escape' => false) ,
         array('confirm'=>'Bạn muốn xóa?')); ?>
      </td>
     
    </tr>
 <?php } ?>
   
  </tbody>
</table>
<?php
    echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
    echo " | ".$this->Paginator->numbers()." | "; 
    echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); 
    echo " Page ".$this->Paginator->counter();
?> 
</div>