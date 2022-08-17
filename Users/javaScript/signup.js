const form = document.querySelector(".signup .container .content form"),
continueBtn = form.querySelector(".signup .container .content form .submit_btn");
//errorText = form.querySelector(".error-text");

// error Text Downside The Content

// Jav Script throw ajax call and  php function 

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="users.php";
              }else{
                alert(data);
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}