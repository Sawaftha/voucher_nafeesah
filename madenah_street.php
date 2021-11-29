<?php include('includes/header.php'); ?>
		<!-- partial -->
			<!-- partial -->
			<div class="page-content">
      <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="home_page.phpp">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">شارع المدينة</li>
					</ol>
        </nav>
        
        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card" style="background-color: #727cf5">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">عدد الإيصالات</h6>
                    </div><hr style="width:100%;text-align:center">
                    <div class="row">
                      <div class="col-8 col-md-12 col-xl-5">
                        <h3 class="mb-4"><?php echo get_count("SELECT * From madenah_street") ?></h3>
                        <!--<div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                      <div class="col-4 col-md-12 col-xl-7">
              
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card" style="background-color: #ff3366">
                  <div class="card-body">
                   
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-6">
                      <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">مسدد</h6>
                    </div><hr style="width:100%;text-align:center">
                      <h3 class="mb-2"><?php echo get_count("SELECT * From madenah_street WHERE ref_amm IS NOT NULL") ?></h3>
                        <!--<div class="d-flex align-items-baseline">
                          <p class="text-danger">
                            <span>-2.8%</span>
                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                      <div class="col-6 col-md-12 col-xl-6">
                      <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">غير مسدد</h6>
                    </div><hr style="width:100%;text-align:center">
                      <h3 class="mb-2"><?php echo get_count("SELECT * From madenah_street WHERE ref_amm IS NULL") ?></h3>
                       <!-- <div class="d-flex align-items-baseline">
                          <p class="text-danger">
                            <span>-2.8%</span>
                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card" style="background-color: #727cf5">
                  <div class="card-body">
                   
                    <div class="row">
                      
                      <div class="col-6 col-md-12 col-xl-4">
                      <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">الرهن</h6>
                    </div><hr style="width:100%;text-align:center">
                        <h4 class="mb-2"><?php $query = "SELECT SUM(invoice_amm) AS SUM FROM madenah_street"; 
                                                $result =mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                      $sum_amm_invo= $row[0];
                                                       echo  $sum_amm_invo." دينار";}?></h4>
                 <!--<div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+2.8%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                      <div class="col-6 col-md-12 col-xl-4">
                      <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">الإرجاع</h6>
                    </div><hr style="width:100%;text-align:center">
                        <h4 class="mb-2"><?php $query = "SELECT SUM(ref_amm) AS SUM FROM madenah_street"; 
                                                $result =mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                      $sum_amm_invo= $row[0];
                                                       echo  $sum_amm_invo." دينار";}?></h4>
                        <!--<div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+2.8%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                      <div class="col-6 col-md-12 col-xl-4">
                      <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">المجموع</h6>
                    </div><hr style="width:100%;text-align:center">
                        <h4 class="mb-2"><?php $query = "SELECT SUM(invoice_amm) AS invoice_amm,SUM(ref_amm) AS ref_amm FROM madenah_street"; 
                                                $result =mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                      $invoice_amm= $row['invoice_amm'];
                                                      $ref_amm= $row['ref_amm'];
                                                      $total=$invoice_amm-$ref_amm;
                                                       echo  $total." دينار";}?></h4>
                       <!-- <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+2.8%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->


				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">نفيسة شارع المدينة</h6>
                <button type="button" class="btn btn-primary btn-icon-text add_click" data-toggle="modal" data-target="#modal-madenah_street">
                  <i class="btn-icon-append" data-feather="plus-circle"></i>
                  &nbsp; إضافة
                </button><br><br>
                <?php show_messages(); ?>
                <div class="table-responsive">
                 <table id="user-list-table" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>رقم الفاتورة</th>
                        <th>تاريخ</th>
                        <th>قيمة الرهن</th>
                        <th>قيمة الارجاع</th>
                        <th>تاريخ الإرجاع</th>
                        <th>اسم العميل</th>
                        <th>هاتف العميل</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
									$i=1;
									$row = get_madenah_street();
									foreach ($row as $key => $value) {
								?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value->invoice_number; ?></td>
                        <td><?php echo $value->invoice_date;?></td>
                        <td><?php echo $value->invoice_amm;?></td>
                        <td><?php echo $value->ref_amm; ?></td>
                        <td><?php echo $value->ref_date;?></td>
                        <td><?php echo $value->customer_name;?></td>
                        <td><?php echo $value->customer_phone; ?></td>
                        <td><button type="button" class="btn btn-primary btn-icon edit_click" data-toggle="modal" data-target="#modal-madenah_street" id="<?php echo $value->id;?>">
                              <i data-feather="edit"></i>
                            </button></td>
                        <td><button type="button" class="del_click del_section btn btn-danger btn-icon" table="madenah_street"  data-toggle="modal" data-target="#modal-delete" id="<?php echo $value->id;?>">
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
  data: { id: id , type : 'madenah_street' },
  dataType: "json",
  success: function (data) {
	$("#invoice_number_mad").val(data.invoice_number);
	$('#invoice_date_mad_edit').val(data.invoice_date);
  $('#invoice_amm_mad').val(data.invoice_amm);
  $('#ref_amm_mad').val(data.ref_amm);
  $('#ref_date_mad_edit').val(data.ref_date);
  $('#customer_name_mad').val(data.customer_name);
  $('#customer_phone_mad').val(data.customer_phone);
	$('.primary_id').val(id);
  }
})
})
</script>