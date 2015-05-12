
<!doctype html>
<html lang="en">
<head>
<title>Online Ordering</title>

<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/stylebuttons.css" type="text/css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
?>
<!--First Pizza Form, Pick Pizza Crust Type-->
<div id="pizzacrust">
      <form method="post" name="pizzacrustform" id="pizzacrustformid">	
        <div id="main">
			<div class="example">
			  <div>
				<input id="pizzacrustinput" type="radio" name="pizzacrust" value="1" checked="checked"><label style="color:black; font-size: 20px;" for="freshpizza">Fresh Dough</label>
			  </div>
			  <div>
				<input id="pizzacrustinput" type="radio" name="pizzacrust" value="2"><label style="color:black; font-size: 20px;" for="originalpizza">Original</label>
			  </div>
			  <div>
				<input id="pizzacrustinput" type="radio" name="pizzacrust" value="3"><label style="color:black; font-size: 20px;" for="panpizza">Deep Dish Pan</label>
			  </div>			  
			</div>
        </div>
     </form>                  
</div>
<div><button href="#" id="btn" >Show Pizza Size</button></div>
        
<!--Second Pizza Form, Pick Pizza Size-->
<div id="pizzasize">
        <form method="post" name="pizzasizeform" id="pizzasizeformid">	
			<div id="main">
				<div class="example">
				  <div>
					<input id="jrpizza" type="radio" name="pizzasize" value="1" checked="checked"><label style="color:black; font-size: 20px;" for="jrpizza">Jr. 6"</label>
				  </div>
				  <div>
					<input id="smallpizza" type="radio" name="pizzasize" value="2"><label style="color:black; font-size: 20px;" for="smallpizza">Small 9"</label>
				  </div>
				  <div>
					<input id="mediumpizza" type="radio" name="pizzasize" value="3"><label style="color:black; font-size: 20px;" for="mediumpizza">Medium 12"</label>
				  </div>
				  <div>
					<input id="largepizza" type="radio" name="pizzasize" value="4"><label style="color:black; font-size: 20px;" for="largepizza">Large 14"</label>
				  </div>			  
				</div>
			</div>
        </form>
</div>
<div><button href="#" id="btn2">Show Pizza Toppings</button></div>

<!--Third Pizza Form, Select How Many Toppings-->		
<div id="pizzatoppings">
    <form method="post"  name="pizzatoppingsform" id="pizzatoppingsformid">	
        <div id="main">
			<div class="example">
			  <div>
				<input id="plainpizza" type="radio" name="pizzatoppings" value="0" checked="checked"><label style="color:black; font-size: 20px;" for="plainpizza">Plain Pizza</label>
			  </div>
			  <div>
				<input id="onepizza" type="radio" name="pizzatoppings" value="1"><label style="color:black; font-size: 20px;" for="onepizza">1 Topping</label>
			  </div>
			  <div>
				<input id="twopizza" type="radio" name="pizzatoppings" value="2"><label style="color:black; font-size: 20px;" for="twopizza">2 Toppings</label>
			  </div>		
			  <div>
				<input id="threepizza" type="radio" name="pizzatoppings" value="3"><label style="color:black; font-size: 20px;" for="threepizza">3 Toppings</label>
			  </div>
			  <div>
				<input id="fourpizza" type="radio" name="pizzatoppings" value="4"><label style="color:black; font-size: 20px;" for="fourpizza">4 Toppings</label>
			  </div>
			  <div>
				<input id="fivepizza" type="radio" name="pizzatoppings" value="5"><label style="color:black; font-size: 20px;" for="fivepizza">5 Toppings</label>
			  </div>	
			  <div>
				<input id="sixpizza" type="radio" name="pizzatoppings" value="15"><label style="color:black; font-size: 20px;" for="sixpizza">6 Or More Toppings</label>
			  </div>
			  <div>
				<input id="tacopizza" type="radio" name="pizzatoppings" value="8"><label style="color:black; font-size: 20px;" for="tacopizza">Taco Pizza</label>
			  </div>			  
			</div>
        </div>
    </form>    
</div> 
<div><button href="#" id="btn3">Pick Pizza Toppings</button></div>
	
<!--Fourth Pizza Form, Select What Kinds Of Toppings-->                  
<div id="pizzatoppingtypes">
     <form method="post" name="toppingtypesform" id="toppingtypesformid">	
        <div id="main">
			<div class="example">
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Bacon"/><label style="color:black; font-size: 20px;" for="bacon">Bacon</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Banana Peppers"/><label style="color:black; font-size: 20px;" for="bananapeppers">Banana Peppers</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Black Olives"/><label style="color:black; font-size: 20px;" for="blackolives">Black Olives</label>
			  </div>		
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Green Peppers"/><label style="color:black; font-size: 20px;" for="greenpeppers">Green Peppers</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Ham"/><label style="color:black; font-size: 20px;" for="ham">Ham</label>
			  </div>	
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Hamburger"/><label style="color:black; font-size: 20px;" for="hamburger">Hamburger</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Italian Sausage"/><label style="color:black; font-size: 20px;" for="italiansausage">Italian Sausage</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Jalapeno Peppers"/><label style="color:black; font-size: 20px;" for="jalapenopeppers">Jalapeno Peppers</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Canned Mushrooms"/><label style="color:black; font-size: 20px;" for="cannedmushrooms">Canned Mushrooms</label>
			  </div>			 
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Fresh Mushrooms"/><label style="color:black; font-size: 20px;" for="freshmushrooms">Fresh Mushrooms</label>
			  </div>		
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Onions"/><label style="color:black; font-size: 20px;" for="onions">Onions</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Pepperoni"/><label style="color:black; font-size: 20px;" for="pepperoni">Pepperoni</label>
			  </div>	
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Pineapple"/><label style="color:black; font-size: 20px;" for="pineapple">Pineapple</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Sliced Smoked Sausage"/><label style="color:black; font-size: 20px;" for="slicedsmokedsausage">Sliced Smoked Sausage</label>
			  </div>
			  <div>
				<input id="toppingtypes" type="checkbox" name="toppingtypes" value="Extra Cheese"/><label style="color:black; font-size: 20px;" for="extracheese">Extra Cheese</label>
			  </div>			  
			</div>
        </div>
     </form>    
</div>
<div><button href="#" id="btn4">Sort Pizza Toppings</button></div>  

 <!--Fifth Pizza Form, Sort The Toppings-->    
<div id="pizzatoppingsort" >
            <form method="post" name="splittoppings" id="splittoppingsid	
				<div id="main">
					<div class="example">
						<div>
							<!--The First Half (Left Side) Of The Pizza-->
							<div id="pos" width="200px">
								<img src="images/pizzaleft.gif"/>
								<h3>First Half</h3>
									<ul id="sortable1" class="connectedSortable">
									  <!--The Potential Moved Items Go Here-->
									</ul>
							</div>
							
							<!--The Whole Pizza-->	
							<div id="pos" style="margin-left:200px;" width="200px">
								<img align="center" src="images/pizza.gif"/>
								<h3>Whole Pizza</h3>
									<ul id="sortable3" class="connectedSortable">
											<?php 
											  if(isset($_SESSION["selectedarray"][0])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][0] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][1])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][1] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][2])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][2] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][3])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][3] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][4])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][4] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][5])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][5] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][6])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][6] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][7])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][7] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][8])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][8] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][9])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][9] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][10])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][10] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][11])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][11] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][12])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][12] . '</li>';} else {echo ' ';}
											  if(isset($_SESSION["selectedarray"][13])) {echo '<li class="ui-state-default">' . $_SESSION["selectedarray"][13] . '</li>';} else {echo ' ';}	
											?>
									</ul>
							</div>	
							
							<!--The Second Half (Right Side) Of The Pizza-->	
							<div id="pos" style="margin-left:400px;" width="200px">
								<img src="images/pizzaright.gif"/>
								<h3>Second Half</h3> 
									<ul id="sortable2" class="connectedSortable">
									  <!--The Potential Moved Items Go Here-->
									</ul>
							</div>
						</div>	
					</div>
				</div>
			</form>
</div>
<!--Add Pizza Item To Cart-->
<div style="margin-left:600px;"><button href="#" id="btn5">Add Pizza To Cart</button></div> 
 
 
 
 
<!--Scripting For All Functions And Visuals-->
<!--Controls All Button Fades-->
<script>
$('#btn').click(function(e){ 
			var pizzacrust= $('input[name="pizzacrust"]:checked').val();		
			$.post("submit.php",
					{
					  data1: pizzacrust,
					},
					// Just A Test, Will add these form Values To Sessions and then to MySQL
					function(data,status){
					<!--    alert(data); Just To Test The Script -->
					});

				$('#pizzacrust, #btn').fadeOut('slow', function(){
				  $('#pizzasize, #btn2').fadeIn('slow');
				});
          })
       
$('#btn2').click(function(e){    
    $('#pizzasize, #btn2').fadeOut('slow', function(){
        $('#pizzatoppings, #btn3').fadeIn('slow');
		$('#pizzasizeformid').submit();		
    });
});

$('#btn3').click(function(e){   
    $('#pizzatoppings, #btn3').fadeOut('slow', function(){
        $('#pizzatoppingtypes, #btn4').fadeIn('slow');
		$('#pizzatoppingsformid').submit();
		
    });
});

$('#btn4').click(function(e){   
	var selected = new Array();
		$("input:checkbox[name=toppingtypes]:checked").each(function()
			{
					 selected.push($(this).val());
					 $.post("toppingtypes.php",
					{
					  selectedarray: selected,
					},
					function(data,status){
					});
			});
			<!-- For Testing:  alert(selected); -->
			$('#pizzatoppingtypes, #btn4').fadeOut('slow', function(){
					$('#pizzatoppingsort, #btn5').fadeIn('slow');
					$('#toppingtypesformid').submit();	
			});
});

$('#btn5').click(function(e){    
    $('#pizzatoppingsort, #btn5').fadeOut('slow', function(){
        $().fadeIn('slow');
    });
});
</script>
<!--Needed JQuery-->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--Allows Toppings To Be Sorted On Pizza Sort Page-->
<script>
  $(function() {
    $( "#sortable1, #sortable2, #sortable3" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });
</script>
<!--Function To Check How Many Check Boxes Are Clicked-->
<script>
  function getRadioVal(form, name) {
    // get list of radio buttons with specified name
    var radios = form.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            var vam = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return vam;
}
</script>
<!--Allows Page To Be Submitted Without Needing To Be Refreshed-->
<script>
$(document).ready(function () {
    $('#pizzasizeformid').on('submit', function(e) {
        e.preventDefault();
    });
});
$(document).ready(function () {
    $('#pizzatoppingsformid').on('submit', function(e) {
        e.preventDefault();
    });
});
$(document).ready(function () {
    $('#toppingtypesformid').on('submit', function(e) {
        e.preventDefault();
    });
});
</script>
<!--Invoking getRadioVal() Function -->
<script>
		$(document).ready(function () {
			var val; //Defined Here So That It Should Be Able To Be Used On Both Functions Below.
			<!--Figures Out How Many Toppings The Person Wants-->
			$('#pizzatoppingsformid').submit(function( event ) {
					val = getRadioVal(this, 'pizzatoppings');
					});
			<!--Limits How Many Check Boxes A Person Can Select Based On How Many Toppings They Selected. -->
			$("input[id='toppingtypes']").change(function () {
				var maxAllowed = Number(val); //If I Use An Actual Number Such As 2 Instead of This val Variable, This Function Works.
				var cnt = $("input[id='toppingtypes']:checked").length;
				if (cnt > maxAllowed) {
					$(this).prop("checked", "");
					alert('You can select a maximum of ' + maxAllowed + ' Toppings');
				}
			});
		});
</script>
</body>
</html>
