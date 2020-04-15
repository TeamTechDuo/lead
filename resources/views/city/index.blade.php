@extends('main.main')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title text-center">Create City</h4>
          </div>
          <div class="card-body">
            <form action="{{route('city.store')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">City</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Country select</label>
                            <select class="form-control" name="country_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    @if (old('country_id') == $country->id)
                                        <option value="{{ $country->id }}" selected>{{ $country->name }}</option>
                                    @else
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Division select</label>
                            <select class="form-control" name="division_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                <option value="">Select Division</option>
                                @foreach ($divisions as $division)
                                    @if (old('division_id') == $division->id)
                                        <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                                    @else
                                        <option value="{{$division->id}}">{{$division->name}}</option>
                                    @endif
                                @endforeach
                            </select>
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
              <h4 class="card-title text-center ">City List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead class=" text-primary">
                        <th>City</th>
                        <th>Division</th>
                        <th>Country</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <td>{{$city->name}}</td>
                                <td>{{$city->division->name}}</td>
                                <td>{{$city->country->name}}</td>
                                <td>
                                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editModal{{$city->id}}">
                                        <i class="material-icons">edit</i> Edit
                                    </button>
                                    @include('city.partial.edit')
                                    <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#deleteModal{{$city->id}}">
                                        <i class="material-icons">delete</i> Delete
                                    </button>
                                    @include('city.partial.delete')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            {{ $cities->links() }}
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