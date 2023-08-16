@extends('master.index')

@section('tampil_obat')
<div class="row py-2">
	<div class="col-sm-12">
		<h4 class="header-title" style="margin-top:3em;">Data Obat</h4>
		<div class="" style=" box-shadow: 10px 4px 5px rgba(0,0,0,0.8); border-radius:10px;">
			<div class=" p-5"> 
				<a href="{{route('tampil_obat')}}" class="btn btn-success">
					<i class="fa-solid fa-plus" style="color: #fff;"></i>
					Tambah Obat
				</a>

			    <table class="table table-striped table-hover " style="margin-top:10px;">
			        <thead class="text">
			            <tr class="text-dark">
			                <th>No</th>
			                <th>Gambar</th>
			                <th>Nama Obat</th>
			                <th>Jenis Obat</th>
			                <th>Stok</th>
			                <th>Harga</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			    
			    
			        <tbody class="text">
			        	@foreach ($data as $row => $rows)
			            <tr>
			            	<td>{{ $data->firstItem() + $row}}</td>
			            	<td>
			            		<img src="{{asset('foto_obat/'. $rows->gambar)}}" width="100" height="100" alt="Gambar" class="rounded-circle">
			            	</td>
			                <td>{{$rows->nama_obat}}</td>
			                <td>{{$rows->jenis_obat}}</td>
			                <td>{{$rows->stok}}</td>
			                <td>{{$rows->harga}}</td>
			                <td>
			                	<a class="btn btn-info update" type="button"  href="/edit_obat/{{$rows->id}}">
                                 <i class="fas fa-pencil-alt"></i>
                               	</a>
                               	<a class="btn btn-danger delete" type="button" data-id="{{$rows->id}}" data-nama="{{ $rows->nama_obat}}"  href="#">
                                 <i class="fas fa-trash"></i>
                               	</a>
			                </td>
			            </tr>
			            @endforeach
			        </tbody>
			        <form action="{{ route('search') }}" method="get">
	                    @csrf
	                    <div class="col-4 float-end">
	                        <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search"  name="search">
	                    </div>
                	</form>
			    </table>

			    {{ $data->links() }}
			</div>
		</div> <!-- end card-->
	</div> <!-- end col-->
</div>

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
		  	window.location ="/delete/"+obatid+""
		    swal("Data berhasil dihapus!", {
		      icon: "success",
		    });
		  } else {
		    swal("Data tidak jadi dihapus!");
		  }
		});
	});
</script>

@endsection