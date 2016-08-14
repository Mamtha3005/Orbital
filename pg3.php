<!-- https://www.youtube.com/watch?v=_fukWxTy31M#t=1712.1226 -->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Page 3</title>
    
    <link rel="stylesheet" href="pg3.css" >
    <link rel="stylesheet" type="text/css"   href="responsive.css" media="screen and (max-width: 800px)"> 
    <!--to make the webpg responsive-->
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

        <div id="things">
        <div id="completedMods">
<!--
            Faculty: <?php echo $_POST["Faculty"] ?><br/>
            Major: <?php echo $_POST["Majors"] ?><br/>
            Specialization: <?php echo $_POST["Specialization"] ?><br/>
            <br/>
-->
            <?php
                if(isset($_POST['submit'])){
                    if($_POST['Color']) {
//                        echo "<span>Completed Modules :</span><br/>";
                        $count = 0;
                        $taken = array();
                        foreach ($_POST['Color'] as $select){
//                            echo "$select <br>" ;
                            $taken[$count]= $select;
                            $count = $count + 1;
                        }
                    }
                    else { 
                        $message="Please select at least one completed module.";
                        echo "<script type='text/javascript'> alert('$message');</script>";
                    }
                    
                }
            ?>
            <script type="text/javascript">
                var jArray= <?php echo json_encode($taken); ?>;
            </script>
        </div>
        <div id="bluebox">
            <h1>Uncompleted Modules</h1>
            <p>
            <script>
                var ACC1002X={code:"ACC1002X", name:"ACC1002X Financial Accounting",type:"ue", mc: 4, key: false};
                var AlvlMath={code:"AlvlMath", name:"A Level Mathematics",type:"math&sci", mc: 4, key: false};
                var AlvlPhy={code:"AlvlPhy", name:"A Level Physics", mc:4, type:"math&sci", key:"false"};
                var BT1101={code:"BT1101", name:"BT1101 Introduction to Business Analytics",type:"ue", mc: 4, key: false};
                var BT2101={code:"BT2101", name:"BT2101 IT and Decision Making",type:"ue", mc: 4, key: false};
                var BT2102={code:"BT2102", name:"BT2102 Data Management and Visualisation",type:"ue", mc: 4, key: false};
                var BT3101={code:"BT3101", name:"BT3101 Business Analytics Capstone Project",type:"ue", mc: 4, key: false};
                var BT3102={code:"BT3102", name:"BT3102 Computational Methods for Business Analytics",type:"ue", mc: 4, key: false};
                var BT3103={code:"BT3103", name:"BT3103 Application Systems Development for Business Analytics",type:"ue", mc: 4, key: false};
                var CG1001={code:"CG1001", name:"CG1001 Introduction to Computer Engineering",type:"ue", mc: 4, key: false};
                var CG1108={code:"CG1108", name:"CG1108 Electrical Engineering",type:"ue", mc: 4, key: false};
                var CG2023={code:"CG2023", name:"CG2023 Signals & Systems",type:"ue", mc: 4, key: false};
                var CG2271={code:"CG2271", name:"CG2271 Real-time Operating Systems",type:"ue", mc: 4, key: false};
                var CG3002={code:"CG3002", name:"CG3002 Embedded Systems Design Project",type:"ue", mc: 6, key: false};
                var CG3207={code:"CG3207", name:"CG3207 Computer Architecture",type:"ue", mc: 4, key: false};
                var CM1101={code:"CM1101", name: "CM1101 Principles of Modern Chemistry",type:"math&sci", mc: 4, key: false};
                var CM1111={code:"CM1111", name: "CM1111 Inorganic Chemistry 1",type:"math&sci", mc: 4, key: false};
                var CM1121={code:"CM1121", name: "CM1121 Organic Chemistry I",type:"math&sci", mc: 4, key: false};
                var CM1131={code:"CM1131", name: "CM1131 Physical Chemistry I",type:"math&sci", mc: 4, key: false};
                var CM1161={code:"CM1161", name: "CM1161 Principles of Chemical Process I",type:"math&sci", mc: 4, key: false};
                var CM1191={code:"CM1191", name: "CM1191 Experiments in Chemistry I",type:"math&sci", mc: 4, key: false};
                var CM1401={code:"CM1401", name: "CM1401 Chemistry for Life Sciences",type:"math&sci", mc: 4, key: false};
                var CM1402={code:"CM1402", name: "CM1402 General Chemistry",type:"math&sci", mc: 4, key: false};
                var CM1417={code:"CM1417", name: "CM1417 Fund. of Chemistry",type:"math&sci", mc: 4, key: false};
                var CM1501={code:"CM1501", name: "CM1501 Organic Chemistry for Engineers",type:"math&sci", mc: 4, key: false};
                var CM1502={code:"CM1502", name: "CM1502 General and Physical Chemistry for Engineers",type:"math&sci", mc: 4, key: false};
                var CP3200_CP3202={code: "CP3200+CP3202", name: "CP3200 Internship and CP3202 Internship II", type: "IE", mc: 12, key: false};
                var CP3200_IndustryCourse={code:"CP3200+IndustryCourse", name:"CP3200 Internship and an Industry Course", type: "IE", mc: 12, key: false};
                var CP3880={code: "CP3880", name: "CP3880 Advanced Technology Attachment Programme ", type: "IE", mc: 12, key: false};
                var CP4101={code:"CP4101", name:"CP4101 BComp Dissertation", type: "IE", mc: 12, key: false};
                var CS1010={code:"CS1010/J/S/E/FC/X", name:"CS1010 Programming Methodology", type:"core", mc: 4, key: false};
                var CS1020={code:"CS1020", name:"CS1020 Data Structures and Algorithms I", type:"core", mc: 4, key: false};
                var CS1101S={code:"CS1101S", name:"CS1101S Programming Methodology", type:"core", mc: 5, key: false};
                var CS1231={code:"CS1231", name:"CS1231 Discrete Structures", type:"core", mc: 4, key: false};
                var CS2010={code:"CS2010", name:"CS2010 Data Structures and Algorithms II", type:"core", mc: 4, key: false};
                var CS2100={code:"CS2100", name:"CS2100 Computer Organisation", type:"core", mc: 4, key: false};
                var CS2101={code:"CS2101", name:"CS2101 Effective Communication for Computing Professionals",type:"IT", mc: 4, key: false};
                var CS2102={code:"CS2102", name:"CS2102 Database Systems", type: "data", mc: 4, key: false};
                var CS2103T={code:"CS2103T", name:"CS2103T Software Engineering", type:"core", mc: 4, key: false};
                var CS2103={code:"CS2103", name:"CS2103 Software Engineering", type:"core", mc: 4, key: false};
                var CS2104={code:"CS2104", name: "CS2104 Programming Language Concepts", type: "pl", mc: 4, key: false};
                var CS2105={code:"CS2105", name:"CS2105 Introduction to Computer Networks", type:"core", mc: 4, key: false};
                var CS2106={code:"CS2106", name:"CS2106 Introduction to Operating Systems", type:"core", mc: 4, key: false}; 
                var CS2107={code:"CS2107", name:"CS2107 Introduction to Information Security", type: "CSec", mc: 4, key: false};
                var CS2108={code:"CS2108", name:"CS2108 Introduction to Media Computing", type: "mir", mc: 4, key: false};
                var CS3103={code:"CS3103", name:"CS3103 Computer Networks Practice", type: "nds", mc: 4, key: false};
                var CS3201_CS3202={code:"CS3201+CS3202", name: "CS3201 Software Engineering Project I and CS3202 Software Engineering Project II",type:"b&d_teamPrj", mc: 8, key: false};
                var CS3205={code:"CS3205", name:"CS3205 Information Security Capstone Project",type:"ue", mc: 4, key: false};
                var CS3210={code:"CS3210", name: "CS3210 Parallel Computing", type: "pc", mc: 4, key: false};
                var CS3211_pc={code:"CS3211_pc", name: "CS3211 Parallel and Concurrent Programming", type: "pc", mc: 4, key: false};
                var CS3211_pl={code:"CS3211_pl", name:"CS3211 Parallel and Concurrent Programming", type: "pl", mc: 4, key: false};
                var CS3213={code:"CS3213", name:"CS3213 Software Systems Design", type: "se", mc: 4, key: false};
                var CS3216_CS3217={code:"CS3216+CS3217", name: "CS3216 Software Product Engineering for Digital Markets and CS3217 Software Engineering on Modern Application Platforms",type:"b&d_teamPrj", mc: 8, key: false};
                var CS3223={code:"CS3223", name:"CS3223 Database Systems Implementation", type: "data", mc: 4, key: false};
                var CS3230={code:"CS3230", name:"CS3230 Design and Analysis of Algorithms",type:"core", mc: 4, key: false}; 
                var CS3235={code:"CS3235", name:"CS3235 Computer Security", type: "CSec", mc: 4, key: false};
                var CS3236={code:"CS3236", name:"CS3236 Introduction to Information Theory", type: "A&T", mc: 4, key: false}; 
                var CS3241={code:"CS3241", name:"CS3241 Computer Graphics", type: "CGG", mc: 4, key: false};
                var CS3242={code:"CS3242", name:"CS3242 3D Modelling and Animation", type: "CGG", mc: 4, key: false};
                var CS3243={code:"CS3243", name:"CS3243 Introduction to Artificial Intelligence", type: "AI", mc: 4, key: false};
                var CS3244={code:"CS3244", name:"CS3244 Machine Learning", type: "AI", mc: 4, key: false};
                var CS3245={code:"CS3245", name:"CS3245 Information Retrieval", type: "mir", mc: 4, key: false};
                var CS3247={code:"CS3247", name:"CS3247 Game Development", type: "CGG", mc: 4, key: false};
                var CS3281_CS3282={code:"CS3281+CS3282", name: "CS3281 Thematic Systems Project I and CS3282 Thematic Systems Project II",type:"b&d_teamPrj", mc: 8, key: false};
                var CS3283_CS3284={code:"CS3283+CS3284", name: "CS3283 Media Technology Project I and CS3284 Media Technology Project II",type:"b&d_teamPrj", mc: 8, key: false};
                var CS4211={code:"CS4211", name:"CS4211 Formal Methods for Software Engineering", type: "se", mc: 4, key: false};
                var CS4212={code:"CS4212", name:"CS4212 Compiler Design", type: "pl", mc: 4, key: false};
                var CS4215={code:"CS4215", name:"CS4215 Programming Language Implementation", type: "pl", mc: 4, key: false};
                var CS4218={code:"CS4218", name:"CS4218 Software Testing", type: "se", mc: 4, key: false}; 
                var CS4221={code:"CS4221", name:"CS4221 Database Applications Design and Tuning", type: "data", mc: 4, key: false};
                var CS4222={code:"CS4222", name:"CS4222 Wireless Computing", type: "nds", mc: 4, key: false};
                var CS4223={code:"CS4223", name: "CS4223 Multi-core Architecture", type: "pc", mc: 4, key: false};
                var CS4224={code:"CS4224", name:"CS4224 Distributed Databases", type: "data", mc: 4, key: false};
                var CS4226={code:"CS4226", name: "CS4226 Internet Architecture", type: "nds", mc: 4, key: false};
                var CS4231_at={code:"CS4231_at", name:"CS4231 Parallel and Distributed Algorithms", type: "A&T", mc: 4, key: false};
                var CS4231_pc={code:"CS4231_pc", name: "CS4231 Parallel and Distributed Algorithms", type: "pc", mc: 4, key: false};
                var CS4232={code:"CS4232", name:"CS4232 Theory of Computation", type: "A&T", mc: 4, key: false};
                var CS4234={code:"CS4234", name:"CS4234 Optimisation Algorithms", type: "A&T", mc: 4, key: false};
                var CS4236={code:"CS4236", name:"CS4236 Cryptography Theory and Practice", type: "CSec", mc: 4, key: false};
                var CS4238={code:"CS4238", name:"CS4238 Computer Security Practices", type: "CSec", mc: 4, key: false};
                var CS4242={code:"CS4242", name:"CS4242 Social Media Computing", type: "mir", mc: 4, key: false};
                var CS4244={code:"CS4244", name:"CS4244 Knowledge-Based Systems", type: "AI", mc: 4, key: false};
                var CS4246={code:"CS4246", name:"CS4246 AI Planning and Decision Making", type: "AI", mc: 4, key: false};
                var CS4247={code:"CS4247", name:"CS4247 Graphics Rendering Techniques", type: "CGG", mc: 4, key: false};
                var CS4248={code:"CS4248", name:"CS4248 Natural Language Processing", type: "mir", mc: 4, key: false};
                var CS4274={code:"CS4274", name: "CS4274 Mobile and Multimedia Networking", type: "nds", mc: 4, key: false};
                var CS4350={code:"CS4350", name:"CS4350 Game Development Projects", type: "CGG", mc: 4, key: false};
                var DSC3214={code:"DSC3214", name:"DSC3214 Introduction To Optimisation",type:"ue", mc: 4, key: false};
                var DSC3216={code:"DSC3216", name:"DSC3216 Forecasting for Managerial Decisions",type:"ue", mc: 4, key: false};
                var DSC3224={code:"DSC3224", name:"DSC3224 Dynamic Pricing and Revenue Management",type:"ue", mc: 4, key: false};
                var EC1301={code:"EC1301", name:"EC1301 Principles of Economics",type:"ue", mc: 4, key: false};
                var EE2020={code:"EE2020", name:"EE2020 Digital Fundamentals",type:"ue", mc: 4, key: false};
                var EE2021={code:"EE2021", name:"EE2021 Devices & Circuits",type:"ue", mc: 4, key: false};
                var EE2024={code:"EE2024", name:"EE2024 Programming for Computer Interfaces",type:"ue", mc: 4, key: false};
                var EE3031={code:"EE3031", name:"EE3031 Innovation & Enterprise I",type:"ue", mc: 4, key: false};
                var EE3204={code:"EE3204", name:"EE3204 Computer Communications Networks I",type:"ue", mc: 4, key: false};
                var EG2401={code:"EG2401", name:"EG2401 Engineering Professionalism",type:"ue", mc: 4, key: false};
                var EG3601={code:"EG3601", name:"EG3601 Industrial Attachment Programme",type:"ue", mc: 4, key: false};
                var ES2660={code:"ES2660", name:"ES2660 Communicating in the Information Age",type:"ue", mc: 4, key: false};
                var GEH={code:"GEH", name:"GEH Human Cultures pillar", type:"GEM", mc:4, key:false};
                var GER={code:"GER", name:"GER Quantitative Reasoning pillar", type:"GEM", mc:4, key:false};
                var GES={code:"GES", name:"GES Singapore Studies pillar", type:"GEM", mc:4, key:false};
                var GET={code:"GET", name:"GET Thinking and Expression pillar", type:"GEM", mc:4, key:false};
                var HR2002={code:"HR2002", name:"HR2002 Human Capital in Organizations",type:"ue", mc: 4, key: false};
                var IE2110={code:"IE2110", name:"IE2110 Operations Research I",type:"ue", mc: 4, key: false};
                var IE3120={code:"IE3120", name:"IE3120 Manufacturing Logistics",type:"ue", mc: 4, key: false};
                var IS1103_FC={code:"IS1103/FC", name:"IS1103/FC Computing and Society",type:"IT", mc: 4, key: false};
                var IS1105={code:"IS1105", name:"IS1105 Strategic IT Applications",type:"ue", mc: 4, key: false};
                var IS1112_FC_X={code:"IS1112/FC/X", name:"IS1112/FC/X E-Business Essentials",type:"ue", mc: 4, key: false};  
                var IS2101={code:"IS2101", name:"IS2101 Business and Technical Communication",type:"ue", mc: 4, key: false};          var IS2102={code:"IS2102", name:"IS2102 Requirements Analysis and Design",type:"ue", mc: 4, key: false};           
                var IS2103={code:"IS2103", name:"IS2103  Enterprise Systems Development Concepts",type:"ue", mc: 4, key: false};     var IS2104={code:"IS2104", name:"IS2104 Software Team Dynamics",type:"ue", mc: 4, key: false};           
                var IS2150={code:"IS2150", name:"IS2150 E-Business Design and Implementation",type:"ue", mc: 4, key: false};         var IS3101={code:"IS3101", name:"IS3101 Management of Information Systems",type:"ue", mc: 4, key: false};           
                var IS3102={code:"IS3102", name:"IS3102 Information Systems Development Project",type:"ue", mc: 4, key: false};       var IS3150={code:"IS3150", name:"IS3150 Digital and New Media Marketing",type:"ue", mc: 4, key: false};           
                var IS3220={code:"IS3220", name:"IS3220 Service Science",type:"ue", mc: 4, key: false};           
                var IS3221={code:"IS3221", name:"IS3221 Enterprise Resource Planning Systems",type:"ue", mc: 4, key: false};         var IS3222={code:"IS3222", name:"IS3222 IT and Customer Relationship Management",type:"ue", mc: 4, key: false};       var IS3223={code:"IS3223", name:"IS3223 IT and Supply Chain Management",type:"ue", mc: 4, key: false};           
                var IS3230={code:"IS3230", name:"IS3230 Principles of Information Security",type:"ue", mc: 4, key: false};           
                var IS3240={code:"IS3240", name:"IS3240 Economics of E-Business",type:"ue", mc: 4, key: false};           
                var IS3241={code:"IS3241", name:"IS3241 Enterprise Social Systems",type:"ue", mc: 4, key: false};           
                var IS3242={code:"IS3242", name:"IS3242 Software Quality Management",type:"ue", mc: 4, key: false};           
                var IS3243={code:"IS3243", name:"IS3243 Technology Strategy and Management",type:"ue", mc: 4, key: false};           
                var IS3250={code:"IS3250", name:"IS3250  Health Informatics",type:"ue", mc: 4, key: false};           
                var IS3251={code:"IS3251", name:"IS3251 Principles of Technology Entrepreneurship",type:"ue", mc: 4, key: false};     var IS3260={code:"IS3260", name:"IS3260_Gamification for Organisations and Individuals",type:"ue", mc: 4, key: false};           
                var IS3261={code:"IS3261", name:"IS3261_Mobile Apps for Enterprise",type:"ue", mc: 4, key: false};           
                var IS4010={code: "IS4010", name: "IS4010 Industry Internship Programme", type: "IE", mc: 12, key: false};
                var LSM1301={code:"LSM1301", name: "LSM1301 General Biology",type:"math&sci", mc: 4, key: false};
                var LSM1302={code:"LSM1302", name: "LSM1302 Genes and Society",type:"math&sci", mc: 4, key: false};
                var LSM1303={code:"LSM1303", name: "LSM1303 Animal Behaviour",type:"math&sci", mc: 4, key: false};
                var MA1101R={code:"MA1101R", name:"MA1101R Linear Algebra I",type:"math&sci", mc: 4, key: false};
                var MA1102R={code:"MA1102R", name:"MA1102R Calculus",type:"ue", mc: 4, key: false};
                var MA1104={code:"MA1104", name:"MA1104 Multivariable Calculus",type:"math&sci", mc: 4, key: false};
                var MA1301_FC_X={code:"MA1301/FC/X", name:"MA1301/FC/X Introductory Mathematics",type:"math&sci", mc: 4, key: false};
                var MA1505={code:"MA1505", name:"MA1505 Mathematics I",type:"ue", mc: 4, key: false};
                var MA1506={code:"MA1506", name:"MA1506 Mathematics II",type:"ue", mc: 4, key: false};
                var MA1521={code:"MA1521", name:"MA1521 Calculus for Computing",type:"math&sci", mc: 4, key: false};
                var MA2101={code:"MA2101", name:"MA2101 Linear Algebra II",type:"math&sci", mc: 4, key: false};
                var MA2108={code:"MA2108", name:"MA2108 Mathematical Analysis I",type:"math&sci", mc: 4, key: false};
                var MA2213={code:"MA2213", name: "MA2213 Numerical Analysis I",type:"math&sci", mc: 4, key: false};
                var MA2214={code:"MA2214", name: "MA2214 Combinatorics and Graph",type:"math&sci", mc: 4, key: false};
                var MA2501={code:"MA2501", name: "MA2501 Differential Equations and Systems",type:"math&sci", mc: 4, key: false};
                var MKT1003X={code:"MKT1003X", name:"MKT1003X Marketing",type:"ue", mc: 4, key: false};
                var NOC_iLead={code:"NOC/iLead", name:"NOC or iLead", type: "IE", mc: 12, key: false};
                var PC1141={code:"PC1141", name: "PC1141 Physics I Introduction to Classical Mechanics",type:"math&sci", mc: 4, key: false};
                var PC1142={code:"PC1142", name: "PC1142 Physics II Introduction to Thermodynamics and Optics",type:"math&sci", mc: 4, key: false};
                var PC1143={code:"PC1143", name: "PC1143 Physics III Introduction to Electricity & Magnetism",type:"math&sci", mc: 4, key: false};
                var PC1144={code:"PC1144", name: "PC1144 Physics IV Introduction to Modern Physics",type:"math&sci", mc: 4, key: false};
                var PC1221={code:"PC1221", name:"PC1221 Fundamentals of Physics I",type:"math&sci", mc: 4, key: false};
                var PC1222={code:"PC1222", name:"PC1222 Fundamentals of Physics II",type:"math&sci", mc: 4, key: false};
                var PC1421={code:"PC1421", name:"PC1421 Physics for Life Sciences",type:"math&sci", mc: 4, key: false};
                var PC1431={code:"PC1431", name:"PC1431 Physics IE",type:"math&sci", mc: 4, key: false};
                var PC1432={code:"PC1432", name: "PC1432 Physics IIE",type:"math&sci", mc: 4, key: false};
                var PC1433={code:"PC1433", name: "PC1433 Mechanics and Waves",type:"math&sci", mc: 4, key: false};
                var ST2131={code:"ST2131", name:"ST2131 Probability",type:"math&sci", mc: 4, key: false};
                var ST2132={code:"ST2132", name: "ST2132 Mathematical Statistics",type:"math&sci", mc: 4, key: false};
                var ST2137={code:"ST2137", name:"ST2137 Computer Aided Data Analysis",type:"math&sci", mc: 4, key: false};
                var ST2334={code:"ST2334", name:"ST2334 Probability and Statistics",type:"math&sci", mc: 4, key: false};
                var ST3131={code:"ST3131", name:"ST3131 Regression Analysis",type:"ue", mc: 4, key: false};
                
                var allMods=[ACC1002X, AlvlMath, AlvlPhy, BT1101, BT2101, BT2102, BT3101, BT3102, BT3103, CG1001, CG1108, CG2023, CG2271, CG3002, CG3207, CM1101, CM1111, CM1121, CM1131, CM1161, CM1191, CM1401, CM1402, CM1417, CM1501, CM1502, CP3200_CP3202, CP3200_IndustryCourse, CP3880, CP4101, CS1010, CS1020, CS1101S, CS1231, CS2010, CS2100, CS2101, CS2102, CS2103, CS2103T, CS2104, CS2105, CS2106, CS2107, CS2108, CS3103, CS3201_CS3202, CS3205, CS3210, CS3211_pc, CS3211_pl, CS3213, CS3216_CS3217, CS3223, CS3230, CS3235, CS3236, CS3241, CS3242, CS3243, CS3244, CS3245, CS3247, CS3281_CS3282, CS3283_CS3284, CS4211, CS4212, CS4215, CS4218, CS4221, CS4222, CS4223, CS4224, CS4226, CS4231_at, CS4231_pc, CS4232, CS4234, CS4236, CS4238, CS4242, CS4244, CS4246, CS4247, CS4248, CS4274, CS4350, DSC3214, DSC3216, DSC3224, EC1301, EE2020, EE2021, EE2024, EE3031, EE3204, EG2401, EG3601, ES2660, GEH, GER, GES, GET, HR2002, IE2110, IE3120, IS1103_FC, IS1105, IS1112_FC_X, IS2101, IS2102, IS2103, IS2104, IS2150, IS3101, IS3102, IS3150, IS3220, IS3221, IS3222, IS3223, IS3230, IS3240, IS3241, IS3242, IS3243, IS3250, IS3251, IS3260, IS3261, IS4010, LSM1301, LSM1302, LSM1303, MA1101R, MA1102R, MA1104, MA1301_FC_X, MA1505, MA1506, MA1521, MA2101, MA2108, MA2213, MA2214, MA2501, MKT1003X, NOC_iLead, PC1141, PC1142, PC1143, PC1144, PC1221, PC1222, PC1421, PC1431, PC1432, PC1433, ST2131, ST2132, ST2137, ST2334, ST3131];
                
                var numModules = 0;
                var gemCount = 0;
                var sciCount = 0;
                var UEcount = 20;
                var stCount = "";
                for(var j=0;j<jArray.length;j++){
                    for(var i=0;i<allMods.length;i++){
                        if(jArray[j]==allMods[i].code){
                            
                            allMods[i].key = true;
                            if(jArray[j]== "AlvlMath"){
                                MA1301_FC_X.key = true;
                                UEcount+=4;
                                numModules-=1;
                                AlvlMath.key = true;
                            }
                            if(jArray[j]== "AlvlPhy"){
                                PC1221.key = true;
                                PC1222.key = true;
                                UEcount+=4;
                                numModules-=1;
                                AlvlPhy.key = true;
                            }
                            if(jArray[j] == "ST2334"){
                                ST2131.key = true;
                                ST2132.key = true;
                                stCount = "ST2334";
                            }
                            if(jArray[j] == "ST2132"){
                                ST2334.key = true;
                                stCount = "ST2132";
                            }
                            if(jArray[j] == "ST2131"){
                                ST2334.key = true;
                                stCount = "ST2131";
                            }
                        }
                        
                    }  
                
                    var res = jArray[j].substring(0, 3);
                    switch(res){
                        case "GER":
                            GER.key = true;
                            gemCount+=1;
                            numModules+=1;
                            break;
                        case "GET":
                            GET.key = true;
                            gemCount+=1;
                            numModules+=1;
                            break;
                        case "GES":
                            GES.key = true;
                            gemCount+=1;
                            numModules+=1;
                            break;
                        case "GEH":
                            GEH.key = true;
                            gemCount+=1;
                            numModules+=1;
                            break;
                    }
                }

                var z = gemCount - 5;
                
                //CS Foundation
                var cs_found=[CS1010, CS1020, CS1231, CS2010, CS2100, CS2103T, CS2105, CS2106, CS3230]; 
                var user_cs_found = new Array();
                for(var i=0;i<cs_found.length;i++){
                   if(cs_found[i].key===false){//not taken
                       user_cs_found.push(cs_found[i].code);
                    }
                    else//taken
                        numModules+=1;
                };
                //GEM Modules
                var GEM=[GET, GER, GES, GEH]; 
                var user_GEM = new Array();
                for(var i=0;i<GEM.length;i++){
                   if(GEM[i].key===false){//not taken
                       user_GEM.push(GEM[i].code);
                    }
                };
                
                if(user_GEM.length == 0)
                    user_GEM[0]= "";
                document.write( "GEM Modules: ");
                for(var i=0;i< user_GEM.length;i++){
                    document.write(user_GEM[i] + " ");
                }
                if(gemCount < 5){
                    document.write("1 extra" + "<br>");
                }
                
                //Math&Sci Modules
                var mathSciComp = [MA1101R, MA1301_FC_X, MA1521, PC1221, PC1222];
                var stats = [ST2131, ST2132, ST2334];
                var mathS1S2 = [CM1101, CM1111, CM1121, CM1131, CM1161, CM1191, CM1401, CM1402, CM1417, CM1501, CM1502, MA1104, MA2101, MA2108, MA2213, MA2214, MA2501, PC1141, PC1142, PC1143, PC1144, PC1421, PC1431, PC1432, PC1433, ST2137];
                
                var user_mathSciComp = new Array();
                var sciCount = 0;
                for(var i=0;i<mathSciComp.length;i++){
                   if(mathSciComp[i].key==false)
                       user_mathSciComp.push(mathSciComp[i].code);
                
                    if(mathSciComp[i].key==true)//taken
                        numModules+=1;
                };
                for(var i=0;i<mathS1S2.length;i++){
                   if(mathS1S2[i].key==true){
                       sciCount++;
                    }
                };
                if(stCount == "ST2334"){
                    numModules +=1;
                }
                else if(stCount == "ST2131"){
                    numModules +=1;
                    user_mathSciComp.push("ST2132");
                }
                else if(stCount == "ST2132"){
                    numModules +=2;
                }
                else
                    user_mathSciComp.push("ST2334 or ST2131 + ST2132");
                if(mathSciComp.length == 0)
                    mathSciComp[0] = "";
                if(sciCount>=4){
                    numModules+=3;
                    var w = sciCount - 3;
                }
                else if(sciCount<4){
                    numModules+= sciCount;
                }
                if(ST2334.key == true && stCount == "ST2334"){
                    if(sciCount == 0){
                        user_mathSciComp.push("3 science modules required");
                    }
                    if(sciCount == 1){
                        user_mathSciComp.push("2 science modules required");
                    }
                    if(sciCount == 2){
                        user_mathSciComp.push("1 science module required");
                    }
                }
                if(ST2131.key == true &&(stCount == "ST2131" || stCount == "ST2132")){
                    if(sciCount == 0){
                        user_mathSciComp.push("2 science modules required");
                    }
                    if(sciCount == 1){
                        user_mathSciComp.push("1 science module required");
                    }
                }
                //not taken combined stats and separate stats
                if(ST2334.key == false && ST2131.key == false){
                    if(sciCount == 0){
                        user_mathSciComp.push("3 science modules required");
                    }
                    if(sciCount == 1){
                        user_mathSciComp.push("2 science modules required");
                    }
                    if(sciCount == 2){
                        user_mathSciComp.push("1 science module required");
                    }
                }
                //IT Proffesionalism
                var iT = [IS1103_FC, CS2101];
                var user_iT = new Array();
                for(var i=0;i<iT.length;i++){
                   if(iT[i].key===false){
                       user_iT.push(iT[i].code);
                    }
                    else//taken
                       numModules+=1;
                };
                if(user_iT.length == 0)
                    user_iT[0]="";
                //Team Project
                var teamProj = [CS3201_CS3202, CS3216_CS3217, CS3281_CS3282, CS3283_CS3284];
                var user_teamProj = new Array();
                for(var i=0;i<teamProj.length;i++){
                   if(teamProj[i].key===false){
                       user_teamProj.push(teamProj[i].code);
                    }
                    else//taken
                       numModules+=1;
                };
                if(user_teamProj == 0){
                    user_teamProj[0] = "";
                }
                //Industrial Experience
                var iE = [CP3880, CP3200_CP3202, IS4010, CP3200_IndustryCourse, NOC_iLead, CP4101];
                var user_iE = new Array();
                for(var i=0;i<iE.length;i++){
                   if(iE[i].key===false){
                       user_iE.push(iE[i].code);
                    }
                    else//taken
                       numModules+=1;
                };
                if(user_iE == 0){
                    user_iE[0] = "";
                }
                //Specialization
                var userSpec = <?php echo json_encode($_POST["Specialization"]); ?>;
                var analysis = [CS3236, CS4231_at, CS4232, CS4234];
                var software = [ CS3213, CS4211, CS4218];
                var programLang = [CS2104, CS3211_pl, CS4215, CS4212];
                var comSec = [CS2107, CS3235, CS4236, CS4238];
                var database = [CS2102, CS3223, CS4221, CS4224];
                var aI = [CS3243, CS3244, CS4244, CS4246];
                var networking = [CS2105, CS3103, CS4222, CS4226, CS4274];
                var compGG = [CS3241, CS3242, CS3247, CS4247, CS4350];
                var mir = [CS2108, CS3245, CS4242, CS4248, CS3241];
                var parallelC = [CS3241, CS3242, CS3247, CS4247, CS4350, CS4231_pc, CS3211_pc];
                var user_spec = new Array();
                switch(userSpec){
                    case "Analysis Of Alogorithm":
                        
                        for(var i=0;i<analysis.length;i++){
                           if(analysis[i].key===false){
                               user_spec.push(analysis[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Software Engineering":
                        
                        for(var i=0;i<software.length;i++){
                           if(software[i].key===false){
                               user_spec.push(software[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Programming Languages":
                        
                        for(var i=0;i<programLang.length;i++){
                           if(programLang[i].key===false){
                               user_spec.push(programLang[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Computer Security":
                        
                        for(var i=0;i<comSec.length;i++){
                           if(comSec[i].key===false){
                               user_spec.push(comSec.code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Database":
                        
                        for(var i=0;i< database.length;i++){
                           if(database[i].key===false){
                               user_spec.push(database[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Artificial Intelligence":
                        
                        for(var i=0;i< aI.length;i++){
                           if(aI[i].key===false){
                               user_spec.push(aI[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Networking":
                        
                        for(var i=0;i< networking.length;i++){
                           if(networking[i].key===false){
                               user_spec.push(networking[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Computer Graphics and Games":
                        
                        for(var i=0;i< compGG.length;i++){
                           if(compGG[i].key===false){
                               user_spec.push(compGG[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Multimedia Information Retrieval":
                        
                        for(var i=0;i< mir.length;i++){
                           if(mir[i].key===false){
                               user_spec.push(mir[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    case "Parallel Computing":
                        
                        for(var i=0;i< mir.length;i++){
                           if(mir[i].key===false){
                               user_spec.push(mir[i].code);
                            }
                            else//taken
                                numModules+=1;
                        };
                        break;
                    default://no specialization
                        user_spec[0] = "";
                        break;
                    };
                
                UEcount = UEcount - 4 * (jArray.length - numModules);
                document.write("UE: "+ UEcount  + " modular credits" + "<br>");
                
                </script>
                </p>
            <div id='wherever'>Wow</div> 
                
                <script>
                //the table 
                var max = Math.max(user_mathSciComp.length, Math.max(user_cs_found.length, Math.max(user_iT.length, Math.max(user_teamProj.length, Math.max(user_iE.length, user_spec.length)))));

                if (user_mathSciComp.length !== max) {
                  for (var l = 0; l < max; l++) {
                    user_mathSciComp.push(" ");
                  }
                }
                if (user_cs_found.length !== max) {
                  for (var l = 0; l < max; l++) {
                    user_cs_found.push(" ");
                  }
                }
                if (user_iT.length !== max) {
                  for (var l = 0; l < max; l++) {
                    user_iT.push(" ");
                  }
                }
                if (user_iE.length !== max) {
                  for (var l = 0; l < max; l++) {
                    user_iE.push(" ");
                  }
                }
                if (user_teamProj.length !== max) {
                  for (var l = 0; l < max; l++) {
                    user_teamProj.push(" ");
                  }
                }
                if (user_spec.length !== max) {
                  for (var l = 0; l < max; l++) {
                    user_spec.push(" ");
                  }
                }

                var doc = document;
                function E(e) {
                  return doc.getElementById(e);
                }

                function PersonalInformation() {
                      function C(e) {
                        return doc.createElement(e);
                      }
                      this.foundTableHead = 'Foundation';
                      this.MSTableHead = 'Math & Science';
                      this.ITTableHead = 'IT Professionalism';
                      this.TPTableHead = 'Team Project';
                      this.IETableHead = 'Industrial Experience';
                      this.specTableHead = 'Specialisation';
                      this.user_mathSciComp = user_mathSciComp;
                      this.user_cs_found = user_cs_found;
                      this.user_iT = user_iT;
                      this.user_teamProj = user_teamProj;
                      this.user_iE = user_iE;
                      this.user_spec = user_spec;

                      this.addName = function(first, sec, third, fourth, fifth, last) {
                        this.user_cs_found.push(first);
                        this.user_iT.push(sec);
                        this.user_mathSciComp.push(third);
                        this.user_teamProj.push(fourth);
                        this.user_iE.push(fifth);
                        this.user_spec.push(last);

                      }
                      this.createTable = function() {
                        var nd = C('div'),
                          tbl = C('table'),
                          tr1 = C('tr'),
                          th1 = C('th'),
                          th2 = C('th'),
                          th3 = C('th'),
                          th4 = C('th'),
                          th5 = C('th'),
                          th6 = C('th');
                        var fnh = doc.createTextNode(this.foundTableHead);
                        var sech = doc.createTextNode(this.ITTableHead);
                        var thirdh = doc.createTextNode(this.MSTableHead);
                        var fourthh = doc.createTextNode(this.TPTableHead);
                        var fifthh = doc.createTextNode(this.IETableHead);
                        var lnh = doc.createTextNode(this.specTableHead);
                        th1.appendChild(fnh);
                        th2.appendChild(sech);
                        th3.appendChild(thirdh);
                        th4.appendChild(fourthh);
                        th5.appendChild(fifthh);
                        th6.appendChild(lnh);
                        tr1.appendChild(th1);
                        tr1.appendChild(th2);
                        tr1.appendChild(th3);
                        tr1.appendChild(th4);
                        tr1.appendChild(th5);
                        tr1.appendChild(th6);
                        tbl.appendChild(tr1);
                        var fn = this.user_cs_found,
                          sec = this.user_iT,
                          third = this.user_mathSciComp,
                          fourth = this.user_teamProj,
                          fifth = this.user_iE,
                          ln = this.user_spec;
                            for (var i=0;i<max;i++) {
                              var tr = C('tr'),
                                td1 = C('td'),
                                td2 = C('td'),
                                td3 = C('td'),
                                td4 = C('td'),
                                td5 = C('td'),
                                td6 = C('td');
                              var tn1 = doc.createTextNode(fn[i]),
                                tn2 = doc.createTextNode(sec[i]),
                                tn3 = doc.createTextNode(third[i]),
                                tn4 = doc.createTextNode(fourth[i]),
                                tn5 = doc.createTextNode(fifth[i]),
                                tn6 = doc.createTextNode(ln[i]);
                              td1.appendChild(tn1);
                              td2.appendChild(tn2);
                              td3.appendChild(tn3);
                              td4.appendChild(tn4);
                              td5.appendChild(tn5);
                              td6.appendChild(tn6);
                              tr.appendChild(td1);
                              tr.appendChild(td2);
                              tr.appendChild(td3);
                              tr.appendChild(td4);
                              tr.appendChild(td5);
                              tr.appendChild(td6);
                              tbl.appendChild(tr);
                            }
                        nd.appendChild(tbl);
                        return nd.innerHTML;
                      }
                }
                var PI = new PersonalInformation();
                E('wherever').innerHTML = PI.createTable();
              </script>
        </div>
        </div>
    </div>
    <div id="footer"></div>
</body>
</html>