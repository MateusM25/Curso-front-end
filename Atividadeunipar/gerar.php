

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <!-- stylus -->
    <link rel="stylesheet" type="text/css" href="./css/styluscurriculo1.css">
</head>
<body>
 <form method="POST" action="resultado.php">
    <!--Topico 1 Nome - estado-->
    <section class="top">
        <h1>Crie seu Curriculo</h1>
     
        
        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
             <P class="topico"><img src="../Atividadeunipar/mais.ico/perfil-de-usuario.png">  Digite seu nome</p>
            <input class="input1" name="nome" type="text" size="50" placeholder="Nome " id="nome">
            <P class="topico" ><img src="../Atividadeunipar/mais.ico/telefone.png"> telefone </P>
            <input class="input1" name="telefone" type="nuber" placeholder="Telefone" id="telefone">
            <p class="topico"><img src="../Atividadeunipar/mais.ico/o-email.png"> Endereço De E-mail</p>
            <input class="input1" name="email" type="text" size="35"  placeholder="Email" id="email">
            <p class="topico"><img src="../Atividadeunipar/mais.ico/linkedin.png">   Linkedin</p>
            <input class="input1" name="linkedin" type="text" size="35"  placeholder="Linkedin" id="linkedin">
            <p class="topico"><img src="../Atividadeunipar/mais.ico/endereco.png">  Cidade</p>
            <input type="Text" name="cidade" size="35"  placeholder="Cidade" id="cidade">
            <p class="topico"> <img src="../Atividadeunipar/mais.ico/brasil.png ">  Selecione Estado</p>
            <select name="estado1" >
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>

          </select>

       
</section>
  

<!--Perfil-->
    

     <section class="meio">  
        <h2>Perfil </h2>
        <input  size="60" rows="5" name="resumo"  type="text" placeholder="Fale Sobre você">
        <p class="topico"> <img src="../Atividadeunipar/mais.ico/pencil.png">  Habilidades</p>
        <input type="text" name="habilidades" placeholder="Habilidades">
     </section>

     <!--Formação-->


        <section class="baixo">
            <h3>Formação    <botton>+</botton></h3>
            <p class="topico"><img src="../Atividadeunipar/mais.ico/escola.png ">  Instituição</p>
            <input type="text" name="instituicao">
            <p class="topico"><img src="../Atividadeunipar/mais.ico/graduacao.png ">  Curso</p>
            <input type="text" name="curso" placeholder="Curso">
            <p class="topico" > <img src="../Atividadeunipar/mais.ico/brasil.png ">  Selecione o Estado</p>
            <select name="estado2">
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
                <option value="Distrito Federal">Distrito Federal</option>
                
            </select>
            <p class="topico" ><img src="../Atividadeunipar/mais.ico/calendario-desktop.png ">   Ano De Inicio </p>
            <input type="date" name="data"> 
           <input type="date" name="data3">
        
            
        <!--Experiencias profissionais--->


        
            <H4 src="../Atividadeunipar/mais.ico/plus_+_512px.png">   Experiencias Profissionais  <botton>+</botton></H4>
            <p class="topico"><img src="../Atividadeunipar/mais.ico/companhia.png ">  Empresa</p>
            <input type="text" name="empresa" placeholder="Empresa">
            <p class="topico"><img src="../Atividadeunipar/mais.ico/servicos-digitais.png ">   Cargo E serviços Desempenhados</p>
            <input type="text" name="cargos">
            <p class="topico"><img src="../Atividadeunipar/mais.ico/calendario-desktop.png ">   Data de Inicio</p>
            <input type="date" name="datai" >
            <p class="topico"><img src="../Atividadeunipar/mais.ico/calendario-desktop.png ">   Fim</p>
            <input type="date" name="dataf">
           <br> <input  type="checkbox" name="Meucargo" value="Meu Cargo Atual"> <p class="topico">   Meu Cargo atualmente.</p>
      
      
      <!--Lingua estranjeira-->

        <H5>Lingua Estrangeira </H5><p class="topico"><img src="../Atividadeunipar/mais.ico/eng.png ">   Inglês</p>
        <select name="ingles">
            
            <Option value="Básico">Básico</Option>
            <option value="Intermediario">Intermediario</option>
            <option value="Avançado">Avançado</option>
              <option value="Fluente">Fluente</option>

            </select><p class="topico"><img src="../Atividadeunipar/mais.ico/espanhol.png ">   Espanhol</p>
           <select name="spain">
            <Option value="Básico">Básico</Option>
            <option value="Intermediario">Intermediario</option>
            <option value="Avançado">Avançado</option>
              <option value="Fluente">Fluente</option></select>
      </section>
      <input type="submit" name="button" id="button" value="Enviar" />

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/index.js"></script>
</form>

</body>
</html>