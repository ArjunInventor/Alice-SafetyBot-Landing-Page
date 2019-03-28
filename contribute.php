      <!DOCTYPE html>
      <html>
        <head>
            <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
             <title>Alice | Contribute</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="theme-color" content="#1da06a" />
    <meta charset="UTF-8">
   <meta name="description" content="Introducing ALICE – the Artificial Intelligence (AI) powered Virtual Assistant aimed at helping you find answers to your questions related to being safe on Internet via chatting (voice or text).">
  <meta name="keywords" content="Internet Safety, Alice Chat Bot, Alice, Internet Security, How to be safe online, Internet supervisor">
  <meta name="author" content="Arjun">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
           <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script type="text/javascript" src="js/materialize.min.js"></script>
        <style>
             #hl {
                opacity: 1;
            }
            body {
                width: 100%;
                padding: 0px;
    margin: 0px;
                height:100%;
                 background-color: #1da06a;
                background-image: url("/img/bg9.png");
                background-repeat: no-repeat;
                background-attachment: fixed;
                
                 background-size: cover;
                background-position: center;
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
    <p id="tabs" style="">
        <a  href="../index.html">ALICE</a>
        <a id="hl" href="../contribute.php">Contribute</a>
        <a href="../HallOfFame.php">Hall Of Fame</a>
        <a href="../partner.html">Partner</a>

        </p>
      
     
     </div>
  <div class="container">
                <h2 style="color:white">Contribute</h2>
                            
            <p style="font-family: 'Open Sans', sans-serif; vertical-align: baseline; text-align:justify; font-size: 16px; color: white;" >
                Just like the Internet, the risks associated with going online are also constantly growing taking new forms and techniques. Hence, it is important to keep a constant vigil on these new approaches and accordingly keep up with the most updated information on the techniques to avoid the threats. ALICE is designed to learn constantly from the new information fed to it (validated by a team of experts). <br><br>
We invite you to contribute to the repository of information that drives ALICE. Whenever you stumble upon something interesting such as a story, a video, a fact or a book, think of contributing this information along with the newly acquired knowledge to ALICE. Your contributions will help make ALICE more complete and effective. 
Contributing is as easy as filling out this simple form below. As a proud Contributor, you will have the opportunity to see your name listed on the<a style="color:white; padding:8px;" href="../BeSafeOnline/HallOfFame.php"><u>ALICE Hall of Fame.</u></a>

            </p>
           </div>
       <br>
      
       <div class="row container z-depth-5" style="background-color: white; border-radius: 8px;" >
          
           <div class="row col s12">
       <form action="/contribute.php"  class="col s12"> 
        <div class="row">
        
          <div class="row">
            <div class="input-field col s6">
              <input id="name" type="text" required name="name" value="" class="validate">
              <label for="name">Name</label>
            </div>
            <div class="input-field col s6">
              <input id="place" type="text" required name="place" value="" class="validate">
              <label for="place">Place</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s12">
              <input id="org" type="text" required name="org" value="" class="validate">
              <label for="org">Organszation/School</label>
            </div>
            </div>
        <div class="row">
           <div class="input-field col s12">
           <textarea id="d" required name="d" class="materialize-textarea"></textarea>
           <label for="d">Content</label>
        </div>
        
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input id="src" type="text" required name="src" value="" class="validate">
              <label for="src">Source</label>
            </div>
            </div>
      <p>
          <input type="checkbox" name="add" id="add" />
          <label for="add">Add my name to The Wall Of Fame</label>
        </p>

      <br>


      <input id="submit_btn" class="waves-effect waves-light btn" type="submit" value="Submit">
    </form>

      </div>
      </div>
      </div>
    <br>
          
          <br>
     
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
     
     
      if((!isset($_GET['add']) || empty($_GET['add']))) {
          
          $visible = "false";
      } else {
          $visible="true";
      }
     
     
     if((!isset($_GET) || empty($_GET))) {
         } else {
              echo '<script> window.alert("Thank you for your contribution."); </script>';
      $sql = "INSERT INTO PLEDGE (NAME,PLACE,ORG,CONTENT,VISIBLE,SOURCE) VALUES ('" . $_GET['name'] . "', '" . $_GET['place'] . "', '" . $_GET['org'] . "', '" . $_GET['d'] . "', '" . $visible . "', '" .  $_GET['src'] ."');";
     }


   $ret = $db->exec($sql);
       $db->close();
       
      
       
       ?>
       
      
      
      
      
      
          
       
          <!--  <footer><p class = "container" style="color:white"><?php echo $error; ?></p></footer>  -->
          <br><br>
        </body>
      </html>
      
