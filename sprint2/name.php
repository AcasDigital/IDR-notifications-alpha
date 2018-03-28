<?php     
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_ver'] = '1.0';

?>
<?php include 'header2.php';?>
    

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your full name</h3>
        </p>
        <p>
            <a href="index.php" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter your full name, do not use initials. 
        </p>

        <form class="needs-validation" novalidate name="main-form" method="post" action="address.php">
            
            <div class="form-group">  
                <label class="acas-form-label" for="full_name">Full name</label>
                <input type="text" class="acas-input-text form-control" name="fullname" id="fullname" value="<?php echo $_SESSION['acas_proto']['claimant']['fullname']?>" autocomplete="off" pattern="^[a-zA-Z][\sa-zA-Z]*" required>
                <div class="invalid-feedback">
                    You must enter your name    
                </div>

            </div>
<!--             <div class="form-group">   
                <label class="acas-form-label" for="last_name">Last name</label>
                <input type="text" class="acas-input-text form-control" name="last_name" id="last_name" value="<?php echo $_SESSION['acas_proto']['claimant']['last_name']?>" autocomplete="off" pattern="^[a-zA-Z][\sa-zA-Z]*" required>
                <div class="invalid-feedback">
                    Please enter last name.
                </div>
            </div>
 -->            <div class="form-group">
               <button id="btn-continue" data-next-page="address.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button> 
            </div>   
        </form>
    </div>


 

<script>
    
      // $('#btn-continue').on('click', function(){
      //   console.log ('clicked submit')

      //   console.log (empty($('#first_name').val())); 
      //   if (!empty($('#first_name').val())    
      //   $('#main-form').submit();

      // })  


</script>



<?php include 'footer.php'; ?>