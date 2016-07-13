<footer>
	<div class="container">
  		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
  	</div><!-- end container -->
</footer>
 
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="<?php echo base_url() . 'assets/admin/js/bootstrap.min.js' ?>"></script>

<?php echo $before_body; ?>
</body>
 
</html>