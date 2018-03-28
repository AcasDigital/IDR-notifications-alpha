<?php if (!isset($_SESSION)) { session_start(); }
    // if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
    // if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
    if (isset($_POST['tenure'])) $_SESSION['acas_proto']['claimant']['tenure'] = $_POST['tenure'];
?>

<?php include 'header2.php';?>
    

<!--         <p><h2>Service name</h2>
 -->
    </div>
    <div class="c-section-content container paddingtop10" >

<!--             <h3>Service Name</h3>
 -->
        <p>
            <a href="./check_before_you_start-tenure_with_employer.php" class="back-to-link">> Back</a>
        </p>        


        <div class="center-box">
            
            <div class="cb-header">
                        <h2>Check before you start</h2>
            </div>

            <div class="cb-body">


        <form id="form_representation" method="post" action="name.php">
            <p>You last day of work was within the last 3 months.</p>   

            <p>You have worked for your employer for over 2 years.</p>

            <p>You can start conciliation.</p>


            <p><button id="btn-continue" data-next-page="name.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
            </div>


        </div>




    </div>


<?php include 'footer.php'; ?>