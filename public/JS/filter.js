console.log('gggggggggggg');
// *********************bed rooms************************
const selectbedrooms = document.querySelector('#bedrooms');
const bedrooms = document.querySelectorAll('.bedroomsnmbr');
// bedrooms[0].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
selectbedrooms.addEventListener('change',()=>{
    console.log(selectbedrooms.value);
    for(let i = 0;i<bedrooms.length;i++){
        if(bedrooms[i].textContent === selectbedrooms.value){
            bedrooms[i].parentElement.parentElement.parentElement.parentElement.style.display = 'block';
        }else{
            bedrooms[i].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
        }
    }
})

// *********************bath rooms************************
const selectbathrooms = document.querySelector('#selectbathrooms');
const bathrooms = document.querySelectorAll('.bathroomsnmbr');
// bedrooms[0].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
selectbathrooms.addEventListener('change',()=>{
    console.log(selectbathrooms.value);
    for(let i = 0;i<bathrooms.length;i++){
        if(bathrooms[i].textContent === selectbathrooms.value){
            bathrooms[i].parentElement.parentElement.parentElement.parentElement.style.display = 'block';
        }else{
            bathrooms[i].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
        }
    }
})
// *********************property type************************
const selecttype = document.querySelector('#selecttype');
const propertytype = document.querySelectorAll('.propertytype');
// bedrooms[0].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
selecttype.addEventListener('change',()=>{
    console.log(selecttype.value);
    for(let i = 0;i<propertytype.length;i++){
        if(propertytype[i].textContent === selecttype.value){
            propertytype[i].parentElement.parentElement.parentElement.parentElement.style.display = 'block';
        }else{
            propertytype[i].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
        }
    }
})
// **********************search for adrress*********************
const searchinput = document.querySelector('#searchinput');
const adrres = document.querySelectorAll('.Adss');
searchinput.addEventListener('input',(e)=>{
    let manualadress = e.target.value;
    manualadress = manualadress.toUpperCase(); 
    console.log(manualadress);
    for(let i =0;i< adrres.length;i++){
        let potentialadrress = adrres[i].textContent;
        potentialadrress = potentialadrress.toUpperCase();
        if(potentialadrress.indexOf(manualadress) > -1){
            adrres[i].parentElement.parentElement.parentElement.parentElement.style.display = 'block';
        }else{
            adrres[i].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
        }
    }
})

