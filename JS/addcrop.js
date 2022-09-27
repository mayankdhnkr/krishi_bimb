const input= document.querySelector("#img-upload");

input.addEventListener("change",function(){
    const reader=new FileReader();
    reader.addEventListener("load",function(){
        const uploaded_image=reader.result;
        document.querySelector("#placeholder-image").classList.add("hide-image");
        document.querySelector("#upload-image").style.backgroundImage=`url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
});