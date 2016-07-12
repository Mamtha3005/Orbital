<!-- https://www.youtube.com/watch?v=_fukWxTy31M#t=1712.1226 -->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Learning how to make menu thing
    </title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="pg3.css" >
    <link rel="stylesheet" type="text/css"   href="responsive.css" media="screen and (max-width: 800px)"> <!--to make the webpg responsive-->
    <link rel="stylesheet" type="text/css"  href="menu.css"> <!-- for the menu -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head> 
<body>
    <div id="container">
        <div id="header"><center>GradList</center></div>
        <div id="menu">
            <ul>
                <center>
                <li> <a href="AboutPage.html">About</a></li> 
                <li> <a href="help.html">Help</a></li>
                <li> <a href="newcontactpg.html">Contact</a></li> </center>
            </ul>
        </div>
<!--
        <div id="bluebox">
            <h1>Uncompleted Modules</h1>
            <p>UE: 20 MCs</p>
            <p>GEM: GES GEH 1EXTRA</p>
            <p>Core: </p>
            <table id="table">
                <thead>
                    <tr>
                        <th>CS Foundations</th>
                        <th>Breadth</th>
                        <th>Industrial Experience</th>
                        <th>IT Professionalism</th>
                        <th>Mathematics & Science</th>
                    </tr>
                    <col align="justify">
                <tbody>
                    <tr>
                    <td>
                        <table>
                        <thead>
                            <tr>
                                <td>CS2010</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CS2100</td>
                            </tr>
                            <tr>
                                <td>CS2103</td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    <td>
                        <table>
                        <thead>
                            <tr>
                                <td>CS3230</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CS3236</td>
                            </tr>
                            <tr>
                                <td>CS4231</td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    <td>
                        <table>
                        <thead>
                            <tr>
                                <td>6mth CP3880</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2 x 3mth CP3200 + CP3202</td>
                            </tr>
                            <tr>
                                <td>IS4010</td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    <td>
                        <table>
                        <thead>
                            <tr>
                                <td>IS1103</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CS2101</td>
                            </tr>
                            <tr>
                                <td>ES2660</td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    <td>
                        <table>
                        <thead>
                            <tr>
                                <td>MA1301/FC/X</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MA1521</td>
                            </tr>
                            <tr>
                                <td>MA1101R</td>
                            </tr>
                            <tr>
                                <td>ST2334 + sci mod OR ST2131 + ST2132</td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    </tr>
            </table>
        </div>
-->
        <div id="footer"></div>
    </div>
    Faculty: <?php echo $_POST["Faculty"]?><br/>
    Major: <?php echo $_POST["Majors"] ?><br/>
    Specialization: <?php echo $_POST["Specialization"] ?><br/>
    <br/>
    <?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['Color'])) {
            echo "<span>You have selected :</span><br/>";
            $count = 0;
            $taken = array();
        // As output of $_POST['Color'] is an array we have to use Foreach Loop to display individual value
            foreach ($_POST['Color'] as $select){
//                echo "<span><b>".$select."</b></span><br/>";
                $taken[$count]= $select;
                $count = $count + 1;
            }
            for($i=0;$i<count($taken);$i++){
//                echo $taken[$i];
            }
        }
        else { echo "<span>Please Select Atleast One completed module..</span><br/>";}
    }
    ?>

<script type="text/javascript">

    var jArray= <?php echo json_encode($taken); ?>;

    for(var i=0;i<jArray.length;i++){
        document.write("djkcfndjkafncdjkzn");
        document.write(jArray[i]);
    }

 </script>
    
<script >
    var GEM={GET:"false", GER:"false", GES:"false", GEH:"false", totalNum:5};
    var CS1010={code:"CS1010/J/S/E/FC/X", name:"CS1010 Programming Methodology", type:"core", mc: 4, key: false};
    var CS1101S={code:"CS1101S", name:"CS1101S Programming Methodology", type:"core", mc: 5, key: false};
    var CS1020={code:"CS1020", name:"CS1020 Data Structures and Algorithms I", type:"core", mc: 4, key: false};
    var CS1231={code:"CS1231", name:"CS1231 Discrete Structures", type:"core", mc: 4, key: false};
    var CS2010={code:"CS2010", name:"CS2010 Data Structures and Algorithms II", type:"core", mc: 4, key: false};
    var CS2100={code:"CS2100", name:"CS2100 Computer Organisation", type:"core", mc: 4, key: false};
    var CS2103T={code:"CS2103T", name:"CS2103T Software Engineering", type:"core", mc: 4, key: false};
    var CS2105={code:"CS2105", name:"CS2105 Introduction to Computer Networks", type:"core", mc: 4, key: false};
    var CS2106={code:"CS2106", name:"CS2106 Introduction to Operating Systems", type:"core", mc: 4, key: false}; 
    var CS3230={code:"CS3230", name:"CS3230 Design and Analysis of Algorithms",type:"core", mc: 4, key: false}; 
    var IS1103={code:"IS1103/FC", name:"IS1103/FC Computing and Society",type:"IT", mc: 4, key: false};
    var CS2101={code:"CS2101", name:"CS2101 Effective Communication for Computing Professionals",type:"IT", mc: 4, key: false};
    var MA1301={code:"MA1301/FC/X", name:"MA1301/FC/X Introductory Mathematics",type:"math&sci", mc: 4, key: false};
    var MA1521={code:"MA1521", name:"MA1521 Calculus for Computing",type:"math&sci", mc: 4, key: false};
    var MA1101R={code:"MA1101R", name:"MA1521 Calculus for Computing",type:"math&sci", mc: 4, key: false};
    var ST2334={code:"ST2334", name:"ST2334 Probability and Statistics",type:"math&sci", mc: 4, key: false};
    var ST2131={code:"ST2131", name:"ST2131 Probability",type:"math&sci", mc: 4, key: false};
    var ST2132={code:"ST2132", name: "ST2132 Mathematical Statistics",type:"math&sci", mc: 4, key: false};
    var PC1221/PC1222/A-lvl Phy={code:"PC1221/PC1222/A-lvl Phy", name:"PC1221 Fundamentals of Physics I or PC1222 Fundamentals of Physics II or A-Level Physics",type:"math&sci", mc: 4, key: false};
    var MA2213={code:"MA2213", name: "MA2213 Numerical Analysis I",type:"math&sci", mc: 4, key: false};
    var MA2214={code:"MA2214", name: "MA2214 Combinatorics and Graph",type:"math&sci", mc: 4, key: false};
    var CM1121={code:"CM1121", name: "CM1121 Organic Chemistry I",type:"math&sci", mc: 4, key: false};
    var CM1131={code:"CM1131", name: "CM1131 Physical Chemistry I",type:"math&sci", mc: 4, key: false};
    var CM1417={code:"CM1417", name: "CM1417 Fund. of Chemistry",type:"math&sci", mc: 4, key: false};
    var LSM1301={code:"LSM1301", name: "LSM1301 General Biology",type:"math&sci", mc: 4, key: false};
    var LSM1302={code:"LSM1302", name: "LSM1302 Genes and Society",type:"math&sci", mc: 4, key: false};
    var PC1221={code:"PC1221", name: "PC1221 Fundamental of Physics I",type:"math&sci", mc: 4, key: false};
    var PC1222={code:"PC1222", name: "PC1222 Fundamental of Physics II",type:"math&sci", mc: 4, key: false};
    var PC1141={code:"PC1141", name: "PC1141 Physics I Introduction to Classical Mechanics",type:"math&sci", mc: 4, key: false};
     
    foreach ($_POST['Color'] as $select){
        for(var i=0;i<3;i++){
            if(modarr[i].name===$select){
                modarr[i].key=true;
            }
        }
    };
    for(var i=0;i<3;i++){
       if(modarr[i].key===false){
            document.write(modarr[i].name);
        }
    };    
    </script>
</body>
</html>