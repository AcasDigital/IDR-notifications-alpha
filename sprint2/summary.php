<?php if (!isset($_SESSION)) { session_start();}
if (isset($_POST['representation'])) $_SESSION['acas_proto']['claimant']['representation'] = $_POST['representation'];
if (isset($_POST['rep_name'])) $_SESSION['acas_proto']['claimant']['representation_name'] = $_POST['rep_name'];
if (isset($_POST['rep_email'])) $_SESSION['acas_proto']['claimant']['representation_email'] = $_POST['rep_email'];
if (isset($_POST['rep_phone'])) $_SESSION['acas_proto']['claimant']['representation_phone'] = $_POST['rep_phone'];
?>
<?php include 'header2.php';?>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h4>Check your answers</h4>
        </p>
        <p>
            <a href="representative.php" class="back-to-link">> Back</a>
        </p>       

        <p>
            Getting your information correct is your responsibility and not the responsibility of Acas.
        </p> 
        <p>&nbsp;</p>

        <table class="summary_table" width="100%">

            <tr>
                <td>Your dispute</td><td><?php echo $_SESSION['acas_proto']['claimant']['dispute'] . ' <br>' . $_SESSION['acas_proto']['claimant']['lastday'] . ' <br>' . $_SESSION['acas_proto']['claimant']['tenure']?></td><td><button data-change-page="check_before_you_start.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>

            <tr>
                <td>Name</td><td><?php echo $_SESSION['acas_proto']['claimant']['fullname'] ?></td><td><button data-change-page="name.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Address</td><td><?php echo $_SESSION['acas_proto']['claimant']['address']?></td><td><button data-change-page="address.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Contact details</td><td><?php echo $_SESSION['acas_proto']['claimant']['email'] . '<br>'.$_SESSION['acas_proto']['claimant']['phone_number']?></td><td><button data-change-page="contact_details.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Company</td><td><?php echo $_SESSION['acas_proto']['claimant']['org']?></td><td><button data-change-page="org.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Company address</td><td><?php echo $_SESSION['acas_proto']['claimant']['orgaddress1'] . '<br>' . $_SESSION['acas_proto']['claimant']['orgaddress2'] . '<br>'. $_SESSION['acas_proto']['claimant']['orgtown'] .'<br>'.$_SESSION['acas_proto']['claimant']['orgpostcode']?></td><td><button data-change-page="org_address.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>            
            <tr>
                <td>Company contact details</td><td><?php echo    $_SESSION['acas_proto']['claimant']['hremail'] . '<br>' .
                                                                    $_SESSION['acas_proto']['claimant']['hrphone_number'] 
                                                                    ?></td><td><button type="button" data-change-page="contact_details.php" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Have a representative?</td><td><?php echo strtoupper($_SESSION['acas_proto']['claimant']['representation'] )?></td><td><button data-change-page="representative.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <?php if ( $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ) {?>
                <tr>
                    <td>Representative details</td><td><? echo $_SESSION['acas_proto']['claimant']['representation_name'] . '<br>' .
                                                                $_SESSION['acas_proto']['claimant']['representation_email']  . '<br>' .
                                                                $_SESSION['acas_proto']['claimant']['representation_phone']  . '<br>' ?></td><td><button type="button" data-change-page="representative_who.php" class="btn btn-acas btn-summary">Change</button></td>
                </tr>
            <?php  } ?>


        </table>


        <h5>Before you send</h5>
        <div style="position: relative;">
            <div class="before-you-send-container">
                Your information will be used to create the legal documents you need if you want to take your dispute to an employment tribunal and if your information is not correct your documents may not be valid.
            </div>
        </div>
		

        <p><button id="btn-continue" type="button" data-next-page="confirmation.php" class="btn btn-acas btn-lime margintopbottom10">Accept and send form</button></p>


    </div>

<script type="text/javascript">
        $( "#btn-continue" ).on( "click", function() {
            window.location.href = $( this ).data('next-page');
        });

        $( ".btn-summary").on( "click", function() {
            console.log ('change page', $(this).data('change-page'));
            window.location.href = $(this).data('change-page');
        })
    
</script>    

<?php include 'footer.php'; ?>