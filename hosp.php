<?php include_once 'config/init.php';
?>

<?php
$hosp = new Hospital;

$template = new Template('templates/hospital-single.php');

$hosp_id = isset($_GET['id'])?$_GET['id']:null;


$template->hosp = $hosp->getHospital($hosp_id);
echo $template;