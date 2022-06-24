<meta name="viewport" content="width=device-width, initial-scale=1"/>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-app.js";
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-database.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCsx4rcCK3SsxCKlQcCkAy47ZVEDTO9wqQ",
    authDomain: "myproject-e2233.firebaseapp.com",
    databaseURL: "https://myproject-e2233-default-rtdb.firebaseio.com",
    projectId: "myproject-e2233",
    storageBucket: "myproject-e2233.appspot.com",
    messagingSenderId: "907847374326",
    appId: "1:907847374326:web:a5bafd4ffc84990937a3d7",
    measurementId: "G-65QYV95VRG"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
    var Myname = alert("Enter Your Name");
  function sendMessage(){
    var message = document.getElementById("message").value;
    firebase.database().ref("message").push().set({
      "message": message
    });
    return false;
  }
</script>
<form onsubmit="return sendMessage();">
  <input type="text" id="message" placeholder="Send Message"/>
  <button type="submit" name="submit">Sending</button>
</form>