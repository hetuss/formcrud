 <div id="right-panel" class="right-panel">

        <!-- Header-->
        
         

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                              <form method="POST" enctype="multipart/form-data">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>password</th>
                                            <th>address</th>
                                            <th>gender</th>
                                            <th>hobby</th>
                                            <th>city</th>
                                            <th>image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <!--    variable name as name<product> which is write in td<product> -->
                                      @if(count($product)>0)
                                      @foreach ($product as $products)
                                       <tr>
                                                            <!-- fieldname -->
                                            <td>{{ $products->username}}</td>
                                            <td>{{ $products->password}}</td>
                                            <td>{{ $products->address}}</td>
                                            <td>{{ $products->gender}}</td>
                                            <td>{{ $products->hobby}}</td>
                                            <td>{{ $products->city}}</td>
                                            

                                           <td><img src="{{asset('uploads/'. $products->image)}}" style="width:100px; height:100px"></td>
                                            <td> <a href="{{route('edit.product',$products->id)}}" ><i class="fa fa-edit fa-lg"  aria-hidden="true" style="color:green;"></i>edit</a>&nbsp
                                            <a href="{{route('delete.product',$products->id)}}" class="button delete-confirm"><i class="fa fa-trash fa-lg"  aria-hidden="true" style="color:red;"></i>delete</a>&nbsp;</td> 

                                       </tr>

                                       @endforeach
                                        @endif
                                  </tbody>
                                </table>
                              </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->