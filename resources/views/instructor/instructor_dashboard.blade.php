<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GetSkills  : GetSkills Online Learning Admin Bootstrap 5 Template" />
    <meta property="og:title" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
    <meta property="og:description" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.html" />
    <meta name="format-detection" content="telephone=no">

    <title>instructor dashboard</title>

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="/Assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/Assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <link href="/Assets/css/style.css" rel="stylesheet">

</head>

<body>


    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">

       
        <div class="nav-header">
            <a href="index.html" class="brand-logo">





            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dlab-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dlab-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
                                            btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to
                                            group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <div class="navbar-nav header-right">
                            <div class="nav-item d-flex align-items-center">
                                <div class="input-group search-area">
                                    <span class="input-group-text"><a href="javascript:void(0)"><svg width="24"
                                                height="24" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                                    fill="var(--secondary)" />
                                            </svg>
                                        </a></span>
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                            </div>
                            <div class="dlab-side-menu">
                                <div class="search-coundry d-flex align-items-center">
                                    <img src="images/United.png" alt="">
                                    <select class="default-select dashboard-select image-select">
                                        <option data-display="Eng">Eng</option>
                                        <option value="2">Af</option>
                                        <option value="2">Al</option>
                                    </select>
                                </div>
                                <div class="sidebar-social-link ">
                                    <ul>
                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M20.4023 13.4798C20.7599 13.6577 21.0359 13.9387 21.23 14.2197C21.6082 14.8003 21.5775 15.5121 21.2096 16.1395L20.4942 17.2634C20.1161 17.8627 19.411 18.2373 18.6854 18.2373C18.3277 18.2373 17.9291 18.1437 17.6021 17.9564C17.3364 17.7972 17.0298 17.741 16.7028 17.741C15.691 17.741 14.8428 18.5183 14.8121 19.4455C14.8121 20.5225 13.8719 21.3653 12.6967 21.3653H11.3068C10.1214 21.3653 9.18116 20.5225 9.18116 19.4455C9.16072 18.5183 8.3125 17.741 7.30076 17.741C6.96351 17.741 6.65693 17.7972 6.40144 17.9564C6.07441 18.1437 5.66563 18.2373 5.31816 18.2373C4.58235 18.2373 3.8772 17.8627 3.49908 17.2634L2.79393 16.1395C2.4158 15.5308 2.39536 14.8003 2.77349 14.2197C2.937 13.9387 3.24359 13.6577 3.59106 13.4798C3.8772 13.3487 4.06116 13.1333 4.23489 12.8804C4.74587 12.075 4.43928 11.0167 3.57062 10.5391C2.55888 10.0053 2.23185 8.81591 2.81437 7.88875L3.49908 6.78366C4.09181 5.8565 5.35904 5.52871 6.381 6.0719C7.2701 6.52143 8.42491 6.22174 8.94611 5.4257C9.10962 5.16347 9.2016 4.88251 9.18116 4.60156C9.16072 4.23631 9.27314 3.8898 9.46731 3.60884C9.84543 3.0282 10.5301 2.65359 11.2762 2.63486H12.7171C13.4734 2.63486 14.1581 3.0282 14.5362 3.60884C14.7202 3.8898 14.8428 4.23631 14.8121 4.60156C14.7917 4.88251 14.8837 5.16347 15.0472 5.4257C15.5684 6.22174 16.7232 6.52143 17.6225 6.0719C18.6343 5.52871 19.9117 5.8565 20.4942 6.78366L21.1789 7.88875C21.7717 8.81591 21.4447 10.0053 20.4227 10.5391C19.554 11.0167 19.2474 12.075 19.7686 12.8804C19.9322 13.1333 20.1161 13.3487 20.4023 13.4798ZM9.10962 12.0095C9.10962 13.4798 10.4075 14.6505 12.012 14.6505C13.6165 14.6505 14.8837 13.4798 14.8837 12.0095C14.8837 10.5391 13.6165 9.3591 12.012 9.3591C10.4075 9.3591 9.10962 10.5391 9.10962 12.0095Z"
                                                        fill="#130F26" />
                                                </svg>

                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div id="DZ_W_TimeLine02"
                                                    class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                                                    <h4 class="text-center border-bottom pb-2">Notications</h4>
                                                    <ul class="timeline">
                                                        <li>
                                                            <div class="timeline-badge primary"></div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>10 minutes ago</span>
                                                                <h6 class="mb-0">Youtube, a video-sharing website, goes
                                                                    live <strong class="text-primary">$500</strong>.
                                                                </h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge info">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">New order placed <strong
                                                                        class="text-info">#XF-2356.</strong></h6>
                                                                <p class="mb-0">Quisque a consequat ante Sit amet magna
                                                                    at volutapt...</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>30 minutes ago</span>
                                                                <h6 class="mb-0">john just buy your product <strong
                                                                        class="text-warning">Sell $250</strong></h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge success">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>15 minutes ago</span>
                                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge warning">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog, goes
                                                                    live.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge dark">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog, goes
                                                                    live.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge primary"></div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>10 minutes ago</span>
                                                                <h6 class="mb-0">Youtube, a video-sharing website, goes
                                                                    live <strong class="text-primary">$500</strong>.
                                                                </h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge info">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">New order placed <strong
                                                                        class="text-info">#XF-2356.</strong></h6>
                                                                <p class="mb-0">Quisque a consequat ante Sit amet magna
                                                                    at volutapt...</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>30 minutes ago</span>
                                                                <h6 class="mb-0">john just buy your product <strong
                                                                        class="text-warning">Sell $250</strong></h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge success">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>15 minutes ago</span>
                                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge warning">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog, goes
                                                                    live.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge dark">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog, goes
                                                                    live.</h6>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="all-notification" href="javascript:void(0);">See all
                                                    notifications <i class="ti-arrow-end"></i></a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link bell-link " href="javascript:void(0);">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M16.9394 3.57129C18.2804 3.57129 19.5704 4.06765 20.5194 4.95828C21.4694 5.84704 22.0004 7.04579 22.0004 8.30073V15.6993C22.0004 18.3122 19.7304 20.4287 16.9394 20.4287H7.0604C4.2694 20.4287 2.0004 18.3122 2.0004 15.6993V8.30073C2.0004 5.68783 4.2594 3.57129 7.0604 3.57129H16.9394ZM18.5304 9.69615L18.6104 9.62123C18.8494 9.34964 18.8494 8.9563 18.5994 8.68471C18.4604 8.54517 18.2694 8.45994 18.0704 8.44121C17.8604 8.43091 17.6604 8.4974 17.5094 8.62852L13.0004 12C12.4204 12.4505 11.5894 12.4505 11.0004 12L6.5004 8.62852C6.1894 8.41312 5.7594 8.44121 5.5004 8.69407C5.2304 8.94693 5.2004 9.34964 5.4294 9.6306L5.5604 9.75234L10.1104 13.077C10.6704 13.4891 11.3494 13.7138 12.0604 13.7138C12.7694 13.7138 13.4604 13.4891 14.0194 13.077L18.5304 9.69615Z"
                                                        fill="#130F26" />
                                                </svg>

                                            </a>
                                        </li>
                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link" href="javascript:void(0);" role="button"
                                                data-bs-toggle="dropdown">
                                                <svg width="24" height="23" viewBox="0 0 24 23" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M18.7071 8.56414C18.7071 9.74035 19.039 10.4336 19.7695 11.2325C20.3231 11.8211 20.5 12.5766 20.5 13.3963C20.5 14.215 20.2128 14.9923 19.6373 15.6233C18.884 16.3798 17.8215 16.8627 16.7372 16.9466C15.1659 17.0721 13.5937 17.1777 12.0005 17.1777C10.4063 17.1777 8.83505 17.1145 7.26375 16.9466C6.17846 16.8627 5.11602 16.3798 4.36367 15.6233C3.78822 14.9923 3.5 14.215 3.5 13.3963C3.5 12.5766 3.6779 11.8211 4.23049 11.2325C4.98384 10.4336 5.29392 9.74035 5.29392 8.56414V8.16515C5.29392 6.58996 5.71333 5.55995 6.577 4.55164C7.86106 3.08114 9.91935 2.19922 11.9558 2.19922H12.0452C14.1254 2.19922 16.2502 3.12359 17.5125 4.65728C18.3314 5.64484 18.7071 6.63146 18.7071 8.16515V8.56414ZM9.07367 19.1136C9.07367 18.642 9.53582 18.426 9.96318 18.3336C10.4631 18.2345 13.5093 18.2345 14.0092 18.3336C14.4366 18.426 14.8987 18.642 14.8987 19.1136C14.8738 19.5626 14.5926 19.9606 14.204 20.2134C13.7001 20.5813 13.1088 20.8143 12.4906 20.8982C12.1487 20.9397 11.8128 20.9407 11.4828 20.8982C10.8636 20.8143 10.2723 20.5813 9.76938 20.2125C9.37978 19.9606 9.09852 19.5626 9.07367 19.1136Z"
                                                        fill="#130F26" />
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3"
                                                    style="height:380px;">
                                                    <ul class="timeline">
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="images/avatar/1.jpg">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-info">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-success">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="images/avatar/1.jpg">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-danger">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-primary">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="images/avatar/1.jpg">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-info">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-success">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="images/avatar/1.jpg">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-danger">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-primary">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="all-notification" href="javascript:void(0);">See all
                                                    notifications <i class="ti-arrow-end"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul>
                                    <li class="nav-item dropdown header-profile">
                                        <a class="nav-link" href="javascript:void(0);" role="button"
                                            data-bs-toggle="dropdown">
                                            <img src="/Assets/images/profile/pic1.jpg" width="20" alt="" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="/profile" class="dropdown-item ai-icon">
                                                <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg"
                                                    class="text-primary" width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <span class="ms-2">Profile </span>
                                            </a>
                                            <a href="/notifications" class="dropdown-item ai-icon">
                                                <svg id="icon-inbox1" xmlns="http://www.w3.org/2000/svg"
                                                    class="text-success" width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                                <span class="ms-2">Inbox </span>
                                            </a>
                                            <a href="/logout" class="dropdown-item ai-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                </svg>
                                                <span class="ms-2">Logout </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

		<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="/instructor_dashboard" class="" aria-expanded="false">
                            <i class="bi bi-grid"></i>
                            <span class="nav-text">Dashboard</span>
                        </a></li>

                    <li><a href="/instructor_course" class="" aria-expanded="false">
                            <i class="bi bi-book"></i>
                            <span class="nav-text">My Courses</span>
                        </a></li>

                    <li><a href="/instructor_student" class="" aria-expanded="false">
                            <i class="bi bi-people"></i>
                            <span class="nav-text">Students</span>
                        </a></li>

                    <li><a href="/instructor_assignments" class="" aria-expanded="false">
                            <i class="bi bi-pen"></i>
                            <span class="nav-text">Assignments</span>
                        </a></li>

                    <li><a href="/instructor_grades" class="" aria-expanded="false">
                            <i class="bi bi-pencil-square"></i>
                            <span class="nav-text">Grades</span>
                        </a></li>

                    <li><a href="/instructor_schedule" class="" aria-expanded="false">
                            <i class="bi bi-calendar"></i>
                            <span class="nav-text">Schedule</span>
                        </a></li>

                    <li><a href="/resources" class="" aria-expanded="false">
                            <i class="bi bi-folder"></i>
                            <span class="nav-text">Resources</span>
                        </a>
                        
                    </li>

                    <li><a href="/notifications" class="" aria-expanded="false">
                            <i class="bi bi-bell"></i>
                            <span class="nav-text">Notifications</span>
                        </a></li>

                    <li><a href="/analytics" class="" aria-expanded="false">
                            <i class="bi bi-graph-up"></i>
                            <span class="nav-text">Analytics</span>
                        </a></li>

                    

                    <li><a href="/help" class="" aria-expanded="false">
                            <i class="bi bi-question-circle"></i>
                            <span class="nav-text">Help</span>
                        </a></li>

                    

                    <li><a href="/profile" class="" aria-expanded="false">
                            <i class="bi bi-person"></i>
                            <span class="nav-text">Profile</span>
                        </a></li>



                    <li><a href="/logout" class="" aria-expanded="false">
                            <i class="bi bi-power"></i>
                            <span class="nav-text">Logout</span>
                        </a></li>
                </ul>

                <div class="plus-box">
                    <div class="d-flex align-items-center">
                        <h5>Upgrade your Account</h5>
                        <img src="images/medal.png" alt="">
                    </div>
                    <p>Upgrade</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">Upgrade</a>
                </div>
            </div>

        </div>
    </div>


    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-xxl-7">
                    <div class="row">
                        <div class="col-xl-4 col-xxl-6 col-sm-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4>Total Students</h4>
                                </div>
                                <div class="card-body pt-0 px-0 ">
                                    <div id="chartBar" class="chartBar"></div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap px-4">
                                        <h4 class="fs-18 font-w600 mb-0">12.345</h4>
                                        <span><small class="text-secondary">5.4% </small>than last year</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-6 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-header border-0 pb-0">
                                    <h4>Courses</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex align-items-center courses-chart flex-wrap">
                                        <span class="ic-icon me-2">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.00001 6.86665C9.09359 6.86611 9.18637 6.88405 9.27301 6.91944C9.35965 6.95483 9.43845 7.00697 9.5049 7.07288L12.3493 9.91732C12.4832 10.0512 12.5585 10.2328 12.5585 10.4222C12.5585 10.6116 12.4832 10.7932 12.3493 10.9271C12.2154 11.061 12.0338 11.1362 11.8445 11.1362C11.6551 11.1362 11.4735 11.061 11.3396 10.9271L9.00001 8.58043L6.66045 10.92C6.52441 11.0365 6.34943 11.0974 6.17046 11.0904C5.99149 11.0835 5.82172 11.0093 5.69507 10.8827C5.56843 10.7561 5.49424 10.5863 5.48732 10.4073C5.48041 10.2283 5.54129 10.0534 5.65778 9.91732L8.50223 7.07288C8.63468 6.9415 8.81345 6.86744 9.00001 6.86665Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                        <h4 class="mb-0 me-auto">100</h4>
                                        <span><small class="text-secondary">+15% </small>than last year</span>
                                    </div>
                                    <div class="pt-line">
                                        <span class="peity-line" data-width="100%"
                                            style="display: none;">4,7,4,9,5,6,8,3,1,3,5,6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-12 col-sm-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4>Earnings</h4>
                                </div>
                                <div class="card-body pt-0 px-3">

                                    <div id="earningtBar"></div>
                                    <div class="px-3">
                                        <h4 class="mb-2">$45,741</h4>
                                        <span>+15%
                                            <svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.25 12C23.25 5.775 18.225 0.75 12 0.75C5.775 0.749999 0.75 5.775 0.75 12C0.749999 18.225 5.775 23.25 12 23.25C18.225 23.25 23.25 18.225 23.25 12ZM11.25 16.575L11.25 9.675L9.3 11.4C8.85 11.775 8.25 11.7 7.875 11.325C7.725 11.1 7.65 10.875 7.65 10.65C7.65 10.35 7.8 10.05 8.025 9.9L11.625 6.75C11.7 6.675 11.775 6.675 11.85 6.6C11.925 6.6 11.925 6.6 12 6.525C12.075 6.525 12.075 6.525 12.15 6.525L12.225 6.525C12.3 6.525 12.3 6.525 12.375 6.525L12.45 6.525C12.525 6.525 12.525 6.525 12.6 6.6C12.6 6.6 12.675 6.6 12.675 6.675L12.75 6.75C12.75 6.75 12.75 6.75 12.825 6.825L15.975 10.05C16.35 10.425 16.35 11.1 15.975 11.475C15.6 11.85 14.925 11.85 14.55 11.475L13.125 9.975L13.125 16.65C13.125 17.175 12.675 17.7 12.075 17.7C11.7 17.55 11.25 17.1 11.25 16.575Z"
                                                    fill="#4CBC9A" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 flex-wrap">
                                    <h4>Working Activity</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span class="work-ic">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.4 0.840088H6.59997C5.07305 0.842458 3.60934 1.45007 2.52965 2.52977C1.44995 3.60947 0.842336 5.07317 0.839966 6.60009V19.4001C0.842336 20.927 1.44995 22.3907 2.52965 23.4704C3.60934 24.5501 5.07305 25.1577 6.59997 25.1601H19.4C20.9269 25.1577 22.3906 24.5501 23.4703 23.4704C24.55 22.3907 25.1576 20.927 25.16 19.4001V6.60009C25.1576 5.07317 24.55 3.60947 23.4703 2.52977C22.3906 1.45007 20.9269 0.842458 19.4 0.840088ZM20.3984 13.6401H16.9936L14.8432 17.8769C14.7911 17.9815 14.7107 18.0693 14.6111 18.1305C14.5115 18.1916 14.3968 18.2234 14.28 18.2225H14.2416C14.1175 18.2182 13.9976 18.1769 13.8973 18.1039C13.7969 18.0309 13.7207 17.9296 13.6784 17.8129L11.0928 11.1441L9.95357 13.2945C9.90275 13.4001 9.82262 13.4888 9.72276 13.5501C9.62289 13.6113 9.50751 13.6426 9.39037 13.6401H5.60157C5.43183 13.6401 5.26904 13.5727 5.14902 13.4526C5.02899 13.3326 4.96157 13.1698 4.96157 13.0001C4.96157 12.8303 5.02899 12.6676 5.14902 12.5475C5.26904 12.4275 5.43183 12.3601 5.60157 12.3601H9.00637L10.6192 9.31369C10.6739 9.20296 10.7603 9.11099 10.8674 9.04946C10.9746 8.98792 11.0975 8.9596 11.2208 8.96809C11.3442 8.9747 11.463 9.0169 11.563 9.08958C11.6629 9.16226 11.7397 9.26233 11.784 9.37769L14.3568 16.0209L16.0336 12.7057C16.0905 12.6024 16.1738 12.5159 16.275 12.4552C16.3761 12.3945 16.4916 12.3617 16.6096 12.3601H20.3984C20.5681 12.3601 20.7309 12.4275 20.8509 12.5475C20.9709 12.6676 21.0384 12.8303 21.0384 13.0001C21.0384 13.1698 20.9709 13.3326 20.8509 13.4526C20.7309 13.5727 20.5681 13.6401 20.3984 13.6401Z"
                                                        fill="#4CBC9A" />
                                                </svg>
                                            </span>
                                            <div class="ms-3">
                                                <span>Performance</span>
                                                <h4 class="fs-18 mb-0">14.988</h4>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center ms-3">
                                            <span class="work-ic">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.4 0.840088H6.59997C5.07305 0.842458 3.60934 1.45007 2.52965 2.52977C1.44995 3.60947 0.842336 5.07317 0.839966 6.60009V19.4001C0.842336 20.927 1.44995 22.3907 2.52965 23.4704C3.60934 24.5501 5.07305 25.1577 6.59997 25.1601H19.4C20.9269 25.1577 22.3906 24.5501 23.4703 23.4704C24.55 22.3907 25.1576 20.927 25.16 19.4001V6.60009C25.1576 5.07317 24.55 3.60947 23.4703 2.52977C22.3906 1.45007 20.9269 0.842458 19.4 0.840088ZM20.3984 13.6401H16.9936L14.8432 17.8769C14.7911 17.9815 14.7107 18.0693 14.6111 18.1305C14.5115 18.1916 14.3968 18.2234 14.28 18.2225H14.2416C14.1175 18.2182 13.9976 18.1769 13.8973 18.1039C13.7969 18.0309 13.7207 17.9296 13.6784 17.8129L11.0928 11.1441L9.95357 13.2945C9.90275 13.4001 9.82262 13.4888 9.72276 13.5501C9.62289 13.6113 9.50751 13.6426 9.39037 13.6401H5.60157C5.43183 13.6401 5.26904 13.5727 5.14902 13.4526C5.02899 13.3326 4.96157 13.1698 4.96157 13.0001C4.96157 12.8303 5.02899 12.6676 5.14902 12.5475C5.26904 12.4275 5.43183 12.3601 5.60157 12.3601H9.00637L10.6192 9.31369C10.6739 9.20296 10.7603 9.11099 10.8674 9.04946C10.9746 8.98792 11.0975 8.9596 11.2208 8.96809C11.3442 8.9747 11.463 9.0169 11.563 9.08958C11.6629 9.16226 11.7397 9.26233 11.784 9.37769L14.3568 16.0209L16.0336 12.7057C16.0905 12.6024 16.1738 12.5159 16.275 12.4552C16.3761 12.3945 16.4916 12.3617 16.6096 12.3601H20.3984C20.5681 12.3601 20.7309 12.4275 20.8509 12.5475C20.9709 12.6676 21.0384 12.8303 21.0384 13.0001C21.0384 13.1698 20.9709 13.3326 20.8509 13.4526C20.7309 13.5727 20.5681 13.6401 20.3984 13.6401Z"
                                                        fill="#FEC64F" />
                                                </svg>
                                            </span>
                                            <div class="ms-3">
                                                <span>Performance</span>
                                                <h4 class="fs-18 mb-0">14.988</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="columnChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-calendar style-1 active-cal border-bottom pb-4">
                                <input type='text' class="form-control d-none" id='datetimepicker' />
                            </div>
                            <div id="DZ_W_TimeLine11" class="widget-timeline">
                                <h4 class="mb-3 mt-4">Upcoming Events</h4>
                                <div class="d-flex justify-content-between side-border">
                                    <h4 class="mb-0 fs-18 font-w500">5 Jan</h4>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn-link btn sharp tp-btn-light btn-dark"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z"
                                                        fill="#A098AE" />
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="timeline-active style-4">
                                    <li class="d-flex align-items-center">
                                        <span class="time-1">08.00 AM</span>
                                        <div class="panel">
                                            <div class="line-color bg-primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span class="d-block">UI Design</span>
                                                <h4 class="mb-0">Introduction Wireframe</h4>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="time-1">08.00 AM</span>
                                        <div class="panel">
                                            <div class="line-color bg-secondary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span class="d-block">Graphic Design</span>
                                                <h4 class="mb-0">Basic HTML</h4>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="time-1">08.00 AM</span>
                                        <div class="panel">
                                            <div class="line-color bg-warning"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span class="d-block">Web Design</span>
                                                <h4 class="mb-0">Basic HTML</h4>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-between side-border my-3">
                                    <h4 class="mb-0 fs-18 font-w500">5 Jan</h4>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn-link btn sharp tp-btn-light btn-dark"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z"
                                                        fill="#A098AE" />
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="timeline-active style-4">
                                    <li class="d-flex align-items-center">
                                        <span class="time-1">08.00 AM</span>
                                        <div class="panel">
                                            <div class="line-color bg-primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span class="d-block">UI Design</span>
                                                <h4 class="mb-0">Introduction Wireframe</h4>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="time-1">08.00 AM</span>
                                        <div class="panel">
                                            <div class="line-color bg-secondary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span class="d-block">UI Design</span>
                                                <h4 class="mb-0">Prototyping</h4>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="time-1">08.00 AM</span>
                                        <div class="panel">
                                            <div class="line-color bg-warning"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span class="d-block">Graphic Design</span>
                                                <h4 class="mb-0">Photo Manipulation</h4>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>

    <script src="/Assets/vendor/global/global.min.js"></script>
    <script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="/Assets/vendor/apexchart/apexchart.js"></script>

    <script src="/Assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="/Assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <script src="/Assets/vendor/day-fullcalendar/main.min.js"></script>
    <script src="/Assets/vendor/peity/jquery.peity.min.js"></script>

    <script src="/Assets/js/dashboard/instructor-dashboard.js"></script>

    <script src="/Assets/js/custom.js"></script>
    <script src="/Assets/js/dlabnav-init.js"></script>
    <script src="/Assets/js/demo.js"></script>
    <script src="/Assets/js/styleSwitcher.js"></script>
    <script>
    $(function() {
        $('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    $(document).ready(function() {
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });
    </script>

</body>

<!-- Mirrored from getskills.dexignzone.com/xhtml/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2024 13:16:43 GMT -->

</html>