var Chicken_price = 8.50;
var Beef_price = 9.50;
var Lamb_price = 12.50;
var Fish_price = 9.00;
var Cola_price = 3.50;
var Lime_price = 3.50;
var Banana_price = 5.00;
var Water_price = 1.30;
// Replace the existing line with the new one
fetch('getLatestPrice.php')
    .then(response => response.json())
    .then(data => {
        var Latest_price = data.latestPrice;
        // Use Latest_price in your code
        document.frmCashier.Latest_price.value = Latest_price.toFixed(2);
    })
    .catch(error => console.error('Error:', error));

//var Latest_price = <?php echo $latestPrice; ?>;


var sub = 0.0;

function init() {
  document.frmCashier.chickenb.focus();
  document.frmCashier.Chicken_price.value = Chicken_price.toFixed(2);
  document.frmCashier.Beef_price.value = Beef_price.toFixed(2);
  document.frmCashier.Lamb_price.value = Lamb_price.toFixed(2);
  document.frmCashier.Fish_price.value = Fish_price.toFixed(2);
  document.frmCashier.Cola_price.value = Cola_price.toFixed(2);
  document.frmCashier.Lime_price.value = Lime_price.toFixed(2);
  document.frmCashier.Banana_price.value = Banana_price.toFixed(2);
  document.frmCashier.Water_price.value = Water_price.toFixed(2);
  document.frmCashier.Latest_price.value = Latest_price.toFixed(2); // Add this line to set Latest_price

  document.frmCashier.chickenb.value = "";
  document.frmCashier.beefb.value = "";
  document.frmCashier.lambb.value = "";
  document.frmCashier.fishb.value = "";
  document.frmCashier.coke.value = "";
  document.frmCashier.lime.value = "";
  document.frmCashier.milk.value = "";
  document.frmCashier.water.value = "";
  document.frmCashier.latest_quantity.value = ""; // Add this line to clear latest quantity

  document.frmCashier.Chicken_sub_total.value = sub.toFixed(2);
  document.frmCashier.Beef_sub_total.value = sub.toFixed(2);
  document.frmCashier.Lamb_sub_total.value = sub.toFixed(2);
  document.frmCashier.Fish_sub_total.value = sub.toFixed(2);
  document.frmCashier.Cola_sub_total.value = sub.toFixed(2);
  document.frmCashier.Lime_sub_total.value = sub.toFixed(2);
  document.frmCashier.Banana_sub_total.value = sub.toFixed(2);
  document.frmCashier.Water_sub_total.value = sub.toFixed(2);
  document.frmCashier.Latest_sub_total.value = sub.toFixed(2);

  total();
}

function Chicken_burger() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.chickenb.value);
  sub = Chicken_price * qty;
  document.frmCashier.Chicken_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.beefb.focus();
}

function Beef_burger() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.beefb.value);
  sub = Beef_price * qty;
  document.frmCashier.Beef_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.lambb.focus();
}

function Lamb_burger() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.lambb.value);
  sub = Lamb_price * qty;
  document.frmCashier.Lamb_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.fishb.focus();
}

function Fish_burger() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.fishb.value);
  sub = Fish_price * qty;
  document.frmCashier.Fish_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.coke.focus();
}

function Cola_drink() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.coke.value);
  sub = Cola_price * qty;
  document.frmCashier.Cola_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.lime.focus();
}

function Lime_drink() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.lime.value);
  sub = Lime_price * qty;
  document.frmCashier.Lime_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.milk.focus();
}
function Banana_milk() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.milk.value);
  sub = Banana_price * qty;
  document.frmCashier.Banana_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.water.focus();
}
function Mineral_water() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.water.value);
  sub = Water_price * qty;
  document.frmCashier.Water_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.reset.focus();
}


/* function updateLatestSubtotal() {
  var sub, qty;
  qty = parseFloat(document.frmCashier.latest_quantity.value);
  sub = Latest_price * qty;
  document.frmCashier.Latest_sub_total.value = sub.toFixed(2);
  total();
  document.frmCashier.reset.focus();
}*/

function updateLatestSubtotal() {
 var latestQuantity = document.forms["frmCashier"]["latest_quantity"].value;
    var latestPrice = document.forms["frmCashier"]["Latest_price"].value;
    var latestSubtotal = parseFloat(latestQuantity) * parseFloat(latestPrice);

    document.forms["frmCashier"]["Latest_sub_total"].value = latestSubtotal.toFixed(2);
}


    

function total() {
  var sub_chicken, sub_beef, sub_lamb, sub_fish, sub_cola, sub_lime, sub_banana, sub_water, sub_latest, grand_total;
  sub_chicken = parseFloat(document.frmCashier.Chicken_sub_total.value) || 0;
  sub_beef = parseFloat(document.frmCashier.Beef_sub_total.value) || 0;
  sub_lamb = parseFloat(document.frmCashier.Lamb_sub_total.value) || 0;
  sub_fish = parseFloat(document.frmCashier.Fish_sub_total.value) || 0;
  sub_cola = parseFloat(document.frmCashier.Cola_sub_total.value) || 0;
  sub_lime = parseFloat(document.frmCashier.Lime_sub_total.value) || 0;
  sub_banana = parseFloat(document.frmCashier.Banana_sub_total.value) || 0;
  sub_water = parseFloat(document.frmCashier.Water_sub_total.value) || 0;
  sub_latest = parseFloat(document.frmCashier.Latest_sub_total.value) || 0;
  grand_total = sub_chicken + sub_beef + sub_lamb + sub_fish + sub_cola + sub_lime + sub_banana + sub_water + sub_latest;

  //document.frmCashier.g_total.value = "RM " + grand_total.toFixed(2); 
   document.frmCashier.grand_total.value = "RM " + grand_total.toFixed(2) + sub_latest; 
}
