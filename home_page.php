<?php include('includes/header.php'); ?>
			<div class="home_page page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">الصفحة الرئيسية</h4>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
              <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
              <input type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
              <i class="btn-icon-prepend" data-feather="download"></i>
              Import
            </button>
            <button onclick="myfunction()" type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="printer"></i>
              Print
            </button>
            <script>
              function myfunction(){
                window.print();
                }
              
            </script>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0 mr-2">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Download Report
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card" style="background-color: #727cf5">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">عدد الايصالات الإجمالي</h6>
                    </div><hr style="width:100%;text-align:center">
                    <div class="row">
                      <div class="col-8 col-md-12 col-xl-5">
                        <h3 class="mb-4"><?php echo get_count("
                        SELECT * From madenah_street
                        UNION
                        SELECT * From 7th
                        UNION
                        SELECT * From jabl_amman
                        UNION
                        SELECT * From tabrbor
                        UNION
                        SELECT * From mafraq
                        UNION
                        SELECT * From irbid
                        UNION
                        SELECT * From zarqa
                        UNION
                        SELECT * From khalda
                        UNION
                        SELECT * From freedom_street
                        ") ?></h3>
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
                      <h6 class="card-title mb-0">الإيصالات المسترة</h6>
                    </div><hr style="width:100%;text-align:center">
                      <h3 class="mb-2"><?php echo get_count("
                      SELECT * From madenah_street WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From 7th WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From jabl_amman WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From tabrbor WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From mafraq WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From irbid WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From zarqa WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From khalda WHERE ref_amm IS NOT NULL
                      UNION
                      SELECT * From freedom_street WHERE ref_amm IS NOT NULL
                      ") ?></h3>
                        <!--<div class="d-flex align-items-baseline">
                          <p class="text-danger">
                            <span>-2.8%</span>
                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                          </p>
                        </div>-->
                      </div>
                      <div class="col-6 col-md-12 col-xl-6">
                      <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">الإيصالات الحالية</h6>
                    </div><hr style="width:100%;text-align:center">
                      <h3 class="mb-2"><?php echo get_count("SELECT * From madenah_street WHERE ref_amm IS NULL
                      UNION
                      SELECT * From 7th WHERE ref_amm IS NULL
                      UNION
                      SELECT * From jabl_amman WHERE ref_amm IS NULL
                      UNION
                      SELECT * From tabrbor WHERE ref_amm IS NULL
                      UNION
                      SELECT * From mafraq WHERE ref_amm IS NULL
                      UNION
                      SELECT * From irbid WHERE ref_amm IS NULL
                      UNION
                      SELECT * From zarqa WHERE ref_amm IS NULL
                      UNION
                      SELECT * From khalda WHERE ref_amm IS NULL
                      UNION
                      SELECT * From freedom_street WHERE ref_amm IS NULL
                      ") ?></h3>
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
                      <h6 class="card-title mb-0">إجمالي الرهن</h6>
                    </div><hr style="width:100%;text-align:center">
                        <h4 class="mb-2"><?php $query = "select sum(invoice_amm) as invoice_amm
from
(
    select invoice_amm from madenah_street WHERE invoice_amm IS NOT null 
    UNION ALL
    select invoice_amm from khalda WHERE invoice_amm IS NOT null
    UNION ALL
    select invoice_amm from tabrbor WHERE invoice_amm IS NOT null
    UNION ALL
    select invoice_amm from jabl_amman WHERE invoice_amm IS NOT null 
    UNION ALL
    select invoice_amm from zarqa WHERE invoice_amm IS NOT null
    UNION ALL
    select invoice_amm from mafraq WHERE invoice_amm IS NOT null 
    UNION ALL
    select invoice_amm from irbid WHERE invoice_amm IS NOT null
    UNION ALL
    select invoice_amm from freedom_street WHERE invoice_amm IS NOT null 
    UNION ALL
    select invoice_amm from 7th WHERE invoice_amm IS NOT null 
    
)x
"; 
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
                      <h6 class="card-title mb-0">إجمالي المسترد</h6>
                    </div><hr style="width:100%;text-align:center">
                        <h4 class="mb-2"><?php $query = "select sum(ref_amm) as ref_amm
from
(
    select ref_amm from madenah_street
    union ALL
    select ref_amm from khalda 
    union ALL
    select ref_amm from tabrbor 
    union ALL
    select ref_amm from jabl_amman 
    union ALL
    select ref_amm from zarqa 
    union ALL
    select ref_amm from mafraq 
    union ALL
    select ref_amm from irbid
    union ALL
    select ref_amm from freedom_street
    union ALL
    select ref_amm from 7th
    
)t
"; 
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
                      <h6 class="card-title mb-0">الرصيد الحالي</h6>
                    </div><hr style="width:100%;text-align:center">
                        <h4 class="mb-2"><?php $query = "select sum(invoice_amm) as invoice_amm,SUM(ref_amm) AS ref_amm
from
(
    select invoice_amm,ref_amm from madenah_street
    union ALL
    select invoice_amm,ref_amm from khalda 
    union ALL
    select invoice_amm,ref_amm from tabrbor 
    union ALL
    select invoice_amm,ref_amm from jabl_amman 
    union ALL
    select invoice_amm,ref_amm from zarqa 
    union ALL
    select invoice_amm,ref_amm from mafraq 
    union ALL
    select invoice_amm,ref_amm from irbid
    union ALL
    select invoice_amm,ref_amm from freedom_street
    union ALL
    select invoice_amm,ref_amm from 7th
    
)t"; 
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
          <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">أعداد رهن السدر بالنسبة لجميع الفروع</h6>
                </div>
                <p class="text-muted mb-4"></p>
                <div class="monthly-sales-chart-wrapper">
                  <canvas id="monthly-sales-chart1">



                  </canvas>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">نسبة الرهن المسترجع</h6>
                </div>
                <div id="progressbar_2" class="mx-auto"></div>
                 <!--<div class="row mt-4 mb-3">
                  <div class="col-6 d-flex justify-content-end">
                    <div>
                      <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total storage <span class="p-1 mr-1 rounded-circle bg-primary-muted"></span></label>
                      <h5 class="font-weight-bold mb-0 text-left">8TB</h5>
                    </div>
                  </div>
                  <div class="col-6">
                    <div>
                      <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 ml-1 rounded-circle bg-primary"></span> Used storage</label>
                      <h5 class="font-weight-bold mb-0">6TB</h5>
                    </div>
                  </div>
                </div>
               <button class="btn btn-primary btn-block">Upgrade storage</button>-->
              </div>
            </div>
          </div>
        </div> <!-- row -->

     <!--   <div class="row">
          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Inbox</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm ml-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm ml-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm ml-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm ml-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm ml-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="#" class="d-flex align-items-center border-bottom pb-3">
                    <div class="ml-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Leonardo Payne</h6>
                        <p class="text-muted tx-12">12.30 PM</p>
                      </div>
                      <p class="text-muted tx-13">Hey! there I'm available...</p>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center border-bottom py-3">
                    <div class="ml-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Carl Henson</h6>
                        <p class="text-muted tx-12">02.14 AM</p>
                      </div>
                      <p class="text-muted tx-13">I've finished it! See you so..</p>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center border-bottom py-3">
                    <div class="ml-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Jensen Combs</h6>
                        <p class="text-muted tx-12">08.22 PM</p>
                      </div>
                      <p class="text-muted tx-13">This template is awesome!</p>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center border-bottom py-3">
                    <div class="ml-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Amiah Burton</h6>
                        <p class="text-muted tx-12">05.49 AM</p>
                      </div>
                      <p class="text-muted tx-13">Nice to meet you</p>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center border-bottom py-3">
                    <div class="ml-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                        <p class="text-muted tx-12">01.19 AM</p>
                      </div>
                      <p class="text-muted tx-13">Hey! there I'm available...</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Projects</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm ml-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm ml-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm ml-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm ml-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm ml-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Project Name</th>
                        <th class="pt-0">Start Date</th>
                        <th class="pt-0">Due Date</th>
                        <th class="pt-0">Status</th>
                        <th class="pt-0">Assign</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>NobleUI jQuery</td>
                        <td>01/01/2020</td>
                        <td>26/04/2020</td>
                        <td><span class="badge badge-danger">Released</span></td>
                        <td>Leonardo Payne</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>NobleUI Angular</td>
                        <td>01/01/2020</td>
                        <td>26/04/2020</td>
                        <td><span class="badge badge-success">Review</span></td>
                        <td>Carl Henson</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>NobleUI ReactJs</td>
                        <td>01/05/2020</td>
                        <td>10/09/2020</td>
                        <td><span class="badge badge-info-muted">Pending</span></td>
                        <td>Jensen Combs</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>NobleUI VueJs</td>
                        <td>01/01/2020</td>
                        <td>31/11/2020</td>
                        <td><span class="badge badge-warning">Work in Progress</span>
                        </td>
                        <td>Amiah Burton</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>NobleUI Laravel</td>
                        <td>01/01/2020</td>
                        <td>31/12/2020</td>
                        <td><span class="badge badge-danger-muted text-white">Coming soon</span></td>
                        <td>Yaretzi Mayo</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>NobleUI NodeJs</td>
                        <td>01/01/2020</td>
                        <td>31/12/2020</td>
                        <td><span class="badge badge-primary">Coming soon</span></td>
                        <td>Carl Henson</td>
                      </tr>
                      <tr>
                        <td class="border-bottom">3</td>
                        <td class="border-bottom">NobleUI EmberJs</td>
                        <td class="border-bottom">01/05/2020</td>
                        <td class="border-bottom">10/11/2020</td>
                        <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>
                        <td class="border-bottom">Jensen Combs</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->


        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
              <div class="madenah_street col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="madenah_street.php" class="nav-link"><h6 class="card-title mb-0">شارع المدينة </h6></a>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="khalda col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="khalda.php" class="nav-link"><h6 class="card-title mb-0">فرع خلدا</h6></a>
                      
                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="freedom_street col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="freedom_street.php" class="nav-link"><h6 class="card-title mb-0">شارع الحرية</h6></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="7th col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="7th.php" class="nav-link"><h6 class="card-title mb-0">فرع السابع</h6></a> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabrbor col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="tabrbor.php" class="nav-link"><h6 class="card-title mb-0">فرع طبربور</h6></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="jabl_amman col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="jabl_amman.php" class="nav-link"><h6 class="card-title mb-0">فرع جبل عمان</h6></a>
                      
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="zarqa col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="zarqa.php" class="nav-link"><h6 class="card-title mb-0">فرع الزرقاء</h6></a>
                      
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="mafraq col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="mafraq.php" class="nav-link"><h6 class="card-title mb-0">فرع المفرق</h6></a>
                      
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="irbid  col-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <a href="irbid.php" class="nav-link"><h6 class="card-title mb-0">فرع اربد</h6></a>
                      
                     
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>




			</div>

      <?php include('includes/footer.php'); ?>

      <script>
        $(function() {
    'use strict'

    var gridLineColor = 'rgba(77, 138, 240, .1)';

    var colors = {
        primary: "#727cf5",
        secondary: "#7987a1",
        success: "#42b72a",
        info: "#68afff",
        warning: "#fbbc06",
        danger: "#ff3366",
        light: "#ececec",
        dark: "#282f3a",
        muted: "#686868"
    }

    var flotChart1Data = [
        [0, 49.331065063219285],
        [1, 48.79814898366035],
        [2, 50.61793547911337],
        [3, 53.31696317779434],
        [4, 54.78560952831719],
        [5, 53.84293992505776],
        [6, 54.682958355082874],
        [7, 56.742547193381654],
        [8, 56.99677491680908],
        [9, 56.144488388681445],
        [10, 56.567122269843885],
        [11, 60.355022877262684],
        [12, 58.7457726121753],
        [13, 61.445407102315514],
        [14, 61.112870581452086],
        [15, 58.57202276349258],
        [16, 54.72497594269612],
        [17, 52.070341498681124],
        [18, 51.09867716530438],
        [19, 47.48185519192089],
        [20, 48.57861168097493],
        [21, 48.99789250679436],
        [22, 53.582491800119456],
        [23, 50.28407438696142],
        [24, 46.24606628705599],
        [25, 48.614330310543856],
        [26, 51.75313497797672],
        [27, 51.34463925296746],
        [28, 50.217320673443936],
        [29, 54.657281647073304],
        [30, 52.445057217757245],
        [31, 53.063914668561345],
        [32, 57.07494250387825],
        [33, 52.970403392565515],
        [34, 48.723854145068756],
        [35, 52.69064629353968],
        [36, 53.590890118378205],
        [37, 58.52332126105745],
        [38, 55.1037709679581],
        [39, 58.05347017020425],
        [40, 61.350810521199946],
        [41, 57.746188675088575],
        [42, 60.276910973029786],
        [43, 61.00841651851749],
        [44, 57.786733623457636],
        [45, 56.805721677811356],
        [46, 58.90301959619822],
        [47, 62.45091969566289],
        [48, 58.75007922945926],
        [49, 58.405842466185355],
        [50, 56.746633122658444],
        [51, 52.76631598845634],
        [52, 52.3020769891715],
        [53, 50.56370473325533],
        [54, 55.407205992344544],
        [55, 50.49825590435839],
        [56, 52.4975614755482],
        [57, 48.79614749316488],
        [58, 47.46776704767111],
        [59, 43.317880548036456],
        [60, 38.96296121124144],
        [61, 34.73218432559628],
        [62, 31.033700732272116],
        [63, 32.637987000382296],
        [64, 36.89513637594264],
        [65, 35.89701755609185],
        [66, 32.742284578187544],
        [67, 33.20516407297906],
        [68, 30.82094321791933],
        [69, 28.64770271525896],
        [70, 28.44679026902145],
        [71, 27.737654438195236],
        [72, 27.755190738237744],
        [73, 25.96228929938593],
        [74, 24.38197394166947],
        [75, 21.95038772723346],
        [76, 22.08944448751686],
        [77, 23.54611335622507],
        [78, 27.309610481106425],
        [79, 30.276849322378055],
        [80, 27.25409223418214],
        [81, 29.920374921780102],
        [82, 25.143447932376702],
        [83, 23.09444253479626],
        [84, 23.79459089729409],
        [85, 23.46775072519832],
        [86, 27.9908486073969],
        [87, 23.218855925354447],
        [88, 23.9163141686872],
        [89, 19.217667423877607],
        [90, 15.135179958932145],
        [91, 15.08666008920407],
        [92, 11.006269617032526],
        [93, 9.201671310476282],
        [94, 7.475865090236113],
        [95, 11.645754524211824],
        [96, 15.76161040821357],
        [97, 13.995208323029495],
        [98, 12.59338056489445],
        [99, 13.536707176236195],
        [100, 15.01308268888571],
        [101, 13.957161242832626],
        [102, 13.237091619700053],
        [103, 18.10178875669874],
        [104, 20.634765519499563],
        [105, 21.064946755449817],
        [106, 25.370593801826132],
        [107, 25.321453557866203],
        [108, 20.947464543531186],
        [109, 18.750516645477425],
        [110, 15.382042945356737],
        [111, 14.569147793065632],
        [112, 17.949159188821604],
        [113, 15.965876707018058],
        [114, 16.359355082317443],
        [115, 14.163139419453657],
        [116, 12.106761506858124],
        [117, 14.843319717588216],
        [118, 17.24291158460492],
        [119, 17.799018581487058],
        [120, 14.038359368301329],
        [121, 18.658227817264983],
        [122, 18.463689935573676],
        [123, 22.687619584142652],
        [124, 25.088957744790036],
        [125, 28.184893996099582],
        [126, 28.03276492115397],
        [127, 24.11167758305713],
        [128, 24.28007484247854],
        [129, 28.23487421795626],
        [130, 26.246971673504287],
        [131, 29.330939820784877],
        [132, 26.07749855928238],
        [133, 23.921786397788168],
        [134, 28.825012181053275],
        [135, 25.140449169947626],
        [136, 21.79048000172746],
        [137, 23.05414699421924],
        [138, 20.712904460250886],
        [139, 29.727388210287337],
        [140, 30.219713454550508],
        [141, 32.567062865467058],
        [142, 31.46105146001275],
        [143, 33.699736621958863],
        [144, 30.05510726036824],
        [145, 34.200669070105356],
        [146, 36.938945414022744],
        [147, 35.50411643355061],
        [148, 34.788500646665874],
        [149, 36.97330575970296]
    ];

    // Dashbaord date start
    if ($('#dashboardDate').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#dashboardDate').datepicker({
            format: "dd-MM-yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('#dashboardDate').datepicker('setDate', today);
    }
    // Dashbaord date end

    // Flot chart1 start
    if ($('#flotChart1').length) {
        $.plot('#flotChart1', [{
            data: flotChart1Data,
            color: '#727cf5'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: 'transparent'
                }
            },
            grid: {
                borderColor: 'transparent',
                borderWidth: 1,
                labelMargin: 0,
                aboveData: false
            },
            yaxis: {
                show: true,
                color: 'rgba(0,0,0,0.06)',
                ticks: [
                    [0, ''],
                    [15, '$8400k'],
                    [30, '$8500k'],
                    [45, '$8600k'],
                    [60, '$8700k'],
                    [75, '$8800k']
                ],
                tickColor: gridLineColor,
                min: 0,
                max: 80,
                font: {
                    size: 11,
                    weight: '600',
                    color: colors.muted
                }
            },
            xaxis: {
                show: true,
                color: 'rgba(0,0,0,0.1)',
                ticks: [
                    [0, 'Jan'],
                    [20, 'Feb'],
                    [40, 'Mar'],
                    [60, 'Apr'],
                    [80, 'May'],
                    [100, 'June'],
                    [120, 'July'],
                    [140, 'Aug']
                ],
                tickColor: gridLineColor,
                font: {
                    size: 13,
                    color: colors.muted
                },
                reserveSpace: false
            }
        });
    }
    // Flot chart1 end

    // Apex chart1 start
    if ($('#apexChart_1').length) {
        var options1 = {
            chart: {
                type: "line",
                height: 60,
                sparkline: {
                    enabled: !0
                }
            },
            series: [{
                data: [3844, 3855, 3841, 3867, 3822, 3843, 3821, 3841, 3856, 3827, 3843]
            }],
            stroke: {
                width: 2,
                curve: "smooth"
            },
            markers: {
                size: 0
            },
            colors: ["#727cf5"],
            tooltip: {
                fixed: {
                    enabled: !1
                },
                x: {
                    show: !1
                },
                y: {
                    title: {
                        formatter: function(e) {
                            return ""
                        }
                    }
                },
                marker: {
                    show: !1
                }
            }
        };
        new ApexCharts(document.querySelector("#apexChart_1"), options1).render();
    }
    // Apex chart1 end

    // Apex chart2 start
    if ($('#apexChart_2').length) {
        var options2 = {
            chart: {
                type: "bar",
                height: 60,
                sparkline: {
                    enabled: !0
                }
            },
            plotOptions: {
                bar: {
                    columnWidth: "60%"
                }
            },
            colors: ["#727cf5"],
            series: [{
                data: [36, 77, 52, 150, 74, 35, 55, 23, 47, 10, 63]
            }],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1
                }
            },
            tooltip: {
                fixed: {
                    enabled: !1
                },
                x: {
                    show: !1
                },
                y: {
                    title: {
                        formatter: function(e) {
                            return ""
                        }
                    }
                },
                marker: {
                    show: !1
                }
            }
        };
        new ApexCharts(document.querySelector("#apexChart_2"), options2).render();
    }
    // Apex chart2 end

    // Apex chart3 start
    if ($('#apexChart_3').length) {
        var options3 = {
            chart: {
                type: "line",
                height: 60,
                sparkline: {
                    enabled: !0
                }
            },
            series: [{
                data: [41, 45, 44, 46, 52, 54, 43, 74, 82, 82, 89]
            }],
            stroke: {
                width: 2,
                curve: "smooth"
            },
            markers: {
                size: 0
            },
            colors: ["#727cf5"],
            tooltip: {
                fixed: {
                    enabled: !1
                },
                x: {
                    show: !1
                },
                y: {
                    title: {
                        formatter: function(e) {
                            return ""
                        }
                    }
                },
                marker: {
                    show: !1
                }
            }
        };
        new ApexCharts(document.querySelector("#apexChart_3"), options3).render();
    }
    // Apex chart3 end

    // Progressgar1 start
    if ($('#progressbar_2').length) {
        var bar = new ProgressBar.Circle(progressbar_2, {
            color: colors.primary,
            trailColor: gridLineColor,
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: colors.primary, width: 1 },
            to: { color: colors.primary, width: 4 },
            // Set default step function for all animate calls
            step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value + '%');
                }

            }
        });
        bar.text.style.fontFamily = "'Overpass', sans-serif;";
        bar.text.style.fontSize = '3rem';

        bar.animate(<?php echo ((get_count("SELECT * From madenah_street")+get_count("SELECT * From freedom_street")+get_count("SELECT * From khalda")+get_count("SELECT * From 7th")+get_count("SELECT * From tabrbor")+get_count("SELECT * From irbid")+get_count("SELECT * From mafraq")+get_count("SELECT * From zarqa")+get_count("SELECT * From jabl_amman"))-
                     (get_count("SELECT * From madenah_street WHERE ref_amm IS null")+get_count("SELECT * From freedom_street WHERE ref_amm IS null")+get_count("SELECT * From khalda WHERE ref_amm IS null")+get_count("SELECT * From 7th WHERE ref_amm IS null")+get_count("SELECT * From tabrbor WHERE ref_amm IS null")+get_count("SELECT * From irbid WHERE ref_amm IS null")+get_count("SELECT * From mafraq WHERE ref_amm IS null")+get_count("SELECT * From zarqa WHERE ref_amm IS null")+get_count("SELECT * From jabl_amman WHERE ref_amm IS null")))/(get_count("SELECT * From madenah_street")+get_count("SELECT * From freedom_street")+get_count("SELECT * From khalda")+get_count("SELECT * From 7th")+get_count("SELECT * From tabrbor")+get_count("SELECT * From irbid")+get_count("SELECT * From mafraq")+get_count("SELECT * From zarqa")+get_count("SELECT * From jabl_amman")) ?>);
    }
    // Progressgar1 start

    // Monthly sales chart start
    if ($('#monthly-sales-chart1').length) {
        var monthlySalesChart = document.getElementById('monthly-sales-chart1').getContext('2d');
        new Chart(monthlySalesChart, {
            type: 'bar',
            data: {
                labels: ['المدينة', 'الحرية', 'السابع', 'خلدا', 'طبربور', 'اربد', 'المفرق', 'الزرقاء', 'جبل عمان'],
                datasets: [{
                    label: 'العدد',
                    data: [<?php echo get_count("SELECT * From madenah_street") ?>, 
                    <?php echo get_count("SELECT * From freedom_street") ?>, 
                    <?php echo get_count("SELECT * From khalda") ?>, 
                    <?php echo get_count("SELECT * From 7th") ?>, 
                    <?php echo get_count("SELECT * From tabrbor") ?>, 
                    <?php echo get_count("SELECT * From irbid") ?>, 
                    <?php echo get_count("SELECT * From mafraq") ?>, 
                    <?php echo get_count("SELECT * From zarqa") ?>, 
                    <?php echo get_count("SELECT * From jabl_amman") ?>],
                    backgroundColor: colors.primary
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        barPercentage: .3,
                        categoryPercentage: .6,
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            fontColor: '#8392a5',
                            fontSize: 10
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: gridLineColor
                        },
                        ticks: {
                            fontColor: '#8392a5',
                            fontSize: 10,
                            min: 0,
                            max: 250
                        }
                    }]
                }
            }
        });
    }
    // Monthly sales chart end

});
      </script>