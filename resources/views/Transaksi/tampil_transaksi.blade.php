@extends('master.index')

@section('tampil_transaksi')
	<div class="row py-2">
	<div class="col-sm-12">
		<h4 class="header-title" style="margin-top:3em;">Data Penjualan</h4>
		<div class="" style=" box-shadow: 10px 4px 5px rgba(0,0,0,0.8); border-radius:10px;">
			<div class=" p-5"> 
				<a href="{{route('tambah_transaksi')}}" class="btn btn-success">
					<i class="fa-solid fa-plus" style="color: #fff;"></i>
					Tambah Penjualan
				</a>

			    <table class="table table-striped table-hover " style="margin-top:10px;">
			        <thead class="text">
			            <tr class="text-dark">
			                <th>No</th>
			                <th>Nama Obat</th>
			                <th>Jumlah Beli</th>
			                <th>Harga</th>
			                <th>subtotal</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			    
			    
			        <tbody class="text">
			        	@php
			        		$price=0;
			        	@endphp

			        	@foreach ($data as $row)
			            <tr>
			            	<td>{{$loop->iteration}}</td>
			            	<td>
			            		@if(isset($row->obat))
					                {{$row->obat->nama_obat}}
					            @endif
			            	</td>
			                <td>
				                <input type="text" value="{{$row->jumlah}}">
			                </td>
			                <td>Rp.{{ optional($row->obat)->harga ?? 'N/A' }}</td>
			                <!-- SUBTOTAL -->
			                @php
			    				$subtotal = optional($row->obat)->harga * $row->jumlah ?? 0;
			    				$price+=$subtotal;
			    			@endphp
			                <td>Rp.
			                	@if(isset($row->obat))
					                {{ isset($row->obat->harga) ? $row->jumlah * $row->obat->harga : 'N/A' }}
					            @endif
			                </td>
			                <td>
                               	<a class="btn btn-danger delete" type="button" data-id="{{$row->id}}">
                                 <i class="fas fa-trash"></i>
                               	</a>
			                </td>
			            </tr>
			           @endforeach
			        </tbody>
			        
			        
			    </table>

			   
			    	<form action="" method="get">
			    		<div class="row">

					    <div class="col mt-2">
					        <label for="text" class="text">Total :</label>
					        <input type="text" name="total_harga" value="{{ $price }}">
					    </div>
					    <!-- PROSES PEMBAYARAN -->
					    @php
					        $total = request()->input('total_harga');
					        $bayar = request()->input('bayar');
					    @endphp

					    @if (isset($_GET['bayar_submit']))
					        @if ($bayar < $total)
					            @php
					                $kurang = $total - $bayar;
					            @endphp
					            <div class="alert alert-danger" role="alert">
					                Uang anda kurang!
					            </div>
					        @else
					            @php
					                $kembalian = $bayar - $total;
					            @endphp
					        @endif
					    @endif

					    <div class="col mt-2">
					        <label for="text" class="text">Bayar :</label>
					        <input type="text" name="bayar">
					        <button type="submit" class="btn btn-success" name="bayar_submit">Bayar</button>
					    </div>
					    
					    <div class="col mt-2">
					        <label for="text" class="text">Kembalian:</label>
					        <input type="text" name="kembalian" value="Rp.{{ isset($kembalian) ? $kembalian : '' }}">
					    </div>
					</div>
					</form>
			    
			   
			   
			</div>
		</div> <!-- end card-->
	</div> <!-- end col-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script>
	$('.delete').click(function(){
		var obatid = $(this).attr('data-id');
		var nama = $(this).attr('data-nama');
		swal({
		  title: "Yakin?",
		  text: "Kamu akan menghapus obat  "+nama+"",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		  	window.location ="/delete_transaksi/"+obatid+""
		    swal("Data berhasil dihapus!", {
		      icon: "success",
		    });
		  } else {
		    swal("Data tidak jadi dihapus!");
		  }
		});
	});
</script>
</div>
@endsection