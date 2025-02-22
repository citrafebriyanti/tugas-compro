@extends('backend.layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Edit Blog</h2>
            @if ($errors)
            @foreach ($errors->all() as $item)
            <p class="text-danger"> {{ $item }}</p>
            @endforeach
            @endif
            <form class="user" action="{{ route('backend.blog.aksi_edit',$blog->id) }}" enctype="multipart/form-data"method="post">
               
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control form-control-user" 
                        aria-describedby="emailHelp" placeholder="Masukan judul" value="{{$blog->title}}">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control editor" placeholder="masukan deskripsi" 
                 cols="30" rows="3">{{$blog->description}}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control form-control-user"
                     placeholder="Masukan file">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-user ">
                       Edit
                    </button>
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        var ext_toolbar = [ 
 'heading', '|', 'bold', 'italic', 'link', 'numberedList', 'bulletedList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '|', 'uploadImage', 'insertTable', 'alignment',
]
    ClassicEditor
    .create( document.querySelector(`.editor`), {
      alignment: {
        options: [ 'left', 'right' ]
      },
      toolbar: ext_toolbar
   
    } )
    .then( editor => {
      window.editor = editor;
    } )
    .catch( err => {
      console.error( err.stack );
    } );
    </script>
@endsection