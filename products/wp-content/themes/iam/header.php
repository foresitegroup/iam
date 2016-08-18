<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

$PageTitle = "Products"; // This won't display, but it's needed for formatting

include "../header.php";
?>