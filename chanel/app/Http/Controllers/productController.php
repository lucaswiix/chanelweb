<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\Auth;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth::check()) return redirect()->back()->with('error', 'você precisa efetuar o login para fazer isto.');
       return view('create_product');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            
        
        $product = new Product;


        if($request->hasfile('images'))
            {

        foreach($request->file('images') as $image)
        {
            $imgtemp = time();
            $name= mt_rand(100, 9999) . "-" . mt_rand(100,999) . $image->getClientOriginalExtension();
            $image->move(public_path().'/img/product_images', $name);  
            $data[] = $name;
        }
     }

     
            $product->images = json_encode($data);
            

        $product->nome = $request->nome;
        $product->preco = str_replace(',', '.', $request->preco);
        $product->descricao = $request->descricao;
        $product->tamanho = $request->tamanho;
        $product->quantidade = $request->quantidade;

        $url = str_replace(" ","-", $request->input('name'));
            $url = strtolower($url);
            $url = $url.'-'.mt_rand(100, 999);
            $product->url = $url;


        $product->save();
        return redirect('product/'.$url);

       } catch (Exception $e) {

        return redirect()->back()->with('Error', $e);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $product = DB::table('products')->where('url', $url)->get();
        if(count($product) > 0)
            return view('product.show', ['product'=>$product]);
        else
            return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
