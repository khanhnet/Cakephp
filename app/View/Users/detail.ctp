<h2>Detail</h2>
 
<!-- link to add new users page -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( '<button type="button" class=" btn btn-primary">Quay lại</button>', 
    array( 'action' => 'index' ),
    array('escape' => false) ); ?>
</div>

<div class="container">
	<p>Tên:<?= $data[0]['User']['name'] ?></p>
	<p>UserName:<?= $data[0]['User']['username'] ?></p>
	<p>Email:<?= $data[0]['User']['email'] ?></p>

	<?php $i=0;
	 foreach ($data[0]['Profile'] as $value) {
	 $i++;	 ?>
		<p>ảnh <?= $i ?>:<?=$value['image'] ?></p>
		<p>Profile <?= $i ?>:<?=$value['profile'] ?></p>
	<?php } ?>
</div>
 
