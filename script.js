
const urlField = document.querySelector(".field input");
var previewArea = document.querySelector(".preview-area");
var imgTag = previewArea.querySelector(".thumbnail");


urlField.onkeyup = ()=> { 
  let imgUrl = urlField.value; // pegar o valor do link
  previewArea.classList.add("active");
  
   //https://www.youtube.com/watch?v=FucPPCPDd2Y&list=PLpwngcHZlPaf1aw42OGyitm4jh2Dlmi9c&index=4
  // Essa é o Id do video -> FucPPCPDd2Y 
  if(imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1){ //se colocar o valor da url do video
    let vidId = imgUrl.split("v=")[1].substring(0,11); // Separando na url apenas o Id do video
    console.log(vidId)
    let ytThumbUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg` // Colocando o id do video para pegar a thumbnail 
    imgTag.src = ytThumbUrl; // passando a thumb do video pra dentro do img src
  }else if(imgUrl.indexOf("https://youtu.be/") != -1) { //Se a url for algo assim

  }else if(imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)){}
}

