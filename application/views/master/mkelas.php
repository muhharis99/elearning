
<div class="row layout-spacing">
  <div class="col-lg-12">
    <div class="statbox widget box box-shadow">
      <div class="widget-content widget-content-area">
        <button type="button" class="btn btn-primary mb-2 mr-2" id="btn-tambah" data-toggle="modal" data-target="#form-modal" > Tambah Data </button>
        <?php $this->load->view('master/vkelas', array('data'=>$data)); // Load file view.php dan kirim data siswanya ?>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <div class="widget-content widget-content-area">
            <div class="form-group mb-4">
              <label for="exampleFormControlInput2">Nama Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
          </div>
        </div> 
        <div class="modal-footer">
                    <!-- Beri id "loading-simpan" untuk loading ketika klik tombol simpan -->
                    <div id="loading-simpan" class="pull-left">
                        <b>Sedang menyimpan...</b>
                    </div>

                    <!-- Beri id "loading-ubah" untuk loading ketika klik tombol ubah -->
                    <div id="loading-ubah" class="pull-left">
                        <b>Sedang mengubah...</b>
                    </div>
                    <input type="submit" name="" class="btn btn-primary" id="btn-simpan" value="Simpan">
                    <!-- Beri id "btn-simpan" untuk tombol simpan nya -->
                   <!--  <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button> -->
                   <input type="submit" name="" class="btn btn-primary" id="btn-ubah" value="Ubah">
                    <!-- Beri id "btn-ubah" untuk tombol simpan nya -->
                   <!--  <button type="button" class="btn btn-primary" id="btn-ubah">Ubah</button> -->

                   <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button> -->
                    <input type="reset" name="" class="btn btn-primary" id="btn-ubah" value="Tutup">
                </div>
     </form>
    </div>
  </div>
</div>
<script>
function refreshPage(){
    window.location.reload();
} 
</script>