<?php
include 'header-user.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="img-profile">
				<img src="http://placehold.it/140x140" alt="Nama User" class="img-responsive img-circle">
				<h3>Nama User</h3>
			</div>
			<div class="menu-user">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a href="#absen" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="absen" >Absen</a>
						</div>
						<div class="col-md-12">
							<a href="#" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseRK" >Kelas</a>
						</div>
						<div class="col-md-12">
							<a href="#" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseRK" >Nilai</a>
						</div>
						<div class="col-md-12">
							<a href="#" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseRK" >Reward</a>
						</div>
						<div class="col-md-12">
							<a href="#" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseRK" >Sertifikat</a>
						</div>
						<div class="col-md-12">
							<a href="#" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseRK" >Buat Kelas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="table-responsive collapse" id="absen">
				<table class="table table-bordered table-hover">
					<tr class="tab-1">
						<td>Kelas</td>
						<td>Minggu 1</td>
						<td>Minggu 2</td>
						<td>Minggu 3</td>
						<td>Minggu 4</td>
					</tr>
					<tr>
						<td class="tab-2">Membaca</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="tab-2">Menulis</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="tab-2">Menggambar</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<hr>
<?php
include 'footer.php';
?>
