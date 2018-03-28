	


	<div class="container footer paddingbottom10 paddingtop10">
		
	<div class="menu-container">
		<!-- <p class="callacas">Call Acas helpline 0300 123 1122</p> -->
		<span class="menu">
			<ul>
				<li><a href="#">Feedback</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Cookies</a></li>
			</ul>
		</span>
	</div>
		<div class="copyright">
         <img src="./assets/img/govuk-crest.png"><a class="crowntext" href="#">© Crown copyright</a>
        </div>		

	</div>

	<?php 
			// if (isset($_SESSION)) { 
			// 	echo '<pre>';print_r($_SESSION);echo '</pre>';	
			// }
		 


	?>


	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	
	</body>
	<script type="text/javascript">
		
		////////////////////////// Continue to next page
/*		$( "#btn-continue" ).on( "click", function() {
  			window.location.href = $( this ).data('next-page') ;
		});
*/


		
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    // Fetch all the forms we want to apply custom Bootstrap validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
		


		function goBack(e) {
		    window.history.back();
		} 

		function empty(s) {
			return s.trim().length > 0 ? true : false;
		} 

		$(document).ready(function(){
		    $('form').on( 'focus', ':input', function(){
		        $(this).attr( 'autocomplete', 'off' );
		    });
		});		

	</script>
</html>