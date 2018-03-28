<?php     
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['your_details'] = $_POST['page'];
if (isset($_POST['fullname'])) $_SESSION['acas_proto']['claimant']['fullname'] = $_POST['fullname'];

if (isset($_POST['postcode_selected'])) $_SESSION['acas_proto']['claimant']['postcode'] = $_POST['postcode_selected'];
if (isset($_POST['address_selected'])) $_SESSION['acas_proto']['claimant']['address'] = $_POST['address_selected']; 

if (isset($_POST['email'])) $_SESSION['acas_proto']['claimant']['email'] = $_POST['email'];
if (isset($_POST['phone_number'])) $_SESSION['acas_proto']['claimant']['phone_number'] = $_POST['phone_number'];

if (isset($_POST['representation'])) $_SESSION['acas_proto']['claimant']['representation'] = $_POST['representation'];

if (isset($_POST['rep_relation'])) $_SESSION['acas_proto']['claimant']['representation_relation'] = $_POST['rep_relation'];
if (isset($_POST['rep_name'])) $_SESSION['acas_proto']['claimant']['representation_name'] = $_POST['rep_name'];
if (isset($_POST['rep_email'])) $_SESSION['acas_proto']['claimant']['representation_email'] = $_POST['rep_email'];
if (isset($_POST['rep_phone'])) $_SESSION['acas_proto']['claimant']['representation_phone'] = $_POST['rep_phone'];

?>
<?php include 'header2.php';?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h4>Information about your dispute</h4>
        </p>
        <p>
            <!-- <a href="index.php" class="back-to-link">> Back</a> -->
        </p>        

        <p>
            The information you provide here will help Acas in the first conversation with you about your dispute.
        </p>

        <form class="needs-validation" novalidate name="main-form" method="post" action="your_employer.php">
            
          <div class="margintop50">              
            <strong>What is your dispute about?  </strong>
            <div class="form-group">  
                <div class="radio">
                  <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I'm owed wages" ? 'checked' : '';?> value="I'm owed wages">&nbsp;&nbsp;&nbsp;I'm owed wages</label>
                </div>
                <div class="radio">
                  <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I'm owed holiday" ? 'checked' : '';?> value="I'm owed holiday">&nbsp;&nbsp;&nbsp;I'm owed holiday</label>
                </div>
                <div class="radio">
                  <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I've been unfairly sacked" ? 'checked' : '';?> value="I've been unfairly sacked">&nbsp;&nbsp;&nbsp;I've been unfairly sacked</label>
                </div>
                <div class="radio">
                  <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I've been discriminated against" ? 'checked' : '';?> value="I've been discriminated against">&nbsp;&nbsp;&nbsp;I've been discriminated against</label>
                </div>
                <div class="radio">
                  <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "I've been made redundant" ? 'checked' : '';?> value="I've been made redundant">&nbsp;&nbsp;&nbsp;I've been made redundant</label>
                </div>
                <div class="radio">
                  <label><input class='representation' type="radio" name="dispute" <?php echo $_SESSION['acas_proto']['claimant']['dispute'] == "Other, please describe" ? 'checked' : '';?> value="Other, please describe">&nbsp;&nbsp;&nbsp;Other, please describe</label>
                </div>                

            </div>

          </div>


          <div class="margintop50">              
            <div class="form-group">
                <label class="acas-form-label" for="Describe">Briefly describe your dispute</label>
                <textarea name="dispute_brief" class="form-control" id="describe" rows="3" ><?php if (isset($_SESSION['acas_proto']['claimant']['dispute_brief'])) echo $_SESSION['acas_proto']['claimant']['dispute_brief'];?></textarea>
            </div>
          </div>


          <div class="margintop50">              
            <div class="form-group">  
                <label class="acas-form-label" for="full_name">When did this take place or when was the last known event?</label>
                <input type="text" placeholder="dd/mm/yyyy" style="width: 160px;" class="acas-input-text form-control" name="dispute_date" id="dispute_date" value="<?php echo $_SESSION['acas_proto']['claimant']['dispute_date']?>" autocomplete="off" pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$">
                <div class="invalid-feedback">
                    You must enter a valid date
                </div>
                <div><p><a class="help-link link-underline" href="#">Don't know the date of the event?</a></p>
                    <div id="help-info" style="display: none;"><p>If this was a one off when did it happen, if there was more than one event when did it last happen?
                    </p></div>
                </div>

            </div>
          </div>


            


         <div class="form-group">
               <button id="btn-continue" data-next-page="address.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button> 
          </div>   

          <input name="page" type="hidden" value="your_case.php">

        </form>
    </div>


 

<script>
    
        $( ".help-link " ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#help-info').toggleClass('show-it')
        
        });



</script>



<?php include 'footer.php'; ?>