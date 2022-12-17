@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="posts/create" class="btn btn-primary mb-2">Create Post</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Published At</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($posts as $p)
                       <tr>
                           <td>{{ $p->id }}</td>
                           <td>{{ $p->title }}</td>
                           <td>{{ $p->body }}</td>
                           <td>{{ $p->published_at }}</td>
                           <td>
                           <a href="posts/id" class="btn btn-primary">Show</a>
                           <a href="posts/id/edit" class="btn btn-primary">Edit</a>
                           <form action="posts/id" method="post" class="d-inline">
                               
                               <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
                           </td>
                       </tr>
                       @endforeach
                       
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection