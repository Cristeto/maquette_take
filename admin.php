<?php
require 'header.php';?>
<div class="row">
<div class="col-3">
<?php require 'sidebar.php';?>
</div>
<div class="col-9">
<?php if (isset($_GET['voir']))
require 'article.php';
?>
</div>
</div>
<?php
require 'footer.php';
?>