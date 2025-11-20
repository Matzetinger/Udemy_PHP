<?php

function createUser($username, $email, $role = "subscriber"){
  echo "Username: $username <br>";
  echo "Email: $email <br>";
  echo "Role: $role <br>";
}


createUser(email: "test@web.de",role: "admin", username: "Simon");
createUser(email: "test@web.de",role: "admin", username: "Simon");
createUser(role: "admin",email: "test@web.de", username: "Simon");

?>











