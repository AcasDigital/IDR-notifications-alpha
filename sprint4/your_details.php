<?php     
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_ver'] = '1.0';

?>
<?php include 'header.php';?>
    

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
            Give us some basic information about you to allow us to contact you.
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
                <div class="margintop10">
                    <p>
                        If you only have one name, enter it under last name.                        
                    </p>
                </div>
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
                    <input type="text" class="acas-input-text form-control" id="postcode" name="postcode" value="<? echo $_SESSION['acas_proto']['claimant']['postcode']?>" pattern="[A-Za-z]{1,2}[0-9][0-9A-Za-z]?\s?[0-9][A-Za-z]{2}" autocomplete="nothing" required>
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





            <div class="margintop30 greybg-top-bottom-border">              
                <div class="form-group"> 
                    <p>
                        Once we receive this form we will contact you about your problem, unless you would prefer us to speak to someone else chosen by you (such as a trade union representative or family member).
                    </p>
                    <label class="acas-form-label" for="representation">Have you got a person to speak for you?</label>
                    <div class="radio">
                        <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' || $_SESSION['acas_proto']['claimant']['representation'] == '' ? 'checked' : '';?> value="No">&nbsp;&nbsp;&nbsp;No</label>
                    </div>
                    <div class="radio">
                      <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
                      <label><input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ? 'checked' : '';?> value="Yes">&nbsp;&nbsp;&nbsp;Yes</label>
                    </div>
                    
                </div>
                <div id="rep-section" style="display: <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ? 'block' : 'none';?>">

                    <p>
                        We will only deal with your chosen contact and not you about your problem. You must make sure that this person has agreed to represent you and you must tell them to expect our call.
                    </p>


                     <div class="margintop30">   
                        <p>Their relation to you</p>
                        <div class="checkbox">
                          <label><input name="rep_relation[]" type="checkbox" <?php echo match_in_arr($_SESSION['acas_proto']['claimant']['representation_relation'], 'Trade Union') == 'Trade Union' ? 'checked' : '';?> value="Trade Union">&nbsp;&nbsp;&nbsp;Trade Union</label>
                        </div>
                        <div class="checkbox">
                          <label><input name="rep_relation[]" type="checkbox" <?php echo match_in_arr($_SESSION['acas_proto']['claimant']['representation_relation'], 'Solicitor') == 'Solicitor' ? 'checked' : '';?> value="Solicitor">&nbsp;&nbsp;&nbsp;Solicitor</label>
                        </div>
                        <div class="checkbox">
                          <label><input name="rep_relation[]" type="checkbox" <?php echo match_in_arr($_SESSION['acas_proto']['claimant']['representation_relation'], 'Citizen\'s Advice') == 'Citizen\'s Advice' ? 'checked' : '';?> value="Citizen's Advice">&nbsp;&nbsp;&nbsp;Citizen's Advice</label>
                        </div>
                        <div class="checkbox">
                          <label><input name="rep_relation[]" type="checkbox" <?php echo match_in_arr($_SESSION['acas_proto']['claimant']['representation_relation'], 'Relative') == 'Relative' ? 'checked' : '';?> value="Relative">&nbsp;&nbsp;&nbsp;Relative</label>
                        </div>
                        <div class="checkbox">
                          <label><input name="rep_relation[]" type="checkbox" <?php echo match_in_arr($_SESSION['acas_proto']['claimant']['representation_relation'], 'Friend') == 'Friend' ? 'checked' : '';?> value="Friend">&nbsp;&nbsp;&nbsp;Friend</label>
                        </div>

                     </div>

                    <div class="margintop50">   
                        <p>
                            <label class="acas-form-label" for="rep_name">Name</label>
                            <input type="text" class="acas-input-text form-control" name="rep_name" id="rep_name" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_name'];?>" autocomplete="nothing">
                        </p>

                        <p>
                            <label class="acas-form-label" for="rep_email">Email</label>
                            <input type="text" class="acas-input-text form-control" name="rep_email" id="rep_email" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_email'];?>" autocomplete="nothing">
                        </p>

                        <p>
                            <label class="acas-form-label" for="rep_phone">Phone</label>
                            <input type="text" class="acas-input-text form-control" name="rep_phone" id="rep_phone" value="<?php echo $_SESSION['acas_proto']['claimant']['representation_phone'];?>" autocomplete="nothing">
                        </p>
                    </div>
                </div>                
            </div>






            <div class="margintop30 greybg-top-bottom-border">              
                <div class="form-group"> 
                    <label class="acas-form-label" for="email">Do you have a disability that means you can’t speak on the phone?</label>
                    <div class="radio">
                        <label><input class='disability' type="radio" name="disability" <?php echo $_SESSION['acas_proto']['claimant']['disability'] == 'No' || $_SESSION['acas_proto']['claimant']['disability'] == '' ? 'checked' : '';?> value="No">&nbsp;&nbsp;&nbsp;No</label>
                    </div>
                    <div class="radio">
                      <!-- <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label> -->
                      <label><input class='disability' type="radio" name="disability" <?php echo $_SESSION['acas_proto']['claimant']['disability'] == 'Yes' ? 'checked' : '';?> value="Yes">&nbsp;&nbsp;&nbsp;Yes</label>
                    </div>
                    
                </div>
                <div id="disability-section" style="display: <?php echo $_SESSION['acas_proto']['claimant']['disability'] == 'Yes' ? 'block' : 'none';?>">
                    <p>
                        If you would like someone else to speak for you, please provide their details above. If we can't contact you by phone, please say how can we get in touch with you.
                    </p>

                    <div class="form-group">
                        <!-- <label class="acas-form-label" for="Describe">Briefly describe your dispute</label> -->
                        <textarea name="disability_brief" class="form-control" id="describe" rows="3" ><?php if (isset($_SESSION['acas_proto']['claimant']['disability_brief'])) echo $_SESSION['acas_proto']['claimant']['disability_brief'];?></textarea>
                    </div>                
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