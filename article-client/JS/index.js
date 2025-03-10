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

// Submit FAQ button
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

// Home Page
document.addEventListener("DOMContentLoaded", async () => {
      const response = await axios.post("http://localhost/FAQ-ten-deploys-per-day--flickr/article-server/API/searchQuestion.php", ' ');
      const faq = document.getElementById("faq-box");
      faq.innerHTML = "";

      if (response.data && response.data.length > 0) {
          response.data.forEach(fq => {
              faq.innerHTML += `
                  <div class="faq-box">
                      <p class="question">Q: ${fq.question}</p>
                      <p class="answer">A: ${fq.answer}</p>
                  </div>
              `;
          });
      }
  }
);

// Home Page
const search_bar_input = document.getElementById("Search-Bar");
const add_faq_button = document.getElementById("Add-FAQ");

// Add FAQ button
add_faq_button.addEventListener('click', async () => {
  window.location.href = "addfaq.html";
});

// Search bar
search_bar_input.addEventListener("input", async () => {
  const form = new FormData();
  form.append("searchInput", search_bar_input.value);
})