<?php
include('../inc/topbar.php'); 
if(empty($_SESSION['login_email']))
    {   
      header("Location: ../Account/login.php"); 
    }

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Leave History | <?php echo $sitename ;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../<?php echo $logo;?>">
    <script type="text/javascript">
		function deldata(){
if(confirm("ARE YOU SURE YOU WISH TO DELETE THIS LEAVE APPLICATION FROM YOUR RECORD ?"))
{
return  true;
}
else {return false;
}

}
</script>

    <style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style>
</head>

<body>

  <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img src="../<?php echo $rowaccess['photo'];  ?>" alt="image" width="142" height="153" class="img-circle" />
                             </span>
  
   
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"><span class="text-muted text-xs block"><?php echo $rowaccess['email'];  ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
  </div>	
			   <?php
			   include('sidebar.php');
			   
			   ?>
			        </ul>

        </div>
    </nav>

         <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>

<span class="m-r-sm text-muted welcome-message">Welcome to <?php echo $sitename; ?></span>
                </li>
                <li class="dropdown">
                   
                    


                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
               
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Leave History</strong></li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <a class="btn btn-success btn-rounded" href="apply_leave.php">Apply</a>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th><div align="center"><span class="style1">#</span></div></th>
                        <th><div align="center"><span class="style1">Leave ID</span></div></th>
                       <th><div align="center"><span class="style1">Start Date</span></div></th>
						  <th><div align="center"><span class="style1">End Date </span></div></th>
                        <th><div align="center"><span class="style1">Reason</span></div></th>
						 <th><div align="center"><span class="style1">Leave Status</span></div></th>
                         <th><div align="center"><span class="style1">Action</span></div></th>
                    </thead>
                           <tbody>
			<?php
		
			$sql = "SELECT * FROM tblleave WHERE email='$email' ORDER BY start_date";
				$result = $conn->query($sql);
				$cnt=1;
      	     while($row = $result->fetch_assoc()) { 
									
		  ?>

                    <tr class="gradeX">
                        <td><div align="center"><?php echo $cnt;  ?></div></td>
                        <td><div align="center"><?php echo $row['leaveID'];  ?> </div></td>
                        <td class="center"><div align="center"><?php echo $row['start_date'];  ?></div></td>
                        <td class="center"><div align="center"><?php echo $row['end_date'];  ?></div></td>
                        <td class="center"><div align="center"><?php echo $row['reason'];  ?></div></td>
                        <td><div align="center">
                          <?php if(($row['status'])=="Pending")
						{ ?>
                          <span class="badge badge-warning">Pending</span>
                          <?php }else if(($row['status'])=="Approved") { ?>
                          <span class="label label-success">Approved</span>
                          <?php }else if(($row['status'])=="Declined") { ?>
                          <span class="label label-danger">Declined</span>
                          <?php } ?>		
                          
                        </div></td>
                              <td class="center"><div align="center"><a class="btn btn-primary btn-rounded" href="delete_leave.php?id=<?php echo $row['leaveID'];?>" onClick="return deldata();">Delete</a>
                              </div></td>
</tr>
					    <?php $cnt=$cnt+1;} ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
		
		
		 <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row"></div>
        </div>
       
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong></strong><?php include('../inc/footer.php');  ?></strong> 
            </div>
        </div>

        </div>
        </div>

<!-- Chatbot Widget Start -->
<style>
#chatbot-container {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 150px;
    max-width: 90vw;
    z-index: 9999;
    font-family: Arial, sans-serif;
}
#chatbot-header {
    background:rgb(26, 161, 107);
    color: #fff;
    padding: 12px;
    border-radius: 10px 10px 0 0;
    font-weight: bold;
    cursor: pointer;
}
#chatbot-body {
    background: #fff;
    border: 1px solid #007bff;
    border-top: none;
    height: 350px;
    overflow-y: auto;
    padding: 10px;
    display: none;
    border-radius: 0 0 10px 10px;
}
#chatbot-input-area {
    display: flex;
    border-top: 1px solid #eee;
    background: #fafafa;
    padding: 8px;
}
#chatbot-input {
    flex: 1;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 6px;
}
#chatbot-send {
    background: #007bff;
    color: #fff;
    border: none;
    margin-left: 8px;
    padding: 6px 14px;
    border-radius: 5px;
    cursor: pointer;
}
.chatbot-message {
    margin-bottom: 10px;
}
.chatbot-message.user {
    text-align: right;
    color: #007bff;
}
.chatbot-message.bot {
    text-align: left;
    color: #222;
}
</style>
<div id="chatbot-container">
    <div id="chatbot-header">Need Help? Ask the Leave Chatbot</div>
    <div id="chatbot-body">
        <div id="chatbot-messages"></div>
        <div id="chatbot-input-area">
            <input type="text" id="chatbot-input" placeholder="Type your question..." autocomplete="off" />
            <button id="chatbot-send">Send</button>
        </div>
    </div>
</div>
<script>
const chatbotHeader = document.getElementById('chatbot-header');
const chatbotBody = document.getElementById('chatbot-body');
const chatbotMessages = document.getElementById('chatbot-messages');
const chatbotInput = document.getElementById('chatbot-input');
const chatbotSend = document.getElementById('chatbot-send');

// Toggle chatbot
chatbotHeader.onclick = () => {
    chatbotBody.style.display = chatbotBody.style.display === 'block' ? 'none' : 'block';
};

// Improved chatbot logic
function botReply(message) {
    message = message.toLowerCase();
    if (message.includes('register') || message.includes('registration')) {
        return "To register, click on 'Employee Registration' in the menu and fill out the form. If you need help, let me know!";
    }
    if (message.includes('login')) {
        return "To log in, go to the Employee Dashboard and enter your credentials. If you forgot your password, use the 'Forgot Password' link.";
    }
    if (message.match(/(leave balance|how many.*leave|leave left)/)) {
        return "To check your leave balance, log in to your Employee Dashboard. Your available leave types and balances are displayed there.";
    }
    if (message.match(/apply.*leave|request.*leave/)) {
        return "To apply for leave, log in to your dashboard, go to 'Apply Leave', select the dates, type, and submit. Example: 'Apply for leave from June 1 to June 5'.";
    }
    if (message.match(/status.*leave|leave.*status/)) {
        return "To view your leave status, log in and check the 'Leave Status' section in your dashboard.";
    }
    if (
        message.match(/policy|policies|leave policy|leave policies|casual leave|sick leave|annual leave/)
    ) {
        return "Company Leave Policy: Employees are entitled to annual, sick, and casual leaves. For details, check the 'Leave Policy' section or ask HR.";
    }
    if (message.trim() === '') {
        return "Please type your question.";
    }
    return "Sorry, I didn't understand that. You can ask about registration, login, leave balance, applying for leave, leave status, or company leave policies.";
}

function addMessage(text, sender) {
    const msg = document.createElement('div');
    msg.className = 'chatbot-message ' + sender;
    msg.innerText = text;
    chatbotMessages.appendChild(msg);
    chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
}

chatbotSend.onclick = () => {
    const userMsg = chatbotInput.value.trim();
    if (!userMsg) return;
    addMessage(userMsg, 'user');
    setTimeout(() => {
        addMessage(botReply(userMsg), 'bot');
    }, 500);
    chatbotInput.value = '';
};

chatbotInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') chatbotSend.click();
});
</script>
<!-- Chatbot Widget End -->

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( 'example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>

</body>

</html>
