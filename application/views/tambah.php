

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
                       
            <div class="card card-info">
              
              <form class="form-horizontal" method="post" action="<?= base_url('dashboard/prosestambah'); ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">ID Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="ID Buku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori"> -->
                      <select class="custom-select" name="kategori">
                          <?php
                            foreach($kategories as $kategori){
                          ?>
                            <option value="<?= $kategori->kategori ?>"><?= $kategori->kategori ?></option>
                          <?php 
                            }
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Harga Sewa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="harga_sewa" id="harga_sewa" placeholder="Harga Sewa">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="<?= base_url('dashboard/book'); ?>" class="btn btn-default float-right">Kembali</a>
                    </div>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
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
