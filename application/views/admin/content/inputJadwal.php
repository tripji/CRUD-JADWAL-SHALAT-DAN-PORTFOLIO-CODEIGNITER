                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Input Jadwal Salat</strong>
                            </div>
                                <form action="<?php echo base_url('jadwal/tambah_aksi');?>" method="post" class="form-horizontal">
                            <div class="card-body card-block">                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"> <label class=" form-control-label">ID</label> </div>
                                        <div class="col-12 col-md-9"> <input type="text" id="id" name="id" class="form-control" readonly> </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl" name="tgl" class="form-control">
                                        </div>
                                        <!--<div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control">
                                        </div> -->
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Imsak</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="imsak" name="imsak" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subuh</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="subuh" name="subuh" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Terbit</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="terbit" name="terbit" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dhuha</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dhuha" name="dhuha" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Zuhur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dzuhur" name="dzuhur" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Asar</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="ashar" name="ashar" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Magrib</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="maghrib" name="maghrib" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Isya'</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="isya" name="isya" class="form-control"></div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <button class="btn btn-danger btn-sm"><a href="<?php echo base_url('jadwal');?>" class="icon text-white">Kembali</a></button>
                            </div>
                        </form> 
                        </div>
                    </div>