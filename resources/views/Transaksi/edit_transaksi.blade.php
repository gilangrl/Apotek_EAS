@extends('master.index')

@section('edit_transaksi')
<div class="row" style="margin-top: 10%; box-shadow: 10px 4px 5px rgba(0,0,0,0.8); border-radius:10px;">
    <div class="col-12">
        <h4 class="header-title">Tambah Obat</h4>
        <div class="card">
            <div class="card-body">
                
                <form action="/update_transaksi/{{$data->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul>
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                            <div class="col-4">
                                <label for="exampleInputText" class="form-label">Nama Obat</label>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="nama_obat" style="margin-left: 22vh; 
                                    margin-top: -5vh;">
                                      <option value="{{$data->id_obat}}">{{$data->obat->nama_obat}}</option>
                                      @foreach ($data as $dt)
                                      <option value="{{$dt->id}}">{{$dt->nama_obat}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            </li>
                        </div>
                        
                        
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Jumlah Beli</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jumlah" id="floatingInput" placeholder="masukan nama Obat" value="{{$data->jumlah}}" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        
  
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="col-4">
                                   <label for="exampleInputText" class="form-label">Harga</label>
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example" name="harga" value="{{$data->harga}}" style="margin-left: 22vh; margin-top: -3vh;">
                                          <option value="{{$data->id_obat}}">{{$data->obat->harga}}</option>
                                          @foreach ($data as $dt)
                                          <option value="{{$dt->id}}">{{$dt->harga}}</option>
                                          @endforeach
                                        </select>
                                    </div>
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
@endsection