@extends('layouts.app')

@section('title')
- lista produktów
@endsection


@section('content')


        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>

                    <div class="panel panel-default">

                        <table class="table">
                            @foreach($products as $product)
                                <th> {{$product->name}} </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <tr>

                                    <td>Białko: {{$product->protein}}</td>
                                    <td>Węglowodany: {{$product->carbs}}</td>
                                    <td>Tłuszcze: {{$product->fat}}</td>
                                    <td>Kalorie: {{$product->calories }}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="text-center">
                        {!! $products->links() !!}
                    </div>


            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                <table class="table">
                    @foreach($products as $product)
                        <th> {{$product->name}} </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <tr>

                            <td>Białko: {{$product->protein}}</td>
                            <td>Węglowodany: {{$product->carbs}}</td>
                            <td>Tłuszcze: {{$product->fat}}</td>
                            <td>Kalorie: {{$product->calories }}</td>

                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>




    {{--<div class="container">
        <h2>Lista produktów</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Nazwa</th>
                <th>Białko</th>
                <th>Węglowodany</th>
                <th>Tłuszcz</th>
                <th>Kalorie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->protein}}</td>
                        <td>{{$product->carbs}}</td>
                        <td>{{$product->fat}}</td>
                        <td>{{$product->calories }}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $products->links() !!}
        </div>
    </div>--}}





    @endsection