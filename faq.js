const faqs = document.querySelectorAll(".faq-item");

  faqs.forEach(item => {
    item.querySelector(".faq-pregunta").addEventListener("click", () => {
      item.classList.toggle("active");
    });
  });