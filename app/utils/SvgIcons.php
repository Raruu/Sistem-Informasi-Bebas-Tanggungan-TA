<?php

enum Icons
{
    case Logout;
    case Close;
    case Dashboard;
    case DocumentStack;
    case Admin;
    case Mahasiswa;
    case Notification;
    case About;
    case Bulb;
    case PresentationLayer;
    case Search;
    case Check;
    case Eye;
    case Question;
    case Print;
    case OpenInNewTab;
};

class SvgIcons
{
    public static function getIconWithColor($icon, $color = 'black')
    {
        switch ($icon) {
            case Icons::OpenInNewTab:
                return substr_replace(self::getIcon($icon), ' style="stroke:' . $color . '" ', 4, 0);

            default:
                return substr_replace(self::getIcon($icon), ' style="fill:' . $color . ';stroke:' . $color . '" ', 4, 0);
        }
    }

    public static function getIcon($icon)
    {
        switch ($icon) {
            case Icons::Logout:
                return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_702_6258)"> <path d="M11.476 15C11.2108 15 10.9564 15.1054 10.7689 15.2929C10.5814 15.4804 10.476 15.7348 10.476 16V19C10.476 19.7956 10.1599 20.5587 9.59732 21.1213C9.03471 21.6839 8.27165 22 7.476 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7956 2 19V5C2 4.20435 2.31607 3.44129 2.87868 2.87868C3.44129 2.31607 4.20435 2 5 2H7.476C8.27165 2 9.03471 2.31607 9.59732 2.87868C10.1599 3.44129 10.476 4.20435 10.476 5V8C10.476 8.26522 10.5814 8.51957 10.7689 8.70711C10.9564 8.89464 11.2108 9 11.476 9C11.7412 9 11.9956 8.89464 12.1831 8.70711C12.3706 8.51957 12.476 8.26522 12.476 8V5C12.4744 3.67441 11.9471 2.40356 11.0098 1.46622C10.0724 0.528882 8.80159 0.00158786 7.476 0H5C3.67441 0.00158786 2.40356 0.528882 1.46622 1.46622C0.528882 2.40356 0.00158786 3.67441 0 5L0 19C0.00158786 20.3256 0.528882 21.5964 1.46622 22.5338C2.40356 23.4711 3.67441 23.9984 5 24H7.476C8.80159 23.9984 10.0724 23.4711 11.0098 22.5338C11.9471 21.5964 12.4744 20.3256 12.476 19V16C12.476 15.7348 12.3706 15.4804 12.1831 15.2929C11.9956 15.1054 11.7412 15 11.476 15Z"  /> <path d="M22.867 9.87957L18.281 5.29357C18.1888 5.19806 18.0784 5.12188 17.9564 5.06947C17.8344 5.01706 17.7032 4.98947 17.5704 4.98832C17.4376 4.98717 17.3059 5.01247 17.183 5.06275C17.0602 5.11303 16.9485 5.18728 16.8546 5.28117C16.7607 5.37507 16.6865 5.48672 16.6362 5.60962C16.5859 5.73251 16.5606 5.86419 16.5618 5.99697C16.5629 6.12975 16.5905 6.26097 16.6429 6.38297C16.6953 6.50498 16.7715 6.61532 16.867 6.70757L21.129 10.9706L6 11.0006C5.73478 11.0006 5.48043 11.1059 5.29289 11.2935C5.10536 11.481 5 11.7354 5 12.0006C5 12.2658 5.10536 12.5201 5.29289 12.7077C5.48043 12.8952 5.73478 13.0006 6 13.0006L21.188 12.9696L16.865 17.2936C16.7695 17.3858 16.6933 17.4962 16.6409 17.6182C16.5885 17.7402 16.5609 17.8714 16.5598 18.0042C16.5586 18.1369 16.5839 18.2686 16.6342 18.3915C16.6845 18.5144 16.7587 18.6261 16.8526 18.72C16.9465 18.8139 17.0582 18.8881 17.181 18.9384C17.3039 18.9887 17.4356 19.014 17.5684 19.0128C17.7012 19.0117 17.8324 18.9841 17.9544 18.9317C18.0764 18.8793 18.1868 18.8031 18.279 18.7076L22.865 14.1216C23.4277 13.5593 23.744 12.7965 23.7444 12.001C23.7447 11.2055 23.4292 10.4424 22.867 9.87957Z"  /> </g> <defs> <clipPath id="clip0_702_6258"> <rect width="24" height="24" fill="white" /> </clipPath> </defs> </svg>';
            case Icons::Close:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_145_4316)"> <path d="M20 1.17833L18.8217 0L10 8.82167L1.17833 0L0 1.17833L8.82167 10L0 18.8217L1.17833 20L10 11.1783L18.8217 20L20 18.8217L11.1783 10L20 1.17833Z"/> </g> <defs> <clipPath id="clip0_145_4316"> <rect width="20" height="20" fill="white"/> </clipPath> </defs> </svg>';
            case Icons::Dashboard:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.1666 11.6666V16.6666M11.6666 14.1666H16.6666M4.99992 8.33331H6.66659C7.58706 8.33331 8.33325 7.58712 8.33325 6.66665V4.99998C8.33325 4.07951 7.58706 3.33331 6.66659 3.33331H4.99992C4.07944 3.33331 3.33325 4.07951 3.33325 4.99998V6.66665C3.33325 7.58712 4.07944 8.33331 4.99992 8.33331ZM13.3333 8.33331H14.9999C15.9204 8.33331 16.6666 7.58712 16.6666 6.66665V4.99998C16.6666 4.07951 15.9204 3.33331 14.9999 3.33331H13.3333C12.4128 3.33331 11.6666 4.07951 11.6666 4.99998V6.66665C11.6666 7.58712 12.4128 8.33331 13.3333 8.33331ZM4.99992 16.6666H6.66659C7.58706 16.6666 8.33325 15.9205 8.33325 15V13.3333C8.33325 12.4128 7.58706 11.6666 6.66659 11.6666H4.99992C4.07944 11.6666 3.33325 12.4128 3.33325 13.3333V15C3.33325 15.9205 4.07944 16.6666 4.99992 16.6666Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> </svg>';
            case Icons::DocumentStack:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.66659 5.83333V12.5C6.66659 13.4205 7.41278 14.1667 8.33325 14.1667H13.3333M6.66659 5.83333V4.16667C6.66659 3.24619 7.41278 2.5 8.33325 2.5H12.1547C12.3758 2.5 12.5877 2.5878 12.744 2.74408L16.4225 6.42259C16.5788 6.57887 16.6666 6.79083 16.6666 7.01184V12.5C16.6666 13.4205 15.9204 14.1667 14.9999 14.1667H13.3333M6.66659 5.83333H5.33325C4.22868 5.83333 3.33325 6.72876 3.33325 7.83333V15.8333C3.33325 16.7538 4.07944 17.5 4.99992 17.5H11.3333C12.4378 17.5 13.3333 16.6046 13.3333 15.5V14.1667" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> </svg>';
            case Icons::Admin:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M13.3332 5.83333C13.3332 7.67428 11.8408 9.16667 9.99984 9.16667C8.15889 9.16667 6.6665 7.67428 6.6665 5.83333C6.6665 3.99238 8.15889 2.5 9.99984 2.5C11.8408 2.5 13.3332 3.99238 13.3332 5.83333Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9.99984 11.6667C6.77818 11.6667 4.1665 14.2783 4.1665 17.5H15.8332C15.8332 14.2783 13.2215 11.6667 9.99984 11.6667Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
            case Icons::Mahasiswa:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.26753 14.8364C5.96056 13.8795 7.9165 13.3333 10 13.3333C12.0835 13.3333 14.0394 13.8795 15.7325 14.8364M12.5 8.33333C12.5 9.71405 11.3807 10.8333 10 10.8333C8.61929 10.8333 7.5 9.71405 7.5 8.33333C7.5 6.95262 8.61929 5.83333 10 5.83333C11.3807 5.83333 12.5 6.95262 12.5 8.33333ZM17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
            case Icons::Notification:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M12.4999 14.1667H16.6666L15.4958 12.9959C15.1783 12.6784 14.9999 12.2477 14.9999 11.7987V9.16667C14.9999 6.98964 13.6086 5.13757 11.6666 4.45118V4.16667C11.6666 3.24619 10.9204 2.5 9.99992 2.5C9.07944 2.5 8.33325 3.24619 8.33325 4.16667V4.45118C6.39126 5.13757 4.99992 6.98964 4.99992 9.16667V11.7987C4.99992 12.2477 4.82154 12.6784 4.50403 12.9959L3.33325 14.1667H7.49992M12.4999 14.1667V15C12.4999 16.3807 11.3806 17.5 9.99992 17.5C8.61921 17.5 7.49992 16.3807 7.49992 15V14.1667M12.4999 14.1667H7.49992" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> </svg>';
            case Icons::About:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10.8333 13.3333H10V10H9.16667M10 6.66667H10.0083M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> </svg>';
            case Icons::Bulb:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.05289 14.1667H11.947M9.99995 2.5V3.33333M15.3033 4.6967L14.714 5.28596M17.5 9.99996H16.6667M3.33333 9.99996H2.5M5.28591 5.28595L4.69665 4.6967M7.05368 12.9463C5.42649 11.3191 5.42649 8.68093 7.05368 7.05374C8.68086 5.42656 11.319 5.42656 12.9462 7.05374C14.5734 8.68093 14.5734 11.3191 12.9462 12.9463L12.4903 13.4022C11.9629 13.9296 11.6666 14.6449 11.6666 15.3908V15.8333C11.6666 16.7538 10.9204 17.5 9.99995 17.5C9.07948 17.5 8.33329 16.7538 8.33329 15.8333V15.3908C8.33329 14.6449 8.037 13.9296 7.50959 13.4022L7.05368 12.9463Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> </svg>';
            case Icons::PresentationLayer:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.66667 10.8333V9.99998M10 10.8333V8.33331M13.3333 10.8333V6.66665M6.66667 17.5L10 14.1666L13.3333 17.5M2.5 3.33331H17.5M3.33333 3.33331H16.6667V13.3333C16.6667 13.7936 16.2936 14.1666 15.8333 14.1666H4.16667C3.70643 14.1666 3.33333 13.7936 3.33333 13.3333V3.33331Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
            case Icons::Search:
                return '<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_171_7932)"> <path d="M23.9998 23.0868L17.7378 16.8248C19.3644 14.8354 20.1642 12.2969 19.9716 9.73432C19.7791 7.17179 18.609 4.78129 16.7034 3.05728C14.7977 1.33327 12.3024 0.407651 9.73342 0.471883C7.16447 0.536114 4.71848 1.58528 2.9014 3.40237C1.08431 5.21946 0.0351378 7.66545 -0.029094 10.2344C-0.0933258 12.8034 0.832292 15.2987 2.5563 17.2043C4.28031 19.11 6.67081 20.2801 9.23334 20.4726C11.7959 20.6651 14.3344 19.8654 16.3238 18.2388L22.5858 24.5008L23.9998 23.0868ZM9.99978 18.5008C8.41753 18.5008 6.87081 18.0316 5.55522 17.1525C4.23963 16.2735 3.21425 15.024 2.60875 13.5622C2.00324 12.1004 1.84482 10.4919 2.1535 8.94004C2.46218 7.38819 3.22411 5.96272 4.34293 4.8439C5.46175 3.72508 6.88721 2.96316 8.43906 2.65448C9.99091 2.34579 11.5994 2.50422 13.0612 3.10972C14.5231 3.71522 15.7725 4.7406 16.6515 6.0562C17.5306 7.37179 17.9998 8.91851 17.9998 10.5008C17.9974 12.6218 17.1538 14.6552 15.654 16.155C14.1542 17.6548 12.1208 18.4984 9.99978 18.5008Z"/> </g> <defs> <clipPath id="clip0_171_7932"> <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/> </clipPath> </defs> </svg>';
            case Icons::Check:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.50011 17.1081C6.17188 17.1088 5.84677 17.0445 5.54344 16.9191C5.24012 16.7937 4.96457 16.6095 4.73261 16.3773L0.0717773 11.7173L1.25011 10.5381L5.91094 15.199C6.06722 15.3552 6.27914 15.443 6.50011 15.443C6.72108 15.443 6.933 15.3552 7.08928 15.199L18.7501 3.53815L19.9284 4.71648L8.26761 16.3773C8.03565 16.6095 7.7601 16.7937 7.45678 16.9191C7.15345 17.0445 6.82834 17.1088 6.50011 17.1081Z"/> </svg>';
            case Icons::Eye:
                return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_145_4314)"> <path d="M19.8507 9.3175C19.1191 7.7175 16.2499 2.5 9.99989 2.5C3.74989 2.5 0.880726 7.7175 0.149059 9.3175C0.0508413 9.53192 0 9.76499 0 10.0008C0 10.2367 0.0508413 10.4697 0.149059 10.6842C0.880726 12.2825 3.74989 17.5 9.99989 17.5C16.2499 17.5 19.1191 12.2825 19.8507 10.6825C19.9487 10.4683 19.9995 10.2355 19.9995 10C19.9995 9.76446 19.9487 9.53168 19.8507 9.3175ZM9.99989 15.8333C4.74406 15.8333 2.29156 11.3617 1.66656 10.0092C2.29156 8.63833 4.74406 4.16667 9.99989 4.16667C15.2432 4.16667 17.6966 8.61917 18.3332 10C17.6966 11.3808 15.2432 15.8333 9.99989 15.8333Z" /> <path d="M9.99968 5.83362C9.17559 5.83362 8.37001 6.07799 7.6848 6.53583C6.9996 6.99367 6.46554 7.64441 6.15018 8.40577C5.83481 9.16713 5.7523 10.0049 5.91307 10.8132C6.07384 11.6214 6.47068 12.3638 7.0534 12.9466C7.63612 13.5293 8.37855 13.9261 9.1868 14.0869C9.99505 14.2477 10.8328 14.1651 11.5942 13.8498C12.3555 13.5344 13.0063 13.0004 13.4641 12.3152C13.922 11.63 14.1663 10.8244 14.1663 10.0003C14.165 8.89562 13.7256 7.83658 12.9445 7.05547C12.1634 6.27435 11.1043 5.83494 9.99968 5.83362ZM9.99968 12.5003C9.50522 12.5003 9.02187 12.3537 8.61075 12.079C8.19963 11.8043 7.8792 11.4138 7.68998 10.957C7.50076 10.5002 7.45125 9.99751 7.54771 9.51256C7.64418 9.02761 7.88228 8.58215 8.23191 8.23252C8.58154 7.88289 9.027 7.64478 9.51195 7.54832C9.9969 7.45186 10.4996 7.50137 10.9564 7.69059C11.4132 7.87981 11.8036 8.20024 12.0784 8.61136C12.3531 9.02248 12.4997 9.50583 12.4997 10.0003C12.4997 10.6633 12.2363 11.2992 11.7674 11.7681C11.2986 12.2369 10.6627 12.5003 9.99968 12.5003Z" /> </g> <defs> <clipPath id="clip0_145_4314"> <rect width="20" height="20" fill="white"/> </clipPath> </defs> </svg>';
            case Icons::Question:
                return '<svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.33097 0.079999C6.96297 0.079999 8.26697 0.527999 9.24297 1.424C10.235 2.32 10.731 3.544 10.731 5.096C10.731 6.712 10.219 7.928 9.19497 8.744C8.17097 9.56 6.81097 9.968 5.11497 9.968L5.01897 11.864H2.64297L2.52297 8.096H3.31497C4.86697 8.096 6.05097 7.888 6.86697 7.472C7.69897 7.056 8.11497 6.264 8.11497 5.096C8.11497 4.248 7.86697 3.584 7.37097 3.104C6.89097 2.624 6.21897 2.384 5.35497 2.384C4.49097 2.384 3.81097 2.616 3.31497 3.08C2.81897 3.544 2.57097 4.192 2.57097 5.024H0.00296882C0.00296882 4.064 0.218969 3.208 0.650969 2.456C1.08297 1.704 1.69897 1.12 2.49897 0.704C3.31497 0.287999 4.25897 0.079999 5.33097 0.079999ZM3.79497 17.168C3.29897 17.168 2.88297 17 2.54697 16.664C2.21097 16.328 2.04297 15.912 2.04297 15.416C2.04297 14.92 2.21097 14.504 2.54697 14.168C2.88297 13.832 3.29897 13.664 3.79497 13.664C4.27497 13.664 4.68297 13.832 5.01897 14.168C5.35497 14.504 5.52297 14.92 5.52297 15.416C5.52297 15.912 5.35497 16.328 5.01897 16.664C4.68297 17 4.27497 17.168 3.79497 17.168Z" /> </svg>';
            case Icons::Print:
                return '<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M18 14H18.5C19.443 14 19.914 14 20.207 13.707C20.5 13.414 20.5 12.943 20.5 12V11C20.5 9.114 20.5 8.172 19.914 7.586C19.328 7 18.386 7 16.5 7H7.5C5.614 7 4.672 7 4.086 7.586C3.5 8.172 3.5 9.114 3.5 11V13C3.5 13.471 3.5 13.707 3.646 13.854C3.793 14 4.029 14 4.5 14H6" /> <path d="M6.5 20.306V12C6.5 11.057 6.5 10.586 6.793 10.293C7.086 10 7.557 10 8.5 10H15.5C16.443 10 16.914 10 17.207 10.293C17.5 10.586 17.5 11.057 17.5 12V20.306C17.5 20.623 17.5 20.781 17.396 20.856C17.292 20.931 17.142 20.881 16.842 20.781L14.674 20.058C14.6193 20.0338 14.5607 20.0195 14.501 20.016C14.4413 20.0229 14.3834 20.0405 14.33 20.068L12.186 20.926C12.1282 20.9563 12.065 20.975 12 20.981C11.935 20.975 11.8718 20.9563 11.814 20.926L9.67 20.068C9.586 20.034 9.544 20.018 9.5 20.016C9.456 20.014 9.412 20.029 9.326 20.058L7.158 20.781C6.858 20.881 6.708 20.931 6.604 20.856C6.5 20.781 6.5 20.623 6.5 20.306Z" /> <path d="M9.5 14H13.5M9.5 17H14.5"  stroke-linecap="round"/> <path d="M17.5 7V6.6C17.5 4.903 17.5 4.054 16.973 3.527C16.446 3 15.597 3 13.9 3H10.1C8.403 3 7.554 3 7.027 3.527C6.5 4.054 6.5 4.903 6.5 6.6V7" /> </svg>';
            case Icons::OpenInNewTab:
                return '<svg width="24" height="24" viewBox="0 0 18 18" fill="red" xmlns="http://www.w3.org/2000/svg"> <path d="M13.5 7.875V14.3438C13.5 14.5284 13.4636 14.7113 13.393 14.8819C13.3223 15.0525 13.2187 15.2075 13.0881 15.3381C12.9575 15.4687 12.8025 15.5723 12.6319 15.643C12.4613 15.7136 12.2784 15.75 12.0938 15.75H3.65625C3.28329 15.75 2.9256 15.6018 2.66188 15.3381C2.39816 15.0744 2.25 14.7167 2.25 14.3438V5.90625C2.25 5.53329 2.39816 5.1756 2.66188 4.91188C2.9256 4.64816 3.28329 4.5 3.65625 4.5H9.54422M11.8125 2.25H15.75V6.1875M7.875 10.125L15.4688 2.53125"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
            default:
                return '';
        }
    }
}
