<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">Manage Posts</h2>
                </div>
                <div class="col-6">
                    <a href="/app/add_post" class="btn btn-primary btn-sm" style="float: right">Add Post</a>
                </div>
            </div>
            <table class="table" id="postTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Author</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($all_posts as $post)
                    <tr>
                      <th scope="row">{{ $post->postId }}</th>
                      <td>{{ $post->post_title }}</td>
                      <td>{{ $post->categoryName }}</td>
                      <td>{{ $post->author_id }}</td>
                      <td>
                        <a href="post/manage/{{$post->postId}}" class="btn btn-primary btn-sm">Update Post</a>
                        <a href="post/delete/{{ $post->postId }}" class="btn btn-danger btn-sm">Delete Post</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $(document).ready(function () {
          $('#postTable').DataTable();
      });
    </script>
</body>