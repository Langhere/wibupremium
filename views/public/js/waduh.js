const products = [
  {
    name: "Naruto",
    url: "https://drive.google.com/thumbnail?id=1Aiq5UXMGcgMS2MDtaWWvbmToYYIVD6Zj",
    category: "action,advanture,shonen",
    price: "9/10",
  },
  {
    name: "One Piece",
    url: "https://drive.google.com/thumbnail?id=1oGv5KBpzh-Hu5pzXR0QYmVFjuOdmFWv-",
    category: "adventure",
    price: "9.5/10",
  },
  {
    name: "Death Note",
    url: "https://drive.google.com/thumbnail?id=1HmHlqnM_9Dvf9U0TlUdOXMzBh_pyzJ0W",
    category: "Thriller",
    price: "9.2/10",
  },
  {
    name: "Vagabond",
    url: "https://drive.google.com/thumbnail?id=17moZf6ejjPjsr9DOoxc-xkwPw_rghugx",
    category: "seinen,adventure",
    price: "9.6/10",
  },
  {
    name: "Yahari Ore no Seishun Love Comedy wa Machigatteiru",
    url: "https://drive.google.com/thumbnail?id=1giKI__9b70rZR3Pmt3MT2hGBWW-f8KmJ",
    category: "comedy,romance,slice of life",
    price: "9.8/10",
  },
  {
    name: "Tokyo Ghoul",
    url: "https://drive.google.com/thumbnail?id=1g2DLDoXqoi2M74raRlbeHrg3FLEaQ5yb",
    category: "fantasy",
    price: "8/10",
  },
  {
    name: "Bakuman",
    url: "https://drive.google.com/thumbnail?id=1zH9RgFzeQ3BJ6d3N7gDoyeoj4Wn0hPXE",
    category: "drama",
    price: "8.4/10",
  },
  {
    name: "Blooming Love",
    url: "https://drive.google.com/thumbnail?id=1o-uCez3FyTqCdCCSPNQLJRqToNwitWqg",
    category: "romance,school",
    price: "7.65/10",
  },
  {
    name: "Vinland Saga",
    url: "https://drive.google.com/thumbnail?id=14if5fSLKW5VMJESDC2pNUIwxXDICVsEJ",
    category: "action,adventure,drama,shonen",
    price: "9.65/10",
  },
];

// Get DOM elements
const productsWrapper = document.getElementById("products-wrapper");
const checkboxes = document.querySelectorAll(".check");
const filtersContainer = document.getElementById("filters-container");
const searchInput = document.getElementById("search");
const cartButton = document.getElementById("cart-button");
const cartCount = document.getElementById("cart-count");

// Initialize cart item count
let cartItemCount = 0;

// Initialize products
const productElements = [];

// Loop over the products and create the product elements
products.forEach((product) => {
  const productElement = createProductElement(product);
  productElements.push(productElement);
  productsWrapper.appendChild(productElement);
});

// Add filter event listeners
filtersContainer.addEventListener("change", filterProducts);
searchInput.addEventListener("input", filterProducts);

// Create product element
function createProductElement(product) {
  const productElement = document.createElement("div");

  productElement.className = "item space-y-2";

  productElement.innerHTML = `<div
    class="bg-gray-100 flex justify-center relative overflow-hidden group cursor-pointer border rounded-xl"
  >
    <img
      src="${product.url}"
      alt="${product.name}"
      class="w-full h-full object-cover"
    />
    <button class="status bg-black text-white absolute bottom-0 left-0 right-0 text-center py-2 translate-y-full transition group-hover:translate-y-0"
      >Add To Cart</button
    >
  </div>
  <p class="text-xl">${product.name}</p>
  <strong>${product.price.toLocaleString()}</strong>`;

  productElement.querySelector(".status").addEventListener("click", updateCart);

  return productElement;
}

// Toggle add/remove from cart
function updateCart(e) {
  const statusEl = e.target;

  if (statusEl.classList.contains("added")) {
    // Remove from cart
    statusEl.classList.remove("added");
    statusEl.innerText = "Add To Cart";
    statusEl.classList.remove("bg-red-600");
    statusEl.classList.add("bg-gray-800");

    cartItemCount--;
  } else {
    // Add to cart
    statusEl.classList.add("added");
    statusEl.innerText = "Remove From Cart";
    statusEl.classList.remove("bg-gray-800");
    statusEl.classList.add("bg-red-600");

    cartItemCount++;
  }

  // Update cart item count
  cartCount.innerText = cartItemCount.toString();
}

// Filter products by search or checkbox
function filterProducts() {
  // Get search term
  const searchTerm = searchInput.value.trim().toLowerCase();
  // Get checked categories
  const checkedCategories = Array.from(checkboxes)
    .filter((check) => check.checked)
    .map((check) => check.id);

  // Loop over products and check for matches
  productElements.forEach((productElement, index) => {
    const product = products[index];

    // Check to see if product matches the search or checked items
    const matchesSearchTerm = product.name.toLowerCase().includes(searchTerm);
    const isInCheckedCategory = checkedCategories.length === 0 || checkedCategories.includes(product.category);

    // Show or hide product based on matches
    if (matchesSearchTerm && isInCheckedCategory) {
      productElement.classList.remove("hidden");
    } else {
      productElement.classList.add("hidden");
    }
  });
}