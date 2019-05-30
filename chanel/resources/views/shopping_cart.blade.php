@extends('layouts.layout')
@section('body')
  @include('includes.menu-nav')
<div class="container mb-4" style="margin-top:3em;">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produto</th>
                            <th scope="col">Disponibilidade</th>
                            <th scope="col" class="text-center">
                                {{-- Quantidade --}}
                            </th>
                            <th scope="col" class="text-right">Preço</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                            $totalCost = 0;
                        @endphp
                        @if(count($sproducts) > 0)
                        
                        @foreach($sproducts as $sp)
                        @php
                            $img = json_decode($sp->images);
                        @endphp
                        <tr>
                        <td><img src="{{asset('/img/product_images/'.$img[0])}}" style="width:60px;height:60px;" /> </td>
                        <td>{{ $sp->nome }}</td>
                            <td>{{ $sp->quantidade > 0 ? 'Em estoque' : 'Sem estoque!'}}</td>
                            <td>
                            
                            </td>
                            <td class="text-right">R$ {{ number_format($sp->preco, 2, ',', '.')}} </td>
                        <td class="text-right"><a href="/removecarrinho/{{$sp->id}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </a></td>
                        </tr>
                        @php
                            $totalCost += $sp->preco;
                        @endphp
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">Nenhum produto no seu carrinho =(</td>
                        </tr>
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                        <td class="text-right"><strong>R$ {{ number_format($totalCost, 2, ',', '.')}}</strong></td>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="/">
                        <button class="btn btn-block btn-light">Continuar comprando</button>
                    </a>    
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="/checkout">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection