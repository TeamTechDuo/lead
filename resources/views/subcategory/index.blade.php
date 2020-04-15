@extends('main.main')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title text-center">Create Company Subcategory</h4>
          </div>
          <div class="card-body">
            <form action="{{route('subcategory.store')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Company Subcategory</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category select</label>
                            <select class="form-control" name="category_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title text-center ">Company Subcategory List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead class=" text-primary">
                        <th>Subcategory</th>
                        <th>Category</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory)
                            <tr>
                                <td>{{$subcategory->name}}</td>
                                <td>{{$subcategory->category->name}}</td>
                                <td>
                                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editModal{{$subcategory->id}}">
                                        <i class="material-icons">edit</i> Edit
                                    </button>
                                    @include('subcategory.partial.edit')
                                    <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#deleteModal{{$subcategory->id}}">
                                        <i class="material-icons">delete</i> Delete
                                    </button>
                                    @include('subcategory.partial.delete')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            {{ $subcategories->links() }}
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