<?php if (!isset($_SESSION)) { session_start(); }
    if (isset($_POST['postcode_selected'])) $_SESSION['acas_proto']['claimant']['postcode'] = $_POST['postcode_selected'];
    if (isset($_POST['address_selected'])) $_SESSION['acas_proto']['claimant']['address'] = $_POST['address_selected'];

?> 
<?php include 'header2.php'; ?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your contact details  </h3>
        </p>
        <p>
            <a href="address.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter the email address and phone number you want Acas to use when sending you important information or calling you.
        </p>

        <form class="needs-validation" novalidate method="post" action="org.php">
            <div class="form-group">  
                <div>
                    <label class="acas-form-label" for="email">Email address</label>
                    <input type="text" class="acas-input-text form-control" name="email" id="email" value="<?php echo $_SESSION['acas_proto']['claimant']['email']?>" autocomplete="off" pattern="^\S+@\S+\.\S+$" maxlength="100">
                    <div class="invalid-feedback">
                        Please enter valid email address.
                    </div>                

                </div>
                <div>
                    <a class="i-dont-have-link before-arrow " href="#">I don't have an email address</a>
                </div>
                
            </div>

            <div class="form-group">  
                <div>
                    <label class="acas-form-label" for="phone_number">Phone number</label>
                    <input type="text" class="acas-input-text form-control" name="phone_number" id="phone_number" value="<?php echo $_SESSION['acas_proto']['claimant']['phone_number']?>" autocomplete="off" pattern="^[\s\d]+$" maxlength="15">
                    <div class="invalid-feedback">
                        Please enter valid UK phone number.
                    </div>                                    
                </div>
                <div>
                    <a class="i-dont-have-link before-arrow" href="#">I don't have a UK phone number</a>
                </div>


            </div>



            <div class="form-group">   
                <button id="btn-continue" data-next-page="email.php" type="submmit" class="btn btn-acas btn-lime margintopbottom10">Continue</button>
            </div>

        </form>



    </div>

<?php include 'footer.php'; ?>