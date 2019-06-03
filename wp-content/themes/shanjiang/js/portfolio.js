(function () {
    var portfolio     = document.querySelectorAll('.portfolio_overlay'),
        showboard     = document.querySelector('.portfolio_showboard'),
        close         = document.querySelector('.portfolio_close'),
        portfolioWrap = document.querySelectorAll('.portfolio_wrap'),
        image         = document.querySelector('.portfolio_img'),
        title         = document.querySelector('.portfolio_title'),
        noScroll      = document.querySelector('body'),
        content       = document.querySelector('.portfolio_content');

    function hidePortfolioOverlay() {
        this.classList.add('hide_portfolio_overlay');
    }

    function hidePortfolioOverlayR() {
        this.classList.remove('hide_portfolio_overlay');
    }

    function lightbox() {
        showboard.classList.toggle('close_showboard');
        noScroll.classList.toggle('no-scroll');
    }

    function showInfo() {
        let objectIndex = portfolioData[this.id];

        image.src         = objectIndex.image;
        image.alt         = objectIndex.alt;
        title.innerHTML   = objectIndex.title;
        content.innerHTML = objectIndex.content;
    }

    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('mouseover', hidePortfolioOverlay, false);
    });
    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('mouseleave', hidePortfolioOverlayR, false);
    });
    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('click', lightbox, false);
    });
    portfolioWrap.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('click', showInfo, false);
    });
    close.addEventListener('click', lightbox, false);
})();