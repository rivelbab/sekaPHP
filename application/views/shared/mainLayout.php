<!DOCTYPE html>
<html>
	<head>
		<meta name="charset" content="utf-8">
		<title><?php echo $cfg['site']['title']; ?></title>

		<meta name="author" content="rivel babindamana">

		<!-- ===== main css files ==== -->
		<link rel="stylesheet" href="public/css/main.css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>
			var isMobile = function() {
			      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
			   };

			$(document).ready(function() {
				if(!isMobile()){
					$('#main').css('display', 'none');
					$('#main').fadeIn(1000);
				}
			});
		</script>

		<!-- ===== include specific head data here ==== -->
		<?php $this->renderSection('head');?>
	</head>
	<body>
		<!-- Header -->
		<div id="header">
			<?php include(Helpers::UrlContent('~/views/shared/header.php')); ?>
		</div>

		<!-- Main -->
		<div id="main">
		<?php $this->renderBody();?>
		</div>

		<!-- Footer -->
		<div id="footer">
			<?php $this->renderSection('foot');?>
			<?php include(Helpers::UrlContent('~/views/shared/footer.php')); ?>
		</div>
	</body>
</html>
