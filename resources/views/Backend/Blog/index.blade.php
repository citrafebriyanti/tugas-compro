@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
                        </div>
                        <div class="card-body">
                            <a href="http://127.0.0.1:8000/backend/blog/tambah" class="btn btn-primary mb-2">Tambah
                                blog</a>
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                            $no=1;
                        @endphp
                      @foreach ($blog as $item)
                                        
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->title}}</td>
                                            <td><img src="{{asset($item->file)}}" width="200" alt="images"></td>
                                        <td><a href="{{route('backend.blog.edit',$item->id)}}" class="btn btn-warning">edit</a>
                                            <form action="http://127.0.0.1:8000/backend/blog/aksi_hapus/1" method="post">
                                                @csrf
                                                <button class="btn btn-danger">Hapus</button>
                                            </form>
                                                <input type="hidden" name="_token" value="dVOiOcK6sUUFXAUWEe9Zr9PCp1IzwkXUV9FSoPAH" autocomplete="off">


                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection