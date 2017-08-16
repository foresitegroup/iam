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

if (is_front_page()) $Keywords = "investment account manager, investment software, investment portfolio software, investment management, investment account management, portfolio tracker, portfolio management software, personal investment portfolio, stock manager, personal stock monitor, stock tracking software, unified account management, account manager, personal finance software, microsoft money, microsoft money replacement, Quicken, captools, aaii";

include "../header.php";
?>