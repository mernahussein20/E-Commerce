@extends('backend.inc.master')
@section('title' , ' Create Gallary Category ')
@section('content')

   <section id="form-control-repeater">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="file-repeater">Add New Gallary Category</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                           
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                                  @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                          <ul>
                                                              @foreach ($errors->all() as $error)
                                                                  <li>{{ $error }}</li>
                                                              @endforeach
                                                          </ul>
                                                        </div>
                                                       @endif
                                        <form class="form row" action="{{ route('GallaryCategory.store') }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            <div class="form-group col-md-6 mb-2">
                                            <label for="inputProductTitle" class="form-label">Category Arabic Name</label>
                                           <input type="text" class="form-control" placeholder="category name" name="name_ar">
                                            </div>
                                           
                                        
                                           <div class="container mt-5">
                                                    <h2>Upload Image</h2>
                                                    <input type="file" id="fileUploader" name="image" class="form-control">
                                                </div>
                                           
                                             <div class="form-actions right p-3">
                                            <button type="submit" class="btn btn-primary ">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                            
                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> cancel
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </section>


@endsection

