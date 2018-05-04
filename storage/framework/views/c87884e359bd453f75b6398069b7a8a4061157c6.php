<?php $__env->startSection('content'); ?>
    <div class="title m-b-md" style="margin-top: 30px;">
        <?php echo e(config('app.name')); ?>

    </div>

    <div class="m-b-md" >
        Sample users:<br/>
        Admin user: kushwahakrishna03@gmail.com / password: krishna<br/>
        Demo user: kushwahakush1991@gmail.com.com / password: radhey
    </div>
    <div>
      <center><p>
        <center><h3>About Our Company</h3></center>

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br> totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui<br> ratione voluptatem sequi nesciunt.

Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, <br>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

Ut enim ad minima veniam, quis nostrum <br>exercitationem ullam corporis susscipit laboriosam<p></center>
</div>
<div>
  <center><p>
    <center><h3>Product Our Company</h3></center>

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br> totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui<br> ratione voluptatem sequi nesciunt.

Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, <br>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

Ut enim ad minima veniam, quis nostrum <br>exercitationem ullam corporis susscipit laboriosam<p></center>
</div>
<div>
  <center><p>
    <center><h3>feature Our Company</h3></center>

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br> totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui<br> ratione voluptatem sequi nesciunt.

Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, <br>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

Ut enim ad minima veniam, quis nostrum <br>exercitationem ullam corporis susscipit laboriosam<p></center>
</div>
<div>
  <center><p>
    <center><h3>member area Our Company</h3></center>

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br> totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui<br> ratione voluptatem sequi nesciunt.

Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, <br>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

Ut enim ad minima veniam, quis nostrum <br>exercitationem ullam corporis susscipit laboriosam<p></center>
</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row-fluid">
        <div class="span8">
        	<iframe width="80%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
    	</div>

      	<div class="span4">
    		<h2>Snail mail</h2>
    		<address>
    			<strong>Hythe Window Cleaning</strong><br>
    			15 Springfield Way<br>
    			Hythe<br>
    			Kent<br>
    			United Kingdon<br>
    			CT21 5SH<br>
    			<abbr title="Phone">P:</abbr> 01234 567 890
    		</address>
    	</div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>