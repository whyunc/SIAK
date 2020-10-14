@extends('index')

@section('content')
<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Tabel Mata Kuliah</h3>
			<div class="right">
				<!-- Trigered Modal-->
				<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
					<i class="lnr lnr-plus-circle"></i>
				</button>
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead align="center">
					<tr>
						<th>Nama Mata Kuliah</th>
						<th>Kode </th>
						<th>Semester</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data_matkul as $matkul)
						<tr>
							<td>{{$matkul -> nama_matkul}}</td>
							<td>{{$matkul -> kode_matkul}}</td>
							<td>{{$matkul -> semester}}</td>
							<td>
								<a href="" class="btn btn-info"> edit </a>
								<a href="/matkul/{{$matkul -> id}}/delete" class="btn btn-danger"> delete</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 align="center" class="modal-title" id="exampleModalLabel">Daftarkan Mata Kuliah</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="matkul/create" method="POST">
									{{csrf_field()}}
									<div class="form-group">
	                  					<label for="exampleInputEmail1">Nama Mata Kuliah</label>
	                  					<input name="nama_matkul" type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" required="true">
	                				</div>
	                				<div class="form-group">
	                  					<label for="exampleInputEmail1">Kode Mata Kuliah</label>
	                  					<input name="kode_matkul" type="text" class="form-control" placeholder="Masukkan NPM" required="true">
	                				</div>
	                				<div class="form-group">
	                					<label for="exampleFormControlSelect1">Semester</label>
	                					<select name="semester" class="form-control" id="exampleFormControlSelect1">
	                						<option>Ganjil</option>
	                						<option>Genap</option>
	                					</select>
	                				</div>
	                				<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save </button>
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
@endsection