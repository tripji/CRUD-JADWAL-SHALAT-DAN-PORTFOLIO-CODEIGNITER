 <?php foreach ($ramadhan as $d) { ?>            
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">                      
                      <div class="h6 font-weight-bold text-gray-800"><i class="fas fa-sm fa-calendar text-gray-300"></i> <?php echo $d->tgl ?></div>
                      <table width="100%">
                        <tr>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Imsak</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Subuh</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Terbit</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Dhuha</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Zuhur</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Asar</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Magrib</td>
                          <td class="text-xs font-weight-bold text-primary text-uppercase mb-1" align="center">Isya</td>
                        </tr>                      
                        <tr>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->imsak ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->subuh ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->terbit ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->dhuha ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->dzuhur ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->ashar ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->maghrib ?></td>
                          <td class="text-xs font-weight-bold text-info text-uppercase mb-1" align="center"><?php echo $d->isya ?></td>
                        </tr>                      
                      </table>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>

<?php } ?>