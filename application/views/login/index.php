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
        body > .grid {
            height: 100%;
        }
        .top-logo {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
</head>
<body>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui center aligned icon top-logo header">
                <i class="circular server icon"></i>
                System Login
            </h2>
            <div class="ui fluid blue test button">test</div>
            <br />            
        </div>
        
    </div>   
    
    <script>
        $(document).ready(function(){
            $('.test').click(function(){                
                $(this).addClass('loading disabled');                
            });

        });
    </script>

</body>
</html>