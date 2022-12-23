<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/updateCategory" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="">Category Name :</label>
                            <input type="text" class="form-control" placeholder="Enter Category Name" id="catName" name="cat_name">
                        </div>

                        <div class="col-12">
                            <label for="">Category Description :</label>
                            <input type="text" class="form-control" placeholder="Enter Category Description" id="catDescription" name="cat_desc">
                        </div>
                        
                        <input type="hidden" name="cat_id" id="catId">
                        <div class="col-12 mt-3">
                            <input type="submit" class="btn btn-primary btn-sm" value="Update">
                            <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>


    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">Manage Category</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5>Add Category</h5>
                    <hr>

                    <form action="/createCategory" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="">Type Category Name</label>
                                <input type="text" class="form-control" placeholder="Eg. Technology / Econonomy"
                                    name="catName">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="">Category Description</label>
                                <textarea name="catDesc" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-5">
                                <input type="submit" class="btn btn-primary btn-sm" value="Create Category">
                            </div>
                            <div class="col">
                                <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5>All Categories</h5>
                    <hr>
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category['id'] }}</th>
                                <td>{{ $category['categoryName'] }}</td>
                                <td>{{ $category['categoryDescription'] }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm edit" data-toggle="modal" data-target="#exampleModal"
                                        >Update</button>
                                    <a href="/deleteCategory/{{$category['id']}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                pageLength: 3
            });

            table.on('click', '.edit', function () {
                $tr = $(this).closest('tr');

                if($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                $('#catId').val(data[0]);
                $('#catName').val(data[1]);
                $('#catDescription').val(data[2]);

                $('#exampleModal').modal('show');
            });
        });
    </script>
</body>