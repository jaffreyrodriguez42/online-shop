// const colorSelect = document.getElementById("color");
// const sizeSelect = document.getElementById("size");
// const prodIdInput = document.getElementById("prod_id");
const cartLink = document.getElementById('cart'); 
const addtocartBtn = document.getElementById('addtocart');
const quantityInput = document.getElementById('quantity');
// const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

addtocartBtn.addEventListener('click', function(){
	const selColor = colorSelect.value;
	console.log("color is " + selColor);
	const selSize = sizeSelect.value;
	console.log("size is " + selSize);
	const prodIdVal = prodIdInput.value;
	console.log("product id is " + prodIdVal);
	const quantityVal = quantityInput.value;
	console.log(quantityVal);
	let data = new FormData;

	data.append('color_id', selColor);
	data.append('size_id', selSize);
	data.append('quantity', quantityVal);

	fetch("/products/" + prodIdVal + "/addtocart", {
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
			cartLink.innerHTML = data.data;
		}else{
			cartLink.innerHTML = "0 talaga";
		}
	})
});
