

    const body = document.querySelector("body");
const modal = document.querySelector(".mod");

const modalButton = document.querySelectorAll(".mod-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
const submit = document.querySelector('.submit');
let isOpened = false;

const openModal = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeModal = (e) => {
  e.preventDefault();
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal();
  }
});

modalButton.forEach(btn => btn.addEventListener("click", openModal));
closeButton.addEventListener("click", closeModal);
submit.addEventListener('click',storeindb)

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};

