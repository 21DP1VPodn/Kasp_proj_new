document.addEventListener('DOMContentLoaded', () => {
  const filterButton = document.querySelector('.filter');
  const filterMenu = document.getElementById('filter-menu');
  const sortAscCheckbox = document.getElementById('sort-asc');
  const sortDescCheckbox = document.getElementById('sort-desc');
  const classFilterCheckboxes = document.querySelectorAll('input[name="class-filter"]');
  const subsContainer = document.querySelector('.subs');
  const containers_base = Array.from(subsContainer.getElementsByClassName('box'));
  
    // Toggle the filter menu visibility when the filter button is clicked
    filterButton.addEventListener('click', (event) => {
      event.stopPropagation(); // Prevent the click event from bubbling up
      filterMenu.style.display = filterMenu.style.display === 'block' ? 'none' : 'block';
    });
  
    // Close the dropdown menu if the user clicks outside of it
    window.addEventListener('click', (event) => {
      if (!event.target.closest('.filters')) { // Check if the click is outside the filter area
        filterMenu.style.display = 'none';
      }
    });
  
    // Sort containers in alphabetical order when the sortAscCheckbox is changed
    sortAscCheckbox.addEventListener('change', () => {
      if (sortAscCheckbox.checked) {
        sortDescCheckbox.checked = false; // Uncheck the descending sort checkbox
        sortContainers('asc'); // Sort in ascending order
      } else {
        resetSorting(); // Reset to the original order
      }
    });
  
    // Sort containers in counter-alphabetical order when the sortDescCheckbox is changed
    sortDescCheckbox.addEventListener('change', () => {
      if (sortDescCheckbox.checked) {
        sortAscCheckbox.checked = false; // Uncheck the ascending sort checkbox
        sortContainers('desc'); // Sort in descending order
      } else {
        resetSorting(); // Reset to the original order
      }
    });

    // Add event listeners to class filter checkboxes
    classFilterCheckboxes.forEach(checkbox => {
      checkbox.addEventListener('change', filterContainers);
    });
  
    // Function to sort containers based on the specified order
    function sortContainers(order) {
      // Get all the boxes (containers) inside the subs container
      const containers = Array.from(subsContainer.getElementsByClassName('box'));
  
      // Sort the containers based on the text content of the buttontext elements
      containers.sort((a, b) => {
        const textA = a.querySelector('.buttontext').textContent.trim().toUpperCase();
        const textB = b.querySelector('.buttontext').textContent.trim().toUpperCase();
        if (order === 'asc') {
          return textA < textB ? -1 : textA > textB ? 1 : 0;
        } else {
          return textA > textB ? -1 : textA < textB ? 1 : 0;
        }
      });
  
      // Clear the subs container and append the sorted containers
      subsContainer.innerHTML = '';
      containers.forEach(container => subsContainer.appendChild(container));
    }
  
     // Function to filter containers based on selected classes
    function filterContainers() {
      const activeFilters = Array.from(classFilterCheckboxes)
      .filter(checkbox => checkbox.checked)
      . map(checkbox => checkbox.value);

      const containers = Array.from(subsContainer.getElementsByClassName('box'));
    
      containers.forEach(container => {
        const buttonText = container.querySelector('.buttontext').textContent.toLowerCase();
        const matchesFilter = activeFilters.some(filter => buttonText.includes(filter));
        container.style.display = matchesFilter || activeFilters.length === 0 ? '' : 'none';
    });
  }

    // Function to reset the containers to their original order
    function resetSorting() {
      const containers = Array.from(subsContainer.getElementsByClassName('box'));
      
      // Clear the subs container and re-append the containers in their original order
      subsContainer.innerHTML = '';
      containers_base.forEach(container => subsContainer.appendChild(container));
    }
  });