<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo | Modelo 1</title>
    <link rel="stylesheet" href="css/modelo1.css">
</head>
<body>
    <main>
        <section class="top">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
            <h1><?= $dados['nome']; ?></h1>
            <p><?= $dados['telefone']; ?></p>
            <p><?=$dados['email'];?></p>
            <p><?=$dados['linkedin'];?></p>
            <p><?=$dados['cidade'];?></p>
            


        </section>


        <section class="meio">
            <h2>Perfil</h2>
            
            <p><?= $dados['resumo']; ?></p>
            <p><?=$dados['habilidades'];?></p>
            
                <h3>Formação</h3>

                <p><?=$dados['instituicao'];?></p>
                <p><?=$dados['curso'];?></p>
                <p><?=$dados['estado2'];?></p>
                <p><?=$dados['data'];?></p>



        
            <div>
                <h4>Experiência Profissionais </h4>
                <p><?=$dados['empresa'];?></p>
                <p><?=$dados['cargos'];?></p>
                <p><?=$dados['datai'];?></p>
                <p><?=$dados['dataf'];?></p>
            </div>       
                                    
        

            <h5>Lingua Estrangeira</h5>

            <p><?=$dados['ingles'];?></p>
            <p><?=$dados['spain'];?></p>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>