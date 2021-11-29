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
        $name = $_POST['name'];
        $race = strtoupper($_POST['raca']);
        $forca = $_POST['forca'];
        $intelecto = $_POST['intelecto'];
        $agilidade = $_POST['agilidade'];
        $class = strtoupper($_POST['classe']);
        $pericias = $_POST['pericias'];
        $habilidadesInput = $_POST['habilidades'];
        $habilidades = explode("\n", str_replace("\r", "", $habilidadesInput));
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
            <!-- <h1 class="character-name">Nome do Personagem</h1> -->

            <section class="character-data row">

                <div class="col-20">
                    <div class="row">
                        <img src="./assets/img/race.png" class="character-data-icon">
                        <h1><?php echo ucfirst($race); ?> </h1>
                    </div>

                    <div class="card">
                        <h1>Atributos:</h1>
                        <ul>
                            <li>For: <?php echo $forca; ?></li>
                            <li>Int: <?php echo $intelecto; ?></li>
                            <li>Agi: <?php echo $agilidade ;?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-20">
                    <div class="row">
                        <img src="./assets/img/class.png" class="character-data-icon">
                        <h1><?php echo ucfirst($class);?></h1>
                    </div>

                    <div class="card">
                        <h1>Perícias:</h1>
                        <ul>
                            <?php
                                foreach($pericias as $pericia){
                                    echo "<li>$pericia</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-20">
                    <div class="row">
                        <img src="./assets/img/level.png" class="character-data-icon">
                        <h1>Nível: 1</h1>
                    </div>

                    <div class="card">
                        <h1>Habilidades:</h1>

                        <?php
                            $count = 0;
                            while($count < count($habilidades)){
                        ?>
                        
                        <details>
                            <summary><?php echo $habilidades[$count]; ?></summary>
                            <p><?php echo $habilidades[$count+1]; ?></p>
                        </details>

                        <?php $count += 2;} ?>
                    </div>
                </div>

                <div class="img-personagem col-40">
                    <img src="./assets/img/<?php echo "$race/$race-$class.png"; ?>" alt="">
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