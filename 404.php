<!DOCTYPE html>
<html lang="en" id="html-404">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>404 - File or Directory Not Found.</title>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78792118-1', 'auto');
  ga('send', 'pageview');

</script>
	
		<!--  Font Awesome  -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!--  Google Font  -->
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body class="text-center" id="body-404">

    	<div id ="container-404">

        <div class="masthead">
            <?php include("testing---header.php");?>
        </div>

		<div id="content-404">
			<img src="images/404error.png">
			<h1>You broke the internet!!!</h1>
			<p>Just kidding. But the page you're looking for either doesn't exist, got renamed, or is temporarily unvailable.</p>
			<p>Why not head back to our <a href="/">home page</a>?</p>
			<br/><br/><br/>
		</div>
		
		
        
    

    <!--  Site footer  -->
    <footer class="footer">         
        <?php include("testing---footer.php");?>
        
    </footer>
    
    </div> <!-- container -->
	
	<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"jT90m1a8FRh2cN", domain:"learncodinganywhere.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=jT90m1a8FRh2cN" class="noscript" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script>
    	$(document).ready(function() {
    		$('#container-404').fadeIn(2000);		
		});
		
		$(window).ready(function () { $(window).scroll(); });
            $(window).scroll(function () {
                $(".slideanim").each(function () {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + $(window).height()) {
                        $(this).addClass("slide");
                    }
                });
            });
		
    </script>
</body>
</html>
