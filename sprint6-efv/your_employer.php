<?php     
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['your_case'] = $_POST['page'];
if (isset($_POST['dispute'])) $_SESSION['acas_proto']['claimant']['dispute'] = $_POST['dispute'];
if (isset($_POST['dispute_brief'])) $_SESSION['acas_proto']['claimant']['dispute_brief'] = $_POST['dispute_brief'];
if (isset($_POST['help_to_resolve_dispute'])) $_SESSION['acas_proto']['claimant']['help_to_resolve_dispute'] = $_POST['help_to_resolve_dispute'];

if (isset($_POST['dispute_date'])) $_SESSION['acas_proto']['claimant']['dispute_date'] = $_POST['dispute_date'];



?>
<?php include 'header.php';?>


</div>
<div class="c-section-content container paddingtop10" >
    <p>
       Give the full legal name of your employer and their contact details so Acas knows who to contact.
   </p>

   <form class="needs-validation" novalidate name="main-form" method="post" action="summary.php">
    
    
    <div class="greybg-top-bottom-border">   
        <div class="form-group">  
            <label class="acas-form-label" for="org">The full legal name of the organisation or company you have a problem with:</label>
            <input type="text" class="acas-input-text form-control" name="org" id="org" value="<?php echo $_SESSION['acas_proto']['claimant']['org']?>" required>
            <div class="invalid-feedback">
                Enter the full legal name of the organisation or company
            </div>                

<!--                     <div>
                        <p style="color: red;">Needs to be correct as will go on your certificate! </p>
                        <a class="find-org-name link-underline" href="#">Don't know organisation or company’s legal name?</a>
                        <div id="acas-companies-house" style="display: none;"><p>Look on your payslip, contract or other formal document from the organisation or company. 
                        </p></div>
                    </div> -->

                    <div class="margintop10">
                        <p>This will usually appear on your payslip or contract. It may have an ending such as PLC, Ltd or LLP. If you work for someone operating as a sole trader, it may be that person’s full name. Examples of legal names include Tesco PLC, Thames Water Ltd, NHS England and the Department for Work and Pensions. </p>
                        <div><i class="icon-size red fas fa-times-circle">&nbsp;</i>Tesco</div>
                        <div><i class="icon-size green fas fa-check-circle"></i>&nbsp;Tesco PLC</div>
                        
                    </div>

                </div>
            </div>
            












<!--             <div class="margintop30 greybg-top-bottom-border">              
                <div class="form-group"> 
                    <label class="acas-form-label" for="email">Is your problem with more than 1 employer? </label>
                    <div class="radio">
                        <label><input class='multiple_disputes' type="radio" name="multiple_disputes" <?php //echo $_SESSION['acas_proto']['claimant']['multiple_disputes'] == 'No' || $_SESSION['acas_proto']['claimant']['multiple_disputes'] == '' ? 'checked' : '';?> value="No">&nbsp;&nbsp;&nbsp;No</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="representation" value="I have a representative">&nbsp;&nbsp;&nbsp;I have a representative</label>
                      <label><input class='multiple_disputes' type="radio" name="multiple_disputes" <?php //echo $_SESSION['acas_proto']['claimant']['multiple_disputes'] == 'Yes' ? 'checked' : '';?> value="Yes">&nbsp;&nbsp;&nbsp;Yes</label>
                    </div>
                    
                </div>
                <div id="multiple-disputes-section" style="display: <?php //echo $_SESSION['acas_proto']['claimant']['multiple_disputes'] == 'Yes' ? 'block' : 'none';?>">
                    <p>
                        You will have to fill out a form for each employer or person.
                    </p>
                </div> 
            </div>
        -->
        
        
        <?php
        //echo  match_in_arr($_SESSION['acas_proto']['claimant']['dispute'], "I've been unfairly dismissed") == "I've been unfairly dismissed";
        ?>


        <div class="margintop30 greybg-top-bottom-border employment-dates" style="display: <?php echo  match_in_arr($_SESSION['acas_proto']['claimant']['dispute'], "I've been unfairly dismissed") == "I've been unfairly dismissed" ? 'block' : 'none'?>">  
            <div class="form-group">  
                <label class="acas-form-label" for="full_name">Dates of your employment</label>
                <div class="input-group">  
                    <div class='date-col from-date'>
                        <labeL>From</labeL><br>
                        <input type="text" placeholder="" class="acas-input-text form-control" name="tenure_date_from" id="tenure_date_from" value="<?php echo $_SESSION['acas_proto']['claimant']['org_tenure_date_from']?>" autocomplete="off" pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$" ><br><span class="date-format-text">dd/mm/yyyy</span>
                        <div class="invalid-feedback">
                            You must enter a valid date in format dd/mm/yyyy. eg 12/03/2018
                        </div>
                    </div>
                    <div class='date-col  to-date'>
                        <labeL>To</labeL><br>


                        <div id="to-date" style="display: <?php echo $_SESSION['acas_proto']['claimant']['currently_work_here_value'] !== 'Present' ? 'block' : 'none'; ?> ">
                            <input type="text" placeholder="" class="acas-input-text form-control" name="tenure_date_to" id="tenure_date_to" value="<?php echo $_SESSION['acas_proto']['claimant']['org_tenure_date_to']?>" autocomplete="off" pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$" ><br><span class="date-format-text">dd/mm/yyyy</span>
                            <div class="invalid-feedback">
                                You must enter a valid date in format dd/mm/yyyy. eg 12/03/2018
                            </div>
                        </div>






                        <div id="to-present" style="display: <?php echo $_SESSION['acas_proto']['claimant']['currently_work_here_value'] == 'Present' ? 'block' : 'none'; ?> ">
                            Present
                        </div>


                    </div>
                </div>



                <div class="margintop30 checkbox">                        
                    <label><input style="width: auto !important;" class='currently-work-here' type="checkbox" name="currently_work_here" id="currently_work_here" <?php echo $_SESSION['acas_proto']['claimant']['currently_work_here_value'] == 'Present'  ? 'checked' : '';?> value="Present">&nbsp;&nbsp;&nbsp;I currently work here
                        <div class="control__indicator"></div>
                    </label>
                    <input id="currently-work-here-value" name="currently_work_here_value" type="hidden" value="<?php echo $_SESSION['acas_proto']['claimant']['currently_work_here_value'] == 'Present'  ? 'Present' : 'Not present';?>"/>

                </div>                    
                    <!-- <div>                
                        <a class="find-org-name3 link-underline" href="#">Don’t know which dates to provide? </a>
                        <div id="acas-companies-house3" class="help-info" style="display: none;"><p>Look on your contract, or other formal document from the organisation or company
                        </p></div>
                    </div> -->
                    <div class="margintop30">
                        <p>
                            Don’t know the dates of your employment? You may be able to find them on your contract. In most cases you must have worked for your employer for 2 years to claim unfair dismissal.
                        </p>
                    </div>
                </div>
            </div>





            

            <div class="margintop30 greybg-top-bottom-border">

                <p>Employer’s main address – this may be a head office rather than your work address</p>

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
                    <label class="acas-form-label" for="postcode">Postcode</label>
                    <input type="text" class="acas-input-text form-control" id="postcode" name="orgpostcode" value="<? echo $_SESSION['acas_proto']['claimant']['orgpostcode']?>" autocomplete="nothing">
                    <div class="invalid-feedback">
                        Please enter a valid UK postcode.
                    </div>
                    
<!--                     <div>                
                        <a class="find-org-name1 link-underline" href="#">Don't know the organisation or company’s address?</a>
                        <div id="acas-companies-house1" class="help-info" style="display: none;"><p>Look on your payslip, contract, or other formal document from the       organisation. You could try entering the name of the organisation or company into a search engine website.</p>
                        </div>
                    </div> -->
                    
                </div>
                <div class="margintop10">
                    <p>
                       Don't know the address? Look on your payslip, contract, or other documents from your employer. You could also try searching under your employer’s name online.

                   </p>
               </div>                

           </div>






           <div class="margintop30 greybg-top-bottom-border">

            <p>Who should Acas contact at your workplace about your problem?</p>
            <div class="form-group">   
                <label class="acas-form-label" for="person_name_or_department">First name and Last name</label>
                <input type="text" class="acas-input-text form-control" name="person_name_or_department" id="person_name_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_person_name_or_department']?>">
            </div>

            <div class="form-group">   
                <label class="acas-form-label" for="job_title_person_name_or_department">Job title</label>
                <input type="text" class="acas-input-text form-control" name="job_title_person_or_department" id="job_title_person_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_job_title_person_or_department']?>">
            </div>

            <div class="form-group">   
                <label class="acas-form-label" for="email_person_or_department">Email</label>
                <input type="text" class="acas-input-text form-control" name="email_person_or_department" id="email_person_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_email_person_or_department']?>">
            </div>

            <div class="form-group">   
                <label class="acas-form-label" for="phone_person_or_department">Phone number </label>
                <input type="text" class="acas-input-text form-control" name="phone_person_or_department" id="phone_person_or_department" value="<?php echo $_SESSION['acas_proto']['claimant']['org_phone_person_or_department']?>">

                    <!-- <div>                
                    <a class="find-org-name2 link-underline" href="#">Don't know the right person?</a>
                    <div id="acas-companies-house2" class="help-info" style="display: none;"><p>You can give an HR department, your line manager or a senior member of the organisation.
     
                    </p></div> -->
                </div>
                This will usually be a line manager, HR officer or senior member of staff.

                
            </div>      






            <div class="form-group">
                <button id="btn-continue" data-next-page="address.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button> 
            </div>   

            <input name="page" type="hidden" value="your_employer.php">            
        </form>
    </div>


    <script>


     
        $("#currently_work_here").on("click", function(){
            if ($(this).is(":checked")) {

             $("#to-date").hide(); 
             $("#tenure_date_to").val('');
             //$("#tenure_date_to").prop('required', false);  
             $("#to-present").show();
             $('#currently-work-here-value').val('Present');

         } else {
            $("#to-present").hide();
            $("#to-date").show();
            //$("#tenure_date_to").prop('required', true);  
            $('#currently-work-here-value').val('Not present');  
        }

    })

        
        $(".multiple_disputes").on("click", function(){
            if ($(this).val() === 'No') $("#multiple-disputes-section").hide();
            else $("#multiple-disputes-section").show();
        })


        $(".can-acas-contact-employer").on("click", function(){
            if ($(this).val() === 'No') $("#can-acas-contact-employer-section").hide();
            else $("#can-acas-contact-employer-section").show();
        })


        $( ".find-org-name" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#acas-companies-house').toggleClass('show-it')
            
        });

        $( ".find-org-name1" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#acas-companies-house1').toggleClass('show-it')
            
        });

        $( ".find-org-name2" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#acas-companies-house2').toggleClass('show-it')
            
        });

        $( ".find-org-name3" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#acas-companies-house3').toggleClass('show-it')
            
        });


    </script>





    <?php include 'footer.php'; ?>