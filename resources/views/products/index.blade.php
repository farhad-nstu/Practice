
    <li>
      <a href="{{ route('home') }}"><b>Back</b></a>
    </li>

   
    
                <div class="card-body">
                  
                   <table class="table table-hover table-striped" style="width: 70%; margin-top: 50px;" border="1" align="center" >
                      <tr>
                        <th>#</th>
                        <br>
                        <th>Title</th>
                        
                        <th>Buying_price</th>
                        <th>Selling_price</th>
                        <th>Category</th>
                        
                        <th>Action</th>
                      </tr>

                       @foreach($products as $product)

                         <tr>
                          <td>{{ $product->id }}</td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->buying_price }}</td>
                          <td>{{ $product->selling_price }}</td>
                          <td>
                            @foreach($categories as $category)
                                @if( $category->id == $product->category_id)
                                   {{ $category->name }}
                                @endif   
                            @endforeach
                          </td>
                          <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{ route('products.edit',[ $product->id ])}}" class="btn btn-primary">Edit</a></li>

                                        <li><a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit();" >Delete</a></li>

                            <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy',$product->id) }}" method="POST" style="display: none;">
                                @csrf @method('delete')
                            </form>

                                    </ul>
                                </td>
                         </tr>

                      @endforeach 
                   </table>
                </div>
            

