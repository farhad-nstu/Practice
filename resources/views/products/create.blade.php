


   
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" style="border:1">
                        {{ csrf_field() }}

                       

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Buying Price</label>
                            <input type="number" name="buying_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter buying_price">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Selling Price</label>
                            <input type="number" name="selling_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter selling_price">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                @endforeach

                            </select>
                            
                        </div>

                        

                        

                        <div class="form-group">
                        

                       <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>

        </div>
    </div>    

