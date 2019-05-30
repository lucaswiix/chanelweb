@extends('layouts.layout')
@section('body')


@include('includes.menu-nav')

<!-------------Single Product------------->    
@if(count($product) > 0)

@foreach ($product as $p)   
<?php $images = json_decode($p->images);?>
<section class="single-product">
<div class="container">
<div class="row">
<div class="col-md-5">
    <div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <?php $count = 0; ?>
    @foreach($images as $i)    

    <div class="carousel-item {{ $count == 0 ? 'active' : '' }}">

      <img src="{{ asset('img/product_images/'.$i ) }}" class="d-block">
    </div>
    <?php $count++; ?>
    @endforeach 

      <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  
</div>
</div>   
    
 <div class="col-md-7">
       
   
    
     <p class="new-arrival text-center">Novo</p>
     <h2>{{$p->nome}}</h2>
     <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        
     <p class="price">R$ {{ number_format($p->preco, 2, ',', '.') }}</p>
     <p><b>Marca:</b> Nike</p>
     <p><b>Frete:</b> Grátis</p>
     <p class="redtext">Em Estoque</p>
     <label>Estoque: </label>
     <input type="text" value="{{$p->quantidade}}" readonly><br><br>
      <a href="/addcarrinho/{{$p->id}}">
        <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
      </a>

       

</div>    
</div>    
</div>    
</section>
    
<!------------product-description-------------->
    
<section class="product-description">
<div class="container">
<h6><strong>Descrição</strong></h6>

{{$p->descricao}}
    
<hr>    
</div> 

@endforeach

@endif
<div class="container">
    <div class="title-box">
    <h2>Similar</h2>
    </div>
    <div class="row">
    <div class="col-md-3">
    <div class="product-top">
        <a href="Camisa Real Madrid Home 2018.html"><img src="{{ asset('img/produtos/esporte e lazer/Real Madrid Home 2018 1.jpg' ) }}"></a> 
        <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Adicionar ao Carrinho">
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
        <h3>Camisa Real Madrid</h3>
        <h5>R$ 350,00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="Capacete Vengeance Hybrid.html"><img src="{{ asset('img/produtos/esporte e lazer/Capacete Vengeance Hybrid 1.jpg' ) }}"></a> 
        <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Adicionar ao Carrinho">
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
        <h3>Capacete Vengeance</h3>
        <h5>R$1000,00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="../fitness/Blusa Feminina Fitness Tiras Transpassadas Manga Longa.html"><img src="{{ asset('img/produtos/fitness/Blusa Feminina Fitness Tiras Transpassadas Manga Longa 1.jpg' ) }}"></a> 
        <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Adicionar ao Carrinho">
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
        <h3>Blusa Feminina Fitness</h3>
        <h5>R$50.00</h5>
    </div>
    </div>
     
    <div class="col-md-3">
    <div class="product-top">
        <a href="../fitness/Regata Feminina Fitness.html"><img src="{{ asset('img/produtos/fitness/Regata Feminina Fitness 1.jpg' ) }}"></a> 
        <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Adicionar ao Carrinho">
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
        <h3>Regata Feminina Fitness</h3>
        <h5>R$35.00</h5>
    </div>
    </div>    
    
    </div>
</div>
    
</section>    
@endsection