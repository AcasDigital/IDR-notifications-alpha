<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
    $_SESSION['acas_proto']['sprint'] = '4';
 ?>

<?php include 'header3.php'; ?>
<!--         <p>
            <a href="./start.php" class="back-to-link before-arrow">Back</a>
        </p>
 -->
        <h2>TELL US ABOUT A DISPUTE WITH YOUR EMPLOYER</h2>



    </div>
    <div class="c-section-content container paddingtop10" >
      <p>
        If you have a dispute with your employer, you must first try to sort it out with them directly. If this doesn't work and you are considering going to court, your next step is to contact Acas via our online form. We will try to settle the dispute quickly, so that you don't have to go to court.
      </p>

      <p>
        You only have a limited time to contact us. You must do this within 3 months of the start of the dispute if it relates to:

      </p>

        <ul>
          <li>
            Wages
          </li>
          <li>
            Holiday pay
          </li>
          <li>
            Unfair sacking
          </li>
          <li>
            Discrimination
          </li>
          <li>
            Any other subject (eg whistleblowing, your contract, how many hours you work)
          </li>          
        </ul>
         
        
        <p>If your dispute is about redundancy you must contact us within 3 months of being made redundant, or within 6 months if it is specifically about redundancy pay.</p>

        <p>If you are sure that you haven't missed these deadlines, you may complete the form - you will be asked to provide details about yourself, your employer and your dispute.</p>


        
        <p><button id="btn-continue" type="button" data-next-page="your_details.php" class="btn btn-acas btn-lime margintopbottom10">COMPLETE THE FORM</button></p>



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