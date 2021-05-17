load = () => {
  // var img = document.getElementsByClassName("freepik");
  // var mask = img[0];
  // var wash = img[1];
  // var temp = img[2];
  // var dist = img[3];
  // var notouch = img[4];
  // var cough = img[5];
  for (var i = 0; i < img.length; i++) {
    var alt = img[i].getAttribute("alt");
    img[i].setAttribute("title", alt);
    console.log(alt, img[i]);
  }
};
document.addEventListener("DOMContentLoaded", load);
