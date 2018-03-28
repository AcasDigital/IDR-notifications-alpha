<?php session_start();?> 
    
    <?php
            print_r('Session--> ');
        print_r($_SESSION);

    echo '---'.$_POST['postcode_selected'];
    // $_SESSION['postcode'] = $_POST['postcode_selected'];
    // $_SESSION['address'] = $_POST['address_selected'];
?>
<?php //include 'header.php'; ?>
    
 <!--        <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>What is your phone number?</h3>
        </p>
        <p>
            <a href="#" class="back-to-link">> Back</a>
        </p>        

        <p>
            Enter the phone number you want Acas to use when.
        </p>

        <form method="post" action="email.php">
            <p>
                <label class="acas-form-label" for="phone_number">Phone number</label>
                <input type="text" class="acas-input-text form-control" name="phone_number" id="phone_number">
            </p>



            <p><button id="btn-continue" data-next-page="email.php" type="submmit" class="btn btn-acas btn-lime margintopbottom10">Continue</button></p>

        </form>

        <p>
            <a href="#">I don't have a UK phone number</a>
        </p>


    </div> -->

<?php //include 'footer.php'; ?>