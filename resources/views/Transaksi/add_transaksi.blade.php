@extends('master.index')

@section('add_transaksi')
	<div class="row" style="margin-top: 10%; box-shadow: 10px 4px 5px rgba(0,0,0,0.8); border-radius:10px;">
    <div class="col-12">
        <h4 class="header-title">Tambah Penjualan</h4>
        <div class="card">
            <div class="card-body">
                
                <form action="/insert_transaksi" method="post" enctype="multipart/form-data">
                	@csrf
                    <ul>
                        <div class="mt-4 mb-3 mt-3 row">
                        	<li>
                        	<div class="col-4">
                            	<label for="exampleInputText" class="form-label">Nama Obat</label>
						       	<div class="mb-3">
							        <select class="form-select" aria-label="Default select example" name="nama_obat"  style="margin-left: 22vh; margin-top: -5vh;">
							          <option selected>pilih obat</option>
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
                                    <input type="text" class="form-control" name="jumlah" id="floatingInput" placeholder="masukan nama Obat" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div>
                        
                       <!--  <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="text">
                                    <label for="text" class="col-sm-2 col-form-label">Total</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="total" id="floatingInput" placeholder="masukan nama Obat" style="margin-left: 22vh; margin-top: -5vh;">
                                </div>
                            </li>
                        </div> -->
  
                        <div class="mt-4 mb-3 mt-3 row">
                            <li>
                                <div class="col-4">
                                   <label for="exampleInputText" class="form-label">Harga</label>
    						        <div class="mb-3">
        						        <select class="form-select" aria-label="Default select example" name="harga"  style="margin-left: 22vh; margin-top: -3vh;">
        						          <option selected>pilih obat</option>
        						          @foreach ($data as $dt)
        						          <option value="{{$dt->id}}">{{$dt->harga}}</option>
        						          @endforeach
        						        </select>
    						        </div>
                                </div>  
                            </li>
                        </div>
                        
                    </ul>
                    <button type="submit" class="btn btn-lg btn-primary float-end mb-3 tmbl">Submit</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.tmbl').click(function(){
            swal({
              title: "Berhasil!",
              text: "produk ditambahkan!",
              icon: "success",
                timer: 3000,
            });
        });
    </script>
</div>
@endsection