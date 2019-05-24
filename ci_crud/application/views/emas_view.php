<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-GOLD</title>
    <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


  <div class="container">
    <h1>E GOLD</h1>
</center>
    <h3>Data Emas</h3>
    <br><a href="<?php echo base_url('Home')?>">Kembali</a>
    <br />
    <button class="btn btn-success" onclick="add_emas()"><i class="glyphicon glyphicon-plus"></i> Tambah Emas</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Kategori</th>
					<th>Berat</th>
					<th>Harga</th>
          <th>Stok</th>
          <th>Gambar</th>
          <th>Keterangan</th>
          <th style="width:125px;">Aksi
          </p></th>
        </tr>
      </thead>
      <tbody>
				<?php foreach($vbarang as $barang){?>
				     <tr>
				        <td><?php echo $barang->id_Barang;?></td>
				        <td><?php echo $barang->nama;?></td>
								<td><?php echo $barang->nama_kategori;?></td>
								<td><?php echo $barang->berat;?></td>
								<td><?php echo $barang->harga;?></td>
                <td><?php echo $barang->stok;?></td>
                <td><?php echo $barang->gambar;?></td>
                <td><?php echo $barang->keterangan;?></td>
								<td>
									<button class="btn btn-warning" onclick="edit_barang(<?php echo $barang->id_Barang;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_barang(<?php echo $barang->id_Barang;?>)"><i class="glyphicon glyphicon-remove"></i></button>


								</td>
				      </tr>
				     <?php }?>



      </tbody>

      <tfoot>
        <tr>
          <th>Book ID</th>
          <th>Book ISBN</th>
          <th>Book Title</th>
          <th>Book Author</th>
          <th>Book Category</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>

  </div>

  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;

    function add_emas()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_barang(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('index.php/emas/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id_Barang"]').val(data.id_Barang);
            $('[name="nama"]').val(data.nama);
            $('[name="berat"]').val(data.berat);
            $('[name="harga"]').val(data.harga);
            $('[name="stok"]').val(data.stok);
            $('[name="keterangan"]').val(data.keterangan);
            $('[name="id_Kategori"]').val(data.id_Kategori);
            $('[name="gambar"]').val(data.gambar);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data Emas'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('index.php/book/book_add')?>";
      }
      else
      {
        url = "<?php echo site_url('index.php/book/book_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_barang(id)
    {
      if(confirm('Data yang akan dihapus tidak dapat kembali, apakah anda yakin?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('index.php/emas/barang_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error saat menghapus data');
            }
        });

      }
    }

  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Tambah Data Emas</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id_Barang"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Nama Barang</label>
              <div class="col-md-9">
                <input name="nama" placeholder="Nama Barang" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Berat</label>
              <div class="col-md-9">
                <input name="berat" placeholder="Berat" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Harga</label>
              <div class="col-md-9">
								<input name="harga" placeholder="Harga" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Stok</label>
              <div class="col-md-9">
                <input name="stok" placeholder="Book Author" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Keterangan</label>
              <div class="col-md-9">
                <input name="keterangan" placeholder="Keterangan" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kategori</label>
              <div class="col-md-9">
                <input name="id_Kategori" placeholder="Kategori" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Gambar</label>
              <div class="col-md-9">
                <input name="gambar" placeholder="Gambar" class="form-control" type="text">

              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  </body>
</html>
