<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
 ?>

<?php include 'header.php'; ?>
        <p>
            <a href="./start.php" class="back-to-link before-arrow">Back</a>
        </p>

        <p><h2>Notify Acas about your dispute with your employer</h2>



    </div>
    <div class="c-section-content container paddingtop10" >
        <h4>You’ll need the following to help you complete the form:</h4>

        <ul>
          <li>
            The name of the company or organisation you want to notify Acas about
          </li>
          <li>
            The company or organisation's main address
          </li>
          <li>
            The name of the best person for Acas to contact at the company or organisation
          </li>
          <li>
            That person's phone number and email address
          </li>
        </ul>
         
        
          <p>You should able to find this information in one or more of the following places:</p>

        <ul>
          <li>
            A recent payslip
          </li>
          <li>
            Your employment contract
          </li>
          <li>
            An email from that employer
          </li> 

        </ul>
        
        <p><button id="btn-continue" type="button" data-next-page="your_details.php" class="btn btn-acas btn-lime margintopbottom10">Start now</button></p>



    </div>



<script type="text/javascript">
        $( "#btn-continue" ).on( "click", function() {
            window.location.href = $( this ).data('next-page') ;
        });

        $( ".find-org-name" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#acas-companies-house').toggleClass('show-it')
        
        });

    
</script>




<?php include 'footer.php'; ?>