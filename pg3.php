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
        // As output of $_POST['Color'] is an array we have to use Foreach Loop to display individual value
            foreach ($_POST['Color'] as $select){
                echo "<span><b>".$select."</b></span><br/>";
            }
        }
        else { echo "<span>Please Select Atleast One completed module..</span><br/>";}
    }
    ?>
</body>
</html>