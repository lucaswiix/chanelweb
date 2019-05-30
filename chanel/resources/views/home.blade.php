@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                    <tr style="height:50px;">
                        <td>  Bem vindo {{auth::user()->name}}!</td>
                    </tr>                    
                    <tbody>
                        <tr>
                            <td>Menu:</td>
                        </tr>
                        <tr><td><a href="/product/create"> Criar produto</a></td></tr>

                    </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
