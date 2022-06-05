<!DOCTYPE html>
  <html lang="en">
      <head>

  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> examle</title>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
 </head>

<body style="margin: 50px;">

    
    <h1>
       <CEnter>
           HOME
        </CEnter>  
    </h1>
    
    <h2>
        TOP 10 SONGS
    </h2>
    
    

    <P align="CEnter">
        
  
        <button style= " background-color: #ca288c; "  type="button" onclick="parent.location='addsong.html'">+ Add Song</button>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for songs.." title="Type in a name" >
    </P>
</body>
    <style>
        
        input{
            
            
            width: 30%;
            font-size: 16px;
            padding: 8px 20px 8px 20px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
    </style>
   <table class="table">
   <thead>
       <tr>
           <th>Artwork</th>
           <th>song name</th>
           <th>artist</th>
           <th>date of release</th>
           <th>rating</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "songs";
        $connection = new mysqli($servername, $username, $password,$database);
        if ($connection->connect_error){
        die("connection failed: ". $connection->connect_error);
        }
        $sql = "select * from song";
        $result = $connection->query($sql);
    
        if(!$result){
            die("Invalid query: ".$connection->error);
          }
        while($row = $result->fetch_assoc())
         echo " <tr>
        
        <td>" . $row["ARTWORK"]."</td>
        <td>" . $row["SONG_NAME"]."</td>
        <td>" . $row["ARTIST"]."</td>
        <td>" . $row["DATE_OF_RELEASE"]."</td>
        <td>" . $row["RATING"]."</td>
    
        
       
        </tr>";
        
?>
</tbody>
    </table>
   
    </html>