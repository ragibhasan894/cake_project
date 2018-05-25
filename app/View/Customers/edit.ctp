<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Edit Topic</h1>

      <?php

      	echo $this->Form->create('Customer');
      	echo $this->Form->input('name');
      	echo $this->Form->input('dob');
      	echo $this->Form->end('Update');

      ?>
  </body>
</html>
