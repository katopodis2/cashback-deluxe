@extends("admin.layouts.app")
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>{{__('global.left.how-work')}}</h3>
            <a href="{{route("admin.how-work.create")}}">{{__("global.addHowWork")}}</a>
        </div>

        <div class="col-lg-12">
            @if(count($items) > 0)
                <table class="table table-bordered" style="margin-top: 20px">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>text</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->text}}</td>
                            <td><img src="{{url('storage/images/howWork/'.$item->img)}}" alt=""></td>
                            <td>
                                <div>
                                    <div>
                                        <a href="{{route('admin.how-work.edit', $item->id)}}"><i class="fa fa-edit"></i>{{__('Edit')}}</a> |
                                        <button data-toggle="modal" data-target="#myModal{{$item->id}}"><i class="fa fa-trash-o"></i>{{__('Cancel')}}</button>
                                    </div>

                                    <!-- Modal -->
                                    <div id="myModal{{$item->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{__('Cancel')}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                </div>
                                                <div class="modal-body">
                                                    <p>{{__('Are you sure to cancel this item')}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('admin.how-work.delete', $item->id)}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                    <div>
                                                        <button type="submit" data-dismiss="modal" class="btn-success">Close</button>
                                                        <button type="submit" class="btn-danger">Delete</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h3>{{__('global.howWorkNotFound')}}</h3>
            @endif
        </div>
    </div>

    {{ $items->links() }}
@endsection
