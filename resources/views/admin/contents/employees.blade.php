<div class="graphs">
    <h3 class="blank1">Employees Management</h3>
    <div class="xs tabls">
        <div class="bs-example4" data-example-id="contextual-table">
            <a href="{{ url('admin/employees/create') }}" class="btn btn-primary">Add Employee</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th>{{$key + 1}}</th>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form action="{{ url('admin/employees/'.$user->id) }}" method="POST">
                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{ csrf_field() }}
                                {{--<input type="hidden" name="_method" value="DELETE">--}}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>