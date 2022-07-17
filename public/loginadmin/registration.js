
'use strict';



/* =============== VARIABLE =============== */

const btnClose = document.querySelector('.btn--close'),
      overlay = document.querySelector('.overlay'),
      areaReg = document.querySelector('.registration__area'),
      formSignup = document.querySelector('.form--sign-up'),
      imgReg = document.querySelector('.registration__images'),
      hideImg = document.querySelectorAll('.hide'),
      showImg = document.querySelectorAll('.show'),
      show__hide = document.querySelectorAll('.showhide'),

      iconCheck = document.querySelectorAll('.icon--check'),
      iconClose = document.querySelectorAll('.icon--close'),

      errorExist = [...document.querySelectorAll('.error--exist')],
      errorInvalid = [...document.querySelectorAll('.error--invalid')],

      inputLogPass = document.querySelector('.log-pass'),
      inputLogEmail = document.querySelector('.log-email'),
      inputLogin = [...document.querySelectorAll('.form--sign-in input')],
      inputRegister = [...document.querySelectorAll('.form--sign-up input')], // All input in register form 
      inputFullname = document.querySelector('.res-name'),
      inputPhone = document.querySelector('.res-phone'),
      inputPassword = document.querySelector('.res-pass'),
      inputConfirmPassword = document.querySelector('.res-confirm'),
      inputEmail = document.querySelector('.res-email'),
      inputAddress = document.querySelector('.res-address'),
      inputCheckbox = document.querySelector('.res-check'),
      
      btnSignin = document.querySelector('.btn--sign-in'),
      btnSignup = document.querySelector('.btn--sign-up'),
      btnReturn = document.querySelector('.btn--return'),
      btnRegister = document.querySelector('.btn--register')
      ;


const init = () => {
    inputFullname.value = inputEmail.value = inputPassword.value = inputPhone.value = inputAddress.value = ''; 
}

const activeOverlay = (e) => {
    e.preventDefault();
    overlay.classList.add('hidden');
}

const unactiveOverlay = (e) => {
    e.preventDefault();
    overlay.classList.remove('hidden');
}

btnClose.addEventListener('click', unactiveOverlay);
overlay.addEventListener('click', unactiveOverlay);

const displaySignupForm = (e) => {
    e.preventDefault();
    areaReg.classList.add('active');
    imgReg.classList.add('active');
    formSignup.classList.add('form--sign-up--active');
}

const hideSignupForm = e => {
    e.preventDefault();
    areaReg.classList.remove('active');
    imgReg.classList.remove('active');
    formSignup.classList.remove('form--sign-up--active');
}

btnSignup.addEventListener('click', displaySignupForm);
btnReturn.addEventListener('click', hideSignupForm);


const toggleDisplayPass = function(e) {
    e.preventDefault();
    const [input, index] = this;
    if(e.target.classList.contains('hide')) {
        hideImg[index].classList.remove('active');
        showImg[index].classList.remove('active');
        input.type = 'password';
    }
    else if(e.target.classList.contains('show')) {
        hideImg[index].classList.add('active');
        showImg[index].classList.add('active');
        input.type = 'text';
    }
}

show__hide[0].addEventListener('click', toggleDisplayPass.bind([inputLogPass, 0]));
show__hide[1].addEventListener('click', toggleDisplayPass.bind([inputPassword, 1]));


/* ============================================================================ */





/* ============================================================================ */
/*                                  UTILITY                                     */
/* ============================================================================ */

const active = (element, className) => element.classList.add(className);
const unactive = (element, className) => element?.classList.remove(className);

// Remove border, message invalid 
const removeInvalid = (element, index) => {
    if(!element.value) {
        unactive(element, 'invalid');
        unactive(errorExist[index], 'error--exist--active');
        unactive(errorInvalid[index], 'error--invalid--active');
        unactive(iconClose[index], 'icon--close--active');
        unactive(iconCheck[index], 'icon--check--active');
        return false;
    }
    return true;
}

const displayEyes = function() {
    const [input, index] = this;
    input.value ? active(show__hide[index], 'showhide--active') : unactive(show__hide[index], 'showhide--active');
}

/* ============================================================================ */







/* ============================================================================ */
/*                            HANDLE LOGIN USER                                 */
/* ============================================================================ */

const activeBtnSignin = () => {
    // Check all field whether filled or not
    for(let i = 0; i < inputLogin.length; i++)
        // If 1 any field no have value then return
        if(!inputLogin[i].value) {
            unactive(btnSignin, 'btn--sign-in--active');
            return;
        }
    active(btnSignin, 'btn--sign-in--active');
}

// const authAccount = function() {
//     const logAccount = new XMLHttpRequest();
//     logAccount.onload = function() {
//         console.log(this.responseText);
//     }

//     logAccount.open('GET', `../registration/registration.php`);
//     logAccount.send();
// }

inputLogPass.addEventListener('keyup', activeBtnSignin);
inputLogPass.addEventListener('change', activeBtnSignin);
inputLogEmail.addEventListener('keyup', activeBtnSignin);
inputLogEmail.addEventListener('change', activeBtnSignin);

// active eyes to show or hide pass
inputLogPass.addEventListener('keyup', displayEyes.bind([inputLogPass, 0]));
inputLogPass.addEventListener('change', displayEyes.bind([inputLogPass, 0]));

// btnSignin.addEventListener('click', authAccount);

/* ============================================================================ */








/* ============================================================================ */
/*                            HANDLE REGISTER USER                              */
/* ============================================================================ */


const activeBtnRegister = () => {
    // Check all field whether filled or not
    for(let i = 0; i < inputRegister.length - 1; i++)
        // If 1 any field no have value then return
        if(!inputRegister[i].value) {
            unactive(btnRegister, 'btn--register--active');
            return;
        }
    // If all input type text have value then check input check box 
    if(!inputCheckbox.checked ||
       errorExist.filter(e => e.classList.contains('error--exist--active')).length ||
       errorInvalid.filter(e => e.classList.contains('error--invalid--active')).length  
    ) {
        unactive(btnRegister, 'btn--register--active');
        return;
    }
    active(btnRegister, 'btn--register--active');
}

const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

const isValid = function(validateFunc, input, index) {
    if(!validateFunc(input.value)) {
        active(errorInvalid[index], 'error--invalid--active');
        active(input, 'invalid');
        active(iconClose[index], 'icon--close--active');
        unactive(iconCheck[index], 'icon--check--active');
        return false;
    }
    else {
        unactive(errorInvalid[index], 'error--invalid--active');
        unactive(input, 'invalid');
        unactive(iconClose[index], 'icon--close--active');
        active(iconCheck[index], 'icon--check--active');
        return true;
    }
}

// Check email live and verify email 
const verifyEmail = function(e) {
    e.preventDefault();
    if(!removeInvalid(inputEmail, 0))  return;
    setTimeout(() => {
        // Verify email
        if(!isValid(validateEmail, inputEmail, 0))   return;

        // Check email exist
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            if(this.responseText === inputEmail.value) {
                // Display message exist
                active(errorExist[0], 'error--exist--active');
                active(inputEmail, 'invalid');
                unactive(iconCheck[0], 'icon--check--active');
                active(iconClose[0], 'icon--close--active');
            }
            else {
                unactive(inputEmail, 'invalid');
                unactive(errorExist[0], 'error--exist--active');
                unactive(iconClose[0], 'icon--close--active');
                active(iconCheck[0], 'icon--check--active');
            }
        }
        // Query email input to db to check exist
        xmlhttp.open("GET", `../registration/getEmail.php?q=${this.value}`);
        xmlhttp.send();
        activeBtnRegister();
    }, 500);
}

// Verify phone number 
const validatePhone = function(number) {
    return number.length <= 11 && number.match(/\d/g)?.length >= 10;
}

const verifyPhone = function(e) {
    e.preventDefault();
    if(!removeInvalid(inputPhone, 1))   return;
    setTimeout(() => {
        if(!isValid(validatePhone, inputPhone, 1))  return;
        activeBtnRegister();
    }, 500);
}

const confirmPassword = function(e) {
    e?.preventDefault();
    if(!removeInvalid(inputConfirmPassword, 3)) return;
    // Compare password entered
    if(inputConfirmPassword.value !== inputPassword.value) {
        active(errorExist[3], 'error--exist--active');
        active(inputConfirmPassword, 'invalid');
        unactive(iconCheck[3], 'icon--check--active');
        active(iconClose[3], 'icon--close--active');
    }
    else {
        unactive(inputConfirmPassword, 'invalid');
        unactive(errorExist[3], 'error--exist--active');
        unactive(iconClose[3], 'icon--close--active');
        active(iconCheck[3], 'icon--check--active');
    }
    activeBtnRegister();
}

const verifyPassword = function(e) {
    e.preventDefault();
    // Confirm password when password input is empty
    if(!inputPassword.value) confirmPassword();
    displayEyes.call([inputPassword, 1]);
    if(!removeInvalid(inputPassword, 2))    return;
    setTimeout(() => {
        // Check email exist
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            if(this.responseText === inputPassword.value) {
                // Display message exist
                active(errorExist[2], 'error--exist--active');
                active(inputPassword, 'invalid');
                unactive(iconCheck[2], 'icon--check--active');
                active(iconClose[2], 'icon--close--active');
                confirmPassword();
            }
            else {
                unactive(inputPassword, 'invalid');
                unactive(errorExist[2], 'error--exist--active');
                unactive(iconClose[2], 'icon--close--active');
                active(iconCheck[2], 'icon--check--active');
                confirmPassword();
            }
        }
        xmlhttp.open("GET", `../registration/getPassword.php?q=${this.value}`);
        xmlhttp.send();
        activeBtnRegister();
    });
}


// Track change of input to verify input user
inputPassword.addEventListener('keyup', verifyPassword);
inputPassword.addEventListener('change', verifyPassword);

inputConfirmPassword.addEventListener('keyup', confirmPassword);
inputConfirmPassword.addEventListener('change', confirmPassword);

inputEmail.addEventListener('keyup', verifyEmail);
inputEmail.addEventListener('change', verifyEmail); // Change for Click on the available email 
inputPhone.addEventListener('keyup', verifyPhone);
inputPhone.addEventListener('change', verifyPhone);

// Check whether all fields have been filled in
inputFullname.addEventListener('keyup', activeBtnRegister);
inputAddress.addEventListener('keyup', activeBtnRegister);
inputCheckbox.addEventListener('click', activeBtnRegister);
inputFullname.addEventListener('change', activeBtnRegister);
inputAddress.addEventListener('change', activeBtnRegister);


/* ============================================================================ */




window.addEventListener('load', init);