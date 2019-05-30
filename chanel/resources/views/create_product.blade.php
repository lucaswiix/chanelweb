@extends('layouts.layout')
@section('body')
@include('includes.menu-nav')
 <div class="container">
   <h1>Novo produto</h1>
<form action="/product/store" class="form" method="post" enctype="multipart/form-data">
  
    @csrf
        <div class="form-group">
                <label for="exampleFormControlFile1">Imagens: *Selecione control para adicionar mais de uma.</label>
                <input name="images[]" type="file" class="form-control-file" id="exampleFormControlFile1" multiple="multiple">
              </div>
    <div class="row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome</label>
          <input name="nome" type="text" class="form-control" id="inputEmail4" placeholder="Nome do Produto">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Preço</label>
          R$ <input name="preco" type="text" class="form-control" data-mask="00/00/0000" id="inputCost" placeholder="00,00">
        </div>
      </div>
      <script>
      $(document).ready(function(){
  $('#inputCost').mask("#.##0,00", {reverse: true});
      });
  </script>

      <div class="form-group">
        <label for="inputAddress">Descrição</label>
        <textarea class="form-control" name="descricao" id="" rows="5"></textarea>
      </div>

     <div class="row">
      <div class="form-group col-md-6">
        <label for="inputAddress2">Tamanho</label>
        <select id="inputState" name="tamanho" class="form-control">
            <option selected disabled>Escolha o Tamanho</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
              </select>

      </div>

      <div class="form-group col-md-6" >
            <label for="inputAddress2">Quantidade</label>
          <input type="number" name="quantidade" value="0" class="form-control">
          </div>

        </div>
      <button type="submit" class="btn btn-primary">Create</button>

</form>
</div>
@endsection
