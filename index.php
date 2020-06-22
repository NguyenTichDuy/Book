<base href="http://localhost:80/book/">

<link rel="stylesheet" href="Public/Css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="Public/Css/util.css">
<link rel="stylesheet" href="Public/Fontawesome/css/all.css">
<link rel="stylesheet" href="Public/Css/jquery-ui.min.css">
<link rel="stylesheet" href="Public/Css/animate.css">
<link rel="stylesheet" href="Public/Css/icons.css">

<script src="Public/Js/jquery-3.4.1.min.js"></script>
<script src="Public/Js/bootstrap-4.3.1.js"></script>
<script src="Public/Js/popper.min.js"></script>
<script src="Public/Js/jquery.validate.js"></script>
<script src="Public/Js/jquery-ui.min.js"></script>

<?php
    $modules = isset($_GET['m']) ? $_GET['m'] : '';
    $action = isset($_GET['a']) ? $_GET['a'] : '';

    if (empty($modules) || empty($action))
    {
        $modules = 'Common';
        $action = 'home';
    }

    $path = 'Modules/' . $modules . '/' .$action . '.php';
    
    if (file_exists($path))
    {
        include_once('Classes/DA/Database.php');
        include_once('Classes/DA/Session.php');
        include_once('Classes/DA/Role.php');
        include_once('Classes/DA/Helper.php');
        
        include_once($path);
    }
    else
    {
        header('Location:404.php');
    }
?>