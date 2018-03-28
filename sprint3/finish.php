<?php     
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['summary'] = $_POST['page'];


?>
<?php include 'header2.php';
//if (!isset($_SESSION)) { session_start();}
session_destroy();
?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h4>Your information has been sent to Acas</h4>
        </p>

        <p>
            You will receive an email from Acas to confirm that your information has been safely 
            received. The information you have provided will only be used as part of this process and
            will not be shared with any other parties.
        </p>


        <p>Shortly you will receive another email from Acas with information about next steps.  </p>


    </div>


 



<?php include 'footer.php'; ?>