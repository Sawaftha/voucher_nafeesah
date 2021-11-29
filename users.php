<?php include('includes/header.php'); ?>
		<!-- partial -->
	
			<!-- partial -->

			<div class="page-content">

      <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="home_page.phpp">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">المستخدمين</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">قائمة المستخدمين الرئيسية</h6>
                <button type="button" class="btn btn-primary btn-icon-text add_click add_section" data-toggle="modal" data-target="#modal-user">
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
                        <th>الإيميل</th>
                        <th>الصلاحية</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
									$i=1;
									$row = get_users();
									foreach ($row as $key => $value) {
									
								?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value->full_name; ?></td>
                        <td><?php echo $value->phone;?></td>
                        <td><?php echo $value->email;?></td>
                        <td><?php echo $value->name;?></td>
                        <td><button type="button" class="btn btn-primary btn-icon edit_click edit_section" data-toggle="modal" data-target="#modal-user" id="<?php echo $value->id;?>">
                              <i data-feather="edit"></i>
                            </button></td>
                        <td><button type="button" class="del_click del_section btn btn-danger btn-icon" table="users"  data-toggle="modal" data-target="#modal-delete" id="<?php echo $value->id;?>">
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
  data: { id: id , type : 'users' },
  dataType: "json",
  success: function (data) {
	$("#full_name").val(data.full_name);
	$('#phone').val(data.phone);
  $('#email').val(data.email);
  $('#password').val(data.password);
  $("#role").val(data.role).trigger("change");


	$('.primary_id').val(id);
  }
})
})
</script>