<x-layout>
    <div class='bg-light text-dark w-100 h-100'>
        <div class='container'>
                <div class='col-12 d-flex align-items-center justify-content-center'>
                        <div class='col-10 shadow bg-white  my-5 p-3'>
                            <div class='mb-3 text-center'>
                                <h3>View Product</h3>
                            </div>
                            <div class='text-end my-3 text-danger'>
                                @if($errors->any())
                                    @foreach ($errors->all() as $error )
                                            <ul>
                                                <li>{{$error}}</li>
                                            </ul>
                                    @endforeach
                                @endif
                            </div>
                            <div class='text-end my-3'>
                                <a href="{{route('product.create')}}" class='btn btn-sm btn-success px-5 me-2 '>Add Product+</a>
                            </div>
                            <div>
                                <table class='table table-hover table-striped table-bordered table-sm'>
                                    <thead>
                                        <tr >
                                            <th  class='bg-dark text-light'>Id</th>
                                            <th  class='bg-dark text-light'>Name</th>
                                            <th  class='bg-dark text-light'>Qty</th>
                                            <th  class='bg-dark text-light'>Price</th>
                                            <th  class='bg-dark text-light'>Description</th>
                                            <th  class='bg-dark text-light text-center'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->qty}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->description}}</td>
                                            <td class='d-flex align-items-center justify-content-center'>
                                                <a href="{{route('product.edit',['product' => $product])}}" class='btn btn-sm btn-primary me-2 '>Edit</a>
                                                <a href='{{route('product.index')}}' class='btn btn-sm btn-danger'>Back</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
        </div>
    </div> 
</x-layout>