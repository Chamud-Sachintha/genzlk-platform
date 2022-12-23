<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;

class PostsController extends Controller
{
    function showHomePage() {
        $contents = [];
        $index = 0;
        $allPosts = DB::table('posts')->select('posts.id', 'posts.post_title', 'posts.content', 'posts.facebook_link', 'posts.youtube_link', 'posts.twitter_link', 'posts.linkedin_link', 'posts.tiktok_link','posts.featured_image', 'posts.created_at','posts.author_id',  'categories.categoryName', 'categories.id as cat_id')
                    ->join('categories', 'posts.cat_id', '=', 'categories.id')
                    ->orderBy('posts.created_at', 'DESC')
                    ->get();

        foreach($allPosts as $each_post) {
            $dom = new \DOMDocument('1.0', 'utf-8');
            $dom->loadHtml(mb_convert_encoding($each_post->content, 'HTML-ENTITIES', 'UTF-8'));
            $para = $dom->getElementsByTagName('p');

            $contents[$index] = $dom->textContent;
            $index = $index + 1;
        }

        $index = 0;

        //dd($allPosts->content);
        return view('index')->with(['all_posts'=>$allPosts->toArray(), 'contents'=>$contents]);
    }

    function showSelectedCetgory($category_id) {
        $allPosts = DB::table('posts')->select('posts.id', 'posts.post_title', 'posts.content', 'posts.facebook_link', 'posts.youtube_link', 'posts.twitter_link', 'posts.linkedin_link', 'posts.tiktok_link','posts.featured_image', 'posts.created_at','posts.author_id',  'categories.categoryName', 'categories.id as cat_id')
                    ->join('categories', 'posts.cat_id', '=', 'categories.id')
                    ->where('categories.id', '=', $category_id)
                    ->orderBy('posts.created_at', 'DESC')
                    ->get();
        return view('show_category')->with('all_posts', $allPosts->toArray());
    }

    function showPostsPage() {
        $all_posts = DB::table('posts')->select('posts.id as postId', 'posts.post_title', 'posts.content', 'categories.id as catId','posts.author_id', 'categories.categoryName', 'categories.categoryDescription')
                        ->join('categories', 'posts.cat_id','=','categories.id')->get();
        return view('posts')->with('all_posts', $all_posts->toArray());
    }

    function showAddPostPage() {
        $categories = Category::all();
        return view('add_post')->with('categories', $categories->toArray());
    }

    function createNewPost(Request $postDetails) {
        $content = $postDetails->content;
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->loadHtml(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $imageFile = $dom->getElementsByTagName('img');

        foreach($imageFile as $item => $image){
            $data = $image->getattribute('src');
            if (strpos($data, 'data:image')!==false){
                $data = $image->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name= "/upload/" . time().$item.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $imgeData);
                
                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
            }
        }

        $file = $postDetails->feturedImage;
        $get_thumbnail_file_name = date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('/featuredImage'), $get_thumbnail_file_name);
  
        $content = $dom->saveHTML();
        //dd($content);
        $post = Posts::create([
             'post_title' => $postDetails->postTitle,
             'content' => $content,
             'featured_image'=> $get_thumbnail_file_name,
             'facebook_link'=> ($postDetails->fb == null ? "N" : $postDetails->fb),
             'twitter_link'=> ($postDetails->tw == null ? "N" : $postDetails->tw),
             'linkedin_link'=> ($postDetails->linkedin == null ? "N" : $postDetails->linkedin),
             'youtube_link'=>($postDetails->yt == null ? "N" : $postDetails->yt),
             'tiktok_link'=>($postDetails->tk == null ? "N" : $postDetails->tk),
             'cat_id' => $postDetails->postCat,
             'author_id' => $postDetails->authId
        ]);

        return redirect('/app/posts');
    }

    function showUpdatePostPage($id) {
        $get_post_details = DB::table('posts')->select('*')
                            ->where('posts.id','=',$id)
                            ->get();
        $categories = Category::all();
        return view('update_post')->with(['post_details'=>$get_post_details->toArray(), 'categories'=>$categories]);
    }

    function updatePostByPostId(Request $updated_post_details) {
        $post_id = $updated_post_details->postId;
        $post_details = Posts::find($post_id);

        $content = $updated_post_details->content;
        $dom = new \DomDocument();
        @$dom->loadHtml(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (strpos($data, ';') === false) {
                continue;
            }
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
    
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        
        if ($updated_post_details->featuredImage != null) {
            $file = $updated_post_details->featuredImage;
            $get_thumbnail_file_name = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/featuredImage'), $get_thumbnail_file_name);
        } else {
            $get_thumbnail_file_name = $post_details->featured_image;
        }

        $content = $dom->saveHTML();
        $post_details->post_title = $updated_post_details->postTitle;
        $post_details->content = $content;
        $post_details->cat_id = $updated_post_details->postCat;
        $post_details->featured_image = $get_thumbnail_file_name;
        $post_details->facebook_link = ($updated_post_details->fb == null ? "N" : $updated_post_details->fb);
        $post_details->twitter_link = ($updated_post_details->tw == null ? "N" : $updated_post_details->tw);
        $post_details->linkedin_link = ($updated_post_details->linkedin == null ? "N" : $updated_post_details->linkedin);
        $post_details->youtube_link = ($updated_post_details->yt == null ? "N" : $updated_post_details->yt);
        $post_details->tiktok_link =($updated_post_details->tk == null ? "N" : $updated_post_details->tk);
        $post_details->author_id = $updated_post_details->authId;
        $post_details->save();

        return redirect('/app/posts');
    }

    function showPostInPage($post_id) {
        $post_details = DB::table('posts')->select('posts.id as post_id','posts.post_title', 'posts.content', 'posts.author_id', 'categories.id as category_id', 'categories.categoryName as cat_id', 'posts.youtube_link', 'posts.facebook_link', 'posts.twitter_link', 'posts.linkedin_link', 'posts.tiktok_link', 'posts.created_at')
                        ->join('categories', 'posts.cat_id' ,'=', 'categories.id')
                        ->where('posts.id','=',$post_id)
                        ->get();
        $related_articles =DB::table('posts')->select('posts.id', 'posts.post_title', 'posts.content', 'posts.facebook_link', 'posts.youtube_link', 'posts.twitter_link', 'posts.linkedin_link', 'posts.tiktok_link','posts.featured_image', 'posts.created_at','posts.author_id',  'categories.categoryName', 'categories.id as cat_id')
                        ->join('categories', 'posts.cat_id', '=', 'categories.id')
                        ->where('posts.id', '!=', $post_id)
                        ->where('categories.id','=', $post_details[0]->category_id)
                        ->orderBy('posts.created_at', 'DESC')
                        ->get();
        //dd($post_details);
        return view('post_single')->with(['post_details'=>json_decode($post_details), 'related_articles'=>$related_articles]);
    }

    function deleteSelectedPostById($post_id) {
        if (Session()->has('member')) {
            Posts::where('id',$post_id)->delete();

            return redirect('/app/posts');
        } else {
            return redirect('signin');
        }
    }
}
