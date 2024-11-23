const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

// ==================
const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");
const paybutton = document.querySelector(".payButton");


productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});
paybutton.addEventListener("click", () => {
    payment.style.display = "none";
  });
close.addEventListener("click", () => {
  payment.style.display = "none";
});
// ==================


menuItems.forEach((item,index)=>{
    item.addEventListener("click", () =>{
        // choose the current slide
        wrapper.style.transform = `translateX(${-100 * index}vw)`;

        

    });
});





$(document).ready(function() {
    $('h3').click(function(event) {
        event.preventDefault();
        var company1 = $(this).data('company');
       
        fetchProducts(company1);
    });

    function fetchProducts(company1) {
        
        $.ajax({
            url: './fetch_data.php',
            method: 'GET',
            data: { company: company1 },
            dataType: 'json',
            success: function(data) {
                const container = $('#cards-container');
                container.empty(); // Clear existing cards
                data.forEach(product => {
                    const card = document.createElement('div');
                                    card.className = 'card z-1 col-md-3';
                                    card.innerHTML = `
                                        <div class="card-img text-center">
                                            <div class="img">
                                                <img src="${product.image_url}" style="width: 150px; height: 150px;" alt="${product.name}">
                                            </div>
                                        </div>
                                        <div class="card-title">${product.name}</div>
                                        <div class="card-subtitle">${product.description}</div>
                                        <hr class="card-divider">
                                        <div class="card-footer">
                                            <div class="card-price"><span>$</span>${product.price}</div>
                                            <a onclick='sendId(${product.id})' >
                                            <button  class="card-btn addtobag">
                                                <svg   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path>
                                                    <path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path>
                                                    <path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path>
                                                    <path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path>
                                                </svg>
                                            </button></a>
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




function sendId(id1){
    this.preventDefault;
$(document).ready(()=>{

$.ajax({
    url:"./shopbag.php",
    method:"get",
    data:{
        id:id1
    },
    
});


})


}