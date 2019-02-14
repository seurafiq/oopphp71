@extends('admin.master')
@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Category Form</h4>

                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>SI. NO</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product price</th>
                                <th>Product quantity</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>
                                    <img src="{{ asset($product->product_image) }}" alt="imagee" height="100px" width="120px">
                                </td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_quantity }}</td>
                                <td>{{ $product->publication_status }}</td>
                                <td>Demo</td>
                            </tr>
                                @endforeach

                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection