<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projeggt Developers, crowdfunding and tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="shortcut icon" href="//www.ucarecdn.com/098ab666-a2cd-4510-9e38-1aae5d091300/16x16.png" />
	<link rel="apple-touch-icon" href="//www.ucarecdn.com/19098972-aba3-46fd-8eb9-5464037ae902/128x128.png" />
	
    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
    </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
        	
          
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/pggtAPI-0.3.1.pdf">API Docs</a></li>
          <li><a href="https://github.com/Projeggt/" target="_blank">GitHub</a></li>
          

        </ul>
        <h3 class="muted"><img src="//www.ucarecdn.com/19098972-aba3-46fd-8eb9-5464037ae902/128x128.png" width="64" class="logo-landing" alt="logo"> Projeggt Developers</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Next step</h1>
        <p class="lead">Discover our API</p>
        <p><a class="btn btn-large btn-success" href="/pggtAPI-0.3.1.pdf">Download API Docs (pdf)</a></p>
        <p><b>Version 0.3.1 (03/01/2014) | <a href="#changelog" role="button" data-toggle="modal">Changelog</a></b></p>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Projects and communities</h4>
          <p>Your campaigns in any ecosystem by one GET.</p>

          <h4>User profiles</h4>
          <p>Only public info of your profile in any place.</p>
          
		  <h4>Apps</h4>
          <p>Create & discover apps which use API.</p>
        </div>

        <div class="span6">
          <h4>Projeggt on GitHub</h4>
          <p>Get & explore code and examples on <a href="https://github.com/Projeggt/" target="_blank">GitHub</a>.</p>

          <h4>Latest versions</h4>
          <p>Incremental API.</p>
		  
		  <h4>Crowdfunding & Developers</h4>
          <p>Crowdfunding and technology.</p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Projeggt <?php echo date('Y'); ?></p>
      </div>

    </div> <!-- /container -->
	
	 
	<!-- Modal -->
	<div id="changelog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">API Changelog</h3>
	  </div>
	  <div class="modal-body">
	  	<p>Version 0.3.1 (03/01/2014)</p>
	    <ul>
	    <li>Bugs fixed on architecture</li>
	
	    </ul>
	    
	  	<p>Version 0.3 (03/01/2014)</p>
	    <ul>
	    <li>Added new object: user</li>
		<li>Added new object: stats</li>
		<li>Bugs fixed</li>
	    </ul>

	  	<p>Version 0.2 (02/01/2014)</p>
	    <ul>
	    <li>Added new object: pages</li>
	    <li>Projects updated with pages support</li>
	    <li>Fixed number types</li>
	    <li>Other changes on API Docs</li>
	    </ul>
	  	
	    <p>Version 0.1.1 (30/12/2013)</p>
	    <ul>
	    <li>Added ID of each project</li>
	    <li>Added support languages with parameter lang</li>
	    <li>Deleted author email</li>
	    </ul>

		<p>Version 0.1 (27/12/2013)</p>
	    <ul>
	    <li>First release</li>
	    <li>Support project objects</li>
	    </ul>

	    
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    
	  </div>
	</div>
   
  </body>
</html>
