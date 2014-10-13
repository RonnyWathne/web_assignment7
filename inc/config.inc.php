<?php

/** 
 * Config file
 */

// making sure errors are displayed
ini_set("display_errors", 1);
error_reporting(E_ALL);

define("COURSE_CODE", "DAT310");
define("COURSE_NAME", "Web programming");

define("ADMIN_USER", "admin");
define("ADMIN_PASSWORD", "MyAdmin");

// @todo
// EDIT THE SETTINGS BELOW

// Smarty installation path
define("SMARTY_PATH", "c:\wamp\www\Smarty-3.1.19");

// Project dir
define("PROJECT_DIR", "c:\wamp\www\dat310-signup\RonnyWathne-assignment-6");

// MySQL settings
define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASSWORD", "1234");
define("MYSQL_DB", "dat310");

?>
