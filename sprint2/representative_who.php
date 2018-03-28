<?php if (!isset($_SESSION)) { session_start();}
    if (isset($_POST['representation'])) $_SESSION['acas_proto']['claimant']['representation'] = $_POST['representation'];
?>

<?php include 'header2.php'; ?>
    


    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your representative</h3> <a href="#" class="back-to-link"></a>
        </p>
        <p>
            <a href="representative.php" class="back-to-link">> Back</a>
        </p>        

        <p>Enter contact details for your representative. You can only have one representative.</p>

<!--         <p>
                You have a representative. <a href="#" class="back-to-link">Change</a>        
        </p> -->

        <form method="post" action="summary.php" autocomplete="off">
            <p>
                <label class="acas-form-label" for="rep_name">Name</label>
                <input type="text" class="acas-input-text form-control" name="rep_name" id="rep_name" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_name'];?>" autocomplete="nothing">
            </p>

            <p>
                <label class="acas-form-label" for="rep_email">Email</label>
                <input type="text" class="acas-input-text form-control" name="rep_email" id="rep_email" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_email'];?>" autocomplete="nothing">
            </p>

            <p>
                <label class="acas-form-label" for="rep_phone">Phone</label>
                <input type="text" class="acas-input-text form-control" name="rep_phone" id="rep_phone" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_phone'];?>" autocomplete="nothing">
            </p>


            <p><button id="btn-continue" data-next-page="subject.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>

    </div>

<?php include 'footer.php'; ?>