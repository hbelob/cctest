let btn1 = document.getElementById("b1");
let btn2 = document.getElementById("b2");
let input1 = document.getElementById("p1");
let input2 = document.getElementById("p2");
let div1 = document.getElementById("d1");
let div2 = document.getElementById("d2");
btn1.addEventListener("click", () => {
	fetch("save.php", {
	method: "POST",
	headers: {"Content-Type": "application/json"},
	body: JSON.stringify({
		p1: input1.value,
		p2: input2.value
	})
	}
	);
});
btn2.addEventListener("click", () => {
	fetch("get.php")
	 .then((response) => {
	    return response.json();
	 })
	.then((data) => {
	    div1.textContent = data[0].p1;
	    div2.textContent = data[0].p2;
	 });
});
