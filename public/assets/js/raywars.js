function toggleImageOnHover(ele) {
  var id = ele.dataset.imageid;
  var srcPath = "/cards/image/card"+ id +"_1.png";
  var targetEle = document.getElementById("imageBox");
  targetEle.src = srcPath;
}