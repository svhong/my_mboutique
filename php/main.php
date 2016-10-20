<html>
<head>
    <meta charset="UTF-8">
    <title>MBoutique</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>-->
<?php
$current_date = date('m-d');
$holiday = [
    '12-25' => [
        'stylesheet' => 'christmas.css'
    ],
    '07-04' => [
        'stylesheet' => 'id4.css'
    ],
    '03-01' => [
        'stylesheet' => 'threeone.css'
    ]
]
?>
</head>
<body>
<div class="bossCont">
<?php
include('includes/header.php')
?>
<!--<div id="viewArea"></div>-->
<?php
$page = [
    'home' => 'home.php',
    'menu' => 'menu.php',
    'gifts' => 'gifts.php',
    'contact' => 'contact.php'

];
if(empty($_GET['page'])) {
    $goto = $page['home'];
} else if (!empty($_GET['page'] && array_key_exists($_GET['page'], $page)))
{
    $goto = $page[$_GET['page']];
} else {
    $goto = $page['home'];
};
include($goto);
?>
<?php
include('includes/footer.php')
?>
</div>
</body>
<script>
//$(document).ready(function(){
//    $.ajax({
//        url: 'home.php',
//        method: 'post',
//        success:(function(response){
//            console.log("successful call", response);
//            $('#viewArea').append(response);
//        }),
//        error:(function(response){
//            console.log('failed', response);
//        })
//    })
//});
</script>
</html>