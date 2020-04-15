@extends('main.main')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title text-center">Create Country</h4>
          </div>
          <div class="card-body">
            <form action="{{route('country.store')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Country</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title text-center ">Country List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead class=" text-primary">
                        <th>Country</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($countries as $country)
                            <tr>
                                <td>{{$country->name}}</td>
                                <td>
                                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editModal{{$country->id}}">
                                        <i class="material-icons">edit</i> Edit
                                    </button>
                                    @include('country.partial.edit')
                                    <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#deleteModal{{$country->id}}">
                                        <i class="material-icons">delete</i> Delete
                                    </button>
                                    @include('country.partial.delete')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            {{ $countries->links() }}
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