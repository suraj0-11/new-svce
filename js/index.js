const textHolders = document.querySelectorAll(".Transition-Left .text-holder");
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1, // Adjust this value to control when the animation triggers
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    } else {
      entry.target.classList.remove("visible");
    }
  });
}, options);

textHolders.forEach((textHolder) => {
  observer.observe(textHolder);
});
