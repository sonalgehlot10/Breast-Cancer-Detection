<?php
session_start();	
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	
	$Bqryradius="SELECT AVG(radius_mean) FROM bc_dataset where diagnosis='B'";
	$Brunradius=mysqli_query($con,$Bqryradius);
	$Browradius=mysqli_fetch_array($Brunradius);
	$Bqrytexture="SELECT AVG(texture_mean) FROM bc_dataset where diagnosis='B'";
	$Bruntexture=mysqli_query($con,$Bqrytexture);
	$Browtexture=mysqli_fetch_array($Bruntexture);
	$Bqryperimeter="SELECT AVG(perimeter_mean) FROM bc_dataset where diagnosis='B'";
	$Brunperimeter=mysqli_query($con,$Bqryperimeter);
	$Browperimeter=mysqli_fetch_array($Brunperimeter);
	$Bqryarea="SELECT AVG(area_mean) FROM bc_dataset where diagnosis='B'";
	$Brunarea=mysqli_query($con,$Bqryarea);
	$Browarea=mysqli_fetch_array($Brunarea);
	$Bqrysmoothness="SELECT AVG(smoothness_mean) FROM bc_dataset where diagnosis='B'";
	$Brunsmoothness=mysqli_query($con,$Bqrysmoothness);
	$Browsmoothness=mysqli_fetch_array($Brunsmoothness);
	$Bqrycompactness="SELECT AVG(compactness_mean) FROM bc_dataset where diagnosis='B'";
	$Bruncompactness=mysqli_query($con,$Bqrycompactness);
	$Browcompactness=mysqli_fetch_array($Bruncompactness);
	$Bqryconcavity="SELECT AVG(concavity_mean) FROM bc_dataset where diagnosis='B'";
	$Brunconcavity=mysqli_query($con,$Bqryconcavity);
	$Browconcavity=mysqli_fetch_array($Brunconcavity);
	$Bqryconcave_points="SELECT AVG(concave_points_mean) FROM bc_dataset where diagnosis='B'";
	$Brunconcave_points=mysqli_query($con,$Bqryconcave_points);
	$Browconcave_points=mysqli_fetch_array($Brunconcave_points);
	$Bqrysymmetry="SELECT AVG(symmetry_mean) FROM bc_dataset where diagnosis='B'";
	$Brunsymmetry=mysqli_query($con,$Bqrysymmetry);
	$Browsymmetry=mysqli_fetch_array($Brunsymmetry);
	
	$Mqryradius="SELECT AVG(radius_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunradius=mysqli_query($con,$Mqryradius);
	$Mrowradius=mysqli_fetch_array($Mrunradius);
	$Mqrytexture="SELECT AVG(texture_mean) FROM bc_dataset where diagnosis='M'";
	$Mruntexture=mysqli_query($con,$Mqrytexture);
	$Mrowtexture=mysqli_fetch_array($Mruntexture);
	$Mqryperimeter="SELECT AVG(perimeter_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunperimeter=mysqli_query($con,$Mqryperimeter);
	$Mrowperimeter=mysqli_fetch_array($Mrunperimeter);
	$Mqryarea="SELECT AVG(area_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunarea=mysqli_query($con,$Mqryarea);
	$Mrowarea=mysqli_fetch_array($Mrunarea);
	$Mqrysmoothness="SELECT AVG(smoothness_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunsmoothness=mysqli_query($con,$Mqrysmoothness);
	$Mrowsmoothness=mysqli_fetch_array($Mrunsmoothness);
	$Mqrycompactness="SELECT AVG(compactness_mean) FROM bc_dataset where diagnosis='M'";
	$Mruncompactness=mysqli_query($con,$Mqrycompactness);
	$Mrowcompactness=mysqli_fetch_array($Mruncompactness);
	$Mqryconcavity="SELECT AVG(concavity_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunconcavity=mysqli_query($con,$Mqryconcavity);
	$Mrowconcavity=mysqli_fetch_array($Mrunconcavity);
	$Mqryconcave_points="SELECT AVG(concave_points_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunconcave_points=mysqli_query($con,$Mqryconcave_points);
	$Mrowconcave_points=mysqli_fetch_array($Mrunconcave_points);
	$Mqrysymmetry="SELECT AVG(symmetry_mean) FROM bc_dataset where diagnosis='M'";
	$Mrunsymmetry=mysqli_query($con,$Mqrysymmetry);
	$Mrowsymmetry=mysqli_fetch_array($Mrunsymmetry);
	
	$i=1;
	$table="";
	$table.="<thead><tr><th>SR.NO</th><th>diagnosis</th><th>radius_mean</th><th>texture_mean</th><th>perimeter_mean</th><th>area_mean</th><th>smoothness_mean</th><th>compactness_mean</th><th>concavity_mean</th><th>concave_points_mean</th><th>symmetry_mean</th></tr></thead><tbody>";
	$table.="<tr>";
	$table.="<td>1</td>";
	$table.="<td>malignant</td>";
	$table.="<td>".$Mrowradius["AVG(radius_mean)"]."</td>";
	$table.="<td>".$Mrowtexture["AVG(texture_mean)"]."</td>";
	$table.="<td>".$Mrowperimeter["AVG(perimeter_mean)"]."</td>";
	$table.="<td>".$Mrowarea["AVG(area_mean)"]."</td>";
	$table.="<td>".$Mrowsmoothness["AVG(smoothness_mean)"]."</td>";
	$table.="<td>".$Mrowcompactness["AVG(compactness_mean)"]."</td>";
	$table.="<td>".$Mrowconcavity["AVG(concavity_mean)"]."</td>";
	$table.="<td>".$Mrowconcave_points["AVG(concave_points_mean)"]."</td>";
	$table.="<td>".$Mrowsymmetry["AVG(symmetry_mean)"]."</td>";
	$table.="</tr>";
	
	$table.="<tr>";
	$table.="<td>2</td>";
	$table.="<td>benign</td>";
	$table.="<td>".$Browradius["AVG(radius_mean)"]."</td>";
	$table.="<td>".$Browtexture["AVG(texture_mean)"]."</td>";
	$table.="<td>".$Browperimeter["AVG(perimeter_mean)"]."</td>";
	$table.="<td>".$Browarea["AVG(area_mean)"]."</td>";
	$table.="<td>".$Browsmoothness["AVG(smoothness_mean)"]."</td>";
	$table.="<td>".$Browcompactness["AVG(compactness_mean)"]."</td>";
	$table.="<td>".$Browconcavity["AVG(concavity_mean)"]."</td>";
	$table.="<td>".$Browconcave_points["AVG(concave_points_mean)"]."</td>";
	$table.="<td>".$Browsymmetry["AVG(symmetry_mean)"]."</td>";
	$table.="</tr>";

	
	$table.="</tbody>";
	echo $table;
?>