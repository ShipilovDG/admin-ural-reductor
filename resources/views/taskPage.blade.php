<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>страница Задачи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page description">
    <meta property="og:title" content="Unique page title - My Site">
    <meta property="og:description" content="Page description">
    <meta property="og:image" content="https://www.mywebsite.com/image.jpg">
    <meta property="og:image:alt" content="Image description">
    <meta property="og:locale" content="ru">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="https://www.mywebsite.com/page">
    <meta name="theme-color" content="#fff">
    <link rel="canonical" href="https://www.mywebsite.com/page">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Tempus Dominus Styles https://getdatepicker.com/ -->
<link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet" crossorigin="anonymous">
 <!-- swiper.js styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <!-- Alpine Plugins -->
 <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
 <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>


 <!-- Alpine Core -->
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>


<!-- Popperjs -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous" defer></script>

 <!--Tempus Dominus JavaScript datepicker https://getdatepicker.com/ -->
 <!-- <script defer src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.min.js"></script> -->
 
 <!-- tippy.js popovers -->
 <script src="https://unpkg.com/tippy.js@6" defer></script>
     
  <link rel="stylesheet" href="/assets/css/main.css" /><script type="module" src="/js/scripts.js"></script></head>
  <body x-data="{eventsBoardPopup: false, notifyPopup: false,settingsPopup: false, settingsOrderListPopup: false, authRegAltPopup: false }">
    <header class="header" x-data="{headerProfileDropdown: false, headerEnterAccountDropdown: false}" x-on:click.outside="headerProfileDropdown = false; headerEnterAccountDropdown = false" x-on:click.self="toggleAddOptionsDropdown = false">
    <div class="container header__container">
        <div class="header__left">
            <a href="/" class="header__logo">
                <svg width="157" height="25" viewBox="0 0 157 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.67542 6.3334C3.63117 6.28889 3.63117 6.28889 3.58691 6.24438L3.67542 6.3334Z" fill="#869AB8"></path>
                    <path d="M13.8239 6.68408C13.8239 6.72859 13.7796 6.72859 13.7354 6.72859L13.8239 6.68408Z" fill="#869AB8"></path>
                    <path d="M11.1104 14.0722L11.0667 14.2481L11.0229 14.6439L10.9792 15.1276V15.6553L10.9354 16.139L10.848 16.5788L10.7605 16.9745L10.673 17.2384L10.6293 17.2824V17.3703L10.5418 17.5902L10.3668 17.898L10.1481 18.1618L9.92939 18.3817L9.79816 18.4697H9.75442L9.66694 18.5576L9.49197 18.6455H9.40449L9.36074 18.6895L9.18578 18.7775L8.87958 18.8654L8.66088 18.9094C6.56127 19.1293 4.46166 19.525 2.49328 20.0967C0.918578 18.0299 0 15.4354 0 12.6211C0 9.80676 0.918578 7.25626 2.49328 5.14551L2.62451 5.18948L2.84322 5.27743L3.01818 5.45333L3.23689 5.6732L3.41186 5.89307L3.54309 6.15691L3.67431 6.46473C3.67431 6.46473 3.67431 6.42076 3.67431 6.37678L3.76179 6.81652C3.76179 6.81652 3.76179 6.77255 3.76179 6.72857V6.81652L3.80554 7.21229L3.84928 7.56408V7.95985V8.00382L3.80554 8.44356L3.71805 8.92728V8.97125L3.67431 9.41099V9.85073V10.2905L3.71805 10.7742L3.76179 11.3459L3.84928 11.9175L3.9805 12.5332L4.11173 13.1048L4.2867 13.7644L4.68037 14.9957L4.94282 15.6553L5.46772 16.8866L5.77392 17.1065L6.43004 17.1944H6.47379L7.30488 17.2824L8.83584 17.4143L9.18578 17.2824L9.8419 16.2709L10.1918 15.6993L10.5418 15.0836L10.848 14.512L11.1104 14.0722Z" fill="#869AB8"></path>
                    <path d="M20.0777 19.2603L20.1652 19.2161L19.9902 19.3487L20.0777 19.2603Z" fill="#869AB8"></path>
                    <path d="M21.8275 20.6673C19.553 23.3058 16.1848 24.9768 12.423 24.9768C8.66125 24.9768 5.29313 23.3058 3.01855 20.6233C4.89945 20.0957 6.78035 19.7439 8.74873 19.524L9.01118 19.48H9.05492L9.31737 19.3921L9.66731 19.2601H9.75479L9.84227 19.1722L10.0172 19.0843H10.061L10.1485 18.9963L10.3672 18.8204C10.3672 18.8204 10.4109 18.7764 10.4547 18.7325L10.6296 18.5566L10.8921 18.2487C10.9358 18.2048 10.9358 18.1608 10.9796 18.1608L11.1545 17.897L11.3295 17.5452L11.3732 17.4572V17.3693L11.4607 17.0614L11.5919 16.6217L11.6794 16.138C11.6794 16.094 11.6794 16.05 11.6794 16.05L11.7232 15.6103V15.0826L11.7669 14.6868L11.8107 14.379L12.0294 13.4995L12.1606 13.1038L12.2043 13.0598V12.9719L12.3356 12.5321L12.3793 12.4881V12.4002L12.5543 12.0044L13.0792 10.8611L13.3416 10.3334L13.4291 10.2455V10.1575L13.6478 9.71777L13.7353 9.62983V9.58585L14.0415 9.10214L14.3914 8.53048L14.6101 8.22266L15.9224 8.3106L17.1909 8.44253L17.6283 9.40996L17.8908 10.0696L18.1095 10.6412V10.7292L18.1532 10.7732L18.3282 11.2569V11.3448L18.3719 11.3888L18.5032 11.8725V12.0044L18.5469 12.0484L18.7656 13.0598V13.1917L18.8093 13.2357L18.8968 13.6315V13.7634L18.9843 14.5989V14.9947V15.3465L18.9406 15.6982L18.8531 16.2259V16.7097V17.1494C18.8531 17.1934 18.8531 17.1934 18.8531 17.1934L18.8968 17.6331L18.9843 18.0728V18.1168L19.0718 18.4686L19.2468 18.9084C19.2468 18.9084 19.2468 18.9084 19.2468 18.9523L19.378 19.1722L19.5967 19.48L19.8591 19.7439L20.1653 20.0077L20.5153 20.2276L20.8215 20.3595C20.8652 20.3595 20.8652 20.3595 20.9089 20.4035L21.0839 20.4474L21.1277 20.4914H21.1714C21.4338 20.5794 21.6526 20.6233 21.8275 20.6673Z" fill="#869AB8"></path>
                    <path d="M24.8453 12.5322C24.8453 15.3465 23.9267 17.941 22.352 20.0518C22.0458 19.9638 21.7397 19.8759 21.4335 19.7879L20.996 19.612L20.7336 19.4801L20.2962 19.0843L20.1212 18.8645L19.99 18.6006L19.8588 18.3368V18.2488L19.815 18.2049L19.7713 17.985V17.897L19.7275 17.8531L19.64 17.5892L19.5963 17.1935C19.5963 17.1935 19.5963 17.1935 19.5963 17.1495V16.7097L19.64 16.314L19.7275 15.8742L19.7713 15.3465V14.9068V14.4671L19.7275 13.9394L19.5526 12.84L19.4213 12.2244L19.2464 11.6087L19.0277 11.0811V10.9931L18.9839 10.9491L18.809 10.4214L18.3278 9.1462L18.0216 8.44262L17.6717 7.73903L15.922 7.56313L14.1723 7.47519L13.3412 8.75043L12.9913 9.3221L12.9038 9.41005V9.45402L12.3789 10.5534L12.4226 10.4214V10.3775L12.4664 9.98171V9.45402V9.41005L12.5101 8.9703L12.5976 8.57454L12.6851 8.22275V8.17877V8.09082C12.6851 8.1348 12.6851 8.1348 12.6851 8.17877L12.8163 7.87095L12.9913 7.56313L13.1663 7.29929L13.385 7.03545L13.6037 6.81557L13.5599 6.85955L13.6474 6.81557C13.6474 6.81557 13.6474 6.81557 13.6037 6.85955L13.8224 6.72763L14.0411 6.5957L14.3035 6.50776L14.6097 6.41981H14.8284C17.4092 6.24391 19.9462 5.80417 22.3083 5.10059C23.883 7.12339 24.8453 9.71786 24.8453 12.5322Z" fill="#869AB8"></path>
                    <path d="M21.4334 19.7876L20.9959 19.6117L20.7335 19.4798L20.2961 19.084L20.1211 18.8641L19.9899 18.6003L19.8587 18.3365V18.2485L19.8149 18.2045L19.7712 17.9847V17.8967L19.7274 17.8527L19.6399 17.5889L19.5962 17.1931C19.5962 17.1931 19.5962 17.1931 19.5962 17.1492V16.7094L19.6399 16.3136L19.7274 15.8739L19.7712 15.3462V14.9065V14.4667L19.7274 13.939L19.5525 12.8397L19.4212 12.2241L19.2463 11.6084L19.0276 11.0807V10.9928L18.9838 10.9488L18.8089 10.4211L18.3277 9.14587L18.0215 8.44228L17.6716 7.7387L15.9219 7.5628L14.1722 7.47485L13.3411 8.7501L12.9912 9.32177L12.9037 9.40971V9.45369L12.3788 10.553L12.3351 10.8609L12.2476 11.3006L12.1164 11.7403L11.8539 12.312L11.6789 12.8397L11.4165 13.4114L11.154 13.939L11.1103 14.071L11.0666 14.2469L11.0228 14.6426L10.9791 15.1263V15.654L10.9353 16.1377L10.8478 16.5775L10.7604 16.9733L10.6729 17.2371L10.6291 17.2811V17.369L10.5417 17.5889L10.3667 17.8967L10.148 18.1606L9.92927 18.3804L9.79804 18.4684H9.7543L9.66682 18.5563L9.49185 18.6443H9.40437L9.36063 18.6882L9.18566 18.7762L8.87947 18.8641L8.66076 18.9081C6.56115 19.128 4.46154 19.5238 2.49316 20.0954C2.66813 20.3153 2.8431 20.5352 3.01807 20.7111C4.89896 20.1834 6.77986 19.8316 8.74824 19.6117L9.01069 19.5677H9.05443L9.31688 19.4798L9.66682 19.3479H9.7543L9.84179 19.2599L10.0168 19.172H10.0605L10.148 19.084L10.3667 18.9081C10.3667 18.9081 10.4104 18.8641 10.4542 18.8202L10.6291 18.6443L10.8916 18.3365C10.9353 18.2925 10.9353 18.2485 10.9791 18.2485L11.154 17.9847L11.329 17.6329L11.3727 17.5449V17.457L11.4602 17.1492L11.5915 16.7094L11.6789 16.2257C11.6789 16.1817 11.6789 16.1377 11.6789 16.1377L11.7227 15.698V15.1703L11.7664 14.7745L11.8102 14.4667L12.0289 13.5873L12.1601 13.1915L12.2038 13.1475V13.0596L12.3351 12.6198L12.3788 12.5758V12.4879L12.5538 12.0921L13.0787 10.9488L13.3411 10.4211L13.4286 10.3332V10.2452L13.6473 9.80548L13.7348 9.71753V9.67356L14.041 9.18984L14.3909 8.61818L14.6096 8.31036L15.9219 8.39831L17.1904 8.53023L17.6278 9.49766L17.8903 10.1573L18.109 10.7289V10.8169L18.1527 10.8609L18.3277 11.3446V11.4325L18.3714 11.4765L18.5027 11.9602V12.0921L18.5464 12.1361L18.7651 13.1475V13.2794L18.8089 13.3234L18.8963 13.7192V13.8511L18.9838 14.6866V15.0824V15.4342L18.9401 15.786L18.8526 16.3136V16.7094V17.1492C18.8526 17.1931 18.8526 17.1931 18.8526 17.1931L18.8963 17.6329L18.9838 18.0726V18.1166L19.0713 18.4684L19.2463 18.9081C19.2463 18.9081 19.2463 18.9081 19.2463 18.9521L19.3775 19.172L19.5962 19.4798L19.8587 19.7436L20.1648 20.0075L20.5148 20.2273L20.821 20.3593C20.8647 20.3593 20.8647 20.3593 20.9085 20.4032L21.0834 20.4472L21.1272 20.4912H21.1709C21.3459 20.5352 21.5646 20.5791 21.7396 20.6231C21.9145 20.4032 22.0895 20.2273 22.2645 20.0075C22.0457 19.9635 21.7396 19.8755 21.4334 19.7876ZM19.9899 19.3479L20.0774 19.2599L20.1648 19.2159L19.9899 19.3479Z" fill="#F9FBFD"></path>
                    <path d="M21.8274 4.39648C19.5529 5.01212 17.2346 5.45186 14.785 5.58378L14.5226 5.62776H14.4788L14.1726 5.71571C14.1289 5.71571 14.1289 5.71571 14.0851 5.71571L13.779 5.84763L13.429 6.02353H13.3853C13.3415 6.02353 13.2978 6.0675 13.2978 6.11147L13.1666 6.19942C13.1228 6.19942 13.0791 6.2434 13.0791 6.28737L12.9041 6.46327C12.8604 6.50724 12.8166 6.55121 12.8166 6.55121L12.6417 6.77108C12.6417 6.77108 12.5979 6.81506 12.5542 6.85903L12.3792 7.12288L12.3355 7.16685L12.1605 7.47467V7.51864C12.1605 7.56262 12.1168 7.56262 12.1605 7.56262L11.9855 7.91441C11.9855 7.91441 11.9418 7.95838 11.9418 8.00236L11.8543 8.35415V8.4421L11.7668 8.88184V8.92581L11.7231 9.40953L11.6793 9.98119L11.6356 10.333L11.5481 10.7288L11.4606 11.1245L11.3294 11.5643L11.1544 12.048L10.717 13.0594L10.4983 13.631L10.1921 14.2027L9.88593 14.7744L9.536 15.346L9.18607 15.9177L8.79239 16.4894L8.57368 16.7972L8.09252 16.7092L6.47407 16.5333H6.43033L5.99291 16.4454L5.59924 15.478L5.38053 14.8183L5.16182 14.2027H5.11808H5.16182L4.98685 13.5871L4.81189 12.9714L4.68066 12.3998L4.59318 11.8281L4.50569 11.3444L4.46195 10.7727L4.41821 10.289V9.84927V9.4535L4.46195 9.05774L4.54944 8.57402V8.53005L4.59318 8.04633V7.56262C4.59318 7.51864 4.59318 7.47467 4.59318 7.47467V7.16685C4.59318 7.12288 4.59318 7.0789 4.59318 7.03493L4.54944 6.68314C4.54944 6.63916 4.54944 6.59519 4.54944 6.59519L4.46195 6.28737V6.2434L4.33073 5.8916L4.28698 5.80366L4.11202 5.49584V5.45186L3.89331 5.14404C3.84957 5.10007 3.84957 5.10007 3.84957 5.10007L3.6746 4.92417C3.63086 4.8802 3.58712 4.83623 3.58712 4.83623L3.41215 4.66033C3.36841 4.61635 3.32467 4.61635 3.32467 4.57238L3.06221 4.39648C2.88725 4.57238 2.75602 4.79225 2.58105 5.01212L2.71228 5.0561L2.84351 5.27597L3.01847 5.45186L3.23718 5.67173L3.41215 5.8916L3.54337 6.15545L3.6746 6.46327C3.6746 6.46327 3.6746 6.41929 3.6746 6.37532L3.76208 6.81506C3.76208 6.81506 3.76208 6.77108 3.76208 6.72711V6.81506L3.80583 7.21083L3.84957 7.56262V7.95838V8.00236L3.80583 8.4421L3.71834 8.92581V8.96979L3.6746 9.40953V9.84927V10.289L3.71834 10.7727L3.76208 11.3444L3.84957 11.9161L3.98079 12.5317L4.11202 13.1034L4.28698 13.763L4.68066 14.9942L4.94311 15.6538L5.46801 16.8851L5.77421 17.105L6.43033 17.1929H6.47407L7.30517 17.2809L8.83613 17.4128L9.18607 17.2809L9.84219 16.2695L10.1921 15.6978L10.5421 15.0822L10.8483 14.5105L11.1107 14.0268L11.1544 13.8069L11.2857 13.2792L11.5919 12.2678V12.1799L11.6356 12.1359L11.8106 11.6962L12.073 11.1245L12.3355 10.5968L12.3792 10.4649V10.4209L12.423 10.0252V9.49748V9.4535L12.4667 9.01376L12.5542 8.618L12.6417 8.2662V8.22223V8.13428C12.6417 8.17826 12.6417 8.17826 12.6417 8.22223L12.7729 7.91441L12.9479 7.60659L13.1228 7.34275L13.3415 7.0789L13.5602 6.85903L13.5165 6.90301L13.604 6.85903C13.604 6.85903 13.604 6.85903 13.5602 6.90301L13.779 6.77108C13.7352 6.77108 13.7352 6.81506 13.6915 6.81506L13.779 6.77108L13.9977 6.63916L14.2601 6.55121L14.5663 6.46327H14.785C17.3658 6.28737 19.9028 5.84763 22.2649 5.14404C22.1774 4.83623 22.0024 4.61635 21.8274 4.39648ZM3.63086 6.2434L3.71834 6.33134C3.6746 6.28737 3.63086 6.28737 3.63086 6.2434ZM13.9539 6.55121H14.0414C13.9977 6.55121 13.9977 6.55121 13.9539 6.55121Z" fill="#F9FBFD"></path>
                    <path d="M21.8277 4.39692C19.5532 5.01256 17.2348 5.4523 14.7853 5.58422L14.5229 5.62819H14.4791L14.1729 5.71614C14.1292 5.71614 14.1292 5.71614 14.0854 5.71614L13.7792 5.84806L13.4293 6.02396H13.3856C13.3418 6.02396 13.2981 6.06793 13.2981 6.11191L13.1669 6.19986C13.1231 6.19986 13.0794 6.24383 13.0794 6.2878L12.9044 6.4637C12.8607 6.50768 12.8169 6.55165 12.8169 6.55165L12.642 6.77152C12.642 6.77152 12.5982 6.81549 12.5545 6.85947L12.3795 7.12331L12.3358 7.16729L12.1608 7.47511V7.51908C12.1608 7.56305 12.1171 7.56305 12.1608 7.56305L11.9858 7.91485C11.9858 7.91485 11.9421 7.95882 11.9421 8.00279L11.8546 8.35459V8.44254L11.7671 8.88228V8.92625L11.7234 9.40997L11.6796 9.98163L11.6359 10.3334L11.5484 10.7292L11.4609 11.125L11.3297 11.5647L11.1547 12.0484L10.7173 13.0598L10.4986 13.6315L10.1924 14.2031L9.88622 14.7748L9.53629 15.3465L9.18635 15.9181L8.79268 16.4898L8.57397 16.7976L8.09281 16.7097L6.47436 16.5338H6.43062L5.9932 16.4458L5.59952 15.4784L5.38082 14.8188L5.16211 14.2031L4.98714 13.5875L4.81217 12.9719L4.68095 12.4002L4.59346 11.8285L4.50598 11.3448L4.46224 10.7732L4.4185 10.2894V9.84971V9.45394L4.46224 9.05817L4.54972 8.57446V8.53048L4.59346 8.04677V7.56305C4.59346 7.51908 4.59346 7.47511 4.59346 7.47511V7.16729C4.59346 7.12331 4.59346 7.07934 4.59346 7.03536L4.54972 6.68357C4.54972 6.6396 4.54972 6.59562 4.54972 6.59562L4.46224 6.2878V6.24383L4.33101 5.89204L4.28727 5.80409L4.1123 5.49627V5.4523L3.89359 5.14448C3.84985 5.10051 3.84985 5.10051 3.84985 5.10051L3.67489 4.92461C3.63114 4.88064 3.5874 4.83666 3.5874 4.83666L3.41243 4.66076C3.36869 4.61679 3.32495 4.61679 3.32495 4.57282L3.0625 4.39692C5.33707 1.7145 8.70519 -0.000488281 12.5107 -0.000488281C16.185 0.0874599 19.5532 1.75847 21.8277 4.39692Z" fill="#869AB8"></path>
                    <path d="M36.1404 15.8219L31.9443 5.46912H35.0608L37.4542 11.9166L39.5318 5.46912H42.3631L38.6458 16.5683C38.1637 18.0179 37.6477 18.9916 37.0977 19.4892C36.5545 19.9868 35.7975 20.2356 34.8266 20.2356H33.5331V17.4987H34.8266C35.0303 17.4987 35.2339 17.4302 35.4376 17.2931C35.6481 17.1489 35.8824 16.6585 36.1404 15.8219Z" fill="#869AB8"></path>
                    <path d="M43.1881 5.46912H47.1906C48.406 5.46912 49.3463 5.5773 50.0117 5.79366C50.6839 6.01002 51.2474 6.50043 51.7023 7.2649C52.1573 8.02216 52.3847 8.96332 52.3847 10.0884C52.3847 11.1702 52.2014 12.0645 51.8347 12.7712C51.4681 13.478 50.9589 13.9901 50.3071 14.3074C49.662 14.6175 48.6674 14.7726 47.323 14.7726H46.2434V20.2356H43.1881V5.46912ZM46.2434 7.85989V12.2303H47.1906C48.0257 12.2303 48.5621 12.0248 48.7998 11.6137C49.0442 11.2026 49.1664 10.6689 49.1664 10.0127C49.1664 9.45734 49.0713 9.0102 48.8812 8.67123C48.6979 8.32506 48.4806 8.10509 48.2294 8.01134C47.985 7.91037 47.6387 7.85989 47.1906 7.85989H46.2434Z" fill="#869AB8"></path>
                    <path d="M55.8475 5.46912H58.9232L62.8952 20.2356H59.7685L59.076 17.185H55.1651L54.4827 20.2356H51.6718L55.8475 5.46912ZM58.4954 14.6536L57.1002 8.62796L55.7456 14.6536H58.4954Z" fill="#869AB8"></path>
                    <path d="M66.2662 20.2356H63.4451L67.2643 5.46912H70.6965L74.6685 20.2356H71.6335L68.8735 8.62796L66.2662 20.2356Z" fill="#869AB8"></path>
                    <path d="M75.7786 5.46912H79.7811C80.9965 5.46912 81.9369 5.5773 82.6022 5.79366C83.2744 6.01002 83.838 6.50043 84.2929 7.2649C84.7478 8.02216 84.9752 8.96332 84.9752 10.0884C84.9752 11.1702 84.7919 12.0645 84.4253 12.7712C84.0586 13.478 83.5494 13.9901 82.8976 14.3074C82.2526 14.6175 81.2579 14.7726 79.9135 14.7726H78.834V20.2356H75.7786V5.46912ZM78.834 7.85989V12.2303H79.7811C80.6163 12.2303 81.1526 12.0248 81.3903 11.6137C81.6347 11.2026 81.7569 10.6689 81.7569 10.0127C81.7569 9.45734 81.6619 9.0102 81.4718 8.67123C81.2884 8.32506 81.0712 8.10509 80.82 8.01134C80.5755 7.91037 80.2292 7.85989 79.7811 7.85989H78.834Z" fill="#869AB8"></path>
                    <path d="M86.452 5.46912H94.9052V8.00052H89.5074V11.4298H93.7034V13.972H89.5074V17.596H94.9052V20.2356H86.452V5.46912Z" fill="#869AB8"></path>
                    <path d="M95.669 17.542L98.6938 5.46912H102.615L105.355 17.542H106.22V23.2322H103.959L103.684 20.2356H97.3189L97.0541 23.2322H94.7931V17.542H95.669ZM98.4494 17.542H102.258L100.588 8.58469H100.201L98.4494 17.542Z" fill="#869AB8"></path>
                    <path d="M109.693 15.8219L105.497 5.46912H108.614L111.007 11.9166L113.085 5.46912H115.916L112.199 16.5683C111.716 18.0179 111.2 18.9916 110.65 19.4892C110.107 19.9868 109.35 20.2356 108.379 20.2356H107.086V17.4987H108.379C108.583 17.4987 108.787 17.4302 108.99 17.2931C109.201 17.1489 109.435 16.6585 109.693 15.8219Z" fill="#869AB8"></path>
                    <path d="M116.741 5.46912H119.796V11.6245L123.177 5.46912H126.263L122.78 10.8997L126.559 20.2356H123.402L120.957 13.4311L119.796 15.2161V20.2356H116.741V5.46912Z" fill="#869AB8"></path>
                    <path d="M126.202 5.46912H134.869V8.23852H132.028V20.2356H128.972V8.23852H126.202V5.46912Z" fill="#869AB8"></path>
                    <path d="M145.665 12.847C145.665 17.9242 143.984 20.4628 140.624 20.4628C138.953 20.4628 137.694 19.8173 136.845 18.5264C135.996 17.2282 135.572 15.3351 135.572 12.847C135.572 7.77695 137.253 5.24194 140.613 5.24194C142.257 5.24194 143.509 5.8766 144.371 7.1459C145.234 8.41521 145.665 10.3156 145.665 12.847ZM142.447 12.847C142.447 10.8565 142.301 9.53306 142.009 8.87677C141.717 8.21327 141.252 7.88152 140.613 7.88152C139.982 7.88152 139.52 8.21327 139.228 8.87677C138.936 9.54028 138.79 10.8637 138.79 12.847C138.79 14.7942 138.933 16.1104 139.218 16.7955C139.51 17.4806 139.975 17.8232 140.613 17.8232C141.245 17.8232 141.707 17.4951 141.998 16.8388C142.297 16.1825 142.447 14.8519 142.447 12.847Z" fill="#869AB8"></path>
                    <path d="M147.804 5.46912H151.806C153.022 5.46912 153.962 5.5773 154.627 5.79366C155.299 6.01002 155.863 6.50043 156.318 7.2649C156.773 8.02216 157 8.96332 157 10.0884C157 11.1702 156.817 12.0645 156.45 12.7712C156.084 13.478 155.574 13.9901 154.923 14.3074C154.278 14.6175 153.283 14.7726 151.939 14.7726H150.859V20.2356H147.804V5.46912ZM150.859 7.85989V12.2303H151.806C152.641 12.2303 153.178 12.0248 153.415 11.6137C153.66 11.2026 153.782 10.6689 153.782 10.0127C153.782 9.45734 153.687 9.0102 153.497 8.67123C153.314 8.32506 153.096 8.10509 152.845 8.01134C152.601 7.91037 152.254 7.85989 151.806 7.85989H150.859Z" fill="#869AB8"></path>
                </svg>                
            </a>
            <div class="choose-options-dropdown-wrapper header__choose-options-dropdown-wrapper" x-data="{toggleChooseOptionsDropdown: false}" x-on:click.outside="toggleChooseOptionsDropdown = false">
            <button class="choose-options-btn header__choose-options-btn" type="button" x-on:click="toggleChooseOptionsDropdown = true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 1V15M1 8H15" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
              <div class="choose-options-dropdown header__choose-options-dropdown" x-bind:class="{'active': toggleChooseOptionsDropdown === true}">
                <ul role="list" class="choose-options-dropdown__list header__choose-options-dropdown-list header__choose-options-dropdown-list--b-b header__choose-options-dropdown-list--p-b">
                    <li class="choose-options-dropdown__list-item header__choose-options-dropdown-list-item">
                        <button class="choose-options-dropdown__add-btn header__choose-options-dropdown-btn" type="button">
                            Cоздать проект
                        </button>
                    </li>
                    <li class="choose-options-dropdown__list-item header__choose-options-dropdown-list-item">
                        <button class="choose-options-dropdown__add-btn header__choose-options-dropdown-btn" type="button">
                            Создать компанию
                        </button>
                    </li>
                    <li class="choose-options-dropdown__list-item header__choose-options-dropdown-list-item">
                        <button class="choose-options-dropdown__add-btn header__choose-options-dropdown-btn" type="button">
                            Создать компанию
                        </button>
                    </li>
                    <li class="choose-options-dropdown__list-item header__choose-options-dropdown-list-item">
                        <button class="choose-options-dropdown__add-btn header__choose-options-dropdown-btn" type="button">
                            Создать контакт
                        </button>
                    </li>
                </ul>
                <ul role="list" class="choose-options-dropdown__list header__choose-options-dropdown-list header__choose-options-dropdown-list--p-t">
                    <li class="choose-options-dropdown__list-item header__choose-options-dropdown-list-item">
                        <button class="choose-options-dropdown__add-btn header__choose-options-dropdown-btn" type="button">
                            Новый пользователь
                        </button>
                    </li>
                </ul>
              </div>
            </div>
        </div>
        <div class="header__right">
            <button class="header__board-btn" type="button" x-on:click="eventsBoardPopup = true">
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 5H11M5 9H11M5 13H9M3 1H13C14.1046 1 15 1.89543 15 3V17C15 18.1046 14.1046 19 13 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
           <button class="header__notify-btn" type="button" x-on:click="notifyPopup = true">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 15V16C6 16.7956 6.31607 17.5587 6.87868 18.1213C7.44129 18.6839 8.20435 19 9 19C9.79565 19 10.5587 18.6839 11.1213 18.1213C11.6839 17.5587 12 16.7956 12 16V15M7 3C7 2.46957 7.21071 1.96086 7.58579 1.58579C7.96086 1.21071 8.46957 1 9 1C9.53043 1 10.0391 1.21071 10.4142 1.58579C10.7893 1.96086 11 2.46957 11 3C12.1484 3.54303 13.1274 4.38833 13.8321 5.4453C14.5367 6.50227 14.9404 7.73107 15 9V12C15.0753 12.6217 15.2954 13.2171 15.6428 13.7381C15.9902 14.2592 16.4551 14.6914 17 15H1C1.54494 14.6914 2.00981 14.2592 2.35719 13.7381C2.70457 13.2171 2.92474 12.6217 3 12V9C3.05956 7.73107 3.4633 6.50227 4.16795 5.4453C4.8726 4.38833 5.85159 3.54303 7 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                
           </button>
           <button class="header__calc-btn" type="button">
            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.44444 13.2222V13.2333M9.88889 13.2222V13.2333M14.3333 13.2222V13.2333M5.44444 16.5556V16.5667M9.88889 16.5556V16.5667M14.3333 16.5556V16.5667M3.22222 1H16.5556C17.7829 1 18.7778 1.99492 18.7778 3.22222V18.7778C18.7778 20.0051 17.7829 21 16.5556 21H3.22222C1.99492 21 1 20.0051 1 18.7778V3.22222C1 1.99492 1.99492 1 3.22222 1ZM6.55556 5.44444H13.2222C13.8359 5.44444 14.3333 5.94191 14.3333 6.55556V7.66667C14.3333 8.28032 13.8359 8.77778 13.2222 8.77778H6.55556C5.94191 8.77778 5.44444 8.28032 5.44444 7.66667V6.55556C5.44444 5.94191 5.94191 5.44444 6.55556 5.44444Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                          
           </button>
           <button class="header__avatar-btn" type="button" x-on:click="headerEnterAccountDropdown = !headerEnterAccountDropdown">
            <img class="header__avatar-btn-img" src="/images/header-avatar-placeholder.svg" alt="header avatar" width="36" height="36">
           </button>
        </div>
    </div>
    <div class="header-profile-dropdown" x-bind:class="{'active': headerProfileDropdown === true}">
    <div class="header-profile-dropdown__top">
        <div class="header-profile-dropdown__avatar">
            v
        </div>
        <div class="header-profile-dropdown__titles">
            <h2 class="header-profile-dropdown__title">
                vtr@uralreduktor.ru
            </h2>
            <h3 class="header-profile-dropdown__subtitle">
                vtr@uralreduktor.ru
            </h3>
        </div>
    </div>
    <ul class="header-profile-dropdown__list" role="list">
        <li class="header-profile-dropdown__list-item">
            <a href="#" class="header-profile-dropdown__list-link">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.88333 1.878C6.16733 0.707333 7.83267 0.707333 8.11667 1.878C8.15928 2.05387 8.24281 2.21719 8.36047 2.35467C8.47813 2.49215 8.62659 2.5999 8.79377 2.66916C8.96094 2.73843 9.14211 2.76723 9.32252 2.75325C9.50294 2.73926 9.6775 2.68287 9.832 2.58867C10.8607 1.962 12.0387 3.13933 11.412 4.16867C11.3179 4.3231 11.2616 4.49756 11.2477 4.67785C11.2337 4.85814 11.2625 5.03918 11.3317 5.20625C11.4009 5.37333 11.5085 5.52172 11.6458 5.63937C11.7831 5.75702 11.9463 5.8406 12.122 5.88333C13.2927 6.16733 13.2927 7.83267 12.122 8.11667C11.9461 8.15928 11.7828 8.24281 11.6453 8.36047C11.5079 8.47813 11.4001 8.62659 11.3308 8.79377C11.2616 8.96094 11.2328 9.14211 11.2468 9.32252C11.2607 9.50294 11.3171 9.6775 11.4113 9.832C12.038 10.8607 10.8607 12.0387 9.83133 11.412C9.6769 11.3179 9.50244 11.2616 9.32215 11.2477C9.14186 11.2337 8.96082 11.2625 8.79375 11.3317C8.62667 11.4009 8.47828 11.5085 8.36063 11.6458C8.24298 11.7831 8.1594 11.9463 8.11667 12.122C7.83267 13.2927 6.16733 13.2927 5.88333 12.122C5.84072 11.9461 5.75719 11.7828 5.63953 11.6453C5.52187 11.5079 5.37341 11.4001 5.20623 11.3308C5.03906 11.2616 4.85789 11.2328 4.67748 11.2468C4.49706 11.2607 4.3225 11.3171 4.168 11.4113C3.13933 12.038 1.96133 10.8607 2.588 9.83133C2.68207 9.6769 2.73837 9.50244 2.75232 9.32215C2.76628 9.14186 2.7375 8.96082 2.66831 8.79375C2.59913 8.62667 2.49151 8.47828 2.35418 8.36063C2.21686 8.24298 2.05371 8.1594 1.878 8.11667C0.707333 7.83267 0.707333 6.16733 1.878 5.88333C2.05387 5.84072 2.21719 5.75719 2.35467 5.63953C2.49215 5.52187 2.5999 5.37341 2.66916 5.20623C2.73843 5.03906 2.76723 4.85789 2.75325 4.67748C2.73926 4.49706 2.68287 4.3225 2.58867 4.168C1.962 3.13933 3.13933 1.96133 4.16867 2.588C4.83533 2.99333 5.69933 2.63467 5.88333 1.878Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>    
            Настройки   
            </a>        
        </li>
        <li class="header-profile-dropdown__list-item">
            <a href="#" class="header-profile-dropdown__list-link">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.66667 7V7.00667M1 13H13M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H8.66667M10.3333 8V13M8.33333 3.66667H13M13 3.66667L11 1.66667M13 3.66667L11 5.66667" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>    
            Выйти  
            </a>         
        </li>
    </ul>
</div>
    <div class="header-enter-account-dropdown" x-bind:class="{'active': headerEnterAccountDropdown === true}">
    <h2 class="header-enter-account-dropdown__title">Вход в аккаунт</h2>
    <form action="#" method="post" class="header-enter-account-dropdown__form">
        <fieldset class="header-enter-account-dropdown__fieldset b-b">
            <div class="header-enter-account-dropdown__form-control-group">
                <label for="enterAccountEmailLogin" class="header-enter-account-dropdown__form-control-group-label">
                  E-mail или логин
                </label>
                <div class="header-enter-account-dropdown__form-control-wrapper header-enter-account-dropdown__form-control-input-wrapper">
                  <input type="text" id="enterAccountEmailLogin" placeholder="Введите логин" class="header-enter-account-dropdown__form-control-input">
              </div>
            </div>
            <div class="header-enter-account-dropdown__form-control-group">
                <label for="enterAccountPassword" class="header-enter-account-dropdown__form-control-group-label">
                    Пароль
                </label>
                <div class="header-enter-account-dropdown__form-control-wrapper header-enter-account-dropdown__form-control-input-wrapper">
                  <input type="text" id="enterAccountPassword" placeholder="Введите пароль" class="header-enter-account-dropdown__form-control-input">
              </div>
            </div>
            <button type="button" class="header-enter-account-dropdown__sms-enter-btn">войти по смс</button>
            <button type="submit" class="btn btn--primary header-enter-account-dropdown__submit-btn">Войти</button>
        </fieldset>
        <div class="header-enter-account-dropdown__btn-group">
            <button type="button" class="header-enter-account-dropdown__reg-btn">Я здесь впервые</button>
            <button type="button" class="header-enter-account-dropdown__forgot-pass-btn">Забыли пароль?</button>
        </div>
    </form>
</div>
</header>
    <main class="main">
      <div class="container main__container">
      <aside class="aside-nav-menu" x-data="{url: '/taskPage.html'}">
<nav class="aside-nav-menu__nav">
    <ul role="list" class="aside-nav-menu__list">
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">
            <a href="/userPage" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">
                    <path d="M8.99966 15C9.31508 15.1377 9.65552 15.2087 9.99966 15.2087C10.3438 15.2087 10.6842 15.1377 10.9997 15M5.99966 9L7.99966 11M13.9997 9L11.9997 11M9.99967 1C5.33567 1 2.60367 3.331 2.13767 6.595C1.67013 9.6098 2.38679 12.6886 4.13767 15.187C4.98033 16.4188 6.06967 17.4622 7.33667 18.251C9.00267 19.251 11.0007 19.251 12.6667 18.251C13.9337 17.4622 15.023 16.4188 15.8657 15.187C17.6094 12.6854 18.3254 9.6095 17.8657 6.595C17.3997 3.33 14.6677 1 10.0037 1H9.99967Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="aside-nav-menu__list-item-title aside-nav-menu__list-item-title--name" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">Иван sdfdsfdsfds</span>          
            </a>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/eventsBoard.html' || url === '/eventsBoard'}">
            <a href="/eventsBoard" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/eventsBoard.html' || url === '/eventsBoard'}">
                    <path d="M6 15V16C6 16.7956 6.31607 17.5587 6.87868 18.1213C7.44129 18.6839 8.20435 19 9 19C9.79565 19 10.5587 18.6839 11.1213 18.1213C11.6839 17.5587 12 16.7956 12 16V15M7 3C7 2.46957 7.21071 1.96086 7.58579 1.58579C7.96086 1.21071 8.46957 1 9 1C9.53043 1 10.0391 1.21071 10.4142 1.58579C10.7893 1.96086 11 2.46957 11 3C12.1484 3.54303 13.1274 4.38833 13.8321 5.4453C14.5367 6.50227 14.9404 7.73107 15 9V12C15.0753 12.6217 15.2954 13.2171 15.6428 13.7381C15.9902 14.2592 16.4551 14.6914 17 15H1C1.54494 14.6914 2.00981 14.2592 2.35719 13.7381C2.70457 13.2171 2.92474 12.6217 3 12V9C3.05956 7.73107 3.4633 6.50227 4.16795 5.4453C4.8726 4.38833 5.85159 3.54303 7 3Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': url === '/eventsBoard.html' || url === '/eventsBoard'}">Лента событий</span>          
            </a>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/taskPage.html' || url === '/taskPage'}">
            <a href="/taskPage" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1H16M5 7H16M5 13H16M1 1V1.01M1 7V7.01M1 13V13.01" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                  
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': url === '/tasksPage.html' || url === '/tasksPage'}">Задачи</span>          
            </a>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/feedbackPage.html' || url === '/feedbackPage'}">
            <a href="/feedbackPage" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '' || url === ''}">
                    <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': url === '/feedbackPage.html' || url === '/feedbackPage'}">Обратная связь</span>          
            </a>
            <span class="aside-nav-menu__indicator-new blinking"></span>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/emailPage.html' || url === '/emailPage'}">
            <a href="/emailPage" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '' || url === ''}">
                    <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': url === '/emailPage.html' || url === '/emailPage'}">Почта</span>          
            </a>
        </li>
    </ul>
    <ul role="list" class="aside-nav-menu__list">
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/orders.html' || url === '/orders'}">
            <a href="/orders" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/orders.html' || url === '/orders'}">
                    <path d="M16 7H16.01M4 7H4.01M13 7C13 8.65685 11.6569 10 10 10C8.34315 10 7 8.65685 7 7C7 5.34315 8.34315 4 10 4C11.6569 4 13 5.34315 13 7ZM3 1H17C18.1046 1 19 1.89543 19 3V11C19 12.1046 18.1046 13 17 13H3C1.89543 13 1 12.1046 1 11V3C1 1.89543 1.89543 1 3 1Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> 
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': url === '/orders.html' || url === '/orders'}">Заказы</span>          
            </a>
            <span class="aside-nav-menu__indicator-new blinking"></span>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/financesPage.html' || url === '/financesPage'}">
            <a href="/financesPage" class="aside-nav-menu__list-link">
                <svg x-bind:class="{'active': url === '/financesPage.html' || url === '/financesPage' }" class="aside-nav-menu__list-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 4C17 5.65685 13.4183 7 9 7C4.58172 7 1 5.65685 1 4M17 4C17 2.34315 13.4183 1 9 1C4.58172 1 1 2.34315 1 4M17 4V10M1 4V10M1 10C1 10.7956 1.84285 11.5587 3.34315 12.1213C4.84344 12.6839 6.87827 13 9 13C11.1217 13 13.1566 12.6839 14.6569 12.1213C16.1571 11.5587 17 10.7956 17 10M1 10V16C1 16.7956 1.84285 17.5587 3.34315 18.1213C4.84344 18.6839 6.87827 19 9 19C11.1217 19 13.1566 18.6839 14.6569 18.1213C16.1571 17.5587 17 16.7956 17 16V10" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    <span x-bind:class="{'active': url === '/financesPage.html' || url === '/financesPage'}" class="aside-nav-menu__list-item-title">Финансы</span>          
            </a>
        </li>
        <!-- <li class="aside-nav-menu__list-item" x-bind:class="{'active': toggleSubMenu === true }" x-data="{toggleSubMenu: false}">
            <a class="aside-nav-menu__list-link" x-on:click="toggleSubMenu = !toggleSubMenu">
                <svg class="aside-nav-menu__list-icon" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleSubMenu === true }">
                    <path d="M10 1V5C10 5.26522 10.1054 5.51957 10.2929 5.70711C10.4804 5.89464 10.7348 6 11 6H15M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V17C1 17.5304 1.21071 18.0391 1.58579 18.4142C1.96086 18.7893 2.46957 19 3 19H13C13.5304 19 14.0391 18.7893 14.4142 18.4142C14.7893 18.0391 15 17.5304 15 17V6M10 1L15 6M5 7H6M5 11H11M5 15H11" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                 
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': toggleSubMenu === true }">Документы</span>          
            </a>
            <ul role="list" x-bind:class="{'active': toggleSubMenu === true }" class="aside-nav-menu__sublist" x-show="toggleSubMenu === true" x-collapse.duration.750ms>
                <li class="aside-nav-menu__sublist-item">
                    <a href="#" class="aside-nav-menu__sublist-item-link">Документы</a>
                </li>
                <li class="aside-nav-menu__sublist-item">
                    <a href="#" class="aside-nav-menu__sublist-item-link">Документы</a>
                </li>
            </ul>
            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="aside-nav-menu__list-item-submenu-arrow" x-bind:class="{'active': toggleSubMenu === true}">
                <path d="M5 1L1 5L5 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                    
        </li> -->
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/contragentsPage.html' || url === '/contragentsPage'}">
            <a href="/contragentsPage" class="aside-nav-menu__list-link">
                <svg x-bind:class="{'active': url === '/contragentsPage.html' || url === '/contragentsPage'}" class="aside-nav-menu__list-icon" width="18" height="21" viewBox="0 0 8 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 20V15L1 14V10C1 9.73478 1.10536 9.48043 1.29289 9.29289C1.48043 9.10536 1.73478 9 2 9H6C6.26522 9 6.51957 9.10536 6.70711 9.29289C6.89464 9.48043 7 9.73478 7 10V14L6 15V20M6 3C6 4.10457 5.10457 5 4 5C2.89543 5 2 4.10457 2 3C2 1.89543 2.89543 1 4 1C5.10457 1 6 1.89543 6 3Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="aside-nav-menu__list-item-title" x-bind:class="{'active': url === '/contragentsPage.html' || url === '/contragentsPage'}">Контрагенты</span>          
            </a>
        </li>
    </ul>
    <ul role="list" class="aside-nav-menu__list">
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/goodsPage.html' || url === '/goodsPage'}">
            <a href="/goodsPage" class="aside-nav-menu__list-link">
                <svg x-bind:class="{'active': url === '/goodsPage.html' || url === '/goodsPage'}" class="aside-nav-menu__list-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 4C17 5.65685 13.4183 7 9 7C4.58172 7 1 5.65685 1 4M17 4C17 2.34315 13.4183 1 9 1C4.58172 1 1 2.34315 1 4M17 4V10M1 4V10M1 10C1 10.7956 1.84285 11.5587 3.34315 12.1213C4.84344 12.6839 6.87827 13 9 13C11.1217 13 13.1566 12.6839 14.6569 12.1213C16.1571 11.5587 17 10.7956 17 10M1 10V16C1 16.7956 1.84285 17.5587 3.34315 18.1213C4.84344 18.6839 6.87827 19 9 19C11.1217 19 13.1566 18.6839 14.6569 18.1213C16.1571 17.5587 17 16.7956 17 16V10" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> 
                    <span x-bind:class="{'active': url === '/goodsPage.html' || url === '/goodsPage'}" class="aside-nav-menu__list-item-title">Товары</span>          
            </a>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/filesPage.html' || url === '/filesPage'}">
            <a href="/filesPage" class="aside-nav-menu__list-link">
                <svg class="aside-nav-menu__list-icon" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/filesPage.html' || url === '/filesPage' }">
                    <path d="M10 1V5C10 5.26522 10.1054 5.51957 10.2929 5.70711C10.4804 5.89464 10.7348 6 11 6H15M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V17C1 17.5304 1.21071 18.0391 1.58579 18.4142C1.96086 18.7893 2.46957 19 3 19H13C13.5304 19 14.0391 18.7893 14.4142 18.4142C14.7893 18.0391 15 17.5304 15 17V6M10 1L15 6M5 7H6M5 11H11M5 15H11" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>   
                    <span x-bind:class="{'active': url === '/filesPage.html' || url === '/filesPage'}" class="aside-nav-menu__list-item-title">Файлы</span>          
            </a>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}">
            <a href="/usersPage" class="aside-nav-menu__list-link" x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}">
                <svg class="aside-nav-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}">
                    <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                                                     
                    <span x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}" class="aside-nav-menu__list-item-title">Пользователи</span>          
            </a>
        </li>
    </ul>
    <ul role="list" class="aside-nav-menu__list">
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}">
            <a href="/settingsPage" class="aside-nav-menu__list-link" x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}">
                <svg x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}" class="aside-nav-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.325 2.317C8.751 0.561 11.249 0.561 11.675 2.317C11.7389 2.5808 11.8642 2.82578 12.0407 3.032C12.2172 3.23822 12.4399 3.39985 12.6907 3.50375C12.9414 3.60764 13.2132 3.65085 13.4838 3.62987C13.7544 3.60889 14.0162 3.5243 14.248 3.383C15.791 2.443 17.558 4.209 16.618 5.753C16.4769 5.98466 16.3924 6.24634 16.3715 6.51677C16.3506 6.78721 16.3938 7.05877 16.4975 7.30938C16.6013 7.55999 16.7627 7.78258 16.9687 7.95905C17.1747 8.13553 17.4194 8.26091 17.683 8.325C19.439 8.751 19.439 11.249 17.683 11.675C17.4192 11.7389 17.1742 11.8642 16.968 12.0407C16.7618 12.2172 16.6001 12.4399 16.4963 12.6907C16.3924 12.9414 16.3491 13.2132 16.3701 13.4838C16.3911 13.7544 16.4757 14.0162 16.617 14.248C17.557 15.791 15.791 17.558 14.247 16.618C14.0153 16.4769 13.7537 16.3924 13.4832 16.3715C13.2128 16.3506 12.9412 16.3938 12.6906 16.4975C12.44 16.6013 12.2174 16.7627 12.0409 16.9687C11.8645 17.1747 11.7391 17.4194 11.675 17.683C11.249 19.439 8.751 19.439 8.325 17.683C8.26108 17.4192 8.13578 17.1742 7.95929 16.968C7.7828 16.7618 7.56011 16.6001 7.30935 16.4963C7.05859 16.3924 6.78683 16.3491 6.51621 16.3701C6.24559 16.3911 5.98375 16.4757 5.752 16.617C4.209 17.557 2.442 15.791 3.382 14.247C3.5231 14.0153 3.60755 13.7537 3.62848 13.4832C3.64942 13.2128 3.60624 12.9412 3.50247 12.6906C3.3987 12.44 3.23726 12.2174 3.03127 12.0409C2.82529 11.8645 2.58056 11.7391 2.317 11.675C0.561 11.249 0.561 8.751 2.317 8.325C2.5808 8.26108 2.82578 8.13578 3.032 7.95929C3.23822 7.7828 3.39985 7.56011 3.50375 7.30935C3.60764 7.05859 3.65085 6.78683 3.62987 6.51621C3.60889 6.24559 3.5243 5.98375 3.383 5.752C2.443 4.209 4.209 2.442 5.753 3.382C6.753 3.99 8.049 3.452 8.325 2.317Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    <span x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}" class="aside-nav-menu__list-item-title">Настройки</span>          
            </a>
        </li>
        <li class="aside-nav-menu__list-item" x-bind:class="{'active': url === '/login.html' || url === '/login'}">
            <a href="/login" class="aside-nav-menu__list-link" x-bind:class="{'active': url === '/login.html' || url === '/login'}">
                <svg class="aside-nav-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/login.html' || url === '/login'}">
                    <path d="M11 10V10.01M1 19H19M3 19V3C3 2.46957 3.21071 1.96086 3.58579 1.58579C3.96086 1.21071 4.46957 1 5 1H12.5M15 11.5V19M12 5H19M19 5L16 2M19 5L16 8" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                
                    <span x-bind:class="{'active': url === '/login.html' || url === '/login'}" class="aside-nav-menu__list-item-title">Выйти</span>          
            </a>
        </li>
    </ul>
</nav>
</aside>
      <section class="site-section task-page__site-section" x-data="{createTaskPopup: false, editTaskPopup: false, searchBtnDropdown: false }">
    <div class="site-section__top-row task-page__top-row mobile">
        <h2 class="site-section__title task-page__title">Задачи</h2>
        <button class="btn btn--primary site-section__create-order-btn task-page__create-task-btn" type="button" x-on:click="editTaskPopup = true">
            Создать
          </button>
      </div>
    <div class="site-section__body task-page__body">
        <div class="site-section__top-row task-page__top-row desktop">
            <h2 class="site-section__title task-page__title">Задачи</h2>
            <button class="btn btn--primary site-section__create-order-btn task-page__create-task-btn" type="button" x-on:click="editTaskPopup = true">
                Создать
              </button>
          </div>
          <div class="site-section__body-bottom task-page__body-bottom mobile">
              <div class="site-section__body-bottom-left-group task-page__body-bottom-left-group">
              <button type="button" class="site-section__search-btn" x-on:click="searchBtnDropdown = !searchBtnDropdown">
    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M25 25L17 17M19.6667 10.3333C19.6667 15.488 15.488 19.6667 10.3333 19.6667C5.17868 19.6667 1 15.488 1 10.3333C1 5.17868 5.17868 1 10.3333 1C15.488 1 19.6667 5.17868 19.6667 10.3333Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>           
</button>
              <div class="site-section__search-btn-dropdown" x-bind:class="{'active': searchBtnDropdown === true}">
    <input type="text" class="site-section__search-btn-dropdown-search-input">
    <ul role="list" class="site-section__search-btn-dropdown-list">
        <li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Результат поиска" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Документы" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Документы" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Документы" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Документы" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Документы" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Документы" x-on:click="searchBtnDropdown = false">
                </li><li class="site-section__search-btn-dropdown-list-item">
                <input readonly class="site-section__search-btn-dropdown-list-item-input" value="Результат поиска" x-on:click="searchBtnDropdown = false">
                </li>
    </ul>
</div>
              </div>
              <div class="site-section__body-bottom-right-group task-page__body-bottom-right-group">
                <div class="choose-options-dropdown-wrapper task-page__choose-options-dropdown-wrapper" x-data="{toggleChooseOptionsDropdown: false}" x-on:click.outside="toggleChooseOptionsDropdown = false">
                    <button class="choose-options-btn task-page__choose-options-btn" type="button" x-on:click="toggleChooseOptionsDropdown = true">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 1V15M1 8H15" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                    
                    </button>
                      <div class="choose-options-dropdown task-page__choose-options-dropdown" x-bind:class="{'active': toggleChooseOptionsDropdown === true}">
                        <ul role="list" class="choose-options-dropdown__list task-page__choose-options-dropdown-list task-page__choose-options-dropdown-list--b-b task-page__choose-options-dropdown-list--p-b">
                            <li class="choose-options-dropdown__list-item task-page__choose-options-dropdown-list-item">
                                <button class="choose-options-dropdown__add-btn task-page__choose-options-dropdown-btn" type="button">
                                    Cоздать проект
                                </button>
                            </li>
                            <li class="choose-options-dropdown__list-item task-page__choose-options-dropdown-list-item">
                                <button class="choose-options-dropdown__add-btn task-page__choose-options-dropdown-btn" type="button">
                                    Создать компанию
                                </button>
                            </li>
                            <li class="choose-options-dropdown__list-item task-page__choose-options-dropdown-list-item">
                                <button class="choose-options-dropdown__add-btn task-page__choose-options-dropdown-btn" type="button">
                                    Создать компанию
                                </button>
                            </li>
                            <li class="choose-options-dropdown__list-item task-page__choose-options-dropdown-list-item">
                                <button class="choose-options-dropdown__add-btn task-page__choose-options-dropdown-btn" type="button">
                                    Создать контакт
                                </button>
                            </li>
                        </ul>
                        <ul role="list" class="choose-options-dropdown__list task-page__choose-options-dropdown-list task-page__choose-options-dropdown-list--p-t">
                            <li class="choose-options-dropdown__list-item task-page__choose-options-dropdown-list-item">
                                <button class="choose-options-dropdown__add-btn task-page__choose-options-dropdown-btn" type="button">
                                    Новый пользователь
                                </button>
                            </li>
                        </ul>
                      </div>
                </div>
                <div class="site-section__search-form" x-data="{search: '', toggleDropdown: false}" x-on:click.outside="$refs.sectionSearchFormDropdown.classList.remove('active')">
    <button type="submit" class="site-section__search-form-submit-btn">
      <svg class="site-section__search-form-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#7C69EF"></path>
        </svg>         
    </button>
    <input class="site-section__search-form-input" type="text" name="orderSearchInput" id="orderSearchInput" placeholder="Найти..." x-model.debounce.500ms="search">
    <div class="site-section__search-form-dropdown" x-bind:class="{'active': search.length > 2}" x-ref="sectionSearchFormDropdown">
      <ul role="list" class="site-section__search-form-dropdown-list">
        <template x-for="i in 5">
          <li class="site-section__search-form-dropdown-list-item">
            <input type="text" readonly class="site-section__search-form-dropdown-list-item-input" value="Результат поиска" x-on:click="$refs.sectionSearchFormDropdown.classList.remove('active')">
         </li>
        </template>
      </ul>
    </div>
</div>
                <div x-data="{toggleDropdown: false }" x-on:click.outside="toggleDropdown = false" class="site-section__filter-btn-wrapper">
    <button class="btn site-section__filter-btn" type="button" x-on:click="toggleDropdown = !toggleDropdown">
      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.50011 1H15.5001C15.6441 1.05051 15.7747 1.13331 15.8817 1.24206C15.9888 1.35082 16.0696 1.48264 16.1178 1.62742C16.1661 1.77221 16.1806 1.92612 16.1602 2.07737C16.1398 2.22861 16.085 2.37318 16.0001 2.5L11.0001 8V15L7.00011 12V8L2.00011 2.5C1.9152 2.37318 1.86044 2.22861 1.84004 2.07737C1.81963 1.92612 1.83411 1.77221 1.88237 1.62742C1.93063 1.48264 2.01139 1.35082 2.11847 1.24206C2.22554 1.13331 2.35609 1.05051 2.50011 1Z" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>            
    </button>
     <form class="site-section__filter-dropdown" action="#" method="post" x-bind:class="{'active': toggleDropdown === true }" x-data="{inputVal: 'По умолчанию'}">
     <ul role="list" class="site-section__filter-dropdown-list">
       <li class="site-section__filter-dropdown-list-item">
          <button type="button" class="site-section__filter-dropdown-add-new-filter-btn" x-on:click="addNewFilterPopup = true">
            <svg class="site-section__filter-dropdown-add-new-filter-btn-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 1V15M1 8H15" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
            Новый фильтр
          </button>
       </li>
       <li class="site-section__filter-dropdown-list-item">
        <input type="text" class="site-section__filter-dropdown-list-item-input" value="Статус" readonly x-on:click="inputVal = 'Статус'">
     </li>
     <li class="site-section__filter-dropdown-list-item">
        <input type="text" class="site-section__filter-dropdown-list-item-input" value="Ответственный" readonly x-on:click="inputVal = 'Ответственный'">
     </li>
     </ul>
     <fieldset class="site-section__filter-dropdown-fieldset">
         <input type="text" value="По умолчанию" class="site-section__filter-dropdown-input-def" x-model="inputVal" readonly x-ref="defInput">
         <div class="site-section__filter-dropdown-fieldset-btn-group">
           <button class="site-section__filter-dropdown-edit-btn" type="button" x-on:click="$refs.defInput.removeAttribute('readonly');$refs.defInput.focus()">
            <svg class="site-section__filter-dropdown-edit-btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 3.5L14.5 7.5M1 17.0001H5L15.5 6.50006C16.0304 5.96963 16.3284 5.2502 16.3284 4.50006C16.3284 3.74991 16.0304 3.03049 15.5 2.50006C14.9696 1.96963 14.2501 1.67163 13.5 1.67163C12.7499 1.67163 12.0304 1.96963 11.5 2.50006L1 13.0001V17.0001Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                                 
           </button>
           <button class="site-section__filter-dropdown-favorite-btn" type="button">
              <svg class="site-section__filter-dropdown-favorite-btn-icon" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.9998 16.75L4.82784 19.995L6.00684 13.122L1.00684 8.25495L7.90684 7.25495L10.9928 1.00195L14.0788 7.25495L20.9788 8.25495L15.9788 13.122L17.1578 19.995L10.9998 16.75Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                                                   
           </button>
           <button class="site-section__filter-dropdown-trash-btn" type="button">
            <svg class="site-section__filter-dropdown-trash-btn-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 5H17M7 9V15M11 9V15M2 5L3 17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19H13C13.5304 19 14.0391 18.7893 14.4142 18.4142C14.7893 18.0391 15 17.5304 15 17L16 5M6 5V2C6 1.73478 6.10536 1.48043 6.29289 1.29289C6.48043 1.10536 6.73478 1 7 1H11C11.2652 1 11.5196 1.10536 11.7071 1.29289C11.8946 1.48043 12 1.73478 12 2V5" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
           </button>
         </div>
     </fieldset>
    </form>
</div>
<div class="site-section__choose-options-btn-wrapper" x-data="{ toggleDropdown: false, btn0: false, btn1: false,btn2: false,btn3: false,btn4: false, btn5: false }" x-on:click.outside="toggleDropdown = false" x-bind:class="{'active': btn0 === true || btn1 === true || btn2 === true || btn3 === true || btn4 === true || btn5 === true}">
<ul role="list" class="site-section__filter-tag-list">
      <li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn0 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Статус</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn0 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn1 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Организация</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn1 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn2 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 1</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn2 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn3 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 2</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn3 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn4 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 3</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn4 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn5 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 4</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn5 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li>
</ul>
    <button class="choose-options-btn site-section__choose-options-btn" type="button" x-on:click="toggleDropdown = !toggleDropdown">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 1V15M1 8H15" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>                    
    </button>
    <form action="#" method="post" class="site-section__choose-options-btn-dropdown" x-bind:class="{'active': toggleDropdown === true}">
     <ul role="list" class="site-section__choose-options-btn-dropdown-list">
      <li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Статус" x-on:click="btn0 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Организация" x-on:click="btn1 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 1" x-on:click="btn2 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 2" x-on:click="btn3 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 3" x-on:click="btn4 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 4" x-on:click="btn5 = true">
        </li>
     </ul>
    </form>
</div>
                <div class="task-page__group-btn-wrapper" x-data="{toggleDropdown: false, inputVal: 'Группировка' }" x-on:click.outside="toggleDropdown = false">
                <button type="button" class="btn btn--secondary task-page__group-btn" x-on:click="toggleDropdown = !toggleDropdown" x-bind:class="{'active': toggleDropdown === true }">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H17M1 7H17M1 13H13" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> 
                 <p class="task-page__group-btn-title" x-show="toggleDropdown === true" x-text="inputVal"></p>
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-icon-close" x-show="toggleDropdown === true">
                    <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg> 
                </button>
                 <div class="task-page__group-btn-dropdown" x-bind:class="{'active': toggleDropdown === true }">
                    <ul role="list" class="task-page__group-btn-dropdown-list">
                        <li class="task-page__group-btn-dropdown-list-item" x-bind:class="{'active': inputVal === 'По контрагентам'}">
                            <input type="text" readonly class="task-page__group-btn-dropdown-list-item-input" x-on:click="inputVal = 'По контрагентам';toggleDropdown = false" value="По контрагентам" x-bind:class="{'active': inputVal === 'По контрагентам'}">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-dropdown-list-item-close-icon" x-show="inputVal === 'По контрагентам'" x-on:click="inputVal = 'Группировка';toggleDropdown = false">
                                <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                        </li>
                        <li class="task-page__group-btn-dropdown-list-item" x-bind:class="{'active': inputVal === 'По ответственным'}">
                            <input type="text" readonly class="task-page__group-btn-dropdown-list-item-input" x-on:click="inputVal = 'По ответственным';toggleDropdown = false" value="По ответственным" x-bind:class="{'active': inputVal === 'По ответственным'}">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-dropdown-list-item-close-icon" x-show="inputVal === 'По ответственным'" x-on:click="inputVal = 'Группировка';toggleDropdown = false">
                                <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                        </li>
                        <li class="task-page__group-btn-dropdown-list-item" x-bind:class="{'active': inputVal === 'По статусу'}">
                            <input type="text" readonly class="task-page__group-btn-dropdown-list-item-input" x-on:click="inputVal = 'По статусу';toggleDropdown = false" value="По статусу " x-bind:class="{'active': inputVal === 'По статусу '}">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-dropdown-list-item-close-icon" x-show="inputVal === 'По статусу'" x-on:click="inputVal = 'Группировка';toggleDropdown = false">
                                <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                        </li>
                    </ul>
                 </div>
                </div>
              </div>    
          </div>
          <div class="site-section__body-bottom task-page__body-bottom desktop">
            <div class="site-section__body-bottom-left-group task-page__body-bottom-left-group">
                <div class="site-section__search-form" x-data="{search: '', toggleDropdown: false}" x-on:click.outside="$refs.sectionSearchFormDropdown.classList.remove('active')">
    <button type="submit" class="site-section__search-form-submit-btn">
      <svg class="site-section__search-form-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#7C69EF"></path>
        </svg>         
    </button>
    <input class="site-section__search-form-input" type="text" name="orderSearchInput" id="orderSearchInput" placeholder="Найти..." x-model.debounce.500ms="search">
    <div class="site-section__search-form-dropdown" x-bind:class="{'active': search.length > 2}" x-ref="sectionSearchFormDropdown">
      <ul role="list" class="site-section__search-form-dropdown-list">
        <template x-for="i in 5">
          <li class="site-section__search-form-dropdown-list-item">
            <input type="text" readonly class="site-section__search-form-dropdown-list-item-input" value="Результат поиска" x-on:click="$refs.sectionSearchFormDropdown.classList.remove('active')">
         </li>
        </template>
      </ul>
    </div>
</div>
                <div x-data="{toggleDropdown: false }" x-on:click.outside="toggleDropdown = false" class="site-section__filter-btn-wrapper">
    <button class="btn site-section__filter-btn" type="button" x-on:click="toggleDropdown = !toggleDropdown">
      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.50011 1H15.5001C15.6441 1.05051 15.7747 1.13331 15.8817 1.24206C15.9888 1.35082 16.0696 1.48264 16.1178 1.62742C16.1661 1.77221 16.1806 1.92612 16.1602 2.07737C16.1398 2.22861 16.085 2.37318 16.0001 2.5L11.0001 8V15L7.00011 12V8L2.00011 2.5C1.9152 2.37318 1.86044 2.22861 1.84004 2.07737C1.81963 1.92612 1.83411 1.77221 1.88237 1.62742C1.93063 1.48264 2.01139 1.35082 2.11847 1.24206C2.22554 1.13331 2.35609 1.05051 2.50011 1Z" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>            
    </button>
     <form class="site-section__filter-dropdown" action="#" method="post" x-bind:class="{'active': toggleDropdown === true }" x-data="{inputVal: 'По умолчанию'}">
     <ul role="list" class="site-section__filter-dropdown-list">
       <li class="site-section__filter-dropdown-list-item">
          <button type="button" class="site-section__filter-dropdown-add-new-filter-btn" x-on:click="addNewFilterPopup = true">
            <svg class="site-section__filter-dropdown-add-new-filter-btn-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 1V15M1 8H15" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
            Новый фильтр
          </button>
       </li>
       <li class="site-section__filter-dropdown-list-item">
        <input type="text" class="site-section__filter-dropdown-list-item-input" value="Статус" readonly x-on:click="inputVal = 'Статус'">
     </li>
     <li class="site-section__filter-dropdown-list-item">
        <input type="text" class="site-section__filter-dropdown-list-item-input" value="Ответственный" readonly x-on:click="inputVal = 'Ответственный'">
     </li>
     </ul>
     <fieldset class="site-section__filter-dropdown-fieldset">
         <input type="text" value="По умолчанию" class="site-section__filter-dropdown-input-def" x-model="inputVal" readonly x-ref="defInput">
         <div class="site-section__filter-dropdown-fieldset-btn-group">
           <button class="site-section__filter-dropdown-edit-btn" type="button" x-on:click="$refs.defInput.removeAttribute('readonly');$refs.defInput.focus()">
            <svg class="site-section__filter-dropdown-edit-btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 3.5L14.5 7.5M1 17.0001H5L15.5 6.50006C16.0304 5.96963 16.3284 5.2502 16.3284 4.50006C16.3284 3.74991 16.0304 3.03049 15.5 2.50006C14.9696 1.96963 14.2501 1.67163 13.5 1.67163C12.7499 1.67163 12.0304 1.96963 11.5 2.50006L1 13.0001V17.0001Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                                 
           </button>
           <button class="site-section__filter-dropdown-favorite-btn" type="button">
              <svg class="site-section__filter-dropdown-favorite-btn-icon" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.9998 16.75L4.82784 19.995L6.00684 13.122L1.00684 8.25495L7.90684 7.25495L10.9928 1.00195L14.0788 7.25495L20.9788 8.25495L15.9788 13.122L17.1578 19.995L10.9998 16.75Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                                                   
           </button>
           <button class="site-section__filter-dropdown-trash-btn" type="button">
            <svg class="site-section__filter-dropdown-trash-btn-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 5H17M7 9V15M11 9V15M2 5L3 17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19H13C13.5304 19 14.0391 18.7893 14.4142 18.4142C14.7893 18.0391 15 17.5304 15 17L16 5M6 5V2C6 1.73478 6.10536 1.48043 6.29289 1.29289C6.48043 1.10536 6.73478 1 7 1H11C11.2652 1 11.5196 1.10536 11.7071 1.29289C11.8946 1.48043 12 1.73478 12 2V5" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
           </button>
         </div>
     </fieldset>
    </form>
</div>
<div class="site-section__choose-options-btn-wrapper" x-data="{ toggleDropdown: false, btn0: false, btn1: false,btn2: false,btn3: false,btn4: false, btn5: false }" x-on:click.outside="toggleDropdown = false" x-bind:class="{'active': btn0 === true || btn1 === true || btn2 === true || btn3 === true || btn4 === true || btn5 === true}">
<ul role="list" class="site-section__filter-tag-list">
      <li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn0 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Статус</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn0 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn1 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Организация</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn1 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn2 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 1</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn2 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn3 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 2</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn3 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn4 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 3</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn4 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li><li class="site-section__filter-tag-list-item" x-bind:class="{'active': btn5 === true }">
      <input class="site-section__filter-tag-list-input" readonly>
      <button type="button" class="btn btn--secondary site-section__filter-tag-list-btn">
          <span class="site-section__filter-tag-list-btn-text">Документы 4</span>
          <svg class="site-section__filter-tag-list-btn-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" x-on:click="btn5 = false">
            <path d="M9 1L1 9M1 1L9 9" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </button>
      </li>
</ul>
    <button class="choose-options-btn site-section__choose-options-btn" type="button" x-on:click="toggleDropdown = !toggleDropdown">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 1V15M1 8H15" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>                    
    </button>
    <form action="#" method="post" class="site-section__choose-options-btn-dropdown" x-bind:class="{'active': toggleDropdown === true}">
     <ul role="list" class="site-section__choose-options-btn-dropdown-list">
      <li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Статус" x-on:click="btn0 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Организация" x-on:click="btn1 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 1" x-on:click="btn2 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 2" x-on:click="btn3 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 3" x-on:click="btn4 = true">
        </li><li class="site-section__choose-options-btn-dropdown-list-item">
          <input type="text" readonly value="Документы 4" x-on:click="btn5 = true">
        </li>
     </ul>
    </form>
</div>
            </div>
            <div class="task-page__group-btn-wrapper" x-data="{toggleDropdown: false, inputVal: 'Группировка' }" x-on:click.outside="toggleDropdown = false">
                <button type="button" class="btn btn--secondary task-page__group-btn" x-on:click="toggleDropdown = !toggleDropdown">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H17M1 7H17M1 13H13" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> 
                 <p class="task-page__group-btn-title" x-text="inputVal"></p>
                </button>
                 <div class="task-page__group-btn-dropdown" x-bind:class="{'active': toggleDropdown === true }">
                    <ul role="list" class="task-page__group-btn-dropdown-list">
                        <li class="task-page__group-btn-dropdown-list-item" x-bind:class="{'active': inputVal === 'По контрагентам'}">
                            <input type="text" readonly class="task-page__group-btn-dropdown-list-item-input" x-on:click="inputVal = 'По контрагентам';toggleDropdown = false" value="По контрагентам" x-bind:class="{'active': inputVal === 'По контрагентам'}">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-dropdown-list-item-close-icon" x-show="inputVal === 'По контрагентам'" x-on:click="inputVal = 'Группировка';toggleDropdown = false">
                                <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                        </li>
                        <li class="task-page__group-btn-dropdown-list-item" x-bind:class="{'active': inputVal === 'По ответственным'}">
                            <input type="text" readonly class="task-page__group-btn-dropdown-list-item-input" x-on:click="inputVal = 'По ответственным';toggleDropdown = false" value="По ответственным" x-bind:class="{'active': inputVal === 'По ответственным'}">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-dropdown-list-item-close-icon" x-show="inputVal === 'По ответственным'" x-on:click="inputVal = 'Группировка';toggleDropdown = false">
                                <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                        </li>
                        <li class="task-page__group-btn-dropdown-list-item" x-bind:class="{'active': inputVal === 'По статусу'}">
                            <input type="text" readonly class="task-page__group-btn-dropdown-list-item-input" x-on:click="inputVal = 'По статусу';toggleDropdown = false" value="По статусу " x-bind:class="{'active': inputVal === 'По статусу '}">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="task-page__group-btn-dropdown-list-item-close-icon" x-show="inputVal === 'По статусу'" x-on:click="inputVal = 'Группировка';toggleDropdown = false">
                                <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                        </li>
                    </ul>
                 </div>
            </div>
          </div>
            <ul role="list" class="task-page__status-tabs">
                <li class="task-page__status-tabs-item">
                    <button type="button" class="task-page__status-tabs-item-btn">
                        <span class="task-page__status-tabs-item-btn-count danger">29</span>
                        просрочены
                    </button>
                </li>
                <li class="task-page__status-tabs-item">
                    <button type="button" class="task-page__status-tabs-item-btn">
                        <span class="task-page__status-tabs-item-btn-count green">1</span>
                        на сегодня
                    </button>
                </li>
                <li class="task-page__status-tabs-item">
                    <button type="button" class="task-page__status-tabs-item-btn">
                        <span class="task-page__status-tabs-item-btn-count blue">29</span>
                        Дела на завтра
                    </button>
                </li>
            </ul>
            <div class="task-page__grid mobile" x-data="{tableLists: [] }">
            <div class="site-section__table-wrapper task-page__table-wrapper">
    <nav class="site-section__table task-page__table">
      <ul role="list" class="site-section__table-list site-section__table-caption-list task-page__table-list task-page__table-caption-list">
        <li class="site-section__table-list-item site-section__table-caption-list-item task-page__table-list-item task-page__table-list-caption-item">
            Завершено
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
          Тип
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
            Название
          </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
            Срок
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
            Назначил
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item empty">
        </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <template x-for="tableList in tableLists">
        <ul role="list" class="site-section__table-list task-page__table-list">
            <li class="site-section__table-list-item task-page__table-list-item mobile">
                <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            </li>
            <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
                <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                    <input type="checkbox" class="task-page__table-list-item-checkbox">
                    <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                    </label>
                    </div>
                <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                              
            </li>
            <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true" x-text="tableList.name">
                Название группы
             </li>
            <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
                 Вчера
            </li>
            <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
                <button type="button" class="task-page__table-list-item-remove-btn desktop">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                </button>
                <div class="task-page__table-list-item-appointer-letter">
                    ШК
                </div>
            </li>
            <li class="site-section__table-list-item task-page__table-list-item term mobile">
                <button type="button" class="task-page__table-list-item-remove-btn" x-on:click="tables.filter(i => i !== tableList)">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                </button>
           </li>
        </ul>
      </template>
    </nav>
</div>
            <ul role="list" class="pagination task-page__pagination">
              <li class="pagination__item pagination__item--to-prev-link">
     <a href="#" class="pagination__to-prev-link">
       <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M6.95488 6.904L0.090875 4.216V3.16L6.95488 0.471999V1.608L3.57888 2.856L1.43488 3.656V3.72L3.57888 4.52L6.95488 5.768V6.904ZM14.908 6.904L8.044 4.216V3.16L14.908 0.471999V1.608L11.532 2.856L9.388 3.656V3.72L11.532 4.52L14.908 5.768V6.904Z" fill="#7C69EF"></path>
         </svg>                
     </a>
    </li>
    <li class="pagination__item active">
     <a href="#" class="pagination__link">
       1              
     </a>
    </li>
    <li class="pagination__item">
     <a href="#" class="pagination__link">
       2             
     </a>
    </li>
    <li class="pagination__item">
     <a href="#" class="pagination__link">
       3            
     </a>
    </li>
     <li class="pagination__item">
       <a href="#" class="pagination__link">
         ...           
       </a>
    </li>
    <li class="pagination__item">
     <a href="#" class="pagination__link">
       6           
     </a>
  </li>
  <li class="pagination__item pagination__item--to-next-link">
   <a href="#" class="pagination__to-next-link">
     <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M0.090875 6.904V5.768L3.46688 4.52L5.61088 3.72V3.656L3.46688 2.856L0.090875 1.608V0.471999L6.95488 3.16V4.216L0.090875 6.904ZM8.044 6.904V5.768L11.42 4.52L13.564 3.72V3.656L11.42 2.856L8.044 1.608V0.471999L14.908 3.16V4.216L8.044 6.904Z" fill="#7C69EF"></path>
       </svg>                           
   </a>
  </li>
            </ul>
            </div>
      </div>
      <div class="task-page__grid desktop">
        <aside class="task-page__control-tasks-menu">
            <ul role="list" class="task-page__control-tasks-menu-list b-b m-b">
               <li class="task-page__control-tasks-menu-list-item">
                   <a href="#" class="task-page__control-tasks-menu-list-item-link">
                      <svg class="task-page__control-tasks-menu-list-item-icon" width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 1V5C11 5.26522 11.1054 5.51957 11.2929 5.70711C11.4804 5.89464 11.7348 6 12 6H16M11 1H7C6.46957 1 5.96086 1.21071 5.58579 1.58579C5.21071 1.96086 5 2.46957 5 3V13C5 13.5304 5.21071 14.0391 5.58579 14.4142C5.96086 14.7893 6.46957 15 7 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V6M11 1L16 6M12 15V17C12 17.5304 11.7893 18.0391 11.4142 18.4142C11.0391 18.7893 10.5304 19 10 19H3C2.46957 19 1.96086 18.7893 1.58579 18.4142C1.21071 18.0391 1 17.5304 1 17V7C1 6.46957 1.21071 5.96086 1.58579 5.58579C1.96086 5.21071 2.46957 5 3 5H5" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg> 
                      <span class="task-page__control-tasks-menu-list-item-title">Все</span> 
                      <span class="task-page__control-tasks-menu-list-item-count active">5</span>                              
                   </a>
               </li>
               <li class="task-page__control-tasks-menu-list-item">
                  <a href="#" class="task-page__control-tasks-menu-list-item-link">
                      <svg class="task-page__control-tasks-menu-list-item-icon" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.9998 16.748L4.82784 19.993L6.00684 13.12L1.00684 8.253L7.90684 7.253L10.9928 1L14.0788 7.253L20.9788 8.253L15.9788 13.12L17.1578 19.993L10.9998 16.748Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                
                     <span class="task-page__control-tasks-menu-list-item-title">Сегодня</span> 
                     <span class="task-page__control-tasks-menu-list-item-count">0</span>                              
                  </a>
              </li>
              <li class="task-page__control-tasks-menu-list-item">
                  <a href="#" class="task-page__control-tasks-menu-list-item-link">
                      <svg class="task-page__control-tasks-menu-list-item-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13 1V5M5 1V5M1 9H17M3 3H15C16.1046 3 17 3.89543 17 5V17C17 18.1046 16.1046 19 15 19H3C1.89543 19 1 18.1046 1 17V5C1 3.89543 1.89543 3 3 3ZM5 13H7V15H5V13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                       
                     <span class="task-page__control-tasks-menu-list-item-title">Завтра</span> 
                     <span class="task-page__control-tasks-menu-list-item-count">0</span>                              
                  </a>
              </li>
              <li class="task-page__control-tasks-menu-list-item">
                  <a href="#" class="task-page__control-tasks-menu-list-item-link">
                      <svg class="task-page__control-tasks-menu-list-item-icon" width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5 1H16M5 7H16M5 13H16M1 1V1.01M1 7V7.01M1 13V13.01" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>              
                     <span class="task-page__control-tasks-menu-list-item-title">Без даты</span> 
                     <span class="task-page__control-tasks-menu-list-item-count">5</span>                              
                  </a>
              </li>
            </ul>
            <ul role="list" class="task-page__control-tasks-menu-list b-b m-b">
              <li class="task-page__control-tasks-menu-list-item">
                     <span class="task-page__control-tasks-menu-list-item-title">Поручено</span> 
                     <span class="task-page__control-tasks-menu-list-item-count active">2</span>                              
              </li>
              <li class="task-page__control-tasks-menu-list-item">
                     <span class="task-page__control-tasks-menu-list-item-title">Наблюдаю</span> 
                     <span class="task-page__control-tasks-menu-list-item-count active">0</span>                              
              </li>
              <li class="task-page__control-tasks-menu-list-item">
                     <span class="task-page__control-tasks-menu-list-item-title">Помогаю</span> 
                     <span class="task-page__control-tasks-menu-list-item-count active">0</span>                              
              </li>
           </ul>
           <ul role="list" class="task-page__control-tasks-menu-list b-b m-b">
              <li class="task-page__control-tasks-menu-list-item">
                     <span class="task-page__control-tasks-menu-list-item-title">Принять в работу</span> 
                     <span class="task-page__control-tasks-menu-list-item-count">0</span>                              
              </li>
              <li class="task-page__control-tasks-menu-list-item">
                     <span class="task-page__control-tasks-menu-list-item-title">Ожидают контроля</span> 
                     <span class="task-page__control-tasks-menu-list-item-count">0</span>                              
              </li>
              <li class="task-page__control-tasks-menu-list-item">
                     <span class="task-page__control-tasks-menu-list-item-title">Помогаю</span> 
                     <span class="task-page__control-tasks-menu-list-item-count">0</span>                              
              </li>
           </ul>
           <ul role="list" class="task-page__control-tasks-menu-list">
              <li class="task-page__control-tasks-menu-list-item">
                  <a href="#" class="task-page__control-tasks-menu-list-item-link">
                    <svg class="task-page__control-tasks-menu-list-item-icon" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 5C18.1046 5 19 4.10457 19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3C1 4.10457 1.89543 5 3 5M17 5H3M17 5V15C17 15.5304 16.7893 16.0391 16.4142 16.4142C16.0391 16.7893 15.5304 17 15 17H5C4.46957 17 3.96086 16.7893 3.58579 16.4142C3.21071 16.0391 3 15.5304 3 15V5M8 9H12" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                           
                     <span class="task-page__control-tasks-menu-list-item-title">Завершенные</span>                           
                  </a>
              </li>
           </ul>
        </aside>
        <div class="task-page__grid-right" x-data="{tableLists: [], taskPageFastCreateTaskBtnInput: ''}">
           <div class="task-page__fast-create-task-wrapper">
              <button type="button" class="task-page__fast-create-task-btn">
                <input type="text" placeholder="Быстрое создание задачи" class="task-page__fast-create-task-btn-input" x-model="taskPageFastCreateTaskBtnInput">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.33366 3.66797H3.00033C2.6467 3.66797 2.30756 3.80844 2.05752 4.05849C1.80747 4.30854 1.66699 4.64768 1.66699 5.0013V11.0013C1.66699 11.3549 1.80747 11.6941 2.05752 11.9441C2.30756 12.1942 2.6467 12.3346 3.00033 12.3346H9.00033C9.35395 12.3346 9.69309 12.1942 9.94313 11.9441C10.1932 11.6941 10.3337 11.3549 10.3337 11.0013V7.66797M5.66699 8.33464L12.3337 1.66797M12.3337 1.66797H9.00033M12.3337 1.66797V5.0013" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                            
              </button>
              <button type="button" class="btn btn--primary task-page__fast-create-task-check-btn" x-on:click="taskPageFastCreateTaskBtnInput === '' ? '' : tableLists.push({name: taskPageFastCreateTaskBtnInput});taskPageFastCreateTaskBtnInput = ''">
                  <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 6L6 11L16 1" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>                            
              </button>
           </div>
           <div class="site-section__table-wrapper task-page__table-wrapper">
    <nav class="site-section__table task-page__table">
      <ul role="list" class="site-section__table-list site-section__table-caption-list task-page__table-list task-page__table-caption-list">
        <li class="site-section__table-list-item site-section__table-caption-list-item task-page__table-list-item task-page__table-list-caption-item">
            Завершено
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
          Тип
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
            Название
          </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
            Срок
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item">
            Назначил
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item task-page__table-list-item task-page__table-list-caption-item empty">
        </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <ul role="list" class="site-section__table-list task-page__table-list">
        <li class="site-section__table-list-item task-page__table-list-item mobile">
            <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
            <input type="checkbox" class="task-page__table-list-item-checkbox">
            <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
            </label>
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
            <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                              
        </li>
        <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true">
            Название группы
         </li>
        <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
             Вчера
        </li>
        <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
            <button type="button" class="task-page__table-list-item-remove-btn desktop">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
            <div class="task-page__table-list-item-appointer-letter">
                ШК
            </div>
        </li>
        <li class="site-section__table-list-item task-page__table-list-item term mobile">
            <button type="button" class="task-page__table-list-item-remove-btn">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
       </li>
      </ul>
      <template x-for="tableList in tableLists">
        <ul role="list" class="site-section__table-list task-page__table-list">
            <li class="site-section__table-list-item task-page__table-list-item mobile">
                <div class="task-page__table-list-item-checkbox-wrapper" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                <input type="checkbox" class="task-page__table-list-item-checkbox">
                <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                </label>
                </div>
            </li>
            <li class="site-section__table-list-item task-page__table-list-item" x-on:click="editTaskPopup = true">
                <div class="task-page__table-list-item-checkbox-wrapper desktop" x-data="{checkedState: false}" x-on:click="checkedState = !checkedState">
                    <input type="checkbox" class="task-page__table-list-item-checkbox">
                    <label class="task-page__table-list-item-label" x-bind:class="{'active': checkedState === true}">
                    </label>
                    </div>
                <svg class="task-page__table-list-item-type-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                              
            </li>
            <li class="site-section__table-list-item task-page__table-list-item group-name" x-on:click="editTaskPopup = true" x-text="tableList.name">
                Название группы
             </li>
            <li class="site-section__table-list-item task-page__table-list-item term" x-on:click="editTaskPopup = true">
                 Вчера
            </li>
            <li class="site-section__table-list-item task-page__table-list-item appointer" x-on:click="editTaskPopup = true">
                <button type="button" class="task-page__table-list-item-remove-btn desktop">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                </button>
                <div class="task-page__table-list-item-appointer-letter">
                    ШК
                </div>
            </li>
            <li class="site-section__table-list-item task-page__table-list-item term mobile">
                <button type="button" class="task-page__table-list-item-remove-btn" x-on:click="tables.filter(i => i !== tableList)">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                </button>
           </li>
        </ul>
      </template>
    </nav>
</div>
        </div>
      </div>
      
      <div class="popup edit-task-popup" x-bind:class="{'active': editTaskPopup === true}" x-data="{table: 1}">
    <form action="#" method="post" class="popup__form edit-task-popup__form">
    <div class="popup__content edit-task-popup__content">
  <div class="popup__top-row edit-task-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="editTaskPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="editTaskPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <div class="edit-task-popup__title-row">
    <h2 class="popup__title edit-task-popup__title">
        Название задачи
    </h2>
    <div class="site-section__choose-status-dropdown-wrapper edit-task-popup__choose-status-dropdown-wrapper" x-data="{toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
        <button type="button" class="site-section__choose-status-btn edit-task-popup__choose-status-btn" x-on:click="toggleStatusDropdown = !toggleStatusDropdown">
          <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
            <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
            <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
            <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>     
        </button>
        <ul class="site-section__choose-status-dropdown-list edit-task-popup__choose-status-dropdown-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
           <li class="site-section__choose-status-dropdown-list-item edit-task-popup__choose-status-dropdown-list-item">
              <input type="text" readonly class="site-section__choose-status-dropdown-list-item-input edit-task-popup__choose-status-dropdown-list-item-input" value="Редактировать" x-on:click="toggleStatusDropdown = false">
           </li>
           <li class="site-section__choose-status-dropdown-list-item edit-task-popup__choose-status-dropdown-list-item">
            <input type="text" readonly class="site-section__choose-status-dropdown-list-item-input edit-task-popup__choose-status-dropdown-list-item-input" value="Скопировать" x-on:click="toggleStatusDropdown = false">
         </li>
         <li class="site-section__choose-status-dropdown-list-item edit-task-popup__choose-status-dropdown-list-item">
            <input type="text" readonly class="site-section__choose-status-dropdown-list-item-input edit-task-popup__choose-status-dropdown-list-item-input delete" value="Удалить" x-on:click="toggleStatusDropdown = false">
         </li>
        </ul>
    </div>
    </div> 
   </div>
   <ul role="list" class="site-section__table-tabs edit-task-popup__table-tabs">
    <li class="site-section__table-tabs-item edit-task-popup__table-tabs-item">
        <button type="button" class="site-section__table-tabs-item-btn edit-task-popup__table-tabs-item-btn active" x-on:click="table = 1" x-bind:class="{'active': table === 1}">
            Основные
        </button>
    </li><li class="site-section__table-tabs-item edit-task-popup__table-tabs-item">
        <button type="button" class="site-section__table-tabs-item-btn edit-task-popup__table-tabs-item-btn" x-on:click="table = 2" x-bind:class="{'active': table === 2}">
            История
        </button>
    </li>
   </ul>
    <div class="popup__body edit-task-popup__body mobile" x-data="dropInputFiler">
        <div class="edit-task-popup__body-wrapper main" x-show="table === 1" x-data="{ editTaskPopupCheckList: false, 
        editTaskPopupSubtaskList: false,
        editTaskPopupCheckListProgress: false, totalCheckBoxPercentageSum: '',
        checkListCheckBoxes: {percentage1: false, percentage2: false, percentage3: false}
        }" x-init="$watch('checkListCheckBoxes', 
        value => {
        if(checkListCheckBoxes.percentage1 === true) {
            checkListCheckBoxes.percentage1 = 33
        } 
        if(checkListCheckBoxes.percentage2 === true) {
            checkListCheckBoxes.percentage2 = 33
        } 
        if(checkListCheckBoxes.percentage3 === true) {
            checkListCheckBoxes.percentage3 = 33
        } 
        });
        " x-effect="totalCheckBoxPercentageSum = checkListCheckBoxes.percentage1 + checkListCheckBoxes.percentage2 + checkListCheckBoxes.percentage3">
        <fieldset class="edit-task-popup__fieldset task-btns-group m-b b-b">
            <div class="edit-task-popup__task-status-btn-wrapper" x-data="{toggleDropdown: false, resultInputVal: 'Сделано'}" x-on:click.outside="toggleDropdown = false">
                <button type="button" class="edit-task-popup__task-status-btn" x-on:click="toggleDropdown = !toggleDropdown" x-bind:class="{'done': resultInputVal === 'Сделано', 'in-process': resultInputVal === 'Сделать', 'in-work': resultInputVal === 'В работе', 'complete': resultInputVal === 'Завершено'}">
                    <div class="edit-task-popup__task-status-btn-checkbox-wrapper" x-data="{toggleState: false}" x-bind:class="{'active': toggleState === true, 'done': resultInputVal === 'Сделано', 'in-process': resultInputVal === 'Сделать', 'in-work': resultInputVal === 'В работе', 'complete': resultInputVal === 'Завершено'}" x-on:click="toggleState = !toggleState">
                        <input type="checkbox" class="edit-task-popup__task-status-btn-checkbox" readonly>
                    </div>
                    <p class="edit-task-popup__task-status-btn-result-input" x-text="resultInputVal"></p>
                    <svg class="edit-task-popup__task-status-btn-arrow" x-bind:class="{'active': toggleDropdown === true,'done': resultInputVal === 'Сделано', 'in-process': resultInputVal === 'Сделать', 'in-work': resultInputVal === 'В работе', 'complete': resultInputVal === 'Завершено' }" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 5L9 1" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                        
                </button>
                <div class="edit-task-popup__task-status-dropdown" x-bind:class="{'active': toggleDropdown === true }">
                    <ul role="list" class="edit-task-popup__task-status-dropdown-list">
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="Сделать" x-on:click="resultInputVal = 'Сделать';toggleDropdown = false">
                        </li>
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="В работе" x-on:click="resultInputVal = 'В работе'; toggleDropdown = false">
                        </li>
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="Сделано" x-on:click="resultInputVal = 'Сделано'; toggleDropdown = false">
                        </li>
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="Завершено" x-on:click="resultInputVal = 'Завершено'; toggleDropdown = false">
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="edit-task-popup__return-task-btn">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.00016 6.66536L1.3335 3.9987M1.3335 3.9987L4.00016 1.33203M1.3335 3.9987H8.66683C9.37407 3.9987 10.0524 4.27965 10.5524 4.77975C11.0525 5.27984 11.3335 5.95812 11.3335 6.66536C11.3335 7.37261 11.0525 8.05089 10.5524 8.55098C10.0524 9.05108 9.37407 9.33203 8.66683 9.33203H8.00016" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> 
                    Вернуть                   
            </button>
            <button type="button" class="edit-task-popup__accept-task-btn">
                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.3335 5.0013L4.66683 8.33464L11.3335 1.66797" stroke="#467FD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    Принять                   
            </button>
            <button type="button" class="edit-task-popup__positive-score-btn">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 8V16C5 16.2652 4.89464 16.5196 4.70711 16.7071C4.51957 16.8946 4.26522 17 4 17H2C1.73478 17 1.48043 16.8946 1.29289 16.7071C1.10536 16.5196 1 16.2652 1 16V9C1 8.73478 1.10536 8.48043 1.29289 8.29289C1.48043 8.10536 1.73478 8 2 8H5ZM5 8C6.06087 8 7.07828 7.57857 7.82843 6.82843C8.57857 6.07828 9 5.06087 9 4V3C9 2.46957 9.21071 1.96086 9.58579 1.58579C9.96086 1.21071 10.4696 1 11 1C11.5304 1 12.0391 1.21071 12.4142 1.58579C12.7893 1.96086 13 2.46957 13 3V8H16C16.5304 8 17.0391 8.21071 17.4142 8.58579C17.7893 8.96086 18 9.46957 18 10L17 15C16.8562 15.6135 16.5834 16.1402 16.2227 16.501C15.8619 16.8617 15.4328 17.0368 15 17H8C7.20435 17 6.44129 16.6839 5.87868 16.1213C5.31607 15.5587 5 14.7956 5 14" stroke="#42BA96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                                     
            </button>
            <button type="button" class="edit-task-popup__negative-score-btn">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 11.0009V3.00091C5 2.73569 4.89464 2.48134 4.70711 2.2938C4.51957 2.10627 4.26522 2.00091 4 2.00091H2C1.73478 2.00091 1.48043 2.10627 1.29289 2.2938C1.10536 2.48134 1 2.73569 1 3.00091V10.0009C1 10.2661 1.10536 10.5205 1.29289 10.708C1.48043 10.8956 1.73478 11.0009 2 11.0009H5ZM5 11.0009C6.06087 11.0009 7.07828 11.4223 7.82843 12.1725C8.57857 12.9226 9 13.94 9 15.0009V16.0009C9 16.5313 9.21071 17.04 9.58579 17.4151C9.96086 17.7902 10.4696 18.0009 11 18.0009C11.5304 18.0009 12.0391 17.7902 12.4142 17.4151C12.7893 17.04 13 16.5313 13 16.0009V11.0009H16C16.5304 11.0009 17.0391 10.7902 17.4142 10.4151C17.7893 10.04 18 9.53134 18 9.00091L17 4.00091C16.8562 3.38743 16.5834 2.86067 16.2227 2.49994C15.8619 2.13922 15.4328 1.96409 15 2.00091H8C7.20435 2.00091 6.44129 2.31698 5.87868 2.87959C5.31607 3.4422 5 4.20526 5 5.00091" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                   
            </button>
        </fieldset>
            <fieldset class="edit-task-popup__fieldset m-b b-b">
             <div class="edit-task-popup__check-list-progress-wrapper">
                <button type="button" class="edit-task-popup__add-check-list-btn" x-on:click="editTaskPopupCheckList = true;editTaskPopupCheckListProgress = true" x-text="editTaskPopupCheckList === true ? 'Чек-лист' : 'Добавить чек-лист'" x-bind:class="{'active': editTaskPopupCheckList === true }">Добавить чек-лист</button>
                <div class="edit-task-popup__check-list-progress" x-show="editTaskPopupCheckListProgress === true">
                    <span class="edit-task-popup__progress-percentage" x-text="`${totalCheckBoxPercentageSum}%`" x-ref="checkListProgressPercentageCount" x-init="$nextTick(() => { if($el.innerText === '99%') {console.log($el.innerText)} })"></span>
                    <div class="edit-task-popup__progress-bar-wrapper">
                        <div class="edit-task-popup__progress-bar" x-bind:style="`width: ${totalCheckBoxPercentageSum}%`" x-ref="checkListProgressBar" x-init="$watch('$refs.checkListProgressBar', 
                        value => value.style.width === '99%' ? value.style.width = '100%': '');"></div>
                    </div>
                </div>
            </div>
                <ul role="list" class="edit-task-popup__check-list" x-show="editTaskPopupCheckList === true">
                    <li class="edit-task-popup__check-list-item" x-ref="editTaskPopupCheckListItem1">
                        <div class="site-section__choose-status-dropdown-wrapper" x-data="{toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
                            <button type="button" class="site-section__choose-status-btn" x-on:click="toggleStatusDropdown = !toggleStatusDropdown">
                              <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
                                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
                                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
                                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>     
                            </button>
                            <ul class="site-section__choose-status-dropdown-list edit-task-popup__choose-status-dropdown-list check-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
                               <li class="site-section__choose-status-dropdown-list-item">
                                  <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="">Импорт контактов из CSV</button>
                               </li>
                               <li class="site-section__choose-status-dropdown-list-item">
                                <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="importCompanyCSVPopup = true">Импорт компании из CSV</button>
                             </li>
                            </ul>
                        </div>
                        <div class="edit-task-popup__check-list-checkbox-wrapper" x-on:click="toggleCheckboxState = !toggleCheckboxState;checkListCheckBoxes.percentage1 = !checkListCheckBoxes.percentage1" x-bind:class="{'active': toggleCheckboxState === true}" x-data="{toggleCheckboxState: false}">
                            <input type="checkbox" class="edit-task-popup__check-list-checkbox">
                            </div>
                        <input type="text" class="edit-task-popup__check-list-input-text" value="Отправить что-нибудь">
                        <button type="button" class="edit-task-popup__check-list-item-delete-btn" x-on:click="$refs.editTaskPopupCheckListItem1.remove()"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </li>
                    <li class="edit-task-popup__check-list-item" x-ref="editTaskPopupCheckListItem2">
                        <div class="site-section__choose-status-dropdown-wrapper" x-data="{toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
                            <button type="button" class="site-section__choose-status-btn" x-on:click="toggleStatusDropdown = !toggleStatusDropdown">
                              <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
                                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
                                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
                                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>     
                            </button>
                            <ul class="site-section__choose-status-dropdown-list edit-task-popup__choose-status-dropdown-list check-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
                               <li class="site-section__choose-status-dropdown-list-item">
                                  <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="">Импорт контактов из CSV</button>
                               </li>
                               <li class="site-section__choose-status-dropdown-list-item">
                                <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="importCompanyCSVPopup = true">Импорт компании из CSV</button>
                             </li>
                            </ul>
                        </div>
                        <div class="edit-task-popup__check-list-checkbox-wrapper" x-on:click="toggleCheckboxState = !toggleCheckboxState;checkListCheckBoxes.percentage2 = !checkListCheckBoxes.percentage2" x-bind:class="{'active': toggleCheckboxState === true}" x-data="{toggleCheckboxState: false}">
                            <input type="checkbox" class="edit-task-popup__check-list-checkbox">
                            </div>
                        <input type="text" class="edit-task-popup__check-list-input-text" value="Отправить что-нибудь">
                        <button type="button" class="edit-task-popup__check-list-item-delete-btn" x-on:click="$refs.editTaskPopupCheckListItem2.remove()"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </li>
                    <li class="edit-task-popup__check-list-item" x-ref="editTaskPopupCheckListItem3">
                        <div class="site-section__choose-status-dropdown-wrapper" x-data="{toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
                            <button type="button" class="site-section__choose-status-btn" x-on:click="toggleStatusDropdown = !toggleStatusDropdown">
                              <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
                                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
                                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
                                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>     
                            </button>
                            <ul class="site-section__choose-status-dropdown-list edit-task-popup__choose-status-dropdown-list check-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
                               <li class="site-section__choose-status-dropdown-list-item">
                                  <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="">Импорт контактов из CSV</button>
                               </li>
                               <li class="site-section__choose-status-dropdown-list-item">
                                <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="importCompanyCSVPopup = true">Импорт компании из CSV</button>
                             </li>
                            </ul>
                        </div>
                        <div class="edit-task-popup__check-list-checkbox-wrapper" x-on:click="toggleCheckboxState = !toggleCheckboxState;checkListCheckBoxes.percentage3 = !checkListCheckBoxes.percentage3" x-bind:class="{'active': toggleCheckboxState === true}" x-data="{toggleCheckboxState: false}">
                            <input type="checkbox" class="edit-task-popup__check-list-checkbox">
                        </div>
                        <input type="text" class="edit-task-popup__check-list-input-text" placeholder="Нажмите, чтобы ввести текст">
                        <button type="button" class="edit-task-popup__check-list-item-delete-btn" x-on:click="$refs.editTaskPopupCheckListItem3.remove()"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
                <ul role="list" class="edit-task-popup__attach-files-list">
                </ul>
                <button type="button" class="btn btn--secondary edit-task-popup__attach-files-btn" x-on:click="handleFiles">
                    <input class="edit-task-popup__form-control-group-file-input" type="file" name="attachFiles" id="attachFiles" multiple x-on:change="handleFiles">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9998 4.66632L4.66647 8.99965C4.40125 9.26487 4.25226 9.62458 4.25226 9.99965C4.25226 10.3747 4.40125 10.7344 4.66647 10.9997C4.93169 11.2649 5.2914 11.4139 5.66647 11.4139C6.04154 11.4139 6.40125 11.2649 6.66647 10.9997L10.9998 6.66632C11.5302 6.13588 11.8282 5.41646 11.8282 4.66632C11.8282 3.91617 11.5302 3.19675 10.9998 2.66632C10.4694 2.13588 9.74995 1.83789 8.9998 1.83789C8.24966 1.83789 7.53024 2.13588 6.9998 2.66632L2.66647 6.99965C1.87082 7.7953 1.42383 8.87443 1.42383 9.99965C1.42383 11.1249 1.87082 12.204 2.66647 12.9997C3.46212 13.7953 4.54125 14.2423 5.66647 14.2423C6.79169 14.2423 7.87082 13.7953 8.66647 12.9997L12.9998 8.66632" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Прикрепить файлы              
                </button>
                <button type="button" class="btn btn--secondary edit-task-popup__add-server-files-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00016 1.33203V10.6654M1.3335 5.9987H10.6668" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>  
                        Добавить файлы с сервера                  
                </button>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset m-b b-b">
                <div class="edit-task-popup__subtask-title-row">
                    <h2 class="popup__title edit-task-popup__title">
                        Подзадачи
                    </h2>
                </div>
                 <button type="button" class="edit-task-popup__new-subtask-btn">
                    Новая подзадача
                 </button>
                 <button type="button" class="edit-task-popup__add-exist-subtask-btn">
                    Добавить подзадачу из сущеcтвующих
                 </button>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset m-b b-b">
                <ul role="list" class="edit-task-popup__subtask-list">
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Дата начала
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Указать дату и время
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Крайний срок
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Указать дату и время
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Приоритет
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Средний
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Постановщик
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Средний
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Ответственный
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Средний
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Соисполнители
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Средний
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Наблюдатели
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Средний
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Завершена
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            Средний
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            ID задачи
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            1
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Создана
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            1
                        </p>
                    </li>
                    <li class="edit-task-popup__subtask-list-item">
                        <p class="edit-task-popup__subtask-list-item-title">
                            Изменена
                        </p>
                        <p class="edit-task-popup__subtask-list-item-text">
                            1
                        </p>
                    </li>
                </ul>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset m-b b-b" x-data="{remindListItems: []}">
                <h2 class="popup__title edit-task-popup__title">
                    Напоминание
                </h2>
                <ul role="list" class="edit-task-popup__remind-list">
                    <template x-for="remindListItem in remindListItems">
                        <li class="edit-task-popup__remind-list-item" x-data="{toggleEdit: false}">
                            <div class="edit-task-popup__form-control-group remind-group" x-bind:contenteditable="toggleEdit === true ? true: false">
                                <p class="edit-task-popup__remind-group-date">За 1 дней по крайнему сроку</p>
                                <p class="edit-task-popup__remind-group-resp">Ответственному</p>
                                <!-- <input type="text" class="create-contragent-popup__form-control-input edge-date" value="За 1 дней по крайнему сроку" readonly>
                                <input type="text" class="create-contragent-popup__form-control-input resp" value="Ответственному" readonly> -->
                            </div>
                                <div class="edit-task-popup__remind-list-item-controls">
                                    <button type="button" class="edit-task-popup__remind-list-item-edit-btn" x-on:click="toggleEdit = !toggleEdit">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === false">
                                        <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === true">
                                            <path d="M1.6665 7.9987L8.33317 14.6654L21.6665 1.33203" stroke="#42BA96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg> 
                                    </button>
                                    <button type="button" class="edit-task-popup__remind-list-item-delete-btn" x-on:click="remindListItems = remindListItems.filter(item => item !== remindListItem)">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === false">
                                            <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg> 
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === true">
                                                <path d="M15 1L1 15M1 1L15 15" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>             
                                    </button>
                                </div>
                        </li>
                    </template>
                </ul>
                <button type="button" class="edit-task-popup__add-remind-btn" x-on:click="remindListItems.push({id:remindListItems.length + 1})">
                    Добавить напоминание
                 </button>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset m-b" x-data="{addInfoLinkCards:[], toggleList: false}">
                <h2 class="popup__title edit-task-popup__title">
                    Связи
                </h2>
                <template x-for="addInfoLinkCard in addInfoLinkCards">
                    <div class="edit-task-popup__add-info-link-card">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 19H19M7 6H8M7 10H8M7 14H8M12 6H13M12 10H13M12 14H13M3 19V3C3 2.46957 3.21071 1.96086 3.58579 1.58579C3.96086 1.21071 4.46957 1 5 1H15C15.5304 1 16.0391 1.21071 16.4142 1.58579C16.7893 1.96086 17 2.46957 17 3V19" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <p class="edit-task-popup__add-info-link-card-title" x-text="addInfoLinkCard.value"></p>                        
                    </div>
                </template>
                <div class="edit-task-popup__add-links-btn-wrapper" x-on:click.outside="toggleList = false">
                <button type="button" class="edit-task-popup__add-links-btn" x-on:click="toggleList = !toggleList">
                    Добавить связи
                 </button>
                 <ul role="list" class="edit-task-popup__add-links-list" x-bind:class="{'active': toggleList === true }">
                    <li class="edit-task-popup__add-links-list-item">
                        <svg class="edit-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" class="edit-task-popup__add-links-list-item-input" value="ООО “Уралредуктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                    </li>
                    <li class="edit-task-popup__add-links-list-item">
                        <svg class="edit-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" class="edit-task-popup__add-links-list-item-input" value="ООО “Иван конструктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                    </li>
                    <li class="edit-task-popup__add-links-list-item">
                        <svg class="edit-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" class="edit-task-popup__add-links-list-item-input" value="ООО “Иван конструктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                    </li>
                 </ul>
                </div>
            </fieldset>
        </div>
        <div class="edit-task-popup__body-wrapper history" x-show="table === 2">
            <fieldset class="edit-task-popup__fieldset history m-b b-b">
                 <p class="edit-task-popup__history-placeholder-letter">
                    ВК
                 </p>
                 <div class="edit-task-popup__history-info">
                    <div class="edit-task-popup__history-info-top">
                    <p class="edit-task-popup__history-title">Иван</p>
                    <p class="edit-task-popup__history-interactions">Что-то сделал</p>
                    </div>
                    <p class="edit-task-popup__history-datetime">Сегодня<time class="edit-task-popup__history-date" datetime="12:39">12:39</time></p>
                    <div class="edit-task-popup__history-breadcrumbs">
                        <button type="button" class="edit-task-popup__history-status-btn done">
                            Сделать
                        </button>
                        <p class="edit-task-popup__history-breadcrumbs-arrow"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 5L1 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </p>
                        <button type="button" class="edit-task-popup__history-status-btn complete">
                            Завершено
                        </button>
                    </div>
                 </div>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset history">
                <p class="edit-task-popup__history-placeholder-letter">
                   ВК
                </p>
                <div class="edit-task-popup__history-info">
                    <div class="edit-task-popup__history-info-top">
                   <p class="edit-task-popup__history-title">Иван</p>
                   <p class="edit-task-popup__history-interactions">Что-то сделал</p>
                   </div>
                   <p class="edit-task-popup__history-datetime">Сегодня<time class="edit-task-popup__history-date" datetime="12:39">12:39</time></p>
                   <div class="edit-task-popup__history-breadcrumbs">
                       <button type="button" class="edit-task-popup__history-status-btn done">
                           Сделать
                       </button>
                       <p class="edit-task-popup__history-breadcrumbs-arrow"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 1L5 5L1 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                       </p>
                       <button type="button" class="edit-task-popup__history-status-btn complete">
                        Завершено
                       </button>
                   </div>
                </div>
           </fieldset>
    </div>
    <ul role="list" class="popup__btn-control-group edit-task-popup__btn-control-group">
      <li class="popup__btn-control-group-item edit-task-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat popup__undo-btn edit-task-popup__undo-btn" x-on:click="editTaskPopup = false">
              Отменить
          </button>
      </li>
      <li class="popup__btn-control-group-item edit-task-popup__btn-control-group-item">
        <button type="button" class="btn btn--secondary edit-task-popup__save-create-btn">
            Сохр. создать
        </button>
    </li>
      <li class="popup__btn-control-group-item edit-task-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary popup__save-btn edit-task-popup__save-btn">
              Сохранить
          </button>
      </li>
    </ul>
    </div>
    <div class="popup__body edit-task-popup__body desktop" x-data="dropInputFiler">
        <div class="edit-task-popup__body-wrapper left">
        <fieldset class="edit-task-popup__fieldset task-btns-group m-b b-b">
            <div class="edit-task-popup__task-status-btn-wrapper" x-data="{toggleDropdown: false, resultInputVal: 'Сделано'}" x-on:click.outside="toggleDropdown = false">
                <button type="button" class="edit-task-popup__task-status-btn" x-on:click="toggleDropdown = !toggleDropdown" x-bind:class="{'done': resultInputVal === 'Сделано', 'in-process': resultInputVal === 'Сделать', 'in-work': resultInputVal === 'В работе', 'complete': resultInputVal === 'Завершено'}">
                    <div class="edit-task-popup__task-status-btn-checkbox-wrapper" x-data="{toggleState: false}" x-bind:class="{'active': toggleState === true, 'done': resultInputVal === 'Сделано', 'in-process': resultInputVal === 'Сделать', 'in-work': resultInputVal === 'В работе', 'complete': resultInputVal === 'Завершено'}" x-on:click="toggleState = !toggleState">
                        <input type="checkbox" class="edit-task-popup__task-status-btn-checkbox" readonly>
                    </div>
                    <p class="edit-task-popup__task-status-btn-result-input" x-text="resultInputVal"></p>
                    <svg class="edit-task-popup__task-status-btn-arrow" x-bind:class="{'active': toggleDropdown === true,'done': resultInputVal === 'Сделано', 'in-process': resultInputVal === 'Сделать', 'in-work': resultInputVal === 'В работе', 'complete': resultInputVal === 'Завершено' }" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 5L9 1" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                        
                </button>
                <div class="edit-task-popup__task-status-dropdown" x-bind:class="{'active': toggleDropdown === true }">
                    <ul role="list" class="edit-task-popup__task-status-dropdown-list">
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="Сделать" x-on:click="resultInputVal = 'Сделать';toggleDropdown = false">
                        </li>
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="В работе" x-on:click="resultInputVal = 'В работе'; toggleDropdown = false">
                        </li>
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="Сделано" x-on:click="resultInputVal = 'Сделано'; toggleDropdown = false">
                        </li>
                        <li class="edit-task-popup__task-status-dropdown-list-item">
                            <input readonly class="edit-task-popup__task-status-dropdown-list-item-input" value="Завершено" x-on:click="resultInputVal = 'Завершено'; toggleDropdown = false">
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="edit-task-popup__return-task-btn">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.00016 6.66536L1.3335 3.9987M1.3335 3.9987L4.00016 1.33203M1.3335 3.9987H8.66683C9.37407 3.9987 10.0524 4.27965 10.5524 4.77975C11.0525 5.27984 11.3335 5.95812 11.3335 6.66536C11.3335 7.37261 11.0525 8.05089 10.5524 8.55098C10.0524 9.05108 9.37407 9.33203 8.66683 9.33203H8.00016" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> 
                    Вернуть                   
            </button>
            <button type="button" class="edit-task-popup__accept-task-btn">
                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.3335 5.0013L4.66683 8.33464L11.3335 1.66797" stroke="#467FD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                    Принять                   
            </button>
            <button type="button" class="edit-task-popup__positive-score-btn">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 8V16C5 16.2652 4.89464 16.5196 4.70711 16.7071C4.51957 16.8946 4.26522 17 4 17H2C1.73478 17 1.48043 16.8946 1.29289 16.7071C1.10536 16.5196 1 16.2652 1 16V9C1 8.73478 1.10536 8.48043 1.29289 8.29289C1.48043 8.10536 1.73478 8 2 8H5ZM5 8C6.06087 8 7.07828 7.57857 7.82843 6.82843C8.57857 6.07828 9 5.06087 9 4V3C9 2.46957 9.21071 1.96086 9.58579 1.58579C9.96086 1.21071 10.4696 1 11 1C11.5304 1 12.0391 1.21071 12.4142 1.58579C12.7893 1.96086 13 2.46957 13 3V8H16C16.5304 8 17.0391 8.21071 17.4142 8.58579C17.7893 8.96086 18 9.46957 18 10L17 15C16.8562 15.6135 16.5834 16.1402 16.2227 16.501C15.8619 16.8617 15.4328 17.0368 15 17H8C7.20435 17 6.44129 16.6839 5.87868 16.1213C5.31607 15.5587 5 14.7956 5 14" stroke="#42BA96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                                     
            </button>
            <button type="button" class="edit-task-popup__negative-score-btn">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 11.0009V3.00091C5 2.73569 4.89464 2.48134 4.70711 2.2938C4.51957 2.10627 4.26522 2.00091 4 2.00091H2C1.73478 2.00091 1.48043 2.10627 1.29289 2.2938C1.10536 2.48134 1 2.73569 1 3.00091V10.0009C1 10.2661 1.10536 10.5205 1.29289 10.708C1.48043 10.8956 1.73478 11.0009 2 11.0009H5ZM5 11.0009C6.06087 11.0009 7.07828 11.4223 7.82843 12.1725C8.57857 12.9226 9 13.94 9 15.0009V16.0009C9 16.5313 9.21071 17.04 9.58579 17.4151C9.96086 17.7902 10.4696 18.0009 11 18.0009C11.5304 18.0009 12.0391 17.7902 12.4142 17.4151C12.7893 17.04 13 16.5313 13 16.0009V11.0009H16C16.5304 11.0009 17.0391 10.7902 17.4142 10.4151C17.7893 10.04 18 9.53134 18 9.00091L17 4.00091C16.8562 3.38743 16.5834 2.86067 16.2227 2.49994C15.8619 2.13922 15.4328 1.96409 15 2.00091H8C7.20435 2.00091 6.44129 2.31698 5.87868 2.87959C5.31607 3.4422 5 4.20526 5 5.00091" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                   
            </button>
        </fieldset>
            <fieldset class="edit-task-popup__fieldset check-list-descr-group m-b b-b" x-data="{
                editTaskPopupCheckLists: [],
                editTaskPopupCheckListItemId: 1,
                totalChechedCheckboxCount: 0
            }">
                <div class="edit-task-popup__descr-textarea-controls">
                    <textarea class="edit-task-popup__descr-textarea" x-ref="editTaskPopupDescrTextarea" disabled x-on:keydown.enter="$refs.editTaskPopupDescrTextarea.setAttribute('disabled', 'true');$refs.editTaskPopupDescrTextarea.blur()" x-on:focusout="$refs.editTaskPopupDescrTextarea.setAttribute('disabled', 'true')" placeholder="Описание не заполнено"></textarea>
                    <button type="button" class="edit-task-popup__add-info-edit-btn" x-on:click="$refs.editTaskPopupDescrTextarea.removeAttribute('disabled');$refs.editTaskPopupDescrTextarea.focus()">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                    </button>
                   </div>
             <div class="edit-task-popup__check-list-progress-wrapper">
                <button type="button" class="edit-task-popup__add-check-list-btn" x-on:click="editTaskPopupCheckLists.push({})" x-text="editTaskPopupCheckLists.length === 0 ? 'Чек-лист' : 'Добавить чек-лист'">Добавить чек-лист</button>
                <div class="edit-task-popup__check-list-progress" x-show="editTaskPopupCheckLists.length > 0">
                    <span class="edit-task-popup__progress-percentage" x-text="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ? Math.round(((totalChechedCheckboxCount /editTaskPopupCheckLists.length) * 100)) + '%' : 0 + '%'"></span>
                    <div class="edit-task-popup__progress-bar-wrapper">
                        <div class="edit-task-popup__progress-bar" x-bind:style="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ?'width:' + Math.round(((totalChechedCheckboxCount /editTaskPopupCheckLists.length) * 100)) + '%' : 'width:' + 0 + '%'"></div>
                    </div>
                </div>
             </div>
                <ul role="list" class="edit-task-popup__check-list">
                    <template x-for="editTaskPopupCheckList in editTaskPopupCheckLists">
                        <li class="edit-task-popup__check-list-item">
                            <div class="site-section__choose-status-dropdown-wrapper" x-data="{toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
                                <button type="button" class="site-section__choose-status-btn" x-on:click="toggleStatusDropdown = !toggleStatusDropdown">
                                  <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
                                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
                                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
                                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>     
                                </button>
                                <ul class="site-section__choose-status-dropdown-list edit-task-popup__choose-status-dropdown-list check-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
                                   <li class="site-section__choose-status-dropdown-list-item">
                                      <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="">Импорт контактов из CSV</button>
                                   </li>
                                   <li class="site-section__choose-status-dropdown-list-item">
                                    <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="importCompanyCSVPopup = true">Импорт компании из CSV</button>
                                 </li>
                                </ul>
                            </div>
                            <div class="edit-task-popup__check-list-checkbox-wrapper" x-on:click="toggleCheckboxState === false ? totalChechedCheckboxCount++: totalChechedCheckboxCount--; toggleCheckboxState = !toggleCheckboxState" x-bind:class="{'active': toggleCheckboxState === true}" x-data="{toggleCheckboxState: false}">
                                <input type="checkbox" class="edit-task-popup__check-list-checkbox">
                                </div>
                            <input type="text" class="edit-task-popup__check-list-input-text" value="Отправить что-нибудь">
                            <button type="button" class="edit-task-popup__check-list-item-delete-btn" x-on:click="editTaskPopupCheckLists = editTaskPopupCheckLists.filter(i => i !== editTaskPopupCheckList)"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </li>
                    </template>
                </ul>
                <ul role="list" class="edit-task-popup__attach-files-list desktop">
                </ul>
                <button type="button" class="btn btn--secondary edit-task-popup__attach-files-btn">
                    <input class="edit-task-popup__form-control-group-file-input desktop" type="file" multiple x-on:change="handleFilesDesktop">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9998 4.66632L4.66647 8.99965C4.40125 9.26487 4.25226 9.62458 4.25226 9.99965C4.25226 10.3747 4.40125 10.7344 4.66647 10.9997C4.93169 11.2649 5.2914 11.4139 5.66647 11.4139C6.04154 11.4139 6.40125 11.2649 6.66647 10.9997L10.9998 6.66632C11.5302 6.13588 11.8282 5.41646 11.8282 4.66632C11.8282 3.91617 11.5302 3.19675 10.9998 2.66632C10.4694 2.13588 9.74995 1.83789 8.9998 1.83789C8.24966 1.83789 7.53024 2.13588 6.9998 2.66632L2.66647 6.99965C1.87082 7.7953 1.42383 8.87443 1.42383 9.99965C1.42383 11.1249 1.87082 12.204 2.66647 12.9997C3.46212 13.7953 4.54125 14.2423 5.66647 14.2423C6.79169 14.2423 7.87082 13.7953 8.66647 12.9997L12.9998 8.66632" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Прикрепить файлы              
                </button>
                <button type="button" class="btn btn--secondary edit-task-popup__add-server-files-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00016 1.33203V10.6654M1.3335 5.9987H10.6668" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>  
                        Добавить файлы с сервера                  
                </button>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset m-b b-b subtask-group" x-data="{
                subtaskListItems: [],
                subtaskListItemId: 1,
                totalChechedCheckboxCount: 0,
                newSubTask: false,
                addNewSubTask: false,
            }">
                <div class="edit-task-popup__subtask-title-row">
                    <h2 class="popup__title edit-task-popup__title">
                        Подзадачи
                    </h2>
                    <div class="edit-task-popup__subtask-progress" x-show="subtaskListItems.length > 0">
                        <span class="edit-task-popup__progress-percentage" x-text="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ? Math.round(((totalChechedCheckboxCount /subtaskListItems.length) * 100)) + '%' : 0 + '%'" x-ref="createTaskPopupProgressPercentage"></span>
                        <div class="edit-task-popup__progress-bar-wrapper">
                            <div class="edit-task-popup__progress-bar" x-bind:style="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ?'width:' + Math.round(((totalChechedCheckboxCount /subtaskListItems.length) * 100)) + '%' : 'width:' + 0 + '%'"></div>
                        </div>
                    </div>
                </div>
                <ul role="list" class="edit-task-popup__subtask-list">
                    <template x-for="(subtaskListItem,index) in subtaskListItems" :key="index">
                        <li class="edit-task-popup__subtask-list-item">
                            <div class="edit-task-popup__subtask-list-item-inputs">
                            <div class="edit-task-popup__subtask-list-item-checkbox-wrapper" x-data="{toggleCheckboxState: false}" x-on:click="toggleCheckboxState === false ? totalChechedCheckboxCount++: totalChechedCheckboxCount--; toggleCheckboxState = !toggleCheckboxState" x-bind:class="{'active': toggleCheckboxState === true}">
                                <input type="checkbox" class="edit-task-popup__subtask-list-item-checkbox">
                            </div>
                            <input type="text" class="edit-task-popup__subtask-list-item-input-text" value="Отправить что-нибудь">
                           </div>
                            <div class="edit-task-popup__subtask-list-item-controls">
                                <button type="button" class="edit-task-popup__subtask-list-item-view-btn">
                                    <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>                 
                                </button>
                                <button type="button" class="edit-task-popup__subtask-list-item-new-link-btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 4H3C2.46957 4 1.96086 4.21071 1.58579 4.58579C1.21071 4.96086 1 5.46957 1 6V15C1 15.5304 1.21071 16.0391 1.58579 16.4142C1.96086 16.7893 2.46957 17 3 17H12C12.5304 17 13.0391 16.7893 13.4142 16.4142C13.7893 16.0391 14 15.5304 14 15V10M7 11L17 1M17 1H12M17 1V6" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                             
                                </button>
                                <button type="button" class="edit-task-popup__subtask-list-item-delete-btn" x-on:click="subtaskListItems = subtaskListItems.filter(i => i !== subtaskListItem); totalChechedCheckboxCount = document.querySelectorAll('.edit-task-popup__subtask-list-item-checkbox-wrapper.active').length"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </li>
                    </template>
                </ul>
                <div class="edit-task-popup__subtask-groups-wrapper" x-show="newSubTask === true || addNewSubTask === true">
                    <div class="edit-task-popup__form-control-group" x-on:click="subtaskListItems.push({})" x-show="newSubTask === true">
                        <div class="edit-task-popup__form-control-wrapper edit-task-popup__form-control-input-wrapper subtask">
                          <input type="text" class="edit-task-popup__form-control-input" placeholder="Быстрое создание подзадачи">
                          <svg class="edit-task-popup__form-control-subtask-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.33341 3.66797H3.00008C2.64646 3.66797 2.30732 3.80844 2.05727 4.05849C1.80722 4.30854 1.66675 4.64768 1.66675 5.0013V11.0013C1.66675 11.3549 1.80722 11.6941 2.05727 11.9441C2.30732 12.1942 2.64646 12.3346 3.00008 12.3346H9.00008C9.3537 12.3346 9.69284 12.1942 9.94289 11.9441C10.1929 11.6941 10.3334 11.3549 10.3334 11.0013V7.66797M5.66675 8.33464L12.3334 1.66797M12.3334 1.66797H9.00008M12.3334 1.66797V5.0013" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                        
                        </div>
                     </div>
                     <div class="edit-task-popup__form-control-group new-subtask-group" x-show="addNewSubTask === true">
                        <div class="edit-task-popup__form-control-wrapper edit-task-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: false, resultInputVal: 'Иван'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                          <div class="edit-task-popup__task-priority-wrapper">
                            <div class="edit-task-popup__form-control-select-placeholer-wrapper">
                                <p class="edit-task-popup__placeholder-letter" x-text="resultInputVal === 'Иван' ? 'И' : resultInputVal === 'Андрей' ? 'A' : ''">
                                </p>
                                <input type="text" class="edit-task-popup__form-control-select-result-input subtask" value="Иван" readonly x-model="resultInputVal">
                               </div>                
                          </div>
                          <div class="edit-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                          <ul role="list" class="edit-task-popup__form-control-select-list">
                            <li class="edit-task-popup__form-control-select-list-item">
                              <input type="text" value="Иван" readonly class="edit-task-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Иван'">
                            </li>
                            <li class="edit-task-popup__form-control-select-list-item">
                              <input type="text" value="Андрей" readonly class="edit-task-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Андрей'">
                            </li>
                          </ul>
                          </div>
                          <svg class="edit-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                            <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                  
                        </div>
                        <div class="edit-task-popup__subtask-controls">
                            <button type="button" class="btn btn--secondary edit-task-popup__subtask-delete-btn">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 1L1 13M1 1L13 13" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                             </button>
                             <button type="button" class="btn btn--primary edit-task-popup__subtask-check-btn">
                                <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L6 11L16 1" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>                                
                             </button>
                        </div>
                     </div>
                    </div>
                <div class="edit-task-popup__subtasks-btn-wrapper">
                 <button type="button" class="edit-task-popup__new-subtask-btn" x-on:click="newSubTask = !newSubTask">
                    Новая подзадача
                 </button>
                 <button type="button" class="edit-task-popup__add-exist-subtask-btn" x-on:click="addNewSubTask = !addNewSubTask">
                    Добавить подзадачу из сущеcтвующих
                 </button>
                </div>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset history">
                <h2 class="popup__title edit-task-popup__title">
                    История
                </h2>
            </fieldset>
            <fieldset class="edit-task-popup__fieldset history m-b b-b">
                <p class="edit-task-popup__history-placeholder-letter">
                   ВК
                </p>
                <div class="edit-task-popup__history-info">
                   <div class="edit-task-popup__history-info-top">
                   <p class="edit-task-popup__history-title">Иван</p>
                   <p class="edit-task-popup__history-interactions">Что-то сделал</p>
                   </div>
                   <p class="edit-task-popup__history-datetime">Сегодня<time class="edit-task-popup__history-date" datetime="12:39">12:39</time></p>
                   <div class="edit-task-popup__history-breadcrumbs">
                       <button type="button" class="edit-task-popup__history-status-btn done">
                           Сделать
                       </button>
                       <p class="edit-task-popup__history-breadcrumbs-arrow"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 1L5 5L1 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                       </p>
                       <button type="button" class="edit-task-popup__history-status-btn complete">
                           Завершено
                       </button>
                   </div>
                </div>
           </fieldset>
           <fieldset class="edit-task-popup__fieldset history">
               <p class="edit-task-popup__history-placeholder-letter">
                  ВК
               </p>
               <div class="edit-task-popup__history-info">
                   <div class="edit-task-popup__history-info-top">
                  <p class="edit-task-popup__history-title">Иван</p>
                  <p class="edit-task-popup__history-interactions">Что-то сделал</p>
                  </div>
                  <p class="edit-task-popup__history-datetime">Сегодня<time class="edit-task-popup__history-date" datetime="12:39">12:39</time></p>
                  <div class="edit-task-popup__history-breadcrumbs">
                      <button type="button" class="edit-task-popup__history-status-btn done">
                          Сделать
                      </button>
                      <p class="edit-task-popup__history-breadcrumbs-arrow"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L5 5L1 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                      </p>
                      <button type="button" class="edit-task-popup__history-status-btn complete">
                       Завершено
                      </button>
                  </div>
               </div>
          </fieldset>
        </div>
        <div class="edit-task-popup__body-wrapper right">
           <fieldset class="edit-task-popup__fieldset subtask-list m-b b-b">
            <ul role="list" class="edit-task-popup__subtask-list">
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Дата начала
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Указать дату и время
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Крайний срок
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Указать дату и время
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Приоритет
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Средний
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Постановщик
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Средний
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Ответственный
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Средний
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Соисполнители
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Средний
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Наблюдатели
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Средний
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Завершена
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        Средний
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        ID задачи
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        1
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Создана
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        1
                    </p>
                </li>
                <li class="edit-task-popup__subtask-list-item">
                    <p class="edit-task-popup__subtask-list-item-title">
                        Изменена
                    </p>
                    <p class="edit-task-popup__subtask-list-item-text">
                        1
                    </p>
                </li>
            </ul>
        </fieldset>
        <fieldset class="edit-task-popup__fieldset remind-group m-b b-b" x-data="{remindListItems: [] }">
            <h2 class="popup__title edit-task-popup__title">
                Напоминание
            </h2>
            <ul role="list" class="edit-task-popup__remind-list">
                <template x-for="remindListItem in remindListItems">
                    <li class="edit-task-popup__remind-list-item" x-data="{toggleEdit: false}">
                        <div class="edit-task-popup__form-control-group remind-group" x-bind:contenteditable="toggleEdit === true ? true: false">
                            <p class="edit-task-popup__remind-group-date">За 1 дней по крайнему сроку</p>
                            <p class="edit-task-popup__remind-group-resp">Ответственному</p>
                            <!-- <input type="text" class="create-contragent-popup__form-control-input edge-date" value="За 1 дней по крайнему сроку" readonly>
                            <input type="text" class="create-contragent-popup__form-control-input resp" value="Ответственному" readonly> -->
                        </div>
                            <div class="edit-task-popup__remind-list-item-controls">
                                <button type="button" class="edit-task-popup__remind-list-item-edit-btn" x-on:click="toggleEdit = !toggleEdit">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === false">
                                    <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === true">
                                        <path d="M1.6665 7.9987L8.33317 14.6654L21.6665 1.33203" stroke="#42BA96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg> 
                                </button>
                                <button type="button" class="edit-task-popup__remind-list-item-delete-btn" x-on:click="remindListItems = remindListItems.filter(item => item !== remindListItem)">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === false">
                                        <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg> 
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" x-show="toggleEdit === true">
                                            <path d="M15 1L1 15M1 1L15 15" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>             
                                </button>
                            </div>
                    </li>
                </template>
            </ul>
            <button type="button" class="edit-task-popup__add-remind-btn" x-on:click="remindListItems.push({id:remindListItems.length + 1})">
                Добавить напоминание
             </button>
        </fieldset>
        <fieldset class="edit-task-popup__fieldset links-group m-b" x-data="{addInfoLinkCards:[], toggleList: false}">
            <h2 class="popup__title edit-task-popup__title">
                Связи
            </h2>
            <template x-for="addInfoLinkCard in addInfoLinkCards">
                <div class="edit-task-popup__add-info-link-card">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 19H19M7 6H8M7 10H8M7 14H8M12 6H13M12 10H13M12 14H13M3 19V3C3 2.46957 3.21071 1.96086 3.58579 1.58579C3.96086 1.21071 4.46957 1 5 1H15C15.5304 1 16.0391 1.21071 16.4142 1.58579C16.7893 1.96086 17 2.46957 17 3V19" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <p class="edit-task-popup__add-info-link-card-title" x-text="addInfoLinkCard.value"></p>                        
                </div>
            </template>
            <div class="edit-task-popup__add-links-btn-wrapper" x-on:click.outside="toggleList = false">
            <button type="button" class="edit-task-popup__add-links-btn" x-on:click="toggleList = !toggleList"> 
                Добавить связи
             </button>
             <ul role="list" class="edit-task-popup__add-links-list" x-bind:class="{'active': toggleList === true }">
                <li class="edit-task-popup__add-links-list-item">
                    <svg class="edit-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <input type="text" class="edit-task-popup__add-links-list-item-input" value="ООО “Уралредуктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                </li>
                <li class="edit-task-popup__add-links-list-item">
                    <svg class="edit-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <input type="text" class="edit-task-popup__add-links-list-item-input" value="ООО “Иван конструктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                </li>
                <li class="edit-task-popup__add-links-list-item">
                    <svg class="edit-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <input type="text" class="edit-task-popup__add-links-list-item-input" value="ООО “Иван конструктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                </li>
             </ul>
            </div>
        </fieldset>
         </div>
    <ul role="list" class="popup__btn-control-group edit-task-popup__btn-control-group">
      <li class="popup__btn-control-group-item edit-task-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat popup__undo-btn edit-task-popup__undo-btn" x-on:click="editTaskPopup = false">
              Отменить
          </button>
      </li>
      <li class="popup__btn-control-group-item edit-task-popup__btn-control-group-item">
        <button type="button" class="btn btn--secondary edit-task-popup__save-create-btn">
            Сохр. создать
        </button>
    </li>
      <li class="popup__btn-control-group-item edit-task-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary popup__save-btn edit-task-popup__save-btn">
              Сохранить
          </button>
      </li>
    </ul>
    </div>
</div>
</form>
</div>

<script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('dropInputFiler', () => ({

        handleFiles() {
          const fileInput = document.querySelector('.edit-task-popup__form-control-group-file-input');
          const files = fileInput.files;
          const fileList = document.querySelector('.edit-task-popup__attach-files-list');

          [...files].forEach((file, index) => {
            fileList.insertAdjacentHTML('beforeEnd', 
            `
          <li class="edit-task-popup__attach-files-list-item" x-ref="editTaskPopupAttachFilesListItem${index}">
                        <div class="edit-task-popup__attach-files-card">
                        <img src="/images/attach-files-placeholder.png" alt="attach files image" class="edit-task-popup__attach-files-list-item-img" loading="lazy" decoding="async">
                        <div class="edit-task-popup__attach-files-list-item-info">
                            <p class="edit-task-popup__attach-files-list-item-title">${file.name}</p>
                            <p class="edit-task-popup__attach-files-list-item-size-format">
                                ${file.size} КБ <span>${file.type}</span> 
                            </p>
                        </div>
                        <div class="edit-task-popup__attach-files-list-item-controls desktop">
                            <button type="button" class="edit-task-popup__attach-files-list-item-add-btn">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.99967 1.33203V10.6654M1.33301 5.9987H10.6663" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>    
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-download-btn">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.66699 10.3346V11.668C1.66699 12.0216 1.80747 12.3607 2.05752 12.6108C2.30756 12.8608 2.6467 13.0013 3.00033 13.0013H11.0003C11.3539 13.0013 11.6931 12.8608 11.9431 12.6108C12.1932 12.3607 12.3337 12.0216 12.3337 11.668V10.3346M3.66699 6.33464L7.00033 9.66797M7.00033 9.66797L10.3337 6.33464M7.00033 9.66797V1.66797" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>      
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-delete-btn" x-on:click="$el.closest('.edit-task-popup__attach-files-list-item').remove()">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            </button>
                        </div>
                        </div>
                        <div class="edit-task-popup__attach-files-list-item-controls mobile">
                            <button type="button" class="edit-task-popup__attach-files-list-item-add-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1V17M1 9H17" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>        
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-download-btn">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 14V16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H15C15.5304 18 16.0391 17.7893 16.4142 17.4142C16.7893 17.0391 17 16.5304 17 16V14M4 8L9 13M9 13L14 8M9 13V1" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>        
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-delete-btn" x-on:click="$refs.editTaskPopupAttachFilesListItem${index}.remove()"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </li>
          `
            )
          });
        },
        handleFilesDesktop() {
          const fileInputDesktop = document.querySelector('.edit-task-popup__form-control-group-file-input.desktop');
          const filesDesktop = fileInputDesktop.files;
          const fileListDesktop = document.querySelector('.edit-task-popup__attach-files-list.desktop');

          [...filesDesktop].forEach((file, index) => {
            fileListDesktop.insertAdjacentHTML('beforeEnd', 
            `
          <li class="edit-task-popup__attach-files-list-item" x-ref="editTaskPopupAttachFilesListItemDesktop${index}">
                        <div class="edit-task-popup__attach-files-card">
                        <img src="/images/attach-files-placeholder.png" alt="attach files image" class="edit-task-popup__attach-files-list-item-img" loading="lazy" decoding="async">
                        <div class="edit-task-popup__attach-files-list-item-info">
                            <p class="edit-task-popup__attach-files-list-item-title">${file.name}</p>
                            <p class="edit-task-popup__attach-files-list-item-size-format">
                                ${file.size} КБ <span>${file.type}</span> 
                            </p>
                        </div>
                        <div class="edit-task-popup__attach-files-list-item-controls desktop">
                            <button type="button" class="edit-task-popup__attach-files-list-item-add-btn">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.99967 1.33203V10.6654M1.33301 5.9987H10.6663" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>    
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-download-btn">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.66699 10.3346V11.668C1.66699 12.0216 1.80747 12.3607 2.05752 12.6108C2.30756 12.8608 2.6467 13.0013 3.00033 13.0013H11.0003C11.3539 13.0013 11.6931 12.8608 11.9431 12.6108C12.1932 12.3607 12.3337 12.0216 12.3337 11.668V10.3346M3.66699 6.33464L7.00033 9.66797M7.00033 9.66797L10.3337 6.33464M7.00033 9.66797V1.66797" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>      
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-delete-btn" x-on:click="$el.closest('.edit-task-popup__attach-files-list-item').remove()">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            </button>
                        </div>
                        </div>
                        <div class="edit-task-popup__attach-files-list-item-controls mobile">
                            <button type="button" class="edit-task-popup__attach-files-list-item-add-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1V17M1 9H17" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>        
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-download-btn">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 14V16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H15C15.5304 18 16.0391 17.7893 16.4142 17.4142C16.7893 17.0391 17 16.5304 17 16V14M4 8L9 13M9 13L14 8M9 13V1" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>        
                            </button>
                            <button type="button" class="edit-task-popup__attach-files-list-item-delete-btn" x-on:click="$refs.editTaskPopupAttachFilesListItemDesktop${index}.remove()"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </li>
          `
            )
          });
        }
      }))
   })
  </script>
      <div class="popup create-task-popup" x-bind:class="{'active': createTaskPopup === true}" x-data="{table: 1, selectNameListsResp: [], tagLists: [], createTaskPopupInputValName: '', createTaskPopupInputValStatus: 'Средний'}">
    <form action="#" method="post" class="popup__form create-task-popup__form">
    <div class="popup__content create-task-popup__content">
  <div class="popup__top-row create-task-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="createTaskPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="createTaskPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <h2 class="popup__title create-task-popup__title">
        Создание задачи
    </h2>
   </div>
   <ul role="list" class="site-section__table-tabs create-task-popup__table-tabs">
    <li class="site-section__table-tabs-item create-task-popup__table-tabs-item">
        <button type="button" class="site-section__table-tabs-item-btn create-task-popup__table-tabs-item-btn active" x-on:click="table = 1" x-bind:class="{'active': table === 1}">
            Основные
        </button>
    </li><li class="site-section__table-tabs-item create-task-popup__table-tabs-item">
        <button type="button" class="site-section__table-tabs-item-btn create-task-popup__table-tabs-item-btn" x-on:click="table = 2" x-bind:class="{'active': table === 2}">
            Дополнительно
        </button>
    </li>
   </ul>
    <div class="popup__body create-task-popup__body" x-data="dropInputFiler">
        <div class="create-task-popup__body-wrapper main" x-show="table === 1" x-data="{ taskCreatorType1: false, taskCreatorType2: false, taskCreatorType3: false, totalCheckBoxPercentageSum: 0}">
            <fieldset class="create-task-popup__fieldset main-top m-b b-b" x-data="{
                createTaskPopupCheckLists: [],
                createTaskPopupCheckListItemId: 1,
                totalChechedCheckboxCount: 0
            }">
            <div class="create-task-popup__form-control-group task-name">
                <p class="create-task-popup__form-control-group-title">
                    Название
                </p>
                <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-input-wrapper">
                  <input type="text" class="create-task-popup__form-control-input" placeholder="Задача #" x-model="createTaskPopupInputValName">
                </div>
             </div>
             <div class="create-task-popup__form-control-group priority">
                <p class="create-task-popup__form-control-group-title">
                    Приоритет
                </p>
                <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true }" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                  <div class="create-task-popup__task-priority-wrapper">
                    <template x-if="createTaskPopupInputValStatus === 'Низкий'">
                        <svg class="create-task-popup__task-priority-icon low" width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6654V10.672M1 7.9987V1.33203" stroke="#42BA96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                    </template>  
                    <template x-if="createTaskPopupInputValStatus === 'Средний'">
                        <svg class="create-task-popup__task-priority-icon medium" width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6654V10.672M1 7.9987V1.33203" stroke="#FFC107" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>  
                    </template> 
                    <template x-if="createTaskPopupInputValStatus === 'Высокий'">
                        <svg class="create-task-popup__task-priority-icon high" width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6654V10.672M1 7.9987V1.33203" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                    </template>                      
                  <input type="text" class="create-task-popup__form-control-select-result-input priority" value="Средний" readonly x-model="createTaskPopupInputValStatus">
                  </div>
                  <div class="create-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                  <ul role="list" class="create-task-popup__form-control-select-list">
                    <li class="create-task-popup__form-control-select-list-item priority">
                        <svg class="create-task-popup__task-priority-icon low" width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6654V10.672M1 7.9987V1.33203" stroke="#42BA96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>  
                      <input type="text" value="Низкий" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="createTaskPopupInputValStatus = 'Низкий'">
                    </li>
                    <li class="create-task-popup__form-control-select-list-item priority">
                        <svg class="create-task-popup__task-priority-icon medium" width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6654V10.672M1 7.9987V1.33203" stroke="#FFC107" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg> 
                      <input type="text" value="Средний" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="createTaskPopupInputValStatus = 'Средний'">
                    </li>
                    <li class="create-task-popup__form-control-select-list-item priority">
                        <svg class="create-task-popup__task-priority-icon high" width="2" height="12" viewBox="0 0 2 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.6654V10.672M1 7.9987V1.33203" stroke="#DF4759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>  
                      <input type="text" value="Высокий" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="createTaskPopupInputValStatus = 'Высокий'">
                    </li>
                  </ul>
                  </div>
                  <svg class="create-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                    <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                  
                </div>
             </div>
             <textarea class="create-task-popup__full-task-explanation-textarea" placeholder="Подробное описание задачи"></textarea>
             <div class="create-task-popup__check-list-progress-wrapper">
                <button type="button" class="create-task-popup__add-check-list-btn" x-on:click="createTaskPopupCheckLists.push({})" x-text="createTaskPopupCheckLists.length === 0 ? 'Чек-лист' : 'Добавить чек-лист'">Добавить чек-лист</button>
                <div class="create-task-popup__check-list-progress" x-show="createTaskPopupCheckLists.length > 0">
                    <span class="create-task-popup__progress-percentage" x-text="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ? Math.round(((totalChechedCheckboxCount /createTaskPopupCheckLists.length) * 100)) + '%' : 0 + '%'"></span>
                    <div class="create-task-popup__progress-bar-wrapper">
                        <div class="create-task-popup__progress-bar" x-bind:style="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ?'width:' + Math.round(((totalChechedCheckboxCount /createTaskPopupCheckLists.length) * 100)) + '%' : 'width:' + 0 + '%'"></div>
                    </div>
                </div>
            </div>
                <ul role="list" class="create-task-popup__check-list">
                    <template x-for="createTaskPopupCheckList in createTaskPopupCheckLists">
                        <li class="create-task-popup__check-list-item">
                            <div class="site-section__choose-status-dropdown-wrapper" x-data="{toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
                                <button type="button" class="site-section__choose-status-btn" x-on:click="toggleStatusDropdown = !toggleStatusDropdown">
                                  <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
                                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
                                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
                                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>     
                                </button>
                                <ul class="site-section__choose-status-dropdown-list create-task-popup__choose-status-dropdown-list check-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
                                   <li class="site-section__choose-status-dropdown-list-item">
                                      <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="">Импорт контактов из CSV</button>
                                   </li>
                                   <li class="site-section__choose-status-dropdown-list-item">
                                    <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="importCompanyCSVPopup = true">Импорт компании из CSV</button>
                                 </li>
                                </ul>
                            </div>
                            <div class="create-task-popup__check-list-checkbox-wrapper" x-on:click="toggleCheckboxState === false ? totalChechedCheckboxCount++: totalChechedCheckboxCount--; toggleCheckboxState = !toggleCheckboxState" x-bind:class="{'active': toggleCheckboxState === true}" x-data="{toggleCheckboxState: false}">
                                <input type="checkbox" class="create-task-popup__check-list-checkbox">
                                </div>
                            <input type="text" class="create-task-popup__check-list-input-text" value="Отправить что-нибудь">
                            <button type="button" class="create-task-popup__check-list-item-delete-btn" x-on:click="createTaskPopupCheckLists = createTaskPopupCheckLists.filter(i => i !== createTaskPopupCheckList)"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </li>
                    </template>
                </ul>
                <div class="create-task-popup__attach-files-list-wrapper" x-data="{items: []}">
                    <ul role="list" class="create-task-popup__attach-files-list">
                        <template x-for="item in items">
                            <li class="create-task-popup__attach-files-list-item">
                                <div class="create-task-popup__attach-files-card">
                                <img src="/images/attach-files-placeholder.png" alt="attach files image" class="create-task-popup__attach-files-list-item-img" loading="lazy" decoding="async">
                                <div class="create-task-popup__attach-files-list-item-info">
                                    <p class="create-task-popup__attach-files-list-item-title" x-text="item.name"></p>
                                    <p class="create-task-popup__attach-files-list-item-size-format">
                                        <span x-text="item.size"></span>КБ <span x-text="item.type"></span> 
                                    </p>
                                </div>
                                <div class="create-task-popup__attach-files-list-item-controls desktop">
                                    <button type="button" class="create-task-popup__attach-files-list-item-add-btn">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.99967 1.33203V10.6654M1.33301 5.9987H10.6663" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>    
                                    </button>
                                    <button type="button" class="create-task-popup__attach-files-list-item-download-btn">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.66699 10.3346V11.668C1.66699 12.0216 1.80747 12.3607 2.05752 12.6108C2.30756 12.8608 2.6467 13.0013 3.00033 13.0013H11.0003C11.3539 13.0013 11.6931 12.8608 11.9431 12.6108C12.1932 12.3607 12.3337 12.0216 12.3337 11.668V10.3346M3.66699 6.33464L7.00033 9.66797M7.00033 9.66797L10.3337 6.33464M7.00033 9.66797V1.66797" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>      
                                    </button>
                                    <button type="button" class="create-task-popup__attach-files-list-item-delete-btn" x-on:click="items = items.filter(i => i !== item)">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
                                    </button>
                                </div>
                                </div>
                                <div class="create-task-popup__attach-files-list-item-controls mobile">
                                    <button type="button" class="create-task-popup__attach-files-list-item-add-btn">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1V17M1 9H17" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>        
                                    </button>
                                    <button type="button" class="create-task-popup__attach-files-list-item-download-btn">
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 14V16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H15C15.5304 18 16.0391 17.7893 16.4142 17.4142C16.7893 17.0391 17 16.5304 17 16V14M4 8L9 13M9 13L14 8M9 13V1" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>        
                                    </button>
                                    <button type="button" class="create-task-popup__attach-files-list-item-delete-btn" x-on:click="items = items.filter(i => i !== item)"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </li>
                        </template>
                    </ul>
                    <button type="button" class="btn btn--secondary create-task-popup__attach-files-btn">
                        <input class="create-task-popup__form-control-group-file-input" type="file" name="attachFiles" id="attachFiles" multiple x-on:change="items = $el.files">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.9998 4.66632L4.66647 8.99965C4.40125 9.26487 4.25226 9.62458 4.25226 9.99965C4.25226 10.3747 4.40125 10.7344 4.66647 10.9997C4.93169 11.2649 5.2914 11.4139 5.66647 11.4139C6.04154 11.4139 6.40125 11.2649 6.66647 10.9997L10.9998 6.66632C11.5302 6.13588 11.8282 5.41646 11.8282 4.66632C11.8282 3.91617 11.5302 3.19675 10.9998 2.66632C10.4694 2.13588 9.74995 1.83789 8.9998 1.83789C8.24966 1.83789 7.53024 2.13588 6.9998 2.66632L2.66647 6.99965C1.87082 7.7953 1.42383 8.87443 1.42383 9.99965C1.42383 11.1249 1.87082 12.204 2.66647 12.9997C3.46212 13.7953 4.54125 14.2423 5.66647 14.2423C6.79169 14.2423 7.87082 13.7953 8.66647 12.9997L12.9998 8.66632" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Прикрепить файлы              
                    </button>
                </div>
                <button type="button" class="btn btn--secondary create-task-popup__add-server-files-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00016 1.33203V10.6654M1.3335 5.9987H10.6668" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>  
                        Добавить файлы с сервера                  
                </button>
                <div class="create-task-popup__form-control-group resp">
                    <p class="create-task-popup__form-control-group-title">
                        Ответственный
                    </p>
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: true }" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                      <!-- <div class="create-task-popup__form-control-select-placeholer-wrapper">
                        <p class="create-task-popup__placeholder-letter">
                            И
                        </p>
                      <input type="text" class="create-task-popup__form-control-select-result-input" value="Иван" readonly>
                       </div> -->
                       <ul role="list" class="create-task-popup__form-control-select-names-list">
                        <template x-for="selectNameListResp in selectNameListsResp">
                            <li class="create-task-popup__form-control-select-names-list-item">
                                <p class="create-task-popup__placeholder-letter" x-text="selectNameListResp.letter">
                                    И
                                </p>
                                <p class="create-task-popup__form-control-select-names-list-item-name" x-text="selectNameListResp.name">Иван</p>
                                <button type="button" class="create-task-popup__form-control-select-names-list-item-delete-btn" x-on:click="selectNameListsResp = selectNameListsResp.filter(i => i !== selectNameListResp)"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    </button>
                            </li>
                        </template>
                       </ul>
                      <div class="create-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                      <ul role="list" class="create-task-popup__form-control-select-list">
                        <li class="create-task-popup__form-control-select-list-item">
                          <input type="text" value="Иван" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsResp.push({name: $el.value, letter: 'И'});toggleSelectList = false">
                        </li>
                        <li class="create-task-popup__form-control-select-list-item">
                            <input type="text" value="Андрей" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsResp.push({name: $el.value, letter: 'А'});toggleSelectList = false">
                          </li>
                      </ul>
                      </div>
                      <svg class="create-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                        <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                  
                    </div>
                 </div>
                 <ul role="list" class="create-task-popup__task-creator-types-list desktop">
                    <li class="create-task-popup__task-creator-types-list-item">
                        <button type="button" class="create-task-popup__task-creator-types-list-item-btn" x-on:click="taskCreatorType1 = !taskCreatorType1">Постановщик</button>
                    </li>
                    <li class="create-task-popup__task-creator-types-list-item">
                        <button type="button" class="create-task-popup__task-creator-types-list-item-btn" x-on:click="taskCreatorType2 = !taskCreatorType2">Соисполнители</button>
                    </li>
                    <li class="create-task-popup__task-creator-types-list-item">
                        <button type="button" class="create-task-popup__task-creator-types-list-item-btn" x-on:click="taskCreatorType3 = !taskCreatorType3">Наблюдатели</button>
                    </li>
                 </ul>
                 <button type="button" class="create-task-popup__add-few-btn" x-on:click="taskCreatorType1 = !taskCreatorType1;taskCreatorType2 = !taskCreatorType2;taskCreatorType3 = !taskCreatorType3">
                    Выбрать несколько
                 </button>
                 <ul role="list" class="create-task-popup__task-creator-types-list mobile">
                    <li class="create-task-popup__task-creator-types-list-item">
                        <button type="button" class="create-task-popup__task-creator-types-list-item-btn" x-on:click="taskCreatorType1 = !taskCreatorType1">Постановщик</button>
                    </li>
                    <li class="create-task-popup__task-creator-types-list-item">
                        <button type="button" class="create-task-popup__task-creator-types-list-item-btn" x-on:click="taskCreatorType2 = !taskCreatorType2">Соисполнители</button>
                    </li>
                    <li class="create-task-popup__task-creator-types-list-item">
                        <button type="button" class="create-task-popup__task-creator-types-list-item-btn" x-on:click="taskCreatorType3 = !taskCreatorType3">Наблюдатели</button>
                    </li>
                 </ul>
                 <div class="create-task-popup__form-control-group taskCreatorType1" x-show="taskCreatorType1 === true" x-data="{selectNameListsSetter: []}">
                    <p class="create-task-popup__form-control-group-title">
                        Постановщик
                    </p>
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: false }" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                      <!-- <div class="create-task-popup__form-control-select-placeholer-wrapper">
                        <p class="create-task-popup__placeholder-letter">
                            И
                        </p>
                      <input type="text" class="create-task-popup__form-control-select-result-input" placeholder="Иван" readonly>
                       </div> -->
                       <ul role="list" class="create-task-popup__form-control-select-names-list">
                        <template x-for="selectNameListSetter in selectNameListsSetter">
                            <li class="create-task-popup__form-control-select-names-list-item">
                                <p class="create-task-popup__placeholder-letter" x-text="selectNameListSetter.letter">И</p>
                                <p class="create-task-popup__form-control-select-names-list-item-name" x-text="selectNameListSetter.name">Иван</p>
                                <button type="button" class="create-task-popup__form-control-select-names-list-item-delete-btn" x-on:click="selectNameListsSetter = selectNameListsSetter.filter(i => i !== selectNameListSetter)"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    </button>
                            </li>
                        </template>
                       </ul>
                      <div class="create-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                      <ul role="list" class="create-task-popup__form-control-select-list">
                        <li class="create-task-popup__form-control-select-list-item">
                          <input type="text" value="Иван" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsSetter.push({name: $el.value, letter: 'И'});toggleSelectList = false">
                        </li>
                        <li class="create-task-popup__form-control-select-list-item">
                            <input type="text" value="Андрей" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsSetter.push({name: $el.value, letter: 'А'});toggleSelectList = false">
                          </li>
                      </ul>
                      </div>
                      <svg class="create-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                        <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                  
                    </div>
                 </div>
                 <div class="create-task-popup__form-control-group taskCreatorType2" x-show="taskCreatorType2 === true" x-data="{selectNameListsCoExecutors: []}">
                    <p class="create-task-popup__form-control-group-title">
                        Соисполнители
                    </p>
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: false }" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                        <!-- <div class="create-task-popup__form-control-select-placeholer-wrapper">
                          <p class="create-task-popup__placeholder-letter">
                              И
                          </p>
                        <input type="text" class="create-task-popup__form-control-select-result-input" placeholder="Иван" readonly>
                         </div> -->
                         <ul role="list" class="create-task-popup__form-control-select-names-list">
                          <template x-for="selectNameListCoExecutors in selectNameListsCoExecutors">
                              <li class="create-task-popup__form-control-select-names-list-item">
                                  <p class="create-task-popup__placeholder-letter" x-text="selectNameListCoExecutors.letter">И</p>
                                  <p class="create-task-popup__form-control-select-names-list-item-name" x-text="selectNameListCoExecutors.name">Иван</p>
                                  <button type="button" class="create-task-popup__form-control-select-names-list-item-delete-btn" x-on:click="selectNameListsCoExecutors = selectNameListsCoExecutors.filter(i => i !== selectNameListCoExecutors)"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      </button>
                              </li>
                          </template>
                         </ul>
                        <div class="create-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                        <ul role="list" class="create-task-popup__form-control-select-list">
                          <li class="create-task-popup__form-control-select-list-item">
                            <input type="text" value="Иван" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsCoExecutors.push({name: $el.value, letter: 'И'});toggleSelectList = false">
                          </li>
                          <li class="create-task-popup__form-control-select-list-item">
                              <input type="text" value="Андрей" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsCoExecutors.push({name: $el.value, letter: 'А'});toggleSelectList = false">
                            </li>
                        </ul>
                        </div>
                        <svg class="create-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                          <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                  
                      </div>
                 </div>
                 <div class="create-task-popup__form-control-group taskCreatorType3" x-show="taskCreatorType3 === true" x-data="{selectNameListsObservers: []}">
                    <p class="create-task-popup__form-control-group-title">
                        Наблюдатели
                    </p>
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: false }" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                        <!-- <div class="create-task-popup__form-control-select-placeholer-wrapper">
                          <p class="create-task-popup__placeholder-letter">
                              И
                          </p>
                        <input type="text" class="create-task-popup__form-control-select-result-input" placeholder="Иван" readonly>
                         </div> -->
                         <ul role="list" class="create-task-popup__form-control-select-names-list">
                          <template x-for="selectNameListObservers in selectNameListsObservers">
                              <li class="create-task-popup__form-control-select-names-list-item">
                                  <p class="create-task-popup__placeholder-letter" x-text="selectNameListObservers.letter">И</p>
                                  <p class="create-task-popup__form-control-select-names-list-item-name" x-text="selectNameListObservers.name">Иван</p>
                                  <button type="button" class="create-task-popup__form-control-select-names-list-item-delete-btn" x-on:click="selectNameListsObservers = selectNameListsObservers.filter(i => i !== selectNameListObservers)"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9 1L1 9M1 1L9 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      </button>
                              </li>
                          </template>
                         </ul>
                        <div class="create-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                        <ul role="list" class="create-task-popup__form-control-select-list">
                          <li class="create-task-popup__form-control-select-list-item">
                            <input type="text" value="Иван" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsObservers.push({name: $el.value, letter: 'И'});toggleSelectList = false">
                          </li>
                          <li class="create-task-popup__form-control-select-list-item">
                              <input type="text" value="Андрей" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="selectNameListsObservers.push({name: $el.value, letter: 'А'});toggleSelectList = false">
                            </li>
                        </ul>
                        </div>
                        <svg class="create-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                          <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                  
                      </div>
                 </div>
            </fieldset>
            <fieldset class="create-task-popup__fieldset dates m-b b-b">
                <div class="create-task-popup__form-control-group">
                    <p class="create-task-popup__form-control-group-title">
                        Дата начала
                    </p>
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-input-wrapper datetimepicker-wrapper" id="datetimepicker1" data-td-target-input="nearest" data-td-target-toggle="nearest">
                      <input class="create-task-popup__form-control-input-date" id="datetimepicker1Input" type="text" data-td-target="#datetimepicker1" readonly value="11.10.2022">
                    <button type="button" data-td-target="#datetimepicker1" data-td-toggle="datetimepicker" class="create-task-popup__form-control-datepicker-btn">
                      <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1V5M5 1V5M1 9H17M3 3H15C16.1046 3 17 3.89543 17 5V17C17 18.1046 16.1046 19 15 19H3C1.89543 19 1 18.1046 1 17V5C1 3.89543 1.89543 3 3 3ZM5 13H7V15H5V13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>              
                    </button>
                    </div>
                </div>
                <div class="create-task-popup__form-control-group">
                    <p class="create-task-popup__form-control-group-title">
                        Крайний срок
                    </p>
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-input-wrapper datetimepicker-wrapper" id="datetimepicker2" data-td-target-input="nearest" data-td-target-toggle="nearest">
                      <input class="create-task-popup__form-control-input-date" id="datetimepicker2Input" type="text" data-td-target="#datetimepicker2" readonly value="11.10.2022">
                    <button type="button" data-td-target="#datetimepicker2" data-td-toggle="datetimepicker" class="create-task-popup__form-control-datepicker-btn">
                      <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1V5M5 1V5M1 9H17M3 3H15C16.1046 3 17 3.89543 17 5V17C17 18.1046 16.1046 19 15 19H3C1.89543 19 1 18.1046 1 17V5C1 3.89543 1.89543 3 3 3ZM5 13H7V15H5V13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>              
                    </button>
                    </div>
                </div>
                <div class="create-task-popup__checkbox-wrapper edge-date">
                    <input type="checkbox" name="edgeDate" id="edgeDate" class="create-task-popup__checkbox">
                    <label for="edgeDate" class="create-task-popup__label edge-date">Исполнитель может менять крайний срок задачи</label>
                 </div>
            </fieldset>
            <fieldset class="create-task-popup__fieldset m-b b-b">
                <div class="create-task-popup__checkbox-wrapper">
                    <input type="checkbox" name="completeControl" id="completeControl" class="create-task-popup__checkbox">
                    <label for="completeControl" class="create-task-popup__label">Отправить постановщику на контроль после выполнения</label>
                 </div>
            </fieldset>
            <fieldset class="create-task-popup__fieldset m-b" x-data="{
                subtaskListItems: [],
                subtaskListItemId: 1,
                totalChechedCheckboxCount: 0,
                newSubTask: false,
                addNewSubTask: false,
            }">
                <div class="create-task-popup__subtask-title-row">
                    <h2 class="popup__title create-task-popup__title">
                        Подзадачи
                    </h2>
                        <div class="create-task-popup__subtask-progress" x-show="subtaskListItems.length > 0">
                            <span class="create-task-popup__progress-percentage" x-text="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ? Math.round(((totalChechedCheckboxCount /subtaskListItems.length) * 100)) + '%' : 0 + '%'" x-ref="createTaskPopupProgressPercentage"></span>
                            <div class="create-task-popup__progress-bar-wrapper">
                                <div class="create-task-popup__progress-bar" x-bind:style="(!isNaN(totalChechedCheckboxCount) && totalChechedCheckboxCount !== 0) ?'width:' + Math.round(((totalChechedCheckboxCount /subtaskListItems.length) * 100)) + '%' : 'width:' + 0 + '%'"></div>
                            </div>
                        </div>
                </div>
                <ul role="list" class="create-task-popup__subtask-list">
                    <template x-for="(subtaskListItem,index) in subtaskListItems" :key="index">
                        <li class="create-task-popup__subtask-list-item">
                            <div class="create-task-popup__subtask-list-item-inputs">
                            <div class="create-task-popup__subtask-list-item-checkbox-wrapper" x-data="{toggleCheckboxState: false}" x-on:click="toggleCheckboxState === false ? totalChechedCheckboxCount++: totalChechedCheckboxCount--; toggleCheckboxState = !toggleCheckboxState" x-bind:class="{'active': toggleCheckboxState === true}">
                                <input type="checkbox" class="create-task-popup__subtask-list-item-checkbox">
                            </div>
                            <input type="text" class="create-task-popup__subtask-list-item-input-text" value="Отправить что-нибудь">
                           </div>
                            <div class="create-task-popup__subtask-list-item-controls">
                                <button type="button" class="create-task-popup__subtask-list-item-view-btn">
                                    <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>                 
                                </button>
                                <button type="button" class="create-task-popup__subtask-list-item-new-link-btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 4H3C2.46957 4 1.96086 4.21071 1.58579 4.58579C1.21071 4.96086 1 5.46957 1 6V15C1 15.5304 1.21071 16.0391 1.58579 16.4142C1.96086 16.7893 2.46957 17 3 17H12C12.5304 17 13.0391 16.7893 13.4142 16.4142C13.7893 16.0391 14 15.5304 14 15V10M7 11L17 1M17 1H12M17 1V6" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                             
                                </button>
                                <button type="button" class="create-task-popup__subtask-list-item-delete-btn" x-on:click="subtaskListItems = subtaskListItems.filter(i => i !== subtaskListItem); totalChechedCheckboxCount = document.querySelectorAll('.create-task-popup__subtask-list-item-checkbox-wrapper.active').length"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </li>
                    </template>
                </ul>
                <div class="create-task-popup__subtask-groups-wrapper" x-show="newSubTask === true || addNewSubTask === true">
                <div class="create-task-popup__form-control-group" x-on:click="subtaskListItems.push({})" x-show="newSubTask === true">
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-input-wrapper subtask">
                      <input type="text" class="create-task-popup__form-control-input" placeholder="Быстрое создание подзадачи">
                      <svg class="create-task-popup__form-control-subtask-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.33341 3.66797H3.00008C2.64646 3.66797 2.30732 3.80844 2.05727 4.05849C1.80722 4.30854 1.66675 4.64768 1.66675 5.0013V11.0013C1.66675 11.3549 1.80722 11.6941 2.05727 11.9441C2.30732 12.1942 2.64646 12.3346 3.00008 12.3346H9.00008C9.3537 12.3346 9.69284 12.1942 9.94289 11.9441C10.1929 11.6941 10.3334 11.3549 10.3334 11.0013V7.66797M5.66675 8.33464L12.3334 1.66797M12.3334 1.66797H9.00008M12.3334 1.66797V5.0013" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                        
                    </div>
                 </div>
                 <div class="create-task-popup__form-control-group new-subtask-group" x-show="addNewSubTask === true">
                    <div class="create-task-popup__form-control-wrapper create-task-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: false, resultInputVal: 'Иван'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                      <div class="create-task-popup__task-priority-wrapper">
                        <div class="create-task-popup__form-control-select-placeholer-wrapper">
                            <p class="create-task-popup__placeholder-letter" x-text="resultInputVal === 'Иван' ? 'И' : resultInputVal === 'Андрей' ? 'A' : ''">
                            </p>
                            <input type="text" class="create-task-popup__form-control-select-result-input subtask" value="Иван" readonly x-model="resultInputVal">
                           </div>                
                      </div>
                      <div class="create-task-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                      <ul role="list" class="create-task-popup__form-control-select-list">
                        <li class="create-task-popup__form-control-select-list-item">
                          <input type="text" value="Иван" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Иван'">
                        </li>
                        <li class="create-task-popup__form-control-select-list-item">
                          <input type="text" value="Андрей" readonly class="create-task-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Андрей'">
                        </li>
                      </ul>
                      </div>
                      <svg class="create-task-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                        <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                  
                    </div>
                    <div class="create-task-popup__subtask-controls">
                        <button type="button" class="btn btn--secondary create-task-popup__subtask-delete-btn">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1L1 13M1 1L13 13" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                         </button>
                         <button type="button" class="btn btn--primary create-task-popup__subtask-check-btn">
                            <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6L6 11L16 1" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>                                
                         </button>
                    </div>
                 </div>
                </div>
                <div class="create-task-popup__subtask-btns-wrapper">
                    <button type="button" class="create-task-popup__new-subtask-btn" x-on:click="newSubTask = !newSubTask">
                        Новая подзадача
                     </button>
                     <button type="button" class="create-task-popup__add-exist-subtask-btn" x-on:click="addNewSubTask = !addNewSubTask">
                        Добавить подзадачу из сущеcтвующих
                     </button>
                </div>
            </fieldset>
        </div>
        <div class="create-task-popup__body-wrapper add" x-show="table === 2">
            <fieldset class="create-task-popup__fieldset add-info-tag m-b b-b">
                <h2 class="popup__title create-task-popup__title">
                    Теги
                </h2>
                <ul role="list" class="popup__tags-list create-task-popup__tags-list">
                    <template x-for="tagList in tagLists">
                        <li class="popup__tags-list-item create-task-popup__tags-list-item">
                            <button type="button" class="popup__tags-list-item-btn create-task-popup__tags-list-item-btn" x-text="tagList.name">
                            </button>
                        </li>
                    </template>
                 </ul>
                 <div class="popup__add-tags-btn-wrapper create-task-popup__add-tags-btn-wrapper" x-data="{toggleDropdown: false }">
                    <button type="button" class="popup__add-tags-btn create-task-popup__add-tags-btn" x-on:click="toggleDropdown = !toggleDropdown">Добавить тег</button>
                    <div class="popup__add-tags-dropdown create-task-popup__add-tags-dropdown" x-bind:class="{'active': toggleDropdown === true }">
                       <ul role="list" class="popup__add-tags-dropdown-list create-task-popup__add-tags-dropdown-list">
                          <li class="popup__add-tags-dropdown-list-item create-task-popup__add-tags-dropdown-list-item">
                            <input type="text" class="popup__add-tags-dropdown-list-item-input create-task-popup__add-tags-dropdown-list-item-input" readonly value="CEO" x-on:click="toggleDropdown = false;tagLists.push({name:$el.value})">
                          </li>
                          <li class="popup__add-tags-dropdown-list-item create-task-popup__add-tags-dropdown-list-item">
                           <input type="text" class="popup__add-tags-dropdown-list-item-input create-task-popup__add-tags-dropdown-list-item-input" readonly value="Дизайн" x-on:click="toggleDropdown = false;tagLists.push({name:$el.value})">
                         </li>
                         <li class="popup__add-tags-dropdown-list-item create-task-popup__add-tags-dropdown-list-item">
                           <input type="text" class="popup__add-tags-dropdown-list-item-input create-task-popup__add-tags-dropdown-list-item-input" readonly value="Проектировка" x-on:click="toggleDropdown = false;tagLists.push({name:$el.value})">
                         </li>
                       </ul>
                       <input type="text" class="popup__add-tags-dropdown-search-input create-task-popup__add-tags-dropdown-search-input">
                   </div>
                 </div>
            </fieldset>
            <fieldset class="create-task-popup__fieldset add-info m-b b-b" x-data="{addInfoLinkCards:[], toggleList: false}">
                <h2 class="popup__title create-task-popup__title">
                    Связи
                </h2>
                <template x-for="addInfoLinkCard in addInfoLinkCards">
                    <div class="create-task-popup__add-info-link-card">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 19H19M7 6H8M7 10H8M7 14H8M12 6H13M12 10H13M12 14H13M3 19V3C3 2.46957 3.21071 1.96086 3.58579 1.58579C3.96086 1.21071 4.46957 1 5 1H15C15.5304 1 16.0391 1.21071 16.4142 1.58579C16.7893 1.96086 17 2.46957 17 3V19" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <p class="create-task-popup__add-info-link-card-title" x-text="addInfoLinkCard.value"></p>                        
                    </div>
                </template>
                <div class="create-task-popup__add-links-btn-wrapper" x-on:click.outside="toggleList = false">
                <button type="button" class="create-task-popup__add-links-btn" x-on:click="toggleList = !toggleList">
                    Добавить связи
                 </button>
                 <ul role="list" class="create-task-popup__add-links-list" x-bind:class="{'active': toggleList === true }">
                    <li class="create-task-popup__add-links-list-item">
                        <svg class="create-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" class="create-task-popup__add-links-list-item-input" value="ООО “Уралредуктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                    </li>
                    <li class="create-task-popup__add-links-list-item">
                        <svg class="create-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" class="create-task-popup__add-links-list-item-input" value="ООО “Иван конструктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                    </li>
                    <li class="create-task-popup__add-links-list-item">
                        <svg class="create-task-popup__add-links-list-item-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13H13M5 4.33333H5.66667M5 7H5.66667M5 9.66667H5.66667M8.33333 4.33333H9M8.33333 7H9M8.33333 9.66667H9M2.33333 13V2.33333C2.33333 1.97971 2.47381 1.64057 2.72386 1.39052C2.97391 1.14048 3.31304 1 3.66667 1H10.3333C10.687 1 11.0261 1.14048 11.2761 1.39052C11.5262 1.64057 11.6667 1.97971 11.6667 2.33333V13" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" class="create-task-popup__add-links-list-item-input" value="ООО “Иван конструктор”" x-on:click="addInfoLinkCards.push({value: $el.value});toggleList = false">                        
                    </li>
                 </ul>
                </div>
            </fieldset>
            <fieldset class="create-task-popup__fieldset add-info m-b b-b">
                <h2 class="popup__title create-task-popup__title">
                    Напоминание
                </h2>
                <ul role="list" class="create-task-popup__remind-list">
                    <template x-for="remindListItem in remindListItems">
                        <li class="create-task-popup__remind-list-item" x-data="{toggleEdit: false}">
                            <div class="create-task-popup__form-control-group remind-group" x-bind:contenteditable="toggleEdit === true ? true : false" x-on:keydown.window.enter="toggleEdit = false">
                                <p class="create-task-popup__remind-group-date">За <span x-text="remindListItem.dateValue"></span> по <span x-text="remindListItem.dateName"></span></p>
                                <p class="create-task-popup__remind-group-resp" x-text="remindListItem.responsible">Ответственному</p>
                            </div>
                                <div class="create-task-popup__remind-list-item-controls">
                                    <button type="button" class="create-task-popup__remind-list-item-edit-btn" x-on:click="toggleEdit = !toggleEdit">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="create-task-popup__remind-list-item-delete-btn" x-on:click="remindListItems = remindListItems.filter(i => i !== remindListItem)">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>             
                                    </button>
                                </div>
                        </li>
                    </template>
                  </ul>
                <button type="button" class="create-task-popup__add-remind-btn" x-on:click="remindAltPopup = true">
                    Добавить напоминание
                 </button>
            </fieldset>
            <fieldset class="create-task-popup__fieldset add-info">
                 <template x-for="regularTask in regularTasks">
                    <div class="create-task-popup__regular-remind-group-wrapper" x-data="{toggleEdit: false}">
                        <div class="create-task-popup__form-control-group regular-remind-group">
                           <p class="create-task-popup__regular-remind-group-text-1">Будет создан шаблон задачи с заданными параметрами повторения</p>
                           <p class="create-task-popup__regular-remind-group-text-2" x-bind:contenteditable="toggleEdit === true ? true : false" x-on:keydown.window.enter="toggleEdit = false"><span x-text="regularTask.mode">Ежедневно</span>, Интервал в днях: <span x-text="regularTask.dayInterval">1</span>, в <span x-text="regularTask.time">14:47</span> (GMT +05:00), <span x-text="regularTask.completion">Без даты окончания</span> <span x-text="regularTask.dateOver"></span> <span x-text="regularTask.repeat"></span></p>
                           <!-- <input type="text" class="create-contragent-popup__form-control-input" value="Будет создан шаблон задачи с заданными параметрами повторения" readonly>
                           <input type="text" class="create-contragent-popup__form-control-input" value="Ежедневно, Интервал в днях: 1, в 14:47 (GMT +05:00), Без даты окончания" readonly> -->
                        </div>
                        <div class="create-task-popup__remind-list-item-controls">
                           <button type="button" class="create-task-popup__remind-list-item-edit-btn" x-on:click="toggleEdit = !toggleEdit">
                               <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                               </svg>
                           </button>
                           <button type="button" class="create-task-popup__remind-list-item-delete-btn" x-on:click="regularTasks = regularTasks.filter(i => i !== regularTask)">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M15 1L1 15M1 1L15 15" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                   </svg>             
                           </button>
                       </div>
                       </div>
                 </template>
                 <button type="button" class="create-task-popup__make-regular-btn" x-on:click="regularTasksAltPopup = true">
                    Сделать регулярной
                 </button>
            </fieldset>
        </div>
    <ul role="list" class="popup__btn-control-group create-task-popup__btn-control-group">
      <li class="popup__btn-control-group-item create-task-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat popup__undo-btn create-task-popup__undo-btn" x-on:click="createTaskPopup = false">
              Отменить
          </button>
      </li>
      <li class="popup__btn-control-group-item create-task-popup__btn-control-group-item">
        <button type="button" class="btn btn--secondary create-task-popup__save-create-btn">
            Сохранить и создать ещё
        </button>
    </li>
      <li class="popup__btn-control-group-item create-task-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary popup__save-btn create-task-popup__save-btn" x-on:click="taskTableLists.push({name:createTaskPopupInputValName, status: createTaskPopupInputValStatus, setter: selectNameListsResp[0].name, executor: selectNameListsResp[0].name, datestart: picker1, dateend: picker2, taskTableTags: [...tagLists]});createTaskPopup = false">
              Сохранить
          </button>
      </li>
    </ul>
    </div>
</div>
</form>
</div>
<script type="module">
    // Tempus Dominus JavaScript datepicker https://getdatepicker.com/ 
    import { TempusDominus } from 'https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.esm.js';
  
    const picker1 = new TempusDominus(document.getElementById('datetimepicker1'), {
      display: {
        theme: 'light',
        buttons: {
          clear: true,
        },
        components: {
          clock: false,
          hours: false,
          minutes: false,
          seconds: false,
        },
      }
    });

    // const date = picker1.viewDate;

    const picker2 = new TempusDominus(document.getElementById('datetimepicker2'), {
      display: {
        theme: 'light',
        buttons: {
          clear: true,
        },
        components: {
          clock: false,
          hours: false,
          minutes: false,
          seconds: false,
        },
      }
    });
    
    function initTippyTooltip() {
        if (window.innerWidth >= 1200) {
            tippy('.create-task-popup__add-few-btn', {
           content: 'Для каждого ответственного будет создана своя задача',
           placement: 'right'
         })
        } else {
            tippy('.create-task-popup__add-few-btn', {
           content: 'Для каждого ответственного будет создана своя задача',
           placement: 'bottom'
         })
        }
    }

    initTippyTooltip();
    
  </script>
  </section>
      </div>
    </main>
    <footer class="footer" x-data="{footerMobileMenu:false, accountEnterPopup: false, footerProfileMenuPopup: false, footerOptionsDropdown: false }" x-on:click.outside="footerOptionsDropdown = false">
    <div class="container footer__container">
    <button type="button" class="footer__hamb-btn" x-on:click="footerMobileMenu = !footerMobileMenu" x-bind:class="{'active': footerMobileMenu === true}">
        <span></span>         
        <span></span>
        <span></span>
    </button>
    <ul class="footer__right" role="list">
        <li class="footer__right-item">
            <button type="button" class="footer__add-options-btn" x-on:click="footerOptionsDropdown = !footerOptionsDropdown">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.9993 1.66663V20.3333M1.66602 11H20.3327" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                            
            </button>
        </li>
        <li class="footer__right-item">
            <button type="button" class="footer__new-messages-btn" x-on:click="eventsBoardPopup = true">
                <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.99984 6.33333H14.9998M6.99984 11.6667H14.9998M6.99984 17H12.3332M4.33317 1H17.6665C19.1393 1 20.3332 2.19391 20.3332 3.66667V22.3333C20.3332 23.8061 19.1393 25 17.6665 25H4.33317C2.86041 25 1.6665 23.8061 1.6665 22.3333V3.66667C1.6665 2.19391 2.86041 1 4.33317 1Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
            </button>
        </li>
        <li class="footer__right-item">
            <button type="button" class="footer__new-nots-btn" x-on:click="notifyPopup = true">
                <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.99967 19.6667V21C7.99967 22.0609 8.4211 23.0783 9.17125 23.8284C9.92139 24.5786 10.9388 25 11.9997 25C13.0605 25 14.078 24.5786 14.8281 23.8284C15.5782 23.0783 15.9997 22.0609 15.9997 21V19.6667M9.33301 3.66667C9.33301 2.95942 9.61396 2.28115 10.1141 1.78105C10.6142 1.28095 11.2924 1 11.9997 1C12.7069 1 13.3852 1.28095 13.8853 1.78105C14.3854 2.28115 14.6663 2.95942 14.6663 3.66667C16.1976 4.3907 17.5029 5.51777 18.4424 6.92707C19.3819 8.33636 19.9203 9.97476 19.9997 11.6667V15.6667C20.1 16.4956 20.3936 17.2894 20.8568 17.9842C21.3199 18.6789 21.9398 19.2552 22.6663 19.6667H1.33301C2.05959 19.2552 2.67942 18.6789 3.14259 17.9842C3.60576 17.2894 3.89933 16.4956 3.99967 15.6667V11.6667C4.07909 9.97476 4.61741 8.33636 5.55694 6.92707C6.49647 5.51777 7.8018 4.3907 9.33301 3.66667Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>    
            </button>
        </li>
        <li class="footer__right-item">
            <button type="button" class="footer__calc-btn">
                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.44444 13.2222V13.2333M9.88889 13.2222V13.2333M14.3333 13.2222V13.2333M5.44444 16.5556V16.5667M9.88889 16.5556V16.5667M14.3333 16.5556V16.5667M3.22222 1H16.5556C17.7829 1 18.7778 1.99492 18.7778 3.22222V18.7778C18.7778 20.0051 17.7829 21 16.5556 21H3.22222C1.99492 21 1 20.0051 1 18.7778V3.22222C1 1.99492 1.99492 1 3.22222 1ZM6.55556 5.44444H13.2222C13.8359 5.44444 14.3333 5.94191 14.3333 6.55556V7.66667C14.3333 8.28032 13.8359 8.77778 13.2222 8.77778H6.55556C5.94191 8.77778 5.44444 8.28032 5.44444 7.66667V6.55556C5.44444 5.94191 5.94191 5.44444 6.55556 5.44444Z" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>     
            </button>
        </li>
        <li class="footer__right-item">
            <button type="button" class="footer__profile-btn" x-on:click="accountEnterPopup = !accountEnterPopup">
                <img class="header__avatar-btn-img" src="/images/footer-avatar-placeholder.svg" alt="footer avatar" width="32" height="32" loading="lazy" decoding="async">
            </button>
        </li>
    </ul>
    </div>
    <aside class="footer-mobile-menu" x-bind:class="{'active': footerMobileMenu === true}" x-data="{url: '/taskPage.html'}">
    <a href="/" class="footer-mobile-menu__logo">
        <svg width="157" height="25" viewBox="0 0 157 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.67542 6.3334C3.63117 6.28889 3.63117 6.28889 3.58691 6.24438L3.67542 6.3334Z" fill="#869AB8"></path>
            <path d="M13.8239 6.68408C13.8239 6.72859 13.7796 6.72859 13.7354 6.72859L13.8239 6.68408Z" fill="#869AB8"></path>
            <path d="M11.1104 14.0722L11.0667 14.2481L11.0229 14.6439L10.9792 15.1276V15.6553L10.9354 16.139L10.848 16.5788L10.7605 16.9745L10.673 17.2384L10.6293 17.2824V17.3703L10.5418 17.5902L10.3668 17.898L10.1481 18.1618L9.92939 18.3817L9.79816 18.4697H9.75442L9.66694 18.5576L9.49197 18.6455H9.40449L9.36074 18.6895L9.18578 18.7775L8.87958 18.8654L8.66088 18.9094C6.56127 19.1293 4.46166 19.525 2.49328 20.0967C0.918578 18.0299 0 15.4354 0 12.6211C0 9.80676 0.918578 7.25626 2.49328 5.14551L2.62451 5.18948L2.84322 5.27743L3.01818 5.45333L3.23689 5.6732L3.41186 5.89307L3.54309 6.15691L3.67431 6.46473C3.67431 6.46473 3.67431 6.42076 3.67431 6.37678L3.76179 6.81652C3.76179 6.81652 3.76179 6.77255 3.76179 6.72857V6.81652L3.80554 7.21229L3.84928 7.56408V7.95985V8.00382L3.80554 8.44356L3.71805 8.92728V8.97125L3.67431 9.41099V9.85073V10.2905L3.71805 10.7742L3.76179 11.3459L3.84928 11.9175L3.9805 12.5332L4.11173 13.1048L4.2867 13.7644L4.68037 14.9957L4.94282 15.6553L5.46772 16.8866L5.77392 17.1065L6.43004 17.1944H6.47379L7.30488 17.2824L8.83584 17.4143L9.18578 17.2824L9.8419 16.2709L10.1918 15.6993L10.5418 15.0836L10.848 14.512L11.1104 14.0722Z" fill="#869AB8"></path>
            <path d="M20.0777 19.2603L20.1652 19.2161L19.9902 19.3487L20.0777 19.2603Z" fill="#869AB8"></path>
            <path d="M21.8275 20.6673C19.553 23.3058 16.1848 24.9768 12.423 24.9768C8.66125 24.9768 5.29313 23.3058 3.01855 20.6233C4.89945 20.0957 6.78035 19.7439 8.74873 19.524L9.01118 19.48H9.05492L9.31737 19.3921L9.66731 19.2601H9.75479L9.84227 19.1722L10.0172 19.0843H10.061L10.1485 18.9963L10.3672 18.8204C10.3672 18.8204 10.4109 18.7764 10.4547 18.7325L10.6296 18.5566L10.8921 18.2487C10.9358 18.2048 10.9358 18.1608 10.9796 18.1608L11.1545 17.897L11.3295 17.5452L11.3732 17.4572V17.3693L11.4607 17.0614L11.5919 16.6217L11.6794 16.138C11.6794 16.094 11.6794 16.05 11.6794 16.05L11.7232 15.6103V15.0826L11.7669 14.6868L11.8107 14.379L12.0294 13.4995L12.1606 13.1038L12.2043 13.0598V12.9719L12.3356 12.5321L12.3793 12.4881V12.4002L12.5543 12.0044L13.0792 10.8611L13.3416 10.3334L13.4291 10.2455V10.1575L13.6478 9.71777L13.7353 9.62983V9.58585L14.0415 9.10214L14.3914 8.53048L14.6101 8.22266L15.9224 8.3106L17.1909 8.44253L17.6283 9.40996L17.8908 10.0696L18.1095 10.6412V10.7292L18.1532 10.7732L18.3282 11.2569V11.3448L18.3719 11.3888L18.5032 11.8725V12.0044L18.5469 12.0484L18.7656 13.0598V13.1917L18.8093 13.2357L18.8968 13.6315V13.7634L18.9843 14.5989V14.9947V15.3465L18.9406 15.6982L18.8531 16.2259V16.7097V17.1494C18.8531 17.1934 18.8531 17.1934 18.8531 17.1934L18.8968 17.6331L18.9843 18.0728V18.1168L19.0718 18.4686L19.2468 18.9084C19.2468 18.9084 19.2468 18.9084 19.2468 18.9523L19.378 19.1722L19.5967 19.48L19.8591 19.7439L20.1653 20.0077L20.5153 20.2276L20.8215 20.3595C20.8652 20.3595 20.8652 20.3595 20.9089 20.4035L21.0839 20.4474L21.1277 20.4914H21.1714C21.4338 20.5794 21.6526 20.6233 21.8275 20.6673Z" fill="#869AB8"></path>
            <path d="M24.8453 12.5322C24.8453 15.3465 23.9267 17.941 22.352 20.0518C22.0458 19.9638 21.7397 19.8759 21.4335 19.7879L20.996 19.612L20.7336 19.4801L20.2962 19.0843L20.1212 18.8645L19.99 18.6006L19.8588 18.3368V18.2488L19.815 18.2049L19.7713 17.985V17.897L19.7275 17.8531L19.64 17.5892L19.5963 17.1935C19.5963 17.1935 19.5963 17.1935 19.5963 17.1495V16.7097L19.64 16.314L19.7275 15.8742L19.7713 15.3465V14.9068V14.4671L19.7275 13.9394L19.5526 12.84L19.4213 12.2244L19.2464 11.6087L19.0277 11.0811V10.9931L18.9839 10.9491L18.809 10.4214L18.3278 9.1462L18.0216 8.44262L17.6717 7.73903L15.922 7.56313L14.1723 7.47519L13.3412 8.75043L12.9913 9.3221L12.9038 9.41005V9.45402L12.3789 10.5534L12.4226 10.4214V10.3775L12.4664 9.98171V9.45402V9.41005L12.5101 8.9703L12.5976 8.57454L12.6851 8.22275V8.17877V8.09082C12.6851 8.1348 12.6851 8.1348 12.6851 8.17877L12.8163 7.87095L12.9913 7.56313L13.1663 7.29929L13.385 7.03545L13.6037 6.81557L13.5599 6.85955L13.6474 6.81557C13.6474 6.81557 13.6474 6.81557 13.6037 6.85955L13.8224 6.72763L14.0411 6.5957L14.3035 6.50776L14.6097 6.41981H14.8284C17.4092 6.24391 19.9462 5.80417 22.3083 5.10059C23.883 7.12339 24.8453 9.71786 24.8453 12.5322Z" fill="#869AB8"></path>
            <path d="M21.4334 19.7876L20.9959 19.6117L20.7335 19.4798L20.2961 19.084L20.1211 18.8641L19.9899 18.6003L19.8587 18.3365V18.2485L19.8149 18.2045L19.7712 17.9847V17.8967L19.7274 17.8527L19.6399 17.5889L19.5962 17.1931C19.5962 17.1931 19.5962 17.1931 19.5962 17.1492V16.7094L19.6399 16.3136L19.7274 15.8739L19.7712 15.3462V14.9065V14.4667L19.7274 13.939L19.5525 12.8397L19.4212 12.2241L19.2463 11.6084L19.0276 11.0807V10.9928L18.9838 10.9488L18.8089 10.4211L18.3277 9.14587L18.0215 8.44228L17.6716 7.7387L15.9219 7.5628L14.1722 7.47485L13.3411 8.7501L12.9912 9.32177L12.9037 9.40971V9.45369L12.3788 10.553L12.3351 10.8609L12.2476 11.3006L12.1164 11.7403L11.8539 12.312L11.6789 12.8397L11.4165 13.4114L11.154 13.939L11.1103 14.071L11.0666 14.2469L11.0228 14.6426L10.9791 15.1263V15.654L10.9353 16.1377L10.8478 16.5775L10.7604 16.9733L10.6729 17.2371L10.6291 17.2811V17.369L10.5417 17.5889L10.3667 17.8967L10.148 18.1606L9.92927 18.3804L9.79804 18.4684H9.7543L9.66682 18.5563L9.49185 18.6443H9.40437L9.36063 18.6882L9.18566 18.7762L8.87947 18.8641L8.66076 18.9081C6.56115 19.128 4.46154 19.5238 2.49316 20.0954C2.66813 20.3153 2.8431 20.5352 3.01807 20.7111C4.89896 20.1834 6.77986 19.8316 8.74824 19.6117L9.01069 19.5677H9.05443L9.31688 19.4798L9.66682 19.3479H9.7543L9.84179 19.2599L10.0168 19.172H10.0605L10.148 19.084L10.3667 18.9081C10.3667 18.9081 10.4104 18.8641 10.4542 18.8202L10.6291 18.6443L10.8916 18.3365C10.9353 18.2925 10.9353 18.2485 10.9791 18.2485L11.154 17.9847L11.329 17.6329L11.3727 17.5449V17.457L11.4602 17.1492L11.5915 16.7094L11.6789 16.2257C11.6789 16.1817 11.6789 16.1377 11.6789 16.1377L11.7227 15.698V15.1703L11.7664 14.7745L11.8102 14.4667L12.0289 13.5873L12.1601 13.1915L12.2038 13.1475V13.0596L12.3351 12.6198L12.3788 12.5758V12.4879L12.5538 12.0921L13.0787 10.9488L13.3411 10.4211L13.4286 10.3332V10.2452L13.6473 9.80548L13.7348 9.71753V9.67356L14.041 9.18984L14.3909 8.61818L14.6096 8.31036L15.9219 8.39831L17.1904 8.53023L17.6278 9.49766L17.8903 10.1573L18.109 10.7289V10.8169L18.1527 10.8609L18.3277 11.3446V11.4325L18.3714 11.4765L18.5027 11.9602V12.0921L18.5464 12.1361L18.7651 13.1475V13.2794L18.8089 13.3234L18.8963 13.7192V13.8511L18.9838 14.6866V15.0824V15.4342L18.9401 15.786L18.8526 16.3136V16.7094V17.1492C18.8526 17.1931 18.8526 17.1931 18.8526 17.1931L18.8963 17.6329L18.9838 18.0726V18.1166L19.0713 18.4684L19.2463 18.9081C19.2463 18.9081 19.2463 18.9081 19.2463 18.9521L19.3775 19.172L19.5962 19.4798L19.8587 19.7436L20.1648 20.0075L20.5148 20.2273L20.821 20.3593C20.8647 20.3593 20.8647 20.3593 20.9085 20.4032L21.0834 20.4472L21.1272 20.4912H21.1709C21.3459 20.5352 21.5646 20.5791 21.7396 20.6231C21.9145 20.4032 22.0895 20.2273 22.2645 20.0075C22.0457 19.9635 21.7396 19.8755 21.4334 19.7876ZM19.9899 19.3479L20.0774 19.2599L20.1648 19.2159L19.9899 19.3479Z" fill="#F9FBFD"></path>
            <path d="M21.8274 4.39648C19.5529 5.01212 17.2346 5.45186 14.785 5.58378L14.5226 5.62776H14.4788L14.1726 5.71571C14.1289 5.71571 14.1289 5.71571 14.0851 5.71571L13.779 5.84763L13.429 6.02353H13.3853C13.3415 6.02353 13.2978 6.0675 13.2978 6.11147L13.1666 6.19942C13.1228 6.19942 13.0791 6.2434 13.0791 6.28737L12.9041 6.46327C12.8604 6.50724 12.8166 6.55121 12.8166 6.55121L12.6417 6.77108C12.6417 6.77108 12.5979 6.81506 12.5542 6.85903L12.3792 7.12288L12.3355 7.16685L12.1605 7.47467V7.51864C12.1605 7.56262 12.1168 7.56262 12.1605 7.56262L11.9855 7.91441C11.9855 7.91441 11.9418 7.95838 11.9418 8.00236L11.8543 8.35415V8.4421L11.7668 8.88184V8.92581L11.7231 9.40953L11.6793 9.98119L11.6356 10.333L11.5481 10.7288L11.4606 11.1245L11.3294 11.5643L11.1544 12.048L10.717 13.0594L10.4983 13.631L10.1921 14.2027L9.88593 14.7744L9.536 15.346L9.18607 15.9177L8.79239 16.4894L8.57368 16.7972L8.09252 16.7092L6.47407 16.5333H6.43033L5.99291 16.4454L5.59924 15.478L5.38053 14.8183L5.16182 14.2027H5.11808H5.16182L4.98685 13.5871L4.81189 12.9714L4.68066 12.3998L4.59318 11.8281L4.50569 11.3444L4.46195 10.7727L4.41821 10.289V9.84927V9.4535L4.46195 9.05774L4.54944 8.57402V8.53005L4.59318 8.04633V7.56262C4.59318 7.51864 4.59318 7.47467 4.59318 7.47467V7.16685C4.59318 7.12288 4.59318 7.0789 4.59318 7.03493L4.54944 6.68314C4.54944 6.63916 4.54944 6.59519 4.54944 6.59519L4.46195 6.28737V6.2434L4.33073 5.8916L4.28698 5.80366L4.11202 5.49584V5.45186L3.89331 5.14404C3.84957 5.10007 3.84957 5.10007 3.84957 5.10007L3.6746 4.92417C3.63086 4.8802 3.58712 4.83623 3.58712 4.83623L3.41215 4.66033C3.36841 4.61635 3.32467 4.61635 3.32467 4.57238L3.06221 4.39648C2.88725 4.57238 2.75602 4.79225 2.58105 5.01212L2.71228 5.0561L2.84351 5.27597L3.01847 5.45186L3.23718 5.67173L3.41215 5.8916L3.54337 6.15545L3.6746 6.46327C3.6746 6.46327 3.6746 6.41929 3.6746 6.37532L3.76208 6.81506C3.76208 6.81506 3.76208 6.77108 3.76208 6.72711V6.81506L3.80583 7.21083L3.84957 7.56262V7.95838V8.00236L3.80583 8.4421L3.71834 8.92581V8.96979L3.6746 9.40953V9.84927V10.289L3.71834 10.7727L3.76208 11.3444L3.84957 11.9161L3.98079 12.5317L4.11202 13.1034L4.28698 13.763L4.68066 14.9942L4.94311 15.6538L5.46801 16.8851L5.77421 17.105L6.43033 17.1929H6.47407L7.30517 17.2809L8.83613 17.4128L9.18607 17.2809L9.84219 16.2695L10.1921 15.6978L10.5421 15.0822L10.8483 14.5105L11.1107 14.0268L11.1544 13.8069L11.2857 13.2792L11.5919 12.2678V12.1799L11.6356 12.1359L11.8106 11.6962L12.073 11.1245L12.3355 10.5968L12.3792 10.4649V10.4209L12.423 10.0252V9.49748V9.4535L12.4667 9.01376L12.5542 8.618L12.6417 8.2662V8.22223V8.13428C12.6417 8.17826 12.6417 8.17826 12.6417 8.22223L12.7729 7.91441L12.9479 7.60659L13.1228 7.34275L13.3415 7.0789L13.5602 6.85903L13.5165 6.90301L13.604 6.85903C13.604 6.85903 13.604 6.85903 13.5602 6.90301L13.779 6.77108C13.7352 6.77108 13.7352 6.81506 13.6915 6.81506L13.779 6.77108L13.9977 6.63916L14.2601 6.55121L14.5663 6.46327H14.785C17.3658 6.28737 19.9028 5.84763 22.2649 5.14404C22.1774 4.83623 22.0024 4.61635 21.8274 4.39648ZM3.63086 6.2434L3.71834 6.33134C3.6746 6.28737 3.63086 6.28737 3.63086 6.2434ZM13.9539 6.55121H14.0414C13.9977 6.55121 13.9977 6.55121 13.9539 6.55121Z" fill="#F9FBFD"></path>
            <path d="M21.8277 4.39692C19.5532 5.01256 17.2348 5.4523 14.7853 5.58422L14.5229 5.62819H14.4791L14.1729 5.71614C14.1292 5.71614 14.1292 5.71614 14.0854 5.71614L13.7792 5.84806L13.4293 6.02396H13.3856C13.3418 6.02396 13.2981 6.06793 13.2981 6.11191L13.1669 6.19986C13.1231 6.19986 13.0794 6.24383 13.0794 6.2878L12.9044 6.4637C12.8607 6.50768 12.8169 6.55165 12.8169 6.55165L12.642 6.77152C12.642 6.77152 12.5982 6.81549 12.5545 6.85947L12.3795 7.12331L12.3358 7.16729L12.1608 7.47511V7.51908C12.1608 7.56305 12.1171 7.56305 12.1608 7.56305L11.9858 7.91485C11.9858 7.91485 11.9421 7.95882 11.9421 8.00279L11.8546 8.35459V8.44254L11.7671 8.88228V8.92625L11.7234 9.40997L11.6796 9.98163L11.6359 10.3334L11.5484 10.7292L11.4609 11.125L11.3297 11.5647L11.1547 12.0484L10.7173 13.0598L10.4986 13.6315L10.1924 14.2031L9.88622 14.7748L9.53629 15.3465L9.18635 15.9181L8.79268 16.4898L8.57397 16.7976L8.09281 16.7097L6.47436 16.5338H6.43062L5.9932 16.4458L5.59952 15.4784L5.38082 14.8188L5.16211 14.2031L4.98714 13.5875L4.81217 12.9719L4.68095 12.4002L4.59346 11.8285L4.50598 11.3448L4.46224 10.7732L4.4185 10.2894V9.84971V9.45394L4.46224 9.05817L4.54972 8.57446V8.53048L4.59346 8.04677V7.56305C4.59346 7.51908 4.59346 7.47511 4.59346 7.47511V7.16729C4.59346 7.12331 4.59346 7.07934 4.59346 7.03536L4.54972 6.68357C4.54972 6.6396 4.54972 6.59562 4.54972 6.59562L4.46224 6.2878V6.24383L4.33101 5.89204L4.28727 5.80409L4.1123 5.49627V5.4523L3.89359 5.14448C3.84985 5.10051 3.84985 5.10051 3.84985 5.10051L3.67489 4.92461C3.63114 4.88064 3.5874 4.83666 3.5874 4.83666L3.41243 4.66076C3.36869 4.61679 3.32495 4.61679 3.32495 4.57282L3.0625 4.39692C5.33707 1.7145 8.70519 -0.000488281 12.5107 -0.000488281C16.185 0.0874599 19.5532 1.75847 21.8277 4.39692Z" fill="#869AB8"></path>
            <path d="M36.1404 15.8219L31.9443 5.46912H35.0608L37.4542 11.9166L39.5318 5.46912H42.3631L38.6458 16.5683C38.1637 18.0179 37.6477 18.9916 37.0977 19.4892C36.5545 19.9868 35.7975 20.2356 34.8266 20.2356H33.5331V17.4987H34.8266C35.0303 17.4987 35.2339 17.4302 35.4376 17.2931C35.6481 17.1489 35.8824 16.6585 36.1404 15.8219Z" fill="#869AB8"></path>
            <path d="M43.1881 5.46912H47.1906C48.406 5.46912 49.3463 5.5773 50.0117 5.79366C50.6839 6.01002 51.2474 6.50043 51.7023 7.2649C52.1573 8.02216 52.3847 8.96332 52.3847 10.0884C52.3847 11.1702 52.2014 12.0645 51.8347 12.7712C51.4681 13.478 50.9589 13.9901 50.3071 14.3074C49.662 14.6175 48.6674 14.7726 47.323 14.7726H46.2434V20.2356H43.1881V5.46912ZM46.2434 7.85989V12.2303H47.1906C48.0257 12.2303 48.5621 12.0248 48.7998 11.6137C49.0442 11.2026 49.1664 10.6689 49.1664 10.0127C49.1664 9.45734 49.0713 9.0102 48.8812 8.67123C48.6979 8.32506 48.4806 8.10509 48.2294 8.01134C47.985 7.91037 47.6387 7.85989 47.1906 7.85989H46.2434Z" fill="#869AB8"></path>
            <path d="M55.8475 5.46912H58.9232L62.8952 20.2356H59.7685L59.076 17.185H55.1651L54.4827 20.2356H51.6718L55.8475 5.46912ZM58.4954 14.6536L57.1002 8.62796L55.7456 14.6536H58.4954Z" fill="#869AB8"></path>
            <path d="M66.2662 20.2356H63.4451L67.2643 5.46912H70.6965L74.6685 20.2356H71.6335L68.8735 8.62796L66.2662 20.2356Z" fill="#869AB8"></path>
            <path d="M75.7786 5.46912H79.7811C80.9965 5.46912 81.9369 5.5773 82.6022 5.79366C83.2744 6.01002 83.838 6.50043 84.2929 7.2649C84.7478 8.02216 84.9752 8.96332 84.9752 10.0884C84.9752 11.1702 84.7919 12.0645 84.4253 12.7712C84.0586 13.478 83.5494 13.9901 82.8976 14.3074C82.2526 14.6175 81.2579 14.7726 79.9135 14.7726H78.834V20.2356H75.7786V5.46912ZM78.834 7.85989V12.2303H79.7811C80.6163 12.2303 81.1526 12.0248 81.3903 11.6137C81.6347 11.2026 81.7569 10.6689 81.7569 10.0127C81.7569 9.45734 81.6619 9.0102 81.4718 8.67123C81.2884 8.32506 81.0712 8.10509 80.82 8.01134C80.5755 7.91037 80.2292 7.85989 79.7811 7.85989H78.834Z" fill="#869AB8"></path>
            <path d="M86.452 5.46912H94.9052V8.00052H89.5074V11.4298H93.7034V13.972H89.5074V17.596H94.9052V20.2356H86.452V5.46912Z" fill="#869AB8"></path>
            <path d="M95.669 17.542L98.6938 5.46912H102.615L105.355 17.542H106.22V23.2322H103.959L103.684 20.2356H97.3189L97.0541 23.2322H94.7931V17.542H95.669ZM98.4494 17.542H102.258L100.588 8.58469H100.201L98.4494 17.542Z" fill="#869AB8"></path>
            <path d="M109.693 15.8219L105.497 5.46912H108.614L111.007 11.9166L113.085 5.46912H115.916L112.199 16.5683C111.716 18.0179 111.2 18.9916 110.65 19.4892C110.107 19.9868 109.35 20.2356 108.379 20.2356H107.086V17.4987H108.379C108.583 17.4987 108.787 17.4302 108.99 17.2931C109.201 17.1489 109.435 16.6585 109.693 15.8219Z" fill="#869AB8"></path>
            <path d="M116.741 5.46912H119.796V11.6245L123.177 5.46912H126.263L122.78 10.8997L126.559 20.2356H123.402L120.957 13.4311L119.796 15.2161V20.2356H116.741V5.46912Z" fill="#869AB8"></path>
            <path d="M126.202 5.46912H134.869V8.23852H132.028V20.2356H128.972V8.23852H126.202V5.46912Z" fill="#869AB8"></path>
            <path d="M145.665 12.847C145.665 17.9242 143.984 20.4628 140.624 20.4628C138.953 20.4628 137.694 19.8173 136.845 18.5264C135.996 17.2282 135.572 15.3351 135.572 12.847C135.572 7.77695 137.253 5.24194 140.613 5.24194C142.257 5.24194 143.509 5.8766 144.371 7.1459C145.234 8.41521 145.665 10.3156 145.665 12.847ZM142.447 12.847C142.447 10.8565 142.301 9.53306 142.009 8.87677C141.717 8.21327 141.252 7.88152 140.613 7.88152C139.982 7.88152 139.52 8.21327 139.228 8.87677C138.936 9.54028 138.79 10.8637 138.79 12.847C138.79 14.7942 138.933 16.1104 139.218 16.7955C139.51 17.4806 139.975 17.8232 140.613 17.8232C141.245 17.8232 141.707 17.4951 141.998 16.8388C142.297 16.1825 142.447 14.8519 142.447 12.847Z" fill="#869AB8"></path>
            <path d="M147.804 5.46912H151.806C153.022 5.46912 153.962 5.5773 154.627 5.79366C155.299 6.01002 155.863 6.50043 156.318 7.2649C156.773 8.02216 157 8.96332 157 10.0884C157 11.1702 156.817 12.0645 156.45 12.7712C156.084 13.478 155.574 13.9901 154.923 14.3074C154.278 14.6175 153.283 14.7726 151.939 14.7726H150.859V20.2356H147.804V5.46912ZM150.859 7.85989V12.2303H151.806C152.641 12.2303 153.178 12.0248 153.415 11.6137C153.66 11.2026 153.782 10.6689 153.782 10.0127C153.782 9.45734 153.687 9.0102 153.497 8.67123C153.314 8.32506 153.096 8.10509 152.845 8.01134C152.601 7.91037 152.254 7.85989 151.806 7.85989H150.859Z" fill="#869AB8"></path>
        </svg>                
    </a>
    <nav class="footer-mobile-menu__nav">
        <ul role="list" class="footer-mobile-menu__list">
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">
                <a href="#" class="footer-mobile-menu__list-link" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">
                        <path d="M8.99966 15C9.31508 15.1377 9.65552 15.2087 9.99966 15.2087C10.3438 15.2087 10.6842 15.1377 10.9997 15M5.99966 9L7.99966 11M13.9997 9L11.9997 11M9.99967 1C5.33567 1 2.60367 3.331 2.13767 6.595C1.67013 9.6098 2.38679 12.6886 4.13767 15.187C4.98033 16.4188 6.06967 17.4622 7.33667 18.251C9.00267 19.251 11.0007 19.251 12.6667 18.251C13.9337 17.4622 15.023 16.4188 15.8657 15.187C17.6094 12.6854 18.3254 9.6095 17.8657 6.595C17.3997 3.33 14.6677 1 10.0037 1H9.99967Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="footer-mobile-menu__list-item-title footer-mobile-menu__list-item-title--name" x-bind:class="{'active': url === '/userPage.html' || url === '/userPage'}">Иван Александрович</span>          
                </a>
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/eventsBoard.html' || url === '/eventsBoard'}">
                <a href="/eventsBoard" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/eventsBoard.html' || url === '/eventsBoard'}">
                        <path d="M6 15V16C6 16.7956 6.31607 17.5587 6.87868 18.1213C7.44129 18.6839 8.20435 19 9 19C9.79565 19 10.5587 18.6839 11.1213 18.1213C11.6839 17.5587 12 16.7956 12 16V15M7 3C7 2.46957 7.21071 1.96086 7.58579 1.58579C7.96086 1.21071 8.46957 1 9 1C9.53043 1 10.0391 1.21071 10.4142 1.58579C10.7893 1.96086 11 2.46957 11 3C12.1484 3.54303 13.1274 4.38833 13.8321 5.4453C14.5367 6.50227 14.9404 7.73107 15 9V12C15.0753 12.6217 15.2954 13.2171 15.6428 13.7381C15.9902 14.2592 16.4551 14.6914 17 15H1C1.54494 14.6914 2.00981 14.2592 2.35719 13.7381C2.70457 13.2171 2.92474 12.6217 3 12V9C3.05956 7.73107 3.4633 6.50227 4.16795 5.4453C4.8726 4.38833 5.85159 3.54303 7 3Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/eventsBoard.html' || url === '/eventsBoard'}">Лента событий</span>          
                </a>
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/taskPage.html' || url === '/taskPage'}">
                <a href="/taskPage" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1H16M5 7H16M5 13H16M1 1V1.01M1 7V7.01M1 13V13.01" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                  
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/tasksPage.html' || url === '/tasksPage'}">Задачи</span>          
                </a>
            </li>
            <li class="footer-mobile-menu__list-item">
                <a href="#" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                                   
                        <span class="footer-mobile-menu__list-item-title">Обратная связь</span>          
                </a>
                <span class="footer-mobile-menu__indicator-new blinking"></span>
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/emailPage.html' || url === '/emailPage'}">
                <a href="/emailPage" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                                   
                        <span class="footer-mobile-menu__list-item-title">Почта</span>          
                </a>
            </li>
        </ul>
        <ul role="list" class="footer-mobile-menu__list">
            <li class="footer-mobile-menu__list-item active" x-bind:class="{'active': url === '/orders.html' || url === '/orders'}">
                <a href="/orders" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/orders.html' || url === '/orders'}">
                        <path d="M16 7H16.01M4 7H4.01M13 7C13 8.65685 11.6569 10 10 10C8.34315 10 7 8.65685 7 7C7 5.34315 8.34315 4 10 4C11.6569 4 13 5.34315 13 7ZM3 1H17C18.1046 1 19 1.89543 19 3V11C19 12.1046 18.1046 13 17 13H3C1.89543 13 1 12.1046 1 11V3C1 1.89543 1.89543 1 3 1Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> 
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/orders.html' || url === '/orders'}">Заказы</span>          
                </a>
                <span class="footer-mobile-menu__indicator-new blinking"></span>
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/financesPage.html' || url === '/financesPage'}">
                <a href="/financesPage" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/financesPage.html' || url === '/financesPage'}">
                        <path d="M17 4C17 5.65685 13.4183 7 9 7C4.58172 7 1 5.65685 1 4M17 4C17 2.34315 13.4183 1 9 1C4.58172 1 1 2.34315 1 4M17 4V10M1 4V10M1 10C1 10.7956 1.84285 11.5587 3.34315 12.1213C4.84344 12.6839 6.87827 13 9 13C11.1217 13 13.1566 12.6839 14.6569 12.1213C16.1571 11.5587 17 10.7956 17 10M1 10V16C1 16.7956 1.84285 17.5587 3.34315 18.1213C4.84344 18.6839 6.87827 19 9 19C11.1217 19 13.1566 18.6839 14.6569 18.1213C16.1571 17.5587 17 16.7956 17 16V10" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/financesPage.html' || url === '/financesPage'}">Финансы</span>          
                </a>
            </li>
            <!-- <li class="footer-mobile-menu__list-item" x-bind:class="{'active': toggleSubMenu === true }" x-data="{toggleSubMenu: false}">
                <a class="footer-mobile-menu__list-link" x-on:click="toggleSubMenu = !toggleSubMenu">
                    <svg class="footer-mobile-menu__list-icon" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleSubMenu === true }">
                        <path d="M10 1V5C10 5.26522 10.1054 5.51957 10.2929 5.70711C10.4804 5.89464 10.7348 6 11 6H15M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V17C1 17.5304 1.21071 18.0391 1.58579 18.4142C1.96086 18.7893 2.46957 19 3 19H13C13.5304 19 14.0391 18.7893 14.4142 18.4142C14.7893 18.0391 15 17.5304 15 17V6M10 1L15 6M5 7H6M5 11H11M5 15H11" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                 
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': toggleSubMenu === true }">Документы</span>          
                </a>
                <ul role="list" x-bind:class="{'active': toggleSubMenu === true }" class="footer-mobile-menu__sublist" x-show="toggleSubMenu === true" x-collapse.duration.750ms>
                    <li class="footer-mobile-menu__sublist-item">
                        <a href="#" class="footer-mobile-menu__sublist-item-link">Документы</a>
                    </li>
                    <li class="footer-mobile-menu__sublist-item">
                        <a href="#" class="footer-mobile-menu__sublist-item-link">Документы</a>
                    </li>
                </ul>
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-mobile-menu__list-item-submenu-arrow" x-bind:class="{'active': toggleSubMenu === true}">
                    <path d="M5 1L1 5L5 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </li> -->
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/contragentsPage.html' || url === '/contragentsPage'}">
                <a href="/contragentsPage" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="18" height="21" viewBox="0 0 8 21" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/contragentsPage.html' || url === '/contragentsPage'}">
                        <path d="M2 20V15L1 14V10C1 9.73478 1.10536 9.48043 1.29289 9.29289C1.48043 9.10536 1.73478 9 2 9H6C6.26522 9 6.51957 9.10536 6.70711 9.29289C6.89464 9.48043 7 9.73478 7 10V14L6 15V20M6 3C6 4.10457 5.10457 5 4 5C2.89543 5 2 4.10457 2 3C2 1.89543 2.89543 1 4 1C5.10457 1 6 1.89543 6 3Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/contragentsPage.html' || url === '/contragentsPage'}">Контрагенты</span>          
                </a>
            </li>
        </ul>
        <ul role="list" class="footer-mobile-menu__list">
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/goodsPage.html' || url === '/goodsPage'}">
                <a href="/goodsPage" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/goodsPage.html' || url === '/goodsPage'}">
                        <path d="M4.99984 1.66699H2.33317C1.96498 1.66699 1.6665 1.96547 1.6665 2.33366V5.00033C1.6665 5.36852 1.96498 5.66699 2.33317 5.66699H4.99984C5.36803 5.66699 5.6665 5.36852 5.6665 5.00033V2.33366C5.6665 1.96547 5.36803 1.66699 4.99984 1.66699Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.6665 1.66699H8.99984C8.63165 1.66699 8.33317 1.96547 8.33317 2.33366V5.00033C8.33317 5.36852 8.63165 5.66699 8.99984 5.66699H11.6665C12.0347 5.66699 12.3332 5.36852 12.3332 5.00033V2.33366C12.3332 1.96547 12.0347 1.66699 11.6665 1.66699Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4.99984 8.33366H2.33317C1.96498 8.33366 1.6665 8.63214 1.6665 9.00033V11.667C1.6665 12.0352 1.96498 12.3337 2.33317 12.3337H4.99984C5.36803 12.3337 5.6665 12.0352 5.6665 11.667V9.00033C5.6665 8.63214 5.36803 8.33366 4.99984 8.33366Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.6665 8.33366H8.99984C8.63165 8.33366 8.33317 8.63214 8.33317 9.00033V11.667C8.33317 12.0352 8.63165 12.3337 8.99984 12.3337H11.6665C12.0347 12.3337 12.3332 12.0352 12.3332 11.667V9.00033C12.3332 8.63214 12.0347 8.33366 11.6665 8.33366Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                        
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/goodsPage.html' || url === '/goodsPage'}">Товары</span>          
                </a>
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': toggleSubMenu === true }" x-data="{toggleSubMenu: false}">
                <a href="#" class="footer-mobile-menu__list-link" x-on:click="toggleSubMenu = !toggleSubMenu">
                    <svg class="footer-mobile-menu__list-icon" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleSubMenu === true }">
                        <path d="M10 1V5C10 5.26522 10.1054 5.51957 10.2929 5.70711C10.4804 5.89464 10.7348 6 11 6H15M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V17C1 17.5304 1.21071 18.0391 1.58579 18.4142C1.96086 18.7893 2.46957 19 3 19H13C13.5304 19 14.0391 18.7893 14.4142 18.4142C14.7893 18.0391 15 17.5304 15 17V6M10 1L15 6M5 7H6M5 11H11M5 15H11" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                   
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': toggleSubMenu === true }">Файлы</span>          
                </a>
                <ul role="list" x-bind:class="{'active': toggleSubMenu === true }" class="footer-mobile-menu__sublist" x-show="toggleSubMenu === true" x-collapse.duration.750ms>
                    <li class="footer-mobile-menu__sublist-item">
                        <a href="/filesPage" class="footer-mobile-menu__sublist-item-link">Файлы</a>
                    </li>
                    <li class="footer-mobile-menu__sublist-item">
                        <a href="/filesPage" class="footer-mobile-menu__sublist-item-link">Файлы</a>
                    </li>
                </ul>
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-mobile-menu__list-item-submenu-arrow" x-bind:class="{'active': toggleSubMenu === true}">
                    <path d="M5 1L1 5L5 9" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> 
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}">
                <a href="#" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}">
                        <path d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                                                     
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/usersPage.html' || url === '/usersPage'}">Пользователи</span>          
                </a>
            </li>
        </ul>
        <ul role="list" class="footer-mobile-menu__list">
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}">
                <a href="/settingsPage" class="footer-mobile-menu__list-link">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}">
                        <path d="M8.325 2.317C8.751 0.561 11.249 0.561 11.675 2.317C11.7389 2.5808 11.8642 2.82578 12.0407 3.032C12.2172 3.23822 12.4399 3.39985 12.6907 3.50375C12.9414 3.60764 13.2132 3.65085 13.4838 3.62987C13.7544 3.60889 14.0162 3.5243 14.248 3.383C15.791 2.443 17.558 4.209 16.618 5.753C16.4769 5.98466 16.3924 6.24634 16.3715 6.51677C16.3506 6.78721 16.3938 7.05877 16.4975 7.30938C16.6013 7.55999 16.7627 7.78258 16.9687 7.95905C17.1747 8.13553 17.4194 8.26091 17.683 8.325C19.439 8.751 19.439 11.249 17.683 11.675C17.4192 11.7389 17.1742 11.8642 16.968 12.0407C16.7618 12.2172 16.6001 12.4399 16.4963 12.6907C16.3924 12.9414 16.3491 13.2132 16.3701 13.4838C16.3911 13.7544 16.4757 14.0162 16.617 14.248C17.557 15.791 15.791 17.558 14.247 16.618C14.0153 16.4769 13.7537 16.3924 13.4832 16.3715C13.2128 16.3506 12.9412 16.3938 12.6906 16.4975C12.44 16.6013 12.2174 16.7627 12.0409 16.9687C11.8645 17.1747 11.7391 17.4194 11.675 17.683C11.249 19.439 8.751 19.439 8.325 17.683C8.26108 17.4192 8.13578 17.1742 7.95929 16.968C7.7828 16.7618 7.56011 16.6001 7.30935 16.4963C7.05859 16.3924 6.78683 16.3491 6.51621 16.3701C6.24559 16.3911 5.98375 16.4757 5.752 16.617C4.209 17.557 2.442 15.791 3.382 14.247C3.5231 14.0153 3.60755 13.7537 3.62848 13.4832C3.64942 13.2128 3.60624 12.9412 3.50247 12.6906C3.3987 12.44 3.23726 12.2174 3.03127 12.0409C2.82529 11.8645 2.58056 11.7391 2.317 11.675C0.561 11.249 0.561 8.751 2.317 8.325C2.5808 8.26108 2.82578 8.13578 3.032 7.95929C3.23822 7.7828 3.39985 7.56011 3.50375 7.30935C3.60764 7.05859 3.65085 6.78683 3.62987 6.51621C3.60889 6.24559 3.5243 5.98375 3.383 5.752C2.443 4.209 4.209 2.442 5.753 3.382C6.753 3.99 8.049 3.452 8.325 2.317Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                    
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/settingsPage.html' || url === '/settingsPage'}">Настройки</span>          
                </a>
            </li>
            <li class="footer-mobile-menu__list-item" x-bind:class="{'active': url === '/regAuth.html' || url === '/regAuth'}">
                <a class="footer-mobile-menu__list-link" x-bind:class="{'active': url === '/regAuth.html' || url === '/regAuth'}">
                    <svg class="footer-mobile-menu__list-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': url === '/regAuth.html' || url === '/regAuth'}">
                        <path d="M11 10V10.01M1 19H19M3 19V3C3 2.46957 3.21071 1.96086 3.58579 1.58579C3.96086 1.21071 4.46957 1 5 1H12.5M15 11.5V19M12 5H19M19 5L16 2M19 5L16 8" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                
                        <span class="footer-mobile-menu__list-item-title" x-bind:class="{'active': url === '/regAuth.html' || url === '/regAuth'}">Выйти</span>          
                </a>
            </li>
        </ul>
    </nav>
    </aside>
    <div class="popup footer-profile-menu-popup" x-bind:class="{'active': footerProfileMenuPopup === true}" x-on:click.self="footerProfileMenuPopup = false">
    <div class="popup__content footer-profile-menu-popup__content">
  <div class="popup__top-row footer-profile-menu-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="footerProfileMenuPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn footer-profile-menu-popup__close-btn desktop" type="button" x-on:click="footerProfileMenuPopup = false">
      <svg class="popup__close-btn-icon footer-profile-menu-popup__close-btn-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 1L1 13M1 1L13 13" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                 
    </button>
</div>
    <div class="popup__body footer-profile-menu-popup__body">
       <fieldset class="footer-profile-menu-popup__fieldset b-b">
        <h2 class="popup__title footer-profile-menu-popup__title">
            Аккаунт
        </h2>
        <ul role="list" class="footer-profile-menu-popup__list">
            <li class="footer-profile-menu-popup__list-item">
                <a href="#" class="footer-profile-menu-popup__list-item-link">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-profile-menu-popup__list-item-link-icon">
                        <path d="M6 15V16C6 16.7956 6.31607 17.5587 6.87868 18.1213C7.44129 18.6839 8.20435 19 9 19C9.79565 19 10.5587 18.6839 11.1213 18.1213C11.6839 17.5587 12 16.7956 12 16V15M7 3C7 2.46957 7.21071 1.96086 7.58579 1.58579C7.96086 1.21071 8.46957 1 9 1C9.53043 1 10.0391 1.21071 10.4142 1.58579C10.7893 1.96086 11 2.46957 11 3C12.1484 3.54303 13.1274 4.38833 13.8321 5.4453C14.5367 6.50227 14.9404 7.73107 15 9V12C15.0753 12.6217 15.2954 13.2171 15.6428 13.7381C15.9902 14.2592 16.4551 14.6914 17 15H1C1.54494 14.6914 2.00981 14.2592 2.35719 13.7381C2.70457 13.2171 2.92474 12.6217 3 12V9C3.05956 7.73107 3.4633 6.50227 4.16795 5.4453C4.8726 4.38833 5.85159 3.54303 7 3Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> 
                        <span class="footer-profile-menu-popup__list-item-title">Документы</span>                       
                </a>
                <p class="footer-profile-menu-popup__notifications-counter">5</p>
            </li>
            <li class="footer-profile-menu-popup__list-item">
                <a href="#" class="footer-profile-menu-popup__list-item-link">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-profile-menu-popup__list-item-link-icon">
                            <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                        <span class="footer-profile-menu-popup__list-item-title">Сообщения</span>                       
                </a>
                <p class="footer-profile-menu-popup__notifications-counter">5</p>
            </li>
        </ul>
        <h2 class="popup__title footer-profile-menu-popup__title">
            Настройки
        </h2>
        <ul role="list" class="footer-profile-menu-popup__list">
            <li class="footer-profile-menu-popup__list-item">
                <a href="#" class="footer-profile-menu-popup__list-item-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-profile-menu-popup__list-item-link-icon">
                            <path d="M9.00015 15C9.31557 15.1377 9.65601 15.2087 10.0002 15.2087C10.3443 15.2087 10.6847 15.1377 11.0002 15M6.00015 9L8.00015 11M14.0002 9L12.0002 11M10.0002 1C5.33615 1 2.60415 3.331 2.13815 6.595C1.67061 9.6098 2.38728 12.6886 4.13815 15.187C4.98082 16.4188 6.07016 17.4622 7.33715 18.251C9.00315 19.251 11.0012 19.251 12.6672 18.251C13.9341 17.4622 15.0235 16.4188 15.8662 15.187C17.6099 12.6854 18.3259 9.6095 17.8662 6.595C17.4002 3.33 14.6682 1 10.0042 1H10.0002Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                        <span class="footer-profile-menu-popup__list-item-title">Профиль</span>                       
                </a>
            </li>
            <li class="footer-profile-menu-popup__list-item">
                <a href="#" class="footer-profile-menu-popup__list-item-link">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-profile-menu-popup__list-item-link-icon">
                                <path d="M8.325 2.317C8.751 0.561 11.249 0.561 11.675 2.317C11.7389 2.5808 11.8642 2.82578 12.0407 3.032C12.2172 3.23822 12.4399 3.39985 12.6907 3.50375C12.9414 3.60764 13.2132 3.65085 13.4838 3.62987C13.7544 3.60889 14.0162 3.5243 14.248 3.383C15.791 2.443 17.558 4.209 16.618 5.753C16.4769 5.98466 16.3924 6.24634 16.3715 6.51677C16.3506 6.78721 16.3938 7.05877 16.4975 7.30938C16.6013 7.55999 16.7627 7.78258 16.9687 7.95905C17.1747 8.13553 17.4194 8.26091 17.683 8.325C19.439 8.751 19.439 11.249 17.683 11.675C17.4192 11.7389 17.1742 11.8642 16.968 12.0407C16.7618 12.2172 16.6001 12.4399 16.4963 12.6907C16.3924 12.9414 16.3491 13.2132 16.3701 13.4838C16.3911 13.7544 16.4757 14.0162 16.617 14.248C17.557 15.791 15.791 17.558 14.247 16.618C14.0153 16.4769 13.7537 16.3924 13.4832 16.3715C13.2128 16.3506 12.9412 16.3938 12.6906 16.4975C12.44 16.6013 12.2174 16.7627 12.0409 16.9687C11.8645 17.1747 11.7391 17.4194 11.675 17.683C11.249 19.439 8.751 19.439 8.325 17.683C8.26108 17.4192 8.13578 17.1742 7.95929 16.968C7.7828 16.7618 7.56011 16.6001 7.30935 16.4963C7.05859 16.3924 6.78683 16.3491 6.51621 16.3701C6.24559 16.3911 5.98375 16.4757 5.752 16.617C4.209 17.557 2.442 15.791 3.382 14.247C3.5231 14.0153 3.60755 13.7537 3.62848 13.4832C3.64942 13.2128 3.60624 12.9412 3.50247 12.6906C3.3987 12.44 3.23726 12.2174 3.03127 12.0409C2.82529 11.8645 2.58056 11.7391 2.317 11.675C0.561 11.249 0.561 8.751 2.317 8.325C2.5808 8.26108 2.82578 8.13578 3.032 7.95929C3.23822 7.7828 3.39985 7.56011 3.50375 7.30935C3.60764 7.05859 3.65085 6.78683 3.62987 6.51621C3.60889 6.24559 3.5243 5.98375 3.383 5.752C2.443 4.209 4.209 2.442 5.753 3.382C6.753 3.99 8.049 3.452 8.325 2.317Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                        <span class="footer-profile-menu-popup__list-item-title">Настройки</span>                       
                </a>
            </li>
        </ul>
       </fieldset>
       <fieldset class="footer-profile-menu-popup__fieldset p-t">
        <ul role="list" class="footer-profile-menu-popup__list">
            <li class="footer-profile-menu-popup__list-item">
                <a href="#" class="footer-profile-menu-popup__list-item-link">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-profile-menu-popup__list-item-link-icon">
                                <path d="M11 10V10.01M1 19H19M3 19V3C3 2.46957 3.21071 1.96086 3.58579 1.58579C3.96086 1.21071 4.46957 1 5 1H12.5M15 11.5V19M12 5H19M19 5L16 2M19 5L16 8" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>  
                        <span class="footer-profile-menu-popup__list-item-title">Выйти</span>                       
                </a>
            </li>
        </ul>
       </fieldset>
    </div>
</div>
  </div>
    <div class="popup account-enter-popup" x-bind:class="{'active': accountEnterPopup === true}" x-on:click.self="accountEnterPopup = false">
    <form action="#" method="post" class="popup__form account-enter-popup__form">
    <div class="popup__content account-enter-popup__content">
  <div class="popup__top-row account-enter-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="accountEnterPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn account-enter-popup__close-btn desktop" type="button" x-on:click="accountEnterPopup = false">
      <svg class="popup__close-btn-icon account-enter-popup__close-btn-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 1L1 13M1 1L13 13" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                 
    </button>
    <h2 class="popup__title account-enter-popup__title">
        Вход в аккаунт
    </h2>
</div>
    <div class="popup__body account-enter-popup__body">
       <fieldset class="account-enter-popup__fieldset">
         <div class="account-enter-popup__form-control-group">
          <label for="E-mail или логин" class="account-enter-popup__form-control-group-label">
            E-mail или логин
          </label>
          <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
            <input type="text" name="E-mail или логин" id="E-mail или логин" placeholder="Введите логин" class="add-new-filter-popup__form-control-input">
        </div>
         </div>
         <div class="account-enter-popup__form-control-group">
            <label for="Пароль" class="account-enter-popup__form-control-group-label">
                Пароль
            </label>
            <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
              <input type="password" name="Пароль" id="Пароль" placeholder="Введите пароль" class="add-new-filter-popup__form-control-input">
          </div>
        </div>
        <button type="button" class="account-enter-popup__sms-enter-btn">войти по смс</button>
        <button type="submit" class="btn btn--primary account-enter-popup__submit-btn">Войти</button>
       </fieldset>
       <div class="account-enter-popup__btn-group">
        <button type="button" class="account-enter-popup__reg-btn">Я здесь впервые</button>
        <button type="button" class="account-enter-popup__forgot-pass-btn">Забыли пароль?</button>
    </div>
    </div>
</div>
</form>
  </div>
    <div class="choose-options-dropdown footer__choose-options-dropdown" x-bind:class="{'active': footerOptionsDropdown === true}">
    <ul role="list" class="choose-options-dropdown__list footer__choose-options-dropdown-list footer__choose-options-dropdown-list--b-b footer__choose-options-dropdown-list--p-b">
        <li class="choose-options-dropdown__list-item footer__choose-options-dropdown-list-item">
            <button class="choose-options-dropdown__add-btn footer__choose-options-dropdown-btn" type="button">
                Cоздать проект
            </button>
        </li>
        <li class="choose-options-dropdown__list-item footer__choose-options-dropdown-list-item">
            <button class="choose-options-dropdown__add-btn footer__choose-options-dropdown-btn" type="button">
                Создать компанию
            </button>
        </li>
        <li class="choose-options-dropdown__list-item footer__choose-options-dropdown-list-item">
            <button class="choose-options-dropdown__add-btn footer__choose-options-dropdown-btn" type="button">
                Создать компанию
            </button>
        </li>
        <li class="choose-options-dropdown__list-item footer__choose-options-dropdown-list-item">
            <button class="choose-options-dropdown__add-btn footer__choose-options-dropdown-btn" type="button">
                Создать контакт
            </button>
        </li>
    </ul>
    <ul role="list" class="choose-options-dropdown__list footer__choose-options-dropdown-list footer__choose-options-dropdown-list--p-t">
        <li class="choose-options-dropdown__list-item footer__choose-options-dropdown-list-item">
            <button class="choose-options-dropdown__add-btn footer__choose-options-dropdown-btn" type="button">
                Новый пользователь
            </button>
        </li>
    </ul>
  </div>
</footer>
    <div class="popup events-board-popup" x-bind:class="{'active': eventsBoardPopup === true}">
    <div class="popup__content events-board-popup__content">
  <div class="popup__top-row events-board-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="settingsPopup = false;eventsBoardPopup = false">
        <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>                  
    </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="settingsPopup = false;eventsBoardPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <div class="popup__title-top-controls-row events-board-popup__title-top-controls-row">
    <h2 class="popup__title events-board-popup__title">
        Журнал событий 
    </h2>
    <div class="popup__top-row-controls events-board-popup__top-row-controls">
        <button class="popup__read-mark-btn events-board-popup__read-mark-btn" type="button">
            <svg class="events-board-popup__read-mark-btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 8L9 11L12 8M3 1H15C16.1046 1 17 1.89543 17 3V15C17 16.1046 16.1046 17 15 17H3C1.89543 17 1 16.1046 1 15V3C1 1.89543 1.89543 1 3 1Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                
        </button>
        <button class="popup__settings-btn events-board-popup__settings-btn" type="button" x-on:click="settingsPopup = true">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.325 2.317C8.751 0.561 11.249 0.561 11.675 2.317C11.7389 2.5808 11.8642 2.82578 12.0407 3.032C12.2172 3.23822 12.4399 3.39985 12.6907 3.50375C12.9414 3.60764 13.2132 3.65085 13.4838 3.62987C13.7544 3.60889 14.0162 3.5243 14.248 3.383C15.791 2.443 17.558 4.209 16.618 5.753C16.4769 5.98466 16.3924 6.24634 16.3715 6.51677C16.3506 6.78721 16.3938 7.05877 16.4975 7.30938C16.6013 7.55999 16.7627 7.78258 16.9687 7.95905C17.1747 8.13553 17.4194 8.26091 17.683 8.325C19.439 8.751 19.439 11.249 17.683 11.675C17.4192 11.7389 17.1742 11.8642 16.968 12.0407C16.7618 12.2172 16.6001 12.4399 16.4963 12.6907C16.3924 12.9414 16.3491 13.2132 16.3701 13.4838C16.3911 13.7544 16.4757 14.0162 16.617 14.248C17.557 15.791 15.791 17.558 14.247 16.618C14.0153 16.4769 13.7537 16.3924 13.4832 16.3715C13.2128 16.3506 12.9412 16.3938 12.6906 16.4975C12.44 16.6013 12.2174 16.7627 12.0409 16.9687C11.8645 17.1747 11.7391 17.4194 11.675 17.683C11.249 19.439 8.751 19.439 8.325 17.683C8.26108 17.4192 8.13578 17.1742 7.95929 16.968C7.7828 16.7618 7.56011 16.6001 7.30935 16.4963C7.05859 16.3924 6.78683 16.3491 6.51621 16.3701C6.24559 16.3911 5.98375 16.4757 5.752 16.617C4.209 17.557 2.442 15.791 3.382 14.247C3.5231 14.0153 3.60755 13.7537 3.62848 13.4832C3.64942 13.2128 3.60624 12.9412 3.50247 12.6906C3.3987 12.44 3.23726 12.2174 3.03127 12.0409C2.82529 11.8645 2.58056 11.7391 2.317 11.675C0.561 11.249 0.561 8.751 2.317 8.325C2.5808 8.26108 2.82578 8.13578 3.032 7.95929C3.23822 7.7828 3.39985 7.56011 3.50375 7.30935C3.60764 7.05859 3.65085 6.78683 3.62987 6.51621C3.60889 6.24559 3.5243 5.98375 3.383 5.752C2.443 4.209 4.209 2.442 5.753 3.382C6.753 3.99 8.049 3.452 8.325 2.317Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                
        </button>
    </div>
    </div>
</div>
    <div class="popup__body events-board-popup__body" x-data="{tabs: ''}" x-bind:class="{'no-border': tabs === 'mail' || tabs === 'actions' || tabs === 'offers'}">
    <div class="popup__middle-row events-board-popup__middle-row">
       <ul class="popup__filter-tag-group events-board-popup__filter-tag-group" role="list">
            <li class="popup__filter-tag-group-item">
                <button type="button" class="btn popup__filter-tag-btn" x-bind:class="{'active': tabs === 'mail'}" x-on:click.self="tabs = 'mail'">
                    <p class="popup__filter-tag-btn-nots-counter" x-show="tabs === ''">
                        29
                    </p>
                    Почта
                    <svg x-on:click.self="tabs = ''" class="popup__filter-tag-btn-icon" x-show="tabs === 'mail'" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L1 9M1 1L9 9" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                        
                </button>
            </li>
            <li class="popup__filter-tag-group-item">
                <button type="button" class="btn popup__filter-tag-btn" x-bind:class="{'active': tabs === 'actions'}" x-on:click.self="tabs = 'actions'">
                    Действия
                    <svg x-on:click="tabs = ''" class="popup__filter-tag-btn-icon" x-show="tabs === 'actions'" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L1 9M1 1L9 9" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>  
                </button>
            </li>
            <li class="popup__filter-tag-group-item">
                <button type="button" class="btn popup__filter-tag-btn" x-bind:class="{'active': tabs === 'offers'}" x-on:click.self="tabs ='offers'">
                    <p class="popup__filter-tag-btn-nots-counter" x-show="tabs === ''">
                        29
                    </p>
                    Предложения
                    <svg x-on:click="tabs = ''" class="popup__filter-tag-btn-icon" x-show="tabs === 'offers'" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L1 9M1 1L9 9" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> 
                </button>
            </li>
       </ul>
       <button class="btn btn--primary events-board-popup__create-event-btn" type="button">Создать событие</button>
    </div>
    <div class="events-board-popup__lists-wrapper" x-bind:class="{'active': tabs === '' }">
        <div class="events-board-popup__lists-block">
            <div class="events-board-popup__separator">
                <p class="events-board-popup__separator-text">Сегодня</p>
            </div>
                <ul role="list" class="events-board-popup__list">
                    <template x-for="i in 5">
                        <li class="events-board-popup__list-item">
                           <h2 class="events-board-popup__list-item-title active">Событие</h2>
                           <div class="events-board-popup__list-item-bottom">
                            <time datetime="2022.12.2022" class="events-board-popup__list-item-date">12.12.2022</time>
                            <time datetime="12:50" class="events-board-popup__list-item-time">12:50</time>
                           </div>
                        </li>
                    </template>
                    <li class="events-board-popup__list-item">
                        <h2 class="events-board-popup__list-item-title">Событие</h2>
                        <div class="events-board-popup__list-item-bottom">
                         <time datetime="2022.12.2022" class="events-board-popup__list-item-date">12.12.2022</time>
                         <time datetime="12:50" class="events-board-popup__list-item-time">12:50</time>
                        </div>
                     </li>
                </ul>
            </div>
        <div class="events-board-popup__lists-block">
            <div class="events-board-popup__separator">
                <p class="events-board-popup__separator-text">Вчера</p>
            </div>
                <ul role="list" class="events-board-popup__list">
                    <template x-for="i in 6">
                        <li class="events-board-popup__list-item">
                           <h2 class="events-board-popup__list-item-title">Событие</h2>
                           <div class="events-board-popup__list-item-bottom">
                            <time datetime="2022.12.2022" class="events-board-popup__list-item-date">12.12.2022</time>
                            <time datetime="12:50" class="events-board-popup__list-item-time">12:50</time>
                           </div>
                        </li>
                    </template>
                </ul>
            </div>
        <div class="events-board-popup__lists-block">
            <div class="events-board-popup__separator">
                <p class="events-board-popup__separator-text">Позавчера</p>
            </div>
                <ul role="list" class="events-board-popup__list">
                    <template x-for="i in 6">
                        <li class="events-board-popup__list-item">
                           <h2 class="events-board-popup__list-item-title">Событие</h2>
                           <div class="events-board-popup__list-item-bottom">
                            <time datetime="2022.12.2022" class="events-board-popup__list-item-date">12.12.2022</time>
                            <time datetime="12:50" class="events-board-popup__list-item-time">12:50</time>
                           </div>
                        </li>
                    </template>
                </ul>
            </div>
    </div>
    <div class="popup__offer-nots" x-bind:class="{'active': tabs === 'offers' }">
    <div class="popup__show-nots">
        <p class="popup__show-nots-text">Отключите фильтр, чтобы просмотреть все нотификации </p>
        <span class="popup__show-nots-counter">29</span>
    </div>
    <button type="button" class="popup__disable-filter-nots-btn">
        Отключить
    </button>
    </div>
    </div>
    </div>
</div>
  





<script type="module">
 tippy('.popup__read-mark-btn', {
        content: 'Отметить всё как прочитанное',
      });
</script>
    <div class="popup notify-popup" x-bind:class="{'active': notifyPopup === true}">
    <div class="popup__content notify-popup__content">
  <div class="popup__top-row notify-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="settingsPopup = false; notifyPopup = false">
        <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>                  
    </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="settingsPopup = false;notifyPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <div class="popup__title-top-controls-row notify-popup__title-top-controls-row">
    <h2 class="popup__title notify-popup__title">
        Уведомления
    </h2>
    <div class="popup__top-row-controls">
        <button class="popup__read-mark-btn" type="button">
            <svg class="popup__read-mark-btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 8L9 11L12 8M3 1H15C16.1046 1 17 1.89543 17 3V15C17 16.1046 16.1046 17 15 17H3C1.89543 17 1 16.1046 1 15V3C1 1.89543 1.89543 1 3 1Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                
        </button>
        <button class="popup__settings-btn" type="button" x-on:click="settingsPopup = true">
            <svg class="popup__settings-btn-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.325 2.317C8.751 0.561 11.249 0.561 11.675 2.317C11.7389 2.5808 11.8642 2.82578 12.0407 3.032C12.2172 3.23822 12.4399 3.39985 12.6907 3.50375C12.9414 3.60764 13.2132 3.65085 13.4838 3.62987C13.7544 3.60889 14.0162 3.5243 14.248 3.383C15.791 2.443 17.558 4.209 16.618 5.753C16.4769 5.98466 16.3924 6.24634 16.3715 6.51677C16.3506 6.78721 16.3938 7.05877 16.4975 7.30938C16.6013 7.55999 16.7627 7.78258 16.9687 7.95905C17.1747 8.13553 17.4194 8.26091 17.683 8.325C19.439 8.751 19.439 11.249 17.683 11.675C17.4192 11.7389 17.1742 11.8642 16.968 12.0407C16.7618 12.2172 16.6001 12.4399 16.4963 12.6907C16.3924 12.9414 16.3491 13.2132 16.3701 13.4838C16.3911 13.7544 16.4757 14.0162 16.617 14.248C17.557 15.791 15.791 17.558 14.247 16.618C14.0153 16.4769 13.7537 16.3924 13.4832 16.3715C13.2128 16.3506 12.9412 16.3938 12.6906 16.4975C12.44 16.6013 12.2174 16.7627 12.0409 16.9687C11.8645 17.1747 11.7391 17.4194 11.675 17.683C11.249 19.439 8.751 19.439 8.325 17.683C8.26108 17.4192 8.13578 17.1742 7.95929 16.968C7.7828 16.7618 7.56011 16.6001 7.30935 16.4963C7.05859 16.3924 6.78683 16.3491 6.51621 16.3701C6.24559 16.3911 5.98375 16.4757 5.752 16.617C4.209 17.557 2.442 15.791 3.382 14.247C3.5231 14.0153 3.60755 13.7537 3.62848 13.4832C3.64942 13.2128 3.60624 12.9412 3.50247 12.6906C3.3987 12.44 3.23726 12.2174 3.03127 12.0409C2.82529 11.8645 2.58056 11.7391 2.317 11.675C0.561 11.249 0.561 8.751 2.317 8.325C2.5808 8.26108 2.82578 8.13578 3.032 7.95929C3.23822 7.7828 3.39985 7.56011 3.50375 7.30935C3.60764 7.05859 3.65085 6.78683 3.62987 6.51621C3.60889 6.24559 3.5243 5.98375 3.383 5.752C2.443 4.209 4.209 2.442 5.753 3.382C6.753 3.99 8.049 3.452 8.325 2.317Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                
        </button>
    </div>
    </div>
</div>
    <div class="popup__body notify-popup__body" x-data="{tabs: ''}" x-bind:class="{'no-border': tabs === 'mail' || tabs === 'actions' || tabs === 'offers'}">
    <div class="popup__middle-row notify-popup__middle-row">
       <ul class="popup__filter-tag-group" role="list">
        <li class="popup__filter-tag-group-item">
            <button type="button" class="btn popup__filter-tag-btn" x-bind:class="{'active': tabs === 'mail'}" x-on:click.self="tabs = 'mail'">
                <p class="popup__filter-tag-btn-nots-counter" x-show="tabs === ''">
                    29
                </p>
                Почта
                <svg x-on:click.self="tabs = ''" class="popup__filter-tag-btn-icon" x-show="tabs === 'mail'" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L1 9M1 1L9 9" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                        
            </button>
        </li>
        <li class="popup__filter-tag-group-item">
            <button type="button" class="btn popup__filter-tag-btn" x-bind:class="{'active': tabs === 'actions'}" x-on:click.self="tabs = 'actions'">
                Действия
                <svg x-on:click="tabs = ''" class="popup__filter-tag-btn-icon" x-show="tabs === 'actions'" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L1 9M1 1L9 9" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>  
            </button>
        </li>
        <li class="popup__filter-tag-group-item">
            <button type="button" class="btn popup__filter-tag-btn" x-bind:class="{'active': tabs === 'offers'}" x-on:click.self="tabs ='offers'">
                <p class="popup__filter-tag-btn-nots-counter" x-show="tabs === ''">
                    29
                </p>
                Предложения
                <svg x-on:click="tabs = ''" class="popup__filter-tag-btn-icon" x-show="tabs === 'offers'" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L1 9M1 1L9 9" stroke="#F9FBFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> 
            </button>
        </li>
       </ul>
    </div>
    <div class="notify-popup__lists-wrapper" x-bind:class="{'active': tabs === '' }">
        <div class="notify-popup__lists-block">
            <div class="notify-popup__separator">
                <p class="notify-popup__separator-text">Сегодня</p>
            </div>
                <ul role="list" class="notify-popup__list">
                    <template x-for="i in 5">
                        <li class="notify-popup__list-item active">
                            <svg class="notify-popup__list-item-icon active" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>   
                            <div class="notify-popup__list-item-info">        
                           <h2 class="notify-popup__list-item-title active">Тема письма</h2>
                           <p class="notify-popup__list-item-text">Текст письма</p>
                           </div>                     
                        </li>
                    </template>
                    <li class="notify-popup__list-item">
                        <svg class="notify-popup__list-item-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>   
                        <div class="notify-popup__list-item-info">        
                       <h2 class="notify-popup__list-item-title">Тема письма</h2>
                       <p class="notify-popup__list-item-text">Текст письма</p>
                       </div>  
                     </li>
                     <li class="notify-popup__list-item">
                        <svg class="notify-popup__list-item-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>   
                        <div class="notify-popup__list-item-info">        
                       <h2 class="notify-popup__list-item-title">Тема письма</h2>
                       <p class="notify-popup__list-item-text">Текст письма</p>
                       </div>  
                     </li>
                </ul>
            </div>
        <div class="notify-popup__lists-block">
            <div class="notify-popup__separator">
                <p class="notify-popup__separator-text">Вчера</p>
            </div>
                <ul role="list" class="notify-popup__list">
                    <template x-for="i in 5">
                        <li class="notify-popup__list-item">
                            <svg class="notify-popup__list-item-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>   
                            <div class="notify-popup__list-item-info">        
                           <h2 class="notify-popup__list-item-title">Тема письма</h2>
                           <p class="notify-popup__list-item-text">Текст письма</p>
                           </div>      
                        </li>
                    </template>
                </ul>
            </div>
        <div class="notify-popup__lists-block">
            <div class="notify-popup__separator">
                <p class="notify-popup__separator-text">Позавчера</p>
            </div>
                <ul role="list" class="notify-popup__list">
                    <template x-for="i in 5">
                        <li class="notify-popup__list-item">
                            <svg class="notify-popup__list-item-icon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 3C19 1.89543 18.1046 1 17 1H3C1.89543 1 1 1.89543 1 3M19 3V13C19 14.1046 18.1046 15 17 15H3C1.89543 15 1 14.1046 1 13V3M19 3L10 9L1 3" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>   
                            <div class="notify-popup__list-item-info">        
                           <h2 class="notify-popup__list-item-title">Тема письма</h2>
                           <p class="notify-popup__list-item-text">Текст письма</p>
                           </div>      
                        </li>
                    </template>
                </ul>
            </div>
        </div>
        <div class="popup__offer-nots notify-popup__offer-nots" x-bind:class="{'active': tabs === 'offers' }">
            <div class="popup__show-nots">
                <p class="popup__show-nots-text">Отключите фильтр, чтобы просмотреть все нотификации </p>
                <span class="popup__show-nots-counter">29</span>
            </div>
            <button type="button" class="popup__disable-filter-nots-btn">
                Отключить
            </button>
            </div>
    </div>
    </div>
</div>
  





<script type="module">
 tippy('.popup__read-mark-btn', {
        content: 'Отметить всё как прочитанное',
      });
</script>
    <div class="popup settings-popup" x-bind:class="{'active': settingsPopup === true}">
    <form action="#" method="post" class="popup__form settings-popup__form">
<div class="popup__content settings-popup__content">
<div class="popup__top-row settings-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="settingsPopup = false">
        <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>                  
    </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="settingsPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <h2 class="popup__title settings-popup__title">
        Настройки
    </h2>
</div>
<div class="popup__body settings-popup__body">
    <fieldset class="settings-popup__fieldset">
    <ul role="list" class="settings-popup__list">
        <li class="settings-popup__list-item">
            <input type="checkbox" name="1" id="1" class="settings-popup__list-item-checkbox">
            <label for="1" class="settings-popup__list-item-label">Уведомлять по e-mail</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="2" class="settings-popup__list-item-checkbox">
            <label for="2" class="settings-popup__list-item-label">Скрывать прочитанные уведомления</label>
        </li>
    </ul>
    </fieldset>
    <fieldset class="settings-popup__fieldset">
    <h3 class="settings-popup__subtitle">Финансы</h3>
    <ul role="list" class="settings-popup__list">
        <li class="settings-popup__list-item">
            <input type="checkbox" name="3" id="3" class="settings-popup__list-item-checkbox">
            <label for="3" class="settings-popup__list-item-label">Предложение принято</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="4" id="4" class="settings-popup__list-item-checkbox">
            <label for="4" class="settings-popup__list-item-label">Предложение изменено</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="5" id="5" class="settings-popup__list-item-checkbox">
            <label for="5" class="settings-popup__list-item-label">Запрос на согласование счёта</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="6" id="6" class="settings-popup__list-item-checkbox">
            <label for="6" class="settings-popup__list-item-label">Уведомление о согласовании счёта</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="7" id="7" class="settings-popup__list-item-checkbox">
            <label for="7" class="settings-popup__list-item-label">К счёту добавлен комментарий</label>
        </li>
    </ul>
    </fieldset>
    <fieldset class="settings-popup__fieldset">
    <h3 class="settings-popup__subtitle">Почта</h3>
    <ul role="list" class="settings-popup__list">
        <li class="settings-popup__list-item">
            <input type="checkbox" name="8" id="8" class="settings-popup__list-item-checkbox">
            <label for="8" class="settings-popup__list-item-label">Новое письмо</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="9" id="9" class="settings-popup__list-item-checkbox">
            <label for="9" class="settings-popup__list-item-label">Отслеживания открытия письма и перехода по ссылкам</label>
        </li>
    </ul>
    </fieldset>
</div>
<ul role="list" class="settings-popup__btn-control-group">
    <li class="settings-popup__btn-control-group-item settings-popup__btn-control-group-item--undo-icon">
        <svg class="settings-popup__undo-icon" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.01803 10.5798C1.27091 12.509 2.21825 14.28 3.68271 15.5612C5.14717 16.8423 7.02834 17.5458 8.9741 17.54C10.9199 17.5342 12.7968 16.8194 14.2536 15.5295C15.7103 14.2397 16.6471 12.4631 16.8884 10.5323C17.1297 8.60158 16.6591 6.64907 15.5647 5.04027C14.4703 3.43148 12.827 2.27671 10.9426 1.79212C9.05813 1.30752 7.06166 1.52633 5.3269 2.40759C3.59214 3.28884 2.23802 4.77212 1.51803 6.57977M1.01803 1.57977L1.01803 6.57977L6.01803 6.57977M7.96802 9.57971C7.96802 9.02743 8.41573 8.57971 8.96802 8.57971C9.5203 8.57971 9.96802 9.02743 9.96802 9.57971C9.96802 10.132 9.5203 10.5797 8.96802 10.5797C8.41573 10.5797 7.96802 10.132 7.96802 9.57971Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                
    </li>
    <li class="settings-popup__btn-control-group-item">
        <button type="button" class="btn btn--flat settings-popup__undo-btn" x-on:click="settingsPopup = false">
            Отменить
        </button>
    </li>
    <li class="settings-popup__btn-control-group-item">
        <button type="button" class="btn btn--primary settings-popup__save-btn">
            Сохранить
        </button>
    </li>
</ul>
</div>
</form>
</div>
    <div class="popup settings-popup settings-order-list-popup" x-bind:class="{'active': settingsOrderListPopup === true}">
<form action="#" method="post" class="popup__form settings-popup__form">
<div class="popup__content settings-popup__content">
<div class="popup__top-row settings-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="settingsOrderListPopup = false">
        <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>                  
    </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="settingsOrderListPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <h2 class="popup__title settings-popup__title">
        Настройка списка
    </h2>
</div>
<div class="popup__body settings-popup__body" x-data="{
    checkAllCheckboxes() {
        const checkboxes = $el.querySelectorAll('.settings-popup__list-item-checkbox');
        for (const checkbox of checkboxes) {
            checkbox.checked = true;
        }
    },
    uncheckAllCheckboxes() {
        const checkboxes = $el.querySelectorAll('.settings-popup__list-item-checkbox');
        for (const checkbox of checkboxes) {
            checkbox.checked = false;
        }
    },
}">
    <fieldset class="settings-popup__fieldset settings-order-list-popup__fieldset btn-control-group">
      <button type="button" class="settings-order-list-popup__select-all-btn" x-on:click="checkAllCheckboxes">
        Выделить всё
      </button>
      <button type="button" class="settings-order-list-popup__cancel-all-btn" x-on:click="uncheckAllCheckboxes">
        Отменить всё
      </button>
    </fieldset>
    <fieldset class="settings-popup__fieldset">
    <ul role="list" class="settings-popup__list">
        <li class="settings-popup__list-item">
            <input type="checkbox" name="1" id="№" class="settings-popup__list-item-checkbox">
            <label for="№" class="settings-popup__list-item-label">№</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Дата" class="settings-popup__list-item-checkbox">
            <label for="Дата" class="settings-popup__list-item-label">Дата</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Сумма" class="settings-popup__list-item-checkbox">
            <label for="Сумма" class="settings-popup__list-item-label">Сумма</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Контрагент" class="settings-popup__list-item-checkbox">
            <label for="Контрагент" class="settings-popup__list-item-label">Контрагент</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Статус" class="settings-popup__list-item-checkbox">
            <label for="Статус" class="settings-popup__list-item-label">Статус</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Организация" class="settings-popup__list-item-checkbox">
            <label for="Организация" class="settings-popup__list-item-label">Организация</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Ответственный" class="settings-popup__list-item-checkbox">
            <label for="Ответственный" class="settings-popup__list-item-label">Ответственный</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Срок действия" class="settings-popup__list-item-checkbox">
            <label for="Срок действия" class="settings-popup__list-item-label">Срок действия</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Счет" class="settings-popup__list-item-checkbox">
            <label for="Счет" class="settings-popup__list-item-label">Счет</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Основание" class="settings-popup__list-item-checkbox">
            <label for="Основание" class="settings-popup__list-item-label">Основание</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Печатная форма" class="settings-popup__list-item-checkbox">
            <label for="Печатная форма" class="settings-popup__list-item-label">Печатная форма</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Изменено" class="settings-popup__list-item-checkbox">
            <label for="Изменено" class="settings-popup__list-item-label">Изменено</label>
        </li>
        <li class="settings-popup__list-item">
            <input type="checkbox" name="2" id="Последний комментарий" class="settings-popup__list-item-checkbox">
            <label for="Последний комментарий" class="settings-popup__list-item-label">Последний комментарий</label>
        </li>
    </ul>
    </fieldset>
</div>
<ul role="list" class="settings-popup__btn-control-group">
    <li class="settings-popup__btn-control-group-item settings-popup__btn-control-group-item--undo-icon">
        <svg class="settings-popup__undo-icon" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.01803 10.5798C1.27091 12.509 2.21825 14.28 3.68271 15.5612C5.14717 16.8423 7.02834 17.5458 8.9741 17.54C10.9199 17.5342 12.7968 16.8194 14.2536 15.5295C15.7103 14.2397 16.6471 12.4631 16.8884 10.5323C17.1297 8.60158 16.6591 6.64907 15.5647 5.04027C14.4703 3.43148 12.827 2.27671 10.9426 1.79212C9.05813 1.30752 7.06166 1.52633 5.3269 2.40759C3.59214 3.28884 2.23802 4.77212 1.51803 6.57977M1.01803 1.57977L1.01803 6.57977L6.01803 6.57977M7.96802 9.57971C7.96802 9.02743 8.41573 8.57971 8.96802 8.57971C9.5203 8.57971 9.96802 9.02743 9.96802 9.57971C9.96802 10.132 9.5203 10.5797 8.96802 10.5797C8.41573 10.5797 7.96802 10.132 7.96802 9.57971Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                
    </li>
    <li class="settings-popup__btn-control-group-item">
        <button type="button" class="btn btn--flat settings-popup__undo-btn" x-on:click="settingsOrderListPopup = false">
            Отменить
        </button>
    </li>
    <li class="settings-popup__btn-control-group-item">
        <button type="button" class="btn btn--primary settings-popup__save-btn">
            Сохранить
        </button>
    </li>
</ul>
</div>
</form>
</div>
  </body></html>