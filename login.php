<?php include("header-login.php"); ?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Masuk atau Daftar</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Masuk</a></li>
                            <li><a href="#Registration" data-toggle="tab">Daftar</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">Masuk</button>
                                        <a href="javascript:;">Lupa Password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Nama" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="handphone" class="col-sm-2 control-label">Handphone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="handphone" placeholder="Handphone" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
																<div class="form-group">
                                    <label for="lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <form id="ttl" name="ttl" action="">
																					<select name="tanggal">
																						<option value="">Tanggal</option>
																						<?php for ($tanggal=1; $tanggal < 31; $tanggal++) { ?>
																							<option value="<?php echo $tanggal; ?>">
																								<?php echo $tanggal; ?>
																							</option>
																					<?php	} ?>
																					</select>
																					<select name="bulan">
																						<option value="">Bulan</option>
																						<?php
																							$namabulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember" );
																						?>
																						<?php for ($bulan=1; $bulan <= 12 ; $bulan++) { ?>
																							<option value="<?php echo $bulan; ?>">
																								<?php echo $namabulan[$bulan-1]; ?>
																							</option>
																					<?php	} ?>
																					</select>
																					<select name="tahun">
																						<option value="">Tahun</option>
																						<?php for ($tahun=2017; $tahun >= 1950; $tahun--) { ?>
																								<option value="<?php echo $tahun; ?>">
																									<?php echo $tahun; ?>
																								</option>
																						<?php } ?>
																					</select>
																				</form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm">Simpan & Lanjutkan</button>
                                        <button type="button" class="btn btn-default btn-sm">Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<?php include 'footer.php'; ?>
