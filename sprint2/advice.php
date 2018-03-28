<?php 
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['acas_proto']['app_name'] = 'ACAS Proto';
 ?>

<?php include 'header.php'; ?>
        <p>
            <a href="#" class="back-to-link">Back to ...</a>
        </p>

        <p><h2>Disputes at work</h2>

        <p>
            
        </p>


    </div>
    <div class="c-section-content container paddingtop10" >

<p>Many issues which may lead to a dispute at work can be dealt with informally between you and your line manager or employer directly.</p>

<p>If your dispute is more serious, your organisation should have [<a href="">internal procedures</a>] in place to help resolve the problem more formally.</p> 

<p>Even if you think you may be entitled to take your dispute to an employment tribunal (court), you must use internal procedures or put your concerns in writing to try to resolve it first. </p>

<p>If you can’t resolve the problem the next step is to try to settle the dispute before it gets to tribunal (‘early conciliation’).</p>

<p>Use Acas for early conciliation.</p>

<p>Whether you want to try conciliation or not, you’ll have to notify Acas that you intend to take your case to tribunal.</p>

<h4>Early conciliation</h4>

<p>Conciliation is free, confidential and voluntary.  </p>

<p>Acas conciliators act as an independent intermediaries in disputes between an employee and employer. </p>

<p>They talk to both sides to try to get agreement and avoid the case going to court. It doesn’t take sides.</p>

<p>It’s the last chance to resolve a dispute before it gets to tribunal. </p>

<p>For conciliation to work, you and your employer must agree to take part. </p>

<p>You can have someone to act for you during conciliation (a representative), for example a lawyer, a union official, or a relative or friend. But you don’t have to.</p>

<p>If you have a representative, Acas conciliators will talk to your representative, not you, during conciliation. </p>

<p>Conciliation is quicker, cheaper and less stressful than going to court, and it’s private, where a court hearing is public.</p>

<h4>What you need to do</h4>

<p>If you want to take action there’s a few things you need to do first:</p>

<ul>
    <li>think realistically about what you want to get out of it, for example to get your job back, compensation or a reference</li>
    <li>fill in a short form to <a class="link-underline" href="./index.php">tell Acas that you intend to take action</a></li>
</ul>




<p>You must fill in the form as soon as possible after the event that caused the dispute. This is  because there is a time limit of 3 months less 1 day from the date of the event to making a claim to the tribunal. </p>

<h4>What happens next</h4>

<p>Once you submit the form, Acas will appoint a conciliator to deal with the dispute. </p>

<p>The conciliator will try to contact you (or your representative) within 5 working days. They will talk to you before they contact your employer.</p>

<p>Acas conciliators are neutral, they can’t represent you or your employer. They are there to find a way to resolve the dispute which is acceptable to both sides. </p>

<p>The conciliator will try to talk to both you and your employer to understand fully what the dispute is about and what the strengths and weaknesses of the case are for both sides. </p>

<p>Conciliators will usually do this by phone and may send you updates by email.</p>

<p>Your employer can refuse to take part in conciliation. If that happens you can make a claim to a tribunal. </p>

<p>If you can reach an agreement with your employer through the conciliator, you will sign a written agreement. This is a legal document and once you sign it you can’t later make a claim to a tribunal.</p>

<p>If you can’t reach an agreement you can make a claim to a tribunal. </p>

<p>Make sure you act as quickly as possible before and during conciliation so you don’t miss any deadlines. </p>


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