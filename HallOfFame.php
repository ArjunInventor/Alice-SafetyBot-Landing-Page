      <!DOCTYPE html>
      <html>
        <head>
                        <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
             <title>Alice | Hall Of Fame</title>
    <meta name="viewport" content="width=device-width,  initial-scale=1.0"> 
    <meta name="theme-color" content="#283593" />
    <meta charset="UTF-8">
   <meta name="description" content="Introducing ALICE – the Artificial Intelligence (AI) powered Virtual Assistant aimed at helping you find answers to your questions related to being safe on Internet via chatting (voice or text).">
  <meta name="keywords" content="Internet Safety, Alice Chat Bot, Alice, Internet Security, How to be safe online, Internet supervisor">
  <meta name="author" content="Arjun">
  
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <style>
             #hl {
                opacity: 1;
            }
            body {
height: 100vh;
background-color: #1a237e;
                background-image: url("/img/bg11.png");
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                 background-size: cover;
                
             
            }
            
            
            
.header{
   width: 100%;
   height: 70px;
}


  a {
    padding:20px; color:white; font-size: 16px; opacity: 0.8;
}

#tabs {
        padding-right:50px;
        font-family: Roboto; color:white; position: absolute; padding-top: 10px; text-align:right; width:100%;
}


a:hover {
opacity: 1;    
}

@media screen and (max-width: 992px) {
#tabs {
    width:100%
    text-align: right;
    padding-right:20px;
}

a {
    padding:10px; font-size: 14px; 
}
}


@media screen and (max-width: 600px) {
    #tabs {
     padding-right:5px;    
    }
    }
        </style>


        </head>

        <body>
<div class="header" style="">
    <p id="tabs">
                <a href="../index.html">ALICE</a>
        <a  href="../contribute.php">Contribute</a>
        <a id="hl" href="../HallOfFame.php">Hall Of Fame</a>
        <a href="../partner.html">Partner</a>

        </p>
      
     
     </div>
          
          <div class="container" style="">
          <h2 style="color:white;">Hall Of Fame</h2>
          </div>
            <div class="container">
            <p  style="font-family: 'Open Sans', sans-serif; vertical-align: baseline; text-align:justify; font-size: 16px; color: white">
          </p>
          </div>
          
          <?php
     
     error_reporting(0);
     $error = "No ERRORS";
      class MyDB extends SQLite3 {
          function __construct() {
             $this->open('pledge.db');
          }
       }
       $db = new MyDB();
       if(!$db) {
          $error =  $db->lastErrorMsg();
       } else {
         
       }
     

       
       echo '
       <div>
       <table class="container z-depth-5 flow-text" style="font-weight: 400; font-size: 15px; background-color: white; border-radius: 8px; padding: 10px;">
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Place</th>
                  <th>Organization/School</th>
              </tr>
            </thead>

            <tbody>';
       
       
      
      
       
       
       
       $sql = 'SELECT * from PLEDGE WHERE VISIBLE="true"';
       
      

       $ret = $db->query($sql);
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
          echo "<tr>";
          echo "<td>". $row['NAME'] . "</td>";
          echo "<td>". $row['PLACE'] . "</td>";
          echo "<td>". $row['ORG'] . "</td>";
          echo "</tr>";
       }
       
       echo "</tbody> </table> </div>";
       
       
       $db->close();
       
      
       
       ?>
       
       </body>
       </html>