var userID;

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional



  const firebaseConfig = {
    apiKey: "AIzaSyDYkgdguKOuR2mP18lDShNL-Jt0UvQDulU",
    authDomain: "team10hackathon.firebaseapp.com",
    databaseURL: "https://team10hackathon-default-rtdb.firebaseio.com",
    projectId: "team10hackathon",
    storageBucket: "team10hackathon.appspot.com",
    messagingSenderId: "81800262854",
    appId: "1:81800262854:web:6efe94d6df824ac03653c7",
    measurementId: "G-BJVGWE4RPN"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
var database = firebase.database();

/*firebase.auth().onAuthStateChanged(firebaseUser => {
        if (firebaseUser) {
            // User is signed in.var user = userCredential.user;
            //alert("User exists");
            document.getElementById("SignInLI").setAttribute("hidden", true);
            document.getElementById("PartnerLI").setAttribute("hidden", true);
            document.getElementById("DashLI").removeAttribute("hidden");
            document.getElementById("LogLI").removeAttribute("hidden");
            document.getElementById("logOut").removeAttribute('hidden');

            document.getElementById("Dashboard").removeAttribute('hidden');
            document.getElementById("ULogLink").setAttribute("hidden", true);
            document.getElementById("NLogLink").setAttribute("hidden", true);
            var uid = firebaseUser.uid;
            userID = uid;
            //alert(uid);
            var refKey = firebaseRef.child("User").child(uid);
            refKey.once('value', function(snapshot) {

                var type = snapshot.val().type;
                //alert(type);
                if (type == "User") {
                    document.getElementById("Dashboard").setAttribute("href", "UserDashboard.html");
                    document.getElementById("nameOfUser").innerHTML = snapshot.val().username;
                    document.getElementById("location").innerHTML = snapshot.val().location;
                    document.getElementById("about").innerHTML = snapshot.val().About;
                    img = document.getElementById("defaultPic");
                    img.src = snapshot.val().ProfilePic;


                } else if (type == "NGO") {

                    document.getElementById("servicesDropdown").setAttribute("hidden", true);

                    imgage = document.getElementById("Ngo-Profile-Image");
                    imgage.src = snapshot.val().ProfilePic;

                    document.getElementById("Dashboard").setAttribute("href", "NGODashboard.html");



                    document.getElementById("ngo_dashboard_name").innerHTML = snapshot.val().Name;
                    document.getElementById("NGO_Owner_IS").innerHTML = snapshot.val().ContactName;
                    document.getElementById("NGO_ID_IS").innerHTML = snapshot.val().NGOID;
                    document.getElementById("NGO_Bio_IS").innerHTML = snapshot.val().Descr;
                    //document.getElementById("NGO_Goals_Are").innerHTML = snapshot.val().goals;
                    document.getElementById("NGO_Links_Are").innerHTML = snapshot.val().URL;
                    //document.getElementById("NGO_URLinks_Are").innerHTML = snapshot.val().OtherLinks;
                    // document.getElementById("NGO_Email_IS").innerHTML = snapshot.val().Contacts;
                    document.getElementById("NGO_Location_IS").innerHTML = snapshot.val().Location;




                    var g = snapshot.val().goals;
                    var gs = g.split("\n");
                    var g1 = "";
                    //alert("G!"+g1);
                    //var c = count(gs);
                    gs.forEach(function(i) {
                        //alert(i);
                        //alert(gs[i]);
                        if (gs.indexOf(i) !== 0) {
                            g1 = g1 + i;
                            //alert(g1);
                            if (gs.indexOf(i) !== gs.length - 1) {
                                g1 = g1 + ", ";
                            }
                            //alert(g1);
                        }

                    });
                    document.getElementById("NGO_Goals_Are").innerHTML = g1;


                    var l = snapshot.val().OtherLinks;
                    var ls = l.split("\n");
                    var l1 = "";
                    //alert("G!"+g1);
                    //var c = count(gs);
                    ls.forEach(function(p) {
                        //alert(i);
                        //alert(gs[i]);
                        if (ls.indexOf(p) !== 0) {
                            l1 = l1 + p;
                            //alert(g1);
                            if (ls.indexOf(p) !== ls.length - 1) {
                                l1 = l1 + ", ";
                            }
                            //alert(g1);
                        }

                    });
                    document.getElementById("NGO_URLinks_Are").innerHTML = l1;




                    var c = snapshot.val().Contacts;
                    var cs = c.split("\n");
                    var c1 = "";
                    //alert("G!"+g1);
                    //var c = count(gs);
                    cs.forEach(function(j) {
                        //alert(i);
                        //alert(gs[i]);

                        c1 = c1 + j;
                        //alert(g1);
                        if (cs.indexOf(j) !== cs.length - 1) {
                            c1 = c1 + ", ";
                        }
                        //alert(g1);


                    });
                    document.getElementById("NGO_Email_IS").innerHTML = c1;

                }


            });
            // ...
            //                      var user = firebase.auth().currentUser;
            //   uid = user.uid;
            //   var email = document.getElementById("uName").value;
            //   firebase.database().ref("User").child(uid).on('value',function(snapshot){
            //     document.getElementById("nameOfUser").innerHTML= snapshot.val().username;
            //     document.getElementById("events").innerHTML= snapshot.val().EventsAttended;
            //     document.getElementById("ngos").innerHTML= snapshot.val().NGOsFollowing;
            //     document.getElementById("about").innerHTML= snapshot.val().About;

            //   });


        } else {
            // No user is signed in.
            document.getElementById("SignInLI").removeAttribute("hidden");
            document.getElementById("PartnerLI").removeAttribute("hidden");
            document.getElementById("DashLI").setAttribute("hidden", true);
            document.getElementById("LogLI").setAttribute("hidden", true);
            document.getElementById("logOut").setAttribute("hidden", true);
            document.getElementById("Dashboard").setAttribute("hidden", true);
            document.getElementById("ULogLink").removeAttribute("hidden");
            document.getElementById("NLogLink").removeAttribute("hidden");



        }
    })
    //}*/
    




    
    //This one
    /*
function signInWithEmailPassword() {
    alert("YES");
    var email = document.getElementById('EmailIDLog').value;
    var password = document.getElementById('PassLog').value;
    // [START auth_signin_password]
    alert(email);
    alert(password);
    firebase.auth().createUserWithEmailAndPassword(email, password)
    .then((userCredential) => {
      // Signed in 
      var user = userCredential.user;
      alert("DONE");
      // ...
    })
    .catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      alert(errorMessage);
      // ..
    });
        
    // [END auth_signin_password]
}*/



function signUp() {
    alert("HI");
    var email = document.getElementById('EmailIDSign').value;
    var password1 = document.getElementById('PassSign1').value;
    var password2 = document.getElementById('PassSign2').value;
    //var name = document.getElementById('UsernameSign').value;
    //e.preventDefault();
    // [START auth_signup_password]
    alert(email);
    alert(password1);
    
            alert("HELLO");
            firebase.auth().createUserWithEmailAndPassword(email, password1).then((userCredential) => {
                    // Signed in 
                    alert("Signed up!");
                    var user = userCredential.user;

                    var username,  uid;
                    username = document.getElementById('UsernameSign').value;
                    uid = user.uid;
                    globalID = uid;
                    var prog = 0;
                    var c = "";
                    //function writeUserData(uid, username, email, type) {
                    firebase.database().ref().set({
                        username: username,
                        email: email,
                        progress: prog,
                        course: c,
                    });
                    // ...
                   
                })
                .catch((error) => {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    // ..
                    alert(errorMessage);
                });
        
    // [END auth_signup_password]


}
/*
             const auth = firebase.auth();

function signUp(){

  var email = document.getElementById("EmailSign");
  var password = document.getElementById("PassSign1");
  alert("step1");
  const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
  alert("yay");
  promise.catch(e=> alert(e.message));
  
  
  alert("Signed Up");
}*/
function SignOut() {
    firebase.auth().signOut().then(() => {
        // Sign-out successful.
        document.getElementById("logOut").setAttribute("hidden", true);
        document.getElementById("Dashboard").setAttribute("hidden", true);
        document.getElementById("SignInLI").removeAttribute("hidden");
        document.getElementById("PartnerLI").removeAttribute("hidden");
        document.getElementById("DashLI").setAttribute("hidden", true);
        document.getElementById("LogLI").setAttribute("hidden", true);
        document.getElementById("ULogLink").removeAttribute("hidden");
        document.getElementById("NLogLink").removeAttribute("hidden");

        alert("Signed Out");

    }).catch((error) => {
        // An error happened.
        alert(error.message);
    });
}

