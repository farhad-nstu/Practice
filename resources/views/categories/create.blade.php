


   
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="card">
                <div class="card-header">
                    Add Category
                </div>

                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data" style="width: 40%; text-align: center;">
                        @csrf

                       

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                            
                        </div>
                        
                        

                        

                        <div class="form-group">
                        

                       <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Add Category</button>
                    </form>
                </div>
            </div>

        </div>
    </div>    

