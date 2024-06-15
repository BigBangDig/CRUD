@extends('layout.template')
@section('content')

<form action='{{url('ecommers/'.$data->id)}}' method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('/ecommers')}}' class="btn btn-secondary">< Kembali</a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                {{$data->id}}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='title' value="{{$data->title}}" id="title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="{{$data->description}}" id="description">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='harga' value="{{$data->harga}}" id="harga">
                @error('harga')
                <small>{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="image_url" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" id="image">
                @error('image')
                <small>{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>

<!-- AKHIR FORM -->
@endsection
