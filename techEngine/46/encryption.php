<?php

 /* list of hashing algorithms in php
foreach (hash_algos() as $key => $value) {
	echo $value."<br>";
}

die();*/

$user_password ="Tech123&#"; // lets say user entered this password

/*
--------------------------------- 
 function used  ---------> md5()
 length         ---------> 32 characters
 use scenario   ---------> to generate temporary key 
                           eg. in case of account activation email send to user
                              when user signs up to your website  
 not to be used ---------> password hashing, because it can be easily cracked 
                           by brute forced.  

---------------------------------
*/        
echo "<h1>MD5 encryption</h1> <br>";
echo 'MD5 encrypted value is :<h2>'.md5($user_password).'</h2><br>';

/*
--------------------------------- 
 function used  ---------> sha1()
 length         ---------> 40 characters
 use scenario   ---------> to generate temporary key, password hashing(not recomended) 
                           eg. in case of account activation email send to user
                              when user signs up to your website  
 not to be used ---------> password hashing, because it can be easily cracked 
                           by brute forced.  

---------------------------------
*/

echo "<h1>SHA1 encryption</h1> <br>";
echo 'SHA1 encrypted value is :<h2>'.sha1($user_password).'</h2><br>';

/*
--------------------------------- 
 function used    ---------> password_hash()
 length           ---------> 60 characters
 use scenario     ---------> password hashing(recomended) 
                             
 not to be used   ---------> to generate temporary key, because it will be slow  

 algorithm        ---------> PASSWORD_DEFAULT , this implements bcrypt algorithm.
                             PASSWORD_BCRYPT  , this implements CRYPT_BLOWFISH algorithm.

---------------------------------
*/

echo "<h1>Password Hash Function encryption</h1> <br>";
echo password_hash($user_password, PASSWORD_DEFAULT).'<br>';




$user_password_db_hashed='$y$10$CJrAS9z3IFcrxAahNpSgJODhAhlDuTYeSmmF1MsaTMRJz5PKpKR06';

if (password_verify($user_password,$user_password_db_hashed)) {
	echo "Access Granted";
}else echo "Access Denied";


?>