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

        <p>
            How long did you work for your employer?
        </p>


        <?php
            $less_than_two_years = 'Less than 2 years';
            $more_than_two_years = 'More than 2 years';

        ?>


        <form id="form_representation" method="post" action="check_before_you_start-tenure_more_than_two_years.php">
            <div class="radio">
              <label><input class='representation' type="radio" name="tenure" <?php echo $_SESSION['acas_proto']['claimant']['tenure'] == $less_than_two_years ? 'checked' : '';?> value="<?php echo $less_than_two_years;?>" checked>&nbsp;&nbsp;&nbsp;<?php echo $less_than_two_years;?></label>
            </div>
            <div class="radio">
              <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
              <label><input class='representation' type="radio" name="tenure" <?php echo $_SESSION['acas_proto']['claimant']['tenure'] == $more_than_two_years || $_SESSION['acas_proto']['claimant']['tenure'] == '' ? 'checked' : '';?> value="<?php echo $more_than_two_years;?>">&nbsp;&nbsp;&nbsp;<?php echo $more_than_two_years;?></label>
            </div>



            <p><button id="btn-continue" data-next-page="representative_who.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
            </div>


        </div>




    </div>

    <script type="text/javascript">
        $(".representation").on("click", function(){
                console.log ('clicked', $(this).val());
                if ($(this).val() === '<?php echo $less_than_two_years;?>') $("#form_representation")[0].action = 'check_before_you_start-tenure_less_than_two_years.php';
                 else $("#form_representation")[0].action = 'check_before_you_start-tenure_more_than_two_years.php';

        })
    </script>

<?php include 'footer.php'; ?>