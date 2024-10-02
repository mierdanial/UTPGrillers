
function submitForm() {
    // Get values from the form
    var itemName = document.getElementById('Name').value;
    var itemPrice = document.getElementById('Price').value;


    // Create a new table row
    var newRow = document.createElement('tr');

    // Add cells to the new row
    newRow.innerHTML = `

    <td>${Name}</td>
    <td><input type="text" size="10" name="${Name}_price" disabled="disabled" class="textfield" value="${Price}"></td>
    <td><input type="text" size="10" name="${Name}_quantity" class="center" onchange="updateSubtotal('${Name}')"></td>
    <td><input type="text" size="10" name="${Name}_sub_total" disabled="disabled" class="textfield"></td>
`;


    // Append the new row to the table in the current HTML file
    var table = document.querySelector('table');
    table.appendChild(newRow);

    // Clear the form fields
    document.getElementById('Name').value = '';
    document.getElementById('Price').value = '';
   
}


