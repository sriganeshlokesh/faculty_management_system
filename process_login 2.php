<?php session_start();

require('includes/config.php');

			$unm=$_POST['usrnm'];

			$q="select * from user where uname='$unm'";

			$res=mysqli_query($conn,$q) or die("wrong query");

			$row=mysqli_fetch_assoc($res);

			if(!empty($row))
			{
				if($_POST['pswd']==$row['upass'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['uname'];
					$_SESSION['uid']=$row['upass'];
					$_SESSION['status']=true;

					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/AdminHome.php");
					}
				}

				else
				{
					header('location:Login.php?m1=Y');
				}
			}
			else
			{
				header("location:Login.php?m2=Y");
			}
?>
