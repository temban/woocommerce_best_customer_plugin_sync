<?php
class PrintBestCustomerClass_JSON {

public function PrintCustomer_JSON($sname,$uname,$password,$db_name){
			$this->sname= $sname;
			$this->uname=$uname;
			$this->password =$password;
			$this->db_name =$db_name;
			$this->idnumber =$idnumber;
							
							//connect to database
							$conn = mysqli_connect($sname, $uname, $password, $db_name);

							$sql_top_order="SELECT * FROM customer_order order by number_of_orders desc";
									$report_top_order=mysqli_query($conn,$sql_top_order);
									if($report_top_order== TRUE){ 
									echo "<table border='5'>";
									echo "<tr><th></th><th>Customer Name</th><th>Number Of Orders</th></tr>";
									$num=1;

									while($row_top_order=mysqli_fetch_array($report_top_order) )
									{

									
										echo "<tr><td>";									
										echo $num;
										echo "</td><td>";
										echo$row_top_order['customer_name'];
										echo "</td><td>";									
										echo$row_top_order['number_of_orders'];
										echo "</td></tr>";
										echo"<tr></tr>";
										echo"<tr></tr>";
										echo"<tr></tr>";

										$num=$num+1;
								
									
								}
								echo"</table>";
								
					}
							
							
		}


?>


