

@extends('backend.inc.master')
@section('title', 'All Gallries')
@section('content')

<!-- BEGIN: Content-->
<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Basic DataTables</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">DataTables</a></li>
                        <li class="breadcrumb-item active">Basic DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                            <div class="card-body card-dashboard">
                                <div class="mb-2">
                                    <a href="{{ route('Gallary.create') }}" class="btn btn-primary">Add New Gallery</a>
                                </div>
                                <table class="table table-striped table-bordered zero-configuration text-center">
                                    <thead>
                                        <tr>
                                        <th>Arabic Title</th>
                                 <th>English Title</th>
                                <th>Arabic Category Name</th>
                                <th>English Category Name</th>
                                <th>Image</th>
                                <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach( $gallaries as $key =>  $gallary)

                                <td>{!! $gallary->title_ar !!}</td>
                                <td>{!! $gallary->title_en !!}</td>
                                <td>{{ $gallary->category->name_ar }}</td>
                                <td>{{ $gallary->category->name_en }}</td>
                                <td><img src="{{ url('public/gallaries/' . $gallary->image) }}" width="50" height="50" alt=""></td>
                                            <td>
                                                <a href="{{ route('Gallary.edit', $gallary->id) }}" class="btn btn-sm btn-warning"><i class="feather icon-edit"></i></a>
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger{{ $gallary->id }}"> <i class="icon-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="danger{{ $gallary->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                            <form action="{{ route('Gallary.destroy', $gallary->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger white">
                                                            <h4 class="modal-title" id="myModalLabel10">Confirm</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Are you sure to delete this?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
<!-- END: Content-->
@endsection
