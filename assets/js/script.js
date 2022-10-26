function toggleSidebar(element) {
    const is_sidebar_active = element.classList.contains('show-sidebar');
    const navbarLinksElement = document.querySelector('nav .nav-links');

    if (is_sidebar_active) {
        element.classList.remove('show-sidebar');
        navbarLinksElement.classList.remove('active');
    } else {
        element.classList.add('show-sidebar');
        navbarLinksElement.classList.add('active');
    }
}

function setActiveTab(targetId, clickedElement) {

    const tabContentsElement = document.querySelector('.tab-contents');

    for (let i = 0; i < clickedElement.parentElement.children.length; i++) {
        if (clickedElement.parentElement.children[i] == clickedElement) {
            if (!clickedElement.classList.contains('active')) {
                clickedElement.classList.add('active');
            }
        } else {
            if (clickedElement.parentElement.children[i].classList.contains('active')) {
                clickedElement.parentElement.children[i].classList.remove('active')
            }
        }
    }

    for (let i = 0; i < tabContentsElement.children.length; i++) {
        if (tabContentsElement.children[i].getAttribute('id') == targetId) {
            if (!tabContentsElement.children[i].classList.contains('active')) {
                tabContentsElement.children[i].classList.add('active');
            }
        } else {
            if (tabContentsElement.children[i].classList.contains('active')) {
                tabContentsElement.children[i].classList.remove('active');
            }
        }
    }


}