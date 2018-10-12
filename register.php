<html>
<head>
</head>
<body>
</body>
<form name="application" method="post" action="login.php">
<br/><br/><br/>
<!--Table starts -->
<table align="center" >
<!--Row 1 -->
	<tr>
		<td>
		Username :
		</td>
		<td>
		 <input type ="text" name ="un"/>
		</td>
	</tr>
	<!--Row 2 -->
	<tr>
		<td>
		<br/>
		Fullname :
		</td>
		<td>
		<br/>
		 <input type ="text" name ="fn"/>
		</td>
	</tr>
	<!--Row 3 -->
	<tr>
		<td>
		<br/>
		Email :
		</td>
		<td>
		<br/>
		 <input type ="text" name ="ue"/>
		</td>
	</tr>
	<!--Row 3 -->
	<tr>
		<td>
		<br/>
		Phone :
		</td>
		<td>
		<br/>
		 <input type ="text" name ="up"/>
		</td>
	</tr>
	<!--Row 4 -->
	<tr>
		<td>
		<br/>
		Password :
		</td>
		<td>
		<br/>
		 <input type ="password" name ="pw"/>
		</td>
	</tr>
	<!--Row 5 -->
	<tr>
		<td>
		<br/>
		Confirm Password :
		</td>
		<td>
		<br/>
		 <input type ="password" name ="cpw"/>
		</td>
	</tr>
	<!--Row 6 -->
	<tr>
	<tr>
		<td>
		<br/>
		Gender :
		</td>
		<td>
		<br/>
		 <input type ="radio" name ="gen" value="Male"/>Male
		 <input type ="radio" name ="gen" value="Female"/>Female
		 <input type ="radio" name ="gen" value="Other"/>Other
		</td>
	</tr>
	<!--Row 7 -->
	<tr>
		<td>
		<br/>
		Education :
		</td>
		<td>
		<br/>
		 <input type="checkbox" name="edu[]" value="SSC">SSC
		 <input type="checkbox" name="edu[]" value="HSC">HSC
		 <input type="checkbox" name="edu[]" value="BSC">BSC
		 <input type="checkbox" name="edu[]" value="MSC">MSC
		</td>
	</tr>
	<!--Row 7 -->
	<tr>
		
		<td>
		
		</td>
		<td>
		<br/>
		<input type="submit" value="Register">
		<input type="reset" value="Clear">
		<input type="reset" value="Back" onclick="location.href='introduction.html'" value="Back">
		</td>
	</tr>

</table>

</form>

</html>