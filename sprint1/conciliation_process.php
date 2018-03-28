

<?php include 'header.php'; ?>
        <p>
            <a href="#" class="back-to-link">> Back</a>
        </p>

        <p><h2>Find out what ACAS does when you start a claim</h2>

        <p>
            
        </p>


    </div>
    <div class="c-section-content container paddingtop10" >        
         

        <div>
            <img width="100%" height="100%" src="assets/img/conciliation_process.png">

        </div>     
        <p><button id="btn-continue" type="button" data-next-page="index.php" class="btn btn-acas btn-lime margintopbottom10">Go Back</button></p>

    </div>


    
<script type="text/javascript">
        $( "#btn-continue" ).on( "click", function() {
            window.location.href = $( this ).data('next-page') ;
        });

    
</script>



<?php include 'footer.php'; ?>