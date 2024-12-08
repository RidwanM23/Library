<?php
if(!defined('SECURE_ACCESS')){
    die('Direct Access not permitted');
}

if (isset($_SESSION['is_login']) == false)
{
    header("location: /login");
}

include('template/header.php')
?>

<div class="main-content login-panel login-panel-2">
<h3 class="panel-tittle">INI HALAMAN MEMBERSHIP</h3>
</div>

<?php include('template/footer.php');