<?php     
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['your_employer'] = $_POST['page'];
if (isset($_POST['org'])) $_SESSION['acas_proto']['claimant']['org'] = $_POST['org'];
if (isset($_POST['tenure_date_from'])) $_SESSION['acas_proto']['claimant']['org_tenure_date_from'] = $_POST['tenure_date_from'];
if (isset($_POST['tenure_date_to'])) $_SESSION['acas_proto']['claimant']['org_tenure_date_to'] = $_POST['tenure_date_to'];
if (isset($_POST['orgaddress1'])) $_SESSION['acas_proto']['claimant']['orgaddress1'] = $_POST['orgaddress1'];
if (isset($_POST['orgaddress2'])) $_SESSION['acas_proto']['claimant']['orgaddress2'] = $_POST['orgaddress2'];
if (isset($_POST['orgtown'])) $_SESSION['acas_proto']['claimant']['orgtown'] = $_POST['orgtown'];
if (isset($_POST['orgpostcode'])) $_SESSION['acas_proto']['claimant']['orgpostcode'] = $_POST['orgpostcode'];

if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
if (isset($_POST['phone_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_phone_person_or_department'] = $_POST['phone_person_or_department'];




?>
<?php include 'header2.php';?>
    

    </div>


    <form name="main-form" method="post" action="finish.php">  

      <div class="c-section-content container paddingtop10" >
          <p>
              <h4>Confirm your details</h4>
          </p>
  <!--         <p>
              <a href="index.php" class="back-to-link">> Back</a>
          </p>        
   -->
          <p>
              You should check that the information you have provided is correct before submitting it to Acas. The name of the organisation or company needs to be correct as it goes on the certificate you’ll need if you want to take your dispute to court.   
          </p>


          <div>
            <table class="summary_table" width="100%">

                <tr>
                    <td>Your contact details</td>
                    <td>
                    <?php 
                        echo 
                          $_SESSION['acas_proto']['claimant']['fullname'] 
                          . '<br>' . $_SESSION['acas_proto']['claimant']['address']
                          . '<br>' . $_SESSION['acas_proto']['claimant']['phone_number']
                          . '<br>' . $_SESSION['acas_proto']['claimant']['email'];

                          if ( strtoupper($_SESSION['acas_proto']['claimant']['representation']) === 'NO' ) echo '<br>No contact person';

                          if ( strtoupper($_SESSION['acas_proto']['claimant']['representation']) === 'YES' ) {
                            echo 
                              '<br>'
                              . '<br>' . 'Contact Relation: ' .$_SESSION['acas_proto']['claimant']['representation_relation'] 
                              . '<br>' . $_SESSION['acas_proto']['claimant']['representation_name'] 
                              . '<br>' . $_SESSION['acas_proto']['claimant']['representation_phone'] 
                              . '<br>' . $_SESSION['acas_proto']['claimant']['representation_email']; 
                          }

                    ?>
                    </td>
                    <td>
                      <button data-change-page="your_details.php" type="button" class="btn btn-acas btn-summary">Change</button>
                    </td>
                </tr>

                <tr>
                    <td>Your dispute</td>
                    <td>
                      <?php 
                          echo 
                          $_SESSION['acas_proto']['claimant']['dispute']
                          . '<br>' . $_SESSION['acas_proto']['claimant']['dispute_brief']
                          . '<br>' . $_SESSION['acas_proto']['claimant']['dispute_date'];

                      ?>
                    </td>
                    <td>
                      <button data-change-page="your_case.php" type="button" class="btn btn-acas btn-summary">Change</button>
                    </td>
                </tr>
                <tr>
                    <td>Organisation or company details</td>
                    <td>
                      <?php 
                          echo 
                            $_SESSION['acas_proto']['claimant']['org']
                            . '<br>' . 'Employment: ' . $_SESSION['acas_proto']['claimant']['org_tenure_date_from'] . ' - ' . $_SESSION['acas_proto']['claimant']['org_tenure_date_to']
                            . '<br>' . $_SESSION['acas_proto']['claimant']['orgaddress1'];

                            if (isset($_SESSION['acas_proto']['claimant']['orgaddress2'])) echo '<br>' . $_SESSION['acas_proto']['claimant']['orgaddress2'];

                            echo '<br>' . $_SESSION['acas_proto']['claimant']['orgtown']
                            . '<br>' . $_SESSION['acas_proto']['claimant']['orgpostcode'];


                            if (isset($_SESSION['acas_proto']['claimant']['org_person_name_or_department'])) echo '<br>' . $_SESSION['acas_proto']['claimant']['org_person_name_or_department'];

                            if (isset($_SESSION['acas_proto']['claimant']['org_phone_person_or_department'])) echo '<br>' . $_SESSION['acas_proto']['claimant']['org_phone_person_or_department'];

                            if (isset($_SESSION['acas_proto']['claimant']['org_email_person_or_department'])) echo '<br>' . $_SESSION['acas_proto']['claimant']['org_email_person_or_department'];


                      ?>
                    </td>
                    <td><button data-change-page="your_employer.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
                </tr>

            </table>

          </div>

          <div class="margintop50">
            <h4>Before your send </h4>
              <div class="before-you-send-container">
                  Your information will be used to create the certificate you need if you want to take your dispute to court and if your information is not correct your documents may not be valid. 

              </div>
            
          </div>

          <div class="form-group">
                 <button style="background-color: red" id="btn-continue" data-next-page="finish.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Accept and send form</button> 
          </div>

          <input name="page" type="hidden" value="summary.php">


      </div>
    </form>


 

<script>
    
        $( ".btn-summary").on( "click", function() {
            console.log ('change page', $(this).data('change-page'));
            window.location.href = $(this).data('change-page');
        })


</script>



<?php include 'footer.php'; ?>