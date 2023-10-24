let products = {
  data: [
    {
      productName: "Regular White T-Shirt",
      category: "Topwear",
      price: "30000",
      image: "images/white-tshirt.jpg",
    },
    {
      productName: "Dark Blue Shirt",
      category: "Topwear",
      price: "30000",
      image: "images/product-4.jpg",
    },
    {
      productName: "Beige Short Skirt",
      category: "Bottomwear",
      price: "45000",
      image: "images/short-skirt.jpg",
    },
    {
      productName: "Dark Black Pants",
      category: "Bottomwear",
      price: "45000",
      image: "images/product-3.jpg",
    },
    {
      productName: "Red Women's Watch",
      category: "Watch",
      price: "45000",
      image: "images/jam tangan.png",
    },
    {
      productName: "bomber jaket",
      category: "Jacket",
      price: "45000",
      image: "images/bomber-jaket.jpg",
    },
    {
      productName: "Sporty SmartWatch",
      category: "Watch",
      price: "100000",
      image: "images/sporty-smartwatch.jpg",
    },
    {
      productName: "Basic Knitted Top",
      category: "Topwear",
      price: "50000",
      image: "images/knitted-top.jpg",
    },
    {
      productName: "Black Leather Jacket",
      category: "Jacket",
      price: "125000",
      image: "images/black-leather-jacket.jpg",
    },
    {
      productName: "Stylish Pink Trousers",
      category: "Bottomwear",
      price: "85000",
      image: "images/pink-trousers.jpg",
    },
    {
      productName: "Black Pants",
      category: "Bottomwear",
      price: "85000",
      image: "images/product-12.jpg",
    },
    {
      productName: "Brown Men's Jacket",
      category: "Jacket",
      price: "185000",
      image: "images/brown-jacket.jpg",
    },
    {
      productName: "Comfy Gray Pants",
      category: "Bottomwear",
      price: "40000",
      image: "images/comfy-gray-pants.jpg",
    },
    {
      productName: "Black Shoes",
      category: "Shoes",
      price: "70000",
      image: "images/product-2.jpg",
    },
    {
      productName: "Black Watch",
      category: "Watch",
      price: "50000",
      image: "images/product-8.jpg",
    },
    {
      productName: "Red Printed T-Shirt",
      category: "Topwear",
      price: "50000",
      image: "images/product-1.jpg",
    },
    {
      productName: "Black and White Women's Shoes",
      category: "Shoes",
      price: "45000",
      image: "images/produk 5 (1).png",
    },
  ],
};


let cart = [];
let total = 0; // Total harga awalnya adalah 0

function addToCart(product) {
  cart.push(product);
  updateCart();
}


function removeFromCart(product) {
  // Hapus produk dari keranjang
  const index = cart.indexOf(product);
  if (index !== -1) {
      cart.splice(index, 1);
  }
  updateCart();
}

function updateCart() {
  let cartContainer = document.getElementById("cart-items");
  cartContainer.innerHTML = ""; // Bersihkan keranjang

  total = 0; // Mulai dengan total harga 0

  for (let product of cart) {
    let cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");

    // Tampilkan nama produk
    let productName = document.createElement("span");
    productName.innerText = product.productName;
    cartItem.appendChild(productName);

    // Tampilkan harga produk dalam Rupiah
    let productPrice = document.createElement("span");
    const priceInRupiah = formatRupiah(product.price);
    productPrice.innerText = "Rp" + priceInRupiah;
    cartItem.appendChild(productPrice);

    // Tombol "Remove" untuk menghapus produk
    let removeButton = document.createElement("button");
    removeButton.innerText = "Remove";
    removeButton.classList.add("remove-item");
    removeButton.addEventListener("click", () => removeFromCart(product));
    cartItem.appendChild(removeButton);

    cartContainer.appendChild(cartItem);

    // Tambahkan harga produk ke total dalam Rupiah
    total += parseInt(product.price);
  }

  // Perbarui elemen total harga dalam Rupiah
  const totalElementInRupiah = document.getElementById("total-price-in-rupiah");
  totalElementInRupiah.innerText = "Total Harga: Rp" + formatRupiah(total);

  // Format harga dalam format Rupiah (Rp X,XXX,XXX)
  function formatRupiah(angka) {
    let reverse = angka.toString().split("").reverse().join(""),
      ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join(".").split("").reverse().join("");
    return ribuan;
  }
}

function filterProduct(value) {
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  let elements = document.querySelectorAll(".card");
  elements.forEach((element) => {
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      if (element.classList.contains(value)) {
        element.classList.remove("hide");
      } else {
        element.classList.add("hide");
      }
    }
  });
}

document.getElementById("search").addEventListener("click", () => {
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  elements.forEach((element, index) => {
    if (element.innerText.includes(searchInput.toUpperCase())) {
      cards[index].classList.remove("hide");
    } else {
      cards[index].classList.add("hide");
    }
  });
});

function toggleCart() {
  const cartSidebar = document.getElementById("cart-sidebar");
  if (cartSidebar.classList.contains("open")) {
    cartSidebar.classList.remove("open");
  } else {
    cartSidebar.classList.add("open");
  }
}

// Event listener untuk tombol "Cart" di navbar
document.getElementById("cart-icon").addEventListener("click", toggleCart);

window.onload = () => {
  filterProduct("all");
};

// Generate product cards
for (let i of products.data) {
  // Create Card
  let card = document.createElement("div");
  card.classList.add("card", i.category, "hide");

  // Image div (diganti menjadi imageproductcontainer)
  let imageproductcontainer = document.createElement("div");
  imageproductcontainer.classList.add("image-container");

  // Image tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imageproductcontainer.appendChild(image);

  // Add to Cart icon
  let cartIcon = document.createElement("i");
  cartIcon.classList.add("fas", "fa-shopping-cart", "add-to-cart");
  cartIcon.addEventListener("click", () => addToCart(i));
  imageproductcontainer.appendChild(cartIcon);

  card.appendChild(imageproductcontainer);

  // Container
  let container = document.createElement("div");
  container.classList.add("container");

  // Product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);

  // Price
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);

  card.appendChild(container);

  document.getElementById("products").appendChild(card);
}
function checkout() {
  // Lakukan tindakan yang sesuai saat "Check Out" ditekan, misalnya menyimpan pesanan ke server
  alert("Terima kasih atas pembelian Anda!");
  // Kemudian bersihkan keranjang dan perbarui tampilan keranjang
  cart = [];
  updateCart();
}
document.getElementById("checkout-button").addEventListener("click", checkout);