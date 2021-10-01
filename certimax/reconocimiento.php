<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	@page 
	{ 
	    margin: 0px; 
	}
	
    body  
    {
       margin: 0px;
	   background-position: center center;
	   background-repeat: no-repeat;
	   background-attachment: fixed;
	   background-size: cover;
    }
    img
    {
    	position: relative;
    }
    /*#a
    {
        position:absolute;
        color:red;
        margin-right:0px;
    }
    #b
    {
        position:absolute;
        color:yellow;
        margin-left:292px;
    }
    #c
    {
        position:absolute;
        color:pink;
        margin-left:580px;
        
    }*/

	</style>
</head>
	
    <body background="<?php echo $_POST["fondo"];?>"><!--Background-->
    <img src="<?php echo $_POST["logo4"];?>" style="position:absolute; height:65px; width:150px;  margin-top:30%; margin-left:50px;">
	<div style="background-color: rgba(0, 0, 0, 0.5);">
		<!--logos y encabezados-->
		<img src="<?php echo $_POST["logo1"];?>" style="height:100px; width:70px;  float:left;">
		<img src="<?php echo $_POST["logo2"];?>" style="height:100px; width:250px; float:center; margin-left:38%;">
		<img src="<?php echo $_POST["logo3"];?>" style="height:100px; width:70px;  float:right;">
		&nbsp;<br>
		&nbsp;<br>
		&nbsp;<br>
		&nbsp;<br>
		&nbsp;<br>
	</div>
	<center>
	    <font color="<?php echo $_POST["txco"];?>"><!--Color del texto-->
		 <div style="margin-top:7%; font-family:arial; position:absolute;">
		 	<b>
			 	<div style="font-size:15px; margin-left:120px; margin-right:120px;">
			  		<?php echo $_POST["enc"];?>
			  		<br>
			  		 	Otorga a:
					<br>
					<div style="font-size:23px;">
					<?php echo $_POST["nombre"];?>
					</div>
					<br>
						El presente
					
				<br>
						
							<!--logos centrales-->
					<font color="#c2ac0e" size="50px">"RECONOCIMIENTO" </font>
					<img src="<?php echo $_POST["logo5"];?>" style="position:absolute; height:65px; width:150px; margin-left:220px;">
					<br>
					Por su entusiasta participacion en el:
					<br><br><br>
						<?php echo $_POST["desc"];?>
					<br><br><br><br>
						<?php echo $_POST["lf"];?>
				    <br><br><br>
				    	</center>
				    
				    
				    
				    
				    
				</div>
			</b>
		 </div>
       <font size="11px">
			<div style="margin-left:50px; position:absolute; padding-top:610px;">
                <?php echo $_POST["nombre1"];?><br>
                 <?php echo $_POST["cargo1"];?><br> 
                  <?php echo $_POST["sociedad1"];?> 
            </div>
            <div style="margin-left:415px; position:absolute; padding-top:610px;">
                <?php echo $_POST["nombre2"];?><br>
                 <?php echo $_POST["cargo2"];?><br> 
                  <?php echo $_POST["sociedad2"];?> 
            </div>
            <div style="margin-left:769px; position:absolute; padding-top:610px;">
                <?php echo $_POST["nombre3"];?><br>
                 <?php echo $_POST["cargo3"];?><br> 
                  <?php echo $_POST["sociedad3"];?> 
            </div>
       </font>
       </font>
	
</body>
</html>
