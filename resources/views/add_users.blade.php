<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">Manage Users</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5>Add User</h5>
                    <hr>
                    <form action="/createUser" method="post">
                        @csrf
                        <div class="row">
                            @if(Session()->get('status') != '')
                            <div class="col-md-12 alert alert-success" role="alert">
                                {{Session()->get('status')}}
                            </div>
                            @endif
                            <div class="col-12">
                                <label for="">Enter Full Name :</label>
                                <input type="text" class="form-control" placeholder="Nishantha Perera" name="full_name">
                            </div>
                            <div class="col-12">
                                <label for="">Create Username : (Dont use Spaces Between Username)</label>
                                <input type="text" class="form-control" placeholder="nishantha" title="(Dont use Spaces Between Username)" name="username">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Create Password :</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Confirm Password :</label>
                                <input type="password" class="form-control" name="confPass">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="submit" class="btn btn-primary btn-sm" value="Create User">
                                <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5>All Categories</h5>
                    <hr>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_users as $each_user)
                                <tr>
                                    <td>{{ $each_user['full_name'] }}</td>
                                    <td>{{ $each_user['username'] }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Update</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-3">
                <h5>Manage Site Social Media Links</h5>
                <hr>

                <h5>Add Social Media Links</h5>
                <hr>
                <form action="/addSocialMedia" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control" placeholder="facebook Page or Profile Link" name="fb">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Twitter :</label>
                            <input type="text" class="form-control" placeholder="Twitter Page or Profile Link" name="tw">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Linked-In :</label>
                            <input type="text" class="form-control" placeholder="LinkedIn Page or Profile Link" name="li">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Tik-Tok :</label>
                            <input type="text" class="form-control" placeholder="Tik-Tok Page or Profile Link" name="tk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mt-3">
                            <input type="submit" class="btn btn-primary btn-sm" value="Add Links">
                            <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#addPostSummerNote').summernote({
                height: 400
            });
        });
    </script>
</body>