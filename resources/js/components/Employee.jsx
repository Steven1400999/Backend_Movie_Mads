import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import { Navigate, Routes, Route } from "react-router-dom";
import { useState, useEffect } from "react";





function Employee() {

    return (
        <Routes>

            <Route path="/Proyecto_Inventario/public/Admin" element={<Menu />} />
            <Route path="/Proyecto_Inventario/public/Employee" element={<Employee />} />


        </Routes>
    );
}

export default Employee;