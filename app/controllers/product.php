<?php
class Product extends Controller{
    private $data = [];
    private $model;
    
    public function __construct(){
        parent::__construct();
        $this->model = new Product_model();
    }

    public function index(){
        // Make sure we're getting products from the model
        $this->data['products'] = $this->model->getAll();
        
        // Add a debug message to verify data is being loaded
        $this->data['debug'] = "Controller is working";
        
        // Render the view with the data
        $this->view->render("products/index", $this->data);
    }
    
    
    public function add(){
        if(isset($_POST['submit'])){
            $productData = [
                'product_name' => $_POST['productName'],
                'sku' => $_POST['sku'],
                'category' => $_POST['category'],
                'brand' => $_POST['brand'],
                'regular_price' => $_POST['regularPrice'],
                'sale_price' => $_POST['salePrice'],
                'tax_rate' => $_POST['taxRate'],
                'stock_quantity' => $_POST['stockQuantity'],
                'low_stock_alert' => $_POST['lowStockAlert'],
                'description' => $_POST['description']
            ];
            
            // Check if SKU exists
            if($this->model->skuExists($_POST['sku'])){
                $this->data['error'] = "This SKU already exists. Please use a unique SKU.";
            } else {
                $result = $this->model->saveProduct($productData);

                if($result){
                    $this->data['success'] = "Product added successfully!";
                } else {
                    $this->data['error'] = "Error adding product.";
                }
            }
        }
        
        $this->view->render("products/add-product", $this->data);
    }
    
    public function edit($id = null){
        if(!$id){
            $id = isset($_GET['id']) ? $_GET['id'] : null;
        }
        
        if(!$id){
            header("Location: " . BASE_URL . "product");
            exit();
        }
        
        $product = $this->model->getOne($id);
        if(!$product){
            header("Location: " . BASE_URL . "product");
            exit();
        }
        
        $this->data['product'] = $product;
        
        if(isset($_POST['submit'])){
            $productData = [
                'id' => $id,
                'product_name' => $_POST['productName'],
                'sku' => $_POST['sku'],
                'category' => $_POST['category'],
                'brand' => $_POST['brand'],
                'regular_price' => $_POST['regularPrice'],
                'sale_price' => $_POST['salePrice'],
                'tax_rate' => $_POST['taxRate'],
                'stock_quantity' => $_POST['stockQuantity'],
                'low_stock_alert' => $_POST['lowStockAlert'],
                'description' => $_POST['description']
            ];
            
            $result = $this->model->update($productData);
            if($result){
                $this->data['success'] = "Product updated successfully!";
                $this->data['product'] = $this->model->getOne($id); // Refresh product data
            } else {
                $this->data['error'] = "Error updating product.";
            }
        }
        
        $this->view->render("products/edit-product", $this->data);
    }
    
    public function delete($id = null){
        if(!$id){
            $id = isset($_GET['id']) ? $_GET['id'] : null;
        }
        
        if($id){
            $result = $this->model->delete($id);
            if($result){
                $this->data['success'] = "Product deleted successfully!";
            } else {
                $this->data['error'] = "Error deleting product.";
            }
        }
        
        header("Location: " . BASE_URL . "product");
        exit();
    }
}
