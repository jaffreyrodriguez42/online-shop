const colorSelect = document.getElementById("color");
const sizeSelect = document.getElementById("size")
const checkStocksBtn = document.querySelector('#checkStocksBtn');
const stocksSpan = document.querySelector('#stocksSpan');
const prodIdInput = document.getElementById("prod_id");
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


const selColor = colorSelect.value;
console.log("color is " + selColor);

const selSize = sizeSelect.value;
console.log("size is " + selSize);


checkStocksBtn.addEventListener('click', ()=>{
	const selColor = colorSelect.value;
	console.log("color is " + selColor);
	const selSize = sizeSelect.value;
	console.log("size is " + selSize);
	const prodIdVal = prodIdInput.value;
	console.log("product id is " + prodIdVal);
	let data = new FormData;

	data.append('color_id', selColor);
	data.append('size_id', selSize);

	fetch("/products/" + prodIdVal + "/checkStocks", {
		method: "POST",
		body: data,
		headers: {
				'X-CSRF-TOKEN' : csrfToken
		}

	})
	.then((res)=>{
		return res.json();
	})
	.then((data)=>{
		if(data.data){
			console.log(data.data);
			stocksSpan.innerHTML = data.data + " " + data.color + "/" + data.size + " stocks.";
		}else{
			stocksSpan.innerHTML = "0 " + data.color + "/" + data.size + " stocks.";
		}
	})
	
});