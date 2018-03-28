<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
 ?>

<?php include 'header.php'; ?>
        <p>
            <a href="./index.php" class="back-to-link before-arrow">Back</a>
        </p>

        <p><h2>Tell Acas you want to start conciliation </h2>

        <p>
            Use this form to tell Acas that you want to take a dispute with your employer to conciliation.
        </p>

        <p>
            The form will ask for details about you, the organisation you’re in dispute with and your employment with them. 
        </p>

        <p>
            It takes about 5 minutes to fill in.
        </p>


    </div>
    <div class="c-section-content container paddingtop10" >
        <h3>Before you start</h3>

        <p>
            To fill in the form you'll need the full legal name of the organisation you want to make a claim against.<br>
            <a class="find-org-name before-arrow  link-underline" href="#">Not sure where to find the full name of your organisation?</a>
            <div id="acas-companies-house" style="display: none;"><p>Look on your payslip or contract if you have one. You can find companies by searching <a class="link-underline" href="https://www.gov.uk/get-information-about-a-company" target="_blank">Companies House</a>.</div>
        </p>


        <p>
            If you have someone to act for you during your claim (a ‘representative’), for example a solicitor or union official, you will need their name, address and contact number.
        </p>
        <p><button id="btn-continue" type="button" data-next-page="check_before_you_start.php" class="btn btn-acas btn-lime margintopbottom10">Start</button></p>

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