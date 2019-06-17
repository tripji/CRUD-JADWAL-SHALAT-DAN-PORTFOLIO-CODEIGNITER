                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Input User</strong>
                            </div>
                                <form action="<?php echo base_url('user/tambah_aksi');?>" method="post" class="form-horizontal">
                            <div class="card-body card-block">                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"> <label class=" form-control-label">ID</label> </div>
                                        <div class="col-12 col-md-9"> <input type="text" id="id" name="id" class="form-control" readonly> </div>
                                    </div>                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="username" name="username" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="password" name="password" class="form-control"></div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <button class="btn btn-danger btn-sm"><a href="<?php echo base_url('user');?>" class="icon text-white">Kembali</a></button>
                            </div>
                        </form> 
                        </div>
                    </div>