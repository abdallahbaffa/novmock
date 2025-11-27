<?php // This open the php code section

session_start(); // Start the session
require_once "assets/common.php";

echo "<!DOCTYPE html>"; # essential html line to dictate the page type
echo "<html>"; # opens the html content of the page

echo "<head>"; # opens the head section
echo "<title> Version 1</title>"; # sets the title of the page (web browser tab)
echo "</head>"; # closes the head section of the page

echo "<body>"; # opens the body for the main content of the page.

echo "<div class='container'>";

require_once "assets/topbar.php";
require_once "assets/nav.php";

echo "<div class='content'>";

echo "<br>"; # Making Space

echo "<h2> Rolsa Technologies - User registration system</h2>"; # Sets a h2 heading as a welcome

echo "<p class='content'> Welcome to Rolsa Green Technologies. Please register or login to continue.</p>";
echo usermessage();

echo "</div>";
echo "</div>";

echo "</body>";

echo "</html>";

?>