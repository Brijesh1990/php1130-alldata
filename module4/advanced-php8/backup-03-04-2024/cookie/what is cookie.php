<?php 
what is cookie in php ?
  A cookie is super global variables i.e used to stored temprory information of users on user broswers
  A cookie is stored data on client side
  A cookie in used stored temporary data on broswers on client side 
  A cookie is not secured 

cookie function ?
// how to set data in cookie  
a) setcookie(name,value,path,expire,time);
   setcookie(name,value,time()+(60*60*24));
// how to stored informations in cookie 
b) $_COOKIE["id"];
   $_COOKIE["name"];
  
d) how to delete cookie from broswer 
  setcookie(name,value,time()-(60*60*24));
?>