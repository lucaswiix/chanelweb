<html>
<head>
<title>E-Commerce Website </title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>

<body>


@yield('body')
    <!------------Footer----------->

<section class="footer">
  <div class="container tex-center">
      <div class="row">
          <div class="col-md-3">
              <h1>Links Úteis</h1>
              <a href="rodape/politica_de_privacidade.html"><p>Política de Privacidade</p></a>
              <a href="rodape/rodatermos_de_uso.html"><p>Termos de Uso</p></a>
              <a href="rodape/politica_de_devolucao.html"><p>Política de Devolução</p></a>
          </div>
          
          <div class="col-md-3">
              <h1>Empresa</h1>
              <a href="rodape/sobre_nos.html" ><p>Sobre Nós</p></a>
              <a href="rodape/contate-nos.html"><p>Contate-nos</p></a>
          </div>
          <div class="col-md-3">
           <h1>Atendimento ao Cliente</h1> 
              <p>0800-0000</p>
              <p>alunofg@meuemail.com</p>
          </div>
          <div class="col-md-3 footer-image">
              <h1>Em breve</h1>
              <img src="imagens/app-logo.png">
          </div>
      </div>
      <hr>
      
        <p class="copyright"> © 2019 Todos os direitos reservados: Igor Carvalho - Jordy Arlego - Lucas Florentino - Vinicius Oliveira - Wolgran Julio </p>
    </div>    
  </section>  

  <script>
    function openmenu()
      {
          document.getElementById("side-menu").style.display="block";
          document.getElementById("menu-btn").style.display="none";
          document.getElementById("close-btn").style.display="block";
      }
      function closemenu()
      {
          document.getElementById("side-menu").style.display="none";
          document.getElementById("menu-btn").style.display="block";
          document.getElementById("close-btn").style.display="none";
      }
    </script>  

</body>
</html>