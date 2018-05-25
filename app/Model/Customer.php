<?php
App::uses('AppModel', 'Model');
/**
 *
 */
class Customer extends AppModel{

    public $displayField = 'name';

    public $hasMany = array(
        'Contact' => array(
            'className' => 'Contact',
            'foreignKey' => 'customer_id',
            'dependent' => true
        )
    );
}


?>
