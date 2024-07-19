// main.js
let data = [
  {
    no: "first",
    date: "hello",
    mooscript: "hii",
    title: "hey",
    script: "hallo"
  },
  {
    date: "abc",
    mooscript: "efg",
    title: "hij",
    script: "klm"
  },
  {
    date: "example",
    mooscript: "sample",
    title: "test",
    script: "demo"
  },
  {
    date: "foo",
    mooscript: "bar",
    title: "baz",
    script: "qux"
  },
  {
    date: "apple",
    mooscript: "banana",
    title: "cherry",
    script: "date"
  },
  {
    date: "elephant",
    mooscript: "giraffe",
    title: "hippo",
    script: "jaguar"
  },
  {
    date: "lemon",
    mooscript: "mango",
    title: "orange",
    script: "papaya"
  },
  {
    date: "carrot",
    mooscript: "broccoli",
    title: "pepper",
    script: "potato"
  },
  {
    date: "sunny",
    mooscript: "rainy",
    title: "cloudy",
    script: "windy"
  },
  {
    date: "music",
    mooscript: "art",
    title: "dance",
    script: "theater"
  },
  {
    date: "coffee",
    mooscript: "tea",
    title: "juice",
    script: "water"
  },
  {
    date: "blue",
    mooscript: "red",
    title: "green",
    script: "yellow"
  },
  {
    date: "dog",
    mooscript: "cat",
    title: "rabbit",
    script: "hamster"
  },
  {
    date: "football",
    mooscript: "basketball",
    title: "tennis",
    script: "golf"
  },
  {
    date: "book",
    mooscript: "movie",
    title: "music",
    script: "game"
  },
  {
    date: "pizza"
    , mooscript: "burger",
    title: "sushi",
    script: "pasta"
  },
  {
    date: "mountain",
    mooscript: "beach",
    title: "forest",
    script: "desert"
  }
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
    div.className = 'scripts';
    div.innerHTML = `
    <a class="title" href="${item.no || ''}.html"><p>${item.date || ''}</p> </a>
    <a href="${item.no || ''}.html"><button>Click to Read</button></a>
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
