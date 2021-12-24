@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
               
            </div> --}}
            <h3>Products</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">SL No</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col" colspan="3">Variant</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $key=>$product)
                  
                  <tr>
                    <th scope="row">{{ $key+=1 }}</th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->ProductpriceVariant->Product->variant }}</td>
                    <td>{{ $product->ProductpriceVariant->price }}</td>
                    <td>{{ $product->ProductpriceVariant->stock }}</td>

                    <td class="col-6">
                      <a href="" class="btn btn-outline-primary">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $products->links() }}
          </div>
    </div>
    
</div>
@endsection
