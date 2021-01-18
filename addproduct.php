<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
include_once "header.php";
include_once 'tblproduct.php';
$product=new tblproduct();

//adding the product 
if(isset($_POST['submit'])){
   $productCategory=trim($_POST['productcategory']);
   $productname=trim($_POST['productname']);
   $pageURL=trim($_POST['pageurl']);
   $monthlyprice=trim($_POST['monthlyprice']);
  $annualprice=trim($_POST['annualprice']);
  $sku=trim($_POST['sku']);
  $webspace=trim($_POST['webspace']);
   $bandwidth=trim($_POST['bandwidth']);
  $freedomain=trim($_POST['freedomain']);
  $languagetechnology=trim($_POST['languagetechnology']);
  $languagetechnology=rtrim($languagetechnology, ",");
  $mailbox=trim($_POST['mailbox']);
   $data=$product->addproduct($productCategory,$productname,$pageURL,$monthlyprice,$annualprice,$sku,$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox);
  if($data){
    echo "<script>alert('product  added succesfully')</script>";
  }else{
    echo "<script>alert('product not added succesfully')</script>";
  }


}
?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <!-- <span aria-hidden="true">×</span> -->
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" 
              role="button" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg 
              dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media 
                    avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media 
                    avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" 
              role="button" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" 
                    src="assets/img/theme/user-avatar.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Hello, <?php echo(isset($_SESSION['admin'])) ? $_SESSION['admin'][2]: "Admin" ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">AddProduct</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item">
                  <a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">AddProduct</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
              
            </div>
            <div class="card-body">
              <form action="addproduct.php" method="post" 
              onsubmit="return(validateAddProduct());">
              <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Create New Product</h1>
                            <div class="mb-0">Enter Product Details </div>
                            <small class="important-field"> 
                            * Mandatory Fields</small>
                            </div>
                        </div>
                    </div>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="inputState">Select Product Category
                    <span class="important-field"> *</span></label>
                    <select id="inputState" class="form-control" 
                    name="productcategory">
                        <option value="Please select">Please select</option>
                        <?php
                        $data=$product->subcategory();
                        if($data){
                          for($i=0;$i<count($data);$i++){
                            echo '<option value="'.$data[$i]['id'].'">'.$data[$i]['prod_name'].'</option>';
                          }
                        }
                        
                      ?>
                       
                    </select>
                    <div class="invalid-feedback">
                      Please Select a Product Category.
                    </div>
                    
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="productname">Enter Product Name
                        <span class="important-field"> *</span></label>
                        <input type="text" id="productname" 
                        class="form-control" placeholder="product Name" 
                        name="productname">
                          <div class="invalid-feedback">
                            Please provide a valid Product Name.
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="pageurl">Page URL</label>
                        <input type="text" id="pageurl" 
                        class="form-control" placeholder="Page URL" name="pageurl">
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Product Description</h1>
                            <div class="mb-0">Enter Product Description Below </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="monthlyprice">Enter Monthly Price
                        <span class="important-field"> *</span></label>
                        <input type="text" id="monthlyprice" 
                        class="form-control" placeholder="Monthly Price" 
                        name="monthlyprice">
                        <small class="text-muted">This would be Monthly Plan</small>
                        <div class="invalid-feedback">
                          Please Enter valid Monthly price.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="annualprice">Enter Annual Price
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="annualprice" 
                        class="form-control" placeholder="Annual Price" 
                        name="annualprice">
                        <small class="text-muted">This would be Annual Price</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Annual Price.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="sku">SKU<span class="important-field"> *</span></label>
                        <input type="text" id="sku" class="form-control" 
                        placeholder="SKU" name="sku">
                        <div class="invalid-feedback">
                          Please Enter valid SKU.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Features</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="webspace">Web Space(in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="webspace" 
                        class="form-control" placeholder="Web Space" name="webspace">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Web Space.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="bandwidth">Bandwidth (in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="bandwidth" 
                        class="form-control" placeholder="Bandwidth" 
                        name="bandwidth">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter bandwidth.
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="freedomain">Free Domain<span 
                        class="important-field"> *</span> </label>
                        <input type="text" id="freedomain"
                         class="form-control" placeholder="Free Domain" 
                         name="freedomain">
                        <small class="text-muted">Enter 0 if 
                        no domain available in this service</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Free Domain.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="languagetechnology">Language/ Technology Support
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="languagetechnology" 
                        class="form-control" 
                        placeholder="Language or Technology Support" 
                        name="languagetechnology">
                        <small class="text-muted">Separate by (,) 
                        Ex: PHP, MySQL, MongoDB</small>
                        <div class="invalid-feedback">
                        Please Enter Valid Language or Technology Support.
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="mailbox">Mailbox
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="mailbox" class="form-control" 
                        placeholder="Mailbox" name="mailbox">
                        <small class="text-muted">Enter Number 
                        of mailbox will be provided, enter 0 if none</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Number of Mailbox.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                  <input type="submit" class="btn btn-primary mt-4" 
                  id="createcategory" value="Create Category" name="submit">
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
      <!-- <script>
          var inputstatecount=0;
          var productnamecount=0;
          var monthlypricecount=0;
          var annualpricecount=0;
          var skucount=0;
          var webspacecount=0;
          var bandwidthcount=0;
          var freedomaincount=0;
          var languagetechnologycount=0;
          var mailboxcount=0;
        $(document).ready(function() {
          $("#createcategory").prop('disabled', true);
        });
        $('#inputState').focusout(function(){
          inputState();
        });
        function inputState(){
          var value=($('#inputState').val()).trim();
          if (value=="Please select") {
            $("select").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            inputstatecount=0;
            return false;
          }
          else {
            $("select").removeClass("is-invalid");
            inputstatecount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#productname').focusout(function(){
         productName();
        });
        function productName(){
          var regproductname=/(^([a-zA-Z]+\s?)|([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
          var value=($('#productname').val()).trim();
          if (value=="" || !(value.match(regproductname))) {
            $("#productname").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            productnamecount=0;
            return false;
          } else {
            $("#productname").removeClass("is-invalid");
            productnamecount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#monthlyprice').focusout(function(){
          monthlyPrice();
        });
        function monthlyPrice(){
          var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
          var value=($('#monthlyprice').val()).trim();
          if (value=="" || !(value.match(regprice)) || value.length>15) {
            $("#monthlyprice").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            monthlypricecount=0;
            return false;
          }
          else {
            $("#monthlyprice").removeClass("is-invalid");
            monthlypricecount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#annualprice').focusout(function(){
          annualPrice();
        });
        function annualPrice(){
          var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
          var value=($('#annualprice').val()).trim();
          if (value=="" || !(value.match(regprice)) || value.length>15) {
            $("#annualprice").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            annualpricecount=0;
            return false;
          }
          else {
            $("#annualprice").removeClass("is-invalid");
            annualpricecount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#sku').focusout(function(){
          sku();
        });
        function sku(){
          var regsku=/^(?![!@#$%^&*()_+=-`~?|]*$)[a-zA-Z0-9-#]+$/;
          var value=($('#sku').val()).trim();
          if (value=="" || !(value.match(regsku))) {
            $("#sku").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            skucount=0;
            return false;
          }
          else {
            $("#sku").removeClass("is-invalid");
            skucount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#webspace').focusout(function(){
          webSpace();
        });
        function webSpace(){
          var regwebspace=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
          var value=($('#webspace').val()).trim();
          if (value=="" || !(value.match(regwebspace)) || value.length>5) {
            $("#webspace").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            webspacecount=0;
            return false;
          }
          else {
            $("#webspace").removeClass("is-invalid");
            webspacecount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#bandwidth').focusout(function(){
          bandWidth();
        });
        function bandWidth(){
          var regbandwidth=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
          var value=($('#bandwidth').val()).trim();
          if (value=="" || !(value.match(regbandwidth)) || value.length>5) {
            $("#bandwidth").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            bandwidthcount=0;
            return false;
          }
          else {
            $("#bandwidth").removeClass("is-invalid");
            bandwidthcount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#freedomain').focusout(function(){
          freeDomain();
        });
        function freeDomain(){
          var regfreedomain=/^([a-zA-Z]+$)|(^([0-9])+$)/;
          var value=($('#freedomain').val()).trim();
          if (value=="" || !(value.match(regfreedomain))) {
            $("#freedomain").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            freedomaincount=0;
            return false;
          }
          else {
            $("#freedomain").removeClass("is-invalid");
            freedomaincount=1;
            if (inputstatecount+productnamecount+monthlypricecount+
            annualpricecount+skucount+webspacecount+bandwidthcount+
            freedomaincount+languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }

        $('#languagetechnology').focusout(function(){
          languageTechnology();
        });
        function languageTechnology(){
          var reglanguagetech=/^((?![0-9]+$)[a-zA-Z0-9]+\,?\s?)+$/;
          var value=($('#languagetechnology').val()).trim();
          if (value=="" || !(value.match(reglanguagetech))) {
            $("#languagetechnology").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            languagetechnologycount=0;
            return false;
          }
          else {
            $("#languagetechnology").removeClass("is-invalid");
            languagetechnologycount=1;
            if (inputstatecount+productnamecount+monthlypricecount+annualpricecount+
            skucount+webspacecount+bandwidthcount+freedomaincount+
            languagetechnologycount+mailboxcount>=10) 
            {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        $('#mailbox').focusout(function(){
         mainBox();
        });
        function mainBox(){
          var regmailbox=/^([0-9])+$/;
          var value=($('#mailbox').val()).trim();
          if (value=="" || !(value.match(regmailbox))) {
            $("#mailbox").addClass("is-invalid");
            $("#createcategory").prop('disabled', true);
            mailboxcount=0;
            return false;
          }
          else {
            $("#mailbox").removeClass("is-invalid");
            mailboxcount=1;
            if (inputstatecount+productnamecount+monthlypricecount+annualpricecount+
            skucount+webspacecount+bandwidthcount+freedomaincount+
            languagetechnologycount+mailboxcount>=10) {
              $("#createcategory").prop('disabled', false);
            }
            return true;
          }
        }
        function validateAddProduct(){
          var productcategory=($('#inputState').val()).trim();
          var productname=($('#productname').val()).trim();
          var pageurl=($('#pageurl').val()).trim();
          var monthlyprice=($('#monthlyprice').val()).trim();
          var annualprice=($('#annualprice').val()).trim();
          var sku=($('#sku').val()).trim();
          var webspace=($('#webspace').val()).trim();
          var bandwidth=($('#bandwidth').val()).trim();
          var freedomain=($('#freedomain').val()).trim();
          var languagetechnology=($('#languagetechnology').val()).trim();
          var mailbox=($('#mailbox').val()).trim();
          if ((inputState()==false) || (productName()==false)  || 
          (monthlyPrice()==false) || (annualprice()==false) || 
          (sku()==false) || (webSpace()==false) || (bandwidth()==false) || 
          (freedomain()==false) || (languagetechnology()==false) || 
          (mailbox()==false)) {
            alert("Please Enter All Required Fields");
            return false;
          }
          else if(monthlyprice>annualprice){
          alert("Please Enter monthly price less than annual price");
          return false;
          }
          else {
            return true;
          }
        }
      </script> -->
<?php
require_once "footer.php";
?>
