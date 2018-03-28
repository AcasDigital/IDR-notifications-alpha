<?php if (!isset($_SESSION)) { session_start(); }
    // if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
    // if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
    // if (isset($_POST['phone_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_phone_person_or_department'] = $_POST['phone_person_or_department'];
?>

<?php include 'header2.php';?>
    

<!--         <p><h2>Service name</h2>
 -->
    </div>
    <div class="check-before-you-start c-section-content container paddingtop10" >



        <p>
            <a href="./start.php" class="back-to-link">> Back</a>
        </p>        


        <div class="center-box">
            
            <div class="cb-header">
                <h3>Check before you start</h3> 
                <p>
                    Answer these questions to check if you need to fill in the form to tell Acas you want to start conciliation.
                </p>
            </div>

            <div class="cb-body">

        <p>
            What is your dispute about?
        </p>

        <form id="form_representation" method="post" action="check_before_you_start-last_day_of_work.php">
            <div class="radio">
              <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I've been sacked" ? 'checked' : '';?> value="I've been sacked" checked>&nbsp;&nbsp;&nbsp;I've been sacked</label>
            </div>
            <div class="radio">
              <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
              <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I'm owed wages" ? 'checked' : '';?> value="I'm owed wages">&nbsp;&nbsp;&nbsp;I'm owed wages</label>
            </div>
            <div class="radio">
              <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
              <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I'm owed holiday" ? 'checked' : '';?> value="I'm owed holiday">&nbsp;&nbsp;&nbsp;I'm owed holiday</label>
            </div>



            <p><button id="btn-continue" data-next-page="representative_who.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
            </div>


        </div>




    </div>


<?php include 'footer.php'; ?>