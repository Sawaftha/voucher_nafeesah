<?php include('includes/header.php'); ?>
		<!-- partial -->
	
			<!-- partial -->

			<div class="page-content">

      <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="home_page.phpp">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">الإعدادات</li>
					</ol>
				</nav>

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="role-tab" data-toggle="tab" href="#role" role="tab" aria-controls="role" aria-selected="true">الصلاحيات</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">الفروع</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">مورديين</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="role" role="tabpanel" aria-labelledby="role-tab">
						
					<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">قائمة الصلاحيات</h6>
                <button type="button" class="btn btn-primary btn-icon-text add_click" data-toggle="modal" data-target="#modal-user">
                  <i class="btn-icon-append" data-feather="plus-circle"></i>
                  إضافة مستخدم جديد
                </button><br><br>
                <?php show_messages(); ?>
                <div class="table-responsive">
                 <table id="user-list-table" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>الصلاحية</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
									$i=1;
									$row = get_roles();
									foreach ($row as $key => $value) {
									
								?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><button type="button" class="btn btn-primary btn-icon edit_click" data-toggle="modal" data-target="#modal-roles" id="<?php echo $value->id;?>">
                              <i data-feather="eye"></i>
                            </button></td>
                        <td><button type="button" class="del_click del_section btn btn-danger btn-icon" table="roles"  data-toggle="modal" data-target="#modal-delete" id="<?php echo $value->id;?>">
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
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">profile-tab</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">contact-tab</div>
				</div>
			</div>

			<!-- partial:../../partials/_footer.html -->
	  <?php include('includes/footer.php'); ?>
	  <script>
    $(document).ready(function () {
        $(document).on("click", ".edit_click", function () {
            var id = $(this).attr("id");
            $(".primary_id").val(id);
            $.ajax({
                url: "includes/fetch_record_data.php",
                method: "POST",
                data: { id: id, type: "permissions" },
                dataType: "json",
                success: function (data) {
                    var arr_per = data.permissions.split(",");
                    $.each(arr_per, function (i, val) {
                        $("." + val).prop("checked", true);
                    });
                },
                error: function (e) {
                    alert("error.. try again");
                },
            });
        });
    });
</script>
 