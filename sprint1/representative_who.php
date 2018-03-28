<?php if (!isset($_SESSION)) { session_start();}
    if (isset($_POST['representation'])) $_SESSION['acas_proto']['claimant']['representation'] = $_POST['representation'];
?>

<?php include 'header.php'; ?>
    

        <p><h2>Start a claim against your employer</h2>

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

        <form method="post" action="subject.php">
            <p>
                <label class="acas-form-label" for="rep_name">Name of representative</label>
                <input type="text" class="acas-input-text form-control" name="rep_name" id="rep_name" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_name'];?>">
            </p>

            <p>
                <label class="acas-form-label" for="rep_email">Email of representative</label>
                <input type="text" class="acas-input-text form-control" name="rep_email" id="rep_email" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_email'];?>">
            </p>

            <p>
                <label class="acas-form-label" for="rep_phone">Phone number of representative</label>
                <input type="text" class="acas-input-text form-control" name="rep_phone" id="rep_phone" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_phone'];?>">
            </p>


            <p><button id="btn-continue" data-next-page="subject.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>

    </div>

<?php include 'footer.php'; ?>