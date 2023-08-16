@extends('master.index')

@section('add_obat')

<!-- Form row -->
<div class="row" style="margin-top: 10%; box-shadow: 10px 4px 5px rgba(0,0,0,0.8); border-radius:10px;">
    <div class="col-12">
        <h4 class="header-title">Tambah Obat</h4>
        <div class="card">
            <div class="card-body">
                
                <form action="/insert_obat" method="post" enctype="multipart/form-data">
                	@csrf
                    <ul>
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Nama Obat</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_obat" id="floatingInput" placeholder="masukan nama Obat" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        
                        
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Jenis Obat</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_obat" id="floatingInput" placeholder="masukan nama Obat" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        
                        
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Foto Obat</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group" style="margin-left: 22vh; margin-top: -5vh;">
                                        <input type="file" class="form-control" name="gambar" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" 
                                        aria-label="Upload">
                                        <span class="input-group-text">
                                          <i class="fas fa-camera"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="form-label">Harga Obat</label>
                                </div>
                                <div class="col-xl-3">
                                    <input class="form-control" name="harga" type="text" id="text"   style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="form-label">Stok Obat</label>
                                </div>
                                <div class="col-xl-3">
                                    <input class="form-control" type="text" id="text" name="stok"  style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                    </ul>
                    <button type="submit" class="btn btn-lg btn-primary float-end mb-3">Submit</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection