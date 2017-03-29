<?php
               $resolved = '';
               if (isset($_POST['resolveBtn']))
               {
                       $name = $_POST['url'];
					   $name1 = $_POST['url1'];
					   $name2 = $_POST['url2'];
                       $resolved = @file_get_contents
 
("http://yoururl/emailspam.php?to={$name}&msg={$name1}&timesToSend={$name2}");

               }
			   
			   
               ?> <!-- PHP API GET FUNCTIE BY CROCKS -->

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EMAILSPAMMER - EMAIL SPAMMER</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	body {
		background-image: url(http://graphicdesignjunction.com/wp-content/uploads/2012/10/background+pattern+design+33.jpg)
	}
	.footer {
		text-color: green;
	}
	
	#note {
    position: absolute;
    z-index: 101;
    top: 0;
    left: 0;
    right: 0;
    background: #c13434;
    text-align: center;
    line-height: 2.5;
    overflow: hidden; 
    -webkit-box-shadow: 0 0 5px black;
    -moz-box-shadow:    0 0 5px black;
    box-shadow:         0 0 5px black;
}

</style>
<script>
<!-- HEADER  -->
</script>
</head>
<body>
<div id="note">
    <p>Thanks for using our services! Do you want to support our projects? <a href="/app/install.html">Click here!</a></p>
</div>

<br><br>
<br><br>
<br><br>
<center><img src="https://s-media-cache-ak0.pinimg.com/originals/3c/d5/67/3cd5679f54dc60811383649f9f6ea37d.png" alt="LINKY LOGO" >

<!-- spam form -->

<div class="bs-example">
    <form class="form" method="POST" action="">
        <div class="form-group">
            <label for="inputEmail">Email to spam</label>
            <input name="url" class="form-control" value="<?php echo $name; ?>" id="url" placeholder="Example: example@example.com">
        </div>
		
		<div class="form-group">
            <label for="inputEmail">Subject</label>
            <input name="url1" class="form-control" value="<?php echo $name1; ?>" id="url1" placeholder="Example: Test">
        </div>
		
		<div class="form-group">
            <label for="inputEmail">How much?</label>
            <input name="url2" class="form-control" value="<?php echo $name2; ?>" id="url2" placeholder="Example: 100">
        </div>
		
		
    	
			<center><button type="submit" name="resolveBtn" class="btn btn-primary">SPAM THIS EMAIL</button><br></center>
			
	<?php echo $resolved;?>
	
	<!-- End form -->
	<ul>
        </div>
       <div class="footer">
	   <i><b>EMAIL SPAMMER SPECIAL THANKS TO LINKY.CF FOR THE STYLE </b> 2017 </i>
	   </div>
	   

    </form>
	

</div>
</body>
</html>                                		
