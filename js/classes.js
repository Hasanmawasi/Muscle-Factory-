const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");



menuItems.forEach((item,index)=>{
    item.addEventListener("click", () =>{
        // choose the current slide
        wrapper.style.transform = `translateX(${-100 * index}vw)`;

        

    });
});


const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

// productButton.addEventListener("click", () => {
//     payment.style.display = "flex";
// });

// close.addEventListener("click", () => {
//     payment.style.display = "none";
// });


// cards insertion

// document.addEventListener("DOMContentLoaded", () => {
//     fetch('fetch_products.php')
//         .then(response => response.json())
//         .then(products => {
//             const container = document.querySelector('.container.bodyCon');
//             container.innerHTML = ''; // Clear any existing content

//             products.forEach(product => {
//                 const card = document.createElement('div');
//                 card.className = 'card col-md-3';
//                 card.innerHTML = `
//                     <div class="card-img text-center">
//                         <div class="img">
//                             <img src="${product.image_url}" style="width: 150px; height: 150px;" alt="${product.title}">
//                         </div>
//                     </div>
//                     <div class="card-title">${product.title}</div>
//                     <div class="card-subtitle">${product.subtitle}</div>
//                     <hr class="card-divider">
//                     <div class="card-footer">
//                         <div class="card-price"><span>$</span>${product.price}</div>
//                         <button id="incr" onclick="count()" class="card-btn">
//                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
//                                 <path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path>
//                                 <path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path>
//                                 <path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path>
//                                 <path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path>
//                             </svg>
//                         </button>
//                     </div>
//                 `;
//                 container.appendChild(card);
//             });
//         })
//         .catch(error => console.error('Error fetching products:', error));
// });

$(document).ready(function() {
    $('h3').click(function() {
        
        var classes = $(this).data('class');
       
        fetchProducts(classes);
    });

    function fetchProducts(classes) {
        
        $.ajax({
            url: './fetch_class.php',
            method: 'GET',
            data: { class: classes },
            dataType: 'json',
            success: function(data) {
                const container = $('#class');
                container.empty(); // Clear existing cards
                data.forEach(product => {
                    const card = document.createElement('div');
                                    // card.className = 'card col-md-3';
                                    card.innerHTML = `
                                        <div class="cards-container mt-3">
                            <span id="strength"></span>
                            <div class="cards-container" id="strength">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8 class-card">
                                        <section id="card1" class="card">
                                            <div class="row no-gutters h-100 c-shadow">
                                                <div class="col-12 col-md-6">
                                                    <img src="${product.classImage}" alt="Class Image" class="img-fluid class-image">
                                                </div>
                                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                                                    <div class="card-body">
                                                        <p class="card-title">${product.className}</p>
                                                        <p class="card-text">${product.classDesc}</p>
                                                        <button class="btn btn-danger" data-open>Register</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                </div>
                        </div>
                                    `;
                    container.append(card);
                });
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }
});