<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row m-2">
            <form  action="" method="get" class="col-9">
            <div class="form-group">
              <input type="search" name="search" id="" placeholder="Search Name of Email" value="{{$search}}">
            </div>
            <button class="btn btn-primary btn-lg btn-block">Search</button>
         
            </form>
            
             <div class="col-3">
            <a href="{{url('/blog')}}">
             <button type="button" class="btn btn-primary btn-lg btn-block">Add</button>
            </a>
             </div>
       </div>
 </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Blog_id</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Bio</th>
                    <th>phone</th>
                    <th>City</th>
                    <th>email</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($blogv as $value)
                <tr> 
                    <td>{{$value->Blog_id}}</td>
                    <td>{{$value->Name}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->Bio}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->City}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->State}}</td>
                    <td>{{$value->Country}}</td>
                    <td>
                        @if($value->Gender=='M')
                        Male
                        @else
                        Female
                        @endif
                    </td>
                    <td>
                        <a href="{{url('/blog/delete/')}}/{{$value->Blog_id}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                    <a href="{{route('blog.edit',['id' =>$value->Blog_id])}}"><button class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>