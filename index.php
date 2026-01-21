<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home - Employee Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="P" />
    <meta name="keywords" content="" />
    <meta content="" name="author" />

    <!-- Pixeden Icon -->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7.css" />

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" sizes="16x16" href="image/logo.jpeg">
    
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/toastr.css">

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
        background:rgb(29, 124, 88);
        color: #fff;
        padding: 12px;
        border-radius: 10px 10px 0 0;
        font-weight: bold;
        cursor: pointer;
    }
    #chatbot-body {
        background: #fff;
        border: 1px solidrgb(15, 91, 67);
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
    }
    </style>
    <!-- Chatbot Widget End -->

</head>
<body style="height:100vh;" class="d-flex flex-column">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-light">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
                <img src="image/logo.png" alt="" class="logo-dark" height="51">
                <img src="image/logo.png" alt="" class="logo-light" height="81">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                                   <li class="nav-item">
                        <a href="Account/registration.php" class="nav-link">Employee Registration</a>
                    </li>
                    <li class="nav-item">
                        <a href="Employee/index.php" class="nav-link">Employee Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin/index.php">Admin Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
<section class="hero-7-bg position-relative bg-gradient-primary" id="home">
    <div class="hero-7-bg-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-title">
                    <h1 class="hero-7-title">
                        <span class="text-wrapper">
                            <span class="text-light font-weight-normal">Employee Management System </span>                        </span>                    </h1>
                    <p class="text-light-70 mb-4 pb-2">
                    Employee management is the process by which employers ensure workers perform their jobs to the 
                    best of their abilities so as to achieve business goals. It typically entails building and maintaining 
                    healthy relationships with employees, as well as monitoring their daily labor and measuring progress. 
                    In this way, employers can identify opportunities for improvement and recognize achievements.
                        
                    </p>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1">
                <div class="hero-login-form mx-auto p-4 rounded mt-5 mt-lg-0 bg-white">
                    <div class="text-center">
                        <h5 class="form-title mb-4">A Case study of Foundation Polytechnic, Ikot Ekpene</h5>
                    </div>
                    <img src="images/img1.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    
</section>

<!-- Chatbot Widget Start -->
<style>
#chatbot-container {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 350px;
    max-width: 90vw;
    z-index: 9999;
    font-family: Arial, sans-serif;
}
#chatbot-header {
    background: #007bff;
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
    <div id="chatbot-header">💬 Need Help? Ask the Leave Chatbot</div>
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

// Basic chatbot logic
function botReply(message) {
    message = message.toLowerCase();
    if (message.includes('register')) {
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
    if (message.match(/policy|casual leave|sick leave|annual leave/)) {
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

    <!-- Footer Start -->
    <section class="footer pt-0 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center footer-alt my-1">
                        <p class="f-15">
                            <?php include('inc/footer2.php') ; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->
    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- anime -->
    <script src="js/anime.min.js"></script>
    <!-- COUNTER -->
    <!-- carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
    
    <script src="js/site.js"></script>
    <script src="js/general.js"></script>
    <script src="app-assets/vendors/js/toastr.min.js" type="text/javascript"></script>
    <script src="lib/jquery-validation/dist/jquery.validate.js"></script>
    
</body>

<!-- Mirrored from verify.waeconline.org.ng/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 15:19:10 GMT -->
</html>
