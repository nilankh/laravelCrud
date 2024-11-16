<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Harbour Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    {{-- here we will pass list of all users --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                Harbour Space Crud
                <a href="/add/user" class="btn btn-success btn-sm float-end">Add New</a>
            </div>
            @if( Session::has('success'))
                <span class="alert alert-success p-2">{{Session::get('success')}}</span>
            @endif
            @if( Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thread>
                        <th>S/N</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Registration Date</th>
                        <th>Last Update</th>
                        <th colspan="2">Action</th>
                    </thread>
                    <tbody>
                        @if (count($all_users) > 0)
                            @foreach ($all_users as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->phone_number}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->created_at}}</td>
                                    <td>{{ $item->updated_at}}</td>
                                    <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8">No User Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>