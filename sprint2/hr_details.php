<?php if (!isset($_SESSION)) { session_start(); }
    if (isset($_POST['orgaddress1'])) $_SESSION['acas_proto']['claimant']['orgaddress1'] = $_POST['orgaddress1'];
    if (isset($_POST['orgaddress2'])) $_SESSION['acas_proto']['claimant']['orgaddress2'] = $_POST['orgaddress2'];
    if (isset($_POST['orgtown'])) $_SESSION['acas_proto']['claimant']['orgtown'] = $_POST['orgtown'];
    if (isset($_POST['orgpostcode'])) $_SESSION['acas_proto']['claimant']['orgpostcode'] = $_POST['orgpostcode'];

?> 
<?php include 'header2.php'; ?>
            
    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Company contact</h3>
        </p>
        <p>
            <a href="org_address.php" class="back-to-link">> Back</a>
        </p>        

        <p>
           If your company doesn’t have a HR department please provide the details of the person or department that Acas can contact to start conciliation.   
        </p>

        <form class="needs-validation" novalidate method="post" action="representative.php">
            <div class="form-group">  
                <div>
                    <label class="acas-form-label" for="hremail">Email</label>
                    <input type="text" class="acas-input-text form-control" name="hremail" id="hremail" name="hremail" value="<?php echo $_SESSION['acas_proto']['claimant']['hremail']?>" autocomplete="off" pattern="^\S+@\S+\.\S+$" maxlength="100">
                    <div class="invalid-feedback">
                        Please enter Email of HR
                    </div>                

                </div>
                
            </div>

            <div class="form-group">  
                <div>
                    <label class="acas-form-label" for="phone_number">Phone</label>
                    <input type="text" class="acas-input-text form-control" name="hrphone_number" id="hrphone_number" name="hrphone_number" value="<?php echo $_SESSION['acas_proto']['claimant']['hrphone_number']?>" autocomplete="off" pattern="^[\s\d]+$" maxlength="15">
                    <div class="invalid-feedback">
                        Please enter Phone number of HR
                    </div>                

                </div>

            </div>

            <div>
                <a class="i-dont-have-link" href="#">I don't know the contact details of HR</a>
            </div>


            <div class="form-group">   
                <button id="btn-continue" data-next-page="email.php" type="submmit" class="btn btn-acas btn-lime margintopbottom10">Continue</button>
            </div>

        </form>



    </div>

<?php include 'footer.php'; ?>