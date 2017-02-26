
 <head>
 
  <link rel="stylesheet" type="text/css" href="style.css">

   <center><h1>Booklist:</h1></center>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Books</title>

	</head> 

    </html>
	
</body>

<form action="paieska.php" method = "post">

  <label for="title">Book search:</label> <input type="text" id="name1" name="name">
 
  <button type = "submit">Search</button>
  
</form>

<ul class="article-list-vertical">

<?php

include 'connect.php'
	
$index = 1;

$sql = "SELECT Title, Year, Author, Genre FROM knygos";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
		 

echo   ' <center>

  ' . $index++ .'. <a href="antrasis_puslapis.php?link='.$row["Title"].'" style="color: #f5f5dc;">
		  
		    '.$row["Title"].'  </a>                           
			
			</center> <br>';
	
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
       ?>


	   </ul>

      </body>
	  
</html>
