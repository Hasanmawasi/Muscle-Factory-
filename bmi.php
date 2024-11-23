<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Advanced BMI Calculator</title>
    <link rel="stylesheet" href="./css/bmi.css">
</head>
<body>
    <div class="bmi-container">
    <div class="desc">
        <div class="desc-item">
            <img src="./photos/bmi.png" alt="" class= "bmi-img">
        </div>
        <div class="desc-item">
        <h1 class="bmi-h1">BMI CALCULATOR</h1>
        <P class= "bmi-p">Use our BMI (Body Mass Index) Calculator to determine whether you're in a healthy weight range for your height. BMI is a useful tool to assess if you are underweight, normal 
            weight, overweight, or obese. Here's how it works:</P>
            <ol>
                <li class="bmi-li">Enter your weight and height: Provide your weight
                    in kilograms (kg) and height in meters (m).</li>
                <li class="bmi-li">Calculate your BMI: Click the calculate button to get 
                    your BMI value.</li>
            </ol>
        <h2 class="bmi-h2">BMI Ranges and Health States</h2>
        <ul>
            <li class="bmi-li">Underweight (BMI < 18.5): This range suggests that you may need to gain weight for better health</li>
            <li class="bmi-li">Normal weight (BMI 18.5 - 24.9): This range indicates a healthy weight.</li>
            <li class="bmi-li">Overweight (BMI 25 - 29.9): This range suggests that you may need to lose weight for better health.</li>
            <li class="bmi-li">Obesity (BMI ≥ 30): This range indicates a higher risk of health issues related to obesity.</li>
        </ul>
    </div>
    </div>

    <div class="calculator">
        <h1>BMI Calculator</h1>
        <select  id="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <div class="inputs-container">
        <input class="choose" type="text" id="name" placeholder="Name" required>
        
        
        <input class="choose" type="number" id="age" placeholder="Age (years)" required>
        <input class="choose" type="number" id="weight" placeholder="Weight (kg)" required>
        <input class="choose" type="number" id="height" placeholder="Height (cm)" required>
        <button class="choose btn" onclick="calculateBMI()">Calculate BMI</button>
        </div>
    </div>
    </div>
    <div>
        
        
        <!-- <button onclick="downloadCSV()">Download Results as CSV</button> -->
        <table id="resultsTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Weight (kg)</th>
                    <th>Height (cm)</th>
                    <th>BMI</th>
                    <th>Category</th>
                    <!-- <th>Ranges</th> -->
                </tr>
            </thead>
            <tbody>
                <!-- Results will be inserted here -->
            </tbody>
        </table>
        <button onclick="downloadCSV()" class="download-button">
            Download
            <span class="arrow-down">⬇️</span>
        </button>
    </div>

    <script>
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
    </script>
</body>
</html>
