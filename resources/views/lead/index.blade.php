@extends('main.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Create New Lead</button>
            @include('lead.partial.create')
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title text-center ">Lead List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead class=" text-primary">
                            <th>Company Name</th>
                            <th>Company Category</th>
                            <th>Company Phone</th>
                            <th>Company Email</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{$lead->company_name}}</td>
                                    <td>{{$lead->company_name}}</td>
                                    <td>{{$lead->company_name}}</td>
                                    <td>{{$lead->company_name}}</td>
                                    <td>{{$lead->company_name}}</td>
                                    <td>{{$lead->company_name}}</td>
                                    <td>
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editModal{{$lead->id}}">
                                            <i class="material-icons"></i> 
                                        </button>
                                        {{-- @include('lead.partial.edit') --}}
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editModal{{$lead->id}}">
                                            <i class="material-icons">edit</i> 
                                        </button>
                                        {{-- @include('lead.partial.edit') --}}
                                        <button class="btn btn-warning btn-round" data-toggle="modal" data-target="#deleteModal{{$lead->id}}">
                                            <i class="material-icons">delete</i> 
                                        </button>
                                        <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#deleteModal{{$lead->id}}">
                                            <i class="material-icons">delete</i> 
                                        </button>
                                        {{-- @include('lead.partial.delete') --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                {{ $leads->links() }}
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

@endsection