<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- important meta tag for responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Farore Home Server</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/semantic_ui/semantic.min.css" />
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/semantic_ui/semantic.min.js"></script>
    <style rel="stylesheet" type="text/css">
        
    </style>
</head>
<body>  

    <!-- sidebar menu -->
    <div class="ui vertical invertered sticky menu fixed">
        <div class="header item">
            Web System
        </div>
        <a class="item">
        1
        </a>
        <a class="item">
        2
        </a>
        <a class="item">
        3
        </a>
    </div>

    <div class="pusher">

        <!-- vertical header menu-->
        <div class="ui block header top segment right aligned middle aligned">
                     
        </div>
    
    </div>   
    
    <script>
        $(document).ready(function(){

           $('.ui.sidebar').sidebar('show');

        });
    </script>

</body>
</html>