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