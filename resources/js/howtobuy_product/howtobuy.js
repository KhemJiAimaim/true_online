import '../global_js/hide_banner.js'

console.log("use js how to buy")

const centeredParagraphs = document.querySelectorAll('#article-content p[style="text-align:center"]')

centeredParagraphs.forEach(p => {
  const img = p.querySelector('img');
  if (img) {
      img.classList.add('centered-image');
  }
});