<!--max devos made this -->

<?php
//header function to set up the beginning of the webpage
//call this function by declaring 
//makeHeader(string: "tabbar title here",string: "page title here", Int: style#);
//style can be either 0,1,2, or 3 where 0 is default and the other three are more detailed premade styles
function makeHeader($tbtitle,$ptitle,$pstyle){
	
	echo("
	<html>
		<header>
			<title>". $tbtitle . "</title>
			<style>". styleChoice($pstyle) . "</style>
		</header>
		<body>
			<div class='header'>
				<h1 id='headerTitle'>". $ptitle . "</h1>
			</div>
	");
}
//footer function to set up the end of a webpage easier
//call this function by declaring
//makeFooter(String: "message", Int style#);
//leave style as 0 if you want to keep the style from the makeHeader functions
function makeFooter($footermessage,$pstyle){
	echo("
		<style>". styleChoice($pstyle) ."</style>
			
				<div class='footer'>
					<h3 id='footerMessage'>". $footermessage . "</h3>
				</div>
			
		<body>
			
	<html>
	");
}
function styleChoice($styleNum){
	switch($styleNum){
		case 1://basic style with some bare structure
		return $styleText= "
			html{
		margin:0;
		padding:0;
		background:Black;
		color:White;
		}
		
		body{
		margin: 0 10% 0 10%;
		padding: 0 1% 0 1%;
		background:Orange;
		color:white;
		font-size: 20px;
		}
		
		.header{
		position:absolute
		width:78%;
		height:75px;
		background:Red;
		color:black;
		margin-top:0;
		border-radius: 0 0 10px 10px;
		}
		#headerTitle{
		text-align: Center;
		}
		
		.footer{
		position:absolute;
    	bottom:0;
   		width:78%;
    	height:75px;
    	background:Red;
    	color:black;
		border-radius: 10px 10px 0 0;
		}
		
		#footerMessage{
		text-align: Center;
		}
		";
		break;
		case 2://moderately complex
		
		break;
		case 3://very complex and fancy 
		
		break;
		default://select this style if you want to have our own style. Just have your <style> tags be your first line of code between the header and footer functions
		return $styleText = "";
	}
}
?>