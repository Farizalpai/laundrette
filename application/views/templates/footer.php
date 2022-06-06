<footer class="main-footer">
    
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/'); ?>dist/js/pages/dashboard.js"></script>
<script type="text/javascript">
    // $('.kategori').change(function(){
    //     var id = $(".kategori").val();
    //     console.log(id)
    // })
    window.localStorage.setItem('harga','0')
    function Select(){
        var id = document.getElementById('kategori').value
       
            $.ajax({
                type: 'POST',
                url: '<?= base_url('dashboard/totalharga'); ?>',
                data: 'id=' + id,
                dataType: 'JSON',
                success: function(data){
                    
                    var harga = parseInt(data.harga[0].harga_sewa)
                    var data = parseInt(window.localStorage.getItem('harga'))
                    var hitung = harga + data
                    window.localStorage.removeItem('harga')
                    window.localStorage.setItem('harga',hitung)
                    let before = parseInt(window.localStorage.getItem('harga'))
                    let show = before.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    console.log(show)
                    $("#harga_sewa").html(show)
                    // window.localStorage.removeItem('klik')
                    // window.localStorage.setItem('klik',1)
                    // console.log('ini = ', show)
                }
                
            })
      
    }
    function Select2(){
        var id2 = document.getElementById('kategori2').value
        // console.log(id2)
        $.ajax({
            type: 'POST',
            url: '<?= base_url('dashboard/totalharga'); ?>',
            data: 'id=' + id2,
            dataType: 'JSON',
            success: function(data){
                var harga = parseInt(data.harga[0].harga_sewa)
                    var data = parseInt(window.localStorage.getItem('harga'))
                    var hitung = harga + data
                    window.localStorage.removeItem('harga')
                    window.localStorage.setItem('harga',hitung)
                    let before = parseInt(window.localStorage.getItem('harga'))
                    let show = before.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    $("#harga_sewa").html(show)
            }
            
        })
    }
    function Select3(){
        var id3 = document.getElementById('kategori3').value
        // console.log(id2)
        $.ajax({
            type: 'POST',
            url: '<?= base_url('dashboard/totalharga'); ?>',
            data: 'id=' + id3,
            dataType: 'JSON',
            success: function(data){
                var harga = parseInt(data.harga[0].harga_sewa)
                    var data = parseInt(window.localStorage.getItem('harga'))
                    var hitung = harga + data
                    window.localStorage.removeItem('harga')
                    window.localStorage.setItem('harga',hitung)
                    let before = parseInt(window.localStorage.getItem('harga'))
                    let show = before.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    $("#harga_sewa").html(show)
            }
            
        })
    }
    function Select4(){
        var id4 = document.getElementById('kategori4').value
        // console.log(id2)
        $.ajax({
            type: 'POST',
            url: '<?= base_url('dashboard/totalharga'); ?>',
            data: 'id=' + id4,
            dataType: 'JSON',
            success: function(data){
                var harga = parseInt(data.harga[0].harga_sewa)
                    var data = parseInt(window.localStorage.getItem('harga'))
                    var hitung = harga + data
                    window.localStorage.removeItem('harga')
                    window.localStorage.setItem('harga',hitung)
                    let before = parseInt(window.localStorage.getItem('harga'))
                    let show = before.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    $("#harga_sewa").html(show)
            }
            
        })
    }
    function Select5(){
        var id5 = document.getElementById('kategori5').value
        // console.log(id2)
        $.ajax({
            type: 'POST',
            url: '<?= base_url('dashboard/totalharga'); ?>',
            data: 'id=' + id5,
            dataType: 'JSON',
            success: function(data){
                var harga = parseInt(data.harga[0].harga_sewa)
                    var data = parseInt(window.localStorage.getItem('harga'))
                    var hitung = harga + data
                    window.localStorage.removeItem('harga')
                    window.localStorage.setItem('harga',hitung)
                    let before = parseInt(window.localStorage.getItem('harga'))
                    let show = before.toLocaleString("id-ID", {style:"currency", currency:"IDR"});
                    $("#harga_sewa").html(show)
            }
            
        })
    }
</script>
</body>
</html>
