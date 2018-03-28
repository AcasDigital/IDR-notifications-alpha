<?php 
if (!isset($_SESSION)) { session_start(); }
$_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
$_SESSION['acas_proto']['sprint'] = '5';
?>

<?php include 'header.php'; ?>


</div>
<div class="c-section-content container paddingtop10" >
  <div style="max-width: 768px; text-align:left"> 
    <p>
      You can contact Acas if you have a problem at work and want to:
    </p>
    <ul>
      <li>
        find a solution out of court that suits both you and your employer
      </li>                        
      <li>
        take your employer to court
      </li>
    </ul>
    <p>
      Acas can help with problems such as unpaid wages or holiday pay, unfair dismissal, redundancy, and discrimination. It offers free guidance on employment issues and is funded by the government.          
    </p>
    <p>
      <h5>Before you start</h5>          
    </p>

    <p>
      You should only use this service if:
    </p>
    <ul>
      <li>
        you’ve already tried to sort out the problem directly with your employer and it hasn’t worked
      </li>
      <li>
        the problem happened within the last 3 months (6 months if it’s about redundancy pay) – if it was longer ago, it may be hard to find a solution
      </li>                        
    </ul>
    <p>
     <strong>If you want to find a solution out of court</strong><br>
     Acas will try to find a solution that suits both you and your employer. It will do this through a series of confidential conversations with both sides. Note that Acas isn’t here to take your side during negotiations – and it can’t offer an opinion on whether you should go to court.
   </p>
   <p>
    <strong>If you want to go to court</strong><br>
    Acas will give you the certificate needed to start this process.

  </p>
  <p>
    <strong>Fees</strong><br>
    You won’t have to pay for this service.
  </p>          
  <p><button id="btn-continue" type="button" data-next-page="your_details.php" class="btn btn-acas btn-lime margintopbottom10">Start now</button></p>
</div>
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