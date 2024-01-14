// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyCfL6eTdPn6CUWE0Ya3LULW7U_BOLSECho",
    authDomain: "bmc-uk.firebaseapp.com",
    databaseURL: "https://bmc-uk-default-rtdb.firebaseio.com",
    projectId: "bmc-uk",
    storageBucket: "bmc-uk.appspot.com",
    messagingSenderId: "860381224507",
    appId: "1:860381224507:web:0e08afbfb7e2efa1ed861e",
    measurementId: "G-538NP1LPL5"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  // Initialize variables
  const auth = firebase.auth()
  const database = firebase.database()
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

  // xxxxxxxxxx Submitting and Creating new user in firebase authentication xxxxxxxxxx
function signUp(){
  var title = document.getElementById("title");
  var name = document.getElementById("name").value;
  var certificateName = document.getElementById("certificateName").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var dob = document.getElementById("dob").value;
  var gender = document.getElementById("gender");
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var province = document.getElementById("province").value;
  var state = document.getElementById("state").value;
  var certificate = document.getElementById("certificate").value;
  

  if(name == null){
      return name();
  }else{
      firebase.auth().createUserWithEmailAndPassword(email, password).then((success) => {
          var user = firebase.auth().currentUser;
          var uid;
          if (user != null) {
              uid = user.uid;
          }
          var firebaseRef = firebase.database().ref();
          var userData = {
            title:title,
            name:name,
            certificateName:certificateName,
            email:email,
            password:password,
            dob:dob,
            gender:gender,
            phone:phone,
            address :address,
            province :province,
            state :state,
            certificate :certificate,
          }
          firebaseRef.child(uid).set(userData);
          alert('Your Account Created','Your account was created successfully, you can log in now.',
          ).then((value) => {
              setTimeout(function(){
                  window.location.replace("login");
              }, 1000)
          });
      }).catch((error) => {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          alert({
              type: 'error',
              title: 'Error',
              text: "Error",
          })
      });
  }
}