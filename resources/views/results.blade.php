<!DOCTYPE html>
<!-- saved from url=(0104)http://claroline.hcdc.edu.ph/claroline/claroline/exercise/exercise.php?cidReset=true&cidReq=IAS101_01526 -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>HCDC Elearning System - Results</title>
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">

    <meta name="generator" content="Claroline 1.11.10 - http://claroline.net">

    <link rel="stylesheet" type="text/css" href="./HCDC Elearning System_files/main.css" media="screen, projection, tv">
    <link rel="stylesheet" type="text/css" href="./HCDC Elearning System_files/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="./HCDC Elearning System_files/main_2.css">

    <link rel="top" href="http://claroline.hcdc.edu.ph/index.php" title="">
    <link href="http://www.claroline.net/documentation.htm" rel="Help">
    <link href="http://claroline.hcdc.edu.ph/claroline/CREDITS.txt" rel="Author">
    <link href="http://www.claroline.net/" rel="Copyright">
    <link href="http://claroline.hcdc.edu.ph/claroline/favicon.ico" rel="shortcut icon">

    <script type="text/javascript">
        document.cookie = "javascriptEnabled=true; path=/claroline";
    </script>

    <script src="./HCDC Elearning System_files/jquery.js.download" type="text/javascript"></script>
    <script src="./HCDC Elearning System_files/jquery.qtip.js.download" type="text/javascript"></script>
    <script src="./HCDC Elearning System_files/claroline.js.download" type="text/javascript"></script>
    <script src="./HCDC Elearning System_files/claroline.ui.js.download" type="text/javascript"></script>
    <link rel="alternate" type="application/rss+xml" title="IAS101_01526_10AM_220212022 - HCDC Elearning System"
        href="http://claroline.hcdc.edu.ph/claroline/claroline/backends/rss.php?cidReq=IAS101_01526">
    <script src="./HCDC Elearning System_files/tooltitle.js.download" type="text/javascript"></script>

    <script type="text/javascript">
        var __ = (function () {

            var translation = {


            };

            return function (string) {
                return translation[string] || string;
            };

        })();
    </script>


</head>

<body dir="ltr">
    <!-- Dialog Box -->
    <div id="dark-background">
        <div id="dlgbox">
            <div id="dlg-header">NOTICE!</div>
            <div id="dlg-body">Are you sure you want to submit the test?</div>
            <div id="dlg-footer">
                <button onclick="dlgCancel()">CANCEL</button>
                <button onclick="dlgConfirm()">CONFIRM</button>
            </div>
        </div>
    </div>
    <!-- End Dialog Box -->


    <!-- $Id: banner.tpl.php 13151 2011-05-11 12:09:47Z abourguignon $ -->

    <!-- claroPage -->
    <div id="claroPage">

        <!-- Banner -->
        <div id="topBanner">

            <!-- Platform Banner -->
            <div id="platformBanner">
                <div id="campusBannerLeft">
                    <span id="siteName">
                        <a href="userdesktop" target="_top">
                            HCDC Elearning System </a>
                    </span>


                    <!-- campusBannerLeft -->

                    <!-- End of campusBannerLeft -->
                </div>
                <div id="campusBannerRight">
                    <span id="institution">
                        <a href="http://www.hcdc.edu.ph/" target="_top">

                            Holy Cross of Davao College, Inc.
                        </a>
                    </span>


                    <!-- campusBannerRight -->

                    <!-- End of campusBannerRight -->
                </div>
                <div class="spacer"></div>
            </div>
            <!-- End of Platform Banner -->

            <!-- User Banner -->
            <div id="userBanner">
                <div id="userBannerLeft">
                    <ul class="menu">
                        <li><span style="color: #222; margin: 0px 8px;">HCI102_2PM_2NDSEM</span></li>

                        <!-- userBannerLeft -->

                        <!-- End of userBannerLeft -->
                    </ul>

                </div>

                <div id="userBannerRight">
                    <ul class="menu">
                        <li class="userName">USERNAME</li>

                        <!-- userBannerRight -->

                        <!-- End of userBannerRight -->
                    </ul>

                </div>

                <div class="spacer"></div>
            </div>

            <!-- BreadcrumbLine  -->
            <div id="breadcrumbLine">

            </div>
            <!-- End of BreadcrumbLine  -->

        </div>
        <!-- End of topBanner -->
        <!-- $Id: body.tpl.php 14332 2012-11-23 10:08:10Z zefredz $ -->


        <!-- - - - - - - - - - - Claroline Body - - - - - - - - - -->
        <div style="margin: 0px 10px 0px 25px; background: lightgray; padding: 5px; font-weight: bold;">
            <span>HCI 102 (01531) HUMAN COMPUTER INTERACTION</span>
        </div>
        <div>
            <div style="display: flex; margin: 0px 10px;">
                <div style="padding: 10px; width: 250px; flex-shrink: 0;">
                    <div style="padding: 3px;"><span><img src="./HCDC Elearning System_files/icon.png" alt=""
                                style="padding-right: 5px;"><a href="homepage" style="color: gray; font-weight: bold;">Course
                                Homepage</a></span></div>
                    <div style="padding: 3px;"><span><img src="./HCDC Elearning System_files/icon(3).png" alt=""
                                style="padding-right: 5px;"><a href="exercises"
                                style="color: gray; font-weight: bold;">Exercises</a></span></div>
                    <div style="padding: 3px;"><span><img src="./HCDC Elearning System_files/icon(4).png" alt=""
                                style="padding-right: 5px;"><a href="results"
                                style="color: gray; font-weight: bold;">Results</a></span></div>
                </div>
                <div style="border: solid lightgray; border-width: 0px 1px 1px 1px; padding: 10px; flex-grow: 1; justify-self: stretch  ;">
                    <!-- - - - - - - - - - -        Contents        - - - - - - - - - - -->

                    <div class="statBlock">
                        <h3 class="blockHeader"> Results </h3>
                        <div class="blockContent">
                            <script language="javascript" type="text/javascript">
                             $(document).ready(function() {  $('.exerciseDetails').hide();  $('.exerciseDetailsToggle').click( function()  {   $(this).next(".exerciseDetails").toggle();   return false;  }); });</script>

                            <table class="claroTable emphaseLine" cellpadding="2" cellspacing="1" border="0" align="center" style="width: 99%;">
                                <thead>
                                <tr class="headerX">
                                <th>Exercises</th>
                                <th>Score</th>
                                <th>Submitted</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><a href="quiz"><b>QUIZ 1</b></a></td>
                                    <td>{{$score->score}}</td><!-- - - - - - - - - - -  Score Here   - - - - - - - - - - -->
                                    <td>{{$score->created_at}}</td> <!-- - - - - - - - - - -  Score Here   - - - - - - - - - - -->
                                    </tr>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>

                             </div>
                         <div class="blockFooter">
                        Click on exercise title for more details </div>
                    </div>

                    <!-- - - - - - - - - - -  End of Content Body   - - - - - - - - - - -->
                </div>
            </div>
        </div>
        <!-- - - - - - - - - - - End of Claroline Body  - - - - - - - - - - -->

        <!-- $Id: footer.tpl.php 12676 2010-10-20 14:59:33Z abourguignon $ -->


        <div id="campusFooter">
            <hr>
            <div id="campusFooterLeft">

                <!-- campusFooterLeft -->

                <!-- End of campusFooterLeft -->
            </div>
            <div id="campusFooterRight">

                <!-- campusFooterRight -->

                <!-- End of campusFooterRight -->
                <div id="platformManager">Administrator for HCDC Elearning System : <a
                        href="mailto:serveradmin@hcdc.edu.ph?subject=[HCDC%20Elearning%20System]">network engineer</a>
                </div>
            </div>
            <div id="campusFooterCenter">

                <!-- campusFooterCenter -->

                <!-- End of campusFooterCenter -->
                <span class="poweredBy">Powered by <a href="http://www.claroline.net/" target="_blank">Claroline</a>
                    2001 - 2022</span>
            </div>
        </div>
        <!-- end of claroPage -->
    </div>

    <script src="HCDC Elearning System_files/quiz.js" type="text/javascript"></script>
</body>

</html>