<?php
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['phone_number'])) $_SESSION['acas_proto']['claimant']['phone_number'] = $_POST['phone_number'];
?>

<?php include 'header.php';?>
    

        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your email address</h3>
        </p>
        <p>
            <a href="phone.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter the email address you want Acas to use when sending you important information. 
        </p>

        <form method="post" action="org.php">
            <p>
                <label class="acas-form-label" for="email">Email address</label>
                <input type="text" class="acas-input-text form-control" name="email" id="email" value="<?php echo $_SESSION['acas_proto']['claimant']['email']?>">
            </p>



            <p><button id="btn-continue" data-next-page="org.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>    
        <p>
            <a href="#">I don't have an email address</a>
        </p>


    </div>

<?php include 'footer.php'; ?>