const textHolders = document.querySelectorAll(".Transition-Left .text-holder ");
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
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

// Academic Onscroll
gsap.registerPlugin(ScrollTrigger);

// Fade in animations
const fadeInElements = gsap.utils.toArray(".fade-in");
fadeInElements.forEach((element) => {
  gsap.fromTo(
    element,
    {
      opacity: 0,
      y: 50,
    },
    {
      opacity: 1,
      y: 0,
      scrollTrigger: {
        trigger: element,
        start: "top 60%",
      },
    }
  );
});

// Background image animation
const backgroundImage = document.querySelector(".background-image");
const textContainer = document.querySelector(".text-container");

gsap.fromTo(
  backgroundImage,
  {
    scale: 1.2,
  },
  {
    scale: 1,
    scrollTrigger: {
      trigger: backgroundImage,
      start: "top 80%",
      end: "bottom top",
      scrub: true,
    },
  }
);

gsap.fromTo(
  textContainer,
  {
    opacity: 0,
  },
  {
    opacity: 1,
    scrollTrigger: {
      trigger: backgroundImage,
      start: "top 80%",
      end: "bottom top",
      scrub: true,
    },
  }
);
