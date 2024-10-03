
@extends('backend.inc.master')
@section('title' , 'Create contact ')
@section('content')

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0"> Edit Contacts </h3>
        </div>
                  
    </div>
    <div class="content-body">
        <!-- Basic form layout section start -->
      <section id="form-control-repeater">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                   
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
               @endif
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form class="form row" action="{{ route('Contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                                                 @csrf
                                                @method('put')
                                            
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">Arabic Title</label>
                                                <input type="text" class="form-control"  value="{{$contact->title_ar}}" placeholder="Arabic Name" name="title_ar">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">English tiltle</label>
                                                <input type="text" class="form-control" placeholder="English Name"  value="{{$contact->title_en}}"  name="title_en">
                                            </div>
                                              <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">Arabic address</label>
                                                <input type="text" class="form-control" placeholder="arabic address"   value="{{$contact->address_ar}}"  name="address_ar">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">English address</label>
                                                <input type="text" class="form-control" placeholder="English address" value="{{$contact->address_en}}" name="address_en">
                                            </div>
                                          <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">Emai</label>
                                                <input type="email" class="form-control" placeholder="Email" value="{{$contact->email}}"  name="email">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">facebook</label>
                                                <input type="text" class="form-control" placeholder="facebook" value="{{$contact->facebook}}" name="facebook">
                                            </div>
                                            
                                              <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">twitter</label>
                                                <input type="text" class="form-control" placeholder="twitter" value="{{$contact->twitter}}" name="twitter">
                                              </div>
                                              
                                             <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">Phone Number</label>
                                                <input type="number" class="form-control" placeholder="phone"  value="{{$contact->phone}}" name="phone">
                                              </div>
                                              
                                              <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">Instegram </label>
                                                <input type="text" class="form-control" placeholder="instegram"  value="{{$contact->instegram}}" name="instegram">
                                              </div>
                                              
                                               <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">Location </label>
                                                <input type="text" class="form-control" placeholder="location"  value="{{$contact->location}}"  name="location">
                                              </div>
                                            
                                       
                                        <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1">youtube</label>
                                                <input type="text" class="form-control" placeholder="youtube" value="{{$contact->youtube}}" name="youtube">
                                              </div>
                                            
                                               <div class="form-actions center">
                                                     <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                              
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </div>
</div>
@endsection

