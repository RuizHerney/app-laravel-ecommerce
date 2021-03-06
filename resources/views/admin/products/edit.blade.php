@extends('layouts.dashboard')

@section('title_page', 'productos')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('products.index') }}">
        <i class="fas fa-boxes"></i>
        Productos
    </a>
</li>

<li class="breadcrumb-item">
    <a href="{{ route('products.create') }}">
        <i class="fas fa-plus"></i>
        Editar producto
    </a>
</li>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-9">
            <div class="panel shadow">

                <div class="header">

                    <div class="d-flex align-items-center justify-content-between">

                        <h2 class="title">
                            <i class="fas fa-boxes"></i>
                            Editar producto
                        </h2>

                    </div>

                </div>

                <div class="inside">

                    {!! Form::open( [ 'route' => ['products.update', 'id' => $product->id], 'files' => 'true', 'method'
                    => 'PUT' ] ) !!}

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                {!! Form::label( 'name', 'Nombre' ) !!}

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <div class="input-group-text">
                                            <i class="far fa-keyboard"></i>
                                        </div>

                                    </div>

                                    {!! Form::text( 'name', $product->name, [ 'class' => 'form-control' ] ) !!}

                                </div>

                                @error('name')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {!! Form::label( 'category_id', 'Categoria' ) !!}

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <div class="input-group-text">
                                            <i class="fas fa-list"></i>
                                        </div>

                                    </div>

                                    {!! Form::select( 'category_id', $categories, $product->category_id, [ 'class' =>
                                    'form-control' ] ) !!}

                                </div>

                                @error('category_id')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                {!! Form::label( 'file_image', 'Imagen' ) !!}

                                <div class="custom-file">

                                    {!! Form::file( 'file_image', [ 'class' => 'custom-file-label', 'id' => "image",
                                    'accept' => 'image/*'] ) !!}
                                    {!! Form::label( 'image', 'Imagen', [ 'class' => 'custom-file-label'] ) !!}

                                </div>

                                @error('file_image')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {!! Form::label( 'price', 'Precio' ) !!}

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <div class="input-group-text">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>

                                    </div>

                                    {!! Form::number( 'price', $product->price, [ 'class' => 'form-control', 'min' =>
                                    '0.00', 'step' =>
                                    'any' ] ) !!}

                                </div>

                                @error('price')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                {!! Form::label( 'in_discount', '¿Esta en descuento?' ) !!}

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <div class="input-group-text">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>

                                    </div>

                                    {!! Form::select( 'in_discount', [ '0' => 'No', '1' => 'Si'] ,
                                    $product->in_in_discount, [ 'class' => 'form-control' ] ) !!}

                                </div>

                                @error('in_discount')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {!! Form::label( 'discount', 'Descuento' ) !!}

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <div class="input-group-text">
                                            <i class="fas fa-money-check-alt"></i>
                                        </div>

                                    </div>

                                    {!! Form::number( 'discount', $product->discount, [ 'class' => 'form-control', 'min'
                                    => '0.00', 'step' => 'any' ] ) !!}

                                </div>

                                @error('discount')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                {!! Form::label( 'status', 'Estado' ) !!}

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <div class="input-group-text">
                                            <i class="fas fa-question-circle"></i>
                                        </div>

                                    </div>

                                    {!! Form::select( 'status', [ '0' => 'Inactivo/a', '1' => 'Activo/a'] ,
                                    $product->status, [ 'class' => 'form-control' ] ) !!}

                                </div>

                                @error('status')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                {!! Form::label( 'description', 'Descripcion' ) !!}

                                {!! Form::textarea( 'description', $product->description, [ 'class' => 'form-group
                                w-100' ] ) !!}

                                @error('description')
                                <div class="ml-3 pt-1 d-block text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            {!! Form::submit('Editar', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="panel shadow">

                <div class="header">

                    <div class="d-flex align-items-center justify-content-between">

                        <h2 class="title">
                            <i class="fas fa-image  "></i>
                            Imagen destacada
                        </h2>

                    </div>

                </div>

                <div class="inside">
                    <img src="{{ asset($product->image_path . '/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                </div>

            </div>

            <div class="panel shadow mt-4">
                <div class="header">

                    <div class="d-flex align-items-center justify-content-between">

                        <h2 class="title">
                            <i class="fas fa-images"></i>
                            Galeria
                        </h2>

                    </div>

                </div>

                <div class="inside product_gallery">
                    {!! Form::open( ['route' => [ 'products.gallery', 'id' => $product->id ], 'files' => true, 'id' => 'form_product_gallery'] )!!}
                        {!! Form::file('file_image', [ 'id' => 'product_image', 'accept' => 'image/*', 'class' => 'input_product_image' ]) !!}
                    {!! Form::close() !!}

                    @error('file_image')
                        <div class="ml-3 pt-1 d-block text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="btn-submit">
                        <a href="#" id="btn_product_image">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>

                    <div class="tumbs mt-3">
                        @foreach ($product->productGalleries as $image)
                            <div class="tumb">
                                {!! Form::open( [ 'route' => ['products.gallery.delete', 'idImage' => $image->id, 'idProduct' => $product->id], 'method' => 'delete']) !!}
                                <button data-toggle="tooltip" data-placement="top" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                                <img src="{{ asset($image->image_path . '/m_' . $image->image) }}" alt="" >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection