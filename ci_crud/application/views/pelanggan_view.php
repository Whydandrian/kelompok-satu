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
    <h3>Tabel Pelanggan</h3>
    <br><a href="<?php echo base_url('Home')?>">Kembali</a>
    <br />
    <button class="btn btn-success" onclick="add_pelanggan()"><i class="glyphicon glyphicon-plus"></i> Add Pelanggan</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					
					<th>ID Pelanggan</th>
					<th>Email</th>
					<th>Username</th>
					<th>Password</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Umur</th>
          <th>No Rekening</th>
          <th>TTL</th>
          <th>No Telp</th>

          <th style="width:125px;">Action
          </p></th>
        </tr>
      </thead>
      <tbody>
				<?php foreach($pelanggan as $pelanggan){?>
				     <tr>
				         
				         <td><?php echo $pelanggan->Id_Pelanggan;?></td>
								 <td><?php echo $pelanggan->Email;?></td>
								<td><?php echo $pelanggan->Username;?></td>
								<td><?php echo $pelanggan->Password;?></td>
                <td><?php echo $pelanggan->Alamat;?></td>
								 <td><?php echo $pelanggan->Jenis_Kelamin;?></td>
								<td><?php echo $pelanggan->Umur;?></td>
								<td><?php echo $pelanggan->No_Rekening;?></td>
                <td><?php echo $pelanggan->TTL;?></td>
								<td><?php echo $pelanggan->No_Telp;?></td>
								<td>
									<button class="btn btn-warning" onclick="edit_pelanggan(<?php echo $pelanggan->Id_Pelanggan;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_pelanggan(<?php echo $pelanggan->Id_Pelanggan;?>)"><i class="glyphicon glyphicon-remove"></i></button>


								</td>
				      </tr>
				     <?php }?>



      </tbody>
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

    function add_pelanggan()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_pelanggan(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('index.php/pelanggan/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            
            $('[name="Id_Pelanggan"]').val(data.Id_Pelanggan);
            $('[name="Email"]').val(data.Email);
            $('[name="Username"]').val(data.Username);
            $('[name="Password"]').val(data.Password); 
            $('[name="Alamat"]').val(data.Alamat);
            $('[name="Jenis_Kelamin"]').val(data.Jenis_Kelamin);
            $('[name="Umur"]').val(data.Umur);
            $('[name="No_Rekening"]').val(data.No_Rekening);
            $('[name="TTL"]').val(data.TTL);
            $('[name="No_Telp"]').val(data.No_Telp);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Pelanggan'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('index.php/pelanggan/pelanggan_add')?>";
      }
      else
      {
        url = "<?php echo site_url('index.php/pelanggan/pelanggan_update')?>";
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

    function delete_pelanggan(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('index.php/pelanggan/pelanggan_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
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
        <h3 class="modal-title">Pelanggan Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="Id_Pelanggan"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">USERNAME</label>
              <div class="col-md-9">
                <input name="Username" placeholder="Username" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">EMAIL</label>
              <div class="col-md-9">
								<input name="Email" placeholder="EMAIL" class="form-control" type="text">

              </div>
            </div>
						<div class="form-group">
							<label class="control-label col-md-3">PASSWORD</label>
							<div class="col-md-9">
								<input name="Password" placeholder="PASSWORD" class="form-control" type="text">

							</div>
						</div>
            <div class="form-group">
              <label class="control-label col-md-3">ALAMAT</label>
              <div class="col-md-9">
                <input name="Alamat" placeholder="ALAMAT" class="form-control" type="text">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3">JENIS KELAMIN</label>
              <div class="col-md-9">
								<input name="Jenis_Kelamin" placeholder="JENIS KELAMIN" class="form-control" type="text">

              </div>
            </div>
						<div class="form-group">
							<label class="control-label col-md-3">UMUR</label>
							<div class="col-md-9">
								<input name="Umur" placeholder="Umur" class="form-control" type="text">

							</div>
						</div>
            <div class="form-group">
              <label class="control-label col-md-3">NO REKENING</label>
              <div class="col-md-9">
                <input name="No_Rekening" placeholder="NO REKENING" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">TTL</label>
              <div class="col-md-9">
                <input name="TTL" placeholder="TTL" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">NO TELP</label>
              <div class="col-md-9">
								<input name="No_Telp" placeholder="No TELP" class="form-control" type="text">

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
