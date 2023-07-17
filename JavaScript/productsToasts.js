let successMsg = '<i class="fa-sharp fa-solid fa-circle-check"></i> Se agrego al carro'
let timerOutId;
let renewToast;
function showToast(msg) {
    let toastBox = document.querySelector(".toastBox");
    toastBox.style.display = 'flex';
    timerOutId = setTimeout(() => {
        toastBox.style.display = 'none';
    },5000);
}
function hideToast() {
    clearTimeout(timerOutId);
    let toastBox = document.querySelector(".toastBox");
    toastBox.style.display = 'none';
} 