
<?php #pr($contacts); die();?>
<div class='container'>
<h2>Create Contact</h2>

<table class='table'>
<?php

	echo $this->Form->create('Contact');
	echo $this->Form->input('customer_id',array('type'=>'select','options'=>$contacts));
	//echo $this->Form->input('Customer.id');
	echo $this->Form->input('phone');
	echo $this->Form->input('email');
	echo $this->Form->input('address');
	echo $this->Form->end('Save Contact');

?>
</table>
</div>
