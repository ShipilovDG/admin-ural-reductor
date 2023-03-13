<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>страница заказы</title>
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
      <aside class="aside-nav-menu" x-data="{url: '/orders.html'}">
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
      <section class="site-section orders__site-section" x-data="{createOrderPopup: false, createContragentPopup: false,addNewFilterPopup: false, searchBtnDropdown: false}">
    <div class="site-section__top-row orders__top-row">
    <h2 class="site-section__title orders__title">Заказы</h2>
    <div class="site-section__top-row-btn-group orders__top-row-btn-group">
     <button type="button" class="site-section__top-row-settings-btn orders__top-row-settings-btn" x-on:click="settingsOrderListPopup = true">
      <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.7667 2.756C11.3347 0.414667 14.6653 0.414667 15.2333 2.756C15.3186 3.10773 15.4856 3.43437 15.7209 3.70933C15.9563 3.98429 16.2532 4.19981 16.5875 4.33833C16.9219 4.47685 17.2842 4.53447 17.645 4.50649C18.0059 4.47852 18.355 4.36574 18.664 4.17733C20.7213 2.924 23.0773 5.27867 21.824 7.33733C21.6359 7.64621 21.5233 7.99512 21.4954 8.3557C21.4674 8.71628 21.525 9.07836 21.6634 9.41251C21.8017 9.74665 22.017 10.0434 22.2916 10.2787C22.5663 10.514 22.8926 10.6812 23.244 10.7667C25.5853 11.3347 25.5853 14.6653 23.244 15.2333C22.8923 15.3186 22.5656 15.4856 22.2907 15.7209C22.0157 15.9563 21.8002 16.2532 21.6617 16.5875C21.5232 16.9219 21.4655 17.2842 21.4935 17.645C21.5215 18.0059 21.6343 18.355 21.8227 18.664C23.076 20.7213 20.7213 23.0773 18.6627 21.824C18.3538 21.6359 18.0049 21.5233 17.6443 21.4954C17.2837 21.4674 16.9216 21.525 16.5875 21.6634C16.2533 21.8017 15.9566 22.017 15.7213 22.2916C15.486 22.5663 15.3188 22.8926 15.2333 23.244C14.6653 25.5853 11.3347 25.5853 10.7667 23.244C10.6814 22.8923 10.5144 22.5656 10.2791 22.2907C10.0437 22.0157 9.74682 21.8002 9.41246 21.6617C9.07811 21.5232 8.71578 21.4655 8.35495 21.4935C7.99413 21.5215 7.645 21.6343 7.336 21.8227C5.27867 23.076 2.92267 20.7213 4.176 18.6627C4.36414 18.3538 4.47673 18.0049 4.50465 17.6443C4.53256 17.2837 4.47499 16.9216 4.33663 16.5875C4.19827 16.2533 3.98301 15.9566 3.70836 15.7213C3.43371 15.486 3.10742 15.3188 2.756 15.2333C0.414667 14.6653 0.414667 11.3347 2.756 10.7667C3.10773 10.6814 3.43437 10.5144 3.70933 10.2791C3.98429 10.0437 4.19981 9.74682 4.33833 9.41246C4.47685 9.07811 4.53447 8.71578 4.50649 8.35495C4.47852 7.99413 4.36574 7.645 4.17733 7.336C2.924 5.27867 5.27867 2.92267 7.33733 4.176C8.67067 4.98667 10.3987 4.26933 10.7667 2.756Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>        
     </button>
     <button class="btn btn--primary site-section__create-order-btn orders__create-order-btn" type="button" x-on:click="createOrderPopup = true">
      Создать
    </button>
     </div>
    </div>
    <div class="site-section__body orders__body">
      <div class="site-section__body-top orders__body-top">
        <h3 class="site-section__subtitle orders__subtitle">
          Все заказы
        </h3>
        <div class="site-section__body-top-btn-group orders__body-top-btn-group">
        <button class="btn btn--primary site-section__create-order-btn orders__create-order-btn" type="button" x-on:click="createOrderPopup = true">
          Создать
        </button>
        </div>
      </div>
      <div class="site-section__body-bottom orders__body-bottom">
        <div class="site-section__body-bottom-left-group orders__body-bottom-left-group">
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
        <div class="site-section__body-bottom-right-group orders__body-bottom-right-group">
          <button class="site-section__body-bottom-right-download-btn orders__body-bottom-right-download-btn" type="button">
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 14V16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H15C15.5304 18 16.0391 17.7893 16.4142 17.4142C16.7893 17.0391 17 16.5304 17 16V14M4 8L9 13M9 13L14 8M9 13V1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>              
          </button>
          <button class="site-section__body-bottom-right-settings-btn orders__body-bottom-right-settings-btn" type="button" x-on:click="settingsOrderListPopup = true">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.325 2.317C8.751 0.561 11.249 0.561 11.675 2.317C11.7389 2.5808 11.8642 2.82578 12.0407 3.032C12.2172 3.23822 12.4399 3.39985 12.6907 3.50375C12.9414 3.60764 13.2132 3.65085 13.4838 3.62987C13.7544 3.60889 14.0162 3.5243 14.248 3.383C15.791 2.443 17.558 4.209 16.618 5.753C16.4769 5.98466 16.3924 6.24634 16.3715 6.51677C16.3506 6.78721 16.3938 7.05877 16.4975 7.30938C16.6013 7.55999 16.7627 7.78258 16.9687 7.95905C17.1747 8.13553 17.4194 8.26091 17.683 8.325C19.439 8.751 19.439 11.249 17.683 11.675C17.4192 11.7389 17.1742 11.8642 16.968 12.0407C16.7618 12.2172 16.6001 12.4399 16.4963 12.6907C16.3924 12.9414 16.3491 13.2132 16.3701 13.4838C16.3911 13.7544 16.4757 14.0162 16.617 14.248C17.557 15.791 15.791 17.558 14.247 16.618C14.0153 16.4769 13.7537 16.3924 13.4832 16.3715C13.2128 16.3506 12.9412 16.3938 12.6906 16.4975C12.44 16.6013 12.2174 16.7627 12.0409 16.9687C11.8645 17.1747 11.7391 17.4194 11.675 17.683C11.249 19.439 8.751 19.439 8.325 17.683C8.26108 17.4192 8.13578 17.1742 7.95929 16.968C7.7828 16.7618 7.56011 16.6001 7.30935 16.4963C7.05859 16.3924 6.78683 16.3491 6.51621 16.3701C6.24559 16.3911 5.98375 16.4757 5.752 16.617C4.209 17.557 2.442 15.791 3.382 14.247C3.5231 14.0153 3.60755 13.7537 3.62848 13.4832C3.64942 13.2128 3.60624 12.9412 3.50247 12.6906C3.3987 12.44 3.23726 12.2174 3.03127 12.0409C2.82529 11.8645 2.58056 11.7391 2.317 11.675C0.561 11.249 0.561 8.751 2.317 8.325C2.5808 8.26108 2.82578 8.13578 3.032 7.95929C3.23822 7.7828 3.39985 7.56011 3.50375 7.30935C3.60764 7.05859 3.65085 6.78683 3.62987 6.51621C3.60889 6.24559 3.5243 5.98375 3.383 5.752C2.443 4.209 4.209 2.442 5.753 3.382C6.753 3.99 8.049 3.452 8.325 2.317Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                           
          </button>
        </div>    
      </div>
      <div class="site-section__table-wrapper orders__table-wrapper" x-data="{editOrderPopup: false}">
    <nav class="site-section__table orders__table" x-data="{tables: [1,2,3,4,5,6,7,8,9,10]}">
      <ul role="list" class="site-section__table-list site-section__table-caption-list orders__table-list orders__table-caption-list">
        <li class="site-section__table-list-item site-section__table-caption-list-item orders__table-list-item orders__table-list-caption-item">
          <button class="site-section__table-sort-btn site-section__table-data-sort-btn" type="button">
            Дата
            <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 13L4 16M4 16L7 13M4 16V4M16 14C16 15.1046 15.1046 16 14 16C12.8954 16 12 15.1046 12 14C12 12.8954 12.8954 12 14 12C15.1046 12 16 12.8954 16 14ZM16 14V17C16 17.5304 15.7893 18.0391 15.4142 18.4142C15.0391 18.7893 14.5304 19 14 19H12.5M14 1C14.5304 1 15.0391 1.21071 15.4142 1.58579C15.7893 1.96086 16 2.46957 16 3V6C16 6.53043 15.7893 7.03914 15.4142 7.41421C15.0391 7.78929 14.5304 8 14 8C13.4696 8 12.9609 7.78929 12.5858 7.41421C12.2107 7.03914 12 6.53043 12 6V3C12 2.46957 12.2107 1.96086 12.5858 1.58579C12.9609 1.21071 13.4696 1 14 1Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                
          </button>
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item orders__table-list-item orders__table-list-caption-item">
          <button class="site-section__table-sort-btn site-section__table-number-sort-btn" type="button">
            Номер
            <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 13L4 16M4 16L7 13M4 16V4M16 14C16 15.1046 15.1046 16 14 16C12.8954 16 12 15.1046 12 14C12 12.8954 12.8954 12 14 12C15.1046 12 16 12.8954 16 14ZM16 14V17C16 17.5304 15.7893 18.0391 15.4142 18.4142C15.0391 18.7893 14.5304 19 14 19H12.5M14 1C14.5304 1 15.0391 1.21071 15.4142 1.58579C15.7893 1.96086 16 2.46957 16 3V6C16 6.53043 15.7893 7.03914 15.4142 7.41421C15.0391 7.78929 14.5304 8 14 8C13.4696 8 12.9609 7.78929 12.5858 7.41421C12.2107 7.03914 12 6.53043 12 6V3C12 2.46957 12.2107 1.96086 12.5858 1.58579C12.9609 1.21071 13.4696 1 14 1Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                
          </button>
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item orders__table-list-item orders__table-list-caption-item">
          Контрагент
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item orders__table-list-item orders__table-list-caption-item">
          Стоимость
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item orders__table-list-item orders__table-list-caption-item">
          Статус
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item orders__table-list-item orders__table-list-caption-item">
          Ответственный
        </li>
        <li class="site-section__table-list-item site-section__table-list-caption-item orders__table-list-item orders__table-list-item--desktop orders__table-list-caption-item">
          Организация
        </li>
      </ul>
      <template x-for="table in tables">
      <ul role="list" class="site-section__table-list orders__table-list">
        <li class="site-section__table-list-item orders__table-list-item">
          25.10.2022
        </li>
        <li class="site-section__table-list-item orders__table-list-item number">
          <button type="button" class="site-section__edit-order-btn" x-on:click="editOrderPopup = true">
          22.12.2028
        </button>
        </li>
        <li class="site-section__table-list-item orders__table-list-item">
          <a href="/contragentsPage" class="site-section__contragent-link">
            УЗТМ
          </a>
        </li>
        <li class="site-section__table-list-item orders__table-list-item orders__table-list-item--cost">
           5 000 000 , 00
        </li>
        <li class="site-section__table-list-item orders__table-list-item site-section__table-list-item--status-btn" x-data="{status: 'in process', toggleStatusDropdown: false}" x-on:click.outside="toggleStatusDropdown = false">
          <button class="btn site-section__status-btn site-section__status-btn--in-process" type="button" x-bind:class="{'site-section__status-btn--in-process': status === 'in process', 'site-section__status-btn--shipped': status === 'shipped','site-section__status-btn--cancelled': status === 'cancelled', 'site-section__status-btn--in-work': status === 'in work', 'site-section__status-btn--completed': status === 'completed', 'site-section__status-btn--cargo-in-way': status === 'cargo in way', 'site-section__status-btn--on-payment': status === 'on payment' }" x-text="status === 'in process' ? 'Ожидает ответ' : status === 'shipped' ? 'Отгружен' : status === 'cancelled' ? 'Отменён' : status === 'in work' ? 'В работе' : status === 'completed' ? 'Завершён' : status === 'cargo in way' ? 'Груз в пути': status === 'on payment' ? 'На оплате': ''">
            Ожидает ответ
          </button>
          <div class="site-section__choose-status-dropdown-wrapper">
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
            <ul class="site-section__choose-status-dropdown-list orders-table__choose-status-dropdown-list" role="list" x-bind:class="{'active': toggleStatusDropdown === true}">
               <li class="site-section__choose-status-dropdown-list-item">
                  <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'in process'; toggleStatusDropdown = false">Ожидает ответ</button>
               </li>
               <li class="site-section__choose-status-dropdown-list-item">
                <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'in work'; toggleStatusDropdown = false">В работе</button>
             </li>
             <li class="site-section__choose-status-dropdown-list-item">
              <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'completed'; toggleStatusDropdown = false">Завершён</button>
           </li>
           <li class="site-section__choose-status-dropdown-list-item">
            <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'cargo in way'; toggleStatusDropdown = false">Груз в пути</button>
         </li>
         <li class="site-section__choose-status-dropdown-list-item">
          <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'on payment'; toggleStatusDropdown = false">На оплате</button>
       </li>
       <li class="site-section__choose-status-dropdown-list-item">
        <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'cancelled'; toggleStatusDropdown = false">Отменен</button>
     </li>
     <li class="site-section__choose-status-dropdown-list-item">
      <button class="site-section__choose-status-dropdown-list-item-btn" type="button" x-on:click="status = 'shipped'; toggleStatusDropdown = false">Отгружен</button>
   </li>
            </ul>
          </div>
       </li>
       <li class="site-section__table-list-item orders__table-list-item orders__table-list-item--resp">
        <div class="site-section__resp-wrapper">
          <img src="/images/header-avatar-placeholder.svg" alt="responsible face avatar" loading="lazy" decoding="async" width="24" height="24">
          <span class="orders__resp-title">
            vtr@uralreduktor.ru
          </span>
        </div>
     </li>
     <li class="site-section__table-list-item orders__table-list-item orders__table-list-item--org-link">
      <a href="#" class="site-section__org-link">
        Моя компания
      </a>
    </li>
    <li class="site-section__table-list-item orders__table-list-item site-section__table-list-item--options-btn" x-data="{toggleDropdown:false}" x-on:click.outside="toggleDropdown = false">
      <button type="button" class="site-section__table-list-item-options-btn" x-on:click="toggleDropdown = !toggleDropdown">
        <svg width="5" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
          <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
          <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
          <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>            
      </button>
      <form action="#" method="post" class="site-section__table-list-item-options-dropdown" x-bind:class="{'active': toggleDropdown === true}">
        <ul role="list" class="site-section__table-list-item-options-dropdown-list">
          <li class="site-section__table-list-item-options-dropdown-list-item">
            <button type="button" class="site-section__table-list-item-options-edit-btn" x-on:click="editOrderPopup = true">
              Редактировать         
            </button>
          </li>
          <li class="site-section__table-list-item-options-dropdown-list-item">
            <button type="button" class="site-section__table-list-item-options-delete-btn" x-on:click="tables = tables.filter(i => i !== table)">
              Удалить         
            </button>
          </li>
        </ul>
      </form>
    </li>
      </ul>
    </template>
    </nav>

    <div class="popup edit-order-popup" x-bind:class="{'active': editOrderPopup === true}">
    <form action="#" method="post" class="popup__form edit-order-popup__form" x-data="{mobileTab: 'order', desktopTab: 'delivery'}">
    <div class="popup__content edit-order-popup__content">
  <div class="popup__top-row edit-order-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="settingsPopup = false;editOrderPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="settingsPopup = false;editOrderPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <h2 class="popup__title edit-order-popup__title">
      Заказ 
        <div class="edit-order-popup__title-bottom">
        <span class="edit-order-popup__number-title">00000002</span>
        от
        <time datetime="25.10.2022" class="edit-order-popup__date-title">25.10.2022</time>
        </div>
    </h2>
    <div class="edit-order-popup__top-row-btn-group">
      <button type="button" class="edit-order-popup__top-row-download-btn">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 15H17C17.5304 15 18.0391 14.7893 18.4142 14.4142C18.7893 14.0391 19 13.5304 19 13V9C19 8.46957 18.7893 7.96086 18.4142 7.58579C18.0391 7.21071 17.5304 7 17 7H3C2.46957 7 1.96086 7.21071 1.58579 7.58579C1.21071 7.96086 1 8.46957 1 9V13C1 13.5304 1.21071 14.0391 1.58579 14.4142C1.96086 14.7893 2.46957 15 3 15H5M15 7V3C15 2.46957 14.7893 1.96086 14.4142 1.58579C14.0391 1.21071 13.5304 1 13 1H7C6.46957 1 5.96086 1.21071 5.58579 1.58579C5.21071 1.96086 5 2.46957 5 3V7M7 11H13C14.1046 11 15 11.8954 15 13V17C15 18.1046 14.1046 19 13 19H7C5.89543 19 5 18.1046 5 17V13C5 11.8954 5.89543 11 7 11Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>          
      </button>
      <div class="edit-order-popup__top-row-options-wrapper" x-data="{toggleDropdown: false}">
        <button type="button" class="edit-order-popup__top-row-options-btn" x-on:click="toggleDropdown = !toggleDropdown">
          <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#869AB8"></path>
            <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#869AB8"></path>
            <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#869AB8"></path>
            <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
        </button>
        <div class="edit-order-popup__top-row-options-dropdown" x-bind:class="{'active': toggleDropdown === true}">
          <ul role="list" class="edit-order-popup__top-row-options-dropdown-list">
            <li class="edit-order-popup__top-row-options-dropdown-list-item">
              <input readonly class="edit-order-popup__top-row-options-dropdown-list-item-input edit" value="Редактировать">
            </li>
            <li class="edit-order-popup__top-row-options-dropdown-list-item">
              <input readonly class="edit-order-popup__top-row-options-dropdown-list-item-input delete" value="Удалить">
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>
   <ul role="list" class="edit-order-popup__tabs mobile">
    <li class="edit-order-popup__tabs-item">
      <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': mobileTab === 'order'}" x-on:click="mobileTab = 'order'">
        Заказ
      </button>
    </li>
    <li class="edit-order-popup__tabs-item">
      <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': mobileTab === 'order docs'}" x-on:click="mobileTab = 'order docs'">
        Документы заказа
      </button>
    </li>
    <li class="edit-order-popup__tabs-item">
      <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': mobileTab === 'comments'}" x-on:click="mobileTab = 'comments'">
        Комментарии
      </button>
    </li>
    <li class="edit-order-popup__tabs-item">
      <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': mobileTab === 'order complete'}" x-on:click="mobileTab = 'order complete'">
        Завершение заказа
      </button>
    </li>
   </ul>
    <div class="popup__body edit-order-popup__body" x-show="mobileTab === 'order'">
       <fieldset class="edit-order-popup__fieldset edit-order-popup__fieldset--4-cols two-cols-adaptive b-b m-b">
           <div class="edit-order-popup__form-control-group edit-order-popup__form-control-group--2-cols">
              <p class="edit-order-popup__form-control-group-title">
                Состояние
              </p>
              <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'На согласовании'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 5" value="На согласовании" readonly x-model="resultInputVal">
                <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="edit-order-popup__form-control-select-list">
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="На согласовании" id="На согласовании" value="На согласовании" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'На согласовании'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="В работе" id="В работе" value="В работе" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'В работе'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="Завершён" id="Завершён" value="Завершён" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Завершён'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="Груз в пути" id="Груз в пути" value="Груз в пути" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Груз в пути'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="На оплате" id="На оплате" value="На оплате" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'На оплате'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="Оплачен" id="Оплачен" value="Оплачен" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Оплачен'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="Отгружен" id="Отгружен" value="Отгружен" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Отгружен'">
                  </li>
                </ul>
                </div>
                <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
              </div>
           </div>
           <div class="edit-order-popup__form-control-group edit-order-popup__form-control-group--2-cols payment">
            <p class="edit-order-popup__form-control-group-title">
              Оплата
            </p>
            <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper payment-select" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Оплачен'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 5" value="Оплачен" readonly x-model="resultInputVal">
              <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="edit-order-popup__form-control-select-list">
                <li class="edit-order-popup__form-control-select-list-item">
                  <input type="text" name="Оплачен" id="Оплачен" value="Оплачен" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Оплачен'">
                </li>
                <li class="edit-order-popup__form-control-select-list-item">
                  <input type="text" name="не Оплачен" id="не Оплачен" value="не Оплачен" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'не Оплачен'">
                </li>
              </ul>
              </div>
              <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                  
            </div>
         </div>
           <div class="edit-order-popup__form-control-group edit-order-popup__form-control-group--2-cols number-group">
            <p class="edit-order-popup__form-control-group-title">
                Номер
            </p>
            <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-input-wrapper number-input">
              <input type="number" readonly class="edit-order-popup__form-control-input-number" value="00000002">
            </div>
         </div>
         <div class="edit-order-popup__form-control-group edit-order-popup__form-control-group--2-cols">
          <p class="edit-order-popup__form-control-group-title data-title">
              Дата
          </p>
          <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-input-wrapper datetimepicker-wrapper" id="datetimepicker1" data-td-target-input="nearest" data-td-target-toggle="nearest">
            <input class="edit-order-popup__form-control-input-date" id="datetimepicker1Input" type="text" data-td-target="#datetimepicker1" readonly>
          <button type="button" data-td-target="#datetimepicker1" data-td-toggle="datetimepicker" class="edit-order-popup__form-control-datepicker-btn">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 1V5M5 1V5M1 9H17M3 3H15C16.1046 3 17 3.89543 17 5V17C17 18.1046 16.1046 19 15 19H3C1.89543 19 1 18.1046 1 17V5C1 3.89543 1.89543 3 3 3ZM5 13H7V15H5V13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>              
          </button>
          </div>
       </div>
       </fieldset>
       <fieldset class="edit-order-popup__fieldset edit-order-popup__fieldset--2-cols b-b m-b">
        <div class="edit-order-popup__form-control-group">
          <p class="edit-order-popup__form-control-group-title">
            Контрагент
          </p>
          <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'УЗТМ'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 6" value="УЗТМ" readonly x-model="resultInputVal">
            <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>  
              <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="edit-order-popup__form-control-select-list">
                  <li class="edit-order-popup__form-control-select-list-item search-input-item">
                    <input type="text" class="edit-order-popup__form-control-select-list-item-input-search" placeholder="Поиск...">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="УЗТМ" id="УЗТМ" value="УЗТМ" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'УЗТМ'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="УЗТМ 1" id="УЗТМ 1" value="УЗТМ 1" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'УЗТМ 1'">
                  </li>
                  <li class="edit-order-popup__form-control-select-list-item">
                    <input type="text" name="УЗТМ 2" id="УЗТМ 2" value="УЗТМ 2" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'УЗТМ 2'">
                  </li>
                </ul>
                <ul role="list" class="edit-order-popup__form-control-select-list b-t">
                  <li class="edit-order-popup__form-control-select-list-item">
                  <button type="button" class="edit-order-popup__create-contragent-btn">
                    <svg class="edit-order-popup__create-contragent-btn-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.00033 1.16663V12.8333M1.16699 6.99996H12.8337" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>    
                      Создать контрагента                  
                  </button>
                  </li>
                </ul>
              </div>                
          </div>
        </div>
        <div class="edit-order-popup__form-control-group">
          <p class="edit-order-popup__form-control-group-title">
            Организация
          </p>
          <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Моя организация'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 7" value="Моя организация" readonly x-model="resultInputVal">
            <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="edit-order-popup__form-control-select-list">
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="Моя организация" id="Моя организация 1" value="Моя организация" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Моя организация'">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="Моя организация 1" id="Моя организация 1" value="Моя организация 1" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Моя организация 1'">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="Моя организация 2" id="Моя организация 3" value="Моя организация 2" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Моя организация 2'">
              </li>
            </ul>
            </div>
            <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
        <div class="edit-order-popup__form-control-group offer-group">
          <p class="edit-order-popup__form-control-group-title">
            Основание
          </p>
          <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Предложение 11111 от 12.10.2022'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 8" value="Предложение 11111 от 12.10.2022" readonly x-model="resultInputVal">
            <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="edit-order-popup__form-control-select-list">
              <li class="edit-order-popup__form-control-select-list-item search-input-item">
                <input type="text" class="edit-order-popup__form-control-select-list-item-input-search" placeholder="Поиск...">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="Предложение 11111 от 12.10.2022" id="Предложение 11111 от 12.10.2022" value="Предложение 11111 от 12.10.2022" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Предложение 11111 от 12.10.2022'">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="Предложение 11111 от 12.10.2022 2" id="Предложение 11111 от 12.10.2022 2" value="Предложение 11111 от 12.10.2022 2" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Предложение 11111 от 12.10.2022 2'">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="Предложение 11111 от 12.10.2022 3" id="Предложение 11111 от 12.10.2022 3" value="Предложение 11111 от 12.10.2022 3" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Предложение 11111 от 12.10.2022 3'">
              </li>
            </ul>
            </div>
            <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
        <div class="edit-order-popup__form-control-group accounts" x-data="dropInputFiler">
          <div class="edit-order-popup__accounts-wrapper">
          <p class="edit-order-popup__form-control-group-title">
            Счета
          </p>
          <div class="edit-order-popup__form-control-group-file-input-wrapper">
          <input class="edit-order-popup__form-control-group-file-input" type="file" name="accounts" id="accounts" multiple x-on:change="handleFiles">
          <svg class="edit-order-popup__form-control-group-file-input-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.66699 10.3334V11.6667C1.66699 12.0204 1.80747 12.3595 2.05752 12.6096C2.30756 12.8596 2.6467 13.0001 3.00033 13.0001H11.0003C11.3539 13.0001 11.6931 12.8596 11.9431 12.6096C12.1932 12.3595 12.3337 12.0204 12.3337 11.6667V10.3334M3.66699 6.33341L7.00033 9.66675M7.00033 9.66675L10.3337 6.33341M7.00033 9.66675V1.66675" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="edit-order-popup__form-control-group-file-input-text">Загрузить</span>            
          </div>
        </div>
        <ul role="list" class="edit-order-popup__form-control-group-file-input-list">
        </ul>
        <script>
          document.addEventListener('alpine:init', () => {
            Alpine.data('dropInputFiler', () => ({
 
              handleFiles() {
                const fileInput = document.querySelector('.edit-order-popup__form-control-group-file-input');
                const files = fileInput.files;
                const fileList = document.querySelector('.edit-order-popup__form-control-group-file-input-list');
                
                [...files].forEach((file, index) => {
                  fileList.insertAdjacentHTML('beforeEnd', 
                  `<li class="edit-order-popup__form-control-group-file-input-list-item" x-ref="fileInputListItem${index}"><span class="edit-order-popup__form-control-group-file-input-list-item-name">${file.name}</span>
                    <button type="button" class="edit-order-popup__form-control-group-file-input-list-item-open-btn">
          <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.9997 5.99996L6.4997 12.5C6.10188 12.8978 5.87838 13.4374 5.87838 14C5.87838 14.5626 6.10188 15.1021 6.4997 15.5C6.89753 15.8978 7.43709 16.1213 7.9997 16.1213C8.56231 16.1213 9.10188 15.8978 9.4997 15.5L15.9997 8.99996C16.7954 8.20432 17.2423 7.12518 17.2423 5.99996C17.2423 4.87475 16.7954 3.79561 15.9997 2.99996C15.2041 2.20432 14.1249 1.75732 12.9997 1.75732C11.8745 1.75732 10.7954 2.20432 9.9997 2.99996L3.4997 9.49996C2.30623 10.6934 1.63574 12.3121 1.63574 14C1.63574 15.6878 2.30623 17.3065 3.4997 18.5C4.69318 19.6934 6.31188 20.3639 7.9997 20.3639C9.68753 20.3639 11.3062 19.6934 12.4997 18.5L18.9997 12" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                     
        </button>
                    <button type="button" class="edit-order-popup__form-control-group-file-input-list-item-delete-btn" x-on:click="$el.closest('.edit-order-popup__form-control-group-file-input-list-item').remove()">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 1L1 13M1 1L13 13" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>            
        </button>
                  </li>`
                  )
                });
            }
            }))
         })
        </script>
        </div>
       </fieldset>
       <div class="edit-order-popup__form-control-group rubles-nds">
        <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'руб. Розничная цена с НДС'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
          <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 10" value="руб. Розничная цена с НДС" readonly x-model="resultInputVal">
          <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
          <ul role="list" class="edit-order-popup__form-control-select-list">
            <li class="edit-order-popup__form-control-select-list-item">
              <input type="text" name="руб. Розничная цена с НДС" id="руб. Розничная цена с НДС" value="руб. Розничная цена с НДС" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'руб. Розничная цена с НДС'">
            </li>
            <li class="edit-order-popup__form-control-select-list-item">
              <input type="text" name="руб. Розничная цена с НДС 2" id="руб. Розничная цена с НДС 2" value="руб. Розничная цена с НДС 2" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'руб. Розничная цена с НДС 2'">
            </li>
            <li class="edit-order-popup__form-control-select-list-item">
              <input type="text" name="руб. Розничная цена с НДС 3" id="руб. Розничная цена с НДС 3" value="руб. Розничная цена с НДС 3" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'руб. Розничная цена с НДС 3'">
            </li>
          </ul>
          </div>
          <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
            <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </div>
      </div>
      <div class="create-order-popup__params-lists-wrapper" x-data="
{
paramsLists: [],
countInputVal: 1,
totalCount: 0,
totalWeight: 0,
totalVolume: 0,
}">
    <nav class="create-order-popup__params-lists-nav">
    <ul role="list" class="create-order-popup__params-list create-order-popup__params-caption-list b-b p-b">
      <li class="create-order-popup__params-caption-list-item t-a-c">№</li>
      <li class="create-order-popup__params-caption-list-item">Название</li>
      <li class="create-order-popup__params-caption-list-item t-a-c">Хар-ки</li>
      <li class="create-order-popup__params-caption-list-item">Кол-во</li>
      <li class="create-order-popup__params-caption-list-item">Вес,кг</li>
      <li class="create-order-popup__params-caption-list-item">Объём, м3</li>
      <li class="create-order-popup__params-caption-list-item t-a-c">Цена с НДС</li>
      <li class="create-order-popup__params-caption-list-item t-a-c">Сумма</li>
    </ul>
    <template x-for="(paramsList,index) in paramsLists">
    <ul role="list" class="create-order-popup__params-list params-group b-b p-b">
      <li class="create-order-popup__params-list-item number-item t-a-c">
        <span class="create-order-popup__item-number" x-text="paramsList.id"></span>
        <div class="create-order-popup__delete-btn-wrapper mobile" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
         <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
           <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
             <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
             <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
             <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             </svg>                    
         </button>
         <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists = paramsLists.filter(i => i !== paramsList)">
           Удалить           
        </button>
        </div>
      </li>
      <li class="create-order-popup__params-list-item type-item">
       <h4 class="create-order-popup__params-list-item-title">Название</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Тип'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
           <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 55" value="Тип" readonly x-model="resultInputVal">
           <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
           <ul role="list" class="create-order-popup__form-control-select-list">
             <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="Тип" id="Тип 11" value="Тип" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип'">
             </li>
             <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="Тип 1" id="Тип 21" value="Тип 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 1'">
             </li>
             <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="Тип 2" id="Тип 222" value="Тип 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 2'">
             </li>
           </ul>
            </div>
           <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
             <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             </svg>                  
         </div>
       </div>
      </li>
      <li class="create-order-popup__params-list-item chars-item">
       <h4 class="create-order-popup__params-list-item-title">Хар-ки</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper chars-wrapper">
           <input type="text" class="create-order-popup__form-control-input" value="УВЛ">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item count-item">
       <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-wrapper">
           <input type="number" class="create-order-popup__form-control-input count-input" x-model="totalCount += Number($el.target.value)" value="1">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item weight-item">
       <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper weight-wrapper">
           <input type="number" class="create-order-popup__form-control-input" value="1">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item volume-item">
       <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper volume-wrapper">
           <input type="number" class="create-order-popup__form-control-input" value="1">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item nds-price-item">
       <h4 class="create-order-popup__params-list-item-title">Цена с НДС</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper nds-price-wrapper">
           <input class="create-order-popup__form-control-input" placeholder="0,00" x-mask:dynamic="$money($input, ',')">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item sum-item">
       <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper price-wrapper">
           <input class="create-order-popup__form-control-input" placeholder="5 000 000,00" x-mask:dynamic="$money($input, ',')">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item options-item">
        <div class="create-order-popup__delete-btn-wrapper" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
             <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
               <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>                    
             </button>
             <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists.slice(paramsList.id, 1)">
                     Удалить           
             </button>
        </div>
      </li>
      <li class="create-order-popup__params-list-item name-item">
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper params-name-wrapper">
           <input type="text" class="create-order-popup__form-control-input" placeholder="Наименование">
         </div>
      </div>
      </li>
    </ul>
   </template>
   </nav>
   <button class="create-order-popup__bottom-params-list-add-btn adaptive" type="button" x-on:click="paramsLists.push({ id: paramsLists.length + 1})">
     Добавить строку
   </button>
   <ul role="list" class="create-order-popup__bottom-params-list adaptive">
     <li class="create-order-popup__bottom-params-list-item title-item">
       <h4 class="create-order-popup__params-list-item-title bottom-params-list-item-title">Итого</h4>
    </li>
    <li class="create-order-popup__bottom-params-list-item">
     <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
     <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
       <input disabled class="create-order-popup__form-control-input-number count-input-number" x-model="totalCount">
     </div>
   </li>
   <li class="create-order-popup__bottom-params-list-item">
     <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
     <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
       <input type="number" readonly class="create-order-popup__form-control-input-number" x-model="totalWeight">
     </div>
   </li>
   <li class="create-order-popup__bottom-params-list-item">
     <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
     <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper-last">
       <input type="number" readonly class="create-order-popup__form-control-input-number" x-model="totalVolume">
     </div>
   </li>
    <li class="create-order-popup__bottom-params-list-item sum-item">
     <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
     <div class="create-order-popup__form-control-group">
       <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-input-wrapper">
         <input type="number" readonly class="create-order-popup__form-control-input-number" placeholder="0,00">
       </div>
     </div>
  </li>
   </ul>
    <ul role="list" class="create-order-popup__bottom-params-list desktop">
       <li class="create-order-popup__bottom-params-list-item add-btn-item">
          <button class="create-order-popup__bottom-params-list-add-btn" type="button" x-on:click="addParamsList">
            Добавить строку
          </button>
       </li>
       <li class="create-order-popup__bottom-params-list-item">
         <div class="create-order-popup__form-control-group create-order-popup__form-control-group--4-cols bottom-params-list">
           <p class="create-order-popup__form-control-group-title bottom-params-list">
             Итого:
           </p>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
             <input readonly class="create-order-popup__form-control-input-number">
           </div>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
             <input type="number" readonly class="create-order-popup__form-control-input-number" value="2">
           </div>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper-last">
             <input type="number" readonly class="create-order-popup__form-control-input-number" value="2">
           </div>
         </div>
      </li>
      <li class="create-order-popup__bottom-params-list-item">
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-input-wrapper">
           <input type="number" readonly class="create-order-popup__form-control-input-number" placeholder="0,00">
         </div>
       </div>
    </li>
    </ul>
   </div>

<!-- <script is:inline>
    document.addEventListener('alpine:init', () => {
     const paramsListsNav = document.querySelector('.create-order-popup__params-lists-nav');
 
 function increaseParamsListNumber() {
 let number = 3;
 
 return function() {
 return number++;
 };
 }
 const paramsListNumber = increaseParamsListNumber();
 
        Alpine.data('paramsList', () => ({
          addParamsList() {
           paramsListsNav.insertAdjacentHTML('beforeend', ` <ul role="list" class="create-order-popup__params-list params-group b-b p-b">
         <li class="create-order-popup__params-list-item number-item t-a-c">
           <span class="create-order-popup__item-number">${paramsListNumber()}</span>
           <div class="create-order-popup__delete-btn-wrapper mobile" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
             <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
               <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>                    
             </button>
             <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists = paramsLists.filter(i => i !== paramsList)">
                         Удалить           
             </button>
            </div>
         </li>
         <li class="create-order-popup__params-list-item type-item">
           <h4 class="create-order-popup__params-list-item-title">Название</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Тип'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 16" value="Тип" readonly x-model="resultInputVal">
              <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-order-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Тип" id="Тип" value="Тип" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип'">
                </li>
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Тип 1" id="Тип 1" value="Тип 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 1'">
                </li>
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Тип 2" id="Тип 2" value="Тип 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 2'">
                </li>
              </ul>
            </div>
              <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
            </div>
          </div>
         </li>
         <li class="create-order-popup__params-list-item chars-item">
           <h4 class="create-order-popup__params-list-item-title">Хар-ки</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper chars-wrapper">
              <input type="text" class="create-order-popup__form-control-input" value="УВЛ">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item count-item">
           <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-wrapper">
              <input type="number" class="create-order-popup__form-control-input" value="1">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item weight-item">
           <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper weight-wrapper">
              <input type="number" class="create-order-popup__form-control-input" value="1">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item volume-item">
           <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper volume-wrapper">
              <input type="number" class="create-order-popup__form-control-input" value="1">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item nds-price-item">
           <h4 class="create-order-popup__params-list-item-title">Цена с НДС</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper nds-price-wrapper">
              <input class="create-order-popup__form-control-input" placeholder="0,00" x-mask:dynamic="$money($input, ',')">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item sum-item">
           <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper price-wrapper">
              <input class="create-order-popup__form-control-input" placeholder="5 000 000,00" x-mask:dynamic="$money($input, ',')">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item options-item">
           <div class="create-order-popup__delete-btn-wrapper" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
                <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
                  <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"/>
                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"/>
                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"/>
                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                </button>
                <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists = paramsLists.filter(i => i !== paramsList)">
                         Удалить           
                 </button>
           </div>
         </li>
         <li class="create-order-popup__params-list-item name-item">
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper params-name-wrapper">
              <input type="text" class="create-order-popup__form-control-input" placeholder="Наименование">
            </div>
         </div>
         </li>
       </ul>`);
          }
       }))
   })
 
</script> -->
      <fieldset class="edit-order-popup__fieldset edit-order-popup__fieldset--3-cols payment-guarantee-prod">
        <div class="edit-order-popup__form-control-group payment-req">
           <p class="edit-order-popup__form-control-group-title">
            Условия оплаты
           </p>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '30% предоплата, остаток 70% по факту готовности продукции к отгрузке.'}" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
    <input type="text" class="create-order-popup__form-control-select-result-input payment-conds-input" value="30% предоплата, остаток 70% по факту готовности продукции к отгрузке." readonly x-model="resultInputVal" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList">
    <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList">
      <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>  
      <div class="create-order-popup__payment-req-dropdown" x-bind:class="{'active': toggleSelectList === true}">
        <input type="text" class="create-order-popup__payment-req-dropdown-search-input">
      <ul role="list" class="create-order-popup__payment-req-dropdown-list">
        <li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="10 календарных дней с даты поставки товара" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '10 календарных дней с даты поставки товара'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 30 календарных дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 30 календарных дней'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 30 рабочих дней с момента получения" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 30 рабочих дней с момента получения'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 60 дней с момента поставки товара 2" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 60 дней с момента поставки товара 2'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 7 рабочих дней с даты поставки" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 7 рабочих дней с даты поставки'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% Оплата" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% Оплата'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% Предоплата" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% Предоплата'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30 календарных дней с даты поставки товара" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30 календарных дней с даты поставки товара'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30% Предоплата,70% в течение 5 дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30% Предоплата,70% в течение 5 дней'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30% Предоплата,70% по факту готовности продукции" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30% Предоплата,70% по факту готовности продукции'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30% Предоплата,70% по факту поставки товара" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30% Предоплата,70% по факту поставки товара'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="40% предоплата, 60% по факту готовности продукции" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '40% предоплата, 60% по факту готовности продукции'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="50% предоплата, 50% в течение 15 календарных дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '50% предоплата, 50% в течение 15 календарных дней'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="50% предоплата, 50% в течение 30 календарных дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '50% предоплата, 50% в течение 30 календарных дней'">
        </li>
    </ul>  
      </div>              
  </div>
        </div>
        <div class="edit-order-popup__form-control-group">
          <p class="edit-order-popup__form-control-group-title">
            Гарантийный срок
          </p>
          <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '12 месяцев'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 14" value="12 месяцев" readonly x-model="resultInputVal">
            <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="edit-order-popup__form-control-select-list">
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="12 месяцев" id="12 месяцев" value="12 месяцев" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '12 месяцев'">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
                <input type="text" name="5 месяцев" id="5 месяцев" value="5 месяцев" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '5 месяцев'">
              </li>
              <li class="edit-order-popup__form-control-select-list-item">
               <input type="text" name="6 месяцев" id="6 месяцев" value="6 месяцев" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '6 месяцев'">
             </li>
            </ul>
            </div>
            <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
       <div class="edit-order-popup__form-control-group">
        <p class="edit-order-popup__form-control-group-title">
          Срок изготовления
        </p>
        <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '30 дней'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
          <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 15" value="30 дней" readonly x-model="resultInputVal">
          <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
          <ul role="list" class="edit-order-popup__form-control-select-list">
            <li class="edit-order-popup__form-control-select-list-item">
              <input type="text" name="30 дней" id="30 дней" value="30 дней" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '30 дней'">
            </li>
            <li class="edit-order-popup__form-control-select-list-item">
              <input type="text" name="28 дней" id="28 дней" value="28 дней" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '28 дней'">
            </li>
            <li class="edit-order-popup__form-control-select-list-item">
             <input type="text" name="24 дня" id="24 дня" value="24 дня" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '24 дня'">
           </li>
          </ul>
          </div>
          <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
            <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </div>
       </div>
    </fieldset>
      <ul role="list" class="edit-order-popup__tabs desktop">
        <li class="edit-order-popup__tabs-item">
          <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': desktopTab === 'delivery'}" x-on:click="desktopTab = 'delivery'">
            Доставка
          </button>
        </li>
        <li class="edit-order-popup__tabs-item">
          <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': desktopTab === 'order docs'}" x-on:click="desktopTab = 'order docs'">
            Документы заказа
          </button>
        </li>
        <li class="edit-order-popup__tabs-item">
          <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': desktopTab === 'comments'}" x-on:click="desktopTab = 'comments'">
            Комментарии
          </button>
        </li>
        <li class="edit-order-popup__tabs-item">
          <button type="button" class="edit-order-popup__tabs-item-btn" x-bind:class="{'active': desktopTab === 'order complete'}" x-on:click="desktopTab = 'order complete'">
            Завершение заказа
          </button>
        </li>
       </ul>
       <div class="edit-order-popup__tabs-body" x-show="desktopTab === 'delivery'">
        <p class="edit-order-popup__form-control-group-title delivery-conds">Условия доставки</p>
        <ul role="list" class="edit-order-popup__radio-list">
         <li class="edit-order-popup__radio-list-item">
           <input type="radio" name="Условия доставки" id="доставка до склада Получателя" class="edit-order-popup__radio-input" checked>
           <div class="edit-order-popup__radio-list-item-info">
             <label for="доставка до склада Получателя" class="edit-order-popup__radio-label">доставка до склада Получателя</label>
             <div class="edit-order-popup__form-control-group">
               <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-input-wrapper location-input-wrapper">
                 <input type="text" class="edit-order-popup__form-control-input" placeholder="Введите населенный пункт или адрес">
               </div>
            </div>
            <p class="edit-order-popup__radio-list-item-text">за счет</p>
            <div class="edit-order-popup__form-control-group">
             <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Поставщика'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
               <input type="text" class="edit-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 12" value="Поставщика" readonly x-model="resultInputVal">
               <div class="edit-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
               <ul role="list" class="edit-order-popup__form-control-select-list">
                 <li class="edit-order-popup__form-control-select-list-item">
                   <input type="text" name="Поставщика" id="Поставщика" value="Поставщика" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Поставщика'">
                 </li>
                 <li class="edit-order-popup__form-control-select-list-item">
                   <input type="text" name="Поставщика 1" id="Поставщика 1" value="Поставщика 1" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Поставщика 1'">
                 </li>
                 <li class="edit-order-popup__form-control-select-list-item">
                   <input type="text" name="Поставщика 2" id="Поставщика 2" value="Поставщика 2" readonly class="edit-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Поставщика 2'">
                 </li>
               </ul>
               </div>
               <svg class="edit-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                 <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>                  
             </div>
           </div>
            <button type="button" class="edit-order-popup__delivery-payment-btn">
              Просчитать стоимость доставки
            </button>
            <div class="edit-order-popup__form-control-group edit-order-popup__form-control-group--3-cols radio-list-total-sum">
              <p class="edit-order-popup__form-control-group-title">
                Итого:
              </p>
              <div class="edit-order-popup__form-control-wrapper edit-order-popup__form-control-input-wrapper total-sum">
                <input readonly class="edit-order-popup__form-control-input-number" value="7 000,00">
              </div>
              <button type="button" class="btn btn--secondary edit-order-popup__add-to-cost-btn">Добавить в стоимость</button>
           </div>
           </div>
         </li>
         <li class="edit-order-popup__radio-list-item">
           <input type="radio" name="Условия доставки" id="самовывоз" class="edit-order-popup__radio-input">
           <div class="edit-order-popup__radio-list-item-info two-cols">
             <label for="самовывоз" class="edit-order-popup__radio-label">самовывоз</label>
             <button type="button" class="edit-order-popup__storage-addr-btn">
               Наш адрес склада
             </button>
           </div>
         </li>
         <li class="edit-order-popup__radio-list-item">
           <input type="radio" name="Условия доставки" id="доставка до терминала транспортной компании" class="edit-order-popup__radio-input">
           <div class="edit-order-popup__radio-list-item-info">
             <label for="доставка до терминала транспортной компании" class="edit-order-popup__radio-label">доставка до терминала транспортной компании</label>
             <div class="create-order-popup__choose-transp-comp-btn-wrapper" x-data="{inputVal: 'Выберите транспортную компанию', toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
    <button type="button" class="create-order-popup__choose-transp-comp-btn" x-text="inputVal" x-on:click="toggleDropdown = !toggleDropdown"></button>
     <div class="create-order-popup__choose-transp-comp-dropdown" x-bind:class="{'active': toggleDropdown === true}">
        <input type="text" class="create-order-popup__choose-transp-comp-dropdown-search-input" value="Екатеринбург, улица">
      <ul role="list" class="create-order-popup__choose-transp-comp-dropdown-list">
        <li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="г. Екатеринбург" x-on:click="inputVal = 'г. Екатеринбург'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Вариант" x-on:click="inputVal = 'Вариант'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы" x-on:click="inputVal = 'Документы'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы 2" x-on:click="inputVal = 'Документы 2'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы 3" x-on:click="inputVal = 'Документы 3'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы 4" x-on:click="inputVal = 'Документы 4'">
            </li>
      </ul>
    </div>
</div>
           </div>
         </li>
        </ul>
       </div>
       <div class="edit-order-popup__tabs-body" x-show="desktopTab === 'order docs'">
        <div class="edit-order-popup__order-docs-wrapper">
          <div class="edit-order-popup__order-docs-btn-group">
            <ul role="list" class="edit-order-popup__order-docs-btn-group-list">
              <li class="edit-order-popup__order-docs-btn-group-list-item">
                <button type="button" class="edit-order-popup__order-docs-delete-btn">
                  <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5.44444H18.7778M7.66667 9.88889V16.5556M12.1111 9.88889V16.5556M2.11111 5.44444L3.22222 18.7778C3.22222 19.3671 3.45635 19.9324 3.8731 20.3491C4.28984 20.7659 4.85507 21 5.44444 21H14.3333C14.9227 21 15.4879 20.7659 15.9047 20.3491C16.3214 19.9324 16.5556 19.3671 16.5556 18.7778L17.6667 5.44444M6.55556 5.44444V2.11111C6.55556 1.81643 6.67262 1.53381 6.88099 1.32544C7.08937 1.11706 7.37198 1 7.66667 1H12.1111C12.4058 1 12.6884 1.11706 12.8968 1.32544C13.1052 1.53381 13.2222 1.81643 13.2222 2.11111V5.44444" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>  
                   Удалить                  
                </button>
              </li>
              <li class="edit-order-popup__order-docs-btn-group-list-item">
                <button type="button" class="edit-order-popup__order-docs-edit-btn">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Редактировать          
                </button>
              </li>
            </ul>
            <button type="button" class="btn btn--secondary edit-order-popup__order-docs-upload-btn">
              Загрузить
            </button>
          </div>
          <nav class="edit-order-popup__order-docs-table-list-wrapper">
          <ul role="list" class="edit-order-popup__order-docs-table-list edit-order-popup__order-docs-table-caption-list">
            <li class="edit-order-popup__order-docs-table-list-item"></li>
              <li class="edit-order-popup__order-docs-table-list-item">Название</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">Дата изменения</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">Отредактировал</li>
          </ul>
          <ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Договор 12345678" id="Договор 12345678" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Договор 12345678" class="edit-order-popup__order-docs-table-list-item-label">Договор 12345678</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c author">
                <img class="edit-order-popup__order-docs-table-list-item-img" src="/images/header-avatar-placeholder.svg" alt="order docs avatar" width="36" height="36">
                vtr@uralreduktor.ru
                </li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Паспорт Цилиндрический редуктор ЦТНД-314" id="Паспорт Цилиндрический редуктор ЦТНД-314" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Паспорт Цилиндрический редуктор ЦТНД-314" class="edit-order-popup__order-docs-table-list-item-label">Паспорт Цилиндрический редуктор ЦТНД-314</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c author">
                <img class="edit-order-popup__order-docs-table-list-item-img" src="/images/header-avatar-placeholder.svg" alt="order docs avatar" width="36" height="36">
                vtr@uralreduktor.ru
                </li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 1" id="Прочие документы 1" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 1" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 1</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c author">
                <img class="edit-order-popup__order-docs-table-list-item-img" src="/images/header-avatar-placeholder.svg" alt="order docs avatar" width="36" height="36">
                vtr@uralreduktor.ru
                </li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 2" id="Прочие документы 2" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 2" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 2</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c author">
                <img class="edit-order-popup__order-docs-table-list-item-img" src="/images/header-avatar-placeholder.svg" alt="order docs avatar" width="36" height="36">
                vtr@uralreduktor.ru
                </li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 3" id="Прочие документы 3" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 3" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 3</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c author">
                <img class="edit-order-popup__order-docs-table-list-item-img" src="/images/header-avatar-placeholder.svg" alt="order docs avatar" width="36" height="36">
                vtr@uralreduktor.ru
                </li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 4" id="Прочие документы 4" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 4" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 4</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c author">
                <img class="edit-order-popup__order-docs-table-list-item-img" src="/images/header-avatar-placeholder.svg" alt="order docs avatar" width="36" height="36">
                vtr@uralreduktor.ru
                </li>
            </ul>
        </nav>
        </div>
       </div>
       <div class="edit-order-popup__tabs-body" x-show="desktopTab === 'comments'" x-data="{
      textAreaValue: '', 
      commentsItems: []
      }">
        <ul role="list" class="edit-order-popup__comments-list main-list" x-bind:class="{'active': commentsItems.length > 0}">
          <template x-for="commentsItem in commentsItems">
            <li class="edit-order-popup__comments-list-item" x-data="{
      textAreaValue: '', 
      commentsItems: [],
      toggleCommentsWrapper: false
      }">
            <div class="edit-order-popup__comments-list-item-block">
            <img class="edit-order-popup__comments-img" src="/images/comment-avatar-placeholder.png" alt="order docs avatar" width="36" height="36">
            <div class="edit-order-popup__comments-list-item-right">
              <div class="edit-order-popup__comments-list-item-top-row">
                <p class="edit-order-popup__comments-list-item-name">vtr@uralreduktor.ru</p>
                <div class="edit-order-popup__comments-list-item-date-time">
                  <time datetime="18.08.2022" class="edit-order-popup__comments-list-item-date">18.08.2022</time>
                  в
                  <time datetime="15:45" class="edit-order-popup__comments-list-item-time">15:45</time>
                  </div>
                </div>
                <div class="edit-order-popup__comments-window">
                  <p class="edit-order-popup__comments-window-text" x-text="commentsItem"></p>
                </div>
                <button type="button" class="edit-order-popup__reply-btn" x-on:click="toggleCommentsWrapper = !toggleCommentsWrapper">
                  Ответить
                  </button>
                  <div class="edit-order-popup__comments-wrapper comments-list-item" x-show="toggleCommentsWrapper === true">
        <textarea class="edit-order-popup__comments-textarea desktop-textarea" placeholder="Напишите комментарий" x-model="textAreaValue">Напишите комментарий
        </textarea>
        <button type="button" class="btn btn--secondary edit-order-popup__comments-publish-btn desktop-publish-btn" x-on:click="commentsItems.push(textAreaValue);textAreaValue = '';toggleCommentsWrapper = false">Опубликовать</button>
        </div>
            </div>
            </div>
            <ul role="list" class="edit-order-popup__comments-list sub-list">
              <template x-for="commentsItem in commentsItems">
                <li class="edit-order-popup__comments-list-item">
              <div class="edit-order-popup__comments-list-item-block">
            <img class="edit-order-popup__comments-img" src="/images/comment-avatar-placeholder.png" alt="order docs avatar" width="36" height="36">
            <div class="edit-order-popup__comments-list-item-right">
              <div class="edit-order-popup__comments-list-item-top-row">
                <p class="edit-order-popup__comments-list-item-name">vtr@uralreduktor.ru</p>
                <div class="edit-order-popup__comments-list-item-date-time">
                  <time datetime="18.08.2022" class="edit-order-popup__comments-list-item-date">18.08.2022</time>
                  в
                  <time datetime="15:45" class="edit-order-popup__comments-list-item-time">15:45</time>
                  </div>
                </div>
                <div class="edit-order-popup__comments-window">
                  <p class="edit-order-popup__comments-window-text">От души</p>
                </div>
                <button type="button" class="edit-order-popup__reply-btn">
                  Ответить
                  </button>
            </div>
          </div>
                </li>
                </template>
            </ul>
            </li>
          </template>
        </ul>
        <div class="edit-order-popup__comments-wrapper">
        <p class="edit-order-popup__comments-mail">vtr@uralreduktor.ru</p>
        <textarea class="edit-order-popup__comments-textarea desktop-textarea" placeholder="Напишите комментарий" x-model="textAreaValue">Напишите комментарий
        </textarea>
        <button type="button" class="btn btn--secondary edit-order-popup__comments-publish-btn desktop-publish-btn" x-on:click="commentsItems.push(textAreaValue);textAreaValue = ''">Опубликовать</button>
        </div>
        </div>
        <div class="edit-order-popup__tabs-body" x-show="desktopTab === 'order complete'">
          <div class="edit-order-popup__order-complete-wrapper">
            <p class="edit-order-popup__order-complete-text">В случае отмены заказа, опишите причину.</p>
            <textarea class="edit-order-popup__order-complete-textarea">Введите текст</textarea>
          </div>
          </div>
    <ul role="list" class="edit-order-popup__btn-control-group">
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat edit-order-popup__undo-btn" x-on:click="editOrderPopup = false">
              Отменить
          </button>
      </li>
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary edit-order-popup__save-btn">
              Сохранить
          </button>
      </li>
  </ul>
    </div>
    <div class="popup__body edit-order-popup__body" x-show="mobileTab === 'order docs'">
        <div class="edit-order-popup__order-docs-wrapper">
          <div class="edit-order-popup__order-docs-btn-group">
            <ul role="list" class="edit-order-popup__order-docs-btn-group-list">
              <li class="edit-order-popup__order-docs-btn-group-list-item">
                <button type="button" class="edit-order-popup__order-docs-delete-btn">
                  <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5.44444H18.7778M7.66667 9.88889V16.5556M12.1111 9.88889V16.5556M2.11111 5.44444L3.22222 18.7778C3.22222 19.3671 3.45635 19.9324 3.8731 20.3491C4.28984 20.7659 4.85507 21 5.44444 21H14.3333C14.9227 21 15.4879 20.7659 15.9047 20.3491C16.3214 19.9324 16.5556 19.3671 16.5556 18.7778L17.6667 5.44444M6.55556 5.44444V2.11111C6.55556 1.81643 6.67262 1.53381 6.88099 1.32544C7.08937 1.11706 7.37198 1 7.66667 1H12.1111C12.4058 1 12.6884 1.11706 12.8968 1.32544C13.1052 1.53381 13.2222 1.81643 13.2222 2.11111V5.44444" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                    
                </button>
              </li>
              <li class="edit-order-popup__order-docs-btn-group-list-item">
                <button type="button" class="edit-order-popup__order-docs-edit-btn">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.9162 2.90847L15.0915 7.08372M1 17H5.17525L16.1353 6.03997C16.689 5.4863 17 4.73536 17 3.95235C17 3.16934 16.689 2.4184 16.1353 1.86472C15.5816 1.31105 14.8307 1 14.0477 1C13.2646 1 12.5137 1.31105 11.96 1.86472L1 12.8248V17Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>          
                </button>
              </li>
            </ul>
            <button type="button" class="btn btn--secondary edit-order-popup__order-docs-upload-btn">
              Загрузить
            </button>
          </div>
          <nav class="edit-order-popup__order-docs-table-list-wrapper">
          <ul role="list" class="edit-order-popup__order-docs-table-list edit-order-popup__order-docs-table-caption-list">
            <li class="edit-order-popup__order-docs-table-list-item"></li>
              <li class="edit-order-popup__order-docs-table-list-item">Название</li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">Дата изменения</li>
          </ul>
          <ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Договор 12345678" id="Договор 12345678" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Договор 12345678" class="edit-order-popup__order-docs-table-list-item-label">Договор 12345678</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Паспорт Цилиндрический редуктор ЦТНД-314" id="Паспорт Цилиндрический редуктор ЦТНД-314" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Паспорт Цилиндрический редуктор ЦТНД-314" class="edit-order-popup__order-docs-table-list-item-label">Паспорт Цилиндрический редуктор ЦТНД-314</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 1" id="Прочие документы 1" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 1" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 1</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 2" id="Прочие документы 2" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 2" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 2</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 3" id="Прочие документы 3" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 3" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 3</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
            </ul><ul role="list" class="edit-order-popup__order-docs-table-list">
              <li class="edit-order-popup__order-docs-table-list-item checkbox">
                <input type="checkbox" name="Прочие документы 4" id="Прочие документы 4" class="edit-order-popup__order-docs-table-list-item-checkbox">
                <label for="Прочие документы 4" class="edit-order-popup__order-docs-table-list-item-label">Прочие документы 4</label>
              </li>
              <li class="edit-order-popup__order-docs-table-list-item t-a-c">25.10.2022</li>
            </ul>
        </nav>
        </div>
        <ul role="list" class="edit-order-popup__btn-control-group">
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat edit-order-popup__undo-btn" x-on:click="editOrderPopup = false">
              Отменить
          </button>
      </li>
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary edit-order-popup__save-btn">
              Сохранить
          </button>
      </li>
  </ul>
    </div>
    <div class="popup__body edit-order-popup__body" x-show="mobileTab === 'comments'" x-data="{
      textAreaValue: '', 
      commentsItems: []
  }">
        <ul role="list" class="edit-order-popup__comments-mobile-list" x-bind:class="{'active': commentsItems.length > 0}">
          <template x-for="commentsItem in commentsItems">
            <li class="edit-order-popup__comments-mobile-list-item" x-data="{toggleCommentsWrapper: false, textAreaValue: '', commentsItems: []}">
              <div class="edit-order-popup__comments-wrapper comments-mobile-list-item">
                <div class="edit-order-popup__comments-wrapper-top">
                  <p class="edit-order-popup__comments-mail comments-list-item">vtr@uralreduktor.ru</p>
                  <div class="edit-order-popup__comments-datetime">
                    <time class="edit-order-popup__comments-date" datetime="18.08.2022">18.08.2022</time>
                    в
                    <time class="edit-order-popup__comments-time" datetime="15:45">15:45</time>
                    </div>
                  </div>
        <textarea class="edit-order-popup__comments-textarea comments-list-item" x-text="commentsItem" disabled></textarea>
        <button type="button" class="edit-order-popup__comments-reply-btn" x-on:click="toggleCommentsWrapper = !toggleCommentsWrapper">Ответить</button>
              </div>
              <ul role="list" class="edit-order-popup__comments-mobile-list sublist" x-bind:class="{'active': commentsItems.length > 0}">
                <template x-for="commentsItem in commentsItems">
                  <div class="edit-order-popup__comments-wrapper comments-mobile-list-item">
                <div class="edit-order-popup__comments-wrapper-top">
                  <p class="edit-order-popup__comments-mail comments-list-item">vtr@uralreduktor.ru</p>
                  <div class="edit-order-popup__comments-datetime">
                    <time class="edit-order-popup__comments-date" datetime="18.08.2022">18.08.2022</time>
                    в
                    <time class="edit-order-popup__comments-time" datetime="15:45">15:45</time>
                    </div>
                  </div>
        <textarea class="edit-order-popup__comments-textarea comments-list-item" x-text="commentsItem" disabled></textarea>
        <button type="button" class="edit-order-popup__comments-reply-btn" x-on:click="toggleCommentsWrapper = !toggleCommentsWrapper">Ответить</button>
                  </div>
                </template>
              </ul>
              <div class="edit-order-popup__comments-wrapper sublist" x-show="toggleCommentsWrapper === true">
        <textarea class="edit-order-popup__comments-textarea" placeholder="Напишите комментарий" x-model="textAreaValue">Напишите комментарий
        </textarea>
        <button type="button" class="btn btn--secondary edit-order-popup__comments-publish-btn" x-on:click="commentsItems.push(textAreaValue);textAreaValue='';toggleCommentsWrapper = false">Опубликовать</button>
              </div>
              </li>
            </template>
        </ul>
       <div class="edit-order-popup__comments-wrapper">
        <p class="edit-order-popup__comments-mail">vtr@uralreduktor.ru</p>
        <textarea class="edit-order-popup__comments-textarea" placeholder="Напишите комментарий" x-model="textAreaValue">Напишите комментарий
        </textarea>
        <button type="button" class="btn btn--secondary edit-order-popup__comments-publish-btn" x-on:click="commentsItems.push(textAreaValue);textAreaValue=''">Опубликовать</button>
        </div>
        <ul role="list" class="edit-order-popup__btn-control-group">
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat edit-order-popup__undo-btn" x-on:click="editOrderPopup = false">
              Отменить
          </button>
      </li>
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary edit-order-popup__save-btn">
              Сохранить
          </button>
      </li>
  </ul>
    </div>
    <div class="popup__body edit-order-popup__body" x-show="mobileTab === 'order complete'">
         <div class="edit-order-popup__order-complete-wrapper">
            <p class="edit-order-popup__order-complete-text">В случае отмены заказа, опишите причину.</p>
            <textarea class="edit-order-popup__order-complete-textarea">Введите текст</textarea>
          </div>
          <ul role="list" class="edit-order-popup__btn-control-group">
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat edit-order-popup__undo-btn" x-on:click="editOrderPopup = false">
              Отменить
          </button>
      </li>
      <li class="edit-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary edit-order-popup__save-btn">
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

  new TempusDominus(document.getElementById('datetimepicker1'), {
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
</script>
<script>
          document.addEventListener('alpine:init', () => {
            Alpine.data('comments', () => ({
              
              publishComment() {
                const commentsTextareaDesktop = document.querySelector('.edit-order-popup__comments-textarea.desktop-textarea');
                const commentsPublishBtnDesktop = document.querySelector('.edit-order-popup__comments-publish-btn.desktop-publish-btn');
                const commentsList = document.querySelector('.edit-order-popup__comments-list.main-list');
                const commentsListItemHtml = `
                <li class="edit-order-popup__comments-list-item">
            <div class="edit-order-popup__comments-list-item-block">
            <img class="edit-order-popup__comments-img" src="/images/comment-avatar-placeholder.png" alt="order docs avatar" width="36" height="36">
            <div class="edit-order-popup__comments-list-item-right">
              <div class="edit-order-popup__comments-list-item-top-row">
                <p class="edit-order-popup__comments-list-item-name">vtr@uralreduktor.ru</p>
                <div class="edit-order-popup__comments-list-item-date-time">
                  <time datetime="18.08.2022" class="edit-order-popup__comments-list-item-date">18.08.2022</time>
                  в
                  <time datetime="15:45" class="edit-order-popup__comments-list-item-time">15:45</time>
                  </div>
                </div>
                <div class="edit-order-popup__comments-window">
                  <p class="edit-order-popup__comments-window-text">${commentsTextareaDesktop.value}</p>
                </div>
                <button type="button" class="edit-order-popup__reply-btn">
                  Ответить
                  </button>
            </div>
            </div>
          </li>
                `;

                commentsList.insertAdjacentHTML('beforeEnd', commentsListItemHtml);
               }
            }))
         })
</script>
</div>
      <ul role="list" class="pagination orders__pagination">
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
    <div class="popup create-order-popup" x-bind:class="{'active': createOrderPopup === true}">
    <form action="#" method="post" class="popup__form create-order-popup__form">
    <div class="popup__content create-order-popup__content">
  <div class="popup__top-row events-board-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="settingsPopup = false;createOrderPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="settingsPopup = false;createOrderPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <h2 class="popup__title create-order-popup__title">
        Создание заказа покупателя 
        <div class="create-order-popup__title-bottom">
        <span class="create-order-popup__number-title">00000002</span>
        от
        <time datetime="25.10.2022" class="create-order-popup__date-title">25.10.2022</time>
        </div>
    </h2>
</div>
    <div class="popup__body create-order-popup__body">
       <fieldset class="create-order-popup__fieldset create-order-popup__fieldset--3-cols two-cols-adaptive b-b m-b">
           <div class="create-order-popup__form-control-group create-order-popup__form-control-group--2-cols state-group">
              <p class="create-order-popup__form-control-group-title">
                Состояние
              </p>
              <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'На согласовании'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 5" value="На согласовании" readonly x-model="resultInputVal">
                <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-order-popup__form-control-select-list">
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="На согласовании" id="На согласовании" value="На согласовании" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'На согласовании'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="В работе" id="В работе" value="В работе" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'В работе'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="Завершён" id="Завершён" value="Завершён" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Завершён'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="Груз в пути" id="Груз в пути" value="Груз в пути" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Груз в пути'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="На оплате" id="На оплате" value="На оплате" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'На оплате'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="Оплачен" id="Оплачен" value="Оплачен" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Оплачен'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="Отгружен" id="Отгружен" value="Отгружен" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Отгружен'">
                  </li>
                </ul>
                </div>
                <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
              </div>
           </div>
           <div class="create-order-popup__form-control-group create-order-popup__form-control-group--2-cols number-group">
            <p class="create-order-popup__form-control-group-title">
                Номер
            </p>
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper number-input">
              <input type="number" readonly class="create-order-popup__form-control-input-number" value="00000002">
            </div>
         </div>
         <div class="create-order-popup__form-control-group create-order-popup__form-control-group--2-cols">
          <p class="create-order-popup__form-control-group-title data-title">
              Дата
          </p>
          <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper datetimepicker-wrapper" id="createOrderPopupDatetimepicker1" data-td-target-input="nearest" data-td-target-toggle="nearest">
            <input class="create-order-popup__form-control-input-date" id="createOrderPopupDatetimepicker1Input" type="text" data-td-target="#createOrderPopupDatetimepicker1" readonly>
          <button type="button" data-td-target="#createOrderPopupDatetimepicker1" data-td-toggle="datetimepicker" class="create-order-popup__form-control-datepicker-btn">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 1V5M5 1V5M1 9H17M3 3H15C16.1046 3 17 3.89543 17 5V17C17 18.1046 16.1046 19 15 19H3C1.89543 19 1 18.1046 1 17V5C1 3.89543 1.89543 3 3 3ZM5 13H7V15H5V13Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>              
          </button>
          </div>
       </div>
       </fieldset>
       <fieldset class="create-order-popup__fieldset create-order-popup__fieldset--2-cols b-b m-b">
        <div class="create-order-popup__form-control-group">
          <p class="create-order-popup__form-control-group-title">
            Контрагент
          </p>
          <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'УЗТМ'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 6" value="УЗТМ" readonly x-model="resultInputVal">
            <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>  
              <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-order-popup__form-control-select-list">
                  <li class="create-order-popup__form-control-select-list-item search-input-item">
                    <input type="text" class="create-order-popup__form-control-select-list-item-input-search" placeholder="Поиск...">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="УЗТМ" id="УЗТМ" value="УЗТМ" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'УЗТМ'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="УЗТМ 1" id="УЗТМ 1" value="УЗТМ 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'УЗТМ 1'">
                  </li>
                  <li class="create-order-popup__form-control-select-list-item">
                    <input type="text" name="УЗТМ 2" id="УЗТМ 2" value="УЗТМ 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'УЗТМ 2'">
                  </li>
                </ul>
                <ul role="list" class="create-order-popup__form-control-select-list b-t">
                  <li class="create-order-popup__form-control-select-list-item">
                  <button type="button" class="create-order-popup__create-contragent-btn" x-on:click="createContragentPopup = true">
                    <svg class="create-order-popup__create-contragent-btn-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.00033 1.16663V12.8333M1.16699 6.99996H12.8337" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>    
                      Создать контрагента                  
                  </button>
                  </li>
                </ul>
              </div>                
          </div>
        </div>
        <div class="create-order-popup__form-control-group">
          <p class="create-order-popup__form-control-group-title">
            Организация
          </p>
          <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Моя организация'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 7" value="Моя организация" readonly x-model="resultInputVal">
            <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="create-order-popup__form-control-select-list">
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="Моя организация" id="Моя организация 1" value="Моя организация" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Моя организация'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="Моя организация 1" id="Моя организация 1" value="Моя организация 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Моя организация 1'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="Моя организация 2" id="Моя организация 3" value="Моя организация 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Моя организация 2'">
              </li>
            </ul>
            </div>
            <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
        <div class="create-order-popup__form-control-group">
          <p class="create-order-popup__form-control-group-title">
            Предложение
          </p>
          <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Предложение 11111 от 12.10.2022'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 8" value="Предложение 11111 от 12.10.2022" readonly x-model="resultInputVal">
            <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="create-order-popup__form-control-select-list">
              <li class="create-order-popup__form-control-select-list-item search-input-item">
                <input type="text" class="create-order-popup__form-control-select-list-item-input-search" placeholder="Поиск...">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="Предложение 11111 от 12.10.2022" id="Предложение 11111 от 12.10.2022" value="Предложение 11111 от 12.10.2022" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Предложение 11111 от 12.10.2022'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="Предложение 11111 от 12.10.2022 2" id="Предложение 11111 от 12.10.2022 2" value="Предложение 11111 от 12.10.2022 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Предложение 11111 от 12.10.2022 2'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="Предложение 11111 от 12.10.2022 3" id="Предложение 11111 от 12.10.2022 3" value="Предложение 11111 от 12.10.2022 3" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Предложение 11111 от 12.10.2022 3'">
              </li>
            </ul>
            </div>
            <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
        <div class="create-order-popup__form-control-group">
          <p class="create-order-popup__form-control-group-title">
            Ответственный менеджер
          </p>
          <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'vtr@uralreduktor.ru'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <div class="create-order-popup__icon-select-result-wrapper">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.33376 10.3333C6.54404 10.4251 6.771 10.4725 7.00043 10.4725C7.22986 10.4725 7.45682 10.4251 7.66709 10.3333M4.33376 6.33333L5.66709 7.66667M9.66709 6.33333L8.33376 7.66667M7.00043 1C3.8911 1 2.06976 2.554 1.7591 4.73C1.4474 6.73987 1.92518 8.7924 3.09243 10.458C3.65421 11.2792 4.38043 11.9748 5.22509 12.5007C6.33576 13.1673 7.66776 13.1673 8.77843 12.5007C9.62309 11.9748 10.3493 11.2792 10.9111 10.458C12.0736 8.79028 12.5509 6.73967 12.2444 4.73C11.9338 2.55333 10.1124 1 7.00309 1H7.00043Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 9" value="vtr@uralreduktor.ru" readonly x-model="resultInputVal">
            </div>
            <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="create-order-popup__form-control-select-list">
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="vtr@uralreduktor.ru 1" id="vtr@uralreduktor.ru 1" value="vtr@uralreduktor.ru 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'vtr@uralreduktor.ru 1'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="vtr@uralreduktor.ru 2" id="vtr@uralreduktor.ru 2" value="vtr@uralreduktor.ru 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'vtr@uralreduktor.ru 2'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="vtr@uralreduktor.ru 3" id="vtr@uralreduktor.ru 3" value="vtr@uralreduktor.ru 3" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'vtr@uralreduktor.ru 3'">
              </li>
            </ul>
            </div>
            <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
       </fieldset>
       <div class="create-order-popup__form-control-group rubles-nds">
        <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'руб. Розничная цена с НДС'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
          <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 10" value="руб. Розничная цена с НДС" readonly x-model="resultInputVal">
          <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
          <ul role="list" class="create-order-popup__form-control-select-list">
            <li class="create-order-popup__form-control-select-list-item">
              <input type="text" name="руб. Розничная цена с НДС" id="руб. Розничная цена с НДС" value="руб. Розничная цена с НДС" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'руб. Розничная цена с НДС'">
            </li>
            <li class="create-order-popup__form-control-select-list-item">
              <input type="text" name="руб. Розничная цена с НДС 2" id="руб. Розничная цена с НДС 2" value="руб. Розничная цена с НДС 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'руб. Розничная цена с НДС 2'">
            </li>
            <li class="create-order-popup__form-control-select-list-item">
              <input type="text" name="руб. Розничная цена с НДС 3" id="руб. Розничная цена с НДС 3" value="руб. Розничная цена с НДС 3" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'руб. Розничная цена с НДС 3'">
            </li>
          </ul>
          </div>
          <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
            <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </div>
      </div>
      <div class="create-order-popup__params-lists-wrapper" x-data="
{
paramsLists: [],
countInputVal: 1,
totalCount: 0,
totalWeight: 0,
totalVolume: 0,
}">
    <nav class="create-order-popup__params-lists-nav">
    <ul role="list" class="create-order-popup__params-list create-order-popup__params-caption-list b-b p-b">
      <li class="create-order-popup__params-caption-list-item t-a-c">№</li>
      <li class="create-order-popup__params-caption-list-item">Название</li>
      <li class="create-order-popup__params-caption-list-item t-a-c">Хар-ки</li>
      <li class="create-order-popup__params-caption-list-item">Кол-во</li>
      <li class="create-order-popup__params-caption-list-item">Вес,кг</li>
      <li class="create-order-popup__params-caption-list-item">Объём, м3</li>
      <li class="create-order-popup__params-caption-list-item t-a-c">Цена с НДС</li>
      <li class="create-order-popup__params-caption-list-item t-a-c">Сумма</li>
    </ul>
    <template x-for="(paramsList,index) in paramsLists">
    <ul role="list" class="create-order-popup__params-list params-group b-b p-b">
      <li class="create-order-popup__params-list-item number-item t-a-c">
        <span class="create-order-popup__item-number" x-text="paramsList.id"></span>
        <div class="create-order-popup__delete-btn-wrapper mobile" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
         <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
           <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
             <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
             <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
             <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             </svg>                    
         </button>
         <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists = paramsLists.filter(i => i !== paramsList)">
           Удалить           
        </button>
        </div>
      </li>
      <li class="create-order-popup__params-list-item type-item">
       <h4 class="create-order-popup__params-list-item-title">Название</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Тип'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
           <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 55" value="Тип" readonly x-model="resultInputVal">
           <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
           <ul role="list" class="create-order-popup__form-control-select-list">
             <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="Тип" id="Тип 11" value="Тип" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип'">
             </li>
             <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="Тип 1" id="Тип 21" value="Тип 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 1'">
             </li>
             <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="Тип 2" id="Тип 222" value="Тип 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 2'">
             </li>
           </ul>
            </div>
           <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
             <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
             </svg>                  
         </div>
       </div>
      </li>
      <li class="create-order-popup__params-list-item chars-item">
       <h4 class="create-order-popup__params-list-item-title">Хар-ки</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper chars-wrapper">
           <input type="text" class="create-order-popup__form-control-input" value="УВЛ">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item count-item">
       <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-wrapper">
           <input type="number" class="create-order-popup__form-control-input count-input" x-model="totalCount += Number($el.target.value)" value="1">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item weight-item">
       <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper weight-wrapper">
           <input type="number" class="create-order-popup__form-control-input" value="1">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item volume-item">
       <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper volume-wrapper">
           <input type="number" class="create-order-popup__form-control-input" value="1">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item nds-price-item">
       <h4 class="create-order-popup__params-list-item-title">Цена с НДС</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper nds-price-wrapper">
           <input class="create-order-popup__form-control-input" placeholder="0,00" x-mask:dynamic="$money($input, ',')">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item sum-item">
       <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper price-wrapper">
           <input class="create-order-popup__form-control-input" placeholder="5 000 000,00" x-mask:dynamic="$money($input, ',')">
         </div>
      </div>
      </li>
      <li class="create-order-popup__params-list-item options-item">
        <div class="create-order-popup__delete-btn-wrapper" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
             <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
               <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>                    
             </button>
             <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists.slice(paramsList.id, 1)">
                     Удалить           
             </button>
        </div>
      </li>
      <li class="create-order-popup__params-list-item name-item">
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper params-name-wrapper">
           <input type="text" class="create-order-popup__form-control-input" placeholder="Наименование">
         </div>
      </div>
      </li>
    </ul>
   </template>
   </nav>
   <button class="create-order-popup__bottom-params-list-add-btn adaptive" type="button" x-on:click="paramsLists.push({ id: paramsLists.length + 1})">
     Добавить строку
   </button>
   <ul role="list" class="create-order-popup__bottom-params-list adaptive">
     <li class="create-order-popup__bottom-params-list-item title-item">
       <h4 class="create-order-popup__params-list-item-title bottom-params-list-item-title">Итого</h4>
    </li>
    <li class="create-order-popup__bottom-params-list-item">
     <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
     <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
       <input disabled class="create-order-popup__form-control-input-number count-input-number" x-model="totalCount">
     </div>
   </li>
   <li class="create-order-popup__bottom-params-list-item">
     <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
     <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
       <input type="number" readonly class="create-order-popup__form-control-input-number" x-model="totalWeight">
     </div>
   </li>
   <li class="create-order-popup__bottom-params-list-item">
     <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
     <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper-last">
       <input type="number" readonly class="create-order-popup__form-control-input-number" x-model="totalVolume">
     </div>
   </li>
    <li class="create-order-popup__bottom-params-list-item sum-item">
     <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
     <div class="create-order-popup__form-control-group">
       <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-input-wrapper">
         <input type="number" readonly class="create-order-popup__form-control-input-number" placeholder="0,00">
       </div>
     </div>
  </li>
   </ul>
    <ul role="list" class="create-order-popup__bottom-params-list desktop">
       <li class="create-order-popup__bottom-params-list-item add-btn-item">
          <button class="create-order-popup__bottom-params-list-add-btn" type="button" x-on:click="addParamsList">
            Добавить строку
          </button>
       </li>
       <li class="create-order-popup__bottom-params-list-item">
         <div class="create-order-popup__form-control-group create-order-popup__form-control-group--4-cols bottom-params-list">
           <p class="create-order-popup__form-control-group-title bottom-params-list">
             Итого:
           </p>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
             <input readonly class="create-order-popup__form-control-input-number">
           </div>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper">
             <input type="number" readonly class="create-order-popup__form-control-input-number" value="2">
           </div>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper sumup-input-wrapper-last">
             <input type="number" readonly class="create-order-popup__form-control-input-number" value="2">
           </div>
         </div>
      </li>
      <li class="create-order-popup__bottom-params-list-item">
       <div class="create-order-popup__form-control-group">
         <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-input-wrapper">
           <input type="number" readonly class="create-order-popup__form-control-input-number" placeholder="0,00">
         </div>
       </div>
    </li>
    </ul>
   </div>

<!-- <script is:inline>
    document.addEventListener('alpine:init', () => {
     const paramsListsNav = document.querySelector('.create-order-popup__params-lists-nav');
 
 function increaseParamsListNumber() {
 let number = 3;
 
 return function() {
 return number++;
 };
 }
 const paramsListNumber = increaseParamsListNumber();
 
        Alpine.data('paramsList', () => ({
          addParamsList() {
           paramsListsNav.insertAdjacentHTML('beforeend', ` <ul role="list" class="create-order-popup__params-list params-group b-b p-b">
         <li class="create-order-popup__params-list-item number-item t-a-c">
           <span class="create-order-popup__item-number">${paramsListNumber()}</span>
           <div class="create-order-popup__delete-btn-wrapper mobile" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
             <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
               <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
                 <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>                    
             </button>
             <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists = paramsLists.filter(i => i !== paramsList)">
                         Удалить           
             </button>
            </div>
         </li>
         <li class="create-order-popup__params-list-item type-item">
           <h4 class="create-order-popup__params-list-item-title">Название</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Тип'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 16" value="Тип" readonly x-model="resultInputVal">
              <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-order-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Тип" id="Тип" value="Тип" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип'">
                </li>
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Тип 1" id="Тип 1" value="Тип 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 1'">
                </li>
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Тип 2" id="Тип 2" value="Тип 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 2'">
                </li>
              </ul>
            </div>
              <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
            </div>
          </div>
         </li>
         <li class="create-order-popup__params-list-item chars-item">
           <h4 class="create-order-popup__params-list-item-title">Хар-ки</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper chars-wrapper">
              <input type="text" class="create-order-popup__form-control-input" value="УВЛ">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item count-item">
           <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-wrapper">
              <input type="number" class="create-order-popup__form-control-input" value="1">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item weight-item">
           <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper weight-wrapper">
              <input type="number" class="create-order-popup__form-control-input" value="1">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item volume-item">
           <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper volume-wrapper">
              <input type="number" class="create-order-popup__form-control-input" value="1">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item nds-price-item">
           <h4 class="create-order-popup__params-list-item-title">Цена с НДС</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper nds-price-wrapper">
              <input class="create-order-popup__form-control-input" placeholder="0,00" x-mask:dynamic="$money($input, ',')">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item sum-item">
           <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper price-wrapper">
              <input class="create-order-popup__form-control-input" placeholder="5 000 000,00" x-mask:dynamic="$money($input, ',')">
            </div>
         </div>
         </li>
         <li class="create-order-popup__params-list-item options-item">
           <div class="create-order-popup__delete-btn-wrapper" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
                <button type="button" class="create-order-popup__show-delete-btn" x-on:click="toggleDropdown = !toggleDropdown">
                  <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"/>
                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"/>
                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"/>
                    <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                </button>
                <button type="button" class="create-order-popup__delete-btn" x-bind:class="{'active': toggleDropdown === true}" x-on:click="paramsLists = paramsLists.filter(i => i !== paramsList)">
                         Удалить           
                 </button>
           </div>
         </li>
         <li class="create-order-popup__params-list-item name-item">
          <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper params-name-wrapper">
              <input type="text" class="create-order-popup__form-control-input" placeholder="Наименование">
            </div>
         </div>
         </li>
       </ul>`);
          }
       }))
   })
 
</script> -->
       <p class="create-order-popup__form-control-group-title delivery-conds">Условия доставки</p>
       <ul role="list" class="create-order-popup__radio-list">
        <li class="create-order-popup__radio-list-item">
          <input type="radio" name="Условия доставки" id="доставка до склада Получателя" class="create-order-popup__radio-input" checked>
          <div class="create-order-popup__radio-list-item-info">
            <label for="доставка до склада Получателя" class="create-order-popup__radio-label">доставка до склада Получателя</label>
            <div class="create-order-popup__form-control-group">
              <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper location-input-wrapper">
                <input type="text" class="create-order-popup__form-control-input" placeholder="Введите населенный пункт или адрес">
              </div>
           </div>
           <p class="create-order-popup__radio-list-item-text">за счет</p>
           <div class="create-order-popup__form-control-group">
            <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Поставщика'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 12" value="Поставщика" readonly x-model="resultInputVal">
              <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-order-popup__form-control-select-list">
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Поставщика" id="Поставщика" value="Поставщика" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Поставщика'">
                </li>
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Поставщика 1" id="Поставщика 1" value="Поставщика 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Поставщика 1'">
                </li>
                <li class="create-order-popup__form-control-select-list-item">
                  <input type="text" name="Поставщика 2" id="Поставщика 2" value="Поставщика 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Поставщика 2'">
                </li>
              </ul>
              </div>
              <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                  
            </div>
          </div>
          </div>
        </li>
        <li class="create-order-popup__radio-list-item">
          <input type="radio" name="Условия доставки" id="самовывоз" class="create-order-popup__radio-input">
          <div class="create-order-popup__radio-list-item-info two-cols">
            <label for="самовывоз" class="create-order-popup__radio-label">самовывоз</label>
            <button type="button" class="create-order-popup__storage-addr-btn">
              Наш адрес склада
            </button>
          </div>
        </li>
        <li class="create-order-popup__radio-list-item">
          <input type="radio" name="Условия доставки" id="доставка до терминала транспортной компании" class="create-order-popup__radio-input">
          <div class="create-order-popup__radio-list-item-info">
            <label for="доставка до терминала транспортной компании" class="create-order-popup__radio-label">доставка до терминала транспортной компании</label>
            <div class="create-order-popup__choose-transp-comp-btn-wrapper" x-data="{inputVal: 'Выберите транспортную компанию', toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
    <button type="button" class="create-order-popup__choose-transp-comp-btn" x-text="inputVal" x-on:click="toggleDropdown = !toggleDropdown"></button>
     <div class="create-order-popup__choose-transp-comp-dropdown" x-bind:class="{'active': toggleDropdown === true}">
        <input type="text" class="create-order-popup__choose-transp-comp-dropdown-search-input" value="Екатеринбург, улица">
      <ul role="list" class="create-order-popup__choose-transp-comp-dropdown-list">
        <li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="г. Екатеринбург" x-on:click="inputVal = 'г. Екатеринбург'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Вариант" x-on:click="inputVal = 'Вариант'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы" x-on:click="inputVal = 'Документы'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы 2" x-on:click="inputVal = 'Документы 2'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы 3" x-on:click="inputVal = 'Документы 3'">
            </li><li class="create-order-popup__choose-transp-comp-dropdown-list-item">
            <input readonly class="create-order-popup__choose-transp-comp-dropdown-list-item-input" value="Документы 4" x-on:click="inputVal = 'Документы 4'">
            </li>
      </ul>
    </div>
</div>
          </div>
        </li>
       </ul>
       <fieldset class="create-order-popup__fieldset create-order-popup__fieldset--3-cols payment-guarantee-prod">
        <div class="create-order-popup__form-control-group payment-req">
           <p class="create-order-popup__form-control-group-title">
            Условия оплаты
           </p>
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '30% предоплата, остаток 70% по факту готовности продукции к отгрузке.'}" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
    <input type="text" class="create-order-popup__form-control-select-result-input payment-conds-input" value="30% предоплата, остаток 70% по факту готовности продукции к отгрузке." readonly x-model="resultInputVal" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList">
    <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}" x-on:click.self="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList">
      <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>  
      <div class="create-order-popup__payment-req-dropdown" x-bind:class="{'active': toggleSelectList === true}">
        <input type="text" class="create-order-popup__payment-req-dropdown-search-input">
      <ul role="list" class="create-order-popup__payment-req-dropdown-list">
        <li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="10 календарных дней с даты поставки товара" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '10 календарных дней с даты поставки товара'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 30 календарных дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 30 календарных дней'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 30 рабочих дней с момента получения" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 30 рабочих дней с момента получения'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 60 дней с момента поставки товара 2" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 60 дней с момента поставки товара 2'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% в течении 7 рабочих дней с даты поставки" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% в течении 7 рабочих дней с даты поставки'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% Оплата" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% Оплата'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="100% Предоплата" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '100% Предоплата'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30 календарных дней с даты поставки товара" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30 календарных дней с даты поставки товара'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30% Предоплата,70% в течение 5 дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30% Предоплата,70% в течение 5 дней'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30% Предоплата,70% по факту готовности продукции" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30% Предоплата,70% по факту готовности продукции'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="30% Предоплата,70% по факту поставки товара" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '30% Предоплата,70% по факту поставки товара'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="40% предоплата, 60% по факту готовности продукции" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '40% предоплата, 60% по факту готовности продукции'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="50% предоплата, 50% в течение 15 календарных дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '50% предоплата, 50% в течение 15 календарных дней'">
        </li><li class="create-order-popup__payment-req-dropdown-list-item">
        <input type="text" value="50% предоплата, 50% в течение 30 календарных дней" readonly class="create-order-popup__payment-req-dropdown-list-item-input" x-on:click="resultInputVal = '50% предоплата, 50% в течение 30 календарных дней'">
        </li>
    </ul>  
      </div>              
  </div>
        </div>
        <div class="create-order-popup__form-control-group">
          <p class="create-order-popup__form-control-group-title">
            Гарантийный срок
          </p>
          <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '12 месяцев'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
            <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 14" value="12 месяцев" readonly x-model="resultInputVal">
            <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
            <ul role="list" class="create-order-popup__form-control-select-list">
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="12 месяцев" id="12 месяцев" value="12 месяцев" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '12 месяцев'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
                <input type="text" name="5 месяцев" id="5 месяцев" value="5 месяцев" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '5 месяцев'">
              </li>
              <li class="create-order-popup__form-control-select-list-item">
               <input type="text" name="6 месяцев" id="6 месяцев" value="6 месяцев" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '6 месяцев'">
             </li>
            </ul>
            </div>
            <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
              <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
          </div>
        </div>
       <div class="create-order-popup__form-control-group">
        <p class="create-order-popup__form-control-group-title">
          Срок изготовления
        </p>
        <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '30 дней'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
          <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 15" value="30 дней" readonly x-model="resultInputVal">
          <div class="create-order-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
          <ul role="list" class="create-order-popup__form-control-select-list">
            <li class="create-order-popup__form-control-select-list-item">
              <input type="text" name="30 дней" id="30 дней" value="30 дней" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '30 дней'">
            </li>
            <li class="create-order-popup__form-control-select-list-item">
              <input type="text" name="28 дней" id="28 дней" value="28 дней" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '28 дней'">
            </li>
            <li class="create-order-popup__form-control-select-list-item">
             <input type="text" name="24 дня" id="24 дня" value="24 дня" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '24 дня'">
           </li>
          </ul>
          </div>
          <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
            <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
        </div>
       </div>
    </fieldset>
    <ul role="list" class="create-order-popup__btn-control-group">
      <li class="create-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat create-order-popup__undo-btn" x-on:click="createOrderPopup = false">
              Отменить
          </button>
      </li>
      <li class="create-order-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary create-order-popup__save-btn">
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

  new TempusDominus(document.getElementById('createOrderPopupDatetimepicker1'), {
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
</script>
    <div class="popup create-contragent-popup" x-bind:class="{'active': createContragentPopup === true}" x-data="{table: 1, orgName: '', orgFullName: '', regWord: '', orgReg: '', INNword:'', orgINN: '', KPPword:'', orgKPP: '', OGRNword:'',orgOGRN: ''}">
    <form action="#" method="post" class="popup__form create-contragent-popup__form">
    <div class="popup__content create-contragent-popup__content">
  <div class="popup__top-row create-contragent-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="createContragentPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn desktop" type="button" x-on:click="createContragentPopup = false">
        <svg class="popup__close-btn-icon" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.53333 1L1 9.53333M1 1L9.53333 9.53333" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>            
    </button>
    <h2 class="popup__title create-contragent-popup__title">
        Новый контрагент
    </h2>
</div>
    <div class="popup__body create-contragent-popup__body" x-data="addEntity">
       <fieldset class="create-contragent-popup__fieldset b-b m-b">
           <div class="create-contragent-popup__form-control-group col-2">
              <p class="create-contragent-popup__form-control-group-title">
                Тип контрагента
              </p>
              <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Юр.лицо'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-contragent-popup__form-control-select-result-input" value="Юр.лицо" readonly x-model="resultInputVal">
                <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-contragent-popup__form-control-select-list">
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Юр.лицо" readonly class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Юр.лицо'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Юр.лицо 1" readonly class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Юр.лицо 1'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Юр.лицо 2" readonly class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Юр.лицо 2'">
                  </li>
                </ul>
                </div>
                <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
              </div>
           </div>
           <div class="create-contragent-popup__form-control-group col-2">
            <p class="create-contragent-popup__form-control-group-title">
                Название компании
            </p>
            <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper name-inn" x-data="{search: '', toggleDropdown: false }">
              <input type="text" class="create-contragent-popup__form-control-input" placeholder="Введите название или ИНН" x-model.debounce.500ms="search">
              <div class="create-contragent-popup__search-company-dropdown" x-bind:class="{'active': search.length >= 2 && toggleDropdown === false }">
                <ul role="list" class="create-contragent-popup__search-company-dropdown-list">
                   <li class="create-contragent-popup__search-company-dropdown-list-item" x-on:click="
                   search = 'ООО “Уралредуктор”';
                   orgName = 'ООО “Уралредуктор”'; 
                   orgFullName = 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ “УРАЛРЕДУКТОР“'; 
                   regWord = 'Адрес регистрации'; 
                   orgReg = '620100, Свердловская обл, г Екатеринбург, Октябрьский р-н, ул Куйбышева, д. 102, кв. 21'; INNword = 'ИНН'; 
                   orgINN = '6672228600'; 
                   KPPword = 'КПП';
                   orgKPP = '668501001'; 
                   OGRNword = 'ОГРН';
                   orgOGRN = '1076672014528 от 20.03.2007';
                   toggleDropdown = true
                   ">
                     <p class="create-contragent-popup__search-company-dropdown-list-item-title">
                      ООО “Уралредуктор”, 6672228600
                     </p>
                     <p class="create-contragent-popup__search-company-dropdown-list-item-data">620100, Свердловская обл, г.Екатеринбург, ул. Куйбышева, д. 102, кв. 21</p>
                   </li>
                </ul>
              </div>
            </div>
           </div>
           <div class="create-contragent-popup__requisites-dropdown" x-data="{toggleDropdown: false}">
             <button type="button" class="create-contragent-popup__requisites-dropdown-btn" x-on:click="toggleDropdown = !toggleDropdown">Реквизиты <svg class="create-contragent-popup__requisites-dropdown-btn-arrow" x-bind:class="{'active': toggleDropdown === true }" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 1L5 5L9 1" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
              </button>
              <ul role="list" class="create-contragent-popup__requisites-dropdown-list" x-show="toggleDropdown === true" x-collapse.duration.750ms>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="orgName">ООО "УРАЛРЕДУКТОР"
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="orgFullName">ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "УРАЛРЕДУКТОР"
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="regWord">Адрес регистрации
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="orgReg">620100, Свердловская обл, г Екатеринбург, Октябрьский р-н, ул Куйбышева, д. 102, кв. 21
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="INNword">ИНН
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="orgINN">6672228600
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="KPPword">КПП
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="orgKPP">668501001
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="OGRNword">ОГРН
                </li>
                <li class="create-contragent-popup__requisites-dropdown-list-item" x-text="orgOGRN">1076672014528 от 20.03.2007
                </li>
              </ul>
           </div>
           <div class="create-contragent-popup__form-control-group">
            <p class="create-contragent-popup__form-control-group-title">
                Ответственный
            </p>
            <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Иван Иван'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <div class="create-contragent-popup__icon-select-result-wrapper">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.33376 10.3333C6.54404 10.4251 6.771 10.4725 7.00043 10.4725C7.22986 10.4725 7.45682 10.4251 7.66709 10.3333M4.33376 6.33333L5.66709 7.66667M9.66709 6.33333L8.33376 7.66667M7.00043 1C3.8911 1 2.06976 2.554 1.7591 4.73C1.4474 6.73987 1.92518 8.7924 3.09243 10.458C3.65421 11.2792 4.38043 11.9748 5.22509 12.5007C6.33576 13.1673 7.66776 13.1673 8.77843 12.5007C9.62309 11.9748 10.3493 11.2792 10.9111 10.458C12.0736 8.79028 12.5509 6.73967 12.2444 4.73C11.9338 2.55333 10.1124 1 7.00309 1H7.00043Z" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
              <input type="text" class="create-contragent-popup__form-control-select-result-input email" value="vtr@uralreduktor.ru" readonly x-model="resultInputVal">
              </div>
              <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-contragent-popup__form-control-select-list">
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="Иван Иван 1" readonly class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Иван Иван 1'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="Иван Иван 2" readonly class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Иван Иван 2'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="Иван Иван 3" readonly class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Иван Иван 3'">
                </li>
              </ul>
              </div>
              <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                  
            </div>
          </div>
          <div class="create-contragent-popup__form-control-group">
            <p class="create-contragent-popup__form-control-group-title">
                Сайт
            </p>
            <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
              <input type="text" class="create-contragent-popup__form-control-input">
            </div>
          </div>
          <div class="create-contragent-popup__tels-emails-form-control-wrapper">
            <div class="create-contragent-popup__tels-wrapper">
          <div class="create-contragent-popup__tels-form-control-wrapper">
            <p class="create-contragent-popup__form-control-group-title">
                Телефон
            </p>
          <div class="create-contragent-popup__form-control-group tel">
            <div class="create-contragent-popup__form-control-tel-wrapper">
            <div class="create-contragent-popup__form-control-select-wrapper tel-wrapper-1" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '+86'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="+86" readonly="" x-model="resultInputVal">
              <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-contragent-popup__form-control-select-list">
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+86" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+86'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+87" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+87'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+7" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+7'">
                </li>
              </ul>
              </div>
              <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                  
            </div>
            <input class="create-contragent-popup__form-control-tel-input" x-mask="999-99-99-99" placeholder="Номер">
            <div class="create-contragent-popup__form-control-select-wrapper tel-wrapper-2" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Рабочий'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="Рабочий" readonly="" x-model="resultInputVal">
                <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-contragent-popup__form-control-select-list">
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Рабочий" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Рабочий'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Сотовый" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Сотовый'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Другое" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Другое'">
                  </li>
                </ul>
                </div>
                <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
            </div>
           </div>
         </div>
         <div class="create-contragent-popup__form-control-group tel">
            <div class="create-contragent-popup__form-control-tel-wrapper">
            <div class="create-contragent-popup__form-control-select-wrapper tel-wrapper-1" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '+7'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="+7" readonly="" x-model="resultInputVal">
              <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-contragent-popup__form-control-select-list">
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+7" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+7'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+87" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+87'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+88" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+88'">
                </li>
              </ul>
              </div>
              <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                  
            </div>
            <input class="create-contragent-popup__form-control-tel-input" x-mask="999-99-99-99" placeholder="Номер">
            <div class="create-contragent-popup__form-control-select-wrapper tel-wrapper-2" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Другое'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="Другое" readonly="" x-model="resultInputVal">
                <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-contragent-popup__form-control-select-list">
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Другое" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Другое'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Рабочий" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Рабочий'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Сотовый" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Сотовый'">
                  </li>
                </ul>
                </div>
                <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
            </div>
           </div>
         </div>
          </div>
          <div class="create-contragent-popup__form-control-group col-2">
            <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
              <input type="text" class="create-contragent-popup__form-control-input" placeholder="Введите своё название">
            </div>
         </div>
         <button type="button" class="create-contragent-popup__add-tel-btn" x-on:click="addTelephone">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.99967 1.33398V10.6673M1.33301 6.00065H10.6663" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            Добавить телефон               
         </button>
            </div>
            <div class="create-contragent-popup__emails-wrapper">
          <div class="create-contragent-popup__emails-form-control-wrapper">
            <p class="create-contragent-popup__form-control-group-title">
              Электронная почта
          </p>
          <div class="create-contragent-popup__form-control-group col-2 email">
            <div class="create-contragent-popup__form-control-email-wrapper">
            <input type="email" placeholder="Введите e-mail">
            <div class="create-contragent-popup__form-control-select-wrapper email-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Рабочий'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="Рабочий" readonly="" x-model="resultInputVal">
                <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-contragent-popup__form-control-select-list">
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Рабочий" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Рабочий'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Сотовый" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Сотовый'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Другое" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Другое'">
                  </li>
                </ul>
                </div>
                <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
            </div>
           </div>
        </div>
          </div>
          <button type="button" class="create-contragent-popup__add-email-btn" x-on:click="addEmail">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.99967 1.33398V10.6673M1.33301 6.00065H10.6663" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Добавить email               
          </button>
           </div>
          </div>
       </fieldset>
       <div class="create-contragent-popup__form-control-group">
        <p class="create-contragent-popup__form-control-group-title">
            Описание
        </p>
        <textarea class="create-contragent-popup__textarea" placeholder="Введите текст"></textarea>
       </div>
       <div class="create-contragent-popup__attach-files-list-wrapper" x-data="{files:[]}">
        <ul role="list" class="create-contragent-popup__attach-files-list">
          <template x-for="file in files">
              <li class="create-contragent-popup__attach-files-list-item">
                  <img src="/images/attach-files-placeholder.png" alt="attach files image" class="create-contragent-popup__attach-files-list-item-img" loading="lazy" decoding="async">
                  <div class="create-contragent-popup__attach-files-list-item-info">
                      <p class="create-contragent-popup__attach-files-list-item-title" x-text="file.name">1</p>
                      <p class="create-contragent-popup__attach-files-list-item-size-format">
                          <span x-text="file.size"></span> КБ <span x-text="file.type"></span> 
                      </p>
                  </div>
                  <div class="create-contragent-popup__attach-files-list-item-controls">
                      <button type="button" class="create-contragent-popup__attach-files-list-item-add-btn">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.00016 1.33203V10.6654M1.3335 5.9987H10.6668" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>      
                      </button>
                      <button type="button" class="create-contragent-popup__attach-files-list-item-download-btn">
                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.6665 10.3346V11.668C1.6665 12.0216 1.80698 12.3607 2.05703 12.6108C2.30708 12.8608 2.64622 13.0013 2.99984 13.0013H10.9998C11.3535 13.0013 11.6926 12.8608 11.9426 12.6108C12.1927 12.3607 12.3332 12.0216 12.3332 11.668V10.3346M3.6665 6.33464L6.99984 9.66797M6.99984 9.66797L10.3332 6.33464M6.99984 9.66797V1.66797" stroke="#859AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>      
                      </button>
                  </div>
              </li>
          </template>
         </ul>
       <div class="create-contragent-popup__attach-files-btn-wrapper">
        <input type="file" class="create-contragent-popup__attach-files-btn-input" x-on:change="files = $el.files" multiple>
        <button type="button" class="create-contragent-popup__attach-files-btn">
          <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.9998 4.66632L4.66647 8.99965C4.40125 9.26487 4.25226 9.62458 4.25226 9.99965C4.25226 10.3747 4.40125 10.7344 4.66647 10.9997C4.93169 11.2649 5.2914 11.4139 5.66647 11.4139C6.04154 11.4139 6.40125 11.2649 6.66647 10.9997L10.9998 6.66632C11.5302 6.13588 11.8282 5.41646 11.8282 4.66632C11.8282 3.91617 11.5302 3.19675 10.9998 2.66632C10.4694 2.13588 9.74995 1.83789 8.9998 1.83789C8.24966 1.83789 7.53024 2.13588 6.9998 2.66632L2.66647 6.99965C1.87082 7.7953 1.42383 8.87443 1.42383 9.99965C1.42383 11.1249 1.87082 12.204 2.66647 12.9997C3.46212 13.7953 4.54125 14.2423 5.66647 14.2423C6.79169 14.2423 7.87082 13.7953 8.66647 12.9997L12.9998 8.66632" stroke="#7C69EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
              Прикрепить файлы              
         </button>
       </div>
       </div>
       <ul role="list" class="site-section__table-tabs create-contragent-popup__table-tabs">
        <li class="site-section__table-tabs-item create-contragent-popup__table-tabs-item">
            <button type="button" class="site-section__table-tabs-item-btn create-contragent-popup__table-tabs-item-btn active" x-on:click="table = 1" x-bind:class="{'active': table === 1}">
                Реквизиты
            </button>
        </li><li class="site-section__table-tabs-item create-contragent-popup__table-tabs-item">
            <button type="button" class="site-section__table-tabs-item-btn create-contragent-popup__table-tabs-item-btn" x-on:click="table = 2" x-bind:class="{'active': table === 2}">
                Адреса
            </button>
        </li><li class="site-section__table-tabs-item create-contragent-popup__table-tabs-item">
            <button type="button" class="site-section__table-tabs-item-btn create-contragent-popup__table-tabs-item-btn" x-on:click="table = 3" x-bind:class="{'active': table === 3}">
                Дополнительные контакты
            </button>
        </li>
       </ul>
           <fieldset class="create-contragent-popup__fieldset cols-2" x-show="table === 1">
            <div class="create-contragent-popup__form-control-group col-2">
                <p class="create-contragent-popup__form-control-group-title">
                    Название компании
                </p>
                <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                  <input type="text" class="create-contragent-popup__form-control-input" x-model="orgName">
                </div>
            </div>
            <div class="create-contragent-popup__form-control-group col-2">
                <p class="create-contragent-popup__form-control-group-title">
                    Полное юридическое наименование
                </p>
                <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper fullName">
                  <input type="text" class="create-contragent-popup__form-control-input fullName" x-model="orgFullName">
                </div>
            </div>
            <div class="create-contragent-popup__form-control-group">
                <p class="create-contragent-popup__form-control-group-title">
                    ИНН
                </p>
                <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                  <input type="text" class="create-contragent-popup__form-control-input" x-model="orgINN">
                </div>
            </div>
            <div class="create-contragent-popup__form-control-group">
                <p class="create-contragent-popup__form-control-group-title">
                    КПП
                </p>
                <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                  <input type="text" class="create-contragent-popup__form-control-input" x-model="orgKPP">
                </div>
            </div>
            <div class="create-contragent-popup__form-control-group col-2">
                <p class="create-contragent-popup__form-control-group-title">
                    ОГРН
                </p>
                <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                  <input type="text" class="create-contragent-popup__form-control-input" x-model="orgOGRN">
                </div>
            </div>
            <div class="create-contragent-popup__form-control-group col-2">
                <p class="create-contragent-popup__form-control-group-title">
                    Банковские реквизиты
                </p>
                <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                  <input type="text" class="create-contragent-popup__form-control-input">
                </div>
            </div>
           </fieldset>
           <fieldset class="create-contragent-popup__fieldset address cols-1" x-show="table === 2">
            <div class="create-contragent-popup__address-fieldset-wrapper">
                <legend class="create-contragent-popup__address-fieldset-title">Адрес регистрации</legend>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Страна
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Регион
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Почтовый индекс
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Улица / номер дома
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Квартира, офис, комната, этаж
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Дополнительно
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
            </div>
            <div class="create-contragent-popup__address-fieldset-wrapper">
                <legend class="create-contragent-popup__address-fieldset-title">Фактический адрес</legend>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Страна
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Регион
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Почтовый индекс
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Улица / номер дома
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Квартира, офис, комната, этаж
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Дополнительно
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
            </div>
           </fieldset>
           <fieldset class="create-contragent-popup__fieldset add-contacts cols-1" x-show="table === 3">
            <div class="create-contragent-popup__address-fieldset-wrapper add-contacts">
                <legend class="create-contragent-popup__address-fieldset-title add-contacts">Адрес регистрации</legend>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Соц. сеть
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        VK
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Whatsapp
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Telegram
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Linkedin
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
                <div class="create-contragent-popup__form-control-group">
                    <p class="create-contragent-popup__form-control-group-title">
                        Instagram
                    </p>
                    <div class="create-contragent-popup__form-control-wrapper create-contragent-popup__form-control-input-wrapper">
                      <input type="text" class="create-contragent-popup__form-control-input">
                    </div>
                </div>
            </div>
           </fieldset>
    <ul role="list" class="popup__btn-control-group create-contragent-popup__btn-control-group">
      <li class="popup__btn-control-group-item create-contragent-popup__btn-control-group-item">
          <button type="button" class="btn btn--flat popup__undo-btn create-contragent-popup__undo-btn" x-on:click="createContragentPopup = false">
              Отменить
          </button>
      </li>
      <li class="popup__btn-control-group-item create-contragent-popup__btn-control-group-item">
          <button type="button" class="btn btn--primary popup__save-btn create-contragent-popup__save-btn">
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

        Alpine.data('addEntity', () => ({

          addTelephone() {
               const createContragentPopupTelsFormControlWrapper = document.querySelector('.create-contragent-popup__tels-form-control-wrapper');
               const createContragentPopupFormControlGroupTel = 
               `
               <div class="create-contragent-popup__form-control-group">
            <div class="create-contragent-popup__form-control-tel-wrapper">
            <div class="create-contragent-popup__form-control-select-wrapper tel-wrapper-1" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: '+86'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
              <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="+86" readonly="" x-model="resultInputVal">
              <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
              <ul role="list" class="create-contragent-popup__form-control-select-list">
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+86" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+86'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+87" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+87'">
                </li>
                <li class="create-contragent-popup__form-control-select-list-item">
                  <input type="text" value="+7" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = '+7'">
                </li>
              </ul>
              </div>
              <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                  
            </div>
            <input class="create-contragent-popup__form-control-tel-input" x-mask="999-99-99-99" placeholder="Номер">
            <div class="create-contragent-popup__form-control-select-wrapper tel-wrapper-2" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Рабочий'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="Рабочий" readonly="" x-model="resultInputVal">
                <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-contragent-popup__form-control-select-list">
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Рабочий" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Рабочий'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Сотовый" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Сотовый'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Другое" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Другое'">
                  </li>
                </ul>
                </div>
                <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
            </div>
           </div>
         </div>
               `;
               createContragentPopupTelsFormControlWrapper.insertAdjacentHTML('beforeend',createContragentPopupFormControlGroupTel);
          },

          addEmail() {
            createContragentPopupEmailsFormControlWrapper = document.querySelector('.create-contragent-popup__emails-form-control-wrapper');
            const createContragentPopupFormControlGroupEmail = 
            `
            <div class="create-contragent-popup__form-control-group col-2 email">
            <div class="create-contragent-popup__form-control-email-wrapper">
            <input type="email" placeholder="Введите e-mail">
            <div class="create-contragent-popup__form-control-select-wrapper email-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Рабочий'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="create-contragent-popup__form-control-select-result-input" name="form-control-select-result-input" value="Рабочий" readonly="" x-model="resultInputVal">
                <div class="create-contragent-popup__form-control-dropdown" x-bind:class="{'active': toggleSelectList === true}">
                <ul role="list" class="create-contragent-popup__form-control-select-list">
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Рабочий" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Рабочий'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Сотовый" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Сотовый'">
                  </li>
                  <li class="create-contragent-popup__form-control-select-list-item">
                    <input type="text" value="Другое" readonly="" class="create-contragent-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Другое'">
                  </li>
                </ul>
                </div>
                <svg class="create-contragent-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
            </div>
           </div>
        </div>
            `;
            createContragentPopupEmailsFormControlWrapper.insertAdjacentHTML('beforeend',createContragentPopupFormControlGroupEmail);
          }
        }))

      })
  </script>
    <div class="popup add-new-filter-popup" x-bind:class="{'active': addNewFilterPopup === true}" x-on:click.self="addNewFilterPopup = false">
    <form action="#" method="post" class="popup__form add-new-filter-popup__form">
    <div class="popup__content add-new-filter-popup__content">
  <div class="popup__top-row add-new-filter-popup__top-row">
    <button class="popup__close-btn mobile" type="button" x-on:click="addNewFilterPopup = false">
      <svg class="popup__close-btn-icon" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L13 1" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                  
  </button>
    <button class="popup__close-btn add-new-filter-popup__close-btn desktop" type="button" x-on:click="addNewFilterPopup = false">
      <svg class="popup__close-btn-icon add-new-filter-popup__close-btn-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 1L1 13M1 1L13 13" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                 
    </button>
    <h2 class="popup__title add-new-filter-popup__title">
        Фильтры
    </h2>
</div>
    <div class="popup__body add-new-filter-popup__body">
       <fieldset class="add-new-filter-popup__fieldset">
         <div class="add-new-filter-popup__form-control-group">
          <p class="add-new-filter-popup__form-control-group-title">
              Дата
          </p>
          <div class="add-new-filter-popup__form-control-group-bottom">
            <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Любая дата'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                <input type="text" class="add-new-filter-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 1" value="Любая дата" readonly="" x-model="resultInputVal">
                <ul role="list" class="add-new-filter-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
                  <li class="add-new-filter-popup__form-control-select-list-item">
                    <input type="text" name="Любая дата" id="Любая дата 1" value="Любая дата" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Любая дата'">
                  </li>
                  <li class="add-new-filter-popup__form-control-select-list-item">
                    <input type="text" name="Любая дата 2" id="Любая дата 3" value="Любая дата 2" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Любая дата 2'">
                  </li>
                  <li class="add-new-filter-popup__form-control-select-list-item">
                    <input type="text" name="Любая дата 3" id="Любая дата 4" value="Любая дата 3" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Любая дата 3'">
                  </li>
                </ul>
                <svg class="add-new-filter-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                  <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>                  
              </div>
              <div class="add-new-filter-popup__form-control-btn-group">
                 <button type="button" class="add-new-filter-popup__cancel-btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                        
                 </button>
                 <button type="button" class="add-new-filter-popup__pin-btn">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                                             
                 </button>
              </div>
          </div>
         </div>
         <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Сумма
            </p>
            <div class="add-new-filter-popup__form-control-group-bottom">
              <div class="add-new-filter-popup__form-control-group-bottom-left">
              <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Равен'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                  <input type="text" class="add-new-filter-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 2" value="Равен" readonly="" x-model="resultInputVal">
                  <ul role="list" class="add-new-filter-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Равен" id="Равен" value="Равен" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Равен'">
                    </li>
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Больше" id="Больше" value="Больше" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Больше'">
                    </li>
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Меньше" id="Меньше" value="Меньше" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Меньше'">
                    </li>
                  </ul>
                  <svg class="add-new-filter-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                    <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                  
                </div>
                <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
                    <input type="text" class="add-new-filter-popup__form-control-input">
                </div>
              </div>
                <div class="add-new-filter-popup__form-control-btn-group">
                   <button type="button" class="add-new-filter-popup__cancel-btn">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                        
                   </button>
                   <button type="button" class="add-new-filter-popup__pin-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                             
                   </button>
                </div>
            </div>
           </div>
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Контрагент
            </p>
            <div class="add-new-filter-popup__form-control-group-bottom">
                <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
                    <input type="text" class="add-new-filter-popup__form-control-input">
                </div>
                <div class="add-new-filter-popup__form-control-btn-group">
                   <button type="button" class="add-new-filter-popup__cancel-btn">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                        
                   </button>
                   <button type="button" class="add-new-filter-popup__pin-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                             
                   </button>
                </div>
            </div>
           </div>
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Статус
            </p>
            <div class="add-new-filter-popup__form-control-group-bottom">
              <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-select-wrapper state-select" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Любая дата'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                  <input type="text" class="add-new-filter-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 3" value="Любая дата" readonly="" x-model="resultInputVal">
                  <ul role="list" class="add-new-filter-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Любая дата" id="Любая дата 44" value="Любая дата" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Любая дата'">
                    </li>
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Любая дата 2" id="Любая дата 4" value="Любая дата 2" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Любая дата 2'">
                    </li>
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Любая дата 3" id="Любая дата 33" value="Любая дата 3" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Любая дата 3'">
                    </li>
                  </ul>
                  <svg class="add-new-filter-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                    <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                  
                </div>
                <div class="add-new-filter-popup__form-control-btn-group">
                   <button type="button" class="add-new-filter-popup__cancel-btn">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                        
                   </button>
                   <button type="button" class="add-new-filter-popup__pin-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                             
                   </button>
                </div>
            </div>
           </div>
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Организация
            </p>
            <div class="add-new-filter-popup__form-control-group-bottom">
                <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
                    <input type="text" class="add-new-filter-popup__form-control-input">
                </div>
                <div class="add-new-filter-popup__form-control-btn-group">
                   <button type="button" class="add-new-filter-popup__cancel-btn">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                        
                   </button>
                   <button type="button" class="add-new-filter-popup__pin-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                             
                   </button>
                </div>
            </div>
           </div>
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Ответственный
            </p>
            <div class="add-new-filter-popup__form-control-group-bottom">
                <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
                    <input type="text" class="add-new-filter-popup__form-control-input">
                </div>
                <div class="add-new-filter-popup__form-control-btn-group">
                   <button type="button" class="add-new-filter-popup__cancel-btn">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                        
                   </button>
                   <button type="button" class="add-new-filter-popup__pin-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                             
                   </button>
                </div>
            </div>
           </div>
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Срок действия
            </p>
            <div class="add-new-filter-popup__form-control-group-bottom">
              <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Период в N дней'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
                  <input type="text" class="add-new-filter-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 4" value="Период в N дней" readonly="" x-model="resultInputVal">
                  <ul role="list" class="add-new-filter-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Период в N дней" id="Период в N дней" value="Период в N дней" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Период в N дней'">
                    </li>
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Период в N дней 2" id="Период в N дней 2" value="Период в N дней 2" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Период в N дней 2'">
                    </li>
                    <li class="add-new-filter-popup__form-control-select-list-item">
                      <input type="text" name="Период в N дней 3" id="Период в N дней 3" value="Период в N дней 3" readonly="" class="add-new-filter-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Период в N дней 3'">
                    </li>
                  </ul>
                  <svg class="add-new-filter-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
                    <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                  
                </div>
                <div class="add-new-filter-popup__form-control-btn-group">
                   <button type="button" class="add-new-filter-popup__cancel-btn">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17 1L1 17M1 1L17 17" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                        
                   </button>
                   <button type="button" class="add-new-filter-popup__pin-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 2L9.66667 7.33334L4.33333 9.33334L2.33333 11.3333L11.6667 20.6667L13.6667 18.6667L15.6667 13.3333L21 8M7 16L1 22M14.3333 1.33334L21.6667 8.66667" stroke="#869AB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>                                             
                   </button>
                </div>
            </div>
           </div>
           <div class="add-new-filter-popup__form-control-groups">
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Последние N дней
            </p>
                <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
                    <input class="add-new-filter-popup__form-control-input" id="addNewFilterDatePicker1">
                </div>
           </div>
           <div class="add-new-filter-popup__form-control-group">
            <p class="add-new-filter-popup__form-control-group-title">
                Следующие N дней
            </p>
                <div class="add-new-filter-popup__form-control-wrapper add-new-filter-popup__form-control-input-wrapper">
                    <input class="add-new-filter-popup__form-control-input" id="addNewFilterDatePicker2">
                </div>
           </div>
           </div>
           <button type="button" class="btn btn--secondary add-new-filter-popup__add-field-btn">Добавить поле</button>
           <div class="add-new-filter-popup__btn-group">
              <div class="add-new-filter-popup__save-checkbox">
                <input class="add-new-filter-popup__save-checkbox-input" type="checkbox" name="Сохранить фильтр" id="Сохранить фильтр">
                <label class="add-new-filter-popup__save-checkbox-label" for="Сохранить фильтр">Сохранить</label>
              </div>
              <button type="button" class="btn btn--primary add-new-filter-popup__search-filter-btn">Поиск</button>
           </div>
       </fieldset>
    </div>
</div>
</form>
  </div>


<script type="module">
  // Tempus Dominus JavaScript datepicker https://getdatepicker.com/ 
  import { TempusDominus, Namespace } from 'https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.esm.js';

  const linkedPicker1Element = document.getElementById('addNewFilterDatePicker1');
const linked1 = new TempusDominus(linkedPicker1Element, {
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
const linked2 = new TempusDominus(document.getElementById('addNewFilterDatePicker2'), {
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
    },
  useCurrent: false,
});

//using event listeners
linkedPicker1Element.addEventListener(Namespace.events.change, (e) => {
  linked2.updateOptions({
    restrictions: {
      minDate: e.detail.date,
    },
  });
});

//using subscribe method
const subscription = linked2.subscribe(Namespace.events.change, (e) => {
  linked1.updateOptions({
    restrictions: {
      maxDate: e.date,
    },
  });
});

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
    <aside class="footer-mobile-menu" x-bind:class="{'active': footerMobileMenu === true}" x-data="{url: '/orders.html'}">
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