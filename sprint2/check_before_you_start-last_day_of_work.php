<?php if (!isset($_SESSION)) { session_start(); }
    // if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
    // if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
    if (isset($_POST['dispute'])) $_SESSION['acas_proto']['claimant']['dispute'] = $_POST['dispute'];
?>

<?php include 'header2.php';?>
    

<!--         <p><h2>Service name</h2>
 -->
    </div>
    <div class="c-section-content container paddingtop10" >

<!--             <h3>Service Name</h3>
 -->
        <p>
            <a href="check_before_you_start.php" class="back-to-link">> Back</a>
        </p>        


        <div class="center-box">
            
            <div class="cb-header">
                        <h2>Check before you start</h2>
            </div>

            <div class="cb-body">

        <p>
            When was your last day of work:
        </p>

        <?php
            $less_than_three_months = 'less than 3 months ago';
            $more_than_three_months = '3 months or over ago';

        ?>

        <form id="form_representation" method="post" action="check_before_you_start-tenure_with_employer.php">
            <div class="radio">
              <label><input class='representation' type="radio" name="lastday" <?php echo $_SESSION['acas_proto']['claimant']['lastday'] == "Less than 3 months" ? 'checked' : '';?> value="<?php echo $less_than_three_months;?>" checked>&nbsp;&nbsp;&nbsp;<?php echo $less_than_three_months;?></label>
            </div>
            <div class="radio">
              <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
              <label><input class='representation' type="radio" name="lastday" <?php echo $_SESSION['acas_proto']['claimant']['lastday'] == "3 months or over" ? 'checked' : '';?> value="<?php echo $more_than_three_months;?>">&nbsp;&nbsp;&nbsp;<?php echo $more_than_three_months;?></label>
            </div>



            <p><button id="btn-continue" data-next-page="representative_who.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
            </div>


        </div>




    </div>

    <script type="text/javascript">
        $(".representation").on("click", function(){
                console.log ('clicked', $(this).val());
                if ($(this).val() === '<?php echo $less_than_three_months;?>') $("#form_representation")[0].action = 'check_before_you_start-tenure_with_employer.php';
                 else $("#form_representation")[0].action = 'check_before_you_start-last_day_of_work_more_than_three_months.php';

        })
    </script>

<?php include 'footer.php'; ?>