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

// FAVORITE BTN
const favBtn = document.querySelectorAll('.ri-heart-line');
favBtn.forEach((btn) =>{
  btn.addEventListener('click',() =>{
      btn.classList.toggle('ri-heart-line');
      btn.classList.toggle('ri-heart-fill');
  });
});

// SEND MAIL
                  function SendMail(name,email,subject,phone,address,commande) {
   let parms = {
    name: name ,
    email: email ,
    subject: subject ,
    phone: phone ,
    address: address ,
    commande: commande 
   }

      emailjs.send("service_4s7qrpo", "template_yhsc5ac", parms)
      .then(function(response) {
         console.log("SUCCESS. Status:", response.status, "Text:", response.text);
         alert("Email envoyé avec succès! Vérifiez vos spams si vous ne le voyez pas.");
      })
      .catch(function(error) {
         console.error("FAILED...", error);
         alert("Erreur: " + (error.text || "Échec de l'envoi"));
      });
}

console.log('test'); 