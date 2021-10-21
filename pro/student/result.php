<?php

    include 'header.php';

    $sy = semesteryear($__RequestVerificationToken);
    $classschedule1 = studentclassschedule2($__RequestVerificationToken);
    $result = getstudentresult($__RequestVerificationToken);
    //$allstudentinthecourse = allstudentinthecourse($forcourseandresultslist1);

    // if(isset($_GET["cs_id"]) && isset($_GET["semester"])){
    //     $token = $_GET["cs_id"];
    //     $token1 = $_GET["semester"];
    //     $token2 = $classschedule1["teacherid"];
    //     $query = "select cs_id,semester,teacherid from course_semester where cs_id = '$token' and semester= '$token1' and teacherid = '$token2'";
    //     $data = get($query);
    //     if(count($data) == 0){
    //         header("Location: courses_and_results.php");
    //     }
    // }


?>

<html>
    <head>
        <!-- <link rel="stylesheet" href="css/home.css"> -->
        <link rel="stylesheet" href="css/teacher_info_insertupdatedelete_form.css">
        <link rel="stylesheet" href="css/personal_info.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <table width="100%">
            <tr>
                <td width="18.5%"></td>
                <td width="63%">
                    <table width="100%" height="815" valign="top" >
                        <tr>
                            <td width="23%" valign="top">
                                <?php include 'navbar.php';?>
                            </td>
                            <td width="77%" valign="top">
                                <table id="frame">
                                    <tr>
                                        <td colspan="3" id="title" valign="center">COURSES & RESULTS</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table align="" id="frameitem" width="100%">
                                                <tr>
                                                <form method="POST">
                                                    <td width="100%" align="center">
                                                        Semester:
                                                        <select id="semester" name="semester"><option disabled selected>Semester</option><?php foreach($sy as $n){if($n == $runningsemester) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        <input type="submit" name="forcourseandresultslist" value="Enter" id="button10">
                                                    </td>
                                                    <td><input type="submit" name="Backforcoursesandresults" value="Back" id="button10"></td>
                                                    </form>
                                                </tr>
                                                <tr>
                                                    <?php
                                                        echo "<td width='100%' style='padding:3px;text-align: center;padding:10px'><span style='font-size: 15px; color:white; background-color:#004EA2;border-radius:5px;padding:5px'><b>".$classschedule1["coursename"]." [".$classschedule1["section"]."] (".$classschedule1["cs_id"].")</b></span></a><span style='font-size: 13px;'></td>";
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <td width="100%" align="center">
                                                        <b>RESULT</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <hr>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table width='100%' align="center">
                                            
                                                <thead>
                                                    <tr>
                                                        <td width='33%' align='center'><b>Total Grade </b></td>
                                                        <td width='33%' align='center'><b>Mid Exam Grade</b></td>
                                                        <td width='33%' align='center'><b>Final Exam Grade</b></td>
                                                    </tr>
                                                <?php
                                                    foreach($result as $cs){ 
                                                        echo "<tr>";
                                                        echo "<td align='center' style='padding:3px;'><span style='font-size: 15px; color:#428BCA;'><b>".$cs["result"]."</b></span></td>";
                                                        echo "<td align='center' style='padding:3px;'><span style='font-size: 15px; color:#428BCA;'><b>".$cs["half_year_exam_result"]."</b></span></td><form method='POST'>";
                                                        echo "<td align='center' style='padding:3px;'><span style='font-size: 15px; color:#428BCA;'><b>".$cs["final_exam_result"]."</b></span></td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </table>
                                        </td>
                                    </tr>
                                </table>        
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="18.5%"></td>
            </tr>
        </table>
        <script src="js/home.js"></script>
    </body>
</html>