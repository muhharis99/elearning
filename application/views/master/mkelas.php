
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
          <a href="#" class="btn btn-primary mb-2 mr-2" onclick="panggilmodal('AddKelas')"><span class="fa fa-plus-circle"></span> Tambah Siswa</a>
        </div>
        <table id="style-3" class="table style-3  table-hover">
          <thead>
            <tr>
              <th width="10%">No</th>
              <th width="40%">ID Kelas</th>
              <th width="40%">Kelas</th>
              <th class="dt-no-sorting">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($allkelas as $row) : 
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['id']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td>
                    <!-- edit button -->
                    <a type="button" class="btn btn-info mb-2" href="#" onclick="panggilmodal('edit','<?= $row['id'] ?>','<?= $row['kelas'] ?>')">Edit</a> &nbsp;
                    <!-- delete button hidden -->
                    <a type="button" class="btn btn-danger mb-2 tombol-hapus" href="<?= 'Master/deleteKelas/'.$row['id'] ?>">Delete</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
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
                <input type="hidden" placeholder="" name="id" id="id" value='' class=""></input>
                <input type="hidden" placeholder="" id="url" class=""></input>
                <small class="form-text text-danger " id="salah"></small>
              <label for="kelas">Kelas</label>
              <select class="form-control" name="kelas" id="kelas" required>
                  <option value="">-- Pilih Kelas --</option>
                  <option value="I">I</option>
                  <option value="II">II</option>
                  <option value="III">III</option>
                  <option value="IV">IV</option>
                  <option value="V">V</option>
                  <option value="VI">VI</option>
                  <option value="VII">VII</option>
                  <option value="VIII">VIII</option>
                  <option value="IX">IX</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              <div class="valid-feedback"> Looks good! </div>
              <div class="invalid-feedback"> Please fill the name </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
          <div id="wait" style="display:none;position:relative;padding:2px;">
                       sedang diproses..<br><br>
                    </div>
        <button onclick="kirim()" type="button" class="btn btn-primary" id="btn_upload">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- js -->
<script type="text/javascript">

function panggilmodal(mode,id=null,name=null){
    
    $('#salah').html('')
    if (mode=='AddKelas'){
        var url='<?= base_url('Master/AddKelas/');?>'
        $('#url').val(url)
        $('#id').val('')
        $('#kelas').val('')
        $('#judulmodal').text('Tambah siswa')
        $('#btn_upload').text('Tambah siswa')
    }else if(mode=='edit'){
        var url='<?= base_url('Master/editKelas/');?>'
        $('#url').val(url)
        $('#id').val(id)
        $('#kelas').val(name)
        $('#btn_upload').text('Update siswa')
        $('#judulmodal').text('Update siswa')
    
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
                window.location.href='kelas';
            }

        // alert("Berhasil."+data);
        },
        complete:function(data){
        $("#wait").css("display", "none");
        }
    });
}

</script>