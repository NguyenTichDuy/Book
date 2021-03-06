<base href="http://localhost:80/book/admin/">
<link rel="stylesheet" href="../Public/Css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="../Public/Css/util.css">
<link rel="stylesheet" href="../Public/Fontawesome/css/all.css">
<link rel="stylesheet" href="../Public/Css/jquery-ui.min.css">
<link rel="stylesheet" href="../Public/Css/animate.css">
<link rel="stylesheet" href="../Public/Css/icons.css">
<link rel="stylesheet" href="../Public/Css/animsition.min.css">
<link rel="stylesheet" href="../Public/Css/animsition.css">
<link rel="stylesheet" href="css/Login.css">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="../Public/Css/bootstrap-progressbar-3.3.4.min.css">


<script src="../Public/Js/jquery-3.4.1.min.js"></script>
<script src="../Public/Js/bootstrap-4.3.1.js"></script>
<script src="../Public/Js/popper.min.js"></script>
<script src="../Public/Js/jquery.validate.js"></script>
<script src="../Public/Js/jquery-ui.min.js"></script>
<script src="../Public/Js/animsition.min.js"></script>
<script src="../Public/Js/animsition.js"></script>
<script src="../Public/Js/bootstrap-progressbar.min.js"></script>

<script src="js/admin.js"></script>
<?php
    $modules = isset($_GET['m']) ? $_GET['m'] : '';
    $action = isset($_GET['a']) ? $_GET['a'] : '';

    if (empty($modules) || empty($action))
    {
        $modules = 'Common';
        $action = 'login';
    }

    $path = 'Modules/' . $modules . '/' .$action . '.php';

    if (file_exists($path))
    {
        include_once('../Classes/DA/Database.php');
        include_once('../Classes/DA/Session.php');
        include_once('../Classes/DA/role.php');
        include_once('../Classes/DA/helper.php');
        include_once($path);
    }
    else
    {
        header('Location:404.php');
    }