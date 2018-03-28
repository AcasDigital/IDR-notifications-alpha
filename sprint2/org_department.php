<?php if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['org'])) $_SESSION['acas_proto']['claimant']['org'] = $_POST['org'];
?>

<?php include 'header.php'; ?>
    

        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Name of a person we can contact at the organisation you're in dispute with</h3>
        </p>
        <p>
            <a href="org.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Give details of the person or department we can contact in the organisation you're in dispute with if you choose to conciliate.  
        </p>

        <form method="post" action="representative.php">
            <p>
                <label class="acas-form-label" for="person_name_or_department">Name of person or department</label>
                <input type="text" class="acas-input-text form-control" name="person_name_or_department" id="person_name_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_person_name_or_department']?>">
            </p>

            <p>
                <label class="acas-form-label" for="email_person_or_department">Email of person or department</label>
                <input type="text" class="acas-input-text form-control" name="email_person_or_department" id="email_person_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_email_person_or_department']?>">
            </p>

            <p>
                <label class="acas-form-label" for="phone_person_or_department">Phone number of person or department </label>
                <input type="text" class="acas-input-text form-control" name="phone_person_or_department" id="phone_person_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_phone_person_or_department']?>">
            </p>

            <p>
                <a href="#">I'm not sure who the best person or department is</a>
            </p>


            <p><button id="btn-continue" data-next-page="representative.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
    </div>

<?php include 'footer.php'; ?>