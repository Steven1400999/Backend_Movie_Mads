import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import MenuAdmin from "./MenuAdmin";
import Login from "./Login";
import { Navigate, Routes, Route } from "react-router-dom";
import { useState, useEffect } from "react";


function Admin() {

    return (
        <>
<section>
    
    
<MenuAdmin/>


<Routes>

<Route path="/Proyecto_Inventario/public/Admin/inventory" element={<Card_C/>}/>
<Route path="/Proyecto_Inventario/public/Admin/products" element={<ListCards/>}/>
<Route path="/Proyecto_Inventario/public/Admin/products/users" element={<Card_C/>}/>

</Routes>

</section>

</>

    );
    }
export default Admin;