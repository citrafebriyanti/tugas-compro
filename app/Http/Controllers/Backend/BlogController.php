<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blogs::get();
        return view('backend.blog.index', [
            'blog' => $blog
        ]);
    }
    public function tambah()
    {
        return view('backend.blog.tambah');
    }
    public function aksi_tambah(Request $request)
    {
       Blogs::insert([
        'title'=>$request->title,
        'slug'=>Str::slug($request->title),
        'description'=>$request->description,
        'file'=>'',
        'created_by'=>0
       ]);
       return redirect()->route('backend.blog');
    }
    public function edit($id){
       $blog= Blogs::where('id',$id)->first();
       $nama='syahma';
       $sekolah='smk ds';
       return view('backend.blog.edit',compact('blog','nama','sekolah'));
    }

    public function aksi_edit(request $request,$id){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'file' => 'file|mimes:jpg,png|max:2048'
        ]);
        $data=[
            'title'=>$request->title,
            'description' =>$request->description,
            'slug' =>str::slug($request->title)

        ];
        if($request->hasFile('file')){
            $file=$request->file('file');
            
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('blogs'),$filename);
            $data['file']='blogs/'.$filename;
            // hapus gambar
            $ambilDataBlog = Blogs::where('id', $id)->first();
            $this->hapus_gambar($ambilDataBlog->file);
            // dd('filenya ada',$file,time(),$file->getclientOriginalExtension());
        }
        Blogs::where('id',$id)->update($data);
        return redirect()->route('backend.blog'); 
       
    }
protected function hapus_gambar($gambar)
{
    if (file_exists($gambar)){
        unlink($gambar) ; 
     }
}
    
}
    
    

