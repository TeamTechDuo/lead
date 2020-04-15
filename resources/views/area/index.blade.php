@extends('main.main')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title text-center">Create Area</h4>
          </div>
          <div class="card-body">
            <form action="{{route('area.store')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Area</label>
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">City select</label>
                            <select class="form-control" name="city_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                <option value="">Select City</option>
                                @foreach ($cities as $city)
                                    @if (old('city_id') == $city->id)
                                        <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
                                    @else
                                        <option value="{{$city->id}}">{{$city->name}}</option>
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
              <h4 class="card-title text-center ">Area List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead class=" text-primary">
                        <th>Area</th>
                        <th>City</th>
                        <th>Division</th>
                        <th>Country</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($areas as $area)
                            <tr>
                                <td>{{$area->name}}</td>
                                <td>{{$area->city->name}}</td>
                                <td>{{$area->division->name}}</td>
                                <td>{{$area->country->name}}</td>
                                <td>
                                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editModal{{$area->id}}">
                                        <i class="material-icons">edit</i> Edit
                                    </button>
                                    @include('area.partial.edit')
                                    <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#deleteModal{{$area->id}}">
                                        <i class="material-icons">delete</i> Delete
                                    </button>
                                    @include('area.partial.delete')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            {{ $areas->links() }}
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