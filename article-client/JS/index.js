// variables
const email_input = document.getElementById("Email");
const username_input = document.getElementById("Username");
const password_input = document.getElementById("Password");
const login_button = document.getElementById("Login-Button");
const signup_button = document.getElementById("Signup-Button");

// Login button
login_button.addEventListener("click", async () => {
        const form = new FormData();

        form.append("username", username_input.value);
        form.append("password", password_input.value);

        const response = await axios.post("http://localhost/FAQ-ten-deploys-per-day--flickr/article-server/API/loginUser.php", form);

        if (response.data.status == "success") {
            window.location.href = "home.html";
        } else if (response.data.status == "error") {
            console.log("error");
        }

    }
)

// Signup button
signup_button.addEventListener("click", async () => {
  const form = new FormData();

  form.append("email", email_input.value);
  form.append("username", username_input.value);
  form.append("password", password_input.value);

  const response = await axios.post("http://localhost/FAQ-ten-deploys-per-day--flickr/article-server/API/loginUser.php", form);

  if (response.data.status == "success") {
      window.location.href = "home.html";
  } else if (response.data.status == "error") {
      console.log("error");
  }

}
)