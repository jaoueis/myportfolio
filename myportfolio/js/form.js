(function () {
    var input = document.querySelectorAll('.form_input');

    function labelMove() {
        var label = this.previousElementSibling;
        if (this.value === '') {
            label.classList.toggle('active');
        }
    }

    input.forEach(function (eachInput) {
        eachInput.addEventListener('focus', labelMove, false);
    });
    input.forEach(function (eachInput) {
        eachInput.addEventListener('blur', labelMove, false);
    });
})();