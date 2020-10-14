@extends('index')

@section('content')
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Tabel Mahasiswa</h3>
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
						<th>Nama</th>
						<th>NPM</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data_mahasiswa as $mahasiswa)
						<tr>
							<td><a href="mahasiswa/{{$mahasiswa->id}}/detail"> {{$mahasiswa -> nama}}</a></td>
							<td>{{$mahasiswa -> npm}}</td>
							<td>{{$mahasiswa -> jenis_kelamin}}</td>
							<td>{{$mahasiswa -> alamat}}</td>
							<td>{{$mahasiswa -> email}}</td>
							<td>
								<a href="" class="btn btn-info"> edit </a>
								<a href="mahasiswa/{{$mahasiswa -> id}}/delete" class="btn btn-danger"> delete</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{$data_mahasiswa-> links()}}
		</div>
	</div>


				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 align="center" class="modal-title" id="exampleModalLabel">Daftar Mahasiswa</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="mahasiswa/create" method="POST">
									{{csrf_field()}}
									<div class="form-group">
	                  					<label for="exampleInputEmail1">Nama Mahasiswa</label>
	                  					<input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" required="true">
	                				</div>
	                				<div class="form-group">
	                  					<label for="exampleInputEmail1">NPM</label>
	                  					<input name="npm" type="text" class="form-control" placeholder="Masukkan NPM" required="true">
	                				</div>
	                				<div class="form-group">
	                					<label for="exampleFormControlSelect1">Example select</label>
	                					<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
	                						<option>Pria</option>
	                						<option>Wanita</option>
	                					</select>
	                				</div>
	                				<div class="form-group">
	                					<label for="exampleFormControlTextarea1">Alamat</label>
	                					<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	                				</div>
	                				<div class="form-group">
	                  					<label for="exampleInputEmail1">Email</label>
	                  					<input name="email" type="email" class="form-control" placeholder="Masukkan Email" required="true">
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