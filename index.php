<?php
$mensagem = "Bem-vindo ao AgroMap!";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroMap</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/scripts.js" defer></script>
</head>
<body>
    <header>
        <h1><?php echo $mensagem; ?></h1> <!-- Mensagem gerada com PHP -->
    </header>
    
    <main>
        <p>Esta é a sua cadernetinha rural.</p>
    </main>

    <footer>
        <p>&copy; 2024 AgroMap. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
