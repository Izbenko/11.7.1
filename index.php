<?php
$a0 = 0;
$a1 = 1;
$b0 = 0;
$b1 = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<p>Таблица истинности</p>
<table class="table">
    <thead>
    <tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
    </thead>
    <tbody>
    <tr>
        <td><?= "$a0" ?></td>
        <td><?= "$b0" ?></td>
        <td><?= !"$a0" ?: 0 ?></td>
        <td><?=  ("$a0" || "$b0") ?: 0 ?></td>
        <td><?=  ("$a0" && "$b0") ?: 0 ?></td>
        <td><?=  ("$a0" xor "$b0") ?: 0 ?></td>
    </tr>
    <tr>
        <td><?= "$a0" ?></td>
        <td><?= "$b1" ?></td>
        <td><?= !"$a0" ?: 0 ?></td>
        <td><?=  ("$a0" || "$b1") ?: 0 ?></td>
        <td><?=  ("$a0" && "$b1") ?: 0 ?></td>
        <td><?=  ("$a0" xor "$b1") ?: 0 ?></td>
    </tr>
    <tr>
        <td><?= "$a1" ?></td>
        <td><?= "$b0" ?></td>
        <td><?= !"$a1" ?: 0 ?></td>
        <td><?=  ("$a1" || "$b0") ?: 0 ?></td>
        <td><?=  ("$a1" && "$b0") ?: 0 ?></td>
        <td><?=  ("$a1" xor "$b0") ?: 0 ?></td>
    </tr>
    <tr>
        <td><?= "$a1" ?></td>
        <td><?= "$b1" ?></td>
        <td><?= !"$a1" ?: 0 ?></td>
        <td><?=  ("$a1" || "$b1") ?: 0 ?></td>
        <td><?=  ("$a1" && "$b1") ?: 0 ?></td>
        <td><?=  ("$a1" xor "$b1") ?: 0 ?></td>
    </tr>
    </tbody>
</table>
<hr>

<?php
$t = true;
$f = false;
$a = 1;
$b = 0;
$c = -1;
$d = "1";
$n = null;
$s = "php";
?>
<p>Гибкое сравнение с помощью ==</p>
<table class="table">
    <thead>
    <tr><th ></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>"1"</th><th>null</th><th>"php"</th></tr>
    </thead>
    <tbody>
    <tr>
        <td style="background: #efefef"><strong>true</strong></td>
        <td><?php var_dump($t == $t); ?></td>
        <td><?php var_dump($t == $f); ?></td>
        <td><?php var_dump($t == $a); ?></td>
        <td><?php var_dump($t == $b); ?></td>
        <td><?php var_dump($t == $c); ?></td>
        <td><?php var_dump($t == $d); ?></td>
        <td><?php var_dump($t == $n); ?></td>
        <td><?php var_dump($t == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>false</strong></td>
        <td><?php var_dump($f == $t); ?></td>
        <td><?php var_dump($f == $f); ?></td>
        <td><?php var_dump($f == $a); ?></td>
        <td><?php var_dump($f == $b); ?></td>
        <td><?php var_dump($f == $c); ?></td>
        <td><?php var_dump($f == $d); ?></td>
        <td><?php var_dump($f == $n); ?></td>
        <td><?php var_dump($f == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>1</strong></td>
        <td><?php var_dump($a == $t); ?></td>
        <td><?php var_dump($a == $f); ?></td>
        <td><?php var_dump($a == $a); ?></td>
        <td><?php var_dump($a == $b); ?></td>
        <td><?php var_dump($a == $c); ?></td>
        <td><?php var_dump($a == $d); ?></td>
        <td><?php var_dump($a == $n); ?></td>
        <td><?php var_dump($a == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>0</strong></td>
        <td><?php var_dump($b == $t); ?></td>
        <td><?php var_dump($b == $f); ?></td>
        <td><?php var_dump($b == $a); ?></td>
        <td><?php var_dump($b == $b); ?></td>
        <td><?php var_dump($b == $c); ?></td>
        <td><?php var_dump($b == $d); ?></td>
        <td><?php var_dump($b == $n); ?></td>
        <td><?php var_dump($b == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>-1</strong></td>
        <td><?php var_dump($c == $t); ?></td>
        <td><?php var_dump($c == $f); ?></td>
        <td><?php var_dump($c == $a); ?></td>
        <td><?php var_dump($c == $b); ?></td>
        <td><?php var_dump($c == $c); ?></td>
        <td><?php var_dump($c == $d); ?></td>
        <td><?php var_dump($c == $n); ?></td>
        <td><?php var_dump($c == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>"1"</strong></td>
        <td><?php var_dump($d == $t); ?></td>
        <td><?php var_dump($d == $f); ?></td>
        <td><?php var_dump($d == $a); ?></td>
        <td><?php var_dump($d == $b); ?></td>
        <td><?php var_dump($d == $c); ?></td>
        <td><?php var_dump($d == $d); ?></td>
        <td><?php var_dump($d == $n); ?></td>
        <td><?php var_dump($d == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>null</strong></td>
        <td><?php var_dump($n == $t); ?></td>
        <td><?php var_dump($n == $f); ?></td>
        <td><?php var_dump($n == $a); ?></td>
        <td><?php var_dump($n == $b); ?></td>
        <td><?php var_dump($n == $c); ?></td>
        <td><?php var_dump($n == $d); ?></td>
        <td><?php var_dump($n == $n); ?></td>
        <td><?php var_dump($n == $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>"php"</strong></td>
        <td><?php var_dump($s == $t); ?></td>
        <td><?php var_dump($s == $f); ?></td>
        <td><?php var_dump($s == $a); ?></td>
        <td><?php var_dump($s == $b); ?></td>
        <td><?php var_dump($s == $c); ?></td>
        <td><?php var_dump($s == $d); ?></td>
        <td><?php var_dump($s == $n); ?></td>
        <td><?php var_dump($s == $s); ?></td>
    </tr>
    </tbody>
</table>
<hr>

<p>Жёсткое сравнение с помощью ===</p>
<table class="table">
    <thead>
    <tr><th ></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>"1"</th><th>null</th><th>"php"</th></tr>
    </thead>
    <tbody>
    <tr>
        <td style="background: #efefef"><strong>true</strong></td>
        <td><?php var_dump($t === $t); ?></td>
        <td><?php var_dump($t === $f); ?></td>
        <td><?php var_dump($t === $a); ?></td>
        <td><?php var_dump($t === $b); ?></td>
        <td><?php var_dump($t === $c); ?></td>
        <td><?php var_dump($t === $d); ?></td>
        <td><?php var_dump($t === $n); ?></td>
        <td><?php var_dump($t === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>false</strong></td>
        <td><?php var_dump($f === $t); ?></td>
        <td><?php var_dump($f === $f); ?></td>
        <td><?php var_dump($f === $a); ?></td>
        <td><?php var_dump($f === $b); ?></td>
        <td><?php var_dump($f === $c); ?></td>
        <td><?php var_dump($f === $d); ?></td>
        <td><?php var_dump($f === $n); ?></td>
        <td><?php var_dump($f === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>1</strong></td>
        <td><?php var_dump($a === $t); ?></td>
        <td><?php var_dump($a === $f); ?></td>
        <td><?php var_dump($a === $a); ?></td>
        <td><?php var_dump($a === $b); ?></td>
        <td><?php var_dump($a === $c); ?></td>
        <td><?php var_dump($a === $d); ?></td>
        <td><?php var_dump($a === $n); ?></td>
        <td><?php var_dump($a === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>0</strong></td>
        <td><?php var_dump($b === $t); ?></td>
        <td><?php var_dump($b === $f); ?></td>
        <td><?php var_dump($b === $a); ?></td>
        <td><?php var_dump($b === $b); ?></td>
        <td><?php var_dump($b === $c); ?></td>
        <td><?php var_dump($b === $d); ?></td>
        <td><?php var_dump($b === $n); ?></td>
        <td><?php var_dump($b === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>-1</strong></td>
        <td><?php var_dump($c === $t); ?></td>
        <td><?php var_dump($c === $f); ?></td>
        <td><?php var_dump($c === $a); ?></td>
        <td><?php var_dump($c === $b); ?></td>
        <td><?php var_dump($c === $c); ?></td>
        <td><?php var_dump($c === $d); ?></td>
        <td><?php var_dump($c === $n); ?></td>
        <td><?php var_dump($c === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>"1"</strong></td>
        <td><?php var_dump($d === $t); ?></td>
        <td><?php var_dump($d === $f); ?></td>
        <td><?php var_dump($d === $a); ?></td>
        <td><?php var_dump($d === $b); ?></td>
        <td><?php var_dump($d === $c); ?></td>
        <td><?php var_dump($d === $d); ?></td>
        <td><?php var_dump($d === $n); ?></td>
        <td><?php var_dump($d === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>null</strong></td>
        <td><?php var_dump($n === $t); ?></td>
        <td><?php var_dump($n === $f); ?></td>
        <td><?php var_dump($n === $a); ?></td>
        <td><?php var_dump($n === $b); ?></td>
        <td><?php var_dump($n === $c); ?></td>
        <td><?php var_dump($n === $d); ?></td>
        <td><?php var_dump($n === $n); ?></td>
        <td><?php var_dump($n === $s); ?></td>
    </tr>
    <tr>
        <td style="background: #efefef"><strong>"php"</strong></td>
        <td><?php var_dump($s === $t); ?></td>
        <td><?php var_dump($s === $f); ?></td>
        <td><?php var_dump($s === $a); ?></td>
        <td><?php var_dump($s === $b); ?></td>
        <td><?php var_dump($s === $c); ?></td>
        <td><?php var_dump($s === $d); ?></td>
        <td><?php var_dump($s === $n); ?></td>
        <td><?php var_dump($s === $s); ?></td>
    </tr>
    </tbody>
</table>
<p>Оператор сравнения == сравнивает значения двух операндов, а оператор сравнения === сравнивает значение и тип операндов.</p>

</body>
</html>
