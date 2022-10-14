<?php
    include 'header.php';
?>
<?php
    include 'navigation.php';
?>
<?php
$allowed = array('mainContent', 'book', 'about', 'thank-you'); // add the pagenames you need
$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'mainContent';
if ( in_array($page, $allowed) ){
    include("$page.php");
} else {
    include("404.php");
}
?>
<?php
    include 'footer.php';
?>