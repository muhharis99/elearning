<div class="row layout-spacing">
  <div class="col-lg-12">
    <div class="statbox widget box box-shadow">
      <div class="widget-content widget-content-area">
        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModal"> Tambah Data </button>
        <?php $this->load->view('master/vkelas', array('data'=>$data)); // Load file view.php dan kirim data siswanya ?>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input type="text" class="form-control" id="exampleFormControlInput2">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal">
            <i class="flaticon-cancel-12"></i> Discard </button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>