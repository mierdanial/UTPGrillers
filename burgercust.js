// ... (existing code)

        // Retrieve values from localStorage
        var itemName = localStorage.getItem('itemName');
        var itemPrice = localStorage.getItem('itemPrice');
        var itemImage = localStorage.getItem('itemImage');

        // Create a new table row
        var newRow = document.createElement('tr');

        // Add cells to the new row
        newRow.innerHTML = `
            <td>${itemName}</td>
            <td>${itemPrice}</td>
            <td>${itemImage}</td>
        `;

        // Append the new row to the table body
        var tableBody = document.getElementById('tableBody');
        tableBody.appendChild(newRow);
    
// Function to generate HTML for menu items
function generateMenuHTML() {
    var menuHTML = '';

    for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];

        menuHTML += '<tr>';
        menuHTML += '<td><img src="' + menuItem.imageSrc + '" alt="' + menuItem.itemName + '"></td>';
        menuHTML += '<td>' + menuItem.itemName + '</td>';
        menuHTML += '<td><input type="text" size="10" name="' + menuItem.itemName + '_price" disabled="disabled" class="textfield" value="' + menuItem.itemPrice + '"></td>';
        menuHTML += '<td><input type="text" size="10" name="' + menuItem.itemName + '_quantity" onchange="' + menuItem.itemName + '_updateSubtotal();" class="center" /></td>';
        menuHTML += '<td><input type="text" size="10" name="' + menuItem.itemName + '_subtotal" disabled="disabled" class="textfield" /></td>';
        menuHTML += '</tr>';
    }

    return menuHTML;
}

// Function to add a menu item to the table
function addMenuItem(menuItem) {
    var table = document.querySelector("table");

    var newRow = table.insertRow(-1);

    var imageCell = newRow.insertCell(0);
    var nameCell = newRow.insertCell(1);
    var priceCell = newRow.insertCell(2);
    var quantityCell = newRow.insertCell(3);
    var subtotalCell = newRow.insertCell(4);

    imageCell.innerHTML = '<img src="' + menuItem.imageSrc + '" alt="' + menuItem.itemName + '">';
    nameCell.textContent = menuItem.itemName;
    priceCell.innerHTML = '<input type="text" size="10" name="' + menuItem.itemName + '_price" disabled="disabled" class="textfield" value="' + menuItem.itemPrice + '">';
    quantityCell.innerHTML = '<input type="text" size="10" name="' + menuItem.itemName + '_quantity" onchange="' + menuItem.itemName + '_updateSubtotal();" class="center" />';
    subtotalCell.innerHTML = '<input type="text" size="10" name="' + menuItem.itemName + '_subtotal" disabled="disabled" class="textfield" />';
}

// Modify the onLoad function
function onLoad() {
    // Your existing initialization code
    updateMenu(); // Update the menu when the main page loads
}

// Call the onLoad function when the page loads
window.onload = onLoad;
