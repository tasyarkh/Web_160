// img slider
const sliders = document.querySelectorAll("[data-slider]"); // seleksi elemen HTML yang memiliki atribut data-slider.

// def func initSlider untuk inisialisasi slider yang diberikan (currentSlider).
const initSlider = function(currentSlider) {

  // seleksi elemen dari currentSlider seperti container slider, tombol prev, dan tombol next berdasarkan atribut data mereka.
  const sldierContainer = currentSlider.querySelector("[data-slider-container]");
  const sliderPrevBtn = currentSlider.querySelector("[data-slider-prev]");
  const sliderNextBtn = currentSlider.querySelector("[data-slider-next]");

  let currentSlidePos = 0; // def posisi slide aktif, diinisialisasi ke 0.

  const moveSliderItem = function () {
    sldierContainer.style.transform = `translateX(-${sldierContainer.children[currentSlidePos].offsetLeft}px)`;
  }

  // slide next
  const slideNext = function () { // func berpindah ke slide berikutnya. jika sudah di akhir slide, kembali ke awal.
    const slideEnd = currentSlidePos >= sldierContainer.childElementCount - 1;

    if (slideEnd) {
      currentSlidePos = 0;
    } else {
      currentSlidePos++;
    }

    moveSliderItem();
  }

  // btn next slide
  sliderNextBtn.addEventListener("click", slideNext); // event listener ke tombol next, ketika diklik, panggil fungsi slideNext.

  // slide prev
   const slidePrev = function () { // func berpindah ke slide sebelumnya. jika sudah di awal slide, kembali ke akhir.

    if (currentSlidePos <= 0) {
      currentSlidePos = sldierContainer.childElementCount - 1;
    } else {
      currentSlidePos--;
    }

    moveSliderItem();
  }

  // btn prev slide
  sliderPrevBtn.addEventListener("click", slidePrev); // event listener ke tombol prev, ketika diklik, panggil fungsi slideprev.
}

for (let i = 0, len = sliders.length; i < len; i++) { initSlider(sliders[i]); }


// tentang kami
const accordions = document.querySelectorAll("[data-accordion]"); // seleksi elemen HTML yang memiliki atribut data-accordion.

let lastActiveAccordion = accordions[0]; // simpan yang terakhir aktif, diinisialisasi ke akordion pertama.

const initAccordion = function (currentAccordion) { // def func initAccordion untuk inisialisasi akordion yang diberikan (currentAccordion).

  const accordionBtn = currentAccordion.querySelector("[data-accordion-btn]"); // seleksi elemen btn dalam akordion saat ini berdasarkan atribut data.

  const expandAccordion = function () { // func untuk meng-expand akordion saat ini. Jika ada akordion lain yang aktif sebelumnya, akan ditutup.
    if (lastActiveAccordion && lastActiveAccordion !== currentAccordion) {
      lastActiveAccordion.classList.remove("expanded");
    }

    currentAccordion.classList.toggle("expanded");

    lastActiveAccordion = currentAccordion;
  }

  accordionBtn.addEventListener("click", expandAccordion); // event listener ke tombol akordion, sehingga ketika diklik, memanggil fungsi expandAccordion

}

for (let i = 0, len = accordions.length; i < len; i++) { initAccordion(accordions[i]); }
