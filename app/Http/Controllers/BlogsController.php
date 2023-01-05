<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\User;
use App\Models\Blog as Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Auth\AuthManager;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $blogs = Blog::all();
        // return Auth::user();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        return view('blogs.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return auth()->user();
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        if($request->hasFile('blogImage')){
            $fileName = $request->file('blogImage')->getClientOriginalName();
            $ext = $request->file('blogImage')->getClientOriginalExtension();
            $fName = pathinfo($fileName, PATHINFO_FILENAME);
            $nameToSave = $fName.time().".".$ext;
            $checkStored = $request->file('blogImage')->storeAs('public/images', $nameToSave);
            if(!$checkStored){
                return redirect()->back();
            }
        } else {
            $nameToSave = NULL;
        }
      
        //$val = ['title'=> $request->title, 'body'=> $request->body];
        //$request->validate([
         //   'title' => 'required',
           // 'body' => 'required'
        //]);
        // $blog = Blog::create($request->all());
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required'
        // ]);
        $userId = auth()->user()->id;
        $a = Blog::create(['title' => $request->title, 'body' => $request->body, 'image' => $checkStored, 'user_id' => $userId]);
        if($a){
            return redirect('/blogs')->with("success", "Blog has been created!");
        } else {
            return redirect()->back()->with("error", "Sorry! Your blog is not created");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog_id)
    {
        $blog = Blog::find($blog_id);
        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blog_id)
    {
        $specificBlog = Blog::find($blog_id);
        return view('blogs.edit')->with('specificBlog', $specificBlog);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $blog_id)
    {
        $specId = Blog::find($blog_id);
        $b = $specId->update(['title'=> $request->title, 'body'=> $request->body]);
        if ($b) {
        return redirect("/blogs")->with("successMessage", "Blog Updated Successfully ");
        }
        return redirect()->back()->with("errorMessage", "It is obviously not working");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog_id)
    {
        // To delete from the database
        // $blog = Blog::find($blog_id);
        // if($blog->image){
        //     Storage::delete('public/images/'. $blog->image)
        // }
        $deleteSpecs = Blog::find($blog_id);
        $dd = $deleteSpecs->delete();
        if ($dd) {
          return redirect("/blogs")->with("successMessage", "Blog Deleted Successfully ");
        }
        return redirect("/blogs")->with("errorMessage", "It is obviously not working");

    }
}
