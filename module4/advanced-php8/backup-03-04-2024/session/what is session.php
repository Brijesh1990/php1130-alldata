<?php 
what is session in php ?
  A session is super global variables i.e used to stored temprory information one page to another page
  A session is stored data on server side
  A session in used Login | Logout 
  A session is used to stored a data and used one page to another page on server side 

session function ?
// how to start session  
a) session_start()
// how to stored informations in session 
b) $_SESSION["id"];
   $_SESSION["name"];
   
c) how to unset session from page 
   unset($_SESSION["id"])
   unset($_SESSION["name"])
   
d) how to destroy a session 
  session_destroy()
?>