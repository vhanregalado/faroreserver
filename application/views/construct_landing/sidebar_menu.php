<div class="ui sidebar inverted vertical menu my-sidebar">
    <div class="header item">
        <img class="ui fluid rounded image" src="<?php echo base_url()?>assets/images/nimbuscore_logo.png">        
    </div>

    <a class="item home <?php echo menu_active_toggler($main_page, 'Home'); ?>" href="<?php echo base_url() ?>landing_page/index">
        Home
    </a>
    <a class="item features  <?php echo menu_active_toggler($main_page, 'Features'); ?>" href="<?php echo base_url() ?>landing_page/features">
        Features
    </a>
    <a class="item about  <?php echo menu_active_toggler($main_page, 'About'); ?>" href="<?php echo base_url() ?>landing_page/about">
        About
    </a>
    <a class="item contact  <?php echo menu_active_toggler($main_page, 'Contact'); ?>" href="<?php echo base_url() ?>landing_page/contact">
        Contact
    </a>
</div>