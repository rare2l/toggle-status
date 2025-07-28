document.getElementById("userForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value;
  const age = document.getElementById("age").value;

  fetch("user_insert.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `name=${encodeURIComponent(name)}&age=${encodeURIComponent(age)}`,
  }).then(() => {
    document.getElementById("name").value = "";
    document.getElementById("age").value = "";
    loadUsers();
  });
});

function toggleStatus(id) {
  fetch("toggle.status.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `id=${encodeURIComponent(id)}`,
  }).then(() => {
    loadUsers();
  });
}

function loadUsers() {
  fetch("view.php")
    .then((res) => res.text())
    .then((data) => {
      document.getElementById("userTable").innerHTML = data;
    });
}

window.onload = loadUsers;
