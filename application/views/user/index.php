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

        <div class="container-fluid">

           <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nama']; ?></h5>
                            <p class="card-text"><?= $user['email']; ?></p>
                            <p class="card-text"><small class="text-muted">Become a member since: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></small></p>
                        </div>
                        <div class="btn btn-info ml-3 my-3">
                            <a href="<?= base_url('profile/ubahProfil'); ?>" class="text text-white"><i class="fas fa-user-edit"></i> Change Profile</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h2 class="section-heading text-uppercase">  </h2>
                <h3 class="section-subheading text-muted">
                    Your history feedback:
                </h3>
            </div>
            <br><br>


            <div class="container">
                <table class="table">
                    <tr>
                        <th>NR</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>COMMENT</th>
                        <th>ACTION</th>
                    </tr>
                    <!--<?php print_r($feed_back); ?>-->
                    <?php 
                    $nr=1;
                    foreach ($feed_back as $fdb) {
                    ?>
                    <tr>
                        <td><?php echo $nr++ ?> </td>
                        <td><?php echo $fdb['name']; ?> </td>
                        <td><?php echo $fdb['email']; ?> </td>
                        <td><?php echo $fdb['comment']; ?> </td>   
                        <td>
                        <a href="<?php echo base_url('home/edit/').$fdb['id']; ?>" class="btn btn-success btn-sm">Update</a>
                        <a href="<?php echo base_url('home/delete/').$fdb['id']; ?>" class="btn btn-danger btn-sm" onclick = "javascript : return confirm('Are you sure to delete this data?')">Delete</a>
                        </td>   
                    </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

</div>
