<?php include("modals.php"); ?>
<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">حقوق النشر © 2020 <a href="https://www.facebook.com/Maestro.co.jo/?rf=1559109690838964" target="_blank">  مايسترو لصناعة البرمجيات&nbsp;</a>جميع الحقوق محفوظة. </p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/vendors/moment/moment.min.js"></script>
	<script src="assets/vendors/fullcalendar/fullcalendar.min.js"></script>
	<!-- endinject -->
	<script src="assets/js/fullcalendar.js"></script>
  <!-- plugin js for this page -->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="assets/vendors/inputmask/jquery.inputmask.min.js"></script>
	<script src="assets/vendors/select2/select2.min.js"></script>
	<script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
	<script src="assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
	<script src="assets/vendors/dropzone/dropzone.min.js"></script>
	<script src="assets/vendors/dropify/dist/dropify.min.js"></script>
	<script src="assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
	<script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

  <script src="assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js"></script>
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  
	
    <!-- end plugin js for this page -->
    <!-- plugin js for this page -->
  
  
    <!-- end plugin js for this page -->
    
	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/datepicker.js"></script>
  <script src="assets/js/data-table.js"></script>
  <script src="assets/js/form-validation.js"></script>
  <script src="assets/js/bootstrap-maxlength.js"></script>
	<script src="assets/js/inputmask.js"></script>
	<script src="assets/js/select2.js"></script>
	<script src="assets/js/typeahead.js"></script>
	<script src="assets/js/tags-input.js"></script>
	<script src="assets/js/dropzone.js"></script>
	<script src="assets/js/dropify.js"></script>
	<script src="assets/js/bootstrap-colorpicker.js"></script>
	<script src="assets/js/datepicker.js"></script>
	<script src="assets/js/timepicker.js"></script>
	<script src="assets/js/manual.js"></script>
	<script src="assets/js/apexcharts.js"></script>
	<!-- end custom js for this page -->



	<script>
$(document).ready(function(){
     var id=<?php echo $_SESSION['role']; ?>;
        $.ajax({
        url:"includes/fetch_record_data.php",
        method:"POST",
        data:{id:id , type : 'display'},
        dataType:"json",
        success:function(data)
        {
        //    alert(data.permissions);
            var arr_per = data.permissions.split(",");
            $.each(arr_per,function(i, val){
	         	$('.'+val).hide();
		       	});    
		    },
		    error:function(e){
			  alert("error.. try again");
		     }
             });
   
});
</script>
</body>
</html>  