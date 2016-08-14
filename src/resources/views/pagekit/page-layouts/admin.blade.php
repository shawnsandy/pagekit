@extends('page::page-layouts.default')

@section('page')
    <div id="wrapper" class="table-layout easein sidebar-closed">
        <div class="sidebar ">
            <div class="">
                <nav>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span id="sidebar-toggle" class="">
                                <i class="fa fa-plus-circle sidebar-toogle" aria-hidden="true"></i>
                                <i class="fa fa-times-circle sidebar-toogle" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-home" aria-hidden="true"></i>
                                <span class="nav-title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span
                                        class="nav-title">Users</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-cogs" aria-hidden="true"></i><span
                                        class="nav-title">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="dashboard">
            @yield('content')
        </div>
    </div>

@endsection

@push('styles')

{{--<link rel='stylesheet' href='/vendor/typicons/typicons.min.css' />--}}
<link rel='stylesheet' href='/vendor/font-awesome/css/font-awesome.min.css'/>
<script>
    /*! grunt-grunticon Stylesheet Loader - v2.1.6 | https://github.com/filamentgroup/grunticon | (c) 2015 Scott Jehl, Filament Group, Inc. | MIT license. */

    !function(){function e(e,n,t){"use strict";var o=window.document.createElement("link"),r=n||window.document.getElementsByTagName("script")[0],a=window.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",r.parentNode.insertBefore(o,r),o.onloadcssdefined=function(e){for(var n,t=0;t<a.length;t++)a[t].href&&a[t].href===o.href&&(n=!0);n?e():setTimeout(function(){o.onloadcssdefined(e)})},o.onloadcssdefined(function(){o.media=t||"all"}),o}function n(e,n){e.onload=function(){e.onload=null,n&&n.call(e)},"isApplicationInstalled"in navigator&&"onloadcssdefined"in e&&e.onloadcssdefined(n)}!function(t){var o=function(r,a){"use strict";if(r&&3===r.length){var i=t.navigator,c=t.document,s=t.Image,d=!(!c.createElementNS||!c.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!c.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||t.opera&&i.userAgent.indexOf("Chrome")===-1||i.userAgent.indexOf("Series40")!==-1),l=new s;l.onerror=function(){o.method="png",o.href=r[2],e(r[2])},l.onload=function(){var t=1===l.width&&1===l.height,i=r[t&&d?0:t?1:2];t&&d?o.method="svg":t?o.method="datapng":o.method="png",o.href=i,n(e(i),a)},l.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",c.documentElement.className+=" grunticon"}};o.loadCSS=e,o.onloadCSS=n,t.grunticon=o}(this),function(e,n){"use strict";var t=n.document,o="grunticon:",r=function(e){if(t.attachEvent?"complete"===t.readyState:"loading"!==t.readyState)e();else{var n=!1;t.addEventListener("readystatechange",function(){n||(n=!0,e())},!1)}},a=function(e){return n.document.querySelector('link[href$="'+e+'"]')},i=function(e){var n,t,r,a,i,c,s={};if(n=e.sheet,!n)return s;t=n.cssRules?n.cssRules:n.rules;for(var d=0;d<t.length;d++)r=t[d].cssText,a=o+t[d].selectorText,i=r.split(");")[0].match(/US\-ASCII\,([^"']+)/),i&&i[1]&&(c=decodeURIComponent(i[1]),s[a]=c);return s},c=function(e){var n,r,a,i;a="data-grunticon-embed";for(var c in e){i=c.slice(o.length);try{n=t.querySelectorAll(i)}catch(e){continue}r=[];for(var s=0;s<n.length;s++)null!==n[s].getAttribute(a)&&r.push(n[s]);if(r.length)for(s=0;s<r.length;s++)r[s].innerHTML=e[c],r[s].style.backgroundImage="none",r[s].removeAttribute(a)}return r},s=function(n){"svg"===e.method&&r(function(){c(i(a(e.href))),"function"==typeof n&&n()})};e.embedIcons=c,e.getCSS=a,e.getIcons=i,e.ready=r,e.svgLoadedCallback=s,e.embedSVG=s}(grunticon,this)}();

    grunticon(["/icons/entypo/icons.data.svg.css", "/icons/entypo/icons.data.png.css", "/icons/entypo/icons.fallback.css"], grunticon.svgLoadedCallback);
</script>
<noscript><link href="/icons/entypo/icons.fallback.css" rel="stylesheet"></noscript>
<link rel='stylesheet' href='/vendor/animate.css'/>
<style>

    #wrapper {

    }

    .table-layout {
        width: 100%;
        height: 100%;
        display: table;
    }

    .sidebar {
        padding: 0;
        display: table;
        height: 100% !important;
        max-width: 350px;
        width: 200px;
        overflow: hidden;
        float: left;
        border-right: #f2f2f2 1px solid;
        background-color: #F3f3f3;
        word-wrap: normal;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        overflow: hidden;
        position: absolute;
    }
    .sidebar-closed .sidebar {
        width: 80px;

    }

    .sidebar a {
        padding: 10px 0 10px 0;
    }

    .sidebar a:hover, .sidebar a:focus {
        text-decoration: none;
    }

    .sidebar li {
        text-align: center;
        padding: 20px 0 20px;
        border-bottom: 1px solid #f6f6f6;
        overflow: hidden;
        height: 80px;
    }

    .sidebar ul:first-child {
        text-align: left;
    }

    .sidebar nav {
        /*padding: 20px 5px 10px 5px;*/
    }

    li:first-child {
        height: 60px;
    }

    i.fa {
        font-size: 21px;
        padding: 0 10px 0 10px;
        display: block;
    }

    i.fa-times-circle {
        display: none;
    }

    .nav-title {
        /*font-size: 14px;*/
        display: block;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .sidebar-closed .nav-title {
        /* display: none; */
        font-size: 10px;
    }

    .sidebar:hover {
        /*width: 260px;*/
    }

    .dashboard {
        /*/float: right;*/
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        box-sizing: border-box;
        /*padding: 0 20px 0 20px;*/
        /*position: relative;*/
        padding-left: 0;
    }

    .dashboard > .container-fluid {
        margin-left: 210px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .sidebar-closed .dashboard > .container-fluid {
        margin-left: 90px;
    }

    .footer {
        width: 100%;
        background-color: lightgrey;
    }


    .dash-panel {
       min-height: 180px;
        border-top: 3px solid #e6e6e6;
    }

    .icon-svg {
        display: block;
        width: 32px;
        height: 32px;
        background-position: center center;
        background-size: cover;
    }

</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $('#sidebar-toggle').click(function (e) {
        e.preventDefault();
        $(".sidebar-toogle").slideToggle('fast', 'linear');
        $('#wrapper').toggleClass('sidebar-closed');
    })
</script>
@endpush
