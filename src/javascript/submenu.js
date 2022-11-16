
    const submenuBtn = document.getElementById('arrowBtn');
    const submenu = document.getElementById('sub-menu');
    let isExpanded = true;

    submenuBtn.addEventListener('click', () => {
        /* Once the arrow button is clicked, 
         * the function will expand or shrink the sub menu in the side bar
         */
        isExpanded = !isExpanded;
        isExpanded == true ? (submenuBtn.style.transform = "none", submenu.classList.add('hidden')): 
                    (submenuBtn.style.transform = "rotate(180deg)", submenu.classList.remove('hidden'), submenu.classList.add('flex'));
    });