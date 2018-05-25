<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class='container'>
      <h2>Add new customer</h2>

      <table class='table'>
        <?php

        	echo $this->Form->create('Customer');
        	//echo $this->Form->input('user_id');
        	echo $this->Form->input('name').'<br>';
          echo $this->Form->end('Add');

      ?>
      </table>
    </div>

  </body>
</html>
