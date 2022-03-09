@extends('layouts.admin')
@section('content')

        <div class="col-12">
            @if(Session::has('user_message'))
                <p class="alert alert-info">{{session('user_message')}}</p>
            @endif
        </div>


    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
                <th>File</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>
                    <img width="auto" height="62" src="{{$user->photo ? asset($user->photo->file): 'http://via.placeholder.com/62'}}" alt="{{$user->name}}">
                </td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach($user->roles as $role)
                        <span class="badge badge-pill badge-info">{{$role->name}}</span>
                    @endforeach
                </td>
                <td>{{$user->is_active ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td>{{$user->photo ? $user->photo->file : 'niks'}}
                <td>{{$user->deleted_at}}</td>
                <td>
                    @if($user->deleted_at != null)
                        <a class="btn btn-warning" href="{{route('users.restore',$user->id)}}">Restore</a>
                        @else
                        {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\AdminUsersController@destroy', $user->id]]) !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endif
                </td>
            </tr>
                @endforeach

        </tbody>

    </table>
{{$users->render()}}

    @endsection
