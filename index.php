<?php require 'vendor/autoload.php'; ?>
<?php use RojekSeo\CloakingGPT; ?>

<?php
// Create a new instance of the CloakingGPT class.
$checker = new CloakingGPT();

// Check if the current request has access.
if (!$checker->hasAccess()) {
    // If access is denied, include the content from the 'demo-fr.php' file.
    include 'demo-fr.php';
} else {
    // If access is granted, include the content from the 'hidden-page.php' file.
    include 'hidden-page.php';
}
?>

