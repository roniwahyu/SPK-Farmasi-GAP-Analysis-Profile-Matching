			
			<!-- Bootstrap CSS -->
			<link href="<?php echo assetsurl(); ?>css/bootstrap.min.css" rel="stylesheet" media="all">
			<!-- <link href="<?php //echo assetsurl(); ?>css/bootstrap-paper.min.css" rel="stylesheet" media="all"> -->
			<link href="<?php echo assetsurl(); ?>css/custom.css" rel="stylesheet" media="all">
			<link href="<?php echo assetsurl(); ?>css/print.css" rel="stylesheet" media="print">
			
			<!-- jQuery -->
			<script src="<?php echo assetsurl(); ?>js/jquery.min.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="<?php echo assetsurl(); ?>js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo assetsurl('css') ?>/datepicker/datepicker3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo assetsurl('js') ?>/datepicker/bootstrap-datepicker.js">
        <link rel="stylesheet" type="text/css" href="<?php echo assetsurl('js') ?>/datepicker.js">
			<script type="text/javascript">
				    $(document).ready(function() {	
				    $('button.print').click(function() {
					    window.print();
					    	return false;
					    });
				    });
			</script>
			<style type="text/css">
			@media print
				{    
				    .no-print, .no-print *
				    {
				        display: none !important;
				    }
				}
			</style>
		</body>
	</html>	