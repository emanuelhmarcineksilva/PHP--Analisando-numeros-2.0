<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
    <main> <!-- Quando vc escreve main aparece dois e para o php devese clicar no que tem uma chave de fenda ao lado -->
        <?php 
        $num = $_POST['n'] ?? 0;

        echo "<p>Analizando o número <b>" . number_format($num, 3, ",", ".") . "</b>:</p>";

        $int = (int) $num; // Esse (int) pega o número inteiro
        $fra = $num - $int;

        echo "<ul><li> A inteira é <b>" . number_format($int, 0, ",", ".") ."</b></li>";
        echo "<li> A fracionada é <b>" . number_format($fra, 3, ",", ".") ."</b></li></ul>";

        ?>
        <button onclick="javascript:history.go(-1)" class="voltar">Voltar</button>
    </main></section>
</body>

</html>
