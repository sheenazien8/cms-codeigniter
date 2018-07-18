<!doctype html>
<html class="no-js h-100" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
        <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/icon.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="<?= base_url() ?>assets/css/shards-dashboards.1.0.0.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/extras.1.0.0.min.css">
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
	<body class="h-100">
		<div class="mx-auto flexbox-container" >
			<div class="row">
				<div class="col-md-12">
					<!-- Input & Button Groups -->
				<div class="card col-md-12">
				  	<div class="card-header border-bottom">
	                	<h6 class="m-0 text-left">Login CMS</h6>
	              	</div>
					<ul class="list-group list-group-flush">
				    	<li class="list-group-item px-3">
				      <form method="POST" action="<?= base_url() ?>user/check_login">
				        <!-- Input Groups -->
				        <div class="input-group mb-3">
				          <div class="input-group input-group-seamless">
				            <span class="input-group-prepend">
				              <span class="input-group-text">
				                <i class="material-icons">person</i>
				              </span>
				            </span>
				            <input type="text" name="username" class="form-control" placeholder="Username" value=""> </div>
				        </div>
				        <div class="input-group mb-3">
				          <div class="input-group input-group-seamless">
				            <span class="input-group-prepend">
				              <span class="input-group-text">
				                <i class="material-icons">lock</i>
				              </span>
				            </span>
				            <input type="password" name="password" class="form-control" placeholder="Password" value=""> 
				            </div>
				        </div>
				        <div class="input-group mb-3">
				          	<div class="input-group input-group-seamless">
				            	<input class="btn btn-outline-secondary" type="submit" value="Login">
				        	</div>
				        </div>
				      </form>
				    	</li>
					</ul>
				</div>
				<!-- / Input & Button Groups -->
				</div>
			</div>
		</div>

	    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js" </script>
	    <script src="<?= base_url() ?>assets/js/button.js" </script>
	    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/Chart.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/shards.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/jquery.sharrre.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/extras.1.0.0.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/shards-dashboards.1.0.0.min.js"></script>
	    <script src="<?= base_url() ?>assets/js/app-blog-overview.1.0.0.js"></script>
  	</body>
</html>