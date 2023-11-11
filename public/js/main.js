function increase(x, dataStock ) {
    console.log(dataStock)
    const inputVal = x.previousElementSibling;
    
    if(inputVal.value >= dataStock){
        alert('No hay mas stock del producto seleccionado')
        return
    }
    inputVal.value++;
}
function decrease(x, dataStock) {
    console.log(dataStock)
    var inputVal = x.nextElementSibling;
    if (inputVal.value > 1) {
        inputVal.value--;
    }
}