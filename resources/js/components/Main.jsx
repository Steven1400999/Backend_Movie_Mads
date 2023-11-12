import React from "react";
import UserItem from "./UserItem";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import MenuAdmin from "./MenuAdmin";
import InventoryAdmin from "./InventoryAdmin";

import { Navigate, Routes, Route } from "react-router-dom";
import MenuEmployee from "./MenuEmployee";
import InventoryAdminUpdateForm from "./InventoryAdminUpdateForm";
import InventoryAdminStoreForm from "./InventoryAdminStoreForm";
import ProductsAdmin from "./ProductsAdmin";
import ProductAdminUpdateForm from "./ProductAdminUpdateForm";
import ProductAdminStoreForm from "./ProductAdminStoreForm";
import ProductAdminCategories from "./ProductAdminCategories";
import ProductCategoriesAdminStoreForm from "./ProductCategoriesAdminStoreForm";
import UserStore from "./UserStore";
import InventoryAdminSupplierForm from "./InventoryAdminSupplierForm"

const Logout = () => {
 
  return <Navigate to="/Proyecto_Inventario/public/" />;
};

function Main() {

  return (
    <Routes>

//Login
      <Route path="/Proyecto_Inventario/public/" element={<Login />} />

//Admin
      <Route path="/Proyecto_Inventario/public/Admin" element={<MenuAdmin />} >

        <Route index element={<ListCards />} />
        <Route path="home" element={<ListCards />} />
        <Route path="inventory" element={<InventoryAdmin />} />
        <Route path="products" element={<ProductsAdmin />} />
        <Route path="users" element={<ListCards />} />
        <Route path="logout" element={<Logout />} />


        
        <Route path="*" element={<Navigate replace to="/" />} />
      </Route >


      <Route path="/Proyecto_Inventario/public/Admin/update_form" element={<InventoryAdminUpdateForm  />} />
      <Route path="/Proyecto_Inventario/public/Admin/store_form" element={<InventoryAdminStoreForm  />} />
      <Route path="/Proyecto_Inventario/public/Admin/store_supplier_form" element={<InventoryAdminSupplierForm/>} />


      <Route path="/Proyecto_Inventario/public/Admin/product_update_form" element={<ProductAdminUpdateForm  />} />
      <Route path="/Proyecto_Inventario/public/Admin/product_store_form" element={<ProductAdminStoreForm />} />
      <Route path="/Proyecto_Inventario/public/Admin/product_categories" element={<ProductAdminCategories />} />
      <Route path="/Proyecto_Inventario/public/Admin/product_categories_store_form" element={<ProductCategoriesAdminStoreForm />} />

      <Route path="/Proyecto_Inventario/public/Admin/user_store_form" element={<UserStore/>} />


//Employee

      <Route path="/Proyecto_Inventario/public/Employee" element={<MenuEmployee />}>

        <Route index element={<ListCards />} />
        <Route path="home" element={<ListCards />} />
        <Route path="inventory" element={<UserItem />} />
        <Route path="products" element={<ListCards />} />
        <Route path="users" element={<ListCards />} />
        <Route path="logout" element={<Logout />} />

        <Route path="*" element={<Navigate replace to="/" />} />
      </Route >







    </Routes>
  );
}

export default Main;