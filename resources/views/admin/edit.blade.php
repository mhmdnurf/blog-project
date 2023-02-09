@extends('admin.partials.main')
@section('container')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/admin/{{ $blog->id }}" method="POST">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1"
                            placeholder="Masukkan Judul" value="{{ old('judul', $blog->judul) }}">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Kategori</label>
                        <select class="form-control custom-select" name="kategori">
                            <option selected disabled value="{{ old('kategori', $blog->kategori) }}">
                                {{ old('kategori', $blog->kategori) }}</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Travel">Travel</option>
                            <option value="Otomotif">Otomotif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Konten</label>
                        <textarea id="summernote" name="konten">{{ old('konten', $blog->konten) }}
                            </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tag</label>
                        <input type="text" class="form-control" name="tag" value="{{ old('tag', $blog->tag) }}"
                            placeholder="Masukkan Tag">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penulis</label>
                        <input type="text" class="form-control" value="{{ old('penulis', $blog->penulis) }}"
                            name="penulis" placeholder="Masukkan Nama Penulis">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail11">Gambar</label>
                        <input type="text" class="form-control" value="{{ old('gambar', $blog->gambar) }}" name="gambar"
                            placeholder="Masukkan Link Gambar">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
