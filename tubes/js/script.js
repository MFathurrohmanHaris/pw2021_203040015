var myCarousel = document.querySelector('.myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 3000,
  wrap: true
});

const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// event ketika menulis keyword
keyword.addEventListener('keyup', function(){
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});

// Preview Image untuk tambah dan ubah
function previewImage(){
  const foto = document.querySelector('.foto');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(foto.files[0]);

  oFReader.onload = function (oFREvent){
    imgPreview.src = oFREvent.target.result;
  };
}

// modal
var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
  keyboard: false
});