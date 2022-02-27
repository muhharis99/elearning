<div class="row layout-spacing">
  <div class="col-lg-12">
    <div class="statbox widget box box-shadow">
        <?php 
    $info = $this->session->flashdata('info');
    if(!empty($info))
    {
        echo $info;
    }
    ?>
      <div class="widget-content widget-content-area">
        <div class="text-left">
          <!-- <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModal" onclick="panggilmodal('tambah')"> Tambah Data </button> -->
          <a href="#" class="btn btn-primary mb-2 mr-2" onclick="panggilmodal('AddMapel')"><span class="fa fa-plus-circle"></span> Tambah Data</a>
        </div>
        <table id="style-3" class="table style-3  table-hover">
          <thead>
            <tr>
              <th width="5%">No</th>
              <!-- <th width="40%">ID Mapel</th> -->
              <th width="40%">Mapel</th>
              <th width="20%">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($allmapel as $row) : 
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <!-- <td><?= $row['id_mapel']; ?></td> -->
                <td><?= $row['mapel']; ?></td>
                <td>
                    <!-- edit button -->
                    <a type="button" class="btn btn-info mb-2" href="#" onclick="panggilmodal('edit','<?= $row['id_mapel'] ?>','<?= $row['mapel'] ?>')">Edit</a> &nbsp;
                    <!-- delete button hidden -->
                    <a type="button" class="btn btn-danger mb-2 tombol-hapus" href="<?= 'Master/deletemapel/'.$row['id_mapel'] ?>">Delete</a>
                    <!-- end hidden -->
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mapel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
      <div class="modal-body">
        <form id="submit">
          <div class="form-row">
            <div class="col-md-12 mb-4">
                <input type="hidden" placeholder="" name="mode" id="mode" value='' class=""></input>
                <input type="hidden" placeholder="" name="id_mapel" id="id_mapel" value='' class=""></input>
                <input type="hidden" placeholder="" id="url" class=""></input>
                <small class="form-text text-danger " id="salah"></small>
              <label for="mapel">mapel</label>
              <input class="form-control" type="text" id="mapel" name="mapel" required>
              <div class="valid-feedback"> Looks good! </div>
              <div class="invalid-feedback"> Please fill the name </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
          <div id="wait" style="display:none;position:relative;padding:2px;">
                       sedang diproses..<br><br>
                    </div>
        <input onclick="kirim()" type="submit" class="btn btn-primary" id="btn_upload" value="Simpan">
      </div>
      </form>
    </div>
  </div>
</div>


<!-- js -->
<script type="text/javascript">

function panggilmodal(mode,id=null,name=null){
    
    $('#salah').html('')
    if (mode=='AddMapel'){
        var url='<?= base_url('Master/AddMapel/');?>'
        $('#url').val(url)
        $('#id_mapel').val('')
        $('#mapel').val('')
        $('#btn_upload').text('Tambah mapel')
    }else if(mode=='edit'){
        var url='<?= base_url('Master/editMapel/');?>'
        $('#url').val(url)
        $('#id_mapel').val(id)
        $('#mapel').val(name)
        $('#btn_upload').text('Update mapel')
    
    }else{  
    }
    $('#exampleModal').modal('show')
    
}

function kirim(){
    var data=$('#submit').serialize()
    var url=$('#url').val()
    $("#wait").css("display", "block");//loading
    $("#btn_upload").attr("disabled", true);//btn disable on click
    $.ajax({    
        url:url,
        type:"post",
        data:data,
       
        success: function(data){
            if (data!=1){
                $('#salah').html(data)
                $('#exampleModal').modal('show')
                $("#btn_upload").attr("disabled", false);//btn enable
            }else{
                window.location.href='mapel';
            }

        // alert("Berhasil."+data);
        },
        complete:function(data){
        $("#wait").css("display", "none");
        }
    });
}

</script>