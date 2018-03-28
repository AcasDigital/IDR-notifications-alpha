<?php if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['email'])) $_SESSION['acas_proto']['claimant']['email'] = $_POST['email'];
if (isset($_POST['phone_number'])) $_SESSION['acas_proto']['claimant']['phone_number'] = $_POST['phone_number'];
?>

<?php include 'header2.php'; ?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Name of organisation you're in dispute with</h3>
        </p>
        <p>
            <a href="contact_details.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter the full legal name of the organisation you're in dispute with. If you don't there's a risk that the documents we send you will not be valid at an employment tribunal.
        </p>

        <form autocomplete="off" class="needs-validation" novalidate method="post" action="org_address.php">
            <div class="form-group">  
                <label class="acas-form-label" for="org">Enter the name of the organisation you’re making a claim against </label>
                <input type="text" class="acas-input-text form-control" name="org" id="org" value="<?php echo $_SESSION['acas_proto']['claimant']['org']?>" required>
                <div class="invalid-feedback">
                    Enter the company's legal name
                </div>                

            </div>

            <div>
                <a class="find-org-name before-arrow link-underline" href="#"> I don't know the full legal name of the organisation</a>
                <div id="acas-companies-house" style="display: none;"><p>Look on your payslip or contract if you have one. You can find companies by searching <a class="link-underline" href="https://www.gov.uk/get-information-about-a-company" target="_blank">Companies House</a>.</p></div>
            </div>


            <p><button id="btn-continue" data-next-page="org_department.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>

    </div>

    <script type="text/javascript">
        $( ".find-org-name" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#acas-companies-house').toggleClass('show-it')
        
        });        
    </script>

<?php include 'footer.php'; ?>