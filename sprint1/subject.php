<?php if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['representation'])) $_SESSION['acas_proto']['claimant']['representation'] = $_POST['representation'];
if (isset($_POST['rep_name'])) $_SESSION['acas_proto']['claimant']['representation_name'] = $_POST['rep_name'];
if (isset($_POST['rep_email'])) $_SESSION['acas_proto']['claimant']['representation_email'] = $_POST['rep_email'];
if (isset($_POST['rep_phone'])) $_SESSION['acas_proto']['claimant']['representation_phone'] = $_POST['rep_phone'];
?>

<?php include 'header.php'; ?>
    

        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>What the dispute is about </h3>
        </p>
        <p>
            <a href="representative_who.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Tell us what your dispute is about. This will help Acas find the most appropriate person to deal with your case.
        </p>

        <?php
        echo $_SESSION['acas_proto']['claimant']['case'];
        ?>

        <form method="post" action="summary.php">
            <div class="checkbox">
              <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Wages' ? 'checked' : '';?> value="Wages">&nbsp;&nbsp;&nbsp;Wages</label>
            </div>
            <div class="checkbox">
              <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Breach of contract' ? 'checked' : '';?> value="Breach of contract">&nbsp;&nbsp;&nbsp;Breach of contract</label>
            </div>
            <div class="checkbox">
              <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Holiday' ? 'checked' : '';?> value="Holiday">&nbsp;&nbsp;&nbsp;Holiday</label>
            </div>
            <div class="checkbox">
              <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Unfair dismissal' ? 'checked' : '';?> value="Unfair dismissal">&nbsp;&nbsp;&nbsp;Unfair dismissal</label>
            </div>
            <div class="checkbox">
              <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Discrimination' ? 'checked' : '';?> value="Discrimination">&nbsp;&nbsp;&nbsp;Discrimination</label>
            </div>
            <div class="checkbox">
              <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Any other subject' ? 'checked' : '';?> value="Any other subject">&nbsp;&nbsp;&nbsp;Any other subject</label>          
            </div>

            <p>
                <a href="#"> I’m not sure what my case is about</a>
            </p>


            <p><button type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>


    </div>

<?php include 'footer.php'; ?>