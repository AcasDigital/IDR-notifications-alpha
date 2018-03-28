<?php     
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['page'])) $_SESSION['acas_proto']['page']['your_employer'] = $_POST['page'];
if (isset($_POST['org'])) $_SESSION['acas_proto']['claimant']['org'] = $_POST['org'];
if (isset($_POST['tenure_date_from'])) $_SESSION['acas_proto']['claimant']['org_tenure_date_from'] = $_POST['tenure_date_from'];
if (isset($_POST['tenure_date_to'])) $_SESSION['acas_proto']['claimant']['org_tenure_date_to'] = $_POST['tenure_date_to'];
if (isset($_POST['currently_work_here_value'])) $_SESSION['acas_proto']['claimant']['currently_work_here_value'] = $_POST['currently_work_here_value'];


if (isset($_POST['orgaddress1'])) $_SESSION['acas_proto']['claimant']['orgaddress1'] = $_POST['orgaddress1'];
if (isset($_POST['orgaddress2'])) $_SESSION['acas_proto']['claimant']['orgaddress2'] = $_POST['orgaddress2'];
if (isset($_POST['orgtown'])) $_SESSION['acas_proto']['claimant']['orgtown'] = $_POST['orgtown'];
if (isset($_POST['orgpostcode'])) $_SESSION['acas_proto']['claimant']['orgpostcode'] = $_POST['orgpostcode'];

if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
if (isset($_POST['job_title_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_job_title_person_or_department'] = $_POST['job_title_person_or_department'];
if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
if (isset($_POST['phone_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_phone_person_or_department'] = $_POST['phone_person_or_department'];


if (isset($_POST['multiple_disputes'])) $_SESSION['acas_proto']['claimant']['multiple_disputes'] = $_POST['multiple_disputes'];
// if (isset($_POST['can-acas-contact-employer'])) $_SESSION['acas_proto']['claimant']['can-acas-contact-employer'] = $_POST['can-acas-contact-employer'];

$_SESSION['acas_proto']['page']['summary-reached'] = 'true';

function missing_info($s, $f) {
  //return !empty(trim($s+'')) ? $s : '<span style="color: red">Missing ' . $f .'</span>';
  return strlen(trim($s)) > 0 ? $s : '<span class="missing-info-text" style="color: #8f9193; font-weight: 500;">Missing ' . $f .'</span>';
}

function has_valid_value($s) {

  return strlen(trim((string)$s)) > 0 ? '<br>'.$s : '';
}


function e_missing_info($s, $f) {
  //return !empty(trim($s+'')) ? $s : '<span style="color: red">Missing ' . $f .'</span>';
  return strlen(trim($s)) > 0 ? $s : '*** Missing ' . $f .' ***';
}


function e_has_valid_value($s) {
  return strlen(trim((string)$s)) > 0 ? "\r\n".$s : '';
}

$formString = '';
?>
<?php include 'header.php';?>


</div>


<form name="main-form" method="post" action="finish.php">  

  <div class="c-section-content container paddingtop10" >
    <div style="max-width: 768px; text-align:left"> 
      <p>
        Check that your details are correct before sending them. If anything is incorrect,
        Acas may not be able to help you and it may affect the result if your case goes to court.
      </p>
    </div>

    <div>
      <table class="summary_table" width="100%">

        <tr>
          <td>
            
            <?php 
            echo '<strong>Your contact details/ <br>Contact relation</strong>';
            $formString .= "\r\n\r\n\r\nYour contact details\r\n-----------------------------------------------------\r\n";
            ?>
          </td>
          <td>
            <?php 
            echo 
            $_SESSION['acas_proto']['claimant']['firstname'] .' ' . $_SESSION['acas_proto']['claimant']['lastname']
            . '<br>' . $_SESSION['acas_proto']['claimant']['address1']

            . has_valid_value($_SESSION['acas_proto']['claimant']['address2'])

            . '<br>' . $_SESSION['acas_proto']['claimant']['town']
            . '<br>' . $_SESSION['acas_proto']['claimant']['postcode']


            . '<br>' . missing_info($_SESSION['acas_proto']['claimant']['phone_number'], 'phone number')
            . '<br>' . missing_info($_SESSION['acas_proto']['claimant']['email'],'email')
            . '<br><br>Disability:<br> ' . $_SESSION['acas_proto']['claimant']['disability_brief'];


                          // Form String START
            $formString .= $_SESSION['acas_proto']['claimant']['firstname'] .' ' . $_SESSION['acas_proto']['claimant']['lastname']
            . "\r\n" . $_SESSION['acas_proto']['claimant']['address1']

            . e_has_valid_value($_SESSION['acas_proto']['claimant']['address2'])

            . "\r\n" . $_SESSION['acas_proto']['claimant']['town']
            . "\r\n" . $_SESSION['acas_proto']['claimant']['postcode']


            . "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['phone_number'], 'phone number')
            . "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['email'],'email')
            . "\r\n\r\n"."Disability: " . "\r\n" .$_SESSION['acas_proto']['claimant']['disability_brief'];


                          // Form String END


/*                          if ( strtoupper($_SESSION['acas_proto']['claimant']['disability']) === 'YES' ) {
                            echo '<br>' . $_SESSION['acas_proto']['claimant']['disability_brief'] . '<br>';
                            $formString .= "\r\n" . $_SESSION['acas_proto']['claimant']['disability_brief'];
                          }
*/                            


                          // if ( strtoupper($_SESSION['acas_proto']['claimant']['representation']) === 'NO' ) {
                          //  echo '<br>No contact person';
                          //  $formString .= "\r\n" ."No contact person";
                          // }

                         // if ( strtoupper($_SESSION['acas_proto']['claimant']['representation']) === 'YES' ) {
                          echo 
                          '<br><br>' . 'Speak to on my behalf: ' 
                          . '<br>' . $_SESSION['acas_proto']['claimant']['representation_name'] 
                          . '<br>' . $_SESSION['acas_proto']['claimant']['representation_phone'] 
                          . '<br>' . $_SESSION['acas_proto']['claimant']['representation_email']
                          . '<br>' . $_SESSION['acas_proto']['claimant']['representation_relation']; 

                          $formString .= "\r\n" . 'Speak to on my behalf: ' 
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['representation_name'] 
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['representation_phone'] 
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['representation_email'] 
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['representation_relation']; 
                         // }

                          ?>
                        </td>
                        <td>
                          <button data-change-page="your_details.php" type="button" class="btn btn-acas btn-summary">Change</button>
                        </td>
                      </tr>

                      <tr>
                        <td><strong>Your problem</strong>
                          <?php 
                          $formString .= "\r\n\r\nYour problem\r\n-----------------------------------------------------\r\n";
                          ?>

                        </td>
                        <td>
                          <?php 
                          echo 
                          missing_info(get_arr_val($_SESSION['acas_proto']['claimant']['dispute']), "problem");
                          if (missing_info($_SESSION['acas_proto']['claimant']['dispute_brief'], "problem description")) echo '<br>' .missing_info($_SESSION['acas_proto']['claimant']['dispute_brief'], "problem description");
                          if ($_SESSION['acas_proto']['claimant']['help_to_resolve_dispute']) echo  '<br>' . $_SESSION['acas_proto']['claimant']['help_to_resolve_dispute'];
                          if (missing_info($_SESSION['acas_proto']['claimant']['dispute_date'], " date of problem")) echo '<br>' . missing_info($_SESSION['acas_proto']['claimant']['dispute_date'], " date of problem");


                          $formString .= e_missing_info(get_arr_val($_SESSION['acas_proto']['claimant']['dispute']), "problem")
                          . "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['dispute_brief'], "problem description")
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['help_to_resolve_dispute']
                          . "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['dispute_date'], " date of problem");

                          ?>
                        </td>
                        <td>
                          <button data-change-page="your_case.php" type="button" class="btn btn-acas btn-summary">Change</button>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>Employer details</strong>
                          <?php 
                          $formString .= "\r\n\r\nEmployer details\r\n-----------------------------------------------------\r\n";
                          ?>

                        </td>
                        <td >
                          <?php 
                          echo 
                          $_SESSION['acas_proto']['claimant']['org'];

                          if (match_in_arr($_SESSION['acas_proto']['claimant']['dispute'], "I've been unfairly dismissed") == "I've been unfairly dismissed") {
                            echo '<br>' . 'Employment: ' . $_SESSION['acas_proto']['claimant']['org_tenure_date_from'] . ' - ' . ($_SESSION['acas_proto']['claimant']['currently_work_here_value'] == 'Present' ? $_SESSION['acas_proto']['claimant']['currently_work_here_value'] : $_SESSION['acas_proto']['claimant']['org_tenure_date_to']) ;
                          }

                          echo '<br>' . $_SESSION['acas_proto']['claimant']['orgaddress1']
                          . has_valid_value($_SESSION['acas_proto']['claimant']['orgaddress2'])
                          . '<br>' . $_SESSION['acas_proto']['claimant']['orgtown']
                          . '<br>' . $_SESSION['acas_proto']['claimant']['orgpostcode'];


                          $formString .= $_SESSION['acas_proto']['claimant']['org'];
                          
                          if (match_in_arr($_SESSION['acas_proto']['claimant']['dispute'], "I've been unfairly dismissed") == "I've been unfairly dismissed") {
                            $formString .= "\r\n" . 'Employment: ' . $_SESSION['acas_proto']['claimant']['org_tenure_date_from'] . ' - ' . ($_SESSION['acas_proto']['claimant']['currently_work_here_value'] == 'Present' ? $_SESSION['acas_proto']['claimant']['currently_work_here_value'] : $_SESSION['acas_proto']['claimant']['org_tenure_date_to']);
                          }

                          $formString .= "\r\n" . $_SESSION['acas_proto']['claimant']['orgaddress1']
                          . e_has_valid_value($_SESSION['acas_proto']['claimant']['orgaddress2'])
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['orgtown']
                          . "\r\n" . $_SESSION['acas_proto']['claimant']['orgpostcode'];


                          echo '<br>' . missing_info($_SESSION['acas_proto']['claimant']['org_person_name_or_department'], 'person\'s name');
                          $formString .= "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['org_person_name_or_department'], 'person\'s name');

                          echo '<br>' . missing_info($_SESSION['acas_proto']['claimant']['org_job_title_person_or_department'], 'person\'s job title');
                          $formString .= "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['org_job_title_person_or_department'], 'person\'s job title');

                          echo '<br>' . missing_info($_SESSION['acas_proto']['claimant']['org_phone_person_or_department'], 'person\'s phone number');
                          $formString .= "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['org_phone_person_or_department'], 'person\'s phone number');

                          echo '<br>' . missing_info($_SESSION['acas_proto']['claimant']['org_email_person_or_department'], 'person\'s email');
                          $formString .= "\r\n" . e_missing_info($_SESSION['acas_proto']['claimant']['org_email_person_or_department'], 'person\'s email');


                            //echo '<br>' . 'Multiple disputes: ' . $_SESSION['acas_proto']['claimant']['multiple_disputes'];
                            // echo '<br>' . 'OK for Acas to contact employer: ' . $_SESSION['acas_proto']['claimant']['can-acas-contact-employer'];

                            //$formString .= "\r\n" . 'Multiple disputes: ' . $_SESSION['acas_proto']['claimant']['multiple_disputes'];
                            // $formString .= "\r\n" . 'OK for Acas to contact employer: ' . $_SESSION['acas_proto']['claimant']['can-acas-contact-employer'];

                          ?>
                        </td >
                        <td npwrap style="position:relative; min-width: 240px">
                          <!-- <div style="position:absolute; top: 0; padding-top: 10px;"><span style="line-height: 2.2;" class="icon-exclaim-before"><strong>Double check legal name</strong></span></div> -->
                          <button data-change-page="your_employer.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
                        </tr>

                      </table>

                    </div>

                    <div class="margintop50">
                      
                      <div class="before-you-send-container0">
                        <div style="max-width: 768px; text-align:left"> 

                          <h4>What happens next?</h4>
                          <p>
                            You will receive a confirmation email after sending your details. This will contain a summary of your case and your case reference number (you should quote this whenever you speak to Acas).
                          </p>

                          <p>
                            Acas will then phone you (or the person you’ve chosen to speak for you) in 2 to 3 days, to discuss the information you’ve provided, talk about the strengths and weaknesses of your case and explore what you’re looking for. This will allow Acas to start negotiations between you and your employer as quickly as possible.
                          </p>

                        </div>
                      </div>
                      
                    </div>

                    <div class="form-group">
                     <button id="btn-continue" data-next-page="finish.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Accept and send</button> 
                   </div>

                   <input name="page" type="hidden" value="summary.php">

          <textarea name="formstring" rows="20" style=" display: none; width: 100%"><?php echo trim($formString); //str_replace('<br>','\r\n', trim($formString));
          ?>            
        </textarea>









      </div>
    </form>


    

    <script>

      $(function() {





        $(".confirm-employer").on("click", function(){
          if ( $(this).val()  === 'confirm') $('#confirmEmployer').modal('hide');
          if ( $(this).val()  === 'change')window.location.href = "./your_employer.php";
        })



        
        $( ".btn-summary").on( "click", function() {
          console.log ('change page', $(this).data('change-page'));
          window.location.href = $(this).data('change-page');
        })
        
      })




    </script>



    <?php include 'footer.php'; ?>