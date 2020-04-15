<div class="modal fade" id="deleteModal{{$country->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('country.destroy', $country->id)}}" method="post">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Country delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    <p>Are you want to delete <b>{{$country->name}}?</b></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>    
        </div>
    </div>
</div>