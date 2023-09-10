document.getElementById("btn").addEventListener("click", function(event) {
  event.preventDefault();

  let firstNameReg = /^[A-Za-zА-Яа-я\s]+$/u
  let fNameValue = document.getElementById('firstName').value
  
  if(!firstNameReg.test(fNameValue)){
    alert("Разрешено е използването само на букви в полето 'Първо име' ")
  } else {
    
  }





  let secondNameReg = /^[A-Za-zА-Яа-я\s]+$/u
  let secondNameValue = document.getElementById('lastName').value
  
  if(!secondNameReg.test(secondNameValue)){
     alert("Разрешено е използването само на букви в полето 'Фамилия' ")
  } else {
    console.log(secondNameValue);
  }




 
  let phoneVal = document.getElementById('phoneNumber').value
  let phoneRegex = /^(?:\+359|0)(?:\s?\d){1,9}$/
 
  if(!phoneRegex.test(phoneVal)){
    alert('Моля въведете валиден формат на телефонен номер!')
  } else {
    console.log(phoneVal);
  }




 
  let emailVal = document.getElementById('email').value;
  let emaiRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
 
  if(!emaiRegex.test(emailVal)){
 
    alert('Моля въведете валиден формат на имейла!')
 
  } else {
    console.log(emailVal);
  }
});