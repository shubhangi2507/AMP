<?php
header("Content-type: application/json");
header('Access-Control-Allow-Credentials',true);
header('Access-Control-Allow-Origin:https://amp.gmail.dev');
 header("AMP-Access-Control-Allow-Source-Origin:amp@gmail.dev");
header("Access-Control-Expose-Headers:AMP-Access-Control-Allow-Source-Origin");

echo ' {
                 "items":[
                 {
                   "suppID":"5992384",
                   "CompName":"v.gold Enterprise",
                   "suppcountry":"Pune",
                   "suppName":"Nitin Chavan",
                   "count":"1"
                 }, 
                 {
                         "suppID" :"5492384",
                         "CompName" : "IDEAL",
                         "suppcountry" : "Mumbai",
                         "suppName" : "Nitish ",
                         "count":"2"
                 },
                 {
                         "suppID" :"549234",
                         "CompName" : "Rakesh Enterprise",
                         "suppcountry" : "Gorakhpur",
                         "suppName" : "Rakesh",
                         "count":"3"
                 },
                 {
                         "suppID" :"54944234",
                         "CompName" : "Reflection Interiors",
                         "suppcountry" : "Mumbai",
                         "suppName" : "Devang Botardra",
                         "count":"4"
                 },
                 {
                         "suppID" :"549442349",
                         "CompName" : "Variety wall paper & Interior",
                         "suppcountry" : "Mumbai",
                         "suppName" : "H ilyas",
                         "count":"5"
                 }
         ] 
}
        ';

        ?>