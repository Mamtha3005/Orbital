<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   
    <title>pg 2</title>
    
    <link rel="stylesheet" href="pg2.css" >
    <link rel="stylesheet" type="text/css" href="responsive.css" media="screen and (max-width: 800px)"> 
    <!--to make the webpg responsive-->
    <link rel="stylesheet" type="text/css"  href="menu.css"> <!-- for the menu -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head> 
<body>  
    
      <div id="header"><center>GradList</center></div>
        <div id="menu">
            <ul>
                <center>
                <li> <a href="AboutPage.html">About</a></li> 
                <li> <a href="help.html">Help</a></li>
                <li> <a href="newcontactpg.html">Contact</a></li> </center>
            </ul>
        </div>
    
        <div id="warning">
                <?php
                if($_POST["Faculty"] == "select"){
                    $message1= "Please go back to the previous page to choose a faculty.";
                    echo "<script type='text/javascript'>alert('$message1');</script>";
                }        
                if($_POST["Majors"] == "select"){
                    $message2= "Please go back to the previous page to choose a major.";
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                }
                if($_POST["Specialization"] == "select"){
                    $message3= "Please go back to the previous page to choose a specialization.";
                    echo "<script type='text/javascript'>alert('$message3');</script>";
                }
                ?>  
        </div>      
        <div class="container">
            <div id="form">
            <form action="pg3.php" method="post">

        <div id = "dropBox">
            
            <select id = "Faculty" name = "Faculty" >
                  <option value= "<?php echo $_POST["Faculty"]?>"><?php echo $_POST["Faculty"]?></option>
            </select><br>
            <select id = "Majors" name = "Majors" >
                  <option value= "<?php echo $_POST["Majors"]?>"><?php echo $_POST["Majors"]?></option>
            </select><br>                
            <select id = "Specialization" name = "Specialization" >
                  <option value= "<?php echo $_POST["Specialization"]?>"><?php echo $_POST["Specialization"]?></option>
            </select><br>
            
        </div>
        
            
            <div class="bluebox2">
                <h2> Completed Modules</h2>
                    <!----- Select Option Fields Starts Here ----->
                    <label class="heading">Please select all completed and exempted modules.<br>To select multiple modules press ctrl+left click:<br></label>
                    <select multiple name="Color[]" id = "options" required>
                        <option value="AlvlMath">A level Mathematics</option>
                        <option value="AlvlPhy">A level Physics</option>
                        <option value="BT1101">BT1101 Introduction to Business Analytics</option>
                        <option value="BT2101">BT2101 IT and Decision Making</option>
                        <option value="BT2102">BT2102 Data Management and Visualisation</option>
                        <option value="BT3101">BT3101 Business Analytics Capstone Project</option>
                        <option value="BT3102">BT3102 Computational Methods for Business Analytics</option>
                        <option value="BT3103">BT3103 Application Systems Development for Business Analytics</option>
                        <option value="CG1001">CG1001 Introduction to Computer Engineering</option>
                        <option value="CG1108">CG1108 Electrical Engineering</option>
                        <option value="CG2023">CG2023 Signals & Systems</option>
                        <option value="CG2271">CG2271 Real-time Operating Systems</option>
                        <option value="CG3002">CG3002 Embedded Systems Design Project</option>
                        <option value="CG3207">CG3207 Computer Architecture</option>
                        <option value="CM1101">CM1101 Principles of Modern Chemistry</option>
                        <option value="CM1111">CM1111 Inorganic Chemistry 1</option>
                        <option value="CM1121">CM1121 Organic Chemistry I</option>
                        <option value="CM1131">CM1131 Physical Chemistry I</option>
                        <option value="CM1161">CM1161 Principles of Chemical Process I</option>
                        <option value="CM1191">CM1191 Experiments in Chemistry 1</option>
                        <option value="CM1401">CM1401 Chemistry for Life Sciences</option>
                        <option value="CM1402">CM1402 General Chemistry</option>
                        <option value="CM1417">CM1417 Fund. of Chemistry</option>
                        <option value="CM1501">CM1501 Organic Chemistry for Engineers</option>
                        <option value="CM1502">CM1502 General and Physical Chemistry for Engineers</option>
                        <option value="CP3200+CP3202">CP3200 Internship and CP3202 Internship II</option>
                        <option value="CP3200+Industry Course">CP3200 Internship and an Industry Course</option>
                        <option value="CP3880">CP3880 Advanced Technology Attachment Programme</option>
                        <option value="CP410">CP4101 BComp Dissertation</option>
                        <option value="CS1010/J/S/E/FC/X">CS1010/J/S/E/FC/X Programming Methodology</option>
                        <option value="CS1020">CS1020 Data Structures and Algorithms I</option>
                        <option value="CS1101S">CS1101S Programming Methodology</option>
                        <option value="CS1231">CS1231 Discrete Structures</option>
                        <option value="CS2010">CS2010 Data Structures and Algorithms II</option>
                        <option value="CS2100">CS2100 Computer Organisation</option>
                        <option value="CS2101">CS2101 Effective Communication for Computing Professionals</option>
                        <option value="CS2102">CS2102 Database Systems</option>
                        <option value="CS2103">CS2103 Software Engineering</option>
                        <option value="CS2103T">CS2103T Software Engineering</option>
                        <option value="CS2104">CS2104 Programming Language Concepts</option>
                        <option value="CS2105">CS2105 Introduction to Computer Networks</option>
                        <option value="CS2106">CS2106 Introduction to Operating Systems</option>
                        <option value="CS2107">CS2107 Introduction to Information Security</option>
                        <option value="CS2108">CS2108 Introduction to Media Computing</option>
                        <option value="CS3103">CS3103 Computer Networks Practices</option>
                        <option value="CS3201+CS3202">CS3201 Software Engineering Project I and CS3202 Software Engineering Project II</option>
                        <option value="CS3205">CS3205 Information Security Capstone Project</option>
                        <option value="CS3210">CS3210 Parallel Computing</option>
                        <option value="CS3211">CS3211 Parallel and Concurrent Programming</option>
                        <option value="CS3213">CS3213 Software Systems Design</option>
                        <option value="CS3216+CS3217">CS3216 Software Product Engineering for Digital Markets and CS3217 Software Engineering on Modern Application Platforms</option>
                        <option value="CS3223">CS3223 Database Systems Implementation</option>
                        <option value="CS3230">CS3230 Design and Analysis of Algorithms (CFM)</option>
                        <option value="CS3235">CS3235 Computer Security</option>
                        <option value="CS3236">CS3236 Introduction to Information Theory</option>
                        <option value="CS3241">CS3241 Computer Graphics</option>
                        <option value="CS3242">CS3242 3D Modelling and Animation</option>
                        <option value="CS3243">CS3243 Introduction to Artificial Intelligence</option>
                        <option value="CS3244">CS3244 Machine Learning</option>
                        <option value="CS3245">CS3245 Information Retrieval</option>
                        <option value="CS3247">CS3247 Game Development</option>
                        <option value="CS3281+CS3282">CS3281 Thematic Systems Project I and CS3282 Thematic Systems Project II</option>
                        <option value="CS3283+CS3284">CS3283 Media Technology Project I and CS3284 Media Technology Project II</option>
                        <option value="DSC3214">DSC3214 Introduction To Optimisation</option>
                        <option value="DSC3216">DSC3216 Forecasting for Managerial Decisions</option>
                        <option value="DSC3224">DSC3224 Dynamic Pricing and Revenue Management</option>
                        <option value="CS4211">CS4211 Formal Methods for Software Engineering</option>
                        <option value="CS4212">CS4212 Compiler Design</option>
                        <option value="CS4215">CS4215 Programming Language Implementation</option>
                        <option value="CS4218">CS4218 Software Testing</option>
                        <option value="CS4221">CS4221 Database Applications Design and Tuning</option>
                        <option value="CS4222">CS4222 Wireless Computing</option>
                        <option value="CS4223">CS4223 Multi-core Architecture</option>
                        <option value="CS4224">CS4224 Distributed Databases</option>
                        <option value="CS4226">CS4226 Internet Architecture</option>
                        <option value="CS4231">CS4231 Parallel and Distributed Algorithms</option>
                        <option value="CS4232">CS4232 Theory of Computation</option>
                        <option value="CS4234">CS4234 Optimisation Algorithms</option>
                        <option value="CS4236">CS4236 Cryptography Theory and Practice</option>
                        <option value="CS4238">CS4238 Computer Security Practices</option>
                        <option value="CS4242">CS4242 Social Media Computing</option>
                        <option value="CS4244">CS4244 Knowledge-Based Systems</option>
                        <option value="CS4246">CS4246 AI Planning and Decision Making</option>
                        <option value="CS4247">CS4247 Graphics Rendering Techniques</option>
                        <option value="CS4248">CS4248 Natural Language Processing</option>
                        <option value="CS4274">CS4274 Mobile and Multimedia Networking</option>
                        <option value="CS4350">CS4350 Game Development Projects</option>
                        <option value="EC1301">EC1301 Principles of Economics</option>
                        <option value="EE2020">EE2020 Digital Fundamentals</option>
                        <option value="EE2021">EE2021 Devices & Circuits</option>
                        <option value="EE2024">EE2024 Programming for Computer Interfaces</option>
                        <option value="EE3031">EE3031 Innovation & Enterprise I</option>
                        <option value="EE3204">EE3204 Computer Communications Networks I</option>
                        <option value="EG2401">EG2401 Engineering Professionalism</option>
                        <option value="EG3601">EG3601 Industrial Attachment Programme</option>
                        <option value="ES2660">ES2660 Communicating in the Information Age</option>
                        <option value="GEH1000">GEH1000 Exp Cultural Diversty In ASEAN</option>
                        <option value="GEH1001">GEH1001 Globalisation and New Media</option>
                        <option value="GEH1002">GEH1002 Economic Issues in Dev World</option>
                        <option value="GEH1003">GEH1003 Facing Global Environmental Challenges</option>
                        <option value="GEH1004">GEH1004 Chinese Heritage: Hist & Lit</option>
                        <option value="GEH1005">GEH1005 Crime Fiction in Eng & Chinese</option>
                        <option value="GEH1006">GEH1006 Chinese Music, Language and Literature (in English)</option>
                        <option value="GEH1007">GEH1007 Asian Cinema: The Silent Era</option>
                        <option value="GEH1008">GEH1008 Nations & Nat'lisms in S Asia</option>
                        <option value="GEH1009">GEH1009 Framing Bollywood: Unpacking The Magic</option>
                        <option value="GEH1010">GEH1010 Beasts, People and Wild Environments in South Asia</option>
                        <option value="GEH1011">GEH1011 Film and History</option>
                        <option value="GEH1013">GEH1013 Pirates, Oceans and the Maritime World</option>
                        <option value="GEH1014">GEH1014 Samurai, Geisha, Yakuza as Self or Other</option>
                        <option value="GEH1015">GEH1015 Cultural Borrowing: Japan and China</option>
                        <option value="GEH1016">GEH1016 Understanding Consumption</option>
                        <option value="GEH1017">GEH1017 Computation & Machine: Ancient to Modern</option>
                        <option value="GEH1018">GEH1018 A Brief History of Science</option>
                        <option value="GEH1019">GEH1019 Food & Health</option>
                        <option value="GEH1020">GEH1020 Our Atmosphere: A Chemical Perspective</option>
                        <option value="GEH1021">GEH1021 Rethinking Technology, Origins And People</option>
                        <option value="GEH1022">GEH1022 Geopolitics:Geographies of War & Peace</option>
                        <option value="GEH1023">GEH1023 Exploring Chinese Cinema: Shanghai-Hong Kong-Singapore</option>
                        <option value="GEH1024">GEH1024 International Relations of Asia</option>
                        <option value="GEH1025">GEH1025 Global Environmental Issues</option>
                        <option value="GEH1025T">GEH1025 Global Environmental Issues</option>
                        <option value="GEH1026">GEH1026 Drugs and Society</option>
                        <option value="GEH1027">GEH1027 Einstein's Universe & Quantum Weirdness</option>
                        <option value="GEH1028">GEH1028 The Emerging Nanoworld</option>
                        <option value="GEH1029">GEH1029 Great Ideas in Contemporary Physics</option>
                        <option value="GEH1031">GEH1031 Understanding the Universe</option>
                        <option value="GEH1032">GEH1032 Modern Technology in Medicine and Health</option>
                        <option value="GEH1033">GEH1033 How the Ocean Works</option>
                        <option value="GEH1034">GEH1034 Clean Energy and Storage</option>
                        <option value="GEH1035">GEH1035 Physical Qns from Everyday Life</option>
                        <option value="GEH1036">GEH1036 Living with Mathematics</option>
                        <option value="GEH1037">GEH1037 Money: Diverse Perspectives</option>
                        <option value="GEH1038">GEH1038 Art and Identity</option>
                        <option value="GEH1039">GEH1039 The Art of Rituals and Recreation</option>
                        <option value="GEH1040">GEH1040 Exploration in Musical Production</option>
                        <option value="GEH1041">GEH1041 Engaging the natural environment in ASEAN</option>
                        <option value="GEH1042">GEH1042 The Search for Life on Other Worlds</option>
                        <option value="GEH1043">GEH1043 Microbes which Changed Human History</option>
                        <option value="GEH1044">GEH1044 Understanding Globalisation</option>
                        <option value="GEH1045">GEH1045 World Religions</option>
                        <option value="GEH1046">GEH1046 Visual images</option>
                        <option value="GEH1047">GEH1047 Social and Cultural Studies through Music</option>
                        <option value="GEH1048">GEH1048 Technology and Artistic Innovators</option>
                        <option value="GEH1049">GEH1049 Public Health in Action</option>
                        <option value="GEH1050">GEH1050 Plants and Society</option>
                        <option value="GEH1051">GEH1051 Narrative</option>
                        <option value="GEH1052">GEH1052 Standard English Across Cultures</option>
                        <option value="GEH1053">GEH1053 Film Art and Human Concerns</option>
                        <option value="GEH1054">GEH1054 Names as Markers of Socio-cultural Identity</option>
                        <option value="GEH1055">GEH1055 Religion and Film</option>
                        <option value="GEH1056">GEH1056 Understanding Contemporary Cultures</option>
                        <option value="GEH1057">GEH1057 Materials: The Enabling Substance of Civilization</option>
                        <option value="GEH1058">GEH1058 The Theatre Experience</option>
                        <option value="GEH1059">GEH1059 Living in the Nuclear World</option>
                        <option value="GEH1060">GEH1060 Social History of the Piano</option>
                        <option value="GEH1061">GEH1061 Representation and Media</option>
                        <option value="GER1000">GER1000 Quantitative Reasoning</option>
                        <option value="GES1000">GES1000 Labour Law In Singapore</option>
                        <option value="GES1001">GES1001 Employee Management In S'pore</option>
                        <option value="GES1002">GES1002 Global EC Dimensions of S'pore</option>
                        <option value="GES1003">GES1003 Changing Landscapes of Singapore</option>
                        <option value="GES1004">GES1004 The Biophysical Env of S'pore</option>
                        <option value="GES1005">GES1005 Everyday Life of Chinese Singaporeans: Past & Present (taught in English)</option>
                        <option value="GES1006">GES1006 Singapore and India: Emerging Relations</option>
                        <option value="GES1007">GES1007 South Asia in Singapore</option>
                        <option value="GES1008">GES1008 Ethnicity and Nation-Building: Singapore and Malaysia</option>
                        <option value="GES1009">GES1009 Chinese Businesses in Singapore & Beyond</option>
                        <option value="GES1010">GES1010 Nation-Building in Singapore</option>
                        <option value="GES1011">GES1011 The Evolution of a Global City-State</option>
                        <option value="GES1012">GES1012 Popular Culture in Singapore</option>
                        <option value="GES1013">GES1013 Singapore Urban History & Architecture</option>
                        <option value="GES1014">GES1014 Islam and Contemporary Malay Society</option>
                        <option value="GES1015">GES1015 Singapore and Japan: Historical and Contemporary Relationships</option>
                        <option value="GES1016">GES1016 Contemporary Social Issues in Singapore</option>
                        <option value="GES1017">GES1017 Building a Dynamic Singapore - Role of Engineers</option>
                        <option value="GES1018">GES1018 Singapore, Asia and American Power</option>
                        <option value="GES1019">GES1019 Managing Singapore's Built Environment</option>
                        <option value="GES1020">GES1020 Western Music within a Singaporean Context</option>
                        <option value="GES1021">GES1021 Natural Heritage of Singapore</option>
                        <option value="GES1022">GES1022 The Singlish Controversy</option>
                        <option value="GES1023">GES1023 Representing Singapore</option>
                        <option value="GES1024">GES1024 Real Estate Development & Investment Law</option>
                        <option value="GES1025">GES1025 Singapore Literature in English: Selected Texts</option>
                        <option value="GES1026">GES1026 Urban Planning in Singapore</option>
                        <option value="GES1027">GES1027 Taxation and the Singapore Miracle</option>
                        <option value="GES1028">GES1028 Singapore Society</option>
                        <option value="GES1029">GES1029 Singapore Film: Performance of Identity</option>
                        <option value="GES1030">GES1030 Singapore and the Sea</option>
                        <option value="GES1031">GES1031 Culture and Communication in Singapore</option>
                        <option value="GES1032">GES1032 Singapore, the Campaign Nation</option>
                        <option value="GES1033">GES1033 Who moved my OB markers?</option>
                        <option value="GES1034">GES1034 We the Citizens - Understanding Singapore's Politics?</option>
                        <option value="GET1000">GET1000 Ethics at Work: Rhyme, Reason and Reality</option>
                        <option value="GET1001">GET1001 Seeing the World Through Maps</option>
                        <option value="GET1002">GET1002 Bridging East and West: Exploring Chinese Communication</option>
                        <option value="GET1003">GET1003 Home</option>
                        <option value="GET1004">GET1004 Cyber Security</option>
                        <option value="GET1005">GET1005 Evaluating Academic Arguments</option>
                        <option value="GET1006">GET1006 Critical Thinking in the Information Age</option>
                        <option value="GET1007">GET1007 Intellectual Property in Cyberspace</option>
                        <option value="GET1008">GET1008 Public Speaking and Critical Reasoning</option>
                        <option value="GET1009">GET1009 Gandhi and Conflict Resolution: Global Legacies</option>
                        <option value="GET1010">GET1010 Modes Of Invention</option>
                        <option value="GET1011">GET1011 Towards an Understanding of the Complex World</option>
                        <option value="GET1012">GET1012 Thinking Science on Computer</option>
                        <option value="GET1013">GET1013 Physics in the Life Sciences</option>
                        <option value="GET1014">GET1014 The Art of Science, the Science of Art</option>
                        <option value="GET1015">GET1015 Taming Chaos</option>
                        <option value="GET1016">GET1016 Understanding the Changing Global Economic Landscape</option>
                        <option value="GET1017">GET1017 Mathematical Thinking</option>
                        <option value="GET1018">GET1018 The Mathematics of Games</option>
                        <option value="GET1019">GET1019 Patrons of the Arts</option>
                        <option value="GET1020">GET1020 Darwin and Evolution</option>
                        <option value="GET1021">GET1021 Critical Thinking And Writing</option>
                        <option value="GET1022">GET1022 Understanding Your Brain</option>
                        <option value="GET1023">GET1023 Thinking Like An Economist</option>
                        <option value="GET1024">GET1024 Radiation-Scientific Understanding and Public Perception</option>
                        <option value="GET1025">GET1025 Science Fiction and Philosophy</option>
                        <option value="GET1026">GET1026 Effective Reasoning</option>
                        <option value="GET1027">GET1027 Reason and Persuasion</option>
                        <option value="GET1028">GET1028 Logic</option>
                        <option value="GET1029">GET1029 Life, the Universe, and Everything</option>
                        <option value="GET1030">GET1029 Life, the Universe, and Everything</option>
                        <option value="GET1031">GET1031 Computational Thinking</option>
                        <option value="GET1032">GET1032 Building Relationship : Theories and Practice</option>
                        <option value="GET1033">GET1033 Exploring Computational Media Literacy</option>
                        <option value="GET1035">GET1035 Critical Perspectives in Advertising</option>
                        <option value="GET1036">GET1036 The Logic of Language</option>
                        <option value="HR2002">HR2002 Human Capital in Organizations</option>
                        <option value="IE2110">IE2110 Operations Research I</option>
                        <option value="IE3120">IE3120 Manufacturing Logistics</option>
                        <option value="IS1103/FC">IS1103/FC Computing and Society</option>
                        <option value="IS1112_FC_X">IS1112/FC/X E-Business Essentials</option>
                        <option value ="IS2101">IS2101 Business and Technical Communication</option>           
                        <option value="IS2102">IS2102 Requirements Analysis and Design</option>           
                        <option value="IS2103">IS2103  Enterprise Systems Development Concepts</option>        
                        <option value="IS2104">IS2104 Software Team Dynamics</option>           
                        <option value="IS2150">IS2150 E-Business Design and Implementation</option>          
                        <option value="IS3101">IS3101 Management of Information Systems</option>          
                        <option value="IS3102">IS3102 Information Systems Development Project</option>           
                        <option value="IS3150">IS3150 Digital and New Media Marketing</option>           
                        <option value="IS3220">IS3220 Service Science</option>           
                        <option value="IS3221">IS3221 Enterprise Resource Planning Systems</option>           
                        <option value="IS3222">IS3222 IT and Customer Relationship Management</option>       
                        <option value="IS3223">IS3223 IT and Supply Chain Management</option>          
                        <option value="IS3230">IS3230 Principles of Information Security</option>       
                        <option value="IS3240">IS3240 Economics of E-Business</option>        
                        <option value="IS3241">IS3241 Enterprise Social Systems</option>        
                        <option value="IS3242">IS3242 Software Quality Management</option>           
                        <option value="IS3243">IS3243 Technology Strategy and Management</option>          
                        <option value="IS3250">IS3250  Health Informatics</option>          
                        <option value="IS3251">IS3251 Principles of Technology Entrepreneurship</option>         
                        <option value="IS3260">IS3260_Gamification for Organisations and Individuals</option>       
                        <option value="IS3261">IS3261_Mobile Apps for Enterprise</option>
                        <option value="IS4010">IS4010 Industry Internship Programme</option>
                        <option value="LSM1301">LSM1301 General Biology</option>
                        <option value="LSM1302">LSM1302 Genes and Society</option>
                        <option value="LSM1303">LSM1303 Animal Behaviour</option>
                        <option value="MA1101R">MA1101R Linear Algebra I</option>
                        <option value="MA1102R">MA1102R Calculus</option>
                        <option value="MA1104">MA1104 Multivariable Calculus</option>
                        <option value="MA1301/FC/X">MA1301/FC/X Introductory Mathematics</option>
                        <option value="MA1505">MA1505 Mathematics I</option>
                        <option value="MA1506">MA1506 Mathematics II</option>
                        <option value="MA1521">MA1521 Calculus for Computing</option>
                        <option value="MA2101">MA2101 Linear Algebra II</option>
                        <option value="MA2108">MA2108 Mathematical Analysis I</option>
                        <option value="MA2213">MA2213 Numerical Analysis I</option>
                        <option value="MA2214">MA2214 Combinatorics and Graph</option>
                        <option value="MA2501">MA2501 Differential Equations and Systems</option>
                        <option value="MKT1003X">MKT1003X Marketing</option>
                        <option value="NOC or iLead">NOC or iLead</option>
                        <option value="PC1141">PC1141 Physics I Introduction to Classical Mechanics</option>
                        <option value="PC1142">PC1142 Physics II Introduction to Thermodynamics and Optics</option>
                        <option value="PC1143">PC1143 Physics III Introduction to Electricity & Magnetism</option>
                        <option value="PC1144">PC1144 Physics IV Introduction to Modern Physics</option>
                        <option value="PC1221">PC1221 Fundamentals of Physics I</option>
                        <option value="PC1222">PC1222 Fundamentals of Physics II</option>
                        <option value="PC1421">PC1421 Physics for Life Sciences</option>
                        <option value="PC1431">PC1431 Physics IE</option>
                        <option value="PC1432">PC1432 Physics IIE</option>
                        <option value="PC1433">PC1433 Mechanics and Waves</option>
                        <option value="ST2131">ST2131 Probability</option>
                        <option value="ST2132">ST2132 Mathematical Statistics</option>
                        <option value="ST2137">ST2137 Computer Aided Data Analysis</option>
                        <option value="ST2334">ST2334 Probability and Statistics</option>
                        <option value="ST3131">ST3131 Regression Analysis</option>
                        </select>
                    <input name="submit" type="submit" value="Get Selected Values">
                </div>
            </form>    
            </div>
    </div>
        <div id="footer"></div>
</body>
</html>