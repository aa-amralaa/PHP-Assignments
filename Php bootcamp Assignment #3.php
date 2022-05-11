<?php
// PHP Bootcamp Assignments 13-19
#Elzero ♥
echo ("<h1> PHP Bootcamp Assignments 13-19 </h1>");
echo ("<h2> Elzero ♥ </h2>");
echo ("<p>=====================================================</p>");
#=====================================================================
?>
<!DOCTYPE html>
<!-- Assignment #1 -->
<?php
echo($username = "El-Zero Courses");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo($username);?>>
    <title>Welcome To <?php echo($username);?></title>
</head>
<body>
    <h1><?php echo($username);?></h1>
    <p>Here In <?php echo($username);?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo($username);?> Is That What You Need.</div>
    <footer>All Right Reserved To <?php echo($username);?></footer>
    <p>********************************************************************</p>
</body>
</html>
<?php
// Assignment #2
$name = "elzero";
$$name = "Web";
echo ($$name);
echo ("<br>");
echo ("${$name}");
echo ("<br>");
echo ($elzero);
echo ("<br>");
echo $$name;
echo ("<br>");
echo $elzero;
echo ("<br>");
echo "${$name}";
echo ("<br>");
echo ("$name ${$name}");
echo ("<br>");
echo "$name ${$name}";
echo ("<p>********************************************************************</p>")
?>
<?php
// Assignment #3
$a = 200;
$b = &$a;
$a = 100;
echo $b;
echo ("<p>********************************************************************</p>")
?>
<?php
// Assignment #4
#Use This Under Predefined Variable To Show Server info.
# echo ("<pre>");
# print_r($_SERVER);
# echo ("</pre>");
echo $_SERVER["CONTEXT_DOCUMENT_ROOT"];
echo ("<br>");
echo $_SERVER["HTTP_HOST"];
echo ("<br>");
echo $_SERVER["SystemRoot"];
echo ("<br>");
echo $_SERVER["OPENSSL_CONF"];
echo ("<br>");
echo ("<p>********************************************************************</p>")
?>
<?php
echo ("php reserved keywords in code comment");
// Assignment #5
/* $keywords = array('__halt_compiler', 'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'namespace', 'new', 'or', 'print', 'private', 'protected', 'public', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor');*/
/*$predefined_constants = array('__CLASS__', '__DIR__', '__FILE__', '__FUNCTION__', '__LINE__', '__METHOD__', '__NAMESPACE__', '__TRAIT__'*/
echo ("<p>********************************************************************</p>")
?>
<?PHP
echo __LINE__;
echo ("<br>");
echo __FILE__;
echo ("<br>");
echo __DIR__;
echo ("<br>");
?>