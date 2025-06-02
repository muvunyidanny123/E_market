<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="fixed top-0 left-0 h-screen w-64 bg-white shadow-lg">
            <div class="p-4">
                <h1 class="text-2xl font-bold text-gray-800">E-commerce</h1>
            </div>
            <nav class="mt-4">
                <ul class="space-y-2">
                    <li>
                        <a href="<?php echo BASE_URL; ?>product" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-box mr-3"></i>
                            Products
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="ml-64 flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Products</h1>
                <div class="flex space-x-4">
                    <a href="<?php echo BASE_URL; ?>product/add" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Add New Product
                    </a>
                </div>
            </div>
            
            <?php if (isset($success)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <!-- Filters and Search -->
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <div class="grid grid-cols-4 gap-4">
                    <input type="text" id="searchInput" placeholder="Search products..." 
                        class="px-4 py-2 border rounded-lg">
                    <select id="categoryFilter" class="px-4 py-2 border rounded-lg">
                        <option value="">All Categories</option>
                        <option value="electronics">Electronics</option>
                        <option value="clothing">Clothing</option>
                        <option value="books">Books</option>
                    </select>
                    <select id="statusFilter" class="px-4 py-2 border rounded-lg">
                        <option value="">All Status</option>
                        <option value="in_stock">In Stock</option>
                        <option value="out_of_stock">Out of Stock</option>
                        <option value="low_stock">Low Stock</option>
                    </select>
                    <button id="applyFilters" 
                        class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                        Apply Filters
                    </button>
                </div>
            </div>

            <!-- Product Table -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Product</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">SKU</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="productTableBody" class="bg-white divide-y divide-gray-200">
                        <?php if(isset($products) && !empty($products)): ?>
                            <?php foreach($products as $product): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <?php echo htmlspecialchars($product['product_name']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php echo htmlspecialchars($product['sku']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php echo htmlspecialchars($product['category']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $<?php echo htmlspecialchars($product['regular_price']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php echo htmlspecialchars($product['stock_quantity']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php 
                                        $statusClass = 'bg-green-100 text-green-800';
                                        $statusText = 'In Stock';
                                        
                                        if($product['stock_quantity'] <= 0) {
                                            $statusClass = 'bg-red-100 text-red-800';
                                            $statusText = 'Out of Stock';
                                        } elseif($product['stock_quantity'] <= $product['low_stock_alert']) {
                                            $statusClass = 'bg-yellow-100 text-yellow-800';
                                            $statusText = 'Low Stock';
                                        }
                                        ?>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo $statusClass; ?>">
                                            <?php echo $statusText; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="<?php echo BASE_URL; ?>product/edit/<?php echo $product['id']; ?>" 
                                           class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <a href="<?php echo BASE_URL; ?>product/delete/<?php echo $product['id']; ?>" 
                                           class="text-red-600 hover:text-red-900 ml-4"
                                           onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">
                                    No products found.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('applyFilters').addEventListener('click', function() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const statusFilter = document.getElementById('statusFilter').value;
            
            const rows = document.querySelectorAll('#productTableBody tr');
            
            rows.forEach(row => {
                const productName = row.cells[0].textContent.toLowerCase();
                const category = row.cells[2].textContent.toLowerCase();
                const status = row.cells[5].textContent.trim().toLowerCase();
                
                let showRow = true;
                
                if (searchTerm && !productName.includes(searchTerm)) {
                    showRow = false;
                }
                
                if (categoryFilter && category !== categoryFilter) {
                    showRow = false;
                }
                
                if (statusFilter) {
                    const statusMap = {
                        'in_stock': 'in stock',
                        'out_of_stock': 'out of stock',
                        'low_stock': 'low stock'
                    };
                    
                    if (status !== statusMap[statusFilter]) {
                        showRow = false;
                    }
                }
                
                row.style.display = showRow ? '' : 'none';
            });
        });
    </script>
</body>
</html>
