<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Platform - Streamline Your Online Business</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600">E-commerce</a>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- <a href="#features" class="text-gray-600 hover:text-blue-600">Features</a>
                    <a href="#pricing" class="text-gray-600 hover:text-blue-600">Pricing</a>
                    <a href="#testimonials" class="text-gray-600 hover:text-blue-600">Testimonials</a> -->
                    <a href="<?php echo BASE_URL; ?>product" class="px-4 py-2 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50">Product</a>
                    <!-- <a href="./register.html" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Get Started</a> -->
                    <!-- Update the cart icon section in nav -->
<div class="relative">
    <a href="./cart.html" class="text-gray-600 hover:text-blue-700">
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-count absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
    </a>
</div>

                </div>
            </div>
        </div>
    </nav>

 <!-- Product Filters -->
 <div class="pt-20">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="flex justify-between items-center">
            <div class="flex space-x-4">
                <select class="border rounded-lg px-4 py-2">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
                <select class="border rounded-lg px-4 py-2">
                    <option>Category: All</option>
                    <option>Electronics</option>
                    <option>Fashion</option>
                    <option>Home & Living</option>
                </select>
            </div>
            <div class="flex items-center">
                <span class="text-gray-600">Showing 1-20 of 100 products</span>
            </div>
        </div>
    </div>
</div>

<!-- Product Grid -->
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- MacBook Pro -->
   <!-- MacBook Pro -->
<div id="product-1" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" alt="MacBook Pro M2" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-sm">-15%</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">MacBook Pro M2</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$1299</span>
                <span class="text-sm text-gray-500 line-through ml-2">$1499</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(1)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Smart TV -->
<div id="product-2" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1593359677879-a4bb92f829d1" alt="4K Smart TV" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded-full text-sm">New</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">55" 4K Smart TV</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$699</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(2)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Designer Handbag -->
<div id="product-3" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3" alt="Designer Handbag" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-purple-500 text-white px-2 py-1 rounded-full text-sm">Luxury</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Designer Leather Handbag</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$299</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(3)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Gaming Console -->
<div id="product-4" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1606144042614-b2417e99c4e3" alt="PS5 Console" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">PS5 Gaming Console</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$499</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(4)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Wireless Earbuds -->
<div id="product-5" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df" alt="Wireless Earbuds" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-sm">-20%</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Pro Wireless Earbuds</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$159</span>
                <span class="text-sm text-gray-500 line-through ml-2">$199</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(5)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Smart Watch -->
<div id="product-6" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a" alt="Smart Watch" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded-full text-sm">New</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Premium Smart Watch</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$249</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(6)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Digital Camera -->
<div id="product-7" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32" alt="Digital Camera" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">4K Digital Camera</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$799</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(7)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Running Shoes -->
<div id="product-8" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0" alt="Running Shoes" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-sm">-30%</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Pro Running Shoes</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$129</span>
                <span class="text-sm text-gray-500 line-through ml-2">$189</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(8)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Coffee Maker -->
<div id="product-9" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://i5.walmartimages.com/asr/66b84390-60a2-45bb-99f4-084afa6af5cb.05b53ed1a670a2e68073857579954054.jpeg" alt="Coffee Maker" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Smart Coffee Maker</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$89</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(9)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Bluetooth Speaker -->
<div id="product-10" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1" alt="Bluetooth Speaker" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Portable Speaker</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$79</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(10)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Tablet -->
<div id="product-11" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0" alt="Tablet" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded-full text-sm">New</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Pro Tablet 12.9"</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$399</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(11)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Designer Sunglasses -->
<div id="product-12" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083" alt="Sunglasses" class="w-full h-64 object-cover">
        <span class="absolute top-2 right-2 bg-purple-500 text-white px-2 py-1 rounded-full text-sm">Luxury</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Designer Sunglasses</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$199</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(12)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Robot Vacuum -->
<div id="product-13" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQjZ1EYJRLSfRUJSoKAicD2gqY5Cy9nscPKg&s" alt="Robot Vacuum" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Smart Robot Vacuum</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$299</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(13)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Fitness Tracker -->
<div id="product-14" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1575311373937-040b8e1fd5b6" alt="Fitness Tracker" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Fitness Smart Band</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$99</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(14)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Air Purifier -->
<div id="product-15" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd" alt="Air Purifier" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Smart Air Purifier</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$149</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(15)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Premium Headphones -->
<div id="product-16" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e" alt="Headphones" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Premium Headphones</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$349</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(16)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Smart Home Hub -->
<div id="product-17" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1558089687-f282ffcbc126" alt="Smart Home Hub" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Smart Home Hub</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$129</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(17)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Portable SSD -->
<div id="product-18" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b" alt="Portable SSD" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">1TB Portable SSD</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$159</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(18)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Designer Watch -->
<div id="product-19" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314" alt="Designer Watch" class="w-full h-64 object-cover">

        <span class="absolute top-2 right-2 bg-purple-500 text-white px-2 py-1 rounded-full text-sm">Luxury</span>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Designer Watch</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$599</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(19)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>

<!-- Drone -->
<div id="product-20" class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1579829366248-204fe8413f31" alt="Drone" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">4K Camera Drone</h3>
        <div class="flex justify-between items-center mb-2">
            <div>
                <span class="text-xl font-bold text-blue-600">$699</span>
            </div>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <button onclick="handleAddToCart(20)" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
    </div>
</div>
</div>
   
    
</div>

<!-- Pagination -->
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex justify-center space-x-2">
        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Previous</button>
        <button class="px-4 py-2 border rounded-lg bg-blue-600 text-white">1</button>
        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">2</button>
        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">3</button>
        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Next</button>
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">E-commerce</h4>
                    <p class="text-gray-400">Your complete e-commerce solution for online business success.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Features</a></li>
                        <li><a href="#" class="hover:text-white">Pricing</a></li>
                        <li><a href="#" class="hover:text-white">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">About</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 E-commerce. All rights reserved.</p>
            </div>
        </div>
    </footer>
<!-- Add this before </body> -->
<div id="cartOverlay" class="fixed right-0 top-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50">
    <div class="p-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Shopping Cart</h2>
            <button onclick="toggleCart()" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div id="cartItems" class="space-y-4 max-h-[calc(100vh-200px)] overflow-y-auto">
            <!-- Cart items will be dynamically inserted here -->
        </div>
        
        <div class="border-t mt-4 pt-4">
            <div class="flex justify-between items-center mb-4">
                <span class="font-semibold">Total:</span>
                <span class="font-bold text-xl text-blue-600 cart-total">$0.00</span>
            </div>
            <button onclick="proceedToCheckout()" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Proceed to Checkout
            </button>
        </div>
    </div>
</div>

<!-- Add these before closing body tag -->
<script src="./assets/js/cart.js"></script>
<script src="./assets/js/cart-overlay.js"></script>

</body>
</html>
