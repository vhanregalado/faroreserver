<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- important meta tag for responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/png">

    <title>Farore Home Server</title>

    <!-- core links -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/semantic_ui/semantic.min.css" />
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/semantic_ui/semantic.min.js"></script>

    <!-- custom links -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/base_style.css" />
    <style rel="stylesheet" type="text/css">
        
    </style>
</head>
<body>  

    <!-- sidebar menu -->
    <div class="ui sidebar inverted vertical menu my-sidebar">
        <div class="header item">
            <img src="<?php echo base_url()?>assets/images/nimbuscore_logo.png">
        </div>
       
        <a class="item">
            Home
        </a>
        <a class="item">
            Features
        </a>
        <a class="item">
            About
        </a>
        <a class="item">
            Contact
        </a>
    </div>

    <div class="pusher">

        <!-- vertical header menu-->
        <div class="ui top attached inverted menu main-menu">
            <a class="toggle-sidebar item">
                <i class="sidebar icon"></i>
            </a>
            
            <div class="right menu">
                <a class="ui item">
                <i class="user icon"></i>
                    login
                </a>
            </div>
                        
        </div>

        <div class="ui attached main-content">
            
            <div class="dashboard">
                <div class="ui jumbotron">
                    <div class="ui text container">
                        <h1 class="ui inverted header">Welcome to Faroreserver</h1>
                        <h2 class="ui inverted header">home database and web server</h2>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    
    </div>   
    
    <script>
        $(document).ready(function(){

            // mobile_desktop();

            $('.toggle-sidebar').click(function(){
                $('.my-sidebar').sidebar('show');
            });         

        });
        // function mobile_desktop(){

        //     var window_width = $(window).width();

		// 	if ($(window).width() < 1200) {
		// 		//mobile or tablet
				
		// 		$('.my-sidebar').sidebar('hide');

		// 	}
		// 	else {
		// 		//desktop				
		// 		$('.my-sidebar').sidebar('show');
		// 	}            
		// }

    </script>

</body>
</html>