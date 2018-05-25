<?php #pr($customers); die(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
    <h3>All Customers</h3>
    <div class='table-responsive'>
    <table id='all_data' class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Date of Birth</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($customers as $customer): ;?>

        <tr>
          <td><?php echo $customer['Customer']['name']; ?></td>
          <td><?php echo $customer['Customer']['dob']; ?></td>

          <td>
          <?php
            if($customer['Contact']) {
                $i = 0;
                for($i=0; $i<count($customer['Contact']); $i++) {
                    if($i>0) {
                        if($customer['Contact'][$i]['phone'] == '') {
                            continue;
                        }
                        echo ", ";
                    }
                    echo $customer['Contact'][$i]['phone'];
                }
            }
          ?>
          </td>

          <td>
           <?php
            if($customer['Contact']) {
                $i = 0;
                for($i=0; $i<count($customer['Contact']); $i++) {
                    if($i>0) {
                        if($customer['Contact'][$i]['address'] == '') {
                            continue;
                        }
                        echo ", ";
                    }
                    echo $customer['Contact'][$i]['address'];
                }
            }
          ?>
          </td>

          <td>
           <?php
            if($customer['Contact']) {
                $i = 0;
                for($i=0; $i<count($customer['Contact']); $i++) {
                    if($i>0) {
                        if($customer['Contact'][$i]['email'] == '') {
                            continue;
                        }
                        echo ", ";
                    }
                    echo $customer['Contact'][$i]['email'];
                }
            }
          ?>
          </td>

          <td><?php echo $this->HTML->link('Edit', array('controller'=>'customers','action'=>'edit',$customer['Customer']['id']))."<br>";
            echo $this->Form->postLink('Delete', array('controller'=>'customers','action'=>'delete',$customer['Customer']['id']), array('confirm'=>'Are you sure you want to delete?'));
           ?>
           </td>
        </tr>

      <?php endforeach; ?>
      </tbody>
    </table>
    </div>
    </div>
  </body>
</html>
<script>
	$(document).ready(function() {
		$("#all_data").DataTable();
	});
</script>
