<?php





    $dados = array(
'foto' => $_POST['foto'] ,
   'nome' => $_POST['nome'], 
   'telefone'=> $_POST['telefone'],
    'email' => $_POST['email'], 
    'linkedin' => $_POST['linkedin'],
     'cidade' => $_POST['cidade'], 
     'estado1' => $_POST['estado1'], 
     'resumo' => $_POST['resumo'], 
     'habilidades'=> $_POST['habilidades'],
      'instituicao' => $_POST['instituicao'],
      'curso' => $_POST['curso'],
       'estado2' => $_POST['estado2'],
        'data' => $_POST['data'],
         'date3' => $_POST['data3'],
          'empresa' => $_POST['empresa'],
           'cargos' => $_POST['cargos'], 
           'datai' => $_POST['datai'], 
           'dataf' => $_POST['dataf'], 
           'ingles' => $_POST['ingles'], 
           'spain' => $_POST['spain'],
    ); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo</title>
    <link rel="stylesheet" href="./modelo1.css">
</head>
<body>
    <main> 
        <section class="top">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
           
            <h1><?= $dados['nome'];?></h1>
          <p class="dadosinicio">E-mail: <?= $dados['email'];?> </p> 
            <p  class="dadosinicio">Telefone: <?= $dados['telefone'];?> </p>
            <p class="dadosinicio">Linkedin: <?= $dados['linkedin'];?></p> 
            <p class="dadosinicio">Cidade: <?= $dados['cidade'];?> </p>
            <p class="dadosinicio">Estado: <?= $dados['estado1'];?> </p>

        </section>


        <section class="meio">
            <h2>Perfil</h2>
            
            <p>Resumo:<?= $dados['resumo']; ?></p>
            <p>Habilidades: <?= $dados['habilidades'];?></p>
            
                <h3>Formação</h3>

                <p>Univesidade:<br><?= $dados['instituicao'];?></p>
                <p>Curso:<br><?= $dados['curso'];?></p>
                <p>Estado:<br><?= $dados['estado2'];?></p>
                <p>Data:<br><?= $dados['data'];?></p>



        
            <div>
                <h4>Experiência Profissionais </h4>
                <p><?= $dados['empresa'];?></p>
                <p><?= $dados['cargos'];?></p>
                <p><?= $dados['datai'];?></p>
                <p><?= $dados['dataf'];?></p>
            </div>       
                                    
        

            <h5>Lingua Estrangeira</h5>

            <p><?= $dados['ingles'];?></p>
            <p><?= $dados['spain'];?></p>
        </section>
    </main>
    <script>
        window.print();
    </script> 
</body>
</html>

