<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
    $_SESSION['acas_proto']['sprint'] = '5';
 ?>

<?php include 'header.php'; ?>


    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
          Contact Acas about a problem at work, eg unpaid wages or holiday pay, unfair dismissal, redundancy, or discrimination. This will let you take your employer to court. But first, Acas will try to help you and your employer find a solution out of court.
        </p>

        <p>
          <!--  <h4 style="text-decoration: underline;">Contact Acas</h4> --> 
         <p><button id="btn-continue" type="button" data-next-page="your_details.php" class="btn btn-acas btn-lime margintopbottom10">Contact Acas</button></p>
        <!-- <a style="text-decoration: underline; font-size: 1.4rem" href="./your_details.php">Contact Acas</a> -->

          <h5>Before you start</h5>          
        </p>

        <p>
          Use this service if: 
        </p>
        <ul>
          <li>
            You’ve already tried to sort out the problem directly with your employer and it hasn’t worked
          </li>
          <li>
            The problem happened within the last 3 months (6 months if it’s about redundancy pay) – if it was longer ago, it may be hard to find a solution
          </li>                        
        </ul>
         
        
          <p>
            Acas won’t take sides. It aims to sort out workplace problems quickly, fairly and confidentially, so they don’t go to court. This is done through a series of conversations with you and your employer.

          </p>

          <p>
            If you’ve already decided to take your employer to court, you must still use this service. Acas will provide you with the certificate needed to start legal action. 
          </p>


          <p>
            <h5>Fees</h5>
            There are no fees for this service. Acas’s work is funded by the government.
          </p>          

        



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