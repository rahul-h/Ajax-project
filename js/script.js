/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
   
   
   var uname = $("#uname").val();
   $("#dob").hide();
   $("#dob-l").hide();
   $("#uname").keyup(function(){
       $("#dob").hide();
       $("#dob-l").hide();
       $.ajax({
           url : 'check.php',
           type : 'POST',
           data : { name : $("#uname").val()},
           success : function(msg){
               if(msg == "success")
               {
                   var msg="User is already registed. Enter DOB for better suggestion";
                    $(".check").text(msg).removeClass("fail").addClass("success");
                    $("#dob").show();
                    $("#dob-l").show();
               }
               else{
                   var msg ="User is not registered";
                    $(".check").text(msg).removeClass("success").addClass("fail");
               }
           }
           
       });
   });
   
   
   $("#dob").change(function(){
       var date =$(this).val();
       
       /*var yr =date.substr(0,4);
       
       var mon = date.substr(5,2);
       
       var date = date.substr(8,2);*/
       
       $.ajax({
           url : "check.php",
            type: 'POST',
            data : {date : date, name : $("#uname").val()},
            success : function(msg){
                var msg1 = "Use can use following suggestion "+msg;
                $(".check").empty();
               $(".check").text(msg1);
            }
       });
       
   });
   
});
