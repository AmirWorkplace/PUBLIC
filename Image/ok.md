# HTML [

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Generator</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"/>
    <link rel="stylesheet" href="CSS/style.css" />
  </head>
  <body>

    <div class="body">
      <label>
        <input type="checkbox">
        <span></span>
      </label>
    </div>










    <!-- Js Plug In -->
    <script src="./JavaScript/main.js"></script>
    <!-- Ion Icon -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- Font Awosome Kit -->
    <script
      src="https://kit.fontawesome.com/625708b356.js"
      crossorigin="anonymous"
    ></script>
    <!-- Box icon -->
  </body>
</html>
<!-- <div class="mediaIcon">fh</div>
  mainMenu
  mainMenuBar
  -->


]


# CSS [

@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Annie+Use+Your+Telescope&family=Bebas+Neue&family=Blaka&family=Blaka+Hollow&family=Bungee&family=Codystar:wght@300&family=Dancing+Script&family=Diplomata+SC&family=Dynalight&family=Eater&family=Fascinate&family=Faster+One&family=Frijole&family=IBM+Plex+Mono:wght@100;200;300;700&family=IM+Fell+English+SC&family=Irish+Grover&family=Julius+Sans+One&family=Kdam+Thmor+Pro&family=League+Gothic&family=Macondo&family=Monofett&family=Monoton&family=Mr+Dafoe&family=Notable&family=Pacifico&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Potta+One&family=Press+Start+2P&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,400;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rock+Salt&family=Rubik+Mono+One&family=Rubik+Moonrocks&family=Rubik+Puddles&family=Russo+One&family=Sigmar+One&family=Stint+Ultra+Condensed&family=Tangerine&family=Ultra&display=swap');

:root {
  --clr-dark: #000;
  --clr-bg: #111311;
  --clr-bg-dark: #000000d0;
  --clr-bg-272720: #272720;
  --clr-white: #fff;
  --clr-bg-white: #ffffffd0;
  --clr-bg-857777: #857777;
  --clr-bg-efefef: #efefef;

  --clr-crimson: #dc143c;
  --clr-blue-1876f2: #1876f2;
  --clr-greeen-187615f2: #187615f2;
  --clr-deepGreen-04fc43: #04fc43;
  --clr-yellow: #fee800;
  --clr-lightRed-ff2972: #ff2972;
}

.dark-theme {
  --clr-white: #000;
  --clr-bg-white: #000000d0;
  --clr-bg-857777: #272720;
  --clr-dark: #fff;
  --clr-bg-dark: #ffffffd0;
  --clr-bg-272720: #857777;
  --clr-bg-efefef: #121212;

}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  overflow: hidden;
}

.body {
  background: linear-gradient(#555, #292929);
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  /* position: relative; */
}

label {
  border: 7.5px solid #222;
  position: relative;
  width: 300px;
  height: 150px;
  background: #3e3e3e;
  box-shadow: 0 0 0 4px #3e3e3e;
  border-radius: 75px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* label input{ appearance: none;} */

label span {
  position: absolute;
  left: 0;
  width: 175px;
  height: 150px;
  transition: 1.5s;
  background: url(../Image/Coffee_01.png);
  background-size: auto 150px;
  background-repeat: no-repeat;
  transform: rotate(-180deg);
  transform-origin: 75px;
}

label input:checked~span {
  transition: 1.5s;
  left: 150px;
  background: url(../Image/Coffee_02.png);
  background-size: auto 150px;
  background-repeat: no-repeat;
  transform: rotate(-360deg);
}

]