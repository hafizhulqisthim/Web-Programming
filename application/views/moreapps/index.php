<br>
<div class="container">
    <div class="content-wrapper">
    <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/jquery.dataTables.js'; ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/datatables.js'; ?>"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
        <link href="http://localhost/unlist3/assets/css/sb-admin-2.min.css" rel="stylesheet">
       
    <!-- Begin Page Content -->

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2 bg-primary">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1">NUMBER OF MEMBERS</div>
                  <div class="h1 mb-0 font-weight-bold text-white">
                    <?php
                    $where = ['is_active != 0'];
                    $totalanggota = $this->ModelUser->total_anggota('is_active', $where);
                    echo $totalanggota;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-3x text-warning"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1">REGISTERED APPLICATION STOCK</div>
                  <div class="h1 mb-0 font-weight-bold text-white">
                    <?php
                    $where = ['stok != 0'];
                    $totalstok = $this->ModelAplikasi->total('stok', $where);
                    echo $totalstok;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('moreapps'); ?>"><i class="fas fa-clipboard-list fa-3x text-primary"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    

        <div class="container-fluid">

            <div class="text-center">
                <h2 class="section-heading text-uppercase">  </h2>
                <h3 class="section-subheading text-muted">
                    Want to explore something:
                </h3>
            </div>
            <br><br>


            <!--<div class="container">
                <table class="table">
                    <tr>
                        <th>NR</th>
                        <th>NAME</th>
                        <th>INFO</th>
                        <th>IMAGE</th>
                        <th>LINK</th>
                    </tr>-->
                    <!--<?php print_r($feed_back); ?>-->
                    <!--<?php 
                    $nr=1;
                    foreach ($tbmoreapps as $tbm) {
                    ?>
                    <tr>
                        <td><?php echo $nr++ ?> </td>
                        <td><?php echo $tbm['name']; ?> </td>
                        <td><?php echo $tbm['info']; ?> </td>
                        <td>
                            <div class="col-md-3">
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/src/assets/img/portfolio/') . $tbm['image'];?>" class="img-fluid img-thumbnail" alt="...">
                                </picture></td>
                            </div>
                        </td>   
                        <td>
                        <a href="<?php echo base_url('home/edit/').$tbm['id']; ?>" class="btn btn-success btn-sm">to the web</a>
                        <a href="<?php echo base_url('home/delete/').$tbm['id']; ?>" class="btn btn-danger btn-sm" onclick = "javascript : return confirm('Are you sure to delete this data?')">download</a>
                        </td>   
                    </tr>
                    <?php } ?>
                </table>
            </div>-->

        </div>
        <!-- /.container-fluid -->
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NR</th>                        
                        <th scope="col">NAME</th>
                        <th scope="col">INFO</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">LINK</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $a = 1;
                        foreach ($tbmoreapps as $tbm) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        
                        <td><?= $tbm['name']; ?></td>
                        <td><?= $tbm['info']; ?></td>
                        
                        <!--<td>
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                 <img src="http://localhost/unlist3/assets/src/assets/img/portfolio/instander.png" class="img-fluid img-thumbnail" alt="...">
                            </picture>
                            </td>-->
                        <td>
                            <div class="col-md-3">
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/src/assets/img/portfolio/') . $tbm['image'];?>" class="img-fluid img-thumbnail" alt="...">
                                </picture></td>
                            </div>
                        </td>
                        <td>
                        
                            <a href="<?= $tbm['link']; ?>" class="badge badge-primary"><i class="fas fa-link"></i> to the web</a>
                            <a href="<?= $tbm['download']; ?>" onclick = "javascript : return confirm('Are you sure to download?')" class="badge badge-warning"><i class="fa fa-download"></i> download</a>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </div>
    <!-- End of Main Content -->

</div>
