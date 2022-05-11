<?php
// PHP Bootcamp Assignments 6-12
#Elzero ♥
echo ("<h1> PHP Bootcamp Assignments 6-12 </h1>");
echo ("<h2> Elzero ♥ </h2>");
echo ("<p>=====================================================</p>");
#=====================================================================
?>
<?php
//Assignment #1
echo (int)15.2+(int)14.7+(10.5+10.5);
echo("<br>");
echo gettype ((int)15.2+(int)14.7+(int)(10.5+10.5));
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #2
echo gettype(100);
echo("<br>");
echo gettype((int)100);
echo("<br>");
var_dump(100);
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #3
echo ('Hello "Elzero"\\\\""" we love " $$php"');
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #4
echo nl2br ("We
            Love
            Elzero
            Web
            School");
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #5
echo <<<'multilink'
<ul>
    <li>Hello "'Elzero'"</li>
    <li>We love $programming$ </li>
    <li>languages Specially"php"</li>
</ul>
multilink;
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #6
$programming = "programming";
echo <<<"code"
Hello \\PHP\\
We Love $programming
code;
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #7
echo (bool) "Hello PHP";
echo '<br>';
echo gettype ((int)"Hello PHP");
echo("<p>************************************************</p>");
#------------------------------------------------------
?>
<?php
//Assignment #8
echo("<pre>");
print_r([
  "FrontEnd"=>[
    "HTML",
    "CSS",
    "JS"=>"Array"
  ],
  "Vuejs"=>[
    2=>"v2",
    3=>"v3"
  ],
  "0"=>"Reactjs",
  "1"=>"Svelte"
  ]);
print_r([
  "BackEnd"=>[
    "PHP",
    "MYSQL",
    "Security"
  ],
  "0"=>"Git",
  "1"=>"Github",
  "Testing"=>[
  "Unit Testing",
  "End To End",
  "Integration"
  ]
]);
echo("</pre>");
echo("<p>************************************************</p>");
#------------------------------------------------------
?>