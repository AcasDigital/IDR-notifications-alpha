

<?php include 'header.php'; ?>
        <p>
            <a href="#" class="back-to-link">Back to ...</a>
        </p>

        <p><h2>Check if starting a claim is right for you </h2>

        <p>
            
        </p>


    </div>
    <div class="c-section-content container paddingtop10" >        
        <h4>A tool to help you decide if starting a claim is right for you.</h3>        
        <p><button id="btn-continue" type="button" data-next-page="index.php" class="btn btn-acas btn-lime margintopbottom10">Go Back</button></p>

    </div>


    
<script type="text/javascript">
        $( "#btn-continue" ).on( "click", function() {
            window.location.href = $( this ).data('next-page') ;
        });

    
</script>



<?php include 'footer.php'; ?>