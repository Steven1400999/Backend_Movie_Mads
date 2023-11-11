import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import MenuAdmin from "./MenuAdmin";
import InventoryAdmin from "./InventoryAdmin";

import { Navigate, Routes, Route } from "react-router-dom";
import MenuEmployee from "./MenuEmployee";
import InventoryAdminUpdateForm from "./InventoryAdminUpdateForm";

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
        <Route path="products" element={<ListCards />} />
        <Route path="users" element={<ListCards />} />
        <Route path="logout" element={<Logout />} />


        
        <Route path="*" element={<Navigate replace to="/" />} />
      </Route >


      <Route path="/Proyecto_Inventario/public/Admin/update_form" element={<InventoryAdminUpdateForm />} />


//Employee

      <Route path="/Proyecto_Inventario/public/Employee" element={<MenuEmployee />}>

        <Route index element={<ListCards />} />
        <Route path="home" element={<ListCards />} />
        <Route path="inventory" element={<Card_C />} />
        <Route path="products" element={<ListCards />} />
        <Route path="users" element={<ListCards />} />
        <Route path="logout" element={<Logout />} />

        <Route path="*" element={<Navigate replace to="/" />} />
      </Route >







    </Routes>
  );
}

export default Main;