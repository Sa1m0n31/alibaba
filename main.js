const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

const openMobileMenu = () => {
    mobileMenu.style.transform = 'scaleX(1)';
    setTimeout(() => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '1';
        });
    }, 200);
}

const closeMobileMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });
    setTimeout(() => {
        mobileMenu.style.transform = 'scaleX(0)';
    }, 200);
}
