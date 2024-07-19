// main.js
let data = [
  {a: "hello", b:"hii", c:"hey", d:"hallo"},
  {a: "abc", b:"efg", c:"hij", d:"klm"},
  {a: "example", b:"sample", c:"test", d:"demo"},
  {a: "foo", b:"bar", c:"baz", d:"qux"},
  {a: "apple", b:"banana", c:"cherry", d:"date"},
  {a: "elephant", b:"giraffe", c:"hippo", d:"jaguar"},
  {a: "lemon", b:"mango", c:"orange", d:"papaya"},
  {a: "carrot", b:"broccoli", c:"pepper", d:"potato"},
  {a: "sunny", b:"rainy", c:"cloudy", d:"windy"},
  {a: "music", b:"art", c:"dance", d:"theater"},
  {a: "coffee", b:"tea", c:"juice", d:"water"},
  {a: "blue", b:"red", c:"green", d:"yellow"},
  {a: "dog", b:"cat", c:"rabbit", d:"hamster"},
  {a: "football", b:"basketball", c:"tennis", d:"golf"},
  {a: "book", b:"movie", c:"music", d:"game"},
  {a: "pizza", b:"burger", c:"sushi", d:"pasta"},
  {a: "mountain", b:"beach", c:"forest", d:"desert"},
  {a: "pencil", b:"pen", c:"marker", d:"crayon"},
  {a: "winter", b:"spring", c:"summer", d:"autumn"},
  {a: "sunflower", b:"rose", c:"tulip", d:"daisy"},
  {a: "abc", b:"efg", c:"hij", d:"klm"},
  {a: "example", b:"sample", c:"test", d:"demo"},
  {a: "foo", b:"bar", c:"baz", d:"qux"},
  {a: "apple", b:"banana", c:"cherry", d:"date"},
  {a: "elephant", b:"giraffe", c:"hippo", d:"jaguar"},
  {a: "lemon", b:"mango", c:"orange", d:"papaya"},
  {a: "carrot", b:"broccoli", c:"pepper", d:"potato"},
  {a: "sunny", b:"rainy", c:"cloudy", d:"windy"},
  {a: "music", b:"art", c:"dance", d:"theater"},
  {a: "coffee", b:"tea", c:"juice", d:"water"},
  {a: "blue", b:"red", c:"green", d:"yellow"},
  {a: "dog", b:"cat", c:"rabbit", d:"hamster"},
  {a: "football", b:"basketball", c:"tennis", d:"golf"},
  {a: "book", b:"movie", c:"music", d:"game"},
  {a: "pizza", b:"burger", c:"sushi", d:"pasta"},
  {a: "mountain", b:"beach", c:"forest", d:"desert"},
  {a: "pencil", b:"pen", c:"marker", d:"crayon"},
  {a: "winter", b:"spring", c:"summer", d:"autumn"},
  {a: "sunflower", b:"rose", c:"tulip", d:"daisy"}
];

let currentPage = 1;
const itemsPerPage = 5;
const totalPages = Math.ceil(data.length / itemsPerPage);

function displayData(dataArray, page) {
  const container = document.getElementById('data-container');
  container.innerHTML = ''; // Clear the container

  const start = (page - 1) * itemsPerPage;
  const end = start + itemsPerPage;
  const paginatedItems = dataArray.slice(start, end);

  paginatedItems.forEach(item => {
    const div = document.createElement('div');
    div.className = 'item';
    div.innerHTML = `
      <p>${item.a || ''}</p>
      <p>${item.b || ''}</p>
      <p>${item.c || ''}</p>
      <p>${item.d || ''}</p>
    `;
    container.appendChild(div);
  });
}

function createPagination(totalPages, currentPage) {
  const paginationContainer = document.getElementById('pagination-container');
  paginationContainer.innerHTML = ''; // Clear the container

  const createButton = (page, text, isActive, isDisabled) => {
    const button = document.createElement('button');
    button.className = `page-button${isActive ? ' active' : ''}`;
    button.textContent = text;
    button.disabled = isDisabled;
    button.addEventListener('click', () => goToPage(page));
    return button;
  };

  // "First" button
  paginationContainer.appendChild(createButton(1, 'First', false, currentPage === 1));

  // "Previous" button
  paginationContainer.appendChild(createButton(currentPage - 1, 'Previous', false, currentPage === 1));

  // Calculate the range of page numbers to display
  const startPage = Math.max(1, currentPage - 2);
  const endPage = Math.min(totalPages, startPage + 4);

  // Adjust the start page if we're at the end of the range
  const adjustedStartPage = Math.max(1, endPage - 4);

  // Numbered buttons
  for (let i = adjustedStartPage; i <= endPage; i++) {
    paginationContainer.appendChild(createButton(i, i, currentPage === i, false));
  }

  // "Next" button
  paginationContainer.appendChild(createButton(currentPage + 1, 'Next', false, currentPage === totalPages));

  // "Last" button
  paginationContainer.appendChild(createButton(totalPages, 'Last', false, currentPage === totalPages));
}

function goToPage(page) {
  currentPage = page;
  displayData(data, currentPage);
  createPagination(totalPages, currentPage);
}

// Initialize
goToPage(1);
