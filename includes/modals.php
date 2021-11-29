<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
 }
 else {
     $id='';
 }
?>
<!-- Modal-User -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "users.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">الإسم</label>
                                <input type="text" class="form-control" name="full_name" id="full_name" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input class="form-control mb-4 mb-md-0"  inputmode="text" name="phone" id="phone" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">الإيميل</label>
                                <input type="email" class="form-control" name="email" id="email" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">رمز المرور</label>
                                <input type="text" class="form-control" name="password" id="password" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                       <!-- Row -->
                       <div class="row">
                       <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">الصلاحية</label>
                                <select class="form-control" name="role" id="role" required>
                                <option selected disabled>إختيار الصلاحية</option>
                                <?php
                                    $row= get_roles();
                                    foreach($row as $value){
                                        echo '<option value='.$value->id.' >'.$value->name.'</option>';
                                    }
                                    ?>
										
                                          
                                        </select>
                                        
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-User -->
<!-- Modal-customers -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-customers">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "customers.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">الإسم</label>
                                <input type="text" class="form-control" name="cus_name" id="cus_name" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input class="form-control mb-4 mb-md-0"  inputmode="text" name="cus_phone" id="cus_phone" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">العنوان</label>
                                <input type="text" class="form-control" name="cus_add" id="cus_add" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-customers -->
<!-- Modal-madenah_street -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-madenah_street">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "madenah_street.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_mad" id="invoice_number_mad" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_mad">
									<input type="text" name="invoice_date_mad" id="invoice_date_mad_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_mad" id="invoice_amm_mad" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_mad" id="ref_amm_mad" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_mad">
									<input type="text" name="ref_date_mad" id="ref_date_mad_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_mad" id="customer_name_mad" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_mad" id="customer_phone_mad" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="khalda">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-madenah_street -->
<!-- Modal-khalda -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-khalda">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "khalda.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_kha" autocomplete="off" id="invoice_number_kha" required />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_kha">
									<input type="text" name="invoice_date_kha" id="invoice_date_kha_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_kha" id="invoice_amm_kha" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="number" class="form-control" name="ref_amm_kha" autocomplete="off" id="ref_amm_kha" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_kha">
									<input type="text" name="ref_date_kha" id="ref_date_kha_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_kha" autocomplete="off" id="customer_name_kha" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_kha" autocomplete="off" id="customer_phone_kha" maxlength="10" minlength="10 " required />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="madenah_street">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-khalda -->
<!-- Modal-freedom_street -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-freedom_street">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "freedom_street.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_frs" id="invoice_number_frs" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_frs">
									<input type="text" name="invoice_date_frs" id="invoice_date_frs_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_frs" id="invoice_amm_frs" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_frs" id="ref_amm_frs" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_frs">
									<input type="text" name="ref_date_frs" id="ref_date_frs_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_frs" id="customer_name_frs" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_frs" id="customer_phone_frs" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="freedom_street">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-freedom_street -->
<!-- Modal-7th -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-7th">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "7th.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_7th" id="invoice_number_7th" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_7th">
									<input type="text" name="invoice_date_7th" id="invoice_date_7th_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_7th" id="invoice_amm_7th" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_7th" id="ref_amm_7th" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_7th">
									<input type="text" name="ref_date_7th" id="ref_date_7th_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_7th" id="customer_name_7th" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_7th" id="customer_phone_7th" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="7th">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-freedom_street -->
<!-- Modal-tabrbor -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-tabrbor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "tabrbor.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_tab" id="invoice_number_tab" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_tab">
									<input type="text" name="invoice_date_tab" id="invoice_date_tab_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_tab" id="invoice_amm_tab" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_tab" id="ref_amm_tab" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_tab">
									<input type="text" name="ref_date_tab" id="ref_date_tab_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_tab" id="customer_name_tab" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_tab" id="customer_phone_tab" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="tabrbor">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-tabrbor -->
<!-- Modal-jabl_amman -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-jabl_amman">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "jabl_amman.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_jam" id="invoice_number_jam" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_jam">
									<input type="text" name="invoice_date_jam" id="invoice_date_jam_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_jam" id="invoice_amm_jam" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_jam" id="ref_amm_jam" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_jam">
									<input type="text" name="ref_date_jam" id="ref_date_jam_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_jam" id="customer_name_jam" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_jam" id="customer_phone_jam" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="jabl_amman">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-jabl_amman -->
<!-- Modal-zarqa -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-zarqa">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "zarqa.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_zar" id="invoice_number_zar" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_zar">
									<input type="text" name="invoice_date_zar" id="invoice_date_zar_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_zar" id="invoice_amm_zar" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_zar" id="ref_amm_zar" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_zar">
									<input type="text" name="ref_date_zar" id="ref_date_zar_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_zar" id="customer_name_zar" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_zar" id="customer_phone_zar" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="zarqa">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-zarqa -->
<!-- Modal-mafraq -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-mafraq">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "mafraq.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_maf" id="invoice_number_maf" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_maf">
									<input type="text" name="invoice_date_maf" id="invoice_date_maf_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_maf" id="invoice_amm_maf" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_maf" id="ref_amm_maf" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_maf">
									<input type="text" name="ref_date_maf" id="ref_date_maf_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_maf" id="customer_name_maf" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_maf" id="customer_phone_maf" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="mafraq">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-mafraq -->
<!-- Modal-irbid -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-irbid">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "irbid.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" name="invoice_number_irb" id="invoice_number_irb" />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-3">
                        <label class="control-label">تاريخ الفاتورة</label>
                        <div class="input-group date datepicker" id="invoice_date_irb">
									<input type="text" name="invoice_date_irb" id="invoice_date_irb_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الفاتورة</label>
                                <input type="number" class="form-control" name="invoice_amm_irb" id="invoice_amm_irb" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">قيمة الإرجاع</label>
                                <input type="text" class="form-control" name="ref_amm_irb" id="ref_amm_irb" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">تاريخ إرجاع الفاتورة</label>
                        <div class="input-group date datepicker" id="ref_date_irb">
									<input type="text" name="ref_date_irb" id="ref_date_irb_edit"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">إسم العميل</label>
                                <input type="text" class="form-control" name="customer_name_irb" id="customer_name_irb" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">رقم الهاتف</label>
                                <input type="text" class="form-control" name="customer_phone_irb" id="customer_phone_irb" />
                            </div>
                        </div>
                   </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="branch_name" value="irbid">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-irbid -->
<!-- Modal-Projet -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-project">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "project.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">إسم المشروع</label>
                                <input type="text" class="form-control" name="project_name" id="project_name" required />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">المهندس المسؤول</label>
                                <input class="form-control mb-4 mb-md-0"  inputmode="text" name="responsible_engineer" id="responsible_engineer" required />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">عدد الشقق</label>
                                <input type="number" class="form-control" name="number_apartments" id="number_apartments" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">حالة المشروع</label>
                                <select class="form-control" name="project_status" id="project_status" required>
											<option selected disabled>إختيار حالة المشروع</option>
                                            <option value="مكتمل" /> مكتمل
                                    <option value="غير مكتمل" /> غير مكتمل
										</select>
                                        
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                      <!-- Row -->
                      <div class="row">
                        <div class="col-sm-6">
                        <label class="control-label">تاريخ  بدء المشروع</label>
                        <div class="input-group date datepicker" id="start_date">
									<input type="text" name="start_date" id="start_date"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label">تاريخ الإنتهاء المتوقع</label>
                            <div class="input-group date datepicker" id="expected_date">
                                <input type="text" name="expected_date" id="expected_date"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                         </div>
                    </div>
                    <!-- Row -->
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">معلومات الأرض</label>
                                <textarea id="land_information" name="land_information" class="form-control" maxlength="100" rows="8" placeholder="يرجى اضافة معلومات الأرض" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_project">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End-Modal-Project -->
<!-- Modal-expenses -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-expenses">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "expenses.php"?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">نوع المصروف</label>
                                <input type="text" class="form-control" name="expense_type" id="expense_type" required />
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">القيمة</label>
                                <input class="form-control mb-4 mb-md-0" step="0.01" inputmode="number" name="expense_amount" id="expense_amount" required />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">من/إلى</label>
                                <input type="text" class="form-control" name="from_where" id="from_where" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <label class="control-label">التاريخ</label>
                        <div class="input-group date datepicker" >
									<input type="text" name="expense_date" id="expense_date"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                    </div>
                    <!-- Row -->
                    <!-- Row -->
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">التفاصيل</label>
                                <textarea id="expenses_details" name="expenses_details" class="form-control" maxlength="100" rows="5" placeholder="يرجى اضافة معلومات المصروف" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="primary_id_project">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_project">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End-Modal-expenses -->
<!-- Modal-task -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-task">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "task.php"?>" method="POST">
                    <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label">التاريخ</label>
                        <div class="input-group date datepicker" id="task_date">
									<input type="text" name="task_date" id="task_date"  autocomplete="off" class="form-control"><span class="input-group-addon"><i data-feather="calendar" required></i></span>
								</div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">المسؤول عن المهمة</label>
                                <input class="form-control mb-4 mb-md-0"  inputmode="text" name="user_task" id="user_task" />
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">المهمة</label>
                                <input type="text" class="form-control" name="task" id="task" />
                            </div>
                        </div>
                   
                    </div>
                    <!-- Row -->
                
            </div>
            <div class="modal-footer">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-task -->
<!-- Modal-roles -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-roles">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="<?php echo ACTIONS . "roles.php"?>" method="POST">
                    <div class="row">
                    <?php
                        $row= get_permissions();
                        foreach($row as $value){
                        ?>
                         <div class="col-sm-3" style='padding:15px'>
                             <div class="form-check">
                                <input type="checkbox" name="role[]" class="<?php echo $value->class;?> form-check-input" value="<?php echo $value->id;?>" id="<?php echo "role".$value->id;?>" />
                                <label class="form-check-label" for="<?php echo "role".$value->id;?>"> <?php echo $value->name;?> </label>
                             </div>
                         </div>
                       <?php } ?> 
                    </div> 
            </div>
            <div class="modal-footer">
                <input type="hidden" class="primary_id" name="primary_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" name="add" class="btn btn-primary submit_click" id="edit_xc">حفظ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-Modal-roles -->




<!--Delete-->
<div class="modal" tabindex="-1" role="dialog" id="modal-delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">حذف</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>هل متأكد من الحذف؟</p>
      </div>
      <form method="post" action="<?php echo ACTIONS . "delete.php" ?>">
      <div class="modal-footer">
        <input type="hidden" id="table_name" name="table_name">
        <input type="hidden" id="ids" name="ids" value="">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
        <button type="submit" name="delete" class="btn btn-primary">نعم</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--end delete-->
