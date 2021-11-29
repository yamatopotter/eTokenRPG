<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>eToken RPG</title>
</head>

<body>
    <?php 
        $name = $_GET['name'];
    ?>
    <header class="main-header">
        <div class="logo">
            <div class="logo-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <h1>eToken RPG</h1>
        </div>

        <nav>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Criar e-Token</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 class="player-name"><?php echo $name; ?></h1>

        <section class="token-data">
            <h1 class="character-name">Nome do Personagem</h1>

            <section class="character-data row">

                <div class="col-20">
                    <div class="row">
                        <img src="./assets/img/race.png" class="character-data-icon">
                        <h1>Anão</h1>
                    </div>

                    <div class="card">
                        <h1>Atributos:</h1>
                        <ul>
                            <li>For: 22</li>
                            <li>Int: 22</li>
                            <li>Agi: 22</li>
                        </ul>
                    </div>
                </div>

                <div class="col-20">
                    <div class="row">
                        <img src="./assets/img/class.png" class="character-data-icon">
                        <h1>Guerreiro</h1>
                    </div>

                    <div class="card">
                        <h1>Perícias:</h1>
                        <ul>
                            <li>Escalar</li>
                            <li>Escalar</li>
                            <li>Escalar</li>
                        </ul>
                    </div>
                </div>

                <div class="col-20">
                    <div class="row">
                        <img src="./assets/img/level.png" class="character-data-icon">
                        <h1>Nível: 3</h1>
                    </div>

                    <div class="card">
                        <h1>Habilidades:</h1>
                        <details>
                            <summary>Esmagar Crânios</summary>
                            <p>Esmaga um crânio</p>
                        </details>

                        <details>
                            <summary>Nome da Habilidade</summary>
                            <p>Descrição habilidade</p>
                        </details>

                        <details>
                            <summary>Nome da Habilidade</summary>
                            <p>Descrição habilidade</p>
                        </details>

                        <details>
                            <summary>Nome da Habilidade</summary>
                            <p>Descrição habilidade</p>
                        </details>

                        <details>
                            <summary>Nome da Habilidade</summary>
                            <p>Descrição habilidade</p>
                        </details>
                    </div>
                </div>

                <div class="img-personagem col-40">
                    <img src="./assets/img/DWARF/ANÃO - GUERREIRO - MALE..png" alt="">
                </div>
            </section>
        </section>

    </main>

    <footer>
        <p>Todos os direitos reservados à eTokenRPG, 2021.</p>
    </footer>

    <script src="./assets/js/main.js"></script>
</body>

</html>