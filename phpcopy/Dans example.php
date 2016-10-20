<?php
$today = date('m-d');

$holidays = [
    '12-25' => [
        'stylesheet' => 'christmas.css'
    ],
    '07-04' => [
        'stylesheet' => 'fourthofjuly.css'
    ]
];
if(!empty( $holidays[$today])){ //isset was changed to empty() empty tells you if there is nothing isset tells you if there is something
    print('it exists');
} else {
    print ('it doesnt exist');
}
$current_stylesheet = $holidays[$today];