<div class="home">
            
    <div class="jumbotron">        
        <h1 class="ui inverted header">
            <i class="large icons">                   
                <i class="home inverted icon"></i>
            </i>                
            Home
        </h1>
    </div>

    <div class="ui container">       
               
        <div class="ui stackable grid">
            <div class="two column row">
                <div class="column">
                    <br />
                    <div class="ui segment">
                        <h1 class="ui header">
                        <i class="large icons">
                            <i class="server icon"></i>
                        </i>
                        
                            <?php 
                            $hostname =  php_uname('n');
                            echo $hostname;
                            ?>
                        </h1>                        
                    </div>
                </div>
            </div>
            
            <div class="two column row">

                <div class="column">
                    
                    <h2 class="ui dividing header">News Feed</h2>

                    <img class="ui segment image" src="<?php echo base_url()?>assets/images/sample_big.png">

                    <p align="justify">                    
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a laoreet elit. Fusce erat metus, tempor eget velit eget, gravida pulvinar augue. In eget massa urna. Pellentesque eleifend ultrices eros vel placerat. Fusce non urna ante. Sed lacinia gravida nulla, sed commodo odio ultrices eget. Integer at viverra odio, sit amet accumsan mi. Nulla convallis libero a justo interdum, non tincidunt velit fringilla. Pellentesque porttitor elit et tortor facilisis dictum. Nam scelerisque mi ut diam egestas congue. Sed dapibus convallis felis id scelerisque. Nullam non orci nisi. In ultricies dolor nec mollis congue. Ut vel diam sit amet arcu aliquet tempor eget eget sapien. Aenean dignissim magna in ultrices cursus. Aenean suscipit ultrices mi, nec porttitor mauris iaculis vel.
                    </p>

                </div>

                <div class="column">

                    <h2 class="ui dividing header">Articles</h2>
                
                    <img class="ui segment image" src="<?php echo base_url()?>assets/images/sample_big.png">

                    <p align="justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a laoreet elit. Fusce erat metus, tempor eget velit eget, gravida pulvinar augue. In eget massa urna. Pellentesque eleifend ultrices eros vel placerat. Fusce non urna ante. Sed lacinia gravida nulla, sed commodo odio ultrices eget. Integer at viverra odio, sit amet accumsan mi. Nulla convallis libero a justo interdum, non tincidunt velit fringilla. Pellentesque porttitor elit et tortor facilisis dictum. Nam scelerisque mi ut diam egestas congue. Sed dapibus convallis felis id scelerisque. Nullam non orci nisi. In ultricies dolor nec mollis congue. Ut vel diam sit amet arcu aliquet tempor eget eget sapien. Aenean dignissim magna in ultrices cursus. Aenean suscipit ultrices mi, nec porttitor mauris iaculis vel.
                    </p>

                </div>

            </div>
            
        </div>                    
        
    </div>

    <script>

        // $(document).ready(function(){
            
        //     $('.item.home').addClass('active');
        //     $('.item.features').removeClass('active');
        //     $('.item.about').removeClass('active');
        //     $('.item.about').removeClass('active');

        // })

    </script>    


</div>