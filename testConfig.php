<?php

/**
 * Make new tools half randmly
 */
return (object) array(
    'object' => array(
        array (
            'name' => 'Bow',
            'material' => 'Leather' . ' + ' . 'Wood',
            'type' => 1,
        ), array (
            'name' => 'Knife',
            'material' => 'Iron' . ' + ' . 'Wood',
            'type' => 1,
	), array (
	    'name' => 'Primitive Axe',
	    'material' => 'Stone' . ' + ' . 'Wood',
	    'type' => 2,
        ), array (
            'name' => 'Hammer',
            'material' => 'Iron' . ' + ' . 'Wood',
            'type' => 2,
	), array (
            'name' => 'Sword',
            'material' => 'Iron' . ' + ' . 'Leather',
            'type' => 2,
        ), array (
	    'name' => 'Shield',
	    'material' => 'Leather' . ' + ' . 'Wood',
	    'type' => 3,
        ), array (
            'name' => 'Basket',
            'material' => 'Leather' . ' + ' . 'Wood',
            'type' => 4
        ), array (
	    'name' => 'Advanced Axe',
	    'material' => 'Steel' . ' + ' . 'Wood',
	    'type' => 6,
        ), array (
	    'name' => 'Advanced Sword',
	    'material' => 'Steel' . ' + ' . 'Leather',
	    'type' => 6,
        ), array (
	    'name' => 'Advanced Knife',
	    'material' => 'Steel' . ' + ' . 'Leather',
	    'type' => 6,
        ), array (
	    'name' => 'Advanced Hammer',
	    'material' => 'Steel' . ' + ' . 'Leather',
	    'type' => 6,
        )
	),
	'adv_damage' => rand(11, 15),
	'damage' => null,
	'damageLight' => rand(1, 5),
	'damageHeavy' => rand(6, 10),
	'defence' => rand(1, 10),
	'condition' => rand(25, 75),
	'lifespan' => rand(24, 72),
	'weight' => rand(5, 10),        //2,10
	'weightLight' => rand(2, 7),    //2,7
	'weightHeavy' => rand(8, 13),   //5,10
);


/*/
type 1  -   damageLight -   weightLight
type 2  -   damageHeavy -   weightHeavy
type 3  -   defence     -   weightHeavy
type 4  -   other       -   weight


type 1  - light weapon   - damage 5-9   - light damage
type 2	- heavy weapon   - damage 10-14 - heavy damage
type 3	- defence        - .
type 4	- other equip    - damage 1-4
/*/