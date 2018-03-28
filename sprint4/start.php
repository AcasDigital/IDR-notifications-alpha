<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
    $_SESSION['acas_proto']['sprint'] = '4';
 ?>

<?php include 'header.php'; ?>


    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            If you have a problem at work, you can contact Acas and we will get in touch with you and your employer to try to reach a solution that suits both sides.
        </p>

        <p>
          You can contact us if:
        </p>

        <ul>
          <li>
            You are owedwages
          </li>
          <li>
            You are owed holiday pay
          </li>
          <li>
            You've been unfairly dismissed
          </li>
          <li>
            You've been made redundant
          </li>
          <li>
            You've been discriminated against
          </li>
          <li>
            You have another problem at work (for example related to whistleblowing, your contract, or how many hours you work)
          </li>                    
        </ul>
         
        
          <p>
            Before contacting us, you must first try to sort out the problem yourself, by talking directly to your employer. If that doesn’t work, you can contact us by completing our online form. We will try to sort it out quickly and for no cost – this means you won’t have to take it further, for example by going to court.
          </p>

          <p>
            You should aim to contact us as soon as possible after the problem occurred. If it occurred more than 3 months ago (6 months for redundancy pay), it may be harder to reach a solution.
          </p>

        
        <p><button id="btn-continue" type="button" data-next-page="your_details.php" class="btn btn-acas btn-lime margintopbottom10">Complete the form</button></p>



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