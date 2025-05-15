const login = document.querySelector('.login') ;
const signin = document.querySelector('.signin') ;
const switch_btn = document.querySelectorAll('.switch_btn') ;
//
const password = document.querySelectorAll('.password');
const reveal_btn = document.querySelectorAll('#reveal_btn')

switch_btn.forEach(btn => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      login.classList.toggle('active');
      signin.classList.toggle('active');
    });
  });
//
reveal_btn.forEach((btn,index) => {
   btn.addEventListener('click',() => {
    input = password[index]
      if(input.type ==="password"){ 
      input.type = "text";

     }else{
      input.type = "password";
     }
   
   
    btn.classList.toggle('ri-eye-off-line');
    btn.classList.toggle('ri-eye-line');
  
   })
});