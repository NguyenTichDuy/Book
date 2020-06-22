<?php
    class Helper
    {
        function get_url($url = '')
        {
            return 'http://' . $_SERVER['HTTP_POST'] . $url;
        }
        function redirect($url)
        {
            header("Location:{$url}");
            exit();
        }
        function redirect_js($url)
        {
            if ($url)
            {
                echo '<script>window.location.href="'.$url.'"</script>';
            }
        }
        function input_post($inputname)
        {
            return isset($_POST[$inputname]) ? trim($_POST[$inputname]) : false;
        }
        function input_get($inputname)
        {
            return isset($_GET[$inputname]) ? trim($_GET[$inputname]) : false;
        }
        
    }