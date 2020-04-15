<div class="modal fade" id="editModal{{$division->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('division.update', $division->id)}}" method="post">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Division Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">division</label>
                                <input type="text" name="name" class="form-control" value="{{ $division->name }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Country select</label>
                                <select class="form-control" name="country_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}"{{ ( $country->id == $division->country_id) ? 'selected' : '' }}>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>    
        </div>
    </div>
</div>