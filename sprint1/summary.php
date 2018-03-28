<?php if (!isset($_SESSION)) { session_start();}
if (isset($_POST['case'])) $_SESSION['acas_proto']['claimant']['case'] = $_POST['case'];
?>
<?php include 'header.php';?>
            <p><h2>Start a claim against your employer</h2>

    </div>
    <div class="c-section-content container paddingtop10" >
        <p>
            <h3>Check your answers before sending your claim</h3>
        </p>
        <p>
            <a href="subject.php" class="back-to-link">> Back</a>
        </p>        

        <table class="summary_table" width="100%">

            <tr>
                <td>Name</td><td><?php echo $_SESSION['acas_proto']['claimant']['first_name'] . ' ' . $_SESSION['acas_proto']['claimant']['last_name']?></td><td><button data-change-page="name.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Address</td><td><?php echo $_SESSION['acas_proto']['claimant']['address']?></td><td><button data-change-page="address.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Email</td><td><?php echo $_SESSION['acas_proto']['claimant']['email']?></td><td><button data-change-page="email.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Phone</td><td><?php echo $_SESSION['acas_proto']['claimant']['phone_number']?></td><td><button data-change-page="phone.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Organisation</td><td><?php echo $_SESSION['acas_proto']['claimant']['org']?></td><td><button data-change-page="org.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Contact in organisation</td><td><?php echo    $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] . '<br>' .
                                                                    $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] . '<br>' .
                                                                    $_SESSION['acas_proto']['claimant']['org_phone_person_or_department']?></td><td><button type="button" data-change-page="org_department.php" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <tr>
                <td>Want a representative?</td><td><?php echo $_SESSION['acas_proto']['claimant']['representation'] ?></td><td><button data-change-page="representative.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>
            <?php if ( $_SESSION['acas_proto']['claimant']['representation'] == 'Yes' ) {?>
                <tr>
                    <td>Representative details</td><td><? echo $_SESSION['acas_proto']['claimant']['representation_name'] . '<br>' .
                                                                $_SESSION['acas_proto']['claimant']['representation_email']  . '<br>' .
                                                                $_SESSION['acas_proto']['claimant']['representation_phone']  . '<br>' ?></td><td><button type="button" data-change-page="representative_who.php" class="btn btn-acas btn-summary">Change</button></td>
                </tr>
            <?php  } ?>

            <tr>
                <td>The dispute</td><td><?echo $_SESSION['acas_proto']['claimant']['case']?></td><td><button data-change-page="subject.php" type="button" class="btn btn-acas btn-summary">Change</button></td>
            </tr>

        </table>


        <h5>Send your form </h5>
        <p>
            By sending this form you confirm that the information you have provided is true.</p>

		<p>Your information will be used to create the documents you will need to take your claim to a employment tribunal and if your information is not correct your claim may not be valid. 
        </p>


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