

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
                       
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  List Buku
                </h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
          <div class="col-12">
            <form method="post" action="<?= base_url('dashboard/proseshapus'); ?>">

              <div class="card">
               
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th><input type="checkbox" value="" name="" id="" disabled></th>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Harga Sewa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach($books as $book ) {
                      ?>
                        <tr>
                          <td>
                            <input type="checkbox" value="<?= $book->id_listbuku ?>" name="checklist[]" id="">
                          </td>
                          <td><?= $book->id_buku ?></td>
                          <td><?= $book->judul_buku ?></td>
                          <td><?= $book->kategori ?></td>
                          <td>Rp. <?= number_format($book->harga_sewa,2,',','.') ?></td>
                        </tr>
                     <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                      <div class="row">
                          <a href="<?= base_url('dashboard/tambah'); ?>" type="button" class="btn btn-info">Tambah</a>
                          <button type="submit" class="btn btn-default float-right">Hapus</button>
                      </div>
                  </div>
              </div>
            </form>
            <!-- /.card -->
          </div>
        </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> -->
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
