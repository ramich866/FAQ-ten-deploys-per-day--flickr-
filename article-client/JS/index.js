// user variables
const email_input = document.getElementById("Email");
const username_input = document.getElementById("Username");
const password_input = document.getElementById("Password");
const login_button = document.getElementById("Login-Button");
const signup_button = document.getElementById("Signup-Button");

// FAQ variables
const question_input = document.getElementById("Question");
const answer_input = document.getElementById("Answer");
const submit_faq_button = document.getElementById("Submit");

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

submit_faq_button.addEventListener('click', async () => {
  const form = new FormData();

  form.append("question",question_input.value);
  form.append("answer", answer_input.value);

  const response = await axios.post(
      "http://localhost/FAQ-ten-deploys-per-day--flickr/article-server/API/createQuestion.php",
      form
  );

  if (response) {
      answer_input.value = "";
      question_input.value = "";
      alert(response.data.message);
  }

});