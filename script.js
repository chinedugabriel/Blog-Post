// veriables for input dropdown post status page

let dropDownStatus = document.getElementById('post-status-dropdown');

// Veriables for displaying image priview for post page
let imgUploadInput = document.getElementById("upload-img");

let imagePostPreview = document.getElementById("imgPreview");

let imgPreviewText = document.getElementById('img-message');

// veriable for the post page checkbox
let sliderCheckBox = document.getElementById('slider-checker');

// this function changes the dropdown option for post status
function changeDropdownText(){
    
    if(dropDownStatus.value == "draft"){
        dropDownStatus.removeAttribute("class","text-success form-select");
        dropDownStatus.setAttribute("class","text-danger form-select");
    }else{
        dropDownStatus.removeAttribute("class","text-danger form-select");
        dropDownStatus.setAttribute("class","text-success form-select");
    }

}


// This event Listener helps to get the image from the input file in the post page and display's it in the preview box (imagePostPreview)
imgUploadInput.addEventListener('change', (event)=>{
    // alert('js is working');
    const file = event.target.files[0]; // Get the selected file

    if (file && file.type.startsWith("image/")) {
        const reader = new FileReader();

        // When the file is read, set it as the background image
        reader.onload = function(e) {
            imagePostPreview.style.backgroundImage = `url(${e.target.result})`;
            imgPreviewText.style.display = 'none';
        };

        // Read the file as a Data URL (base64)
        reader.readAsDataURL(file);
    } else {
        alert("Please select a valid image file.");
    }
});

// This helps to toggle the value of the checkbox Slider in the post page
sliderCheckBox.addEventListener('change',()=>{
    if (sliderCheckBox.checked == true ){
        // alert('working o!');
        sliderCheckBox.value = 'show';
        // console.log(sliderCheckBox.value);
    }else{
        sliderCheckBox.value = 'hide'
        // console.log(sliderCheckBox.value);
    }
});

