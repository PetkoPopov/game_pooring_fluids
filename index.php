
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <h1 id="advice" style="position: absolute; left:500px;"> отлейте един литър </h1>
    <button id="fill7ltr" style="position: absolute; bottom: 100px;left:110px;height: 55px;width:120px;background-color: darkgreen">напълнни 7 литра ===></button>
    <button id="fill3ltr" style="position: absolute; bottom: 100px;left:690px;height: 55px;width:120px;background-color: darkgreen"><== напълни 3 литра</button>
    <button id="from7to3" style="position: absolute; bottom: 100px;left:400px;height: 55px;width:120px;background-color: darkgreen">прелей от 7 към 3 ==></button>
    <button id="from3to7" style="position: absolute; bottom: 250px;left:400px;height: 55px;width:120px;background-color: darkgreen"><== прелей от 3 към 7 </button>
    <button id="fillout7" style="position: absolute; bottom: 250px;left:110px;height: 55px;width:120px;background-color: darkgreen"><=== излей </button>
    <button id="fillout3" style="position: absolute; bottom: 250px;left:690px;height: 55px;width:120px;background-color: darkgreen">излей  ===></button>
   
    <body style="background-color: yellowgreen">

      

    <center id="center"><table border="1"><tr><td style="position:absolute;left:250px;width:120;height:630;">

            <center "><div id="empty1" style="width:120px;height:90px;background-color: darkgrey;">1 ltr empty</div></center>
            <center><div id="empty2" style="width:120px;height:180px;background-color:darkgrey;">2 ltr empty</div></center>
            <center><div id="empty3" style="width:120px;height:270px;background-color:darkgrey;">3 ltr empty</div></center>
            <center><div id="empty4" style="width:120px;height:360px;background-color:darkgrey;">4 ltr empty</div></center>
            <center><div id="empty5" style="width:120px;height:450px;background-color:darkgrey;">5 ltr empty</div></center>
            <center><div id="empty6" style="width:120px;height:540px;background-color:darkgrey;">6 ltr empty</div></center>
            <center><div id="empty7" style="width:120px;height:630px;background-color:darkgrey;">7 ltr empty</div></center>

            <center><div id="text1" style="width:120px;height:90px;background-color:aqua;">1 ltr</div></center>
            <center><div id="text2" style="width:120px;height:180px;background-color:aqua;">2 ltr</div></center>
            <center><div id="text3" style="width:120px;height:270px;background-color:aqua;">3 ltr</div></center>
            <center><div id="text4" style="width:120px;height:360px;background-color:aqua;">4 ltr</div></center>
            <center><div id="text5" style="width:120px;height:450px;background-color:aqua;">5 ltr</div></center>
            <center><div id="text6" style="width:120px;height:540px;background-color:aqua;">6 ltr</div></center>
            <center ><div id="text7" style="width:120px;height:630px;background-color:aqua;">7 ltr</div></center>
            </td></tr></table></center>

    <center id="center"><table border="1"><tr><td style="position:absolute;left:550px;width:120;height:270;bottom:86px">

            <center "><div id="empty1_3" style="width:120px;height:90px;background-color: darkgrey;">1 ltr empty</div></center>
            <center><div id="empty2_3" style="width:120px;height:180px;background-color:darkgrey;">2 ltr empty</div></center>
            <center><div id="empty3_3" style="width:120px;height:270px;background-color:darkgrey;">3 ltr empty</div></center>
            
            <center><div id="text1_3" style="width:120px;height:90px;background-color:aqua;">1 ltr</div></center>
            <center><div id="text2_3" style="width:120px;height:180px;background-color:aqua;">2 ltr</div></center>
            <center><div id="text3_3" style="width:120px;height:270px;background-color:aqua;">3 ltr</div></center>
            </td></tr></table></center>
</p>


<script>
 
    $(document).ready(function () {
//        $("#center").hide(); 
var timeStart=new Date();
        $("#text1").hide();
        $("#text2").hide();
        $("#text3").hide();
        $("#text4").hide();
        $("#text5").hide();
        $("#text6").hide();
        $("#text7").hide();
        $("#empty1").hide();
        $("#empty2").hide();
        $("#empty3").hide();
        $("#empty4").hide();
        $("#empty5").hide();
        $("#empty6").hide();
//        $("#empty7").hide();
        $("#empty1_3").hide();
        $("#empty2_3").hide();
//        $("#empty3_3").hide();
        $("#text1_3").hide();
        $("#text2_3").hide();
        $("#text3_3").hide();
//       
       
        function calc7ltr(vesel_7){
            
        if(vesel_7==0){
                $("div").hide();
                $("#empty7").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==1){
                $("div").hide();
                $("#empty6").show();
                $("#text1").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==2){
                $("div").hide();
                $("#empty5").show();
                $("#text2").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==3){
                $("div").hide();
                $("#empty4").show();
                $("#text3").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==4){
                $("div").hide();
                $("#empty3").show();
                $("#text4").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==5){
                $("div").hide();
                $("#empty2").show();
                $("#text5").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==6){
                $("div").hide();
                $("#empty1").show();
                $("#text6").show();
                calc3ltr(vesel_3);
            }else if(vesel_7==7){
                $("div").hide();
                
                $("#text7").show();
                calc3ltr(vesel_3);
            }
        }
        function calc3ltr(vesel_3){
            if(vesel_3==0){
                $("#empty3_3").show();
            }else if(vesel_3==1){
                $("#empty2_3").show();
                $("#text1_3").show();
            }else if(vesel_3==2){
                $("#empty1_3").show();
                $("#text2_3").show();
            }else if(vesel_3==3){
                $("#text3_3").show();
            }
        }
        var vesel_7=0;
        var vesel_3=0;
        $("#fillout3").click(function(){
           vesel_3=0;
          calc7ltr(vesel_7);
           
        });
        $("#fillout7").click(function(){
           vesel_7=0;
           
           calc7ltr(vesel_7);
//           calc3ltr(vesel_3);
          
        });
        $("#fill7ltr").click(function () {
            vesel_7=7;
           calc7ltr(vesel_7);
//          calc3ltr(vesel_3);
             });
        $("#fill3ltr").click(function() {
            
            vesel_3=3;
            
           calc7ltr(vesel_7); 
         
            });
        $("#from3to7").click(function(){
                             vesel_7+=vesel_3;
             if(vesel_7>7){
                 vesel_3=vesel_7-7;
                 vesel_7=7;
             }else{
             vesel_3=0;
         }
             calc7ltr(vesel_7);
            });
        $("#from7to3").click(function(){
            vesel_3+=vesel_7;
            if(vesel_3>3){
                vesel_7=vesel_3-3;
                vesel_3=3;
            }else{
                vesel_7=0;
            }
            calc7ltr(vesel_7);
        }) ;         
      function liter(vesel_3,vesel_7){
        if(vesel_3===1||vesel_7===1){
            var timeStop=new Date();
            typeof(timeStart);
       $("#advice").value("CONGRTULATION");
      
      }          
  }
    });
</script>

</body>
</html>
