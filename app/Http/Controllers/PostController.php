<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{

        public function __construct()
        {
            $this->middleware(['auth'])->only('store','destroy');
        }



        public function index()
        {

        //    $posts=Post::get();//return all in database order. This is a laravel collection
        // $posts=Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(20);
        //shortcut for above lime
        $posts=Post::latest()->with(['user','likes'])->paginate(10);
            return view('posts.index',[
                'posts'=>$posts
            ]
        
        );
        }


        public function show(Post $post){
            return view('posts.show',[
                'post'=>$post
            ]);
        }

        public function create()
        {
            return view('post.create');
        }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $request->validate([
               
                'body' => 'required|min:10|max:4096',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $user = auth()->user();
            $input =  $request->all();
            $input['user_id'] = auth()->id();
            if ($image = $request->file('image')) {
                $imageDestinationPath = 'uploads/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($imageDestinationPath, $postImage);
                $input['image'] = "$postImage";
            }
            // dd($input);
            Post::create($input);
            return redirect()->route('posts')->with('success','Post created successfully.');
        }

        


//         public function store( Request $request,Post $post){
//             $this->validate($request,[

//                 //'body' needs to be in fillable property of the model

//                 'body'=>'required|max:100'
                
                
//             ]);
           
            

//     $request->user()->posts()->create($request->only('body'));

//     return back();

// }




public function destroy(Post $post ){

    $this->authorize('delete',$post);//in house authorization.  Calling delete method from PostPolicy
    //as we are dealing with a Model, we can simply put Delete
    $post->delete();

    return back();
}





}