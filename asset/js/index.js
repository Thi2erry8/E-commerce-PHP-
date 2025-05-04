const login = document.querySelector('.login') ;
const signin = document.querySelector('.signin') ;
const switch_btn = document.querySelectorAll('.switch_btn') ;

console.log(switch_btn)
switch_btn.forEach(btn => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      login.classList.toggle('active');
      signin.classList.toggle('active');
    });
  });
