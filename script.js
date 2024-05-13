const mainProgress = document.getElementById('mainProgress')
const upButton = document.getElementById('upButton')
const mobileNavContainer = document.getElementById('mobileNavContainer')
const mobileNav = document.getElementById('mobileNav')
const closeMobileNav = document.getElementById('closeMobileNav')
const menuOpener = document.getElementById('menuOpener')
const introductionContainer = document.getElementById('introductionContainer')
const themeButton = document.getElementById('themeButton')
const bodyTag = document.querySelector('body')
let theme = false;


window.addEventListener('scroll', () => {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    mainProgress.style.width = scrolled + "%";
})

upButton.addEventListener('click', () => {
    window.scrollTo(0, 0)
})

menuOpener.addEventListener("click", () => {
    mobileNavContainer.style.opacity="1"
    mobileNavContainer.style.pointerEvents="painted"

    mobileNav.style.transform="translate(0, 0)"
    bodyTag.style.position='fixed'
})

closeMobileNav.addEventListener("click", () => {
    mobileNavContainer.style.opacity="0"
    mobileNavContainer.style.pointerEvents="none"

    mobileNav.style.transform="translate(100%, 0)"
    bodyTag.style.position='relative'
})


themeButton.addEventListener('click', () => {
    if(theme) {
        introductionContainer.style.background = "radial-gradient(circle at 10% 20%, rgba(12, 12, 12, 0.8) 0.1%, rgb(44, 0, 58) 99.8%), url(./images/bg.jpg)";
        theme = false;
    } else {
        introductionContainer.style.background = "radial-gradient(circle at 10% 20%, rgba(0, 0, 0, 0.9) 0.1%, rgba(83, 2, 150, 0.6) 99.8%), url(./images/bg.jpg)";
        theme = true;
    }

    console.log("t")
})


const showViwedNumber = document.getElementById('showViwedNumber')

setTimeout(() => {
    showViwedNumber.style.opacity='1'
    showViwedNumber.style.pointerEvents='painted'
}, 1000);

const closeshowViwedNumber = document.getElementById('closeshowViwedNumber')

closeshowViwedNumber.addEventListener('click', () => {
    showViwedNumber.style.pointerEvents='none'
    showViwedNumber.style.opacity='0'
})