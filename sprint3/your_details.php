<?php     
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_ver'] = '1.0';

?>
<?php include 'header2.php';?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h4>Your contact details</h4>
        </p>
<!--         <p>
            <a href="index.php" class="back-to-link">> Back</a>
        </p>        
 -->
        <p>
            Give us some basic information about you to allow Acas to get back in contact with you.
        </p>

        <form class="needs-validation" novalidate name="main-form" method="post" action="your_case.php" id="form_representation">
            
            <div class="form-group">  
                <label class="acas-form-label" for="full_name">Full name</label>
                <input type="text" class="acas-input-text form-control" name="fullname" id="fullname" value="<?php echo $_SESSION['acas_proto']['claimant']['fullname']?>" autocomplete="nothing" pattern="^[a-zA-Z][\sa-zA-Z]*" required>
                <div class="invalid-feedback">
                    You must enter your name    
                </div>

            </div>

            
        <div class="margintop50">                          
            <div class="form-group">  

                <label class="acas-form-label" for="postcode">Your postcode</label>
                    <div class="input-group">  
                            
                        <input autocomplete="nothing" type="text" class="col-2 acas-input-text form-control" id="postcode" value="<? echo $_SESSION['acas_proto']['claimant']['postcode']?>" pattern="[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$" required>
                        <span class="input-group-btn">
                            <button style="margin: 0; margin-left: 10px" id="btn-findaddress" class="btn btn btn-acas btn-lime" type="button">Find Address</button>
                        </span>

                        <div class="invalid-feedback">
                            Enter a postcode 
                        </div>                    
                                            
                    </div>
                <span>Example: E4 7PF</span>
            </div>


                
                <div class="form-group" id="address-lookup" style="display: none;">  
                <label>Find your address in the list.</label>
                    <select class="form-control" id="address_lookup" name="address_lookup" size="1" required>
                        <option value="1">1, Gregory Street, Nottingham, NG7 5JA</option>
                        <option value="2">2, Gregory Street, Nottingham, NG7 5JA</option>
                        <option value="3">3, Gregory Street, Nottingham, NG7 5JA</option>
                        <option value="4">4, Gregory Street, Nottingham, NG7 5JA</option>
                        <option value="5">5, Gregory Street, Nottingham, NG7 5JA</option>
                        <option value="6">6, Gregory Street, Nottingham, NG7 5JA</option>
                        <option value="7">7, Gregory Street, Nottingham, NG7 5JA</option>              
                        <option value="8">8, Gregory Street, Nottingham, NG7 5JA</option>

                    </select>  
                    <div class="invalid-feedback">
                        You must select an address
                    </div>
                </div>

            </div>
            <div class="margintop50">              

                <div class="form-group">  
                    <div>
                        <label class="acas-form-label" for="email">Email address</label>
                        <input type="text" class="acas-input-text form-control" name="email" id="email" value="<?php echo $_SESSION['acas_proto']['claimant']['email']?>" autocomplete="nothing" pattern="^\S+@\S+\.\S+$" maxlength="100">
                        <div class="invalid-feedback">
                            Please enter valid email address.
                        </div>                

                    </div>
    <!--                 <div>
                        <a class="i-dont-have-link before-arrow " href="#">I don't have an email address</a>
                    </div>
     -->                
                </div>

                <div class="form-group">  
                    <div>
                        <label class="acas-form-label" for="phone_number">Phone number</label>
                        <input autocomplete="nothing" type="text" class="acas-input-text form-control" name="phone_number" id="phone_number" value="<?php echo $_SESSION['acas_proto']['claimant']['phone_number']?>" autocomplete="off" pattern="^[\s\d]+$" maxlength="15">
                        <div class="invalid-feedback">
                            Please enter valid UK phone number.
                        </div>                                    
                    </div>
<!--                 <div>
                    <a class="i-dont-have-link before-arrow" href="#">I don't have a UK phone number</a>
                </div>
 -->        </div>

            </div>


            <div class="margintop50">              
                <div class="form-group"> 
                    <label class="acas-form-label" for="email">Is there another person you’d prefer us to speak to about your dispute? </label>
                    <div class="radio">
                        <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' || $_SESSION['acas_proto']['claimant']['representation'] == '' ? 'checked' : '';?> value="No">&nbsp;&nbsp;&nbsp;No</label>
                    </div>
                    <div class="radio">
                      <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
                      <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ? 'checked' : '';?> value="Yes">&nbsp;&nbsp;&nbsp;Yes</label>
                    </div>
                    <p>If you choose to have a contact person Acas will only speak to that person and not you throughout the process. </p>
                </div>
            </div>


           <div class="form-group">
               <button id="btn-continue" data-next-page="your_case.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button> 
            </div>   


            <input name="page" type="hidden" value="your_details.php">
            <input type="hidden" class="form-control" id="postcode_selected" name="postcode_selected" value="<?php echo $_SESSION['acas_proto']['claimant']['postcode']?>">
            <input type="hidden" class="form-control" id="address_selected" name="address_selected" value="<?php echo $_SESSION['acas_proto']['claimant']['address']?>" >


        </form>
    </div>


 

<script>
    

    $(".representation").on("click", function(){
            console.log ('clicked', $(this).val());
            if ($(this).val() === 'No') $("#form_representation")[0].action = 'your_case.php';
             else $("#form_representation")[0].action = 'chosen_contact.php';

    })



    $('#btn-findaddress').on('click', function() {
        console.log ('postcode', $('#postcode').val())
        var re = /[A-Z]{1,2}[0-9][0-9A-Z]?\s?[0-9][A-Z]{2}/g;
        var validPostCode = re.test($('#postcode').val());
        

        if (validPostCode){
            $('#postcode_entered').text($('#postcode').val());
            $('#postcode_selected').val($('#postcode').val());
            $('#address-lookup').show();            
       }

       if (!validPostCode){
            $('#postcode ~ .invalid-feedback').show();
            $('#postcode').toggleClass('custom-invalid-input');
            $('#address-lookup').hide();    
       }
        
    });

    $('#postcode').focus(function(){
         $('#postcode').removeClass('custom-invalid-input');
         $('#postcode ~ .invalid-feedback').hide();
    })

    $('#address_lookup').on('change', function(){
        console.log ($("#address_lookup :selected").text())
        $('#address_selected').val($("#address_lookup :selected").text())
    })
    



</script>



<?php include 'footer.php'; ?>