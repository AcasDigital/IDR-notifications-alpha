<?php if (!isset($_SESSION)) { session_start(); }
    if (isset($_POST['hremail'])) $_SESSION['acas_proto']['claimant']['hremail'] = $_POST['hremail'];
    if (isset($_POST['hrphone_number'])) $_SESSION['acas_proto']['claimant']['hrphone_number'] = $_POST['hrphone_number'];
    // if (isset($_POST['phone_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_phone_person_or_department'] = $_POST['phone_person_or_department'];
?>

<?php include 'header2.php';?>
    


    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Do you have a representative to handle the case on your behalf? </h3>
        </p>
        <p>
            <a href="hr_details.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            It is not Acas's role to represent you. You don't have to have someone to act for you (a representative) but if you choose to have one you need to tell us.
        </p>

        <form id="form_representation" method="post" action="summary.php">
            <div class="radio">
              <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' || $_SESSION['acas_proto']['claimant']['representation'] == '' ? 'checked' : '';?> value="No">&nbsp;&nbsp;&nbsp;No</label>
            </div>
            <div class="radio">
              <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
              <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ? 'checked' : '';?> value="Yes">&nbsp;&nbsp;&nbsp;Yes</label>
            </div>

            <p>
                <a class="before-arrow link-underline" href="#">I'm not sure if I want a representative or who my representative should be</a>
            </p>


            <p><button id="btn-continue" data-next-page="representative_who.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>

    </div>

    <script type="text/javascript">
        $(".representation").on("click", function(){
                console.log ('clicked', $(this).val());
                if ($(this).val() === 'No') $("#form_representation")[0].action = 'summary.php';
                 else $("#form_representation")[0].action = 'representative_who.php';

        })
    </script>

<?php include 'footer.php'; ?>