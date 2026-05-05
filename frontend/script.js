fetch("../backend/fetch.php")
.then(res => res.json())
.then(data => {
  document.getElementById("data").innerHTML =
    "Income: " + data.income +
    "<br>Expense: " + data.expense;
});