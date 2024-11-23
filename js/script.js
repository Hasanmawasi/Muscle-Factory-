




const cardsContainer = document.querySelector(".coachesCont");

cardsContainer.addEventListener("click", (e) => {
  const target = e.target.closest(".card");

  if (!target) return;

  cardsContainer.querySelectorAll(".card").forEach((card) => {
    card.classList.remove("active");
  });

  target.classList.add("active");
});


const openBtn = document.querySelectorAll("[data-open]");
const closeBtn = document.querySelectorAll("[data-close]");
const modal = document.querySelector("#modal");

// Open the modal when the button is clicked
openBtn[0].addEventListener("click", () => {
  modal.showModal();
});

// Close the modal when the close button is clicked
closeBtn[0].addEventListener("click", () => {
  modal.close();
});

openBtn[1].addEventListener("click", () => {
  modal.showModal();
});

// Close the modal when the close button is clicked
// closeBtn[1].addEventListener("click", () => {
//   modal.close();
// });


function register(cid){
  $.ajax({
    url:"./register.php",
    method:"post",
    data:{ 
      id:cid ,
    },
    success:(response)=>{
      console.log(response);
    }
  })
};