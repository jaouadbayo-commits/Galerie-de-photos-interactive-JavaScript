
function upDate(previewPic) {
    console.log("Événement déclenché !");
    console.log("Image source :", previewPic.src);
    console.log("Image alt :", previewPic.alt);

  
    let mainImageText = document.getElementById("image");
    mainImageText.innerHTML = previewPic.alt;

   
    mainImageText.style.backgroundImage = `url('${previewPic.src}')`;
}

function unDo() {
    
    let mainImageText = document.getElementById("image");
    mainImageText.innerHTML = "Hover over an image below to display here";

    
    mainImageText.style.backgroundImage = "url('')";
}

let previews = document.querySelectorAll(".preview");
previews.forEach(preview => {
    preview.addEventListener("mouseover", () => upDate(preview));
    preview.addEventListener("mouseout", unDo);
});
