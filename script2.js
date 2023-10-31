// script.js
document.addEventListener('DOMContentLoaded', function () {
    const entryForm = document.getElementById('entry-form');
    const entryList = document.getElementById('entry-list');
    const entryTable = document.getElementById('entry-table');
    
    entryForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const date = document.getElementById('date').value;
        const day = document.getElementById('day').value;
        const vehicle = document.getElementById('vehicle').value;
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
        const email = document.getElementById('email').value;
        const entryTime = document.getElementById('entry-time').value;
        const officeNo = document.getElementById('office-no').value;

        // Create a new row for the table
        const newRow = entryTable.insertRow(-1);
        const cells = [
            date, day, vehicle, name, phone, address, email, entryTime, officeNo
        ];

        for (let i = 0; i < cells.length; i++) {
            const cell = newRow.insertCell(i);
            cell.textContent = cells[i];
        }

        // Clear input fields
        entryForm.reset();
    });
});

