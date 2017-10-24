<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="grey and gold">
<center>
<?php

require_once 'bio2.php';

$s1 = new indentitas  ("irffan","bandung","XI rpl 2","jomblo"    );
$s2 = new indentitas  ("justin","london ","desain  ","berpacaran");
$s3 = new indentitas  ("anke  ","india  ","XI rpl 1","lajang"    );
$s4 = new indentitas  ("laura ","germany","tsm 1   ","menikah"   );
$s5 = new indentitas  ("chiara","jerman ","tkr 2   ","janda"     );
echo  "namaku                 :" .$s1->get_nama()  . '<br>';
echo  "tempat tanggal lahirmu :" .$s1->get_ttl ()  . '<br>';
echo  "kelasmu                :" .$s1->get_kelas ().'<br>';
echo  "status                 :" .$s1->get_status().'<br>'. '<br>';


echo  "namamu                 :" .$s2->get_nama()  . '<br>';
echo  "tempat tanggal lahirmu :" .$s2->get_ttl ()  . '<br>';
echo  "kelasmu                :" .$s2->get_kelas ().'<br>';
echo  "status                 :" .$s2->get_status().'<br>'. '<br>';



echo  "namamu                 :" .$s3->get_nama()  . '<br>';
echo  "tempat tanggal lahirmu :" .$s3->get_ttl ()  . '<br>';
echo  "kelasmu                :" .$s3->get_kelas ().'<br>';
echo  "status                 :" .$s3->get_status().'<br>'. '<br>';


echo  "namamu                 :" .$s4->get_nama()  . '<br>';
echo  "tempat tanggal lahirmu :" .$s4->get_ttl ()  . '<br>';
echo  "kelasmu                :" .$s4->get_kelas ().'<br>';
echo  "status                 :" .$s4->get_status().'<br>'. '<br>';


echo  "namamu                 :" .$s5->get_nama()  . '<br>';
echo  "tempat tanggal lahirmu :" .$s5->get_ttl ()  . '<br>';
echo  "kelasmu                :" .$s5->get_kelas ().'<br>';
echo  "status                 :" .$s5->get_status().'<br>'. '<br>';

?>
</center>
</body>
</html>