// Toggle sidebar visibility
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
  }
  
  // Load frequently visited sites from JSON file
// Load frequently visited sites from JSON file
function loadFrequentlyVisited() {
  // Make an AJAX request to fetch JSON data
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const visitsData = JSON.parse(xhr.responseText);

      // Get the frequently visited list element
      const frequentlyVisitedList = document.getElementById('frequentlyVisitedList');

      // Clear any existing list items
      frequentlyVisitedList.innerHTML = '';

      // Iterate over the visits data and create list items for frequently visited pages
      for (const pageURL in visitsData) {
        const visitCount = visitsData[pageURL];

        // Create a list item for each page
        const listItem = document.createElement('li');

        // Create a link element
        const link = document.createElement('a');
        link.href = pageURL;

        // Create a new DOM object to extract the H1 tag
        const dom = document.createElement('div');
        dom.innerHTML = visitCount;

        // Get the H1 tag from the DOM object
        const h1Tag = dom.querySelector('h1');

        // Set the link text as the H1 tag text
        link.textContent = h1Tag ? h1Tag.textContent : pageURL;

        // Append the link to the list item
        listItem.appendChild(link);

        // Append the list item to the frequently visited list
        frequentlyVisitedList.appendChild(listItem);
      }
    }
  };
  xhr.open('GET', '../visits/count.json', true);
  xhr.send();
}

  
  // Load frequently visited sites when the sidebar is clicked
  const frequentlyVisitedDropdown = document.getElementById('frequentlyVisitedDropdown');
  frequentlyVisitedDropdown.addEventListener('click', loadFrequentlyVisited);
  