</html>

  <link rel="stylesheet" type="text/css" href="style.css">

</body>

<button onclick="goBack()"><b>Go Back</b></button>

<script>

function goBack() {
    window.history.back();
}
</script>


<?php

include 'connect.php';

$title = $_POST["name"];
  
$sql = "SELECT Title, Year, Author, Genre FROM knygos WHERE Title='$title';";

$result = mysqli_query($conn, $sql);

echo "<center><h1>Information about book:</h1></center>";

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
		 


echo"

            <center>
                <h2>  ". "Title:  ".$row["Title"]."</h2>
                 <p> <b> ". "Year:   </b>".$row["Year"]."<br>
                     <b> ". "Author: </b> ".$row["Author"]."<br>
                     <b> ". "Genre: </b>".$row["Genre"].
                 "</p>
                </center>

        <br>";

	
    }
} else {
    echo "<center>0 results</center>";
}

mysqli_close($conn);


?>


</body>
</html>
