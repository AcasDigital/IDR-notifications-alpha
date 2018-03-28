<?php if (!isset($_SESSION)) { session_start(); }
    if (isset($_POST['postcode_selected'])) $_SESSION['acas_proto']['claimant']['postcode'] = $_POST['postcode_selected'];
    if (isset($_POST['address_selected'])) $_SESSION['acas_proto']['claimant']['address'] = $_POST['address_selected'];

?> 
<?php include 'header.php'; ?>
    
        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your phone number </h3>
        </p>
        <p>
            <a href="address.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter the phone number you want Acas to use if we need to contact you.
        </p>

        <form class="needs-validation" novalidate method="post" action="email.php">
            <div class="form-group">  
                <label class="acas-form-label" for="phone_number">Phone number</label>
                <input type="text" class="acas-input-text form-control" name="phone_number" id="phone_number" value="<?php echo $_SESSION['acas_proto']['claimant']['phone_number']?>" autocomplete="off" pattern="^[\s\d]+$" maxlength="15" required>
                <div class="invalid-feedback">
                    Please enter enter valid UK phone number.
                </div>                
            </div>


            <div class="form-group">   
                <button id="btn-continue" data-next-page="email.php" type="submmit" class="btn btn-acas btn-lime margintopbottom10">Continue</button>
            </div>

        </form>

        <p>
            <a href="#">I don't have a UK phone number</a>
        </p>


    </div>

<?php include 'footer.php'; ?>