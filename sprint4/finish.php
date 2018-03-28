<?php if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['summary'] = $_POST['page'];
?>
<?php include 'header.php';
date_default_timezone_set('Europe/London');

$message = "Form submitted on " . date("d-m-Y | h:i:sa") . "\r\n";


$message .= $_POST['formstring'];


//$message = wordwrap($message, 70, "\r\n");

$headers = 'From: zra@wexsl.com' . "\r\n" .
    'Reply-To: zra@wexsl.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$headers .= 'MIME-Version: 1.0';
$headers .= 'Content-type: text/html; charset=iso-8859-1'; 

//Send
mail('anna.andersen@methods.co.uk, razz.ali@methods.co.uk, kerusks@gmail.com', 'Form submission from prototype - Sprint 4', $message, $headers);
//mail( 'razz.ali@methods.co.uk, kerusks@gmail.com', 'Form submission from prototype - Sprint 4', $message, $headers);








session_destroy();
$_SESSION['acas_proto']['page']['summary-reached'] = 'false';
?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            Thank you for telling Acas about your problem at work.
        </p>

        <p>
            Your case reference number is 000<?php echo mt_rand(10000, 99999);?>/<?php  echo mt_rand(10, 99);?>, submitted to us at <?php echo date('h:i A');?> on <?php echo date('d F Y'); ?>. You should quote your reference number whenever you contact us.
        </p>


        <p>You will receive an email confirmation, setting out what happens next. Please check your ‘spam’ folder to make sure it hasn’t been sent there. If you didn’t provide an email address, we will send confirmation by post.</p>

        <p>We will contact you by phone within 2 to 3 days to discuss your problem.</p>


    </div>




<?php include 'footer.php'; ?>