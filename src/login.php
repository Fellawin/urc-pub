<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../freshdesk.css">
    <link href="../dist/output.css" rel="stylesheet">
    <style type="text/css">
        /* theme */
        .portal--light {
            --fw-body-bg: #f5f7f9;
            --fw-header-bg: #f5f7f9;
            --fw-header-text-color: #12344d;
            --fw-helpcenter-bg: #e20512;
            --fw-helpcenter-text-color: #ffffff;
            --fw-footer-bg: #191919;
            --fw-footer-text-color: #ffffff;
            --fw-tab-active-color: #12344d;
            --fw-tab-active-text-color: #ffffff;
            --fw-tab-hover-color: #ffffff;
            --fw-tab-hover-text-color: #12344d;
            --fw-btn-background: #ffffff;
            --fw-btn-text-color: #12344d;
            --fw-btn-primary-background: #12344d;
            --fw-btn-primary-text-color: #ffffff;
            --fw-baseFont: Source Sans Pro;
            --fw-textColor: #333333;
            --fw-headingsFont: Source Sans Pro;
            --fw-linkColor: #2c5cc5;
            --fw-linkColorHover: #021519;
            --fw-inputFocusRingColor: #ebeff3;
            --fw-card-bg: #ffffff;
            --fw-card-fg: #264966;
            --fw-card-border-color: #ebeff3;
            --fw-nonResponsive: #f5f7f9;
            --bs-body-font-family: Source Sans Pro;
        }
    </style>
    
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap");
        /* @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"); */
        main#fw-main-content.page-login {
            /* background: url(https://www.urc.com.ph/images/homepage/video-top.svg), url(https://www.urc.com.ph/images/homepage/videobg.svg); */
            background-color: #f3f3f3;
            margin-top: unset;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .fw-helpcenter {
            position: relative;
            background-color: #e20512;
            background-image: url("https://www.urc.com.ph/images/homepage/about-btm.svg"), url("https://www.urc.com.ph/images/homepage/about-bg.svg");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 12rem 0;
        }
        .fw-loginform-wrapper p {
            color: #b91117;
        }
        .fw-social-media-login a {
            width: calc(33% - 15px);
            margin: 0 7.5px;
            display: none !important;
        }
        .fw-social-media-login a.is-active {
            display: block !important;
        }
        .fw-helpcenter::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            background-color: #b71117;
            opacity: 0.5;
        }
        .form-check-input:checked {
            background-color: #e20512;
            border-color: #e20512;
        }
        .fw-helpcenter .h1,
        .fw-helpcenter h1 {
            font-size: 36px;
            font-weight: 900;
        }
        .fw-helpcenter .container {
            position: relative;
        }
        .navbar .navbar-collapse .nav-item:not(.no-hover).active,
        .navbar .navbar-collapse .nav-item:not(.no-hover):focus {
            border-radius: 0;
            background-color: transparent !important;
            color: #fff;
        }
        .fw-helpcenter,
        .fw-helpcenter .h1,
        .fw-helpcenter h1 {
            color: var(--fw-helpcenter-text-color);
            font-family: "Nunito", sans-serif;
        }
        .fw-helpcenter .h1,
        .fw-helpcenter h1 {
            font-size: 32px;
            font-weight: 700;
        }
        .fw-helpcenter {
            font-weight: 400;
        }
        .nav-link {
            font-family: "Nunito", sans-serif;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 12px;
        }
        .fw-loginform-wrapper .fw-form-section .form {
            box-shadow: 0 0 4px 2px rgba(112, 112, 112, 0.1);
        }
        .fw-loginform-wrapper .fw-form-section .form *,
        footer * {
            font-family: "Nunito", sans-serif;
        }
        .fw-loginform-wrapper .fw-form-section .form a {
            color: #191919;
            font-weight: 600;
        }
        a.fw-twitter-btn {
            color: #333;
        }
        a.fw-twitter-btn:hover {
            color: #e20512;
        }
        .fw-loginform-wrapper .fw-form-section .form a#forgetPassLink:hover {
            color: #e20512;
        }
        .btn.fw-primary-button {
            background-color: #e20512;
            border-color: transparent;
            font-weight: 600;
            font-family: "Nunito", sans-serif;
        }
        .btn {
            font-family: "Nunito", sans-serif;
        }
        body .fw-primary-button,
        body .fw-primary-button:hover {
            background-color: #b0040e;
        }
        footer * {
            font-size: 14px;
        }
        footer a,
        footer .fw-credit a {
            text-decoration: none;
            font-weight: 600;
        }
        footer .fw-credit {
            padding: 5rem 0;
        }
        .alt-logo {
            width: 120px;
            object-fit: contain;
            max-height: 60px;
        }
        .video-feed {
            display: flex;
            column-gap: 1rem;
        }
        .video-feed.single {
            display: flex;
            column-gap: unset;
        }
        .video-feed .video-hero {
            display: flex;
            width: calc(70% - 0.5rem);
            flex-direction: column;
        }
        .video-feed.single .video-hero {
            display: flex;
            width: 100%;
        }
        .video-feed .video-list {
            display: flex;
            width: calc(30% - 0.5rem);
            row-gap: 1rem;
            flex-direction: column;
        }
        .video-feed.single .video-list {
            display: none;
        }
        .video-feed .video-hero .video-title {
            font-family: Nunito, sans-serif;
            font-weight: 900;
            letter-spacing: 0.5px;
            margin-top: 12px;
            font-size: 18px;
            color: #e20814;
        }
        .navbar .navbar-collapse .nav-item .nav-link {
            color: #b91117;
        }
        .disabled-dropdown {
            pointer-events: none;
            background-color: #e9ecef;
            opacity: 1;
        }
        .card .card-title,
        .card p {
            color: #b91117;
            font-family: Nunito, sans-serif;
        }
        footer,
        footer * {
            font-family: Nunito, sans-serif;
        }
        @media screen and (max-width: 576px) {
            .fw-social-media-login a {
                width: 100%;
                margin: 0;
            }
            main#fw-main-content.page-login {
                display: block;
            }
        }
        @media screen and (min-width: 1200px) {
            .navbar .navbar-collapse .nav-item:not(.no-hover).active .nav-link,
            .navbar .navbar-collapse .nav-item:not(.no-hover):focus .nav-link {
                color: #e20814;
            }
            .navbar .navbar-collapse .nav-item:not(.no-hover):not(.active):hover {
                background-color: transparent !important;
            }
            .navbar .navbar-collapse .nav-item:not(.no-hover):not(.active):hover .nav-link {
                color: #e20814;
            }
        }
    </style>   
</head>
<body class="portal portal--light overflow-hidden">
    <div class="login-wrapper flex flex-col min-h-[100vh] min-[1600px]:!min-h-[56.25vw] break-words overflow-auto max-sm:!overflow-auto">
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <main class="fw-main-wrapper 
    page-login 
    bg-login-background 
    max-sm:!flex 
    max-sm:!flex-col 
    min-[1600px]:!min-h-[56.25vw] 
    max-[1599px]:!min-h-[48.112vw] 
    max-[1100px]:!min-h-[133vw] 
    max-[900px]:!min-h-[144vw] 
    max-sm:!min-h-[216vw]
    relative 
    max-sm:!h-auto" id="fw-main-content">
        <!-- Background overlay -->
        <img src="https://i.imgur.com/qbFK115.png" class="absolute top-0 left-0 pointer-events-none w-full" alt="">
        <!-- Left top overlay -->
        <img src="https://i.imgur.com/eEB26la.png" class="absolute top-0 left-0 min-[1600px]:w-[75.208vw] max-[1599px]:w-[94.01042vw] pointer-events-none" alt="">
        <!-- Bottom Overlay -->
        <img src="https://i.imgur.com/ikJKDug.png" class="absolute min-[1600px]:top-[39.167vw] min-[1600px]:left-[22.65625vw] max-[1599px]:right-0 max-[1599px]:bottom-0 min-[1600px]:w-[77.34375vw] max-[1599px]:w-[79.427vw] w-[1220px] pointer-events-none" alt="">
        <!-- Laptop -->
        <img src="https://i.imgur.com/t2mevHP.png" class="absolute top-0 right-0 min-[1600px]:w-[50.7291vw] max-[1599px]:w-[27.66vw] w-[425px] pointer-events-none transition ease-in-out duration-300 max-md:w-[250px] max-sm:w-[180px] max-[400px]:w-[120px]" alt="">
        <!-- Logo -->
        <img src="https://i.imgur.com/5l3226A.png" class="absolute top-0 left-0 min-[1600px]:w-[34.21875vw] max-[1599px]:w-[21.159vw] w-[325px] pointer-events-none transition ease-in-out duration-300 max-md:w-[285px] max-sm:w-[215px] max-[400px]:w-[110px]" alt="">
        <section class="
            min-[1600px]:w-[57.29167vw] 
            max-[1599px]:w-[71.61vw] 
            max-[1100px]:w-full
            max-[1100px]:px-[100px]
            flex 
            max-[1100px]:flex-col 
            max-md:px-[20px] 
            mt-[120px] 
            min-[400px]:mt-0 
            z-10
            ">
            <div class="
                robina 
                w-1/2 
                max-[1100px]:w-full 
                max-[1100px]:mb-[74px] 
                max-[1100px]:items-center 
                max-[1100px]:flex 
                max-[1100px]:flex-col 
                max-sm:mb-[24px] 
                mx-0">
                <div class="
                    uppercase 
                    min-[1600px]:text-[1.1458vw] 
                    max-[1599px]:text-[1.4323vw] 
                    max-[1100px]:text-[22px] 
                    max-sm:text-[16px] 
                    max-sm:leading-[38px] 
                    font-bold 
                    !text-black 
                    font-nunito 
                    min-[1600px]:leading-47pxtovw 
                    max-[1599px]:leading-47tolgvw 
                    max-[1100px]:leading-47px 
                    max-[1100px]:text-center
                ">
                    Welcome to
                </div>
                <div class="
                    capitalize 
                    min-[1600px]:text-[2.083vw] 
                    max-[1599px]:text-[2.6042vw] 
                    max-[1100px]:text-[40px] 
                    max-sm:text-[32px] 
                    max-sm:leading-[38px] 
                    font-medium 
                    !text-black 
                    font-nunito 
                    min-[1600px]:leading-47pxtovw 
                    max-[1599px]:leading-47tolgvw 
                    max-[1100px]:leading-47px 
                    min-[1600px]:mb-[1.9271vw] 
                    max-[1599px]:mb-[2.4088vw] 
                    max-[1100px]:mb-[37px] 
                    max-sm:mb-[24px] 
                    max-[1100px]:text-center
                ">
                    Universal Robina <br/> Customer Support Portal
                </div>
                <div class="
                    controllers 
                    flex 
                    rounded-full 
                    border-2 
                    border-line-gray 
                    border-solid 
                    min-[1600px]:w-[20.3125vw] 
                    max-[1599px]:w-[25.391vw] 
                    max-[1100px]:w-[390px] 
                    max-sm:w-[95%] 
                    max-sm:mx-auto 
                    hover:border-brand-red 
                    transition 
                    ease-in 
                    duration-300 
                    group
                ">
                    <label for="" class="
                        text-blueshade
                        font-nunito
                        font-semibold
                        min-[1600px]:w-[11.9792vw]
                        max-[1599px]:w-[14.974vw]
                        max-[1100px]:w-[230px] 
                        max-sm:w-auto 
                        max-sm:mr-auto 
                        min-[1600px]:py-[0.7292vw] 
                        max-[1599px]:py-[0.91146vw] 
                        max-[1100px]:py-[14px] 
                        min-[1600px]:px-[0.8334vw] 
                        max-[1599px]:px-[1.042vw] 
                        max-[1100px]:px-[16px] 
                        min-[1600px]:h-[2.6042vw] 
                        max-[1599px]:h-[3.255vw] 
                        max-[1100px]:h-[50px] 
                        min-[1600px]:text-[0.9375vw] 
                        max-[1599px]:text-[1.1719vw] 
                        max-[1100px]:text-sm
                        max-lg:text-sm 
                        max-[400px]:text-[12px] 
                        flex 
                        items-center
                    ">
                        <img src="https://i.imgur.com/RGl2xrI.png" class="
                            min-[1600px]:w-[0.9375vw]
                            max-[1599px]:w-[1.172vw]
                            max-[1100px]:w-[18px]
                            object-contain 
                            min-[1600px]:mr-[0.9375vw] 
                            max-[1599px]:mr-[1.172vw] 
                            max-[1100px]:mr-[18px]
                        " alt="">
                        Are you an agent?
                    </label>
                    <button class="
                        agentloginbtn
                        text-blueshade
                        font-nunito
                        font-bold
                        min-[1600px]:w-[8.1771vw] 
                        max-[1599px]:w-[10.22vw] 
                        max-[1100px]:w-[157px] 
                        max-[400px]:w-[130px]
                        min-[1600px]:py-[0.7292vw]
                        max-[1599px]:py-[0.9114vw]
                        max-[1100px]:py-[14px]
                        min-[1600px]:px-[0.83334vw]
                        max-[1599px]:px-[1.042vw]
                        max-[1100px]:px-[16px]
                        border-s-2 
                        border-line-gray 
                        border-solid 
                        uppercase 
                        whitespace-nowrap 
                        min-[1600px]:h-[2.6042vw] 
                        max-[1599px]:h-[3.255vw] 
                        max-[1100px]:h-[50px] 
                        min-[1600px]:text-[0.7292vw] 
                        max-[1599px]:text-[0.91146vw] 
                        max-[1100px]:text-sm 
                        max-[400px]:text-[12px] 
                        flex 
                        items-center  
                        max-sm:!pr-[16px]
                    ">
                        Login here
                        <img src="https://i.imgur.com/zqkOvhb.png" class="
                            min-[1600px]:w-[0.83334vw] 
                            max-[1599px]:w-[1.042vw] 
                            max-[1100px]:w-[16px] 
                            object-contain 
                            min-[1600px]:ml-[1.0417vw] 
                            max-[1599px]:ml-[1.3021vw] 
                            max-[1100px]:ml-[20px] 
                            max-sm:ml-[10px] 
                            group-hover:translate-x-[5px] 
                            transition 
                            ease-in-out 
                            duration-300
                        " alt="">    
                    </button>
                    <script>
                        var agentloginhtml = `{% snippet agent_login %}`;
                        var agentloginlink = jQuery(agentloginhtml).find('a').attr('href');
                        jQuery('body').on('click','.agentloginbtn', function(){
                            window.open(agentloginlink,"_self")
                        });
                    </script>
                </div>
            </div>
            <div class="
                row 
                fw-loginform-wrapper 
                justify-content-center 
                align-items-center 
                w-1/2 
                max-[1100px]:w-full 
                mx-0 
                py-0
                " id="loginForm">
                <div class="w-full fw-form-section px-0">
                    <div class="alert alert-with-close notice" id="noticeajax" style="display: none;"></div>
                    
                    <div class="
                        form 
                        shadow-none 
                        bg-none 
                        bg-transparent 
                        py-0 
                        px-0 
                        min-[1600px]:pl-[0.5208vw]
                        max-[1599px]:pl-[0.6510vw]
                        max-[1100px]:pl-[10px] 
                        ">
                        <form novalidate="novalidate" class="
                        new_user_session 
                        min-[1600px]:!mb-[0.625vw] 
                        max-[1599px]:!mb-[0.78125vw]
                        max-[1100px]:!mb-[12px]
                        " id="new_user_session" action="/support/login" accept-charset="UTF-8" method="post">
                            <input name="utf8" type="hidden" value="✓" /><input type="hidden" name="authenticity_token" value="qSM0Qc4fOJjff4Il1SbxZ/6D7e+nlKhAsH+2BRT/qqSO/oBHEO3LP/Q+8ob1T7BnWOObnrDQsxlx3T502Cpr4w==" />
                            <h1 class="
                            uppercase 
                            font-nunito 
                            min-[1600px]:!text-[0.9375vw] 
                            max-[1599px]:!text-[1.172vw]
                            max-[1100px]:!text-[18px] 
                            font-bold 
                            text-black 
                            min-[1600px]:!mb-[1.5625vw] 
                            max-[1599px]:!mb-[1.953vw]
                            max-[1100px]:!mb-[30px] 
                            max-sm:text-center
                            ">Log in your account</h1>

                            <div class="
                            form-group 
                            flex 
                            min-[1600px]:px-[0.625vw] 
                            max-[1599px]:px-[0.78125vw]
                            max-[1100px]:px-[12px] 
                            min-[1600px]:py-[0.5208vw] 
                            max-[1536px]:py-[0.6510vw]
                            max-[1100px]:py-[10px] 
                            rounded-full 
                            border-line-gray 
                            border-1 
                            border-solid 
                            focus-within:border-brand-red 
                            transition 
                            ease-in-out 
                            duration-300 
                            group 
                            min-[1600px]:mb-[1.0417vw] 
                            max-[1599px]:mb-[1.3021vw] 
                            max-[1100px]:mb-[20px] 
                            bg-white 
                            max-sm:w-[95%] 
                            max-sm:mx-auto">
                                <label for="emailInput" class="form-label m-0">
                                    <!-- Your e-mail address -->
                                    <div class="
                                    min-[1600px]:w-[1.5625vw] 
                                    max-[1599px]:w-[1.9531vw] 
                                    max-[1100px]:w-[30px] 
                                    min-[1600px]:h-[1.5625vw]
                                    max-[1599px]:h-[1.9531vw]
                                    max-[1100px]:h-[30px] 
                                    rounded-full 
                                    flex 
                                    bg-brand-gray 
                                    items-center 
                                    justify-center 
                                    group-focus-within:bg-brand-red 
                                    transition 
                                    ease-in-out 
                                    duration-300">
                                        <img src="https://i.imgur.com/4gHzTjy.png" class="
                                        min-[1600px]:w-[0.83334vw] 
                                        max-[1599px]:w-[1.042vw] 
                                        max-[1100px]:w-[16px] 
                                        object-contain" alt="">
                                    </div>
                                    <!-- <span class="fw-asterisk">*</span> -->
                                </label>

                                <input type="email" class="
                                form-control 
                                min-[1600px]:pl-[0.8334vw] 
                                max-[1536px]:pl-[1.042vw]
                                max-[1100px]:pl-[16px]
                                min-[1600px]:!text-[0.8334vw] 
                                max-[1536px]:!text-[1.042vw]
                                max-[1100px]:!text-[16px]
                                border-none 
                                bg-none 
                                bg-transparent 
                                py-0 
                                pr-0 
                                focus:border-none 
                                focus:shadow-none 
                                rounded-full 
                                autofill:shadow-[0_0_0_30px_white] 
                                autofill:shadow-inner
                                " id="emailInput" placeholder="Your e-mail address" name="user_session[email]" required="" aria_describedby="emailInput" />

                                <div class="invalid-feedback emailInput"></div>
                            </div>

                            <div class="
                            form-group 
                            flex 
                            min-[1600px]:px-[0.625vw] 
                            max-[1599px]:px-[0.7812vw]
                            max-[1100px]:px-[12px]
                            min-[1600px]:py-[0.5208vw] 
                            max-[1599px]:py-[0.6510vw]
                            max-[1100px]:py-[10px] 
                            rounded-full 
                            border-line-gray 
                            border-1 
                            border-solid 
                            focus-within:border-brand-red 
                            transition 
                            ease-in-out 
                            duration-300 
                            group 
                            min-[1600px]:!mb-[1.0417vw] 
                            max-[1599px]:mb-[1.302vw] 
                            max-[1100px]:mb-[20px] 
                            bg-white 
                            max-sm:w-[95%] 
                            max-sm:mx-auto">
                                <label for="passwordInput" class="form-label m-0">
                                    <!-- Password -->
                                    <div class="
                                    min-[1600px]:w-[1.5625vw] 
                                    max-[1599px]:w-[1.953vw]
                                    max-[1100px]:w-[30px] 
                                    min-[1600px]:h-[1.5625vw] 
                                    max-[1599px]:h-[1.953vw]
                                    max-[1100px]:h-[30px] 
                                    rounded-full 
                                    flex 
                                    bg-brand-gray 
                                    items-center 
                                    justify-center 
                                    group-focus-within:bg-brand-red 
                                    transition 
                                    ease-in-out 
                                    duration-300">
                                        <img src="https://i.imgur.com/Z1XworT.png" class="
                                        min-[1600px]:w-[0.7292vw] 
                                        max-[1599px]:w-[0.9114vw] 
                                        max-[1100px]:w-[14px] 
                                        object-contain" alt="">
                                    </div>
                                    <!-- <span class="fw-asterisk">*</span> -->
                                </label>

                                <input type="password" class="
                                form-control 
                                min-[1600px]:pl-[0.8334vw] 
                                max-[1599px]:pl-[1.042vw] 
                                max-[1100px]:pl-[16px] 
                                min-[1600px]:!text-[0.8334vw] 
                                max-[1599px]:!text-[1.042vw] 
                                max-[1100px]:!text-[16px] 
                                border-none 
                                bg-none 
                                bg-transparent 
                                py-0 
                                pr-0 
                                focus:border-none 
                                focus:shadow-none 
                                rounded-full 
                                autofill:shadow-[0_0_0_30px_white] 
                                autofill:shadow-inner
                                " id="passwordInput" placeholder="Password" name="user_session[password]" required="" aria_describedby="passwordInput" />

                                <div class="invalid-feedback passwordInput"></div>
                            </div>
                            <div class="
                            flex 
                            justify-between 
                            max-sm:flex-col 
                            max-sm:items-center
                            ">
                                <div class="
                                group 
                                min-[1600px]:ml-[1.041vw] 
                                max-[1599px]:ml-[1.302vw]
                                max-[1100px]:ml-[20px] 
                                max-sm:ml-0 
                                max-sm:mb-[24px]
                                ">
                                    <div class="
                                    form-check 
                                    min-[1600px]:!mb-[1.042vw] 
                                    max-[1599px]:!mb-[1.302vw] 
                                    max-[1100px]:!mb-[20px] 
                                    flex 
                                    items-end 
                                    max-sm:text-center 
                                    max-sm:!mb-[12px]
                                    ">
                                        <input name="user_session[remember_me]" type="hidden" value="false" />

                                        <input type="checkbox" class="
                                        form-check-input 
                                        pt-0 
                                        min-[1600px]:w-[1.09375vw] 
                                        max-[1599px]:w-[1.367vw] 
                                        max-[1100px]:w-[21px] 
                                        min-[1600px]:h-[1.09375vw] 
                                        max-[1599px]:h-[1.367vw] 
                                        max-[1100px]:h-[21px]
                                        " id="rememberInput" name="user_session[remember_me]" value="1" checked="true" aria_describedby="rememberInput" />

                                        <label for="rememberInput" class="
                                        form-check-label 
                                        min-[1600px]:pl-[0.7291vw] 
                                        max-[1599px]:pl-[0.9114vw]
                                        max-[1100px]:pl-[14px] 
                                        min-[1600px]:text-[0.8334vw]
                                        max-[1599px]:text-[1.042vw]
                                        max-[1100px]:text-[16px]
                                        ">
                                            Remember me on this computer
                                        </label>

                                        <div class="invalid-feedback rememberInput"></div>
                                    </div>

                                    <div class="
                                    fw-forget-section 
                                    min-[1600px]:!mt-[1.042vw] 
                                    max-[1599px]:!mt-[1.302vw]
                                    max-[1100px]:!mt-[20px]
                                    max-sm:text-center 
                                    max-sm:!mt-[12px]">
                                        <a href="#" id="forgetPassLink" class="
                                        min-[1600px]:text-[0.8334vw]
                                        max-[1599px]:text-[1.042vw]
                                        max-[1100px]:text-[16px]
                                        ">Forgot your password?</a>
                                    </div>
                                </div>
                                <div class="group">
                                    <button type="submit" class="
                                    min-[1600px]:ml-[1.042vw] 
                                    max-[1599px]:ml-[1.302vw] 
                                    max-[1100px]:ml-[20px] 
                                    min-[1600px]:text-[1.041vw] 
                                    max-[1599px]:text-[1.302vw] 
                                    max-[1100px]:text-[20px] 
                                    max-sm:ml-0 
                                    btn 
                                    fw-primary-button 
                                    btn-block 
                                    w-fit 
                                    login-button 
                                    rounded-full 
                                    uppercase 
                                    min-[1600px]:px-[2.083vw] 
                                    max-[1599px]:px-[2.6042vw] 
                                    max-[1100px]:px-[40px] 
                                    min-[1600px]:py-[0.9375vw] 
                                    max-[1599px]:py-[1.172vw]
                                    max-[1100px]:py-[18px] 
                                    !bg-fade-red 
                                    hover:!bg-brand-red" data-recaptcha-enterprise="">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                        <script>
                            var login_form_html = `{% snippet login_form %}`;
                            var forminputid = jQuery(login_form_html).find('[name="authenticity_token"]').attr('value');
                            console.log(forminputid);
                            var targetinputid = jQuery('#new_user_session').find('[name="authenticity_token"]').attr('value',forminputid);
                            console.log(targetinputid);
                        </script>
                        <!-- Original Placement -->
                        <div class="text-center fw-forget-section d-none"><a href="#" id="forgetPassLink">Forgot your password?</a></div>
                    </div>
                    <p class="fs-20 semi-bold mt-16 text-center d-none">
                        Are you an agent?
                        <a
                            id=""
                            href="https://urc1-587213120979803943.myfreshworks.com/login?client_id=451979510707337272&amp;redirect_uri=https%3A%2F%2Furcrd.freshdesk.com%2Ffreshid%2Fauthorize_callback%3Fhd%3Durcrd.freshdesk.com"
                            class="fw-twitter-btn py-12 rounded"
                        >
                            Login here
                        </a>
                    </p>
                </div>
            </div>
            <div class="row 
            fw-loginform-wrapper 
            justify-content-center 
            align-items-center 
            w-1/2 
            max-[1100px]:w-full 
            mx-0 
            py-0 
            d-none" id="forgetPassForm">
                <div class="
                w-full 
                fw-form-section 
                px-0">
                    <div class="
                    form 
                    shadow-none 
                    bg-none 
                    bg-transparent 
                    py-0 
                    px-0 
                    min-[1600px]:pl-[0.5208vw] 
                    max-[1599px]:pl-[0.6510vw]
                    max-[1100px]:pl-[10px]
                    ">
                        <form novalidate="novalidate" id="password_reset" class="
                        max-sm:flex 
                        max-sm:flex-col 
                        min-[1600px]:!mb-[0.625vw] 
                        max-[1599px]:!mb-[0.78125vw]
                        max-[1100px]:!mb-[12px]
                        " action="/password_resets" accept-charset="UTF-8" method="post">
                            <input name="utf8" type="hidden" value="✓" /><input type="hidden" name="authenticity_token" value="NkAhBj9n2hWJMHC5/PzlTnvgfXlrSiBdLeV2Q5GTBJMRnZUA4ZUpsqJxABrclaRO3YALCHwOOwTsR/4yXUbF1A==" />
                            <h1 class="
                            uppercase 
                            font-nunito 
                            min-[1600px]:!text-[0.9375vw] 
                            max-[1599px]:!text-[1.172vw] 
                            max-[1100px]:!text-[18px] 
                            font-bold 
                            text-black 
                            min-[1600px]:!mb-[1.5625vw] 
                            max-[1599px]:!mb-[1.953vw] 
                            max-[1100px]:!mb-[30px] 
                            max-sm:text-center">Forgot password</h1>
                            <p class="
                            max-sm:text-center 
                            min-[1600px]:!mb-[1.667vw] 
                            max-[1599px]:!mb-[2.083vw] 
                            max-[1100px]:!mb-[32px]
                            ">Give us your email address and instructions to reset your password will be emailed to you.</p>
                            <div class="
                            form-group 
                            flex 
                            min-[1600px]:px-[0.625vw] 
                            max-[1599px]:px-[0.7812vw] 
                            max-[1100px]:px-[12px] 
                            min-[1600px]:py-[0.5208vw] 
                            max-[1599px]:py-[0.651vw] 
                            max-[1100px]:py-[10px] 
                            rounded-full 
                            border-line-gray 
                            border-2 
                            border-solid 
                            focus-within:border-brand-red 
                            transition 
                            ease-in-out 
                            duration-300 
                            group 
                            min-[1600px]:mb-[1.042vw] 
                            max-[1599px]:mb-[1.302vw] 
                            max-[1100px]:mb-[20px] 
                            bg-white 
                            max-sm:w-[95%] 
                            max-sm:mx-auto
                            ">
                                <label for="email" class="form-label m-0">
                                    <!-- Your e-mail address -->
                                    <div class="
                                    min-[1600px]:w-[1.5625vw] 
                                    min-[1600px]:h-[1.5625vw] 
                                    max-[1599px]:w-[1.953vw]
                                    max-[1599px]:h-[1.953vw]
                                    max-[1100px]:w-[30px] 
                                    max-[1100px]:h-[30px] 
                                    rounded-full 
                                    flex 
                                    bg-brand-gray 
                                    items-center 
                                    justify-center 
                                    group-focus-within:bg-brand-red 
                                    transition 
                                    ease-in-out 
                                    duration-300
                                    ">
                                        <img src="https://i.imgur.com/4gHzTjy.png" class="
                                        min-[1600px]:w-[0.8333vw] 
                                        max-[1599px]:w-[1.042vw] 
                                        max-[1100px]:w-[16px] 
                                        object-contain " alt="">
                                    </div>
                                    <!-- <span class="fw-asterisk">*</span> -->
                                </label>

                                <input type="email" class="
                                form-control 
                                min-[1600px]:pl-[0.8334vw] 
                                max-[1599px]:pl-[1.042vw] 
                                max-[1100px]:pl-[16px] 
                                min-[1600px]:!text-[0.8334vw] 
                                max-[1599px]:!text-[1.041vw] 
                                max-[1100px]:!text-[16px] 
                                border-none 
                                bg-none 
                                bg-transparent 
                                py-0 
                                pr-0 
                                focus:border-none 
                                focus:shadow-none 
                                rounded-full 
                                autofill:shadow-[0_0_0_30px_white] 
                                autofill:shadow-inner
                                " id="email" placeholder="Your e-mail address" name="email" required="" />

                                <div class="invalid-feedback email"></div>
                            </div>

                            <button type="submit" class="
                            min-[1600px]:text-[0.8333vw]
                            max-[1599px]:text-[1.042vw] 
                            max-[1100px]:text-[16px] 
                            min-[1600px]:mr-[0.4166vw] 
                            max-[1599px]:mr-[0.5208vw]
                            max-[1100px]:mr-[8px] 
                            btn 
                            fw-primary-button 
                            btn-block 
                            password-forgot-button 
                            w-fit 
                            login-button 
                            rounded-full 
                            uppercase 
                            min-[1600px]:px-[2.083vw] 
                            max-[1599px]:px-[2.604vw] 
                            max-[1100px]:px-[40px] 
                            min-[1600px]:py-[0.9375vw] 
                            max-[1100px]:py-[1.172vw] 
                            max-[1100px]:py-[18px] 
                            !bg-fade-red 
                            hover:!bg-brand-red 
                            max-sm:w-[95%] 
                            max-sm:mx-auto 
                            max-sm:mb-[20px]">
                                Reset my password
                            </button>
                            <button type="button" class="
                            min-[1600px]:text-[0.8333vw] 
                            max-[1599px]:text-[1.042vw] 
                            max-[1100px]:text-[16px] 
                            btn 
                            fw-secondary-button 
                            btn-block 
                            w-fit 
                            login-button 
                            rounded-full 
                            uppercase 
                            min-[1600px]:px-[2.083vw] 
                            max-[1599px]:px-[2.604vw] 
                            max-[1100px]:px-[40px] 
                            min-[1600px]:py-[0.9375vw] 
                            max-[1599px]:py-[1.172vw]
                            max-[1100px]:py-[18px] 
                            max-sm:w-[95%] 
                            max-sm:mx-auto" id="loginFormLink">
                                Cancel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="
        max-sm:flex 
        max-sm:my-[24px] 
        max-sm:relative 
        max-sm:mx-auto 
        max-sm:items-center">
            <!-- Logo bottom 1 -->
            <a href="#">
                <img src="https://imgur.com/5rjxWwb.png" class="
                absolute 
                min-[1600px]:w-[9.94791vw] 
                min-[1600px]:top-[50.989vw] 
                max-[1599px]:w-[12.435vw] 
                min-[1600px]:left-[80.052vw] 
                max-sm:relative 
                max-sm:w-[150px] 
                max-[1599px]:bottom-[3.5156vw] 
                bottom-[54px] 
                max-sm:bottom-0 
                max-sm:pr-[24px] 
                max-[1599px]:right-[12.5vw] 
                right-[192px] 
                max-sm:right-0 
                max-sm:relative 
                hover:scale-[115%] 
                transition 
                ease-in 
                duration-300" alt="">
            </a>
            <!-- Logo bottom 2 -->
            <a href="#">
                <img src="https://imgur.com/flHUR6p.png" class="
                absolute 
                min-[1600px]:w-[4.6875vw] 
                min-[1600px]:top-[50.625vw] 
                max-[1599px]:w-[5.859vw] 
                min-[1600px]:left-[92.1875vw] 
                max-sm:relative 
                max-sm:w-[70px] 
                max-sm:relative 
                max-[1599px]:bottom-[2.9948vw] 
                bottom-[46px] 
                max-sm:bottom-0 
                max-[1599px]:right-[3.90625vw] 
                right-[60px] 
                max-sm:right-0 
                max-sm:relative 
                hover:scale-[115%] 
                transition 
                ease-in 
                duration-300" alt="">
            </a>
        </div>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script>
            jQuery(function () {
                setTimeout(function () {
                    jQuery(".fw-social-media-login a").each(function () {
                        var originalString = jQuery(this).text();
                        originalString = originalString.replace("Continue with", "");
                        jQuery(this).text(originalString);
                        jQuery(this).addClass("is-active");
                    });
                }, 200);
            });
        </script>
    </main>

    <div class="modal-backdrop fade d-none" id="overlay"></div>

    <script src="/assets/cdn/portal/scripts/bottom.js"></script>

    <script src="/assets/cdn/portal/scripts/locales/en.js"></script>

    <script src="/assets/cdn/portal/scripts/login.js"></script>

    <script src="/assets/cdn/portal/scripts/marketplace.js" async=""></script>

    <script src="/assets/cdn/portal/scripts/integrations.js" async=""></script>
    </div>
</body>
</html>

