import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import MenuAdmin from "./MenuAdmin";
import { Routes, Route, Navigate } from "react-router-dom";

function Admin() {
  return (
    <>

      <MenuAdmin />


      
      <Routes>


        <Route path="/" element={<Card_C />} />
        <Route path="inventory" element={<Card_C/>} />
        <Route path="products" element={<Card_C />} />
        <Route path="users" element={<Card_C />} />
        <Route path="*" element={<Navigate replace to="/" />} />


      </Routes>
    </>
  );
}

export default Admin;
