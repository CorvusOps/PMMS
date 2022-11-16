function openModal(modal) {
    /* 
     * Parameter: modal
     *            modal -> class name
     *
     * This function unhides modals once button to trigger it is clicked.
     */
    document.querySelector(modal).classList.remove('hidden');
    document.querySelector(modal).classList.add('fixed');
}

function closeModal(modal) {
    /* 
     * Parameter: modal
     *            modal -> class name
     *
     * This function hides modals once close button is clicked.
     */
    document.querySelector(modal).classList.add('hidden');
    document.querySelector(modal).classList.remove('fixed');
}
