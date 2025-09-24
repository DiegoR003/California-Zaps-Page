<?php
    include("includes/head.php");
?>
<?
if (isset($_GET)) {
  include_once("php/msg2.php");
}
?>

<body >
    <div id="wrapper" class="header-fixed">
        <div id="page" class="clearfix">
            <?php
                include("includes/header.php");
                include("modules/index.php");
                include("includes/footer.php");
            ?>
        </div>
    </div>
    <?
        include("includes/scripts.php");
    ?>
</body>

</html>