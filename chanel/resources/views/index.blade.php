@extends('layouts.layout')

@section('body')
  @include('includes.menu-nav')
        
    <section class="header">
    <div class="side-menu" id="side-menu">
    <ul>
            <li>Moda masculina <i class="fa fa-angle-right"></i> 
                <ul>
                  <a href="paginas de produtos/moda masculina/Camiseta Masculina Estampa Peixes Manga Curta.html"><li>Camiseta Estampa Peixes</li></a>
                  <a href="paginas de produtos/moda masculina/Camisa Masculina Estampa Xadrez.html"><li>Camisa Estampa Xadrez</li></a>
                  <a href="paginas de produtos/moda masculina/Casaco Masculino Moletom Bicolor Bolsos.html"><li>Casaco Moletom Bicolor</li></a>
                
                </ul>
            </li>
            
            <li>Moda feminina<i class="fa fa-angle-right"></i>  
            <ul>
              <a href="paginas de produtos/moda feminina/Blusa Feminina Cropped Listrada Manga Longa Razon.html"><li>Blusa Cropped Listrada</li></a>
              <a href="paginas de produtos/moda feminina/Blusa Feminina Estampa Beijo Manga Curta.html"><li>Blusa Estampa Beijo</li></a>
              <a href="paginas de produtos/moda feminina/Blusão Feminino Moletom Bordado Manga Longa.html"> <li>Blusão Moletom Bordado</li></a>
                
                </ul> 
            </li>
            
            <li>Fitness <i class="fa fa-angle-right"></i>
                <ul>
               <a href="paginas de produtos/fitness/Blusa Feminina Fitness Manga Longa.html"> <li>Blusa Fitness</li></a>
               <a href="paginas de produtos/fitness/Blusa Feminina Fitness Tiras Transpassadas Manga Longa.html"> <li>Blusa Tiras Transpassadas</li></a>
              <a href="paginas de produtos/fitness/Regata Feminina Fitness.html"><li>Regata Fitness</li></a>
             
                </ul>
            </li>
            
            <li>Vestidos <i class="fa fa-angle-right"></i>   
                <ul>
                <a href="paginas de produtos/vestidos/Vestido Feminino Babados Alcas Finas.html"><li>Vestido Babados </li>
                <a href="paginas de produtos/vestidos/Vestido Feminino Midi Listrado Alças Finas.html"><li>Vestido  Midi Listrado</li></a>
                <a href="paginas de produtos/vestidos/Vestido Feminino Ombro a Ombro Manga Curta Uber Jeans.html"><li>Vestido Ombro a Ombro</li></a>
              
                </ul>
            </li>
            
            <li>Jeans <i class="fa fa-angle-right"></i>  
                <ul>
                <a href="paginas de produtos/jeans/Blusão Feminino Moletom Bordado Manga Longa.html"><li>Blusão Moletom Bordado</li></a>
                <a href="paginas de produtos/jeans/Colete Masculino Jeans Destroyed Rock & Soda.html"><li>Camisa Jeans</li></a>
                <a href="paginas de produtos/jeans/Colete Masculino Jeans Destroyed Rock & Soda.html"><li>Colete Jeans</li></a>
            
                </ul> 
            </li>
            
            <li>Esporte e Lazer<i class="fa fa-angle-right"></i>  
              <ul>
              <a href="paginas de produtos/esporte e lazer/Camisa Barcelona Home 2018.html"><li>Camisa Barcelona</li></a>
             <a href="paginas de produtos/esporte e lazer/Camisa Real Madrid Home 2018.html"><li>Camisa Real Madrid</li></a> 
             <a href="paginas de produtos/esporte e lazer/Capacete Vengeance Hybrid.html" ><li>Capacete Vengeance</li></a>
         
              </ul> 
          </li>
          
          <li>Sapatos<i class="fa fa-angle-right"></i>  
            <ul>
            <a href="paginas de produtos/sapatos/adidas.html"><li>adidas</li></a>
            <a href="paginas de produtos/sapatos/Nike.html"><li>Nike</li></a>
            <a href="paginas de produtos/sapatos/pegada.html"><li>pegada</li></a>
            
            </ul> 
        </li>
        
           
        </ul>  
    </div>
    <div class="slider">
      <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/carousel/slide1-fit.jpg') }}"  class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chega de Desculpas!</h5>
            <p>Hora de virar Fitness com itens em até 70% de desconto</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/carousel/slide2-vestido.jpg') }}"   class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Vista o seu melhor vestido</h5>
            <p>Encante com a nossa nova coleção</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/carousel/slide3-modaM.jpg') }}"   class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Seja um novo homem!</h5>
            <p>Renove seu guarda-roupa</p>
          </div>
        </div>
        
      </div>
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
      </ol>
    </div>  
    </div>    
    
    </section>
        
    <!---------------featured-categories---------------->
        
    <section class="featured-categories"> 
    <div class="container">
     <div class="row">
         <div class="col-md-4">
         <img src="{{ asset('img/categorias em destaque/categoria_esporte_1.png') }}"  height="220"> 
        </div>
         <div class="col-md-4">
         <img src="{{ asset('img/categorias em destaque/categoriaJ_jeans_2.jpg') }}" >
        </div>
         <div class="col-md-4">
         <img src="{{ asset('img/categorias em destaque/categoria_sapato_3.jpg') }}" >
        </div>
    </div>   
    </div>   
    </section>
    
    <!-----------------On Sale product------------------>
    <section class="on-sale">
    <div class="container">
        <div class="title-box">
        <h2>Promoção</h2>
        </div>
        <div class="row">
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/sapatos/pegada.html"><img src="{{ asset('img/produtos/sapatos/pegada 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star-half-o"></i>  
            <h3>Sapato Social Pegada</h3>
            <h5>R$ 159,99</h5>
        </div>
        </div>
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/moda feminina/Blusa Feminina Cropped Listrada Manga Longa Razon.html"><img src="{{ asset('img/produtos/Moda feminina/Blusa Feminina Cropped Listrada Manga Longa Razon 1.jpg') }}" ></a>
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
            <h3>Blusa Feminina Cropped Listrada</h3>
            <h5>R$ 79,00</h5>
        </div>
        </div>
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/esporte e lazer/Camisa Barcelona Home 2018.html"><img src="{{ asset('img/produtos/esporte e lazer/barcelona 1.jpg') }}" ></a>
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
            <h3>Camisa Barcelona</h3>
            <h5>R$ 235,00</h5>
        </div>
        </div>
         
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/moda masculina/Camiseta Masculina Estampa Peixes Manga Curta.html"><img src="{{ asset('img/produtos/Moda masculina/Camiseta Masculina Estampa Peixes Manga Curta 1.jpg') }}" ></a>
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star-half-o"></i>  
          <i class="fa fa-star-o"></i>  
            <h3>Camiseta Masculina Estampa Peixes</h3>
            <h5>R$ 35,00</h5>
        </div>
        </div>    
        
        </div>
    </div>  
    </section>
        
    <!--------------New Products----------------->    
    <section class="new-products">
       <div class="container">
        <div class="title-box">
        <h2>Novidades</h2>
        </div>
        <div class="row">
        <div class="col-md-3">
        <div class="product-top">   
            <a href="paginas de produtos/vestidos/Vestido Feminino Babados Alcas Finas.html"><img src="{{ asset('img/produtos/vestidos/Vestido Feminino Babados Alças Finas 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star-half-o"></i>  
            <h3>Vestido Feminino Babados Alças Finas</h3>
            <h5>R$ 89,95</h5>
        </div>
        </div>
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/fitness/Regata Feminina Fitness.html"><img src="{{ asset('img/produtos/Fitness/Regata Feminina Fitness 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
            <h3>Regata Feminina Fitness</h3>
            <h5>R$ 35,00</h5>
        </div>
        </div>
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/sapatos/adidas.html"><img src="{{ asset('img/produtos/sapatos/adidas 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
            <h3>Tênis Adidas Vs Advantage</h3>
            <h5>R$ 199,99</h5>
        </div>
        </div>
         
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/moda masculina/Casaco Masculino Moletom Bicolor Bolsos.html"><img src="{{ asset('img/produtos/Moda masculina/Casaco Masculino Moletom Bicolor Bolsos 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star-half-o"></i>  
          <i class="fa fa-star-o"></i>  
            <h3>Casaco Masculino Moletom</h3>
            <h5>R$ 119,00</h5>
        </div>
        </div> 
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/sapatos/Nike.html"><img src="{{ asset('img/produtos/sapatos/nike 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star-half-o"></i>  
            <h3>Tênis Nike Legend</h3>
            <h5>R$ 400,00</h5>
        </div>
        </div>
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/vestidos/Vestido Feminino Ombro a Ombro Manga Curta Uber Jeans.html"><img src="{{ asset('img/produtos/vestidos/Vestido Feminino Ombro a Ombro Manga Curta Uber Jeans 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
            <h3>Vestido Feminino Ombro a Ombro</h3>
            <h5>R$ 85,90</h5>
        </div>
        </div>
            
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/moda masculina/Camisa Masculina Estampa Xadrez.html"><img src="{{ asset('img/produtos/Moda masculina/CAMISA-ML-XADREZ 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
            <h3>Camisa Masculina Estampa Xadrez</h3>
            <h5>R$ 100,00</h5>
        </div>
        </div>
         
        <div class="col-md-3">
        <div class="product-top">
            <a href="paginas de produtos/jeans/Camisa Masculina Jeans Manga Curta Zune Jeans.html"><img src="{{ asset('img/produtos/jeans/Camisa Masculina Jeans Manga Curta Zune Jeans 1.jpg') }}" ></a> 
            <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
               <i class="fa fa-eye"></i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
               <i class="fa fa-heart-o"></i> 
            </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
               <i class="fa fa-shopping-cart"></i> 
            </button>
            </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star"></i>  
          <i class="fa fa-star-half-o"></i>  
          <i class="fa fa-star-o"></i>  
            <h3>Camisa Masculina Jeans</h3>
            <h5>R$ 35,00</h5>
        </div>
        </div>
        
        </div>
    </div>
    </section>  
        
    <!----------------Website features----------------->
    
    <section class="website-features">
    <div class="container">
    <div class="row">
    <div class="col-md-3 feature-box">
    <img src="{{ asset('img/site features/fearure1-PagSeguro.png') }}" > 
    <div class="feature-text">
    <p><b>Pagamento Seguro</b></p>    
    </div>
    </div>  
    <div class="col-md-3 feature-box">
    <img src="{{ asset('img/site features/feature2-Devolução.png') }}" > 
    <div class="feature-text">
    <p><b>Receba seu pedido em até 30 dias</b></p>    
    </div>
    </div> 
    <div class="col-md-3 feature-box">
    <img src="{{ asset('img/site features/feature3-Frete.png') }}" > 
    <div class="feature-text">
    <p><b>Frete Grátis<br /></b> Para todo país</p>    
    </div>
    </div>
    <div class="col-md-3 feature-box">
    <img src="{{ asset('img/site features/feature4- PagOnline.png') }}" > 
    <div class="feature-text">
    <p><b>Pagamento Online </b>Aceitamos todos os cartões</p>    
    </div>
    </div> 
    </div>    
    </div>    
    </section>
@endsection