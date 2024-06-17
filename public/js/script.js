


let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
    inputNumber.oninput = () => {
        if (inputNumber.Value.length > inputNumber.maxLenght) inputNumber.Value
            = inputNumber.value.slice(0, inputNumber.maxLenght);
    };
});



$(window).on('load', function () {
    $(".loader-container").fadeOut(1320);

});

AOS.init({
    duration: 400,
    delay: 200,
});


document.querySelectorAll('.hotel-image-1').forEach(image_1 => {
    image_1.addEventListener('click', () => {
        var src = image_1.getAttribute('src');
        document.querySelector('.big-image-1').src = src;
    });
});


document.querySelectorAll('.hotel-image-2').forEach(image_2 => {
    image_2.addEventListener('click', () => {
        var src = image_2.getAttribute('src');
        document.querySelector('.big-image-2').src = src;
    });
});

document.querySelectorAll('.hotel-image-3').forEach(image_3 => {
    image_3.addEventListener('click', () => {
        var src = image_3.getAttribute('src');
        document.querySelector('.big-image-3').src = src;
    });
});



// let loginForm = document.querySelector('.login-form-container');

// document.querySelector('#login-btn').onclick = () => {
//     loginForm.classList.toggle('active');
// }

// document.querySelector('#close-login-btn').onclick = () => {
//     loginForm.classList.remove('active');
// }


    // document.addEventListener('DOMContentLoaded', function() {
    //     const signUpButton = document.getElementById('signUpButton');
    //     const signInButton = document.getElementById('signInButton');
    //     const signInForm = document.getElementById('signIn');
    //     const signUpForm = document.getElementById('signup');

    //     if (signUpButton && signInButton && signInForm && signUpForm) {
    //         signUpButton.addEventListener('click', function() {
    //             signInForm.style.display = "none";
    //             signUpForm.style.display = "block";
    //         });

    //         signInButton.addEventListener('click', function() {
    //             signInForm.style.display = "block";
    //             signUpForm.style.display = "none";
    //         });
    //     } else {
    //         console.error("One or more elements are not found in the DOM");
    //     }
    // });



