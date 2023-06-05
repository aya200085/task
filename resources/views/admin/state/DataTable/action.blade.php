<a href="{{route('states.edit',$id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
<!-- Button trigger modal -->

{{--    <button type="button" class="btn btn-sucsess btn-sm">--}}
{{--        <form action="{{ URL('/change-country-status/'.$id )}}" method="GET">--}}

{{--        @csrf--}}

{{--        @method('PUT')--}}
{{--        </form>--}}

{{--    </button>--}}


<a href="{{ URL('/change-state-status/'.$id )}}" class="btn btn-success btn-sm">status</a>

<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$id}}">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="delete{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deleted</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('states.destroy','test')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$id}}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


