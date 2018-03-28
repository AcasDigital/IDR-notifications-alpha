<?php if (!isset($_SESSION)) { session_start(); }
    if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
    if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
    if (isset($_POST['phone_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_phone_person_or_department'] = $_POST['phone_person_or_department'];
?>

<?php include 'header.php';?>
    

        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Do you have a representative to handle the case on your behalf? </h3>
        </p>
        <p>
            <a href="org_department.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            It is not Acas's role to represent you. You don't have to have someone to act for you (a representative) but if you choose to have one you need to tell us.
        </p>

        <form id="form_representation" method="post" action="representative_who.php">
            <div class="radio">
              <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="No">&nbsp;&nbsp;&nbsp;No</label>
            </div>
            <div class="radio">
              <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
              <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ? 'checked' : '';?> value="Yes">&nbsp;&nbsp;&nbsp;Yes</label>
            </div>

            <p>
                <a href="#">I'm not sure if I want a representative or who my representative should be</a>
            </p>


            <p><button id="btn-continue" data-next-page="representative_who.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>

    </div>

    <script type="text/javascript">
        $(".representation").on("click", function(){
                console.log ('clicked', $(this).val());
                if ($(this).val() === 'No') $("#form_representation")[0].action = 'subject.php';
                 else $("#form_representation")[0].action = 'representative_who.php';

        })
    </script>

<?php include 'footer.php'; ?>