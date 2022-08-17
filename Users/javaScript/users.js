const form = document.querySelector(".users .container .content form"),
continueBtn = form.querySelector(".users .container .content form .submit_btn");

// Jav Script throw ajax call and  php function 

 form.onsubmit = (e)=>{
     e.preventDefault();
 }

 continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/usersinsert.php", true);
    xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
             let data = xhr.response;
              if(data === "success"){
                location.href="genarate.php";
              }else{
              alert(data);
               }
          }
       }
    }
    let formData = new FormData(form);
    xhr.send(formData);
 }

// Get User inserted Data from Signup

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);

