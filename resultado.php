<?php
$nota_a = $_POST['nota1'];
$nota_b = $_POST['nota2'];
$nota_c = $_POST['nota3'];
$media = ($nota_a + $nota_b + $nota_c) / 3;
if ($media >=7){
    print_r("Você  foi APROVADO com média: ".$media. " pontos.");
}else{
    print_r("Você foi reprovado com média: ".$media. " pontos.");
}
