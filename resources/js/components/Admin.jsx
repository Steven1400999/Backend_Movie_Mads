import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import MenuAdmin from "./MenuAdmin";
import { Navigate, Routes, Route } from "react-router-dom";

function Admin() {
    return (
        <>

            <Routes>
                <Route path="/Proyecto_Inventario/public/Admin/*" element={<MenuAdmin />}>
                    <Route path="inventory" element={<Card_C />} />
                    <Route path="products" element={<ListCards />} />
                    <Route path="users" element={<ListCards />} />
                    <Route  path="catch-all" element={<Navigate replace to="/" />}/>

                </Route>
            </Routes>
        </>
    );
}

export default Admin;
