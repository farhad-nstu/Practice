


 
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="card">
                <div class="card-header">
                    Update Product
                </div>

                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                       

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->name }}">
                            
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputEmail1">Buying Price</label>
                            <input type="number" name="buying_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->buying_price }}">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Selling Price</label>
                            <input type="number" name="selling_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->selling_price }}">
                            
                        </div>


                        <div class="form-group">
                            <label class="col-form-label">Select Category</label>
                            <select class="form-control" name="category_id" >
                                @foreach($categories as $category)
                                    <option {{ $category->id == $product->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        
                        <input type="submit" name="submit" value="submit">
                      
                    </form>
                </div>
            </div>

        </div>
    </div>   
  

