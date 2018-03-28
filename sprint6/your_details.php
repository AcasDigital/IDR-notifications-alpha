<?php     
if (!isset($_SESSION)) { session_start(); }
$_SESSION['acas_proto']['app_ver'] = '1.0';

?>
<?php include 'header.php';?>


</div>
<div class="c-section-content container paddingtop10" >
    <p>
        Give some basic information so Acas can contact you.
    </p>

    <form class="needs-validation" novalidate name="main-form" method="post" action="your_case.php" id="form_representation">
        
        <div class="greybg-top-bottom-border" >  
            <div class="form-group">  
                <label class="acas-form-label" for="full_name">First name</label>
                <input type="text" class="acas-input-text form-control" name="firstname" id="firstname" value="<?php echo $_SESSION['acas_proto']['claimant']['firstname']?>" autocomplete="nothing" pattern="^[a-zA-Z][\sa-zA-Z]*" required>
                <div class="invalid-feedback">
                    You must enter your first name    
                </div>

            </div>
            <div class="form-group">  
                <label class="acas-form-label" for="full_name">Last name</label>
                <input type="text" class="acas-input-text form-control" name="lastname" id="lastname" value="<?php echo $_SESSION['acas_proto']['claimant']['lastname']?>" autocomplete="nothing" pattern="^[a-zA-Z][\sa-zA-Z]*" required>
                <div class="invalid-feedback">
                    You must enter your last name    
                </div>
            </div>
<!--                 <div class="margintop10">
                    <p>
                        If you only have one name, enter it under last name.                        
                    </p>
                </div> -->
            </div>




            
            <div class="margintop30 greybg-top-bottom-border">                          
                <div class="form-group">   
                    <label class="acas-form-label" for="address1">Address line 1</label>
                    <input type="text" class="acas-input-text form-control" id="address1" name="address1" value="<? echo $_SESSION['acas_proto']['claimant']['address1']?>" autocomplete="nothing" required>
                    <div class="invalid-feedback">
                        Please enter Address line 1.
                    </div>
                </div>

                <div class="form-group">   
                    <label class="acas-form-label" for="address2">Address Line 2</label>
                    <input type="text" class="acas-input-text form-control" id="address2" name="address2" value="<? echo $_SESSION['acas_proto']['claimant']['address2']?>" autocomplete="nothing">
                    <div class="invalid-feedback">
                        Please enter Address line 2.
                    </div>
                </div>

                <div class="form-group">   
                    <label class="acas-form-label" for="town">Town/city</label>
                    <input type="text" class="acas-input-text form-control" id="town" name="town" value="<? echo $_SESSION['acas_proto']['claimant']['town']?>" autocomplete="nothing" required>
                    <div class="invalid-feedback">
                        Please enter Town/city
                    </div>
                </div>

                <div class="form-group">   
                    <label class="acas-form-label" for="postcode">Postcode</label>
                    <input type="text" class="acas-input-text form-control" id="postcode" name="postcode" value="<? echo $_SESSION['acas_proto']['claimant']['postcode']?>" autocomplete="nothing">
                    <div class="invalid-feedback">
                        Please enter a valid UK postcode.
                    </div>
                </div> 
            </div>





            <div class="margintop30 greybg-top-bottom-border">              
                <div class="form-group">  
                    <div>
                        <label class="acas-form-label" for="email">Email address</label>
                        <input type="text" class="acas-input-text form-control" name="email" id="email" value="<?php echo $_SESSION['acas_proto']['claimant']['email']?>" autocomplete="nothing" pattern="^\S+@\S+\.\S+$" maxlength="100">
                        <div class="invalid-feedback">
                            Please enter valid email address.
                        </div>                

                    </div>
                </div>
                <div class="form-group">  
                    <div>
                        <label class="acas-form-label" for="phone_number">Phone number</label>
                        <input autocomplete="nothing" type="text" class="acas-input-text form-control" name="phone_number" id="phone_number" value="<?php echo $_SESSION['acas_proto']['claimant']['phone_number']?>" autocomplete="off" pattern="^[\s\d]+$" maxlength="15">
                        <div class="invalid-feedback">
                            Please enter valid UK phone number.
                        </div>                                    
                    </div>
                </div>
            </div>



            <div class="margintop50">  
                <p>
                    <h4>Other contact details</h4>
                </p>
            </div>


            <div class="margintop30 greybg-top-bottom-border">              
               <div id="disability-section-0">
                <p>
                 <label class="acas-form-label" for="disability_brief">If you have difficulty speaking on the phone, tell us how we can get in touch with you.</label>
                 <br><span class="optional-text-label">* Optional</span>
             </p>

             <div class="form-group">
                <!-- <label class="acas-form-label" for="Describe">Briefly describe your dispute</label> -->
                <textarea name="disability_brief" class="form-control" id="describe" rows="3" ><?php if (isset($_SESSION['acas_proto']['claimant']['disability_brief'])) echo $_SESSION['acas_proto']['claimant']['disability_brief'];?></textarea>
            </div> 
<!--                     <div>
                        If you would like someone else to speak for you, please provider their detauls below.                        
                    </div>                -->
                </div>                 
            </div>




            <div class="margintop30 greybg-top-bottom-border">   
                <p>
                    <label class="acas-form-label" for="disability_brief">
                        If you’ve asked someone else to speak for you, give their name and contact details. Acas will only speak to this person and not you.
                    </label>
                    <br><span class="optional-text-label">* Optional</span>
                </p>

                <p>
                    <label class="acas-form-label" for="rep_name">First name and Last name</label>
                    <input type="text" class="acas-input-text form-control" name="rep_name" id="rep_name" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_name'];?>" autocomplete="nothing">
                </p>

                <p>
                    <label class="acas-form-label" for="rep_email">Email</label>
                    <input type="text" class="acas-input-text form-control" name="rep_email" id="rep_email" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_email'];?>" autocomplete="nothing">
                </p>

                <p>
                    <label class="acas-form-label" for="rep_phone">Phone number</label>
                    <input type="text" class="acas-input-text form-control" name="rep_phone" id="rep_phone" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_phone'];?>" autocomplete="nothing">
                </p>
                
                <p>
                    <label class="acas-form-label" for="rep_relation">Their relation to you</label>
                    <input type="text" class="acas-input-text form-control" name="rep_relation" id="rep_relation" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_relation'];?>" autocomplete="nothing">

                </p>
                Eg a trade union representative or family member.

                
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
        if ($(this).val() === 'No') $("#rep-section").hide();
        else $("#rep-section").show();
    })

    $(".union").on("click", function(){
        if ($(this).val() === 'No') $("#union-section").hide();
        else $("#union-section").show();
    })


    $(".disability").on("click", function(){
        if ($(this).val() === 'No') $("#disability-section").hide();
        else $("#disability-section").show();
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