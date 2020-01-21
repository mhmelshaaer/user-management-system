@extends('page')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editing user {{$user->email}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('user.update')}}" method="POST" class="col-md-5">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$user->name}}" required>

                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$user->email}}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Will not change if left empty">
                        </div>

                        <div class="form-group">

                            <input type="hidden" value="1" name="deactivated">
                            <input id="deactivated-toggle" type="checkbox" name="deactivated"  value="0" {{$user->deactivated? null: 'checked'}} data-toggle="toggle" data-on="Deactivate" data-off="Activate">

                        </div>


                        <a href="/admin/users" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.col -->
    </div><!-- /.row -->


@endsection


@section('css')

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('js')

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


@endsection
