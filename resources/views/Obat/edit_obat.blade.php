@extends('master.index')

@section('edit')
<div class="row" style="margin-top: 10%; box-shadow: 10px 4px 5px rgba(0,0,0,0.8); border-radius:10px;">
    <div class="col-12">
        <h4 class="header-title">Edit Obat</h4>
        <div class="card">
            <div class="card-body">
                
                <form action="/update_obat/{{$data->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul>
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Nama Obat</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_obat" value="{{$data->nama_obat}}"  placeholder="masukan nama Obat" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        
                        
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Jenis Obat</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_obat" value="{{$data->jenis_obat}}"  placeholder="masukan nama Obat" style="margin-left: 22vh; margin-top: -5vh;">
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
                                        <input type="file" class="form-control" name="gambar" value="{{ $data->gambar }}">
                                        <input type="hidden" class="form-control">
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
                                    <input class="form-control" name="harga" type="text" id="text" value="{{$data->harga}}"  style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="form-label">Stok Obat</label>
                                </div>
                                <div class="col-xl-3">
                                    <input class="form-control" type="text" id="text" name="stok" value="{{$data->stok}}" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                    </ul>
                    <button type="submit" class="btn btn-primary float-end update">Submit</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.update').click(function(){
        swal("Data Berhasil di update!", "You clicked the button", "success");
    });
</script>
@endsection