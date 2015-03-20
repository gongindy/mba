<?php
require('lib/gantti.php'); 
//require('data.php'); 

date_default_timezone_set('UTC');
setlocale(LC_ALL, 'en_US');

$gantti = new Gantti($data, array(
  'title'      => 'Demo',
  'cellwidth'  => 25,
  'cellheight' => 35,
  'today'      => true
));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Mahatma Gantti – A simple PHP Gantt Class</title>
  <meta charset="utf-8" />

  <link rel="stylesheet" href="<?php echo base_url();?>gantt/css/screen.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>gantt/css/gantti.css" />

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>


<?php echo $gantti ?>

</body>

</html>
