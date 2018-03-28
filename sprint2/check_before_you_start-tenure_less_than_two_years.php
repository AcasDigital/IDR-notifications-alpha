<?php if (!isset($_SESSION)) { session_start(); }
    // if (isset($_POST['person_name_or_department'])) $_SESSION['acas_proto']['claimant']['org_person_name_or_department'] = $_POST['person_name_or_department'];
    // if (isset($_POST['email_person_or_department'])) $_SESSION['acas_proto']['claimant']['org_email_person_or_department'] = $_POST['email_person_or_department'];
    if (isset($_POST['tenure'])) $_SESSION['acas_proto']['claimant']['tenure'] = $_POST['tenure'];
?>

<?php include 'header2.php';?>
    

<!--         <p><h2>Service name</h2>
 -->
    </div>
    <div class="c-section-content container paddingtop10" >

<!--             <h3>Service Name</h3>
 -->
        <p>
            <a href="./check_before_you_start-tenure_with_employer.php" class="back-to-link">> Back</a>
        </p>        


        <div class="center-box">
            
            <div class="cb-header">
                        <h2>Check before you start</h2>
            </div>

            <div class="cb-body">


        <form id="form_representation" method="post" action="name.php">

        	<p>You’ve worked for your employer less than 2 years  <a class="change-link" href="./check_before_you_start-tenure_with_employer.php">Change</a></p>

			<p>You usually need to work for your employer for 2 years before you can make a claim for unfair dismissal.</p>

			<p>You can still start conciliation but a tribunal is unlikely to hear you case unless it's about</p> 

			<ul>
				<li>pregnancy</li>
				<li>health and safety</li>
				<li>whistleblowing</li>
				<li>rights you're given by law not by contract like the minimum wage</li>
			</ul>

			<p>Before you start the from you might want to call the Acas helpline on 0300 123 1122.</p>

            <p><button id="btn-continue" data-next-page="name.php" type="submit" class="grey-btn btn btn-acas btn-lime margintopbottom10">Start form</button></p>
        </form>
            </div>


        </div>




    </div>

    <script type="text/javascript">
        $(".representation").on("click", function(){
                console.log ('clicked', $(this).val());
                if ($(this).val() === 'No') $("#form_representation")[0].action = 'subject.php';
                 else $("#form_representation")[0].action = 'representative_who.php';

        })
    </script>

<?php include 'footer.php'; ?>