<?php 
    if (!isset($_SESSION)) { session_start(); }  
    $_SESSION['acas_proto']['developer'] = 'Methods';
    if (isset($_POST['first_name'])) $_SESSION['acas_proto']['claimant']['first_name'] = $_POST['first_name'];
    if (isset($_POST['last_name'])) $_SESSION['acas_proto']['claimant']['last_name'] = $_POST['last_name'];
    
    $postcode_find_class = 'block';
    $postcode_found_class = 'none';

    if (strlen(trim($_SESSION['acas_proto']['claimant']['postcode'])) > 0 ) {
     $postcode_find_class = 'none';
     $postcode_found_class = 'block';   
    }
    

?>
<?php include 'header.php'; 


?>
    
        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Your address</h3>
        </p>
        <p>
            <a href="name.php" class="back-to-link">> Back</a>
        </p>        


        <form method="post" action="phone.php">


            <div id="postcode-find" style="display: <?php echo $postcode_find_class; ?> ">
                <p>
                    Enter the postcode where you live. 
                </p>

                <p>
                    <label class="acas-form-label" for="postcode">Postcode</label>
                    <input type="text" class="acas-input-text form-control" id="postcode" value="<? echo $_SESSION['acas_proto']['claimant']['postcode']?>">
                    <span>Example: E4 7PF</span>
                </p>
                <p><button id="btn-findaddress" type="button" class="btn btn-acas btn-lime margintopbottom10">Find Address</button></p>
                <p>
                    <a class="no-postcode" href="#">I don't know what postcode to use</a>
                    <div id="no-postcode-info" style="display: none;"><p>If you have more than one address<br>
                        You should put down the address where you want Acas to send your post to. </p>

                        <p>If you don’t have a permanent address<br>
                        If you’re homeless and living in temporary accommodation (for example, a long term hostel), use that address.</p>

                        <p>If you’re a long term patient in a psychiatric hospital, use the address of the hospital.</p>

                        <p>If you’re a prisoner on long term remand, use the address of the prison.</p>

                        <p>If you can’t provide an address<br>
                        If you can’t provide an address, contact the Acas Helpline on 0300 123 1122.</p>
                    </div>                    
                </p>

            </div>

            <div id="postcode-found" style="display: <?php echo $postcode_found_class; ?> ">
                <p>
                    <span>Address: <? echo $_SESSION['acas_proto']['claimant']['address']?></span><span><a href="#" class="change-postcode back-to-link">Change</a></span>
                </p>        

            </div>

            <div id="postcode-lookup" style="display: none ">
                <p>
                    <span id="postcode_entered"><? echo $_SESSION['acas_proto']['claimant']['postcode']?></span><span><a href="#" class="change-postcode back-to-link"> Change</a></span>
                </p>
                <p>Find your address in the list.</p>
                <p>
                <select id="address_lookup" name="address_lookup" size="5">
                    <option value="1">1, Gregory Street, Nottingham, NG7 5JA</option>
                    <option value="2">2, Gregory Street, Nottingham, NG7 5JA</option>
                    <option value="3">3, Gregory Street, Nottingham, NG7 5JA</option>
                    <option value="4">4, Gregory Street, Nottingham, NG7 5JA</option>
                    <option value="5">5, Gregory Street, Nottingham, NG7 5JA</option>
                    <option value="6">6, Gregory Street, Nottingham, NG7 5JA</option>
                    <option value="7">7, Gregory Street, Nottingham, NG7 5JA</option>              
                    <option value="8">8, Gregory Street, Nottingham, NG7 5JA</option>

                </select>                
                </p>
                <p>
                    <a href="#">I can't find the address in the list</a>
                </p>



                <p><button id="btn-continue" data-next-page="phone.php" type="submit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>
            </div>
            <div>
                <input type="hidden" id="postcode_selected" name="postcode_selected"></input>
                <input type="hidden" id="address_selected" name="address_selected"></input>
            </div>
        </form>





    </div>


    <script type="text/javascript">

        ////////////////////////// Lookup address
        $('#btn-findaddress').on('click', function() {
            $('#postcode_entered').text($('#postcode').val());
            $('#postcode_selected').val($('#postcode').val());
            $('#postcode-find').hide();
            $('#postcode-lookup').show();
        });

        ////////////////////////// Change postcode
        $('.change-postcode').on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();            
            $('#postcode-lookup').hide()
            $('#postcode-find').show() 
            $('#postcode-found').hide()            
        });



        ////////////////////////// Select address
        $('#address_lookup').on('change', function(){
            console.log ($("#address_lookup :selected").text())
            $('#address_selected').val($("#address_lookup :selected").text())
        })


        ////////////////////////// No postcode
        $( ".no-postcode" ).on( "click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#no-postcode-info').toggleClass('show-it')
            

        });

    
    </script>

<?php include 'footer.php'; ?>