<?php include('includes/header.php'); ?>
		<!-- partial -->
	
			<!-- partial -->

			<div class="page-content">

      <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="home_page.phpp">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">الزبائن</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">قائمة الزبائن</h6>
                <button type="button" class="btn btn-primary btn-icon-text add_click" data-toggle="modal" data-target="#modal-customers">
                  <i class="btn-icon-append" data-feather="plus-circle"></i>
                  &nbsp; إضافة
                </button><br><br>
                <?php show_messages(); ?>
                <div class="table-responsive">
                 <table id="user-list-table" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>الإسم</th>
                        <th>رقم الهاتف</th>
                        <th>العنوان</th>
                     
                        <th>تعديل</th>
                        <th>حذف</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
									$i=1;
									$row = get_customers();
									foreach ($row as $key => $value) {
									
								?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value->cus_name; ?></td>
                        <td><?php echo $value->cus_phone;?></td>
                        <td><?php echo $value->cus_add;?></td>
               
                        <td><button type="button" class="btn btn-primary btn-icon edit_click" data-toggle="modal" data-target="#modal-customers" id="<?php echo $value->id;?>">
                              <i data-feather="edit"></i>
                            </button></td>
                        <td><button type="button" class="del_click del_section btn btn-danger btn-icon" table="customers"  data-toggle="modal" data-target="#modal-delete" id="<?php echo $value->id;?>">
                              <i data-feather="trash-2"></i>
                            </button></td>
                      </tr>
                      <?php
								}
									?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

			<!-- partial:../../partials/_footer.html -->
      <?php include('includes/footer.php'); ?>
      <script>
 $(document).on('click', '.edit_click', function () {
 var id = $(this).attr("id");
 $.ajax({
  url: "includes/fetch_record_data.php",
  method: "POST",
  data: { id: id , type : 'customers' },
  dataType: "json",
  success: function (data) {
	$("#cus_name").val(data.cus_name);
	$('#cus_phone').val(data.cus_phone);
  $('#cus_add').val(data.cus_add);




	$('.primary_id').val(id);
  }
})
})
</script>