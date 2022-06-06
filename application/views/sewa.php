

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
              
              <form class="form-horizontal" method="post" action="<?= base_url('dashboard/prosessewa'); ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama Penyewa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_penyewa" id="" placeholder="Nama Penyewa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nohp" id="" placeholder="No. HP">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="area" class="form-control" name="alamat" id="" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                      <!-- <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori"> -->
                      <!-- <?php
                        // for($a=1; $a<=5; $a++){
                      ?> -->
                            <select class="mb-2 custom-select" name="id1" id="kategori" onChange="Select();">
                                <option value="">---Pilih Buku---</option>
                                <?php
                                    foreach($books as $book){
                                ?>
                                    <option value="<?= $book->id_listbuku ?>"><?= $book->judul_buku ?></option>
                                <?php 
                                    }
                                ?>
                            </select>
                            <select class="mb-2 custom-select " name="id2" id="kategori2" onChange="Select2();">
                                <option value="">---Pilih Buku---</option>
                                <?php
                                    foreach($books as $book){
                                ?>
                                    <option value="<?= $book->id_listbuku ?>"><?= $book->judul_buku ?></option>
                                <?php 
                                    }
                                ?>
                            </select>
                            </select>
                                <select class="mb-2 custom-select kategori" name="id3" id="kategori3" onChange="Select3();">
                                <option value="">---Pilih Buku---</option>
                                <?php
                                    foreach($books as $book){
                                ?>
                                    <option value="<?= $book->id_listbuku ?>"><?= $book->judul_buku ?></option>
                                <?php 
                                    }
                                ?>
                            </select>
                            </select>
                                <select class="mb-2 custom-select kategori" name="id4" id="kategori4" onChange="Select4();">
                                <option value="">---Pilih Buku---</option>
                                <?php
                                    foreach($books as $book){
                                ?>
                                    <option value="<?= $book->id_listbuku ?>"><?= $book->judul_buku ?></option>
                                <?php 
                                    }
                                ?>
                            </select>
                            </select>
                                <select class="mb-2 custom-select kategori" name="id5" id="kategori5" onChange="Select5();">
                                <option value="">---Pilih Buku---</option>
                                <?php
                                    foreach($books as $book){
                                ?>
                                    <option value="<?= $book->id_listbuku ?>"><?= $book->judul_buku ?></option>
                                <?php 
                                    }
                                ?>
                            </select>
                        <!-- <?php //} ?> -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Total Harga Sewa</label>
                    <div class="col-sm-10">
                      <label class="col-form-label" name="total_harga" id="harga_sewa" placeholder="Harga Sewa" readonly></label>
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
