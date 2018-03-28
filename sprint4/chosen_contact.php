<?php     
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['your_details'] = $_POST['page'];
if (isset($_POST['fullname'])) $_SESSION['acas_proto']['claimant']['fullname'] = $_POST['fullname'];

if (isset($_POST['postcode_selected'])) $_SESSION['acas_proto']['claimant']['postcode'] = $_POST['postcode_selected'];
if (isset($_POST['address_selected'])) $_SESSION['acas_proto']['claimant']['address'] = $_POST['address_selected']; 

if (isset($_POST['email'])) $_SESSION['acas_proto']['claimant']['email'] = $_POST['email'];
if (isset($_POST['phone_number'])) $_SESSION['acas_proto']['claimant']['phone_number'] = $_POST['phone_number'];

if (isset($_POST['representation'])) $_SESSION['acas_proto']['claimant']['representation'] = $_POST['representation'];


?>
<?php include 'header2.php';?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h4>Your chosen contact person</h4>
        </p>
<!--         <p>
            <a href="index.php" class="back-to-link">> Back</a>
        </p>        
 -->
        <p>
            Acas will only deal with your chosen contact about your dispute and not you. Please ensure that this person has agreed to represent you and that they will be expecting our call.
        </p>

        <form class="needs-validation" novalidate name="main-form" method="post" action="your_case.php">
            

         <div class="margintop50">   
            <p>Their relation to you</p>
            <div class="checkbox">
              <label><input name="rep_relation" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['representation_relation'] == 'Trade Union' ? 'checked' : '';?> value="Trade Union">&nbsp;&nbsp;&nbsp;Trade Union</label>
            </div>
            <div class="checkbox">
              <label><input name="rep_relation" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['representation_relation'] == 'Solicitor' ? 'checked' : '';?> value="Solicitor">&nbsp;&nbsp;&nbsp;Solicitor</label>
            </div>
            <div class="checkbox">
              <label><input name="rep_relation" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['representation_relation'] == 'Citizen\'s Advice' ? 'checked' : '';?> value="Citizen's Advice">&nbsp;&nbsp;&nbsp;Citizen's Advice</label>
            </div>
            <div class="checkbox">
              <label><input name="rep_relation" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['representation_relation'] == 'Relative' ? 'checked' : '';?> value="Relative">&nbsp;&nbsp;&nbsp;Relative</label>
            </div>
            <div class="checkbox">
              <label><input name="rep_relation" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['representation_relation'] == 'Friend' ? 'checked' : '';?> value="Friend">&nbsp;&nbsp;&nbsp;Friend</label>
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
            


            <input name="page" type="hidden" value="chosen_contact.php">

        <p><button id="btn-continue" type="submit" data-next-page="your_case.php" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
        </form>
    </div>


 

<script>
    
      // $('#btn-continue').on('click', function(){
      //   console.log ('clicked submit')

      //   console.log (empty($('#first_name').val())); 
      //   if (!empty($('#first_name').val())    
      //   $('#main-form').submit();

      // })  


</script>



<?php include 'footer.php'; ?>