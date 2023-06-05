<a href="{{route('cities.edit',$id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
{{--<button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>--}}
@include('admin.country.delete')
<span class="btn btn-sm round btn-outline-danger" data-id={{ $id }}
                                  class="btn" data-bs-toggle="modal" data-bs-target="#basicModa6"><i
    class="fa-solid fa-trash"></i></span>
