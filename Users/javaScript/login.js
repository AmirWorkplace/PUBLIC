const form = document.querySelector(".login .container .content form"),
continueBtn = form.querySelector(".login .container .content form .submit_btn");

// error Text Downside The Content


form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href = "users.php";
              }else{
              alert(data);
              
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}