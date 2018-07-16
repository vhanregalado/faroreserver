<?php
    function menu_active_toggler($menu_name = '' ,$this_page = ''){
        if(!empty($menu_name) && !empty($this_page)){
            if($menu_name === $this_page){
                return 'active';
            }else{
                return '';                
            }            
        }else{
            return '';
        }

    }

?>