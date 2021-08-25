<html>
    <head>
        <meta charset="UTF-8">
        <title>Kid Care</title>
        <link rel="stylesheet" href="search2.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.googleapis.com/css?family=Comfortaa">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav id="navbar">
                    <ul>
                        <li><a href="Register.html"><button class="button">Sign Up</button></a></li>
                        <li><a href="about.html"><button class="button">About</button></a></li>
                        <li><a href="services.html"><button class="button">Services</button></a></li>
						<li><a href="search.php"><button class="button">Search</button></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="searchbar">
            <form method="post" action="search.php">
                <input type="text" name="search" placeholder="What are you looking for?">
                <select name="searchby">
                    <option>Select</option>
                    <option value="Name">Daycare</option>
                    <option value="Location">Address</option>
                </select>
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
        <br>
        <div class="tables">
            <table>
                <tr>
                    <th>Daycare</th>
                    <th>Website</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                <?php
                    if(isset($_POST['submit'])){
                        $connection = new mysqli("localhost", "root", "", "kidcare");
                        $search=$_POST['search'];
                        $searchby=$_POST['searchby'];
                        $sql=$connection->query("SELECT * FROM daycare WHERE $searchby LIKE ('%$search%')");
                        if($sql->num_rows>0){
                            while($data=$sql->fetch_array()){
                                echo 
				                   "<tr>
					                <td>" .$data['Name']. "</td>
					                <td>" .$data['Website']. "</td>
                                    <td>" .$data['Phone']. "</td>
					                <td>" .$data['Location']. "</td>
				                    </tr>";
                            }
                        }
                        else{
                            echo "Doesn't match any data";
                        }
                    }
                ?>
            </table>
        </div>
    </body>
</html>
