<?php
/* n PHP, both require and include are used to include external files into your PHP script, but they have a key difference: */
/* require:
require is used to include a file, and it is considered a critical part of your script.
 If the file specified in require is not found or encounters an error during inclusion, 
 it will result in a fatal error. 
 This means that if the included file cannot be found or has an issue, the entire script will terminate.
Use require when you want to include a file that your script absolutely depends on for its functionality. */
require './swap.php';
?>
<?php
/* include:
include is used to include a file as well, but it is less strict compared to require. 
If the file specified in include is not found or encounters an error,
it will result in a warning, but the script will continue to execute.
Use include when you want to include a file that is not essential for the script to function, 
and you want the script to continue running even if the file is missing or has issues */
include 'header.php';

/*  In summary, the primary difference between require and include is how they handle errors related to file inclusion.
 require is more strict and results in a fatal error, 
 while include is less strict and generates a warning but allows the script to continue running.
 Choose the one that best suits your needs based on the importance of the included file to your script's functionality. */

?>