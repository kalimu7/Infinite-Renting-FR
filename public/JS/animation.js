// **toggle the signup***
const tn = document.querySelector('#tenant');
const ld = document.querySelector('#landlord');
const input = document.querySelector('#status');
input.value = '0';
tn.addEventListener('click',()=>{
    tn.style.backgroundColor = '#03254b';
    ld.style.backgroundColor = '#03254bc9';
     input.value='0';
    })
ld.addEventListener('click',()=>{
    ld.style.backgroundColor = '#03254b';
    tn.style.backgroundColor = '#03254bc9';
    input.value='1';
    })
// ****open file*********
