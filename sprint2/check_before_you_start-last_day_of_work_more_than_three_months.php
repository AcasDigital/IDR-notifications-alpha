<?php if (!isset($_SESSION)) { session_start(); }
    // if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
    // if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
    if (isset($_POST['lastday'])) $_SESSION['acas_proto']['claimant']['lastday'] = $_POST['lastday'];
?>

<?php include 'header2.php';?>
    

<!--         <p><h2>Service name</h2>
 -->
    </div>
    <div class="c-section-content container paddingtop10" >

<!--             <h3>Service Name</h3>
 -->
        <p>
            <a href="./check_before_you_start-last_day_of_work.php" class="back-to-link">> Back</a>
        </p>        


        <div class="center-box">
            
            <div class="cb-header">
                        <h2>Check before you start</h2>
            </div>

            <div class="cb-body">


        <form id="form_representation" method="post" action="name.php">
        <p><strong>Your last day of work was more than 3 months ago</strong>    <a class="change-link" href="./check_before_you_start-last_day_of_work.php">Change</a></p>

        <p>You usually need to make a claim to an employment tribunal within 3 months of your last day at work. </p>

        <p>You can still fill in the [service name] form but a tribunal is unlikely to hear your case. However, at better option might be to call the Acas helpline on 0300 123 1122.</p>


            <p><button id="btn-continue" data-next-page="name.php" type="submit" class=" grey-btn btn btn-acas btn-lime margintopbottom10">Start form</button></p>
        </form>
            </div>


        </div>




    </div>


<?php include 'footer.php'; ?>