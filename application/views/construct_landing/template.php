<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- important meta tag for responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/png">

    <title>Farore Home Server | <?php echo $page_title; ?></title>

    <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Varela+Round" rel="stylesheet">

    <!-- core links -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/semantic_ui/semantic.min.css" />
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/semantic_ui/semantic.min.js"></script>

    <!-- custom css -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/base_style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/common.css" />
    
</head>
<body>  

    <!-- sidebar menu -->

    <?php $this->load->view('construct_landing/sidebar_menu'); ?>
    

    <div class="pusher">

        <!-- vertical header menu-->

        <?php $this->load->view('construct_landing/top_menu'); ?>        

        <!-- main page content -->

        <div class="ui attached main-content">

            <?php echo $content; ?>
            
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