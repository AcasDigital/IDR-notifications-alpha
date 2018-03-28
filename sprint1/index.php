<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
 ?>

<?php include 'header.php'; ?>
        <p>
            <!-- <a href="#" class="back-to-link">Back to ...</a> -->
        </p>

        <p><h2>Start a claim against your employer</h2>

        <p>
            Use this form to tell us that you want to take a dispute with your employer to an employment tribunal.
        </p>

        <p>
            The form will ask for details about you, the organisation you’re in dispute with and your employment with them. 
        </p>

        <p>
            It takes about 5 minutes to fill in.
        </p>


    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            To fill in the form you'll need:
        </p>

        <ul>
            <li>the full name of the organisation you want to make a claim against<br> 
            <a class="find-org-name" href="#">&gt; Not sure where to find the full name of your organisation?</a>
            <div id="acas-companies-house" style="display: none;"><p>Look on your payslip or contract if you have one. You can find companies by searching <a href="https://www.gov.uk/get-information-about-a-company" target="_blank">Companies House</a>.</p></div>
            </li>
            <li>the name, address and contact number of a representative, if you choose to use one - a representative acts for you during your claim and could be a solicitor or union official for example</li>
            
        </ul>


        <p><h3>Before you start</h3>

        <p>
            <a href="right_for_you.php">Check if starting a claim is right for you.</a>
        </p>
        <p>
            <a href="conciliation_process.php">Find out what ACAS does when you start a claim.</a>
        </p>

        <p><button id="btn-continue" type="button" data-next-page="name.php" class="btn btn-acas btn-lime margintopbottom10">Start your claim</button></p>

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