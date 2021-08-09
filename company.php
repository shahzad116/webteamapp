<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <?php include 'pages/header.php';?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Users list</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Users list</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <!-- code -->
                    <div class="row">


                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>User List For Communication</h5>
                           
                        </div>
                        <div class="ibox-content">
                        <form role="form">
                                    
                                    <div class="form-group"><label>Name</label> 
                                    <select class="form-control m-b" name="totalusers">
                                      <option>Select Name</option>
                                        <option value="MURAT">MURAT</option>
                                        <option value="AHMET">AHMET </option>
                                        <option value="ANTON">ANTON</option>
                                        <option value="CRISS">CRISS</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>Position</label> 
                                    <select class="form-control m-b" name="totalusers">
                                        <option>Select Position</option>
                                        <option value="DIRECTOR">DIRECTOR</option>
                                        <option value="MANAGER">MANAGER</option>
                                        <option value="STAFF">STAFF</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group"><label>Communication</label> 
                                    <select class="form-control m-b" name="totalusers">
                                        <option>Select Person</option>
                                        <option value="DIRECTOR">ALL</option>
                                        <option value="MANAGER">ONLY</option>
                                        <option value="Managers & Supervisors">Managers & Supervisors</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group"><label>Projects</label> 
                                    <select class="form-control m-b" name="totalusers">
                                        <option>Select Project</option>
                                        <option value="Frontend">Frontend</option>
                                        <option value="Backend">Backend</option>
                                        <option value="Laravel">Laravel</option>
                                        
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



            <div class="col-lg-8">
                <div class="ibox ">
                        <div class="ibox-content">
                        <div class="row">
                           


                        <div class="ibox chat-view">

                        <div class="ibox-title">
                            <h5>User List For Communication</h5>
                        </div>

                                        <div class="ibox-content">

                                            <div class="row">

                                                <div class="col-md-6">

                                                    

                                                    <div class="chat-discussion">
                                                   

                                                        <div class="chat-message left">
                                                        
                                                            <img class="message-avatar" src="img/a1.jpg" alt="" >
                                                            <div class="message">
                                                                <a class="message-author" href="#"> Michael Smith </a>
                                                                <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                                <span class="message-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message right">
                                                            <img class="message-avatar" src="img/a4.jpg" alt="" >
                                                            <div class="message">
                                                                <a class="message-author" href="#"> Karl Jordan </a>
                                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                                <span class="message-content">
                                                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message right">
                                                            <img class="message-avatar" src="img/a2.jpg" alt="" >
                                                            <div class="message">
                                                                <a class="message-author" href="#"> Michael Smith </a>
                                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                                <span class="message-content">
                                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message left">
                                                            <img class="message-avatar" src="img/a5.jpg" alt="" >
                                                            <div class="message">
                                                                <a class="message-author" href="#"> Alice Jordan </a>
                                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                                <span class="message-content">
                                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                                    It uses a dictionary of over 200 Latin words.
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message right">
                                                            <img class="message-avatar" src="img/a6.jpg" alt="" >
                                                            <div class="message">
                                                                <a class="message-author" href="#"> Mark Smith </a>
                                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                                <span class="message-content">
                                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                                    It uses a dictionary of over 200 Latin words.
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                               
                                               
                        <!-- Modal popip for video -->

                      <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Video Call</h4>
                                        </div> -->
                                        <div class="modal-body">
                                        <video id="video" width="640" height="480" autoplay></video>
                                            <!-- <button id="snap">Snap Photo</button> -->
                                             <canvas id="canvas" width="640" height="480"></canvas>
                                        </div>

                                        <div class="modal-footer">
                                       
                                        <button class="btn btn-info  dim" type="button" id="download"><i class="fa fa-download"></i></button>
                                        <button class="btn btn-info  dim" type="button" id="snap"><i class="fa fa-picture-o"></i></button>
                                        <button class="btn btn-success  dim" type="button"><i class="fa fa-microphone"></i></button>
                                        <button class="btn btn-danger  dim " type="button"  data-dismiss="modal"><i class="fa fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!-- Modal popip for video -->


                     <!-- Modal popip for video -->

                     <div class="modal inmodal fade" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                       
                                        <div class="modal-body">
                                        
                                        <h1>Audio call</h1>
                                       
                                           
                                        </div>

                                        <div class="modal-footer">
                                       
                                        <button class="btn btn-success  dim" type="button"><i class="fa fa-microphone"></i></button>
                                        <button class="btn btn-danger  dim " type="button"  data-dismiss="modal"><i class="fa fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!-- Modal popip for video -->




                                                <div class="col-md-6">
                                                    <div class="chat-users">

                                                    
                                                        <div class="users-list">
                                                            <div class="chat-user">
                                                                <img class="chat-avatar" src="img/a4.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Monica Smith</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-phone"></i></button>

                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button" data-toggle="modal" data-target="#myModal5" ><i class="fa fa-video-camera"></i></button>

                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                    
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="chat-user">
                                                                <img class="chat-avatar" src="img/a1.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Monica Smith</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-user">
                                                               
                                                                <img class="chat-avatar" src="img/a2.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Michael Smith</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="chat-user">
                                                                
                                                                <img class="chat-avatar" src="img/a3.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Janet Smith</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-user">
                                                                <img class="chat-avatar" src="img/a5.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Alice Smith</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-user">
                                                                <img class="chat-avatar" src="img/a6.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Monica Cale</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-user">
                                                                <img class="chat-avatar" src="img/a2.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Mark Jordan</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-user">
                                                                
                                                                <img class="chat-avatar" src="img/a3.jpg" alt="" >
                                                                <div class="chat-user-name">
                                                                    <a href="#">Janet Smith</a>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-phone"></i></button>
                                                                    <button class="btn btn-success btn-circle float-right ml-2" type="button"><i class="fa fa-video-camera"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-xs float-right ml-2">Details</button>
                                                                    <button type="button" class="btn btn-success btn-xs float-right ml-2">Supervisor</button>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="chat-message-form">

                                                        <div class="form-group">

                                                            <textarea class="form-control message-input" name="message" placeholder="Enter message text"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        </div>




                            
                        </div>
                    </div>
                </div>
            </div>
              
            </div>



                        


                        <!-- end code -->

                
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

    <script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

<script>
    // Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}
</script>


<script>
    var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
});
</script>

<script>

$("#snap").click(function(){
  $("#video").hide();
  $("#canvas").show();
  $("#snap").hide();
  $("#download").show();
  
});

</script>

</body>

</html>
