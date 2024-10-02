//tk sure 100% boleh ke tk
function validateForm() {
  // Get the form elements
  var form = document.forms[0];
  var name = form.elements['Name'];
  var table = form.elements['Table'];
  var chickenb = form.elements['Chicken Burger'];
  var beefb = form.elements['Beef Burger'];
  var lambb = form.elements['Lamb Burger'];
  var fishb = form.elements['Fish Burger'];
  var cola = form.elements['Lemon Cola'];
  var lime = form.elements['Solero Lime'];
  var milk = form.elements['Banana Milk'];
  var water = form.elements['Mineral Water'];
  

  // Validate the name field
  if (name.value.trim() == '') {
    alert('Please enter your name.');
    name.focus();
    return false;
  }

// Validate the Table field
  if (table.value == '') {
    alert('Please enter your Table Number.');
    Table.focus();
    return false;
  }
  // Validate the FnB field
  if (chickenb.value == '') {
    Table.focus();
    return false;
  }
  
  // Validate the FnB field
  if (beefb.value == '') {
    Table.focus();
    return false;
  }
  
    // Validate the FnB field
  if (lambb.value == '') {
    Table.focus();
    return false;
  }
  
    // Validate the FnB field
  if (fishb.value == '') {
    Table.focus();
    return false;
  }
  
    // Validate the FnB field
  if (cola.value == '') {
    Table.focus();
    return false;
  }
  
    // Validate the FnB field
  if (lime.value == '') {
    Table.focus();
    return false;
  }
  
    // Validate the FnB field
  if (milk.value == '') {
    Table.focus();
    return false;
  }
  
    // Validate the FnB field
  if (water.value == '') {
    Table.focus();
    return false;
  }

  // If the form data is valid, return true to submit the form
  return true;
}
