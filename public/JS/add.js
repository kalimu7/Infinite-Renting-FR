const  fileInput = document.querySelector('#fileInput');
const  bigInput = document.querySelector('#upl');
const  span = document.querySelector('#span-alert');
bigInput.addEventListener('click', () => {
    fileInput.click();
});
fileInput.addEventListener('change', () => {
    // Handle the selected file(s) here
    const name = fileInput.files[0].name;
    span.textContent = name;
});
var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
};
const buttons = document.querySelectorAll('.APB, .PEB, .MPB');
const contents = document.querySelectorAll('.AP, .PE, .MP');

buttons.forEach((button, index) => {
  button.addEventListener('click', () => {
    contents.forEach((content) => content.style.display = 'none');
    contents[index].style.display = 'block';
  });
});