<?php session_start();

include './scripts/connection.php';


if(isset($_POST['submit'])){

//First instance of tokenizer
/*$username = $_POST['username'];

$token = strtok($username, " ");

while ($token!==false) {
$count= substr_count(substr_compare($username, $token), $token);

echo $count;
echo " ";
     echo "$token<br>";
    
     $token = strtok(" ");*/

//}
//}

//a different way of tokenization
$commands = array('SELECT', 'FROM', 'WHERE', '=', '*', 'OR', 'AND', 'COMMENTS', '*/', 'INSERT', 'UPDATE', 'SLEEP', 'DELETE', 'DROP', 'ALTER' );

$username1 = $_POST['username'];
$username = strtoupper($username1);

echo $username . '<br><br><br>';

foreach ($commands as $tokens) {
     $count = substr_count($username, $tokens);
     echo $tokens. ' '.$count. "<br><br>";
}
}

//Different approach of tokenization
$features  = array(
      array('Commands', 'SELECT', 'DELETE','UPDATE', 'INSERT', 'SLEEP', 'DROP', 'ALTER'),
      array('Punctuations','()', '[]', '{}', '*' ),
      array('Comments', '--', '/*', '#' ),
      array('Comparison', '=', '<', '>', '<=', '=<', '!=', '<>'),
      array('Logical Operators', 'AND', 'NOT', 'OR', 'IN'),
      array('Operators', '/', '+', '-'),
      array('Quotes', '``', '""'),
      array('Identifier', 'tablename', 'columns', 'rows'),
      array('Literal', 'userinput'),
      array('Auxiliary', 'FROM', 'WHERE', 'VALUES', 'LIKE', '%', 'LIMIT', 'INTO', 'SET'),
      array('Location', 'BEGIN', 'END')
 );
$username1 = $_POST['username'];
$username = strtoupper($username1);

echo $username . '<br><br><br>';

foreach ($features as $feature) {
     foreach ($feature as $key => $value) {
         $count1 = substr_count($username, $value);
     echo $value. ' '.$count1. "<br><br>";
     
     }
    
}
 
?>
