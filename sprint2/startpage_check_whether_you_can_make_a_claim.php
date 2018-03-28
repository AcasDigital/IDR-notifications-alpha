<?php 
    // if (!isset($_SESSION)) { session_start(); }
    // $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
 ?>

<?php include 'header.php'; ?>
        <p>
            <!-- <a href="#" class="back-to-link">Back to ...</a> -->
        </p>

        <p><h2>Check if notifying Acas is right for you</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            Please answer the questions to see the legal constraints and previous cases relevant to your case.
        </p>

        <hr>
        <div class="row">
            <div class="col-4">
                Do you have a contract?
            </div>
            <div class="col">
                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="Yes">Yes
                </label> 

                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="No">No
                </label>                      
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-4">
                Is anyone else making a claim about the same issue against the company?
            </div>
            <div class="col">
                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="Yes">Yes
                </label> 

                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="No">No
                </label>                      
            </div>
        </div>
        
        <hr>
        <div class="row">
            <div class="col-4">                
                Is your employer insolvent? 
            </div>
            <div class="col">
                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="Yes">Yes
                </label> 

                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="No">No
                </label>                      
            </div>
        </div>
        
        <hr>
        <div class="row">
            <div class="col-4">                
                Have you talked or written to your employer about your disatisfaction?  
            </div>
            <div class="col">
                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="Yes">Yes
                </label> 

                <label>
                    <input class='representation' type="radio" name="representation" <?php echo $_SESSION['acas_proto']['claimant']['representation'] == 'No' ? 'checked' : '';?> value="No">No
                </label>                      
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-4">                                
                What is your dispute about? 
            </div>
            <div class="col">
                <div class="checkbox">
                  <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Wages' ? 'checked' : '';?> value="Wages">&nbsp;&nbsp;&nbsp;Wages</label>
                </div>
                <div class="checkbox">
                  <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Breach of contract' ? 'checked' : '';?> value="Breach of contract">&nbsp;&nbsp;&nbsp;Breach of contract</label>
                </div>
                <div class="checkbox">
                  <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Holiday' ? 'checked' : '';?> value="Holiday">&nbsp;&nbsp;&nbsp;Holiday</label>
                </div>
                <div class="checkbox">
                  <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Unfair dismissal' ? 'checked' : '';?> value="Unfair dismissal">&nbsp;&nbsp;&nbsp;Unfair dismissal</label>
                </div>
                <div class="checkbox">
                  <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Discrimination' ? 'checked' : '';?> value="Discrimination">&nbsp;&nbsp;&nbsp;Discrimination</label>
                </div>
                <div class="checkbox">
                  <label><input name="case" type="checkbox" <?php echo $_SESSION['acas_proto']['claimant']['case'] == 'Any other subject' ? 'checked' : '';?> value="Any other subject">&nbsp;&nbsp;&nbsp;Any other subject</label>          
                </div>                
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-4">                                
                What do you want? 
            </div>
            <div class="col">
               Not sure about this one  
            </div>
        </div>


        <div class="form-group">
            <button id="btn-continue" type="button" data-next-page="name.php" class="btn btn-acas btn-lime margintopbottom10">Notify Acas</button>
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