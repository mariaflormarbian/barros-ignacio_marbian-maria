let MainImg = document.getElementById('MainImg');
let smallimg = document.querySelectorAll('.small-img');

smallimg.forEach(img => {

    img.addEventListener('click', (e) => {

        MainImg.src = e.target.src;

    })
    
});

