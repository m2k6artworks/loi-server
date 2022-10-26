function toggleSidebar(element) {
    const is_sidebar_active = element.classList.contains('show-sidebar');
    const navbarLinksElement = document.querySelector('nav .nav-links');

    if( is_sidebar_active ) {
        element.classList.remove('show-sidebar');
        navbarLinksElement.classList.remove('active');
    } else {
        element.classList.add('show-sidebar');
        navbarLinksElement.classList.add('active');
    }
}