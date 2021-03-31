@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name"></br>
                    <label for="Product Summary">Product Summary</label>
                    <textarea name="summary" cols="50" rows="3"></textarea>
                </form>
            </div>
        </div>
    </div>
@endsection