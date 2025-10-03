<?php
require_once "Crianca.php";
require_once "Doador.php";

// Instanciando objetos
$crianca = new Crianca("Ana", "ana@email.com", 8, "Ganhar uma bicicleta");
$doador  = new Doador("Carlos", "carlos@email.com", "11999999999", "Bicicleta");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Varal dos Sonhos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="container-header">
            <nav class="nav-menu">
                <ul class="menu-esquerda">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Varal Virtual</a></li>
                    <li><a href="#">Carrinho</a></li>
                    <li><a href="#">Pontos de Coleta</a></li>
                </ul>
                <ul class="menu-direita">
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <section class="apresentacao">
            <h1>Varal dos Sonhos</h1>
            <p class="subtitulo">Demonstração do módulo POO — Criança e Doador</p>

            <!-- Cartinha da Criança -->
            <div class="card">
                <h2>Cartinha da Criança</h2>
                <p><strong>Nome:</strong> <?= $crianca->getNome(); ?></p>
                <p><strong>Idade:</strong> <?= $crianca->getIdade(); ?> anos</p>
                <p><strong>Sonho:</strong> <?= $crianca->getSonho(); ?></p>
                <p><strong>Email:</strong> <?= $crianca->getEmail(); ?></p>
            </div>

            <!-- Dados do Doador -->
            <div class="card">
                <h2>Dados do Doador</h2>
                <p><strong>Nome:</strong> <?= $doador->getNome(); ?></p>
                <p><strong>Telefone:</strong> <?= $doador->getTelefone(); ?></p>
                <p><strong>Presente Apadrinhado:</strong> <?= $doador->getPresente(); ?></p>
                <p><strong>Email:</strong> <?= $doador->getEmail(); ?></p>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>© 2025 Varal dos Sonhos | Desenvolvido com amor 💙</p>
    </footer>
</body>
</html>
