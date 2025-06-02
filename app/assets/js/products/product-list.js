// Function to apply filters
function applyFilters() {
    const searchInput = document.querySelector('input[type="text"]').value.toLowerCase();
    const categoryFilter = document.querySelector('select:nth-of-type(1)').value;
    const statusFilter = document.querySelector('select:nth-of-type(2)').value;
    
    // Get all table rows
    const rows = document.querySelectorAll('#productTableBody tr');
    
    rows.forEach(row => {
        const productName = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
        const sku = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        const category = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        const status = row.querySelector('td:nth-child(6) span').textContent.trim().toLowerCase();
        
        // Check if row matches all active filters
        const matchesSearch = searchInput === '' || 
                             productName.includes(searchInput) || 
                             sku.includes(searchInput);
        
        const matchesCategory = categoryFilter === '' || 
                               category.toLowerCase() === categoryFilter.toLowerCase();
        
        const matchesStatus = statusFilter === '' || 
                             status === statusFilter.replace('_', ' ').toLowerCase();
        
        // Show or hide row based on filter matches
        if (matchesSearch && matchesCategory && matchesStatus) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Add event listeners for real-time filtering
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[type="text"]');
    const categorySelect = document.querySelector('select:nth-of-type(1)');
    const statusSelect = document.querySelector('select:nth-of-type(2)');
    
    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }
    
    if (categorySelect) {
        categorySelect.addEventListener('change', applyFilters);
    }
    
    if (statusSelect) {
        statusSelect.addEventListener('change', applyFilters);
    }
    
    // Add confirmation for delete actions
    const deleteLinks = document.querySelectorAll('a[href*="action=delete"]');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (!confirm('Are you sure you want to delete this product?')) {
                e.preventDefault();
            }
        });
    });
});
