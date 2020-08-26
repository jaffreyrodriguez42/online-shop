const colorSelect = document.getElementById("color");
const sizeSelect = document.getElementById("size")
const checkStocksBtn = document.querySelector('#checkStocksBtn');
const stocksSpan = document.querySelector('#stocksSpan');
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
	let data = new FormData;

	data.append('color_id', selColor);
	data.append('size_id', selSize);
	
});