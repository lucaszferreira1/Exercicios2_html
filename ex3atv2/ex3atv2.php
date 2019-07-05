<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Atividade Prática 03 - Seletor de Vinhos</title>
</head>
<body>
    <?php
    $tipo=$_POST['radio'];
    $nome = $_POST['nome'];
    $refeicao =$_POST['refeicao'];

    echo "Obrigado pela sua seleção $nome\n";
    echo "Você realmente aprecia $refeicao\n";
    echo "Especialmente com um bom vinho $tipo\n";
    ?>
    
</body>
</html>