<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Form</title>
</head>

<body>
	<?php
    echo "<p>We have received your order.☆ ～('▽^人)</p>"
    
    // display estimated wait time based on delivery method 
    $deliveryMethod = document.forms[0].p_or_d.value;
    "<p><EM>Your order will be ready at: " + waitTime(deliveryMethod) +"</EM></p><br>";
    
    // display the summary of all items ordered
    for (i = 0; i < menuItems.length; i++) {
        if ($("select[name = quan" + i +"]")[0].selectedIndex > 0)
            echo menuItems[i].name + "(" +
                $("select[name = quan" + i +"]")[0].selectedIndex + ")" 
                + ": $" + menuItems[i].cost + "<br>"; 
    }
    
    //what the user needs to payment
    echo "<p>Subtotal: $" + document.forms[0].subtotal.value + "</p>");
    echo"<p>Tax: $" + document.forms[0].tax.value + "</p>");
    echo"<h3><b>Total: $" + document.forms[0].total.value + "</b></h3>");
	?>
</body>
</html>
