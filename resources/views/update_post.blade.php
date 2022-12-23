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
                    <h2 class="mb-4">Update Post Details</h2>
                </div>
                <div class="col-6">
                    <a href="/app/posts" class="btn btn-primary btn-sm" style="float: right">Back to Posts Page</a>
                </div>
            </div>

            <div class="row">
                <form action="/updatePost" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="">Post Title</label>
                            <input type="text" class="form-control" placeholder="Type Post Title" name="postTitle" value={{ $post_details[0]->post_title }}>
                        </div>
                        <div class="col-12 mt-2">
                            <label for="">Create Post Content</label>
                            <textarea name="content" id="addPostSummerNote">{{ $post_details[0]->content }}</textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Select Category</label>
                            <select class="form-select" aria-label="Default select example" name="postCat">
                                <option selected>Open this select menu</option>
                                @foreach($categories as $category)
                                    @if($post_details[0]->cat_id == $category['id'])
                                        <option value={{ $category['id'] }} selected>{{ $category['categoryName'] }}</option>
                                    @else
                                        <option value={{ $category['id'] }}>{{ $category['categoryName'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Type Author Name</label>
                            <input type="text" class="form-control" placeholder="Eg. Kamal perera" name="authId" value="{{ $post_details[0]->author_id }}">
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="">Set Featured Image</label>
                                <input type="file" class="form-control" name="featuredImage">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <h5>Social Media Links</h5>

                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" placeholder="Paste Facebook Page or Profile Link" name="fb" value="{{ $post_details[0]->facebook_link == "N" ? "" : $post_details[0]->facebook_link }}">
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="">Twitter</label>
                                <input type="text" class="form-control" placeholder="Paste Twitter Page or Profile Link" name="tw" value="{{ $post_details[0]->twitter_link == "N" ? "" : $post_details[0]->twitter_link }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="">Linked-In</label>
                                <input type="text" class="form-control" placeholder="Paste Facebook Page or Profile Link" name="linkedin" value="{{ $post_details[0]->linkedin_link == "N" ? "" : $post_details[0]->linkedin_link }}">
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="">You-Tube</label>
                                <input type="text" class="form-control" placeholder="Paste Twitter Page or Profile Link" name="yt" value="{{ $post_details[0]->youtube_link == "N" ? "" : $post_details[0]->youtube_link }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="">Tik-Tok</label>
                                <input type="text" class="form-control" placeholder="Paste Facebook Page or Profile Link" name="tk" value="{{ $post_details[0]->tiktok_link == "N" ? "" : $post_details[0]->tiktok_link }}">
                            </div>
                        </div>
                        
                        <input type="hidden" name="postId" value={{ $post_details[0]->id }}>
                        <div class="row mt-3">
                            <div class="col-2">
                                <input type="submit" class="btn btn-primary btn-sm" value="Update Post">
                            </div>
                            <div class="col">
                                <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                            </div>
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