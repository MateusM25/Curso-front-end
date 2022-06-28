<?php

$dados = array(
    'foto' => $foto,
    'nome' => $_POST['nome'],
    'cargo' => $_POST['cargo'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'resumo' => $_POST['resumo'],
    'formacoes' => isset($_POST['formacao-curso']) ?
                   array(
                        'cursos' => $_POST['formacao-curso'],
                        'instituicoes' => $_POST['formacao-instituicao'],
                        'conclusoes' => $_POST['formacao-conclusao']
                    ) : null, //Se o usuário não adicionou nenhuma formação, esse elemento ficará nulo
    'experiencias' => isset($_POST['experiencia-cargo']) ? 
                      array(
                        'cargos' => $_POST['experiencia-cargo'],
                        'empresas' => $_POST['experiencia-empresa'],
                        'inicios' =>  $_POST['experiencia-inicio'],
                        'fins' =>  $_POST['experiencia-fim'],
                      ) : null //Se o usuário não adicionou nenhuma experiência, esse elemento ficará nulo
);

