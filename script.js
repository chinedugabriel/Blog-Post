// veriables for input dropdown post status page

let dropDownStatus = document.getElementById('post-status-dropdown');

// Veriable for displaying image preview for post page
let imgUploadInput = document.getElementById("upload-img");

let imagePostPreview = document.getElementById("imgPreview");

let imgPreviewText = document.getElementById('img-message');

// veriable for the post page checkbox
let sliderCheckBox = document.getElementById('slider-checker');

// for categories in the add post and edith post page respectively

let selectCategoryOptions = document.getElementById('select-category');
let categoryValueList = document.getElementsByClassName('category-value-list');
let inputCategories = document.getElementById('input-categories');

// This veriable is used in the Edith Post Page 
let edithStatusDropdownBTN = document.getElementById('edithPage-post-status-dropdown');

edithStatusDropdownBTN.addEventListener('click',funEdithStatus);

function funEdithStatus(){
    // this function enables us to replace the inner element that was previously placed based on the output of the database
    edithStatusDropdownBTN.innerHTML = '<option class="post-status text-danger" value="draft" > Draft</option> <option class="text-success" value="publish" > Publish</option>';
    edithStatusDropdownBTN.removeEventListener('click',funEdithStatus);
}

// this function changes the dropdown option for post status
if(edithStatusDropdownBTN.value == "draft"){
    edithStatusDropdownBTN.removeAttribute("class","text-success form-select");
    edithStatusDropdownBTN.setAttribute("class","text-danger form-select");
}else{
    edithStatusDropdownBTN.removeAttribute("class","text-danger form-select");
    edithStatusDropdownBTN.setAttribute("class","text-success form-select");
}

edithStatusDropdownBTN.addEventListener('click',changeDropdownText)
function changeDropdownText(){
    
    if(edithStatusDropdownBTN.value == "draft"){
        edithStatusDropdownBTN.removeAttribute("class","text-success form-select");
        edithStatusDropdownBTN.setAttribute("class","text-danger form-select");
    }else{
        edithStatusDropdownBTN.removeAttribute("class","text-danger form-select");
        edithStatusDropdownBTN.setAttribute("class","text-success form-select");
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
        sliderCheckBox.value = 'hide';
        // console.log(sliderCheckBox.value);
    }
});



// Category selection 
let selectOptionValueList = [];
for(let i= 0; i < categoryValueList.length; i++ ){
    categoryValueList[i].addEventListener('click',()=>{
        inputCategories.value += ', ' + categoryValueList[i].value;
    });
    selectOptionValueList.push(categoryValueList[i].value);
}

inputCategories.addEventListener('input',()=>{
    // console.log('working');
    // let rst = inputCategories.value;
    // rst = rst.split(',');

    // rst = rst.slice(indexOf(','),)

    // console.log(rst);
    // console.log(selectOptionValueList);
    // next focus
});



// inputCategories