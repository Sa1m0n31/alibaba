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

let companyContentVisible = [false, false, false];
const companyContentButtonsContent = Array.from(document.querySelectorAll('.aboutUs__item__btn>span'));
const companyContentButtons = Array.from(document.querySelectorAll('.aboutUs__item__btn'));
const companyContentArrows = Array.from(document.querySelectorAll('.aboutUs__item__btn>img'));
const companyContentText = Array.from(document.querySelectorAll('.aboutUs__item__text'));

const toggleCompanyContent = (n) => {
    companyContentVisible = companyContentVisible.map((item, index) => {
        if(index === n) return !item;
        else return item;
    });

    console.log(companyContentText[n]);

    companyContentButtonsContent[n].textContent = companyContentVisible[n] ? 'Zwiń' : 'Rozwiń';
    companyContentButtons[n].style.marginBottom = companyContentVisible[n] ? '20px' : '0';
    companyContentArrows[n].style.transform = companyContentVisible[n] ? 'rotateX(180deg)' : 'none';
    companyContentText[n].style.visibility = companyContentVisible[n] ? 'visible' : 'hidden';
    companyContentText[n].style.height = companyContentVisible[n] ? 'auto' : '0';
}
