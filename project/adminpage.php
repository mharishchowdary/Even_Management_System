<html>

<style type="text/css">
 
table {
font-family: "Lato","sans-serif";   }       /* added custom font-family  */
 
table.one {                                  
margin-bottom: 3em; 
border-collapse:collapse;   }   
 
td {                            /* removed the border from the table data rows  */
text-align: center;     
width: 10em;                    
padding: 1em;       }       
 
th {                              /* removed the border from the table heading row  */
text-align: center;                 
padding: 1em;
background-color: #e8503a;       /* added a red background color to the heading cells  */
color: white;       }                 /* added a white font color to the heading text */
 
tr {    
height: 1em;    }
 
table tr:nth-child(even) {            /* added all even rows a #eee color  */
    background-color: #eee;     }
 
table tr:nth-child(odd) {            /* added all odd rows a #fff color  */
background-color:#fff;      }
 
</style>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test2");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
//$sql = "SELECT * FROM form WHERE events='IOT' OR events='Machine Learning'";
$sql = "SELECT * FROM form";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>lname</th>";
                echo "<th>events</th>";
                echo "<th>email</th>";
                echo "<th>institute</th>";
                echo "<th>address</th>";
                echo "<th>number</th>";
				//echo "<th>call</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['events'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['institute'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
				//echo "<td> <button> gvgv </button> </td> "; 
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

</html>