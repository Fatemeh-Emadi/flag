<html>
    <head></head>
    <style>
        
     #stars{
        position: absolute;
        
         width: 150px;
         height: 100px;
         margin-top: 3px;
         margin-left: 2px;
         background: darkblue;
         border: none;
         color: white;
     }
     #flag{
         
         width:380px;
         height: 200px;
         border-color: white;
         border-style: solid;
     }
     #td_style{
        background:red; 
        height:16px;
        border:none;

     }
     
    </style>
    <body>
        <div id="stars">
        <?php 
        $star="*";   ?>
          <?php for($j=0;$j<46;$j++):?>
               <span style="position:fixed; top:<?php print(rand(1,99));?>; left:<?php print(rand(1,149));?>;">
               <?php  echo($star);?>
               <?php echo(" ");?>
               <?php endfor; ?>
          </span>
        </div>
        <div id="main">
        <table border="1" id="flag">
         <?php for($i=0;$i<7; $i++): ?>
         <tr>
        
            <td id="td_style"></td>
            
         </tr>  
         <tr></tr>
         <?php endfor; ?>
         </table>
        </div>
    </body>
</html>