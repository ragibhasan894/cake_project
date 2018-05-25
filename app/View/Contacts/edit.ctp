<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Edit Contact</h1>

      <?php

      	echo $this->Form->create('Contact');
      	//echo $this->Form->input('cusomer_id');
      	echo $this->Form->input('phone');
      	echo $this->Form->input('email');
      	echo $this->Form->input('address');
      	echo $this->Form->end('Update');

      ?>
  </body>
</html>
