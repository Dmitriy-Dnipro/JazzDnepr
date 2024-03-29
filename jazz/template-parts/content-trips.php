<?php
/*Template Name: Cтраница "Как добраться"*/
    get_header();

    $lang = pll_current_language();
?>
<section class="bg_footer top trips_page">

    <div class="trips_block">
        <div class="container">
            <h2 class="title_page">
                <?php 
                    if($lang == 'ru'){
                        echo 'Как добраться';
                    }else if($lang == 'en'){
                        echo 'How to get there';
                    }else if($lang == 'ua'){
                        echo 'Як дістатися';
                    }
                ?>
            </h2>
            <div class="trips_tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="plane-tab" data-toggle="tab" href="#plane" role="tab" aria-controls="plane" aria-selected="true">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <radialGradient id="rg" r="150%" cx="30%" cy="107%">
                            <stop stop-color="#5200FF"/>
                            <stop offset="1" stop-color="#DD0077"/>
                        </radialGradient>
                        <path d="M13.0568 1.38305C13.3186 0.768024 13.8342 0.300876 14.4947 0.0955143C15.461 -0.156779 16.4792 0.308845 16.9218 1.20066C17.6448 2.65308 18.0225 4.27933 18.0135 5.89961V21.5327C18.0135 21.5642 18.0105 21.5957 18.0045 21.6272L16.6595 28.5959C16.5461 29.4118 15.8397 30.0258 15.0173 30.0258C15.0168 30.0258 15.0158 30.0258 15.0148 30.0258C14.1914 30.0258 13.4854 29.4113 13.3765 28.6219L12.0276 21.6272C12.021 21.5962 12.0181 21.5643 12.0181 21.5328V5.89862C12.0216 4.33535 12.3843 2.76604 13.0568 1.38305ZM13.0173 21.4843L14.3613 28.458C14.4062 28.7822 14.6875 29.0265 15.0163 29.0265C15.3445 29.0265 15.6253 28.7822 15.6738 28.4325L17.0138 21.4847V5.89715C17.0217 4.42979 16.6805 2.95939 16.0265 1.64537C15.7927 1.1747 15.2531 0.929383 14.7695 1.05582C14.4123 1.16726 14.1225 1.42905 13.9661 1.79624C13.3485 3.06778 13.0208 4.48669 13.0173 5.89961V21.4843Z"/>
                        <path d="M17.2547 11.1095C17.4061 11.0191 17.5945 11.0156 17.7483 11.0995L29.7392 17.5946C29.9006 17.6821 30.001 17.8504 30.001 18.0338V21.0315C30.001 21.1954 29.9211 21.3482 29.7861 21.4421C29.7012 21.5006 29.6017 21.5311 29.5013 21.5311C29.4424 21.5311 29.3829 21.5211 29.3259 21.4996L17.3351 17.003C17.1402 16.9296 17.0108 16.7433 17.0108 16.5349V11.5387C17.0109 11.3629 17.1033 11.2 17.2547 11.1095ZM18.0101 16.1887L29.0018 20.3106V18.3316L18.0101 12.3782V16.1887Z"/>
                        <path d="M0.288318 17.5944L12.2792 11.0994C12.434 11.0159 12.6214 11.0189 12.7728 11.1094C12.9237 11.1993 13.0166 11.3622 13.0166 11.5386V16.5347C13.0166 16.7431 12.8877 16.9299 12.6928 17.0029L0.701971 21.4995C0.644493 21.5204 0.585083 21.5309 0.526082 21.5309C0.425656 21.5309 0.326226 21.5009 0.242324 21.442C0.107447 21.3485 0.0270023 21.1952 0.0270023 21.0313V18.0336C0.0270023 17.8502 0.127427 17.6818 0.288318 17.5944ZM1.02575 20.3104L12.0174 16.1885V12.3773L1.02575 18.3313V20.3104Z"/>
                        <path d="M22.0099 11.5391C22.8363 11.5391 23.5088 12.2116 23.5088 13.0379V14.5368H22.5096V13.0379C22.5096 12.7626 22.2852 12.5383 22.01 12.5383C21.7347 12.5383 21.5104 12.7627 21.5104 13.0379V13.5375H20.5111V13.0379C20.511 12.2115 21.1835 11.5391 22.0099 11.5391Z"/>
                        <path d="M26.506 14.0391C27.3324 14.0391 28.0049 14.7116 28.0049 15.5379V17.0368H27.0057V15.5379C27.0057 15.2627 26.7813 15.0388 26.5061 15.0388C26.2308 15.0388 26.0065 15.2626 26.0065 15.5379H25.0072C25.0071 14.7116 25.6796 14.0391 26.506 14.0391Z"/>
                        <path d="M8.01186 11.543C8.83823 11.543 9.51074 12.2155 9.51074 13.0418V13.5415H8.51153V13.0418C8.51153 12.7665 8.28771 12.5422 8.01192 12.5422C7.73613 12.5422 7.51232 12.7666 7.51232 13.0418V14.5407H6.5131V13.0418C6.51298 12.2154 7.18549 11.543 8.01186 11.543Z"/>
                        <path d="M3.52846 14.0391C4.35483 14.0391 5.02734 14.7116 5.02734 15.5379H4.02813C4.02813 15.2627 3.80431 15.0388 3.52852 15.0388C3.25273 15.0388 3.02892 15.2626 3.02892 15.5379V17.0368H2.0297V15.5379C2.02958 14.7116 2.7021 14.0391 3.52846 14.0391Z"/>
                        <path d="M16.1016 28.0341L21.5149 28.9364V27.8107L16.761 24.9584L17.2752 24.1016L22.2713 27.0993C22.4217 27.1892 22.5137 27.3516 22.5137 27.5274V29.5259C22.5137 29.6728 22.4487 29.8127 22.3368 29.9071C22.2459 29.9841 22.1314 30.0255 22.014 30.0255C21.9871 30.0255 21.9596 30.023 21.9326 30.019L15.9371 29.0198L16.1016 28.0341Z"/>
                        <path d="M7.76452 27.0993L12.7607 24.1016L13.2748 24.9584L8.52087 27.8107V28.9359L13.9348 28.0336L14.0986 29.0193L8.10318 30.0185C8.0757 30.023 8.04874 30.0255 8.02127 30.0255C7.90385 30.0255 7.78942 29.984 7.69901 29.9071C7.58658 29.8121 7.52213 29.6728 7.52213 29.5259V27.5274C7.52219 27.3521 7.61412 27.1897 7.76452 27.0993Z"/>
                        <path d="M13.8808 3.86276C14.0441 3.37364 14.5103 3.05935 15.0189 3.04688C15.549 3.05186 16.0047 3.39713 16.1466 3.88526L16.4863 4.88447L15.54 5.20625L15.1938 4.186C15.1693 4.1031 15.0954 4.04662 15.0129 4.04609C14.929 4.04609 14.855 4.09952 14.8285 4.17798L14.4888 5.20221L13.5405 4.88793L13.8808 3.86276Z"/>
                    </svg><?php the_field("plane_title");?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="train-tab" data-toggle="tab" href="#train" role="tab" aria-controls="train" aria-selected="false">
                        <svg width="27" height="33" viewBox="0 0 27 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.949 3.44922C17.6085 3.44922 17.332 3.72564 17.332 4.06623C17.332 4.40682 17.6085 4.68324 17.949 4.68324C18.2896 4.68324 18.5661 4.40682 18.5661 4.06623C18.5661 3.72564 18.2896 3.44922 17.949 3.44922Z" />
                            <path d="M8.08185 3.44922C7.74126 3.44922 7.46484 3.72564 7.46484 4.06623C7.46484 4.40682 7.74126 4.68324 8.08185 4.68324C8.42244 4.68324 8.69887 4.40682 8.69887 4.06623C8.69887 3.72564 8.42244 3.44922 8.08185 3.44922Z" />
                            <path d="M25.8437 31.5277L21.7608 27.2623C23.4103 27.2032 24.7341 25.8437 24.7341 24.1801V5.87151C24.7341 4.87461 24.3857 3.90109 23.7529 3.13026C23.1197 2.35961 22.2325 1.82855 21.2553 1.63524C19.0654 1.20074 16.8233 0.980469 14.5912 0.980469H11.3315C9.20855 0.980469 6.99725 1.18384 4.7596 1.63104C2.74783 2.03352 1.28774 3.81489 1.28774 5.86658V24.1801C1.28774 25.8577 2.63406 27.2259 4.30289 27.2633L0.173912 31.5251C0.0014574 31.703 -0.0477799 31.9669 0.0489057 32.195C0.145468 32.4232 0.369258 32.5714 0.617049 32.5714H5.02868C5.22649 32.5714 5.41227 32.4766 5.52833 32.3164L7.39997 29.7332H18.6768L20.5485 32.3165C20.6645 32.4766 20.8504 32.5714 21.0481 32.5714H25.3981C25.6452 32.5714 25.8684 32.424 25.9655 32.1968C26.0625 31.9695 26.0146 31.7063 25.8437 31.5277ZM2.52176 24.1801V5.86658C2.52176 4.40099 3.56469 3.12859 5.00153 2.84106C7.01564 2.43853 9.14389 2.21449 11.3314 2.21449H14.5911C16.7428 2.21449 18.9041 2.4268 21.0153 2.84563C21.7134 2.98378 22.3471 3.36312 22.7992 3.91343C23.2512 4.46399 23.5001 5.15936 23.5001 5.87145V24.1801C23.5001 25.2007 22.6697 26.0311 21.649 26.0311H4.37273C3.35213 26.0311 2.52176 25.2007 2.52176 24.1801ZM4.71382 31.3374H2.07393L6.01929 27.2651H7.66436L4.71382 31.3374ZM8.29408 28.4991L9.18819 27.2651H16.8887L17.7827 28.4991H8.29408ZM21.363 31.3374L18.4126 27.2651H20.0554L23.9533 31.3374H21.363Z" fill=""/>
                            <path d="M21.6472 5.91797H4.37092C4.0302 5.91797 3.75391 6.19427 3.75391 6.53498V16.7774C3.75391 17.1181 4.0302 17.3944 4.37092 17.3944H21.6472C21.9879 17.3944 22.2642 17.1181 22.2642 16.7774V6.53498C22.2642 6.19427 21.9879 5.91797 21.6472 5.91797ZM12.3921 16.1603H4.98793V7.15199H12.3921V16.1603ZM21.0302 16.1603H13.6261V7.15199H21.0302V16.1603Z"/>
                            <path d="M15.4867 3.44922H10.5506C10.2099 3.44922 9.93359 3.72552 9.93359 4.06623C9.93359 4.40694 10.2099 4.68324 10.5506 4.68324H15.4867C15.8274 4.68324 16.1037 4.40694 16.1037 4.06623C16.1037 3.72552 15.8274 3.44922 15.4867 3.44922Z" />
                            <path d="M19.8001 19.2422C18.4392 19.2422 17.332 20.3494 17.332 21.7102C17.332 23.0711 18.4392 24.1783 19.8001 24.1783C21.161 24.1783 22.2681 23.0711 22.2681 21.7102C22.2681 20.3494 21.161 19.2422 19.8001 19.2422ZM19.8001 22.9443C19.1196 22.9443 18.5661 22.3907 18.5661 21.7102C18.5661 21.0298 19.1196 20.4762 19.8001 20.4762C20.4805 20.4762 21.0341 21.0298 21.0341 21.7102C21.0341 22.3907 20.4805 22.9443 19.8001 22.9443Z"/>
                            <path d="M6.22195 19.2422C4.86107 19.2422 3.75391 20.3494 3.75391 21.7102C3.75391 23.0711 4.86113 24.1783 6.22195 24.1783C7.58283 24.1783 8.68999 23.0711 8.68999 21.7102C8.68999 20.3494 7.58283 19.2422 6.22195 19.2422ZM6.22195 22.9443C5.54151 22.9443 4.98793 22.3907 4.98793 21.7102C4.98793 21.0298 5.54151 20.4762 6.22195 20.4762C6.90239 20.4762 7.45597 21.0298 7.45597 21.7102C7.45597 22.3907 6.90239 22.9443 6.22195 22.9443Z"/>
                            <path d="M15.4867 19.8594H10.5506C10.2099 19.8594 9.93359 20.1357 9.93359 20.4764C9.93359 20.8171 10.2099 21.0934 10.5506 21.0934H15.4867C15.8274 21.0934 16.1037 20.8171 16.1037 20.4764C16.1037 20.1357 15.8275 19.8594 15.4867 19.8594Z" />
                            <path d="M15.4867 22.3281H10.5506C10.2099 22.3281 9.93359 22.6044 9.93359 22.9451C9.93359 23.2858 10.2099 23.5621 10.5506 23.5621H15.4867C15.8274 23.5621 16.1037 23.2858 16.1037 22.9451C16.1037 22.6044 15.8275 22.3281 15.4867 22.3281Z" />

                        </svg>
                    <?php the_field("train_title");?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="false">
                    <svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.3194 16.7362C28.0588 16.4024 27.6664 16.2109 27.2429 16.2109H12.131C11.7076 16.2109 11.3152 16.4024 11.0545 16.7362C10.7939 17.07 10.7033 17.4971 10.8061 17.9079L11.1585 19.3178C11.3108 19.9269 11.8557 20.3523 12.4835 20.3523H26.8905C27.5183 20.3523 28.0631 19.9268 28.2155 19.3177L28.568 17.9079C28.6707 17.497 28.5801 17.07 28.3194 16.7362ZM27.2857 17.5875L26.9332 18.9972C26.9283 19.017 26.9108 19.0306 26.8905 19.0306H12.4835C12.4633 19.0306 12.4456 19.0168 12.4407 18.9973L12.0883 17.5875C12.0866 17.5812 12.083 17.5666 12.0963 17.5497C12.1095 17.5328 12.1246 17.5328 12.131 17.5328H27.2429C27.2494 17.5328 27.2644 17.5328 27.2776 17.5497C27.2909 17.5666 27.2873 17.5811 27.2857 17.5875Z"/>
                        <path d="M37.3155 12.5999C38.4572 12.5999 39.3861 11.6711 39.3861 10.5293C39.3861 9.38759 38.4572 8.45871 37.3155 8.45871H36.6106C35.5811 8.45871 34.7249 9.21412 34.5665 10.1996L32.8036 5.35151C32.4062 4.25863 31.358 3.52444 30.1952 3.52444H25.169L24.797 1.6646C24.6043 0.700027 23.7502 0 22.7666 0H16.6193C15.6358 0 14.7819 0.700027 14.5889 1.6646L14.217 3.52444H9.19089C8.02808 3.52444 6.97981 4.2587 6.58248 5.35144L4.81965 10.1995C4.66126 9.21412 3.80507 8.45871 2.77557 8.45871H2.07069C0.928882 8.45871 0 9.38759 0 10.5293C0 11.6711 0.928882 12.5999 2.07062 12.5999H2.77549C3.10097 12.5999 3.40898 12.5243 3.6833 12.3899L2.17247 14.2785C1.6806 14.8933 1.40975 15.6654 1.40975 16.4526V29.5615C1.40975 30.3146 2.02239 30.9273 2.77549 30.9273H4.89019C5.64329 30.9273 6.25593 30.3146 6.25593 29.5615V26.6979H33.1301V29.5615C33.1301 30.3146 33.7428 30.9273 34.4959 30.9273H36.6106C37.3637 30.9273 37.9763 30.3146 37.9763 29.5615V16.4526C37.9763 15.6654 37.7055 14.8932 37.2136 14.2785L35.7028 12.3899C35.9771 12.5243 36.2851 12.5999 36.6106 12.5999H37.3155ZM2.77557 11.2783H2.07069C1.65768 11.2783 1.32174 10.9423 1.32174 10.5293C1.32174 10.1163 1.65768 9.78038 2.07069 9.78038H2.77557C3.18858 9.78038 3.52452 10.1163 3.52452 10.5293C3.52452 10.9423 3.18851 11.2783 2.77557 11.2783ZM15.885 1.92369C15.9548 1.57483 16.2636 1.32159 16.6193 1.32159H22.7666C23.1224 1.32159 23.4313 1.57483 23.501 1.92369L23.8211 3.52444H15.5648L15.885 1.92369ZM4.93427 29.5615C4.93427 29.5858 4.9145 29.6056 4.89019 29.6056H2.77549C2.75118 29.6056 2.73141 29.5858 2.73141 29.5615V26.2854C3.15451 26.5466 3.65252 26.6979 4.18524 26.6979H4.93419L4.93427 29.5615ZM27.491 25.3762H11.8952V23.9224C11.8952 23.8981 11.9149 23.8783 11.9392 23.8783H27.447C27.4713 23.8783 27.4911 23.8981 27.4911 23.9224V25.3762H27.491ZM36.6546 29.5615C36.6546 29.5858 36.6349 29.6056 36.6106 29.6056H34.4959C34.4716 29.6056 34.4518 29.5858 34.4518 29.5615V26.6979H35.2007C35.7335 26.6979 36.2315 26.5466 36.6546 26.2854V29.5615H36.6546ZM36.1817 15.1041C36.4866 15.4854 36.6547 15.9644 36.6547 16.4527V23.9224C36.6547 24.724 36.0025 25.3762 35.2009 25.3762H28.8126V23.9224C28.8126 23.1693 28.2 22.5566 27.4469 22.5566H11.9392C11.1861 22.5566 10.5735 23.1693 10.5735 23.9224V25.3762H4.18532C3.38367 25.3762 2.73149 24.724 2.73149 23.9224V16.4527C2.73149 15.9644 2.8995 15.4854 3.20458 15.1041L5.20782 12.5999H23.9225C24.2874 12.5999 24.5833 12.3041 24.5833 11.9391C24.5833 11.5741 24.2875 11.2782 23.9225 11.2782H5.83376L7.82476 5.80299C8.03285 5.23059 8.58195 4.84603 9.19105 4.84603H30.1952C30.8043 4.84603 31.3534 5.23066 31.5615 5.80299L33.5525 11.2782H23.9225C23.5575 11.2782 23.2616 11.5741 23.2616 11.9391C23.2616 12.304 23.5574 12.5999 23.9225 12.5999H34.1785L36.1817 15.1041ZM35.8616 10.5293C35.8616 10.1163 36.1975 9.78038 36.6106 9.78038H37.3154C37.7285 9.78038 38.0644 10.1163 38.0644 10.5293C38.0644 10.9423 37.7285 11.2783 37.3154 11.2783H36.6106C36.1976 11.2783 35.8616 10.9423 35.8616 10.5293Z"/>
                        <path d="M7.00149 21.1445C6.24838 21.1445 5.63574 21.7572 5.63574 22.5103C5.63574 23.2634 6.24838 23.876 7.00149 23.876C7.75459 23.876 8.36723 23.2634 8.36723 22.5103C8.36723 21.7572 7.75459 21.1445 7.00149 21.1445Z"/>
                        <path d="M32.3814 21.1484C31.6283 21.1484 31.0156 21.7611 31.0156 22.5142C31.0156 23.2673 31.6283 23.8799 32.3814 23.8799C33.1345 23.8799 33.7471 23.2673 33.7471 22.5142C33.7471 21.7611 33.1344 21.1484 32.3814 21.1484Z"/>
                        <path d="M6.64966 15.5078C5.31353 15.5078 4.22656 16.5948 4.22656 17.9309C4.22656 19.267 5.31353 20.354 6.64966 20.354C7.98578 20.354 9.07275 19.267 9.07275 17.9309C9.07275 16.5948 7.98578 15.5078 6.64966 15.5078ZM6.64966 19.0323C6.04232 19.0323 5.54823 18.5382 5.54823 17.9308C5.54823 17.3234 6.04225 16.8294 6.64966 16.8294C7.25706 16.8294 7.75108 17.3234 7.75108 17.9308C7.75108 18.5382 7.25699 19.0323 6.64966 19.0323Z"/>
                        <path d="M32.7278 15.5078C31.3917 15.5078 30.3047 16.5948 30.3047 17.9309C30.3047 19.267 31.3917 20.354 32.7278 20.354C34.0639 20.354 35.1509 19.267 35.1509 17.9309C35.1509 16.5948 34.0639 15.5078 32.7278 15.5078ZM32.7278 19.0323C32.1204 19.0323 31.6264 18.5382 31.6264 17.9308C31.6264 17.3234 32.1204 16.8294 32.7278 16.8294C33.3351 16.8294 33.8292 17.3234 33.8292 17.9308C33.8292 18.5382 33.3352 19.0323 32.7278 19.0323Z"/>
                    </svg>
                        <?php the_field("car_title");?>
                    </a>
                </li>
                </ul>

                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="plane" role="tabpanel" aria-labelledby="plane-tab">
                        

                    <?php 
                            $plane_content = get_field("plane_trips");
                            foreach ($plane_content as $plane) {?>

                            <div class="trips_content">
                                <div class="trips_direction">
                                    <p><?php echo $plane['plane_trips_from'];?></p>
                                    <p>-</p>
                                    <p><?php echo $plane['plane_trips_where'];?></p>
                                </div>
                                <div class="trips_direction__content">
                                    <div class="direction_number">
                                        <?php 
                                            $text = $plane['plane_trips_why'];
                                            $plane_text = explode(" ", $text, 2);
                                        ?>

                                        <p><?php echo $plane_text[0];?> <span><?php echo $plane_text[1];?></span></p>
                                    </div>
                                    <div class="direction_line"></div>
                                    <div class="direction_time">
                                        <p><span><?php echo $plane['plane_trips_from'];?> </span><?php echo $plane['plane_trips_start'];?></p>
                                        <p><?php echo $plane['plane_trips_time'];?></p>
                                        <p><?php echo $plane['plane_trips_end'];?> <span><?php echo $plane['plane_trips_where'];?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?}?>


                    </div>
                    <div class="tab-pane fade show active" id="train" role="tabpanel" aria-labelledby="train-tab">

                        <?php 
                            $train_content = get_field("train_trips");
                            foreach ($train_content as $train) {?>

                            <div class="trips_content">
                                <div class="trips_direction">
                                    <p><?php echo $train['train_trips_from'];?></p>
                                    <p>-</p>
                                    <p><?php echo $train['train_trips_where'];?></p>
                                </div>
                                <div class="trips_direction__content">
                                    <div class="direction_number">
                                    <?php 
                                        $text = $train['train_trips_why'];
                                        $train_text = explode(" ", $text, 2);
                                    ?>
                                        <p><?php echo $train_text[0];?> <span><?php echo $train_text[1];?></span></p>
                                    </div>
                                    <div class="direction_line"></div>
                                    <div class="direction_time">
                                        <p><?php echo $train['train_trips_from'];?></p>
                                        <p><?php echo $train['train_trips_time'];?></p>
                                        <p><?php echo $train['train_trips_where'];?></p>
                                    </div>
                                </div>
                            </div>
                        <?}?>

                    </div>
                    <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">

                         <?php 
                            $car_content = get_field("car_trips");
                            foreach ($car_content as $car) {?>
    
                            <div class="trips_content">
                                    <div class="trips_direction">
                                        <p><?php echo $car['car_trips_from'];?></p>
                                        <p>-</p>
                                        <p><?php echo $car['car_trips_where'];?></p>
                                    </div>
                                    <div class="trips_direction__content">
                                        <div class="direction_number">
                                            <?php 
                                                $text = $car['car_trips_why'];
                                                $car_text = explode(" ", $text, 2);
                                            ?>
                                            <p><?php echo $car_text[0];?> <span><?php echo $car_text[1];?></span></p>
                                        </div>
                                        <div class="direction_line"></div>
                                        <div class="direction_time">
                                            <p><?php echo $car['car_trips_from'];?></p>
                                            <p><?php echo $car['car_trips_time'];?></p>
                                            <p><?php echo $car['car_trips_where'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?}?>                            

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        get_footer();
    ?>
</section>