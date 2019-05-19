<div class="top-nav-bar">
        <div class="search-box">
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
            
            <a href="index.html"><img src="{{ asset('img/logo1.png') }}"  class="logo"></a>
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
        </div> 
        <div class="menu-bar">
        <ul>
        <li><a href="#"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>    
        @if(Auth::check())    
        <li><a href="/home">Minha Conta</a></li> 
        @else    
        <li><a href="/register">Cadastre-se</a></li> 
        <li><a href="/login">Login</a></li> 
        @endif      
        </ul>   
        </div> 
        </div>