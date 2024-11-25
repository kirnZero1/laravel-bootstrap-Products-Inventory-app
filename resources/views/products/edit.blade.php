<x-layout>
    <div class='bg-light text-dark w-100 h-100'>
        <div class='container'>
                <div class='col-12 d-flex align-items-center bg-light justify-content-center'>
                        <div class='col-10 shadow   my-5 p-3'>
                            <div class='mb-3 text-center'>
                                <h3>Update Product</h3>
                            </div>
                                <form method="post" action="{{route('product.update',['product' => $product])}}">
                                    @csrf
                                    @method('put')
                                    <div class='d-flex align-items-center justify-content-center '>
                                            <div class='col-8 border bg-white'>
                                                <div class='row p-2'>
                                                    <div class='col-3 d-flex align-items-center justify-content-center'><label for="qty">Name:</label></div>
                                                    <div class='col-9'><input type='text' name="name" class='form-control' placeholder="Enter Product Name" value="{{$product->name}}" /></div>
                                                    @error('name')
                                                        <div class='text-danger text-center'>{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class='row p-2'>
                                                    <div class='col-3 d-flex align-items-center justify-content-center'><label for="qty">Quantity:</label></div>
                                                    <div class='col-9'><input type='integer' name="qty" class='form-control' placeholder="Enter Product Quantity" value="{{$product->qty}}" /></div>
                                                    @error('qty')
                                                    <div class='text-danger text-center'>{{$message}}</div>
                                                     @enderror
                                                </div>
                                                <div class='row p-2'>
                                                    <div class='col-3 d-flex align-items-center justify-content-center'><label for="price">Price:</label></div>
                                                    <div class='col-9'><input type='decimal' name="price" class='form-control' placeholder="Enter Product Price" value="{{$product->price}}" /></div>
                                                    @error('price')
                                                    <div class='text-danger text-center'>{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class='row p-2'>
                                                    <div class='col-3 d-flex align-items-center justify-content-center'><label for="description">Description:</label></div>
                                                    <div class='col-9'><textarea name='description' class='form-control'>{{$product->description}}</textarea></div>
                                                    @error('description')
                                                            <div class='text-danger text-center'>{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class='row p-2'>
                                                    <div class='col-3 d-flex align-items-center justify-content-center'></div>
                                                    <div class='col-9'>
                                                        <input type='submit'  class='btn btn-sm btn-primary me-2 px-5' value="Submit" />
                                                        <a href="{{route('product.index')}}" class='btn btn-sm btn-danger px-5  '>Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>
                                </form>
                            
                        </div>
                </div>
        </div>
    </div> 
</x-layout>