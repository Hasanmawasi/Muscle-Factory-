const calculate = document.querySelector('.btn');
const table = document.querySelector('#resultsTable');

calculate.addEventListener('click', ()=>{
    table.style.display = "block";
    calculate.style.display = "block";
});

function calculateBMI() {
    const name = document.getElementById('name').value;
    const gender = document.getElementById('gender').value;
    const age = document.getElementById('age').value;
    const weight = document.getElementById('weight').value;
    const height = document.getElementById('height').value;

    if (name && gender && age && weight && height) {
        const heightInMeters = height / 100;
        const bmi = weight / (heightInMeters * heightInMeters);
        const roundedBMI = bmi.toFixed(2);
        let category = '';
        // let range = 'Underweight: < 18.5, Normal weight: 18.5 - 24.9, Overweight: 25 - 29.9, Obese: ≥ 30';

        if (bmi < 18.5) {
            category = 'Underweight';
        } else if (bmi >= 18.5 && bmi < 24.9) {
            category = 'Normal weight';
        } else if (bmi >= 25 && bmi < 29.9) {
            category = 'Overweight';
        } else {
            category = 'Obese';
        }

        // Insert the result into the table
        const table = document.getElementById('resultsTable').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();
        newRow.innerHTML = `
            <td>${name}</td>
            <td>${gender}</td>
            <td>${age}</td>
            <td>${weight}</td>
            <td>${height}</td>
            <td>${roundedBMI}</td>
            <td>${category}</td>
            
        `;

        // Save the data in the database
        saveData(name, gender, age, weight, height, roundedBMI, category);
    } else {
        alert('Please fill in all fields.');
    }
}

function saveData(name, gender, age, weight, height, bmi, category) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_data.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            console.log(this.responseText);
        }
    }
    xhr.send(`name=${name}&gender=${gender}&age=${age}&weight=${weight}&height=${height}&bmi=${bmi}&category=${category}`);
}

function downloadCSV() {
    const table = document.getElementById('resultsTable');
    let csvContent = '';
    for (let row of table.rows) {
        let rowData = Array.from(row.cells).map(cell => cell.innerText).join(',');
        csvContent += rowData + '\r\n';
    }
    const blob = new Blob([csvContent], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.setAttribute('hidden', '');
    a.setAttribute('href', url);
    a.setAttribute('download', 'bmi_results.csv');
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

// TABLE POP UP
const productButton = document.querySelector("#calculate");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");
const close1 = document.querySelector(".payButton");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});
close1.addEventListener("click", () => {
  payment.style.display = "none";
});
