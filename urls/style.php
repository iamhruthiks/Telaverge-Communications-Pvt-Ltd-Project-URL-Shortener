<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}

body {
  background-image: url("https://wallpaperaccess.com/full/2551087.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-attachment: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 0 10px;
}

h2{
  color:#fb8500;
  position:absolute;
  top: 10%;
  left:1%;
  width:5%;
}

#logout{
  color:black;
  background-color:#38b000;
  position:absolute;
  top: 5%;
  right:5%;
  font-size: xx-large;
  padding: 10px;
  border-radius: 5%;
  opacity: 0.8;
  text-decoration: none;
}

#logout:hover{
  background: #ffffff;
  color: rgb(0, 0, 0);
  box-shadow: 0 0 5px #03f413, 0 0 25px #63f403, 0 0 100px #3ff403;
  
}

.wrapper {
  background: #0096c7;
  padding: 20px;
  width: 800px;
  border-radius: 5px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
  opacity: 0.8;
}

::selection {
  background: rgba(23, 162, 184, 0.3);
}

form {
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
  align-items: center;
}

.url-icon {
  position: absolute;
  width: 50px;
  text-align: center;
  font-size: 23px;
  color: #0077b6;
  pointer-events: none;
}

input {
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 120px 0 45px;
  font-size: 20px;
  border: 2px solid #0077b6;
  border-radius: 5px;
}

input::placeholder {
  color: #0077b6;
}

button {
  position: absolute;
  right: 6px;
  padding: 5px 15px;
  font-size: 18px;
  border-radius: 5px;
  border: none;
  outline: none;
  background: #03e9f4;
  color: black;
}

button:hover {
  background: #ffffff;
  color: rgb(0, 0, 0);
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 100px #03e9f4;
}

a {
  color: #000;
}

a:hover {
  background: #ffffff;
  color: rgb(0, 0, 0);
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 100px #03e9f4;
}


.statistics {
  margin: 20px 0;
  display: flex;
  padding-right: 5px;
  align-items: center;
  justify-content: space-between;
}

.statistics span {
  font-size: 17px;
}

.statistics span span {
  font-weight: 500;
}

.statistics a:hover {
  color: #20B2AA;
}

.urls-area {
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 5px;
  max-height: 400px;
  overflow-y: scroll;
}

.urls-area::-webkit-scrollbar {
  width: 0px;
}

.urls-area :is(.title, .data) {
  display: flex;
  width: 100%;
  justify-content: space-between;
}

#headings:hover{
  background: #ffffff;
  color: rgb(0, 0, 0);
  box-shadow: 0 0 5px #f49803, 0 0 25px #f4b403, 0 0 100px #f4ac03;
}

li {
  width: 100%;
  list-style: none;
  border-right: 1px solid #ddd;
}

.title li {
  text-align: center;
  color: white;
  background: #023e8a;
  padding: 10px 0;
}

.data li {
  padding: 8px 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  word-break: break-all;
}

a:hover {
  color: #20B2AA;
  text-decoration: underline;
}

.data li:last-child a:hover {
  text-decoration: none;
}

.urls-area .data:nth-child(odd) {
  background: #0077b6;
}

.urls-area li:nth-child(1) {
  max-width: 30%;
}

.urls-area li:nth-child(2) {
  max-width: 45%;
}

.urls-area li:nth-child(3) {
  max-width: 11%;
}

.urls-area li:nth-child(4) {
  max-width: 14%;
}

#delete-button:hover{
  background: #ffffff;
  color: red;
  box-shadow: 0 0 5px #f42303, 0 0 25px #f40303, 0 0 100px #f40303;
}

.blur-effect {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  backdrop-filter: blur(2px);
  background: rgba(0, 0, 0, 0.01);
  display: none;
}

.popup-box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.9);
  background: #fff;
  padding: 25px;
  max-width: 480px;
  width: 100%;
  border-radius: 5px;
  background-color: #70e000;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: all 0.3s ease;
}

.show {
  opacity: 1;
  pointer-events: auto;
  visibility: visible;
  transform: translate(-50%, -50%) scale(1);
}

.info-box {
  color: white;
  background: #008000;
  border: 1px solid #7de8e3;
  padding: 10px;
  text-align: center;
  font-size: 17px;
  border-radius: 5px;
}

.info-box.error {
  color: #721c24;
  background: #f8d7da;
  border-color: #f5c6cb;
}

.popup-box form {
  margin-top: 10px;
  position: relative;
}

.popup-box form .copy-icon {
  position: absolute;
  right: 25%;
  top: 50%;
  transform: translateY(-100%);
  font-size: 20px;
  cursor: pointer;
}

.copy-icon:hover {
  color: #20B2AA;
}

.popup-box form input {
  height: 45px;
  padding: 0 35px 0 15px;
  margin-top: 3px;
  border: 1px solid #ccc;
}

.popup-box form input:focus {
  border-color: #20B2AA;
}

#save-button {
  width: 30%;
  height: 45px;
  position: relative;
  right: 0;
  font-size: 20px;
  margin-top: 1px;
}

</style>