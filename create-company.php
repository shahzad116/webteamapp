<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Company | Web Team App</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <?php include 'pages/header.php';?>


      
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Web Team App</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Create Company</h5>
                       
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12 b-r">
                                <form role="form">
                                    <div class="form-group"><label>Compnay Name</label> <input type="email" placeholder="Enter Name" class="form-control"></div>
                                    <div class="form-group"><label>Compnay Address</label> <input type="text" placeholder="Enter Address" class="form-control"></div>
                                    <div class="form-group"><label>Compnay Contact</label>
                                    <input type="tel" class="form-control"  placeholder="Enter Contact">
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-green" type="submit">Create</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Create Project</h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form role="form">
                                    <div class="form-group"><label>ProJect Name</label> <input type="email" placeholder="Enter Name" class="form-control"></div>
                                    <div class="form-group"><label>How Many Users</label> 
                                    <select class="form-control m-b" name="totalusers">
                                      <option>Select Users</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>Select Payment</label> 
                                    <select class="form-control m-b" name="totalusers">
                                        <option>Select Payment</option>
                                        <option value="Paypal">Paypal</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Bank Transfer">Bank Transfer</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-green" type="submit">Create</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">

<div class="row">
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Campanies List</h5>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                  
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                            <input type="text" class="form-control form-control-sm m-b-xs" id="filter"
                                   placeholder="Search in table">

                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Company Names</th>
                                    <th>Chat</th>
                                    <th>Scan CQ Scan</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>aaa</td>
                                    <td>join</td>
                                    <td>Scan<td>
                                   
                                </tr>
                                <tr class="gradeX">
                                    <td>aaa</td>
                                    <td>join</td>
                                    <td>Scan<td>
                                </tr>
                            
                              
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination float-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Proects List</h5>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                            <input type="text" class="form-control form-control-sm m-b-xs" id="filter"
                                   placeholder="Search in table">

                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Project Names</th>
                                    <th>Manager</th>
                                    <th>Start Date</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>aaa</td>
                                    <td>join</td>
                                    <td>Scan<td>
                                   
                                </tr>
                                <tr class="gradeX">
                                    <td>aaa</td>
                                    <td>join</td>
                                    <td>Scan<td>
                                </tr>
                            
                              
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination float-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
        </div>
    </div>
</div>


        </div>




        <div class="footer">
            
            <div>
                <strong>Copyright</strong> Web Team App &copy; 2021
            </div>
        </div>



        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
