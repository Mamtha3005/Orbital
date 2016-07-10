<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style type="text/css">
    body{color:#000;background-color:#fff;font-family:'Bookman Old Style',Georgia,Verdana;font-size:14px;text-align:center;}
    select{margin-left:10px;margin-right:10px;}
    </style>
    <title>pg 2</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="pg2.css" >
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" type="text/css" href="responsive.css" media="screen and (max-width: 800px)"> <!--to make the webpg responsive-->
    <link rel="stylesheet" type="text/css"  href="menu.css"> <!-- for the menu -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
  
<!--
  <script language="javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script language="javascript">

        $(document).ready(function(){

            $("#steps_number").change(function() { 
                var inputNum = $("#steps_number").val();
                
                var inputCode = "";
                for(i=0; i<inputNum; i++) { 
                    inputCode += "<p class=\"inputBox\"><input id=\"inputBox_" + i + "\" size=\"20\"  type=\"text\" placeholder =\"Enter Completed Modules\" </p> "
                }

                $("#inputBoxes").html(inputCode);
                
            });
        });
    </script>  
-->
  

<script type="text/javascript">
    function doc(id){
        return document.getElementById(id);
    }
    function cloneSel(id,targid){
    var count=document.getElementsByTagName(doc(id).tagName).length,
    cl=doc(id).cloneNode(true);
    cl.id=cl.title=id+'_'+count;
    doc(targid).appendChild(cl);
    // just for testing
//    cl.onchange=function(){alert(this.id);}
    }

    window.onload=function(){
        doc('clon').onclick=function(){
        cloneSel('one','form_area');
        }
    }
</script>
<!--
  <script>
  $(function() {
    var availableTags = [
      "CS1010 Programming Methodology",
      "CS1020 Data Structures and Algorithms I",
      "CS1231 Discrete Structures",
      "MA1301 Introductory Mathematics",
      "MA1521 Calculus for Computing",
      "MA1101R Linear Algebra I",
      "ST2334 Probability and Statistics and a Science Module",
      "PC1221 Fundamentals of Physics I",
    ];
    $( "#mod" ).autocomplete({
      source: availableTags
    });
  });
  </script>
-->
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
        </div></div>
    <?php
    if($_POST["Faculty"] == "select")
        echo "Please go back to the preious page to choose a faculty.<br/>";
    if($_POST["Majors"] == "select")
        echo "Please go back to the preious page to choose a major.<br/>";
    if($_POST["Specialization"] == "select")
        echo "Please go back to the preious page to choose a specialization.<br/>";
    ?>
        <div class="container">
        <div class="main">
            <h2> Completed Modules</h2>
            <form action="pg3.php" method="post">
                <select id = "Faculty" name = "Faculty" >
                      <option value= "<?php echo $_POST["Faculty"]?>"><?php echo $_POST["Faculty"]?></option>
                </select><br>
                <select id = "Majors" name = "Majors" >
                      <option value= "<?php echo $_POST["Majors"]?>"><?php echo $_POST["Majors"]?></option>
                </select><br>                
                <select id = "Specialization" name = "Specialization" >
                      <option value= "<?php echo $_POST["Specialization"]?>"><?php echo $_POST["Specialization"]?></option>
                </select><br>
                    <!----- Select Option Fields Starts Here ----->
                    <label class="heading">To Select Completed Modules Press ctrl+left click :</label>
                    <select multiple name="Color[]">
                            <option value="CM1121 Organic Chemistry I">CM1121 Organic Chemistry I</option>
                            <option value="CM1131 Physical Chemistry I">CM1131 Physical Chemistry I</option>
                            <option value="CM1417 Fund. of Chemistry">CM1417 Fund. of Chemistry</option>
                            <option value="CP3200 Internship and CP3202 Internship II">CP3200 Internship and CP3202 Internship II</option>
                            <option value="CP3200 Internship and an Industry Course">CP3200 Internship and an Industry Course</option>
                            <option value="CP3880 Advanced Technology Attachment Programme">CP3880 Advanced Technology Attachment Programme</option>
                            <option value="CP4101 BComp Dissertation">CP4101 BComp Dissertation</option>
                            <option value="CS1010 Programming Methodology">CS1010 Programming Methodology</option>
                            <option value="CS1020 Data Structures and Algorithms I">CS1020 Data Structures and Algorithms I</option>
                            <option value="CS1231 Discrete Structures">CS1231 Discrete Structures</option>
                            <option value="CS2010 Data Structures and Algorithms II">CS2010 Data Structures and Algorithms II</option>
                            <option value="CS2100 Computer Organisation">CS2100 Computer Organisation</option>
                            <option value="CS2101 Effective Communication for Computing Professionals">CS2101 Effective Communication for Computing Professionals</option>
                            <option value="CS2102 Database Systems">CS2102 Database Systems</option>
                            <option value="CS2103/T Software Engineering (CFM)">CS2103/T Software Engineering (CFM)</option>
                            <option value="CS2104 Programming Language Concepts">CS2104 Programming Language Concepts</option>
                            <option value="CS2105 Introduction to Computer Networks">CS2105 Introduction to Computer Networks</option>
                            <option value="CS2106 Introduction to Operating Systems">CS2106 Introduction to Operating Systems</option>
                            <option value="CS2107 Introduction to Information Security">CS2107 Introduction to Information Security</option>
                            <option value="CS3103 Computer Networks Practice">CS3103 Computer Networks Practices</option>
                            <option value="CS3201 Software Engineering Project I and CS3202 Software Engineering Project II">CS3201 Software Engineering Project I and CS3202 Software Engineering Project II</option>
                            <option value="CS3210 Parallel Computing">CS3210 Parallel Computing</option>
                            <option value="CS3213 Software Systems Design">CS3213 Software Systems Design</option>
                            <option value="CS3216 Software Product Engineering for Digital Markets and CS3217 Software Engineering on Modern Application Platforms">CS3216 Software Product Engineering for Digital Markets and CS3217 Software Engineering on Modern Application Platforms</option>
                            <option value="CS3223 Database Systems Implementation">CS3223 Database Systems Implementation</option>
                            <option value="CS3230 Design and Analysis of Algorithms (CFM)">CS3230 Design and Analysis of Algorithms (CFM)</option>
                            <option value="CS3235 Computer Security">CS3235 Computer Security</option>
                            <option value="CS3236 Introduction to Information Theory">CS3236 Introduction to Information Theory</option>
                            <option value="CS3240 Interaction Design">CS3240 Interaction Design</option>
                            <option value="CS3241 Computer Graphics">CS3241 Computer Graphics</option>
                            <option value="CS3242 3D Modelling and Animation">CS3242 3D Modelling and Animation</option>
                            <option value="CS3243 Introduction to Artificial Intelligence">CS3243 Introduction to Artificial Intelligence</option>
                            <option value="CS3244 Machine Learning">CS3244 Machine Learning</option>
                            <option value="CS3245 Information Retrieval">CS3245 Information Retrieval</option>
                            <option value="CS3247 Game Development">CS3247 Game Development</option>
                            <option value="CS3249 User Interface Development">CS3249 User Interface Development</option>
                            <option value="CS3281 Thematic Systems Project I and CS3282 Thematic Systems Project II">CS3281 Thematic Systems Project I and CS3282 Thematic Systems Project II</option>
                            <option value="CS3283 Media Technology Project I and CS3284 Media Technology Project II">CS3283 Media Technology Project I and CS3284 Media Technology Project II</option>
                            <option value="CS4211 Formal Methods for Software Engineering">CS4211 Formal Methods for Software Engineering</option>
                            <option value="CS4212 Compiler Design">CS4212 Compiler Design</option>
                            <option value="CS4215 Programming Language Implementation">CS4215 Programming Language Implementation</option>
                            <option value="CS4218 Software Testing">CS4218 Software Testing</option>
                            <option value="CS4221 Database Applications Design and Tuning">CS4221 Database Applications Design and Tuning</option>
                            <option value="CS4222 Wireless Computing">CS4222 Wireless Computing</option>
                            <option value="CS4223 Multi-core Architecture">CS4223 Multi-core Architecture</option>
                            <option value="CS4224 Distributed Databases">CS4224 Distributed Databases</option>
                            <option value="CS4226 Internet Architecture">CS4226 Internet Architecture</option>
                            <option value="CS4231 Parallel and Distributed Algorithms">CS4231 Parallel and Distributed Algorithms</option>
                            <option value="CS4232 Theory of Computation">CS4232 Theory of Computation</option>
                            <option value="CS4234 Optimisation Algorithms">CS4234 Optimisation Algorithms</option>
                            <option value="CS4236 Cryptography Theory and Practice">CS4236 Cryptography Theory and Practice</option>
                            <option value="CS4238 Computer Security Practices">CS4238 Computer Security Practices</option>
                            <option value="CS4242 Social Media Computing">CS4242 Social Media Computing</option>
                            <option value="CS4244 Knowledge-Based Systems">CS4244 Knowledge-Based Systems</option>
                            <option value="CS4246 AI Planning and Decision Making">CS4246 AI Planning and Decision Making</option>
                            <option value="CS4247 Graphics Rendering Techniques">CS4247 Graphics Rendering Techniques</option>
                            <option value="CS4248 Natural Language Processing">CS4248 Natural Language Processing</option>
                            <option value="CS4249 Phenomena and Theories of HCI">CS4249 Phenomena and Theories of HCI</option>
                            <option value="CS4274 Mobile and Multimedia Networking">CS4274 Mobile and Multimedia Networking</option>
                            <option value="CS4344 Network and Mobile Gaming">CS4344 Network and Mobile Gaming</option>
                            <option value="CS4347 Sound and Music Computing">CS4347 Sound and Music Computing</option>
                            <option value="CS4350 Game Development Projects">CS4350 Game Development Projects</option>
                            <option value="IS1103/FC Computing and Society">IS1103/FC Computing and Society</option>
                            <option value="IS4010 Industry Internship Programme">IS4010 Industry Internship Programme</option>
                            <option value="LSM1301 General Biology">LSM1301 General Biology</option>
                            <option value="LSM1302 Genes and Society">LSM1302 Genes and Society</option>
                            <option value="MA1101R Linear Algebra I">MA1101R Linear Algebra I</option>
                            <option value="MA1301/FC/X Introductory Mathematics or A-Level Mathematics">MA1301/FC/X Introductory Mathematics or A-Level Mathematics</option>
                            <option value="MA2213 Numerical Analysis I">MA2213 Numerical Analysis I</option>
                            <option value="MA2214 Combinatorics and Graph">MA2214 Combinatorics and Graph</option>
                            <option value="MA1521 Calculus for Computing">MA1521 Calculus for Computing</option>
                            <option value="NOC or iLead">NOC or iLead</option>
                            <option value="PC1141 Physics I Introduction to Classical Mechanics">PC1141 Physics I Introduction to Classical Mechanics</option>
                            <option value="PC1142 Physics II Introduction to Thermodynamics and Optics">PC1142 Physics II Introduction to Thermodynamics and Optics</option>
                            <option value="PC1143 Physics III Introduction to Electricity & Magnetism">PC1143 Physics III Introduction to Electricity & Magnetism</option>
                            <option value="PC1144 Physics IV Introduction to Modern Physics">PC1144 Physics IV Introduction to Modern Physics</option>
                            <option value="PC1221 Fundamentals of Physics I or PC1222 Fundamentals of Physics II or A-Level Physics">PC1221 Fundamentals of Physics I or PC1222 Fundamentals of Physics II or A-Level Physics</option>
                            <option value="PC1221 Fundamentals of Physics I">PC1221 Fundamentals of Physics I</option>
                            <option value="PC1222 Fundamentals of Physics II">PC1222 Fundamentals of Physics II</option>
                            <option value="PC1432 Physics IIE">PC1432 Physics IIE</option>
                            <option value="ST2131 Probability">ST2131 Probability</option>
                            <option value="ST2132 Mathematical Statistics">ST2132 Mathematical Statistics</option>
                            <option value="ST2334 Probability and Statistics">ST2334 Probability and Statistics</option>
                        </select>

                    <input name="submit" type="submit" value="Get Selected Values">
            </form>    
        </div></div>
<!--
       <div id="mainbody">
            <div id="bluebox2">
                <h1>Completed Modules</h1>
                <div class="ui-widget">
                    <form id="testform" action="pg3.php">
                        <select id="steps_number">
                            <option data-group='steps_number' value='0'>--------------- Number Of Completed Modules --------------</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                        </select>
                        <div id="inputBoxes"> </div>
                        <input type="submit" name="submit" value="NEXT" class="btn-login"><br>
                    
                    <button onclick="pg3.html">Next</button>
                    <div class="form-input">
                        <label for="mod"></label>
                        <input id="mod" type="text" name="username" placeholder="Enter Completed Modules">
                    </div>
                    <div class="form-input">
                        <label for="mods"></label>
                        <input id="mods" type="text" name="username" placeholder="Enter Completed Modules">
                    </div>
                    <div class="form-input">
                        <label for="modss"></label>
                        <input id="modss" type="text" name="username" placeholder="Enter Completed Modules">
                    </div>
                    <div class="form-input">
                        <label for="modsss"></label>
                        <input id="modsss" type="text" name="username" placeholder="Enter Completed Modules">
                    </div>
                    <div class="form-input">
                        <label for="modssss"></label>
                        <input id="modssss" type="text" name="username" placeholder="Enter Completed Modules">
                    </div>   
                    <input type="submit" name="submit" value="NEXT" class="btn-login"><br>

                    Faculty: <?php echo $_POST["Faculty"]; ?>!<br />

                    Majors: <?php echo $_POST["Majors"]; ?>!<br />

                    Specialization: <?php echo $_POST["Specialization"]; ?>!<br />

                    <div id="form_area">
                        <select id="one">
                            <option data-group='Completed Modules' value='0'>---------------- Completed Modules -----------------</option>
                            <option value="CM1121 Organic Chemistry I">CM1121 Organic Chemistry I</option>
                            <option value="CM1131 Physical Chemistry I">CM1131 Physical Chemistry I</option>
                            <option value="CM1417 Fund. of Chemistry">CM1417 Fund. of Chemistry</option>
                            <option value="CP3200 Internship and CP3202 Internship II">CP3200 Internship and CP3202 Internship II</option>
                            <option value="CP3200 Internship and an Industry Course">CP3200 Internship and an Industry Course</option>
                            <option value="CP3880 Advanced Technology Attachment Programme">CP3880 Advanced Technology Attachment Programme</option>
                            <option value="CP4101 BComp Dissertation">CP4101 BComp Dissertation</option>
                            <option value="CS1010 Programming Methodology">CS1010 Programming Methodology</option>
                            <option value="CS1020 Data Structures and Algorithms I">CS1020 Data Structures and Algorithms I</option>
                            <option value="CS1231 Discrete Structures">CS1231 Discrete Structures</option>
                            <option value="CS2010 Data Structures and Algorithms II">CS2010 Data Structures and Algorithms II</option>
                            <option value="CS2100 Computer Organisation">CS2100 Computer Organisation</option>
                            <option value="CS2101 Effective Communication for Computing Professionals">CS2101 Effective Communication for Computing Professionals</option>
                            <option value="CS2102 Database Systems">CS2102 Database Systems</option>
                            <option value="CS2103/T Software Engineering (CFM)">CS2103/T Software Engineering (CFM)</option>
                            <option value="CS2104 Programming Language Concepts">CS2104 Programming Language Concepts</option>
                            <option value="CS2105 Introduction to Computer Networks">CS2105 Introduction to Computer Networks</option>
                            <option value="CS2106 Introduction to Operating Systems">CS2106 Introduction to Operating Systems</option>
                            <option value="CS2107 Introduction to Information Security">CS2107 Introduction to Information Security</option>
                            <option value="CS3103 Computer Networks Practice">CS3103 Computer Networks Practices</option>
                            <option value="CS3201 Software Engineering Project I and CS3202 Software Engineering Project II">CS3201 Software Engineering Project I and CS3202 Software Engineering Project II</option>
                            <option value="CS3210 Parallel Computing">CS3210 Parallel Computing</option>
                            <option value="CS3213 Software Systems Design">CS3213 Software Systems Design</option>
                            <option value="CS3216 Software Product Engineering for Digital Markets and CS3217 Software Engineering on Modern Application Platforms">CS3216 Software Product Engineering for Digital Markets and CS3217 Software Engineering on Modern Application Platforms</option>
                            <option value="CS3223 Database Systems Implementation">CS3223 Database Systems Implementation</option>
                            <option value="CS3230 Design and Analysis of Algorithms (CFM)">CS3230 Design and Analysis of Algorithms (CFM)</option>
                            <option value="CS3235 Computer Security">CS3235 Computer Security</option>
                            <option value="CS3236 Introduction to Information Theory">CS3236 Introduction to Information Theory</option>
                            <option value="CS3240 Interaction Design">CS3240 Interaction Design</option>
                            <option value="CS3241 Computer Graphics">CS3241 Computer Graphics</option>
                            <option value="CS3242 3D Modelling and Animation">CS3242 3D Modelling and Animation</option>
                            <option value="CS3243 Introduction to Artificial Intelligence">CS3243 Introduction to Artificial Intelligence</option>
                            <option value="CS3244 Machine Learning">CS3244 Machine Learning</option>
                            <option value="CS3245 Information Retrieval">CS3245 Information Retrieval</option>
                            <option value="CS3247 Game Development">CS3247 Game Development</option>
                            <option value="CS3249 User Interface Development">CS3249 User Interface Development</option>
                            <option value="CS3281 Thematic Systems Project I and CS3282 Thematic Systems Project II">CS3281 Thematic Systems Project I and CS3282 Thematic Systems Project II</option>
                            <option value="CS3283 Media Technology Project I and CS3284 Media Technology Project II">CS3283 Media Technology Project I and CS3284 Media Technology Project II</option>
                            <option value="CS4211 Formal Methods for Software Engineering">CS4211 Formal Methods for Software Engineering</option>
                            <option value="CS4212 Compiler Design">CS4212 Compiler Design</option>
                            <option value="CS4215 Programming Language Implementation">CS4215 Programming Language Implementation</option>
                            <option value="CS4218 Software Testing">CS4218 Software Testing</option>
                            <option value="CS4221 Database Applications Design and Tuning">CS4221 Database Applications Design and Tuning</option>
                            <option value="CS4222 Wireless Computing">CS4222 Wireless Computing</option>
                            <option value="CS4223 Multi-core Architecture">CS4223 Multi-core Architecture</option>
                            <option value="CS4224 Distributed Databases">CS4224 Distributed Databases</option>
                            <option value="CS4226 Internet Architecture">CS4226 Internet Architecture</option>
                            <option value="CS4231 Parallel and Distributed Algorithms">CS4231 Parallel and Distributed Algorithms</option>
                            <option value="CS4232 Theory of Computation">CS4232 Theory of Computation</option>
                            <option value="CS4234 Optimisation Algorithms">CS4234 Optimisation Algorithms</option>
                            <option value="CS4236 Cryptography Theory and Practice">CS4236 Cryptography Theory and Practice</option>
                            <option value="CS4238 Computer Security Practices">CS4238 Computer Security Practices</option>
                            <option value="CS4242 Social Media Computing">CS4242 Social Media Computing</option>
                            <option value="CS4244 Knowledge-Based Systems">CS4244 Knowledge-Based Systems</option>
                            <option value="CS4246 AI Planning and Decision Making">CS4246 AI Planning and Decision Making</option>
                            <option value="CS4247 Graphics Rendering Techniques">CS4247 Graphics Rendering Techniques</option>
                            <option value="CS4248 Natural Language Processing">CS4248 Natural Language Processing</option>
                            <option value="CS4249 Phenomena and Theories of HCI">CS4249 Phenomena and Theories of HCI</option>
                            <option value="CS4274 Mobile and Multimedia Networking">CS4274 Mobile and Multimedia Networking</option>
                            <option value="CS4344 Network and Mobile Gaming">CS4344 Network and Mobile Gaming</option>
                            <option value="CS4347 Sound and Music Computing">CS4347 Sound and Music Computing</option>
                            <option value="CS4350 Game Development Projects">CS4350 Game Development Projects</option>
                            <option value="IS1103/FC Computing and Society">IS1103/FC Computing and Society</option>
                            <option value="IS4010 Industry Internship Programme">IS4010 Industry Internship Programme</option>
                            <option value="LSM1301 General Biology">LSM1301 General Biology</option>
                            <option value="LSM1302 Genes and Society">LSM1302 Genes and Society</option>
                            <option value="MA1101R Linear Algebra I">MA1101R Linear Algebra I</option>
                            <option value="MA1301/FC/X Introductory Mathematics or A-Level Mathematics">MA1301/FC/X Introductory Mathematics or A-Level Mathematics</option>
                            <option value="MA2213 Numerical Analysis I">MA2213 Numerical Analysis I</option>
                            <option value="MA2214 Combinatorics and Graph">MA2214 Combinatorics and Graph</option>
                            <option value="MA1521 Calculus for Computing">MA1521 Calculus for Computing</option>
                            <option value="NOC or iLead">NOC or iLead</option>
                            <option value="PC1141 Physics I Introduction to Classical Mechanics">PC1141 Physics I Introduction to Classical Mechanics</option>
                            <option value="PC1142 Physics II Introduction to Thermodynamics and Optics">PC1142 Physics II Introduction to Thermodynamics and Optics</option>
                            <option value="PC1143 Physics III Introduction to Electricity & Magnetism">PC1143 Physics III Introduction to Electricity & Magnetism</option>
                            <option value="PC1144 Physics IV Introduction to Modern Physics">PC1144 Physics IV Introduction to Modern Physics</option>
                            <option value="PC1221 Fundamentals of Physics I or PC1222 Fundamentals of Physics II or A-Level Physics">PC1221 Fundamentals of Physics I or PC1222 Fundamentals of Physics II or A-Level Physics</option>
                            <option value="PC1221 Fundamentals of Physics I">PC1221 Fundamentals of Physics I</option>
                            <option value="PC1222 Fundamentals of Physics II">PC1222 Fundamentals of Physics II</option>
                            <option value="PC1432 Physics IIE">PC1432 Physics IIE</option>
                            <option value="ST2131 Probability">ST2131 Probability</option>
                            <option value="ST2132 Mathematical Statistics">ST2132 Mathematical Statistics</option>
                            <option value="ST2334 Probability and Statistics">ST2334 Probability and Statistics</option>
                        </select>
                    </div><br>

                    <input type="button" id="clon" value="Add completed module"/><br>
                    <input type="submit" name="submit" value="NEXT" class="btn-login"><br>
                    </form>
                </div>
            </div>
        </div> 
-->
        <div id="footer"></div>
    </div>
</body>
</html>