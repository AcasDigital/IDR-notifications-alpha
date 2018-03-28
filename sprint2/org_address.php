<?php 
    if (!isset($_SESSION)) { session_start(); }  
    $_SESSION['acas_proto']['developer'] = 'Methods';
    if (isset($_POST['org'])) $_SESSION['acas_proto']['claimant']['org'] = $_POST['org'];

    

    
?>
<?php include 'header2.php';?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Company address</h3>
        </p>
        <p>
            <a href="org.php" class="back-to-link">> Back</a>
        </p>        


        <form autocomplete="off" class="needs-validation" method="post" action="hr_details.php" novalidate>


            <div>
                <p>
                    Enter the address of the company you are in dispute with.
                </p>

                <div class="form-group">   
                    <label class="acas-form-label" for="address1">Address line 1</label>
                    <input type="text" class="acas-input-text form-control" id="address1" name="orgaddress1" value="<? echo $_SESSION['acas_proto']['claimant']['orgaddress1']?>" autocomplete="nothing" required>
                    <div class="invalid-feedback">
                        Please enter Address line 1.
                    </div>
                </div>

                <div class="form-group">   
                    <label class="acas-form-label" for="address2">Address Line 2</label>
                    <input type="text" class="acas-input-text form-control" id="address2" name="orgaddress2" value="<? echo $_SESSION['acas_proto']['claimant']['orgaddress2']?>" autocomplete="nothing">
                    <div class="invalid-feedback">
                        Please enter Address line 2.
                    </div>
                </div>

                <div class="form-group">   
                    <label class="acas-form-label" for="town">Town/city</label>
                    <input type="text" class="acas-input-text form-control" id="town" name="orgtown" value="<? echo $_SESSION['acas_proto']['claimant']['orgtown']?>" autocomplete="nothing" required>
                    <div class="invalid-feedback">
                        Please enter Town/city
                    </div>
                </div>

                <div class="form-group">   
                    <label class="acas-form-label" for="postcode">Post code</label>
                    <input type="text" class="acas-input-text form-control" id="postcode" name="orgpostcode" value="<? echo $_SESSION['acas_proto']['claimant']['orgpostcode']?>" pattern="[A-Z]{1,2}[0-9][0-9A-Z]?\s?[0-9][A-Z]{2}" autocomplete="nothing" required>
                    <div class="invalid-feedback">
                        Please enter a valid UK postcode.
                    </div>
                </div>
            <div>
                <a class="i-dont-have-link before-arrow link-underline" href="#">I don't know the address of the company</a>
            </div>

                <div class="form-group">   
                    <p><button id="btn-continue" data-next-page="phone.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
                </div>

        </form>

    </div>

    <script type="text/javascript">

        ////////////////////////// Lookup address
        $('#btn-findaddress').on('click', function() {
            $('#postcode_entered').text($('#postcode').val());
            $('#postcode_selected').val($('#postcode').val());
            $('#postcode-find').hide();
            $('#postcode-lookup').show();
        });

        ////////////////////////// Change postcode
        $('.change-postcode').on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();            
            $('#postcode-lookup').hide()
            $('#postcode-find').show() 
            $('#postcode-found').hide()            
        });

        ////////////////////////// Select address
        $('#address_lookup').on('change', function(){
            console.log ($("#address_lookup :selected").text())
            $('#address_selected').val($("#address_lookup :selected").text())
        })


        ////////////////////////// No postcode
        $( ".no-postcode" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#no-postcode-info').toggleClass('show-it')            
        });    
    </script>

<?php include 'footer.php'; ?>