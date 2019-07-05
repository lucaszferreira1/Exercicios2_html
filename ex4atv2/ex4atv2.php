<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Atividade Prática 04 - Seletor de Conta</title>
</head>
<body>
    <?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$operacao=$_POST['radio'];
if ($operacao=="Adicionar"){
    $resultado=$n1+$n2;
}
else if ($operacao=="Subtrair"){
    $resultado=$n1-$n2;
}
else if ($operacao=="Dividir"){
    $resultado=$n1/$n2;
}
else{
    $resultado=$n1*$n2;
}

echo "Resultado do cálculo:$resultado"
    ?>
    
</body>
</html>