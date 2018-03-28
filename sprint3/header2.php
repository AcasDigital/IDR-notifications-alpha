<?php 
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);   
   die();
}


// if (basename($_SERVER['PHP_SELF']) !== 'your_details.php') {
//   if (!isset($_SESSION['acas_proto']['page']['your_details'])) { redirect('your_details.php'); }  
// }
  
// if (basename($_SERVER['PHP_SELF']) !== 'your_case.php') {
//   if (!isset($_SESSION['acas_proto']['page']['your_case'])) { redirect('your_case.php'); }  
// }

// if (basename($_SERVER['PHP_SELF']) !== 'your_employer.php') {
//   if (!isset($_SESSION['acas_proto']['page']['your_employer'])) { redirect('your_employer.php'); }  
// }

// if (basename($_SERVER['PHP_SELF']) !== 'summary.php') {
//   if (!isset($_SESSION['acas_proto']['page']['summary'])) { redirect('summary.php'); }  
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACAS</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/acas.css">
</head>
<body>


<style>

/*END Form Wizard*/	
</style>


	<div class="header2 container headerbgc paddingbottom10 paddingtop10">

        <img src="./assets/img/acaslogo.png">
        <div class="margintop10">
            <a href="./<?php echo basename($_SERVER['HTTP_REFERER']);?>" class="back-to-link before-arrow">Back</a>
        </div>

	    	<h2 class="margintop10 paddingtopzero ">Notify Acas about your dispute with your employer</h2>

<div class="container">


<?php 
//  
function page_active($p){

	return basename($_SERVER['PHP_SELF']) === $p ? 'active' : '';

}

?>


            <div class="row bs-wizard" style="border-bottom:0;">
                
                <div class="col-3 bs-wizard-step <?php echo page_active('your_details.php') ?> <?php echo strlen($_SESSION['acas_proto']['page']['your_details']) > 0 ? 'complete' : 'disabled' ?>">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="your_details.php" class="bs-wizard-dot"></a>
                  <div class="text-center bs-wizard-stepnum">Contact details</div>
                  
                </div>
                
                <div class="col-3 bs-wizard-step <?php echo page_active('your_case.php') ?> <?php echo strlen($_SESSION['acas_proto']['page']['your_case']) > 0 ? 'complete' : 'disabled' ?>">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="your_case.php" class="bs-wizard-dot"></a>
                  <div class="text-center bs-wizard-stepnum">Your dispute</div>                  
                </div>
                
                <div class="col-3 bs-wizard-step <?php echo page_active('your_employer.php') ?> <?php echo strlen($_SESSION['acas_proto']['page']['your_employer']) > 0 ? 'complete' : 'disabled' ?>">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="your_employer.php" class="bs-wizard-dot"></a>
                  <div class="text-center bs-wizard-stepnum">Your employment</div>        
                </div>
                
                <div class="col-3 bs-wizard-step <?php echo page_active('summary.php') ?> <?php echo strlen($_SESSION['acas_proto']['page']['summary']) > 0 ? 'complete' : 'disabled' ?>">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="summary.php" class="bs-wizard-dot"></a>
                  <div class="text-center bs-wizard-stepnum">Confirm</div>                       
                </div>
            </div>
        
        
        
        
        
	</div>
</div>	    	

	