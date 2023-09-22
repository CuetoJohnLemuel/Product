<?php 
namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use CodeIgniter\Controller;
class ProductCrud extends Controller
{
    // show users list
    public function index(){
        $ProductModel = new ProductModel();
        $data['table_products'] = $ProductModel->orderBy('id', 'DESC')->findAll();
        return view('product_view', $data);
    }
    // add user form
    public function create(){
        $categoryModel = new CategoryModel();
        
        $data = [
            'categories' => $categoryModel->getCategories(),
        ];
        return view('add_product', $data);
        
    }
 
    // insert data
    public function store() {
        $ProductModel = new ProductModel();
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription'  => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        $ProductModel->insert($data);
        return $this->response->redirect(site_url('/products-list'));
    }
    // show single user
    public function singleUser($id = null){
        $categoryModel = new CategoryModel();
        $ProductModel = new ProductModel();
        $data=['table_products' => $ProductModel->where('id', $id)->first(),
              'categories' => $categoryModel->getCategories(),
    ];
        return view('edit_view', $data);
    }
    // update user data
    public function update($id=null) {
        $ProductModel = new ProductModel();
        $id = $this->request->getVar('id');
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription'  => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        $ProductModel->where('id', $id)->set($data)->update(); // Add the where clause
        return $this->response->redirect(site_url('/products-list'));
    }
 
    // delete user
    public function delete($id = null){
        $ProductModel = new ProductModel();
        $data['table_products'] = $ProductModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/products-list'));
    }    
}