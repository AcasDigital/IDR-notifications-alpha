<?php     
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_ver'] = '1.0';

?>
<?php include 'header.php';?>
    

        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your name</h3>
        </p>
        <p>
            <a href="index.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter your name, do not use initials. 
        </p>

        <form method="post" action="address.php">
            <p>
                <label class="acas-form-label" for="first_name">First name</label>
                <input type="text" class="acas-input-text form-control" name="first_name" id="first_name" value="<?php echo $_SESSION['acas_proto']['claimant']['first_name']?>">
            </p>

<!--             <p>
                <label class="acas-form-label" for="middle_names">Middle names</label>
                <input type="text" class="acas-input-text form-control" name="middle_names" id="middle_names">
            </p>
 -->
            <p>
                <label class="acas-form-label" for="last_name">Last name</label>
                <input type="text" class="acas-input-text form-control" name="last_name" id="last_name" value="<?php echo $_SESSION['acas_proto']['claimant']['last_name']?>">
            </p>


            <p><button id="btn-continue" data-next-page="address.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
    </div>

<?php include 'footer.php'; ?>