
const dropDownBtn = document.getElementById('dropbtn');
const dropDown = document.getElementById('dropDownList');
let isHidden = true;

dropDownBtn.addEventListener("click", () => {
    /* Once the arrow button is clicked, 
     * the function will unhide the drop down menu
     */
    isHidden = !isHidden;
    isHidden == true ? (dropDown.classList.add('hidden'), dropDown.classList.remove('flex')): 
                (dropDown.classList.remove('hidden'));
});